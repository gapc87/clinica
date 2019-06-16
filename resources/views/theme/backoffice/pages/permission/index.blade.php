@extends('theme.backoffice.layouts.admin')

@section('title', 'Permisos del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li>Permisos del sistema</li>
@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.permission.create') }}" class="grey-text text-darken-2">Crear permiso</a></li>
@endsection

@section('content')
    <div class="section">
        <div id="borderless-table">
            <h4 class="header">Permisos del sistema</h4>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <table>
                                <thead>
                                <tr>
                                    <th data-field="name">Nombre</th>
                                    <th data-field="slug">Slug</th>
                                    <th data-field="description">Descripción</th>
                                    <th data-field="role">Rol</th>
                                    <th data-field="actions">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td><a href="{{ route('backoffice.permission.show', $permission) }}">{{ $permission->name }}</a></td>
                                        <td>{{ $permission->slug }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td><a href="{{ route('backoffice.role.show', $permission->role) }}">{{ $permission->role->name }}</a></td>
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
@endsection

@section('foot')
@endsection

