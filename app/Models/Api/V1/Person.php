<?php

namespace App\Models\Api\V1;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticable;

class Person extends Authenticable
{
   use HasFactory, HasUlids, HasApiTokens;

   // Model's table specification
   protected $table = "users_main";
   // protected $primaryKey = "id";

   protected $fillable = [
      "username", "email", "password", "country"
   ];

   protected $attributes = [
      "country" => "Nigeria",
   ];


   // For Using ULIDs
   public $incrementing = false;
   protected $keyType = "string";

   public function uniqueIds()
   {
      return ['id'];
   }


   protected $casts = [
      "password" => "hashed", 
   ];

   // public function getRouteKeyName()
   // {
   //    return "id";
   // }
   
   // public function getRouteKey()
   // {
      
   // }
}
