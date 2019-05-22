<div class="d-flex flex-wrap">
        <div class="col-4 form-group">
        {{ html()->label('User Id')
            ->for('user_id')
            ->class('mb-0 form-label')
        }}
        {{ html()->select('user_id')
                ->options($usersforname)
                ->placeholder('User Id')
                ->class(['form-control', 'is-invalid' => $errors->has('user_id')])
        }}

        @if ($errors->has('user_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('user_id') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Name')
            ->for('name')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('name')
                ->id('name')
                ->placeholder('Name')
                ->class(['form-control', 'is-invalid' => $errors->has('name')])
        }}

        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Bank Name')
            ->for('bank_name')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('bank_name')
                ->id('bank_name')
                ->placeholder('Bank Name')
                ->class(['form-control', 'is-invalid' => $errors->has('bank_name')])
        }}

        @if ($errors->has('bank_name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('bank_name') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Account Number')
            ->for('account_number')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('account_number')
                ->id('account_number')
                ->placeholder('Account Number')
                ->class(['form-control', 'is-invalid' => $errors->has('account_number')])
        }}

        @if ($errors->has('account_number'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('account_number') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Name On Account')
            ->for('name_on_account')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('name_on_account')
                ->id('name_on_account')
                ->placeholder('Name On Account')
                ->class(['form-control', 'is-invalid' => $errors->has('name_on_account')])
        }}

        @if ($errors->has('name_on_account'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name_on_account') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Branch Of')
            ->for('branch_of')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('branch_of')
                ->id('branch_of')
                ->placeholder('Branch Of')
                ->class(['form-control', 'is-invalid' => $errors->has('branch_of')])
        }}

        @if ($errors->has('branch_of'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('branch_of') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Address')
            ->for('address')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('address')
                ->id('address')
                ->placeholder('Address')
                ->class(['form-control', 'is-invalid' => $errors->has('address')])
        }}

        @if ($errors->has('address'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('IFSC Code')
            ->for('ifsc_code')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('ifsc_code')
                ->id('ifsc_code')
                ->placeholder('IFSC Code')
                ->class(['form-control', 'is-invalid' => $errors->has('ifsc_code')])
        }}

        @if ($errors->has('ifsc_code'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('ifsc_code') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Payment Method')
            ->for('contact_number')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('contact_number')
                ->id('contact_number')
                ->placeholder('Payment Method')
                ->class(['form-control', 'is-invalid' => $errors->has('contact_number')])
        }}

        @if ($errors->has('contact_number'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('contact_number') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Statement Starting Line')
            ->for('statement_starting_line')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('statement_starting_line')
                ->id('statement_starting_line')
                ->placeholder('Statement Starting Line')
                ->class(['form-control', 'is-invalid' => $errors->has('statement_starting_line')])
        }}

        @if ($errors->has('statement_starting_line'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('statement_starting_line') }}</strong>
            </span>
        @endif
    </div>

</div>

<div class="d-flex">
    <div class="ml-auto">
        {{ html()->button('Save')
                ->type('submit')
                ->class('btn btn-primary')
        }}

        {{ html()->a()
               ->href(route('accounts.index'))
               ->text('Cancel')
               ->class('btn btn-link')
        }}
    </div>
</div>
