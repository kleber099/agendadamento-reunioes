@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Alterar Reunião</div>

                    <div class="panel-body">
                        <criar-reuniao :id="{{ $id }}"></criar-reuniao>

                        <div class="form-group">
                            <a href="{{ route('home') }}"class="btn btn-primary">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection