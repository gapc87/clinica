@extends('theme.backoffice.layouts.admin')

@section('title', 'Vista de show')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index') }}">Roles del sistema</a></li>
    <li>{{ $role->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Rol: </strong>{{ $role->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Usuarios con el rol de {{ $role->name }}</span>
                            <p><strong>Slug: </strong>{{ $role->slug }}</p>
                            <p><strong>Descipción: </strong>{{ $role->description }}</p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light cyan btn" href="{{ route('backoffice.role.edit', $role) }}">Editar</a>
                            <a class="waves-effect waves-light btn" href="#" onclick="enviarFormulario()">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Permisos del rol</span>
                            <table>
                                <thead>
                                <tr>
                                    <th data-field="name">Nombre</th>
                                    <th data-field="slug">Slug</th>
                                    <th data-field="description">Descripción</th>
                                    <th data-field="actions">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><a href="{{ route('backoffice.permission.show', $permission) }}">{{ $permission->name }}</a></td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td><a href="{{ route('backoffice.permission.edit', $permission) }}">Editar</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('backoffice.role.destroy', $role) }}" name="delete_form">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
@endsection

@section('foot')
    <script>
        function enviarFormulario()
        {
            Swal.fire({
                title: "¿Desea eliminar este rol?",
                text: "Esta acción no se puede deshacer",
                type: "warning",
                showCancelButton: true,
                confirmButtonText: "Continuar",
                cancelButtonText: "Cancelar",
                closeOnCancel: false,
                closeOnConfirm: true
            }).then((result) => {
                if (result.value) {
                    document.delete_form.submit();
                } else {
                    Swal.fire('Operación cancelada', 'Registro no eliminado', 'error')
                }
            });


        }
    </script>
@endsection