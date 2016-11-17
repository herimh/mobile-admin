<?php
namespace App\Http\Requests;

use Backpack\CRUD\app\Http\Requests\CrudRequest;

class UpdateUserRequest extends CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,'.$this->route('user')],
            'password' => ['required_with:password_confirmation', 'confirmed']
        ];
    }
}