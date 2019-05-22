@extends('layouts.app', [
    'subTitle' => 'Departments',
    'pageTitle' => 'Add New Department'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->form('POST', route('departments.store'))
                        ->acceptsFiles()
                        ->open() }}

                        @include('departments.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
