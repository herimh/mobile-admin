<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\MenuGroup;
use App\Models\Entities\MenuItem;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreMenuItemRequest as StoreRequest;
use App\Http\Requests\UpdateMenuItemRequest as UpdateRequest;

class MenuItemController extends CrudController
{
    public function __construct() {
        parent::__construct();

        $this->crud->setModel(MenuItem::class);
        $this->crud->setRoute("admin/menu_item");
        $this->crud->setEntityNameStrings('Menu Item', 'Menu Items');

        //$this->crud->setColumns(['id', 'name', 'description', 'menu_group_id','order'])
        $this->crud->addColumn(['name' => 'id', 'label' => trans('label.id')]);
        $this->crud->addColumn(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addColumn(['name' => 'menu_group', 'type'=>'select', 'label' => trans('label.menu_group'),
            'entity' => 'menuGroup', 'attribute' => 'name', 'model'=> MenuGroup::class]);
        $this->crud->addColumn(['name' => 'order', 'label' => trans('label.order')]);
        $this->crud->addColumn(['name' => 'icon', 'label' => trans('label.icon')]);
        $this->crud->addColumn(['name' => 'created_at', 'label' => trans('label.created_at')]);


        $this->crud->addField(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addField(['name' => 'menu_group_id', 'type' => 'select', 'label' => trans('label.menu_group'), 'entity' => 'menuGroup', 'attribute' => 'name', 'model' => "App\Models\Entities\MenuGroup"]);
        $this->crud->addField(['name' => 'icon', 'label' => trans('label.icon')]);
        $this->crud->addField(['name' => 'key', 'label' => trans('label.key')]);
        $this->crud->addField(['name' => 'order', 'type' => 'number', 'label' => trans('label.order')]);
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