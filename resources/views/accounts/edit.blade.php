@extends('layouts.app', [
    'subTitle' => 'Accounts',
    'pageTitle' => 'Edit Account'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->modelForm($account, 'PUT', route('accounts.update', $account))
                        
                        ->open() }}

                        @include('accounts.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
