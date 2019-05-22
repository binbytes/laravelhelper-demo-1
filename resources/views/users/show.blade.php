@extends('layouts.app', [
    'subTitle' => 'Users',
    'pageTitle' => 'show User'
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
                            <span class="text-muted">{{ $user->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Email</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->email }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Email Verified At</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->email_verified_at }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Password</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->password }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Date Of Birth</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->dob }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Avatar</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->avatar }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Address</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Mobile No</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->mobile_no }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Skype</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->skype }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Slack</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->slack }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Trello</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->trello }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Linkedin</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->linkedin }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Remarks</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->remarks }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Base Salary</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->base_salary }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Joining Date</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->joining_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Leaving Date</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->leaving_date }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Is Active</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->is_active }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>About</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->about }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Remember Token</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $user->remember_token }}</span>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
