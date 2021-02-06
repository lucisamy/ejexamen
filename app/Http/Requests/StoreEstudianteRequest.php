<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEstudianteRequest extends FormRequest
{
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    return [
      'nombre'=> 'required|unique:estudiantes',
      'project_id'=> 'required|exists:projects,id',
      'dni'=> 'required|min:9|max:9|unique:estudiantes'
    ];
  }

  public function messages(){
    return [
      'nombre.required' => 'El nombre es obligatorio',
      'dni.required' => 'El dni es obligatorio'
    ];
  }
}
