@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="color: #bc4b00; fontweight:600">Bienvenid@ &nbsp;{{auth()->user()->nombre}} &nbsp;{{auth()->user()->apellido}}</div>

                <div class="card-body" align="center" style="color: #bc4b00; fontweight:600">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
