<div class="d-flex flex-wrap">
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
        {{ html()->label('Email')
            ->for('email')
            ->class('mb-0 form-label')
        }}
        {{ html()->email('email')
                ->id('email')
                ->placeholder('Email')
                ->class(['form-control', 'is-invalid' => $errors->has('email')])
        }}

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Company Name')
            ->for('company_name')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('company_name')
                ->id('company_name')
                ->placeholder('Company Name')
                ->class(['form-control', 'is-invalid' => $errors->has('company_name')])
        }}

        @if ($errors->has('company_name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('company_name') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Date Of Birth')
            ->for('dob-datepicker')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('dob')
                ->id('dob')
                ->placeholder('Date Of Birth')
                ->class(['form-control', 'datepicker', 'is-invalid' => $errors->has('dob')])
        }}

        @if ($errors->has('dob'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('dob') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Mobile No')
            ->for('mobile_no')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('Mobile_no')
                ->id('mobile_no')
                ->placeholder('Mobile No')
                ->class(['form-control', 'is-invalid' => $errors->has('mobile_no')])
        }}

        @if ($errors->has('mobile_no'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('mobile_no') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Avatar')
            ->for('avatar')
            ->class('mb-0 form-label')
        }}
        <div class="custom-file">
            {{ html()->file('avatar')
                ->accept('image/*')
                ->class(['custom-file-input', 'is-invalid' => $errors->has('avatar')])
            }}
            {{ html()->label('Avatar')
                ->for('avatar')
                ->class('custom-file-label')
            }}
        </div>

        @if ($errors->has('avatar'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('avatar') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Address')
            ->for('address')
            ->class('mb-0 form-label')
        }}
        {{ html()->textarea('address')
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
        {{ html()->label('City')
            ->for('city')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('city')
                ->id('city')
                ->placeholder('City')
                ->class(['form-control', 'is-invalid' => $errors->has('city')])
        }}

        @if ($errors->has('city'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Country')
            ->for('country')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('country')
                ->id('country')
                ->placeholder('Country')
                ->class(['form-control', 'is-invalid' => $errors->has('country')])
        }}

        @if ($errors->has('country'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('country') }}</strong>
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
               ->href(route('clients.index'))
               ->text('Cancel')
               ->class('btn btn-link')
        }}
    </div>
</div>
