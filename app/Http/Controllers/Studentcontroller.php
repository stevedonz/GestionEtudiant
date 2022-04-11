<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Create Form
  public function Students(Request $request) {
 $students=student::all();
        return view('students', compact('students')); 
  }

   // Store Form data in database
  public function UserForm(Request $request) {

      // Form validation
      $this->validate($request, [
          'name' => 'required',
          'email'=>'required',
          'phone_number' => 'required|email'
         
       ]);

//  Store data in database
      'App\Models\student'::create($request->all());
      //
      return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }





}