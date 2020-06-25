<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        if ($this->route()->named('users.store')) {
            $rules = [
                'name' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
                'role_id' => ['required'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ];
        };  

        if ($this->route()->named('users.update')) {
            $rules = [
                'name' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:100', Rule::unique('users')->ignore($this->route()->parameter('user')->id)],
                'role_id' => ['required'],
                'password' => ['nullable', 'string', 'min:6', 'confirmed'],
            ];
        };

        return $rules;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'логин',
            'email' => 'e-mail',
            'role_id' => 'роль',
            'password' => 'пароль'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'max' => 'Максимальная длина поля :max символов',
            'min' => 'Минимальная длина поля :max символов',
            'confirmed' => 'Пароли не совпадают'
        ];
    }
}
