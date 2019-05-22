@extends('layouts.app', [
    'subTitle' => 'Projects',
    'pageTitle' => 'show Project'
])

@section('content')
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    <div class="d-flex flex-wrap">
                                        <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Title</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->title }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Slug</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->slug }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Description</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->description }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Client Id</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->client_id }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Started At</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->started_at }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Is Completed</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->is_completed }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Remarks</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->remarks }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Priority</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $project->priority }}</span>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
