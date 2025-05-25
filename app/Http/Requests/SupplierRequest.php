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
            'state_id' => ['required', 'exists:states,id'],
            'city_id' => ['required', 'exists:cities,id'],
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
            'state_id.required' => 'O estado é obrigatório',
            'state_id.exists' => 'O estado selecionado é inválido',
            'city_id.required' => 'A cidade é obrigatória',
            'city_id.exists' => 'A cidade selecionada é inválida',
            'zip_code.required' => 'O CEP é obrigatório',
            'zip_code.max' => 'O CEP não pode ter mais de :max caracteres'
        ];
    }
} 