@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Perfil</h3>

                    {{Auth::user()->pessoa->nome}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
