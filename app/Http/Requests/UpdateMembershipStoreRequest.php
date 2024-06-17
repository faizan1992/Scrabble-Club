<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMembershipStoreRequest extends FormRequest
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
    return [
        'name' => 'required|min:3|max:50',
        'phone' => 'required|max:20',
        'email' => 'required|email|max:50',
        'address' => 'required|max:100',
    ];
}

    public function messages()
{
    return [
        'name.required' => 'Name is required.',
        'phone.required' => 'Phone number is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'Email is incorrect.',
        'address.required' => 'Address is required.',
        'address.max' => 'Max char 100 are allowed..',
        'name.max' => 'Max char 50 are allowed.',
        'name.min' => 'Min char 50 are allowed.',
    ];
}
}
