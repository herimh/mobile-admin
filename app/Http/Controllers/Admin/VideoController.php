<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Video;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreVideoRequest as StoreRequest;
use App\Http\Requests\UpdateVideoRequest as UpdateRequest;

class VideoController extends CrudController
{
    public function __construct() {
        parent::__construct();

        $this->crud->setModel(Video::class);
        $this->crud->setRoute("admin/video");
        $this->crud->setEntityNameStrings('Video', 'Videos');

        $this->crud->setColumns(['id', 'title', 'url']);
        //$this->crud->addColumn(['name' => 'url', 'type'=>'video', 'label' => trans('label.title')]);
        $this->crud->addField(['name' => 'title', 'label' => trans('label.title')]);
        $this->crud->addField(['name' => 'url', 'label' => trans('label.url')]);
        $this->crud->addField(['name' => 'description', 'type' => 'ckeditor', 'label' => trans('label.description')]);
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
