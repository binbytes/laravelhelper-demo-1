@extends('layouts.app', [
    'subTitle' => 'Clients',
    'pageTitle' => 'Add New Client'
])

@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-small mb-3">
                <div class="card-body">
                    {{ html()->form('POST', route('clients.store'))
                        ->acceptsFiles()
                        ->open() }}

                        @include('clients.inc._form')

                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
@endsection
