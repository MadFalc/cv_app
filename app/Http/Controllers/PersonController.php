<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// INCLUDE THE MODEL YOU NEED HERE.
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //MET JE MODEL KUN JE JE DATA OPHALEN. ER ZIJN MEER FUNCTIES ZOALS DE ALL FUNCTION.
        $persons = Person::all();

        // OPTIONAL ATTRIBUTES TO USE IN YOUR TABLE HEADING
        $attributes = array_keys($persons->first()->toArray());

        // GEEF JE OPGEHAALDE DATA DOOR AAN JE VIEW FILE. TIP: view('map.map.file', [data])
        return view('persons.index', [
            'persons' => $persons,
            'attributes' => $attributes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'linkedin_profile' => 'required',
        ]);

        Person::create($request->all());

        return redirect()->route('person.index')
            ->with('success', 'Person created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return view('persons.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('persons.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'linkedin_profile' => 'required',
        ]);
      
        $person->update($request->all());
      
        return redirect()->route('person.index')
                        ->with('success','Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
       
        return redirect()->route('person.index')
                        ->with('success','Person deleted successfully');
    }
}