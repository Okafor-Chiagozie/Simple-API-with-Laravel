<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Api\V1\Person;
use App\Http\Requests\StorePersonRequest;
use App\Http\Requests\UpdatePersonRequest;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{
   public function __construct() {
      $this->middleware(["auth:sanctum", "ability:user-access"])->except(["store"]);
      // $this->middleware(["auth:sanctum", "abilities:user-access"])->except(["store"]);
      // $this->middleware("auth:sanctum")->except(["store"]);
   }

   /**
    * Display a listing of the resource.
    */
   public function index()
   {
      return PersonResource::collection(Person::all());
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(StorePersonRequest $request)
   {
      $newPerson = Person::create($request->validated());

      return PersonResource::make($newPerson);
   }

   /**
    * Display the specified resource.
    */
   public function show(Person $person)
   {
      return PersonResource::make($person);
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(UpdatePersonRequest $request, Person $person)
   {
      $person->update($request->validated());

      return PersonResource::make($person);
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(Person $person)
   {
      
      return $person->delete();
   }
}
