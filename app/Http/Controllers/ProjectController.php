<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Estudiante;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
  /**
  * Display a listing of proyectos.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('projects.index', [
      'projects' => Project::orderBy('updated_at','DESC')->get()
    ]);
  }

  /**
  * Show the form for creating a new proyecto.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('projects.create',[
      'project' => new Project
    ]);
  }

  /**
  * Store a newly created proyecto in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(StoreProjectRequest $request)
  {
    Project::create($request->validated() );
    return redirect()->route('projects.index')->with('status','El proyecto fue creado con éxito');
  }

  /**
  * Display the specified proyecto.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Project $project)
  {
    //llamamos funcion estudiantes() del model Project
    $project_estudiantes = $project->estudiantes;
    return view('projects.show',[
      'project' => $project,
      'estudiantes' => $project_estudiantes
    ]);
  }

  /**
  * Show the form for editing the specified proyecto.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Project $project)
  {
    return view('projects.edit',[
      'project' => $project
    ]);
  }

  /**
  * Update the specified proyecto in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Project $project, UpdateProjectRequest $request)
  {
    $project->update($request->validated());
    return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con éxito');
  }

  /**
  * Remove the specified proyecto from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Project $project)
  {
    $project->delete();
    return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con éxito');
  }
}
