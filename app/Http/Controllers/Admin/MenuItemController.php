<?php

namespace App\Http\Controllers\Admin;

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

        $this->crud->setColumns(['id', 'name', 'description', 'menu_group_id','order']);

        $this->crud->addField(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addField(['name' => 'description', 'type' => 'textarea', 'label' => trans('label.description')]);
        $this->crud->addField(['name' => 'menu_group_id', 'type' => 'select', 'label' => trans('label.menu_group'), 'entity' => 'menuGroup', 'attribute' => 'name', 'model' => "App\Models\Entities\MenuGroup"]);
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