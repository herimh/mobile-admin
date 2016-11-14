<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class MenuGroup extends Model
{
    use CrudTrait;

    protected $fillable = [
        'name', 'description', 'visible_for',
    ];

    public function menuItems(){
    	return $this->hasMany(MenuItem::class)->orderBy('order', 'ASC');
    }
}
