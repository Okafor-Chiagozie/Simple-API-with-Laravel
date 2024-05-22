<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonLoginRequest;
use App\Models\Api\V1\Person;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class PersonLoginController extends Controller
{
   public function login(PersonLoginRequest $request)
   {

      if(!Auth::guard('web')->attempt($request->validated())){
         return response()->json([
            "data" => [
               "message" => "Invalid Credentials",
            ]
         ], 422);
      }

      // ❗❗$request->session()->regenerate();

      // $authToken = $request->user()->createToken("user_token", ["user-access", "admin-access"])->plainTextToken;
      $authToken = $request->user()->createToken("user_token", ["user-access"])->plainTextToken;


      // $user = Person::where("email", $request->validated()["email"])->first();

      // if (!$user || !Hash::check($request->validated()["password"], $user->password)) {
      //    throw ValidationException::withMessages([
      //       "email" => ["The provided credentials are incorrect"],
      //    ]);
      // }

      // $authToken = $user->createToken("user_token", ["user-access"])->plainTextToken;


      return response()->json([
         "data" => [
            "message" => "Successful",
            "access_token" => $authToken,
         ]
      ]);

      // User Tokens
      // 1. 1|6vrEOSmdkZVbuCQ0ygaq7BxE0SvcGfZy9eNmK9lF
      // 2. 2|tkTvTtWw8L7nLtbEM3ovmrLRbYB7m4oMd9UttfoX
      // 3. 3|XF66zRUuALk8dirTJqUiG32oQ2y56R7eSiX8cTAq
      // 4. 4|bAgY07PVdMSwPWUOn26dOM2Tb5Rnhl0HijL9d8uk
   }


   public function fallback(){
      return response()->json([
         "data" => [
            "message" => "Route dosen't exist or the current user is not authenticated",
         ]
      ]);
   }

}


