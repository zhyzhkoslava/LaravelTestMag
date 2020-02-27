@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Dashboard DISABLED
                    </div>

                    <div class="card-body">
                        @if (session('disabled'))
                            <div class="alert alert-success" role="alert">
                                {{ session('disabled') }}
                            </div>
                        @endif

                        DISABLED!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
