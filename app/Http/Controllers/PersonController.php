<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return PersonResource::collection($people);
    }
}
