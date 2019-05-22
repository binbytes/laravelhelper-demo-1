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
        {{ html()->label('Password')
            ->for('password')
            ->class('mb-0 form-label')
        }}
        {{ html()->password('password')
                ->id('password')
                ->placeholder('Password')
                ->class(['form-control', 'is-invalid' => $errors->has('password')])
                ->value('')
        }}

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
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
        {{ html()->text('mobile_no')
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
        {{ html()->label('Base Salary')
            ->for('base_salary')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('base_salary')
                ->id('base_salary')
                ->placeholder('Base Salary')
                ->class(['form-control', 'is-invalid' => $errors->has('base_salary')])
        }}

        @if ($errors->has('base_salary'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('base_salary') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Joining Date')
            ->for('joining_date-datepicker')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('joining_date')
                ->id('joining_date')
                ->placeholder('Joining Date')
                ->class(['form-control', 'datepicker', 'is-invalid' => $errors->has('joining_date')])
        }}

        @if ($errors->has('joining_date'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('joining_date') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Leaving Date')
            ->for('leaving_date-datepicker')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('leaving_date')
                ->id('leaving_date')
                ->placeholder('Leaving Date')
                ->class(['form-control', 'datepicker', 'is-invalid' => $errors->has('leaving_date')])
        }}

        @if ($errors->has('leaving_date'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('leaving_date') }}</strong>
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
        {{ html()->label('Skype')
            ->for('skype')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('skype')
                ->id('skype')
                ->placeholder('Skype')
                ->class(['form-control', 'is-invalid' => $errors->has('skype')])
        }}

        @if ($errors->has('skype'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('skype') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Slack')
            ->for('slack')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('slack')
                ->id('slack')
                ->placeholder('Slack')
                ->class(['form-control', 'is-invalid' => $errors->has('slack')])
        }}

        @if ($errors->has('slack'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('slack') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Remarks')
            ->for('remarks')
            ->class('mb-0 form-label')
        }}
        {{ html()->textarea('remarks')
                ->id('remarks')
                ->placeholder('Remarks')
                ->class(['form-control', 'is-invalid' => $errors->has('remarks')])
        }}

        @if ($errors->has('remarks'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('remarks') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Trello')
            ->for('trello')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('trello')
                ->id('trello')
                ->placeholder('Trello')
                ->class(['form-control', 'is-invalid' => $errors->has('trello')])
        }}

        @if ($errors->has('trello'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('trello') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Linkedin')
            ->for('linkedin')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('linkedin')
                ->id('linkedin')
                ->placeholder('Linkedin')
                ->class(['form-control', 'is-invalid' => $errors->has('linkedin')])
        }}

        @if ($errors->has('linkedin'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('linkedin') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        <label class="custom-switch">
            {{ html()->checkbox('is_active')
                ->class(['custom-switch-input', 'is-invalid' => $errors->has('is_active')])
            }}
            <span class="custom-switch-indicator"></span>
            {{ html()->span('Is Active')
                ->class('custom-switch-description')
            }}
        </label>
        @if ($errors->has('is_active'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('is_active') }}</strong>
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
               ->href(route('users.index'))
               ->text('Cancel')
               ->class('btn btn-link')
        }}
    </div>
</div>
