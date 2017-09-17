@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reuniões</div>

                <div class="panel-body">
                    <div class="form-group">
                        <div id='calendar'></div>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('reunioes.create') }}"class="btn btn-primary">Adicionar Reunião</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
