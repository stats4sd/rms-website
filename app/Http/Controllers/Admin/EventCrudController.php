<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EventRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class EventCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EventCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Event::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/event');
        CRUD::setEntityNameStrings('event', 'events');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::column('start');
        CRUD::column('end');
        CRUD::column('registration_url');

        $this->crud->enableDetailsRow();
        $this->crud->setDetailsRowView('events.details-row');

    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'title' => 'required',
            'body' => 'required',
            'start' => 'required',
            'end' => 'required',
            'eventType' => 'required',
        ]);

        CRUD::field('title')->label('Event title');
        CRUD::field('eventType')
            ->type('relationship');
        CRUD::field('body')
            ->label('Event Details')
            ->type('tinymce')
            ->options([
                'menubar' => '',
                'plugins' => 'lists',
                'toolbar' => 'undo redo | styleselect | bold italic underline | bullist numlist | alignleft aligncenter alignright alignjustify | outdent indent',
            ]);
        CRUD::field('start')->label('Start time and date')->type('datetime_picker');
        CRUD::field('end')->label('End time and date')->type('datetime_picker');;


        CRUD::field('custom_html')
            ->type('custom_html')
            ->value('<h4>Joining Instructions</h4><p>Each event type has some default joining instructions. You can add custom ones for this event below if required.</p>');


        CRUD::field('joining_instructions_default')
            ->type('joining_instructions');

        CRUD::field('joining_instructions')
            ->type('textarea')
            ->label('Custom joining instructions')
            ->hint('leave blank to use the default instructions');


        CRUD::field('registration_url')
            ->type('text')
            ->label('Custom registration_url')
            ->hint('leave blank to use the default url');

        CRUD::field('eventResources')
            ->type('relationship')
            ->relationship('eventResources')
            ->subfields([
                [
                    'name' => 'title',
                ],
                [
                    'name' => 'url'
                ]
            ]);
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
