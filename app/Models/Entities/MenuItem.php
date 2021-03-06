<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class MenuItem extends Model
{
    use CrudTrait;

    protected $fillable = [
        'name', 'description', 'menu_group_id', 'order', 'icon', 'key'
    ];


    public function menuGroup(){
    	return $this->belongsTo(MenuGroup::class);
    }

    public function videos(){
    	return $this->hasMany(Video::class);
    }
}
