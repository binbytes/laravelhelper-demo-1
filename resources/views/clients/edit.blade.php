@extends('layouts.app', [
    'subTitle' => 'Clients',
    'pageTitle' => 'Edit Client'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->modelForm($client, 'PUT', route('clients.update', $client))
                        
                        ->open() }}

                        @include('clients.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
