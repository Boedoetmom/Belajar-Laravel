<?php

namespace App\Http\Requests\User;

use App\Models\User;

//use gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
// The Rule only update requests
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   // create middleware at from kernel at here
        
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
            'name' => [
                'required', 'email', 'max:255',
            ],
            
            'email' => [
                'required', 'email', 'max:255', Rule::unique('users')->ignore($this->user)
            ],

            'password' => [
                'min:8', 'string', 'max:255', 'mixedCase',
            ],
        ];
    }
}
