<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEstudianteRequest;


class EstudianteController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create(Request $request)
  {
    return view('estudiantes.create',[
      'estudiante' => new Estudiante,
      'project_id' => $request->project_id
    ]);
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(StoreEstudianteRequest $request)
  {
    Estudiante::create($request->validated());
    return redirect()->route('projects.index')->with('status','El estudiante fue asignado con éxito');
    //return redirect()->back()->with('status','El estudiante fue asignado con éxito');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    //
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy(Estudiante $estudiante)
  {
    $estudiante->delete();
    return redirect()->back()->with('status','El estudiante fue eliminado con éxito');
    //return redirect()->route('projects.index')->with('status','El estudiante fue eliminado con éxito');
  }
}
