@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dashboard ADMIN
                    </div>

                    <div class="card-body">
                        @if (session('admin'))
                            <div class="alert alert-success" role="alert">
                                {{ session('admin') }}
                            </div>
                        @endif

                        ADMIN!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
