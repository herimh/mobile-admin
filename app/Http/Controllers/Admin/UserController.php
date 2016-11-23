<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreUserRequest as StoreRequest;
use App\Http\Requests\UpdateUserRequest as UpdateRequest;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController;

class UserController extends UserCrudController
{
    public function __construct()
    {
        parent::__construct();

         $this->crud->addField([
             'name'  => 'last_name',
             'label' => trans('label.last_name'),
             'type'  => 'text',
         ]);
    }
}