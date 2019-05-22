@extends('layouts.app', [
    'subTitle' => 'Departments',
    'pageTitle' => 'show Department'
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
                            <span class="text-muted">{{ $department->title }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Remarks</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $department->remarks }}</span>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
