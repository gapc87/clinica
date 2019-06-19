@extends('theme.backoffice.layouts.admin')

@section('title', $user->name)

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index') }}">Usuarios del sistema</a></li>
    <li>{{ $user->name }}</li>
@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.user.create') }}" class="grey-text text-darken-2">Crear usuario</a></li>
@endsection

@section('content')
    <div class="section">
        <p class="caption"><strong>Usuario: </strong>{{ $user->name }}</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light cyan btn" href="{{ route('backoffice.user.edit', $user) }}">Editar</a>
                            <a class="waves-effect waves-light btn" href="#" onclick="enviarFormulario()">Eliminar</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title"></span>
                        </div>
                        <div class="card-action">
                            <a class="waves-effect waves-light cyan btn" href="{{ route('backoffice.user.edit', $user) }}">Editar</a>
                            <a class="waves-effect waves-light btn" href="#" onclick="enviarFormulario()">Eliminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form method="post" action="{{ route('backoffice.user.destroy', $user) }}" name="delete_form">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>
@endsection

@section('foot')
    <script>
        function enviarFormulario()
        {
            Swal.fire({
                title: "¿Desea eliminar este usuario?",
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

