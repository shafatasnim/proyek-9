<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username|gte:10',
            'email' => 'required'
        ];

       } 

        function messages(){
            return [
                'nama.required' => 'Field Nama Wajib Di Isi',
                'username.required' => 'Field Username Wajib Di Isi',
                'username.unique' => 'Username Tersebut Sudah Terdaftar',
                'email.required' => 'Email wajib di isi',    
            ];
        }
    }
