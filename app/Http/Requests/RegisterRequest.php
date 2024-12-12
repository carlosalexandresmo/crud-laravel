<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Response;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|between:8,20',
            'confirmed_password' => 'required|between:8,20|same:password',
            'street' => 'required|string',
            'district' => 'required|string',
            'street_number' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string|size:2',
            'zip_code' => 'required|digits:8',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min' => 'O campo nome deve ter pelo menos 3 caracteres.',
            'name.length' => 'O campo nome deve ter pelo menos 3 caracteres.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'O campo email informado é inválido.',
            'email.unique' => 'O campo e-mail informado está em uso.',
            'password.required' => 'O campo senha é obrigatório',
            'password.between' => 'O campo senha deve conter entre 8 a 20 caracteres',
            'confirmed_password.required' => 'É necessário confirmar senha.',
            'confirmed_password.same' => 'As senhas digitadas não coincidem',
            'street.required' => 'O campo rua é obrigatório',
            'district.required' => 'O campo bairro é obrigatório',
            'street_number.required' => 'O campo número é obrigatório',
            'city.required' => 'O campo cidade é obrigatório',
            'state.required' => 'O campo estado é obrigatório',
            'zip_code.required' => 'O campo CEP é obrigatório',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['message' => $validator->errors()->first()], Response::HTTP_BAD_REQUEST));
    }
}
