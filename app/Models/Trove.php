<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Backpack\CRUD\app\Models\Traits\HasTranslatableFields;
use Backpack\CRUD\app\Models\Traits\SpatieTranslatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Trove extends Model
{
    use CrudTrait,
        HasTranslations;


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'troves';
    protected $connection = 'trove_mysql';

    protected $translatable = [
        'title',
    ];

    protected $fillable = ['featured'];
    protected $guarded = ['id'];

    public function featuredTrove()
    {
        return $this->hasOne(FeaturedTrove::class);
    }

    public function getFeaturedAttribute()
    {
        return $this->featuredTrove()->count() > 0;
    }

}
