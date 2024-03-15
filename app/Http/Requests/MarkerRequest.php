<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\ValidationException;

class MarkerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'land_area' => ['nullable', 'string'],
            'soil' => ['nullable', 'string'],
            'crops' => ['nullable', 'string'],
            'damage' => ['nullable', 'string'],
            'geom' => ['nullable'],
            'expert_report' => ['nullable', File::types(['pdf'])->max('20mb')],
            'level_of_damage' => ['nullable', 'string'],
            'photo' => ['nullable', File::image()->max('20mb')],
        ];
    }
}
