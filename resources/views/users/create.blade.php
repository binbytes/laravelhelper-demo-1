@extends('layouts.app', [
    'subTitle' => 'Users',
    'pageTitle' => 'Add New User'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->form('POST', route('users.store'))
                        ->acceptsFiles()
                        ->open() }}

                        @include('users.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
