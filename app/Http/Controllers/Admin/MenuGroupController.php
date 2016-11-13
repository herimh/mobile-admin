<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\MenuGroup;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreMenuGroupRequest as StoreRequest;
use App\Http\Requests\UpdateMenuGroupRequest as UpdateRequest;

class MenuGroupController extends CrudController
{
    public function __construct() {
        parent::__construct();

        $this->crud->setModel(MenuGroup::class);
        $this->crud->setRoute("admin/menu_group");
        $this->crud->setEntityNameStrings(trans('label.menu_group'), trans('label.menu_groups'));

        //$this->crud->setColumns(['id', 'name', 'description', 'visible_for']);

        $this->crud->addColumn(['name' => 'id', 'label' => trans('label.id')]);
        $this->crud->addColumn(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addColumn(['name' => 'visible_for', 'type' => 'radio', 'label' => trans('label.visible_for'),
            'options' => ['client' => trans('label.client'), 'partner' => trans('label.partner')]]);


        $this->crud->addField(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => trans('label.description')]);
        $this->crud->addField(['name' => 'visible_for', 'type' => 'select_from_array',
            'label' => trans('label.visible_for'),'options' => ['client' => trans('label.client'), 'partner' => trans('label.partner')]]);
    }

    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }

}