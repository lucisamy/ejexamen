<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    //necesario el $fillable para poder insertar masivamente esos campos desde /proyecto/crear
    protected $fillable = ['title', 'url','description'];
    //$guarded iran los campos que no queremos que se asignen masivamente
    protected $guarded = [];
    
    //sobreescribimos el metodo getRouteKeyName para poder hacer la url amigable, asi en vez de por id busca por url slug
    public function getRouteKeyName(){
      return 'url';
    }

    public function estudiantes()
    {
        return $this->hasMany('App\Models\Estudiante');
    }
}
