<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'name' => 'required|string|max:50|regex:/^[\p{Script=Hiragana}\p{Script=Katakana}\p{Script=Han}]+$/u', // 漢字、ひらがな、カタカナであることのバリデーション
            'eng_name' => 'required|string|max:50|regex:/^[a-zA-Z\s]+$/', // アルファベットであることのバリデーション
            'radius' => 'required|integer',
            'weight' => 'required|integer',
        ];
    }
}
