@if(isset($errors))
    @foreach ($errors->all() as $error)
        <div
            class="alert alert-danger solid alert-dismissible fade show col-xl-12 text-center">
            <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor"
                 stroke-width="2" fill="none" stroke-linecap="round"
                 stroke-linejoin="round" class="mr-2">
                <polygon
                    points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="15" y1="9" x2="9" y2="15"></line>
                <line x1="9" y1="9" x2="15" y2="15"></line>
            </svg>
            {{ $error}}
            <button type="button" class="close h-100" data-dismiss="alert"
                    aria-label="Close"><span><i class="mdi mdi-close"></i></span>
            </button>
        </div>

    @endforeach
@endif
