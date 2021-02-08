<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class TaskController extends Controller
{
  public function index() {

      $tasks = Task::all();

      return view("pages.tasks", compact("tasks"));
  }

  public function show($id) {

      $task = Task::findOrFail($id);

      return view("pages.task", compact("task"));
  }

  public function create() {
      return view("pages.task-create");
  }

  public function store(Request $request) {


      Task::create($request -> all());
      return redirect() -> route('tasks-index');

  }
  public function edit($id){

     $task = Task::findOrFail($id);

     return view('pages.edit-task' , compact('task'));
 }

 public function update(Request $request, $id){

   $task = Task::findOrFail($id);

   $task -> update($request -> all());

   return redirect() -> route('tasks-show' $id);
}


}

}
