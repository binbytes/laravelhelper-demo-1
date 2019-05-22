@extends('layouts.app', [
    'subTitle' => 'Clients',
    'pageTitle' => 'show Client'
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
                            <h6>Name</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Email</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Company Name</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->company_name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Avatar</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->avatar }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Address</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>City</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->city }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Country</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->country }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Date Of Birth</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->dob }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Mobile No</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->mobile_no }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Linkedin</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->linkedin }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Remarks</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $client->remarks }}</span>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
