<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreUserRequest as StoreRequest;
use App\Http\Requests\UpdateUserRequest as UpdateRequest;

class UserController extends CrudController
{
    public function __construct() {
        parent::__construct();

        $this->crud->setModel(User::class);
        $this->crud->setRoute("admin/user");
        $this->crud->setEntityNameStrings('user', 'users');

        $this->crud->setColumns(['id', 'email', 'name', 'last_name', 'level', 'notes', 'created_at', 'updated_at']);
        $this->crud->addField(['name' => 'email', 'label' => trans('label.email')]);
        $this->crud->addField(['name' => 'password', 'type' => 'password', 'label' => trans('label.password')]);
        //$this->crud->addField(['name' => 'email', 'label' => trans('label.email')]);
        $this->crud->addField(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addField(['name' => 'last_name', 'label' => trans('label.last_name')]);
        $this->crud->addField(['name' => 'level', 'label' => trans('label.level')]);
        $this->crud->addField(['name' => 'notes', 'type'=> 'ckeditor', 'label' => trans('label.notes')]);
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
