<div class="d-flex flex-wrap">
    <div class="col-4 form-group">
        {{ html()->label('Title')
            ->for('title')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('title')
                ->id('title')
                ->placeholder('Title')
                ->class(['form-control', 'is-invalid' => $errors->has('title')])
        }}

        @if ($errors->has('title'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Client Id')
            ->for('client_id')
            ->class('mb-0 form-label')
        }}
        {{ html()->select('client_id')
                ->options($clientsforname)
                ->placeholder('Client Id')
                ->class(['form-control custom-select', 'is-invalid' => $errors->has('client_id')])
        }}

        @if ($errors->has('client_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('client_id') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Started At')
            ->for('started_at-datepicker')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('started_at')
                ->id('started_at')
                ->placeholder('Started At')
                ->class(['form-control', 'datepicker', 'is-invalid' => $errors->has('started_at')])
        }}

        @if ($errors->has('started_at'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('started_at') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Description')
            ->for('description')
            ->class('mb-0 form-label')
        }}
        {{ html()->textarea('description')
                ->id('description')
                ->placeholder('Description')
                ->class(['form-control', 'is-invalid' => $errors->has('description')])
        }}

        @if ($errors->has('description'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('description') }}</strong>
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
        {{ html()->label('Priority')
            ->for('priority')
            ->class('mb-0 form-label')
        }}
        {{ html()->text('priority')
                ->id('priority')
                ->placeholder('Priority')
                ->class(['form-control', 'is-invalid' => $errors->has('priority')])
        }}

        @if ($errors->has('priority'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('priority') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        {{ html()->label('Users')
            ->for('users')
            ->class('mb-0 form-label')
        }}
        {{ html()->multiselect('users[]')
                ->options($users)
                ->placeholder('Select Users')
                ->class(['form-control custom-select', 'is-invalid' => $errors->has('users')])
        }}

        @if ($errors->has('users'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('users') }}</strong>
            </span>
        @endif
    </div>
    <div class="col-4 form-group">
        <div class="custom-control custom-checkbox">
            {{ html()->checkbox('is_completed')
                    ->id('is_completed')
                    ->class(['custom-control-input', 'is-invalid' => $errors->has('is_completed')])
            }}
            {{ html()->label('Is Completed')
                ->for('is_completed')
                ->class('custom-control-label')
            }}
        </div>
        @if ($errors->has('is_completed'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('is_completed') }}</strong>
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
               ->href(route('projects.index'))
               ->text('Cancel')
               ->class('btn btn-link')
        }}
    </div>
</div>
