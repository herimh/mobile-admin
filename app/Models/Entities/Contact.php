<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class Contact extends Model
{
    use CrudTrait;

    protected $fillable = [
        'name', 'email', 'phone', 'whatsapp', 'country', 'comments', 'roles'
    ];

}
