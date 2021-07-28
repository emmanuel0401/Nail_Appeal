@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center">
                <img src="images/logo.jpeg" width="240" height="225">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Haz iniciado sesión!') }}
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
