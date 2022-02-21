<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{    
    public function store(Request $request) {
      $person = new Person($request->all());
      $person->save();
      
      return back();
    }
    
    public function edit($id) {
      $person = Person::find($id);
      
      return view('person.edit', compact('person'));
    }
    
    public function update(Request $request, $id) {
      $person = Person::find($id);
      $person->update($request->all()); 
      
      return back();
    }
    
    public function delete($id) {
      $person = Person::find($id);
      $person->delete();
      
      return back();
    }
}
