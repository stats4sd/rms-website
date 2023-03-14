<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class FeaturedTrove extends Model
{

    use CrudTrait;

    protected $guarded = [];
    protected $connection = 'mysql';

    protected $appends = ['trove_data', 'trove_cover_image'];


    public function trove()
    {
        return $this->setConnection('trove_mysql')->belongsTo(Trove::class);
    }

    public function getTroveDataAttribute($value)
    {

        if (!$value) {

            try {
                $data = Http::get(config('app.resources_site_url') . '/api/troves/' . $this->trove_id)
                    ->throw()
                    ->json();

                    $this->trove_data = $data;
                    $this->save();
            } catch (Exception $exception) {
                return [];
            }

        }

        return $value;
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
