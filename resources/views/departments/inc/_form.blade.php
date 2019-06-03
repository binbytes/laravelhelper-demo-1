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
    <div class="col-12 form-group">
        {{ html()->label('Remarks')
            ->for('remarks')
            ->class('mb-0 form-label')
        }}
        {{ html()->textarea('remarks')
                ->id('summernote')
                ->class(['form-control', 'is-invalid' => $errors->has('remarks')])
                ->value(' ')
        }}

        @if ($errors->has('remarks'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('remarks') }}</strong>
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
               ->href(route('departments.index'))
               ->text('Cancel')
               ->class('btn btn-link')
        }}
    </div>
</div>
