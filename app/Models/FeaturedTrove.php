<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    protected static function booted()
    {
        parent::booted();

        static::saved(static function ($featuredTrove) {

            $featuredTrove->trove_data = Http::get(config('app.resources_site_url') . '/api/troves/' . $featuredTrove->trove_id)
                ->throw()
                ->json();

            $coverImageData = collect($featuredTrove->trove_data['cover_image'])->first();

            $coverImage = $coverImageData ? $coverImageData['original_url'] : '';

            $image = file_get_contents($coverImage);
            $name = Str::afterLast($coverImage, '/');
            $name = Str::beforeLast($name, '?');

            Storage::disk('public')->put($name, $image);

            $featuredTrove->cover_image = $name;
            $featuredTrove->saveQuietly();
        });
    }


    public function trove(): BelongsTo
    {
        return $this->setConnection('trove_mysql')->belongsTo(Trove::class);
    }
}
