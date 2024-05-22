<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StorePersonRequest extends FormRequest
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
    * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
    */
   public function rules(): array
   {
      return [
         "username" => ["required", "between:1,50", "string"],
         "email" => ["required", "email", "between:6,50", "string", "unique:App\Models\Api\V1\Person"],
         "password" => ["required", "between:6,50", Password::defaults()],
         "country" => ["nullable", "string"],
      ];
   }

   public function attributes(): array
   {
      return [
         'username' => 'Username',
         'email' => 'Email Address',
         'password' => 'Password',
         'country' => 'Country',
      ];

   }
}
