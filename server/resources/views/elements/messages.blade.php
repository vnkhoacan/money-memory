@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-success" role="alert">
        {{ session('error') }}
    </div>
@endif