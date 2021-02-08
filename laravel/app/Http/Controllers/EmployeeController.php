<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;


class EmployeeController extends Controller
{
  public function index() {

      $employees = Employee::all();

      return view("pages.employees", compact("employees"));
  }

  public function show($id) {

      $employee = employee::findOrFail($id);

      return view("pages.employee", compact("employee"));
  }

  public function create() {
      return view("pages.employee-create");
  }

  public function store(Request $request) {


      Employee::create($request -> all());
      return redirect() -> route('employees-index');

  }
  public function edit($id){

     $employee = Employee::findOrFail($id);

     return view('pages.edit-employee' , compact('employee'));
 }

 public function update(Request $request, $id){

   $employee = Employee::findOrFail($id);

   $employee -> update($request -> all());

   return redirect() -> route('employees-show' $id);
}


}

}
