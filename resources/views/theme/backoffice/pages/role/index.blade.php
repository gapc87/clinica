@extends('theme.backoffice.layouts.admin')

@section('title', 'Roles del sistema')

@section('head')
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('backoffice.role.index') }}">Roles del sistema</a></li>
@endsection

@section('dropdown_settings')
    <li><a href="{{ route('backoffice.role.create') }}" class="grey-text text-darken-2">Crear rol</a></li>
@endsection

@section('content')
    <div class="section">
        <div id="borderless-table">
            <h4 class="header">Roles del sistema</h4>
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
                                    <th data-field="actions">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td><a href="{{ route('backoffice.role.show', $role) }}">{{ $role->name }}</a></td>
                                        <td>{{ $role->slug }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td><a href="{{ route('backoffice.role.edit', $role) }}">Editar</a></td>
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

