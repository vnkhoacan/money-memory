@extends('layouts.master', ['title' => 'Create Admin'])

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Create Admin</h6>
    </div>
    <div class="card-body">
        @include('elements.messages')
        @include('elements.errors')
        <form method="POST" action="{{ route('admin.create') }}">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" value="{{ old('email') }}" name="email"
                    class="form-control @error('email') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" value="{{ old('name') }}" name="name"
                    class="form-control @error('name') is-invalid @enderror">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" value="" name="password"
                    class="form-control @error('password') is-invalid @enderror">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection