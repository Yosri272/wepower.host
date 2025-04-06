<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OTPRequest extends FormRequest
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
<<<<<<< HEAD
            'phone' => 'required|exists:users,phone',
=======
            'phone' => 'required',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }

    public function messages(): array
    {
        $request = request();
        if ($request->is('api/*')) {
            $lan = $request->header('accept-language') ?? 'en';
            app()->setLocale($lan);
        }

        return [
<<<<<<< HEAD
            'phone.required' => __('The phone field is required.'),
            'phone.exists' => __('The selected phone is invalid.'),
=======
            'phone.required' => __('The phone or email field is required.'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}
