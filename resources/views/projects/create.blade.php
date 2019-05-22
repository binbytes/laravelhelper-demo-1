@extends('layouts.app', [
    'subTitle' => 'Projects',
    'pageTitle' => 'Add New Project'
])

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->form('POST', route('projects.store'))
                        ->acceptsFiles()
                        ->open() }}

                        @include('projects.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
