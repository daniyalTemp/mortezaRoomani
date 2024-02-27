@if(session('success'))
    <div class="alert alert-info text-center">
        <p>{{ session('success') }}</p>
    </div>
@endif
