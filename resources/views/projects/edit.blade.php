@extends('layouts.app', [
    'subTitle' => 'Projects',
    'pageTitle' => 'Edit Project'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->modelForm($project, 'PUT', route('projects.update', $project))
                        
                        ->open() }}

                        @include('projects.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
