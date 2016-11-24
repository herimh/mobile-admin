<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class Video extends Model
{
    use CrudTrait;

    protected $fillable = [
        'title', 'description', 'url', 'menu_item_id', 'visible_for', 'url_type', 'order'
    ];

    public function menuItem(){
        return $this->belongsTo(MenuItem::class);
    }
}
