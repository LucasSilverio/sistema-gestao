<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SupplierRequest extends FormRequest
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
    public function rules(): array
    {
        $supplierId = $this->route('supplier')?->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', Rule::unique('suppliers')->ignore($supplierId)],
            'phone' => ['nullable', 'string', 'max:20'],
            'cnpj' => ['required', 'string', Rule::unique('suppliers')->ignore($supplierId)],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:100'],
            'state' => ['required', 'string', 'max:50'],
            'zip_code' => ['required', 'string', 'max:10']
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório',
            'name.max' => 'O nome não pode ter mais de :max caracteres',
            'email.required' => 'O e-mail é obrigatório',
            'email.email' => 'Digite um e-mail válido',
            'email.unique' => 'Este e-mail já está em uso',
            'phone.max' => 'O telefone não pode ter mais de :max caracteres',
            'cnpj.required' => 'O CNPJ é obrigatório',
            'cnpj.unique' => 'Este CNPJ já está em uso',
            'address.required' => 'O endereço é obrigatório',
            'address.max' => 'O endereço não pode ter mais de :max caracteres',
            'city.required' => 'A cidade é obrigatória',
            'city.max' => 'A cidade não pode ter mais de :max caracteres',
            'state.required' => 'O estado é obrigatório',
            'state.max' => 'O estado não pode ter mais de :max caracteres',
            'zip_code.required' => 'O CEP é obrigatório',
            'zip_code.max' => 'O CEP não pode ter mais de :max caracteres'
        ];
    }
} 