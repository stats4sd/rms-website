<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TroveRequest;
use App\Models\FeaturedTrove;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\EditableColumns\Http\Controllers\Operations\MinorUpdateOperation;
use Illuminate\Support\Facades\DB;

/**
 * Class TroveCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TroveCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use MinorUpdateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Trove::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/trove');
        CRUD::setEntityNameStrings('trove', 'troves');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->setResponsiveTable(false);

        $featuredTroveIds = FeaturedTrove::select('trove_id')->get()->pluck('trove_id')->toArray();

        // only get the latest published version of a trove
        $this->crud->query->whereNull('new_version_id')
            ->whereNotNull('published_at');

        CRUD::filter('featured')
            ->type('simple')
            ->ifActive(function () use ($featuredTroveIds) {
                $this->crud->query = $this->crud->query->whereIn('id', $featuredTroveIds);
            });


        CRUD::column('featured')
            ->type('editable_checkbox');

        CRUD::column('title')->limit(500)
            ->wrapper([
                'href' => function ($crud, $column, $entry) {
                    return url('https://stats4sd.org/resources/' . $entry->id);
                }]);

    }


    public function saveMinorUpdateEntry()
    {

        // custom logic for a user adding themselves to a project
        $entry = $this->crud->getModel()->find(request('id'));

        if (request('value') === "1") {
            FeaturedTrove::updateOrCreate([
                'trove_id' => $entry->id,
            ]);
        } else {
            FeaturedTrove::where('trove_id', $entry->id)->delete();
        }

        return $entry;
    }


}
