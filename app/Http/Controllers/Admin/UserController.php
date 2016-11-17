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
        $this->crud->addField(['name' => 'password_confirmation', 'type' => 'password', 'label' => trans('label.password_confirmation')]);
        //$this->crud->addField(['name' => 'email', 'label' => trans('label.email')]);
        $this->crud->addField(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addField(['name' => 'last_name', 'label' => trans('label.last_name')]);
        $this->crud->addField(['name' => 'level', 'label' => trans('label.level')]);
        $this->crud->addField(['name' => 'notes', 'type'=> 'ckeditor', 'label' => trans('label.notes')]);
        $this->crud->addField(['name' => 'roles', 'type' => 'selectRoles', 'label' => trans('label.roles'), 'entity' => 'roles', 'attribute' => 'name', 'model' => config('laravel-permission.models.role')]);
    }

    public function store(StoreRequest $request)
    {
         // insert item in the db
        if ($request->input('password')) {
            $item = $this->crud->create(\Request::except(['redirect_after_save']))->assignRole('User');
            // now bcrypt the password
            $item->password = bcrypt($request->input('password'));
            $item->save();
        } else {
            $item = $this->crud->create(\Request::except(['redirect_after_save', 'password']));
        }

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();
        // redirect the user where he chose to be redirected
        switch (\Request::input('redirect_after_save')) {
            case 'current_item_edit':
                return \Redirect::to($this->crud->route.'/'.$item->id.'/edit');
            default:
                return \Redirect::to(\Request::input('redirect_after_save'));
        }
        //return parent::storeCrud();
    }

    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
        
    }

}
