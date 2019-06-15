@extends('theme.backoffice.layouts.admin')

@section('title', 'Permiso')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index') }}">Roles del sistema</a></li>
    <li><a href="{{ route('backoffice.role.show', $permission->role) }}">{{ $permission->role->name }}</a></li>
    <li>{{ $permission->name }}</li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Permiso: </strong>{{ $permission->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Permiso: {{ $permission->name }}</span>
                            <p><strong>Slug: </strong>{{ $permission->slug }}</p>
                            <p><strong>Descipción: </strong>{{ $permission->description }}</p>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light cyan btn" href="{{ route('backoffice.permission.edit', $permission) }}">Editar</a>
                            <a class="waves-effect waves-light btn" href="#" onclick="enviarFormulario()">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('backoffice.permission.destroy', $permission) }}" name="delete_form">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
@endsection

@section('foot')
    <script>
        function enviarFormulario()
        {
            Swal.fire({
                title: "¿Desea eliminar este permiso?",
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