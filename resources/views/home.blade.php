@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->jabatan == 'o')
                        You are logged in as Operator
                    @elseif(Auth::user()->jabatan == 'p')
                        You are logged in as Penduduk
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
