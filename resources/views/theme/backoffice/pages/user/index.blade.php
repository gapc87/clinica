@extends('theme.backoffice.layouts.admin')

@section('title', 'Usuarios del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li>Usuarios del sistema</li>
@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.user.create') }}" class="grey-text text-darken-2">Crear usuario</a></li>
@endsection

@section('content')
    <div class="section">
        <div id="borderless-table">
            <h4 class="header">Usuario del sistema</h4>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <table>
                                <thead>
                                <tr>
                                    <th data-field="name">Nombre</th>
                                    <th data-field="slug">Edad</th>
                                    <th data-field="description">Correo</th>
                                    <th colspan="2" data-field="actions">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td><a href="{{ route('backoffice.user.show', $user) }}">{{ $user->name }}</a></td>
                                        <td>{{ $user->dob }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td><a href="{{ route('backoffice.user.edit', $user) }}">Editar</a></td>
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
@endsection

@section('foot')
@endsection

