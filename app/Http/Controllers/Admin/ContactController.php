<?php

namespace App\Http\Controllers\Admin;

use App\Models\Entities\Contact;
use Backpack\CRUD\app\Http\Controllers\CrudController;

use App\Http\Requests\StoreContactRequest as StoreRequest;
use App\Http\Requests\UpdateContactRequest as UpdateRequest;

class ContactController extends CrudController
{
    public function __construct() {
        parent::__construct();

        $this->crud->setModel(Contact::class);
        $this->crud->setRoute("admin/contact");
        $this->crud->setEntityNameStrings(trans('label.contact'), trans('label.contacts'));

        //$this->crud->setColumns(['id', 'name', 'description', 'visible_for']);

        $this->crud->addColumn(['name' => 'id', 'label' => trans('label.id')]);
        $this->crud->addColumn(['name' => 'name', 'label' => trans('label.name')]);
        $this->crud->addColumn(['name' => 'email', 'label' => trans('label.email')]);
        $this->crud->addColumn(['name' => 'phone', 'label' => trans('label.phone')]);
        $this->crud->addColumn(['name' => 'comments', 'label' => trans('label.comments')]);
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