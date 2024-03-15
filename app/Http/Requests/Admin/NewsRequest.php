<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
        if ($this->route()->getName() === 'admin.update-news') {
            return [
                'title' => 'required|string',
                'content' => 'required|string',
                'author' => 'nullable',
                'status' => 'required|boolean',
                'descr_image' => 'nullable',
                'custom_date' => 'nullable',
            ];
        } else {
            return [
                'title' => 'required|string',
                'content' => 'required|string',
                'author' => 'nullable',
                'image' => 'required',
                'status' => 'required|boolean',
                'descr_image' => 'nullable',
                'custom_date' => 'nullable',
            ];
        }
    }

    public function prepareForValidation(): void
    {
        if (!$this->has('status')) {
            $this->merge(['status' => false]);
        }
    }
}
