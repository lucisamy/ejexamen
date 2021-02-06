<h1>Estudiantes asignados:</h1>
<table border=1>
  <tr>
    <th>Nombre</th>
    <th>DNI</th>
  </tr>
  @forelse ($estudiantes as $estudiante)
  <tr>
    <td>{{ $estudiante->nombre }}</td>
    <td>{{ $estudiante->dni }}</td>
    <td>
      <form method="POST" action="{{ route('estudiantes.destroy', $estudiante) }}">
        @csrf
        @method('DELETE')
        <button>Eliminar Estudiante</button>
      </form>
    </td>
  </tr>
  @empty
  <tr><td>No hay estudiantes asignados</td></tr>
  @endforelse
</table>
