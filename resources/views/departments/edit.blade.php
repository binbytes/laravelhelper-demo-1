@extends('layouts.app', [
    'subTitle' => 'Departments',
    'pageTitle' => 'Edit Department'
])

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->modelForm($department, 'PUT', route('departments.update', $department))
                        
                        ->open() }}

                        @include('departments.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection