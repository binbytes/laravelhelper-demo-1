<div class="btn-group" role="group">
    @isset($showUrl)
        <a class="icon" rel="{{ $id?? '' }}" href="{{ $showUrl }}">
            <i class="fe fe-eye"></i>
        </a>
    @endisset
    @isset($editUrl)
        <a class="icon" rel="{{ $id?? '' }}" href="{{ $editUrl }}">
            <i class="fe fe-edit"></i>
        </a>
    @endisset
    @isset($deleteUrl)
         <form action="{{ $deleteUrl }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="icon btn-delete" rel="{{ $id ?? '' }}">
                <i class="fe fe-trash"></i>
            </button>
         </form>
    @endisset
</div>

