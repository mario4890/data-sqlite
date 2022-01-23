<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(People $peopleObj)
    {
        return $peopleObj->all();
    }

    /**
     * Creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, People $peopleObj): void
    {
        $peopleObj->newEntity($request->name, $request->surname);
    }



    /**
     * Remove the specified resource from database.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, People $peopleObj)
    {
        $people = $peopleObj->getByID($request->id);
        $people->delete();
    }
}
