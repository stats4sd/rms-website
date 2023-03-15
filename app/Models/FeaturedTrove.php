<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FeaturedTrove extends Model
{

    use CrudTrait;

    protected $guarded = [];
    protected $connection = 'mysql';

    protected $casts = [
        'trove_data' => 'array',
    ];

    protected $appends = ['trove_data', 'trove_cover_image'];


    public function trove()
    {
        return $this->setConnection('trove_mysql')->belongsTo(Trove::class);
    }

    public function getTroveDataAttribute($value)
    {

        if (!$value || $value === []) {

            try {
                $data = Http::get(config('app.resources_site_url') . '/api/troves/' . $this->trove_id)
                    ->throw()
                    ->json();

                    $this->trove_data = $data;
                    $this->save();

                    // save cover image locally;

                    if($this->getTroveCoverImageAttribute() !== '') {
                        $image = file_get_contents($this->getTroveCoverImageAttribute());
                        $name = Str::afterLast($this->getTroveCoverImageAttribute(), '/');
                        $name = Str::beforeLast($name, '?');

                        Storage::put($name, $image);

                        $this->cover_image = $name;
                        $this->save();
                    }


            } catch (Exception $exception) {


                return [];
            }

        }

        return json_decode($value, true);
    }

    public function getTroveCoverImageAttribute()
    {
        if (!$this->trove_data) {
            return '';
        }

        $coverImage = collect($this->trove_data['cover_image'])->first();

        return $coverImage ? $coverImage['original_url'] : '';
    }

}
