@extends('layouts.app', [
    'pageTitle' => 'Clients'
])

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom text-right">
                    <a href="{{ route('clients.create') }}" class="btn btn-primary ml-auto">
                        <i class="fa fa-plus mr-2"></i>
                        Add Client
                    </a>
                </div>
                <div class="card-body p-0">
                    {!! $html->table(['class' => 'table p-0 text-center']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! $html->scripts() !!}
@endpush
