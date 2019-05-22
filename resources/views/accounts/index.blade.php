@extends('layouts.app', [
    'pageTitle' => 'Accounts'
])

@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-small mb-4">
                <div class="card-header border-bottom text-right">
                    <a href="{{ route('accounts.create') }}" class="btn btn-primary ml-auto">
                        <i class="fa fa-plus mr-2"></i>
                        Add Account
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
