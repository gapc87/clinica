@extends('theme.backoffice.layouts.admin')

@section('title', 'Crear rol')

@section('head')
@endsection

@section('content')
    <div class="section">
        <p class="caption">Introduce los datos para crear un nuevo rol.</p>
        <div class="divider"></div>
        <div id="basic-form" class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2">
                    <div class="card-panel">
                        <h4 class="header2">Crear rol</h4>
                        <div class="row">
                            <form class="col s12" method="post" action="{{ route('backoffice.role.store') }}">

                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="name" type="text" name="name">
                                        <label for="name">Nombre del rol</label>
                                        @error('name')
                                            <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                                                <span class="white-text">
                                                    {{ $message }}
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="description" class="materialize-textarea" name="description"></textarea>
                                        <label for="message">Descripción</label>
                                        @error('description')
                                            <div class="card-panel gradient-45deg-red-pink gradient-shadow">
                                                <span class="white-text">
                                                    {{ $message }}
                                                </span>
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit">
                                                Guardar
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('foot')
@endsection