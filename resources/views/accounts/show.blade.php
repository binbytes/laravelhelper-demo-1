@extends('layouts.app', [
    'subTitle' => 'Accounts',
    'pageTitle' => 'show Account'
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
                            <h6>User Id</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->user_id }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Name</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Bank Name</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->bank_name }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Account Number</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->account_number }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Name On Account</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->name_on_account }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Branch Of</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->branch_of }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Address</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->address }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>IFSC Code</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->ifsc_code }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Payment Method</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->contact_number }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <h6>Statement Starting Line</h6>
                        </div>
                        <div class="col-8">
                            <span class="text-muted">{{ $account->statement_starting_line }}</span>
                        </div>
                    </div>
                </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
