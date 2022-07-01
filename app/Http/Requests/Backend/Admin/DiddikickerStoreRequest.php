<?php

namespace App\Http\Requests\Backend\Admin;

use Illuminate\Foundation\Http\FormRequest;
use RealRashid\SweetAlert\Facades\Alert;

class DiddikickerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        return [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'parents_first_name' => 'required|max:50',
            'parents_last_name' => 'required|max:50',
            'date_of_birth' => 'required|date_format:Y-m-d',
            'telephone' => 'required|max:20',
            'email' => 'required|email|max:50',
            'address' => 'required|max:50',
            'venue' => 'required|max:50',
            'class_name' => 'required|max:50',
            'facebook_name' => 'required|max:50',
            'allergies' => 'required|max:50',
            'status' => 'required|max:50',
            'how_enquired' => 'required|max:50',
            'date_enquired' => 'required|max:50',
            'heard_about_us' => 'required|max:10',
            'direct_debit_day' => 'required|max:50',
            'note' => 'required|max:1000'
        ];

    }

}
