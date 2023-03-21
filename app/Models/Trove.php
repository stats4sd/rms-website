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


    // This model is linked to a different database.
    // This platform is intended to be installed in the same server as the main Stats4SD resources database, and so can access that database directly to retrieve the list of troves.

    protected $table = 'troves';
    protected $connection = 'trove_mysql';

    protected $translatable = [
        'title',
    ];

    public function __construct(array $attributes = [])
    {
        $this->table = config('database.connections.trove_mysql.database').'.'.$this->table;
        parent::__construct($attributes);
    }

    protected $fillable = ['featured_en', 'featured_fr', 'featured_es'];
    protected $guarded = ['id'];

    public function featuredTrove()
    {
        return $this->setConnection('mysql')->hasOne(FeaturedTrove::class, 'trove_id', 'id');
    }

    public function getFeaturedAttribute()
    {
        return $this->featuredTrove()->count() > 0;
    }

}
