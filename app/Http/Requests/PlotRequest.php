<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlotRequest extends FormRequest
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
        if ($this->route()->named('plots.store')) {
            $rules = [
                'branch_id' => ['required', 'unique:plots'],
            ];
        };

        if ($this->route()->named('plots.update')) {
            $rules = [
                'branch_id' => ['required', Rule::unique('plots')->ignore($this->route()->parameter('plot')->id)],
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
            'branch_id' => 'участок'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'unique' => 'Выбранный :attribute уже существует в БД '
        ];
    }
}
