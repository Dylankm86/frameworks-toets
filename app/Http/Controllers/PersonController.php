<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('.index', compact('people'));
    }

    public function create()
    {
        return view('.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        Person::create($validatedData);
        return redirect()->route('person.index');
    }

    public function edit($id)
    {
        $person = Person::find($id);
        return view('.edit', compact('person'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'street' => 'required',
            'home_nr' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'phone_nr' => 'required',
        ]);

        Person::find($id)->update($validatedData);
        return redirect()->route('person.index');
    }

    public function destroy($id)
    {
        Person::find($id)->delete();
        return redirect()->route('person.index');
    }
}
