
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Service Details</h1>

    <div class="mb-3">
        <strong>Name:</strong> {{ $service->name }}
    </div>
    <div class="mb-3">
        <strong>Description:</strong> {{ $service->description }}
    </div>
    <div class="mb-3">
        <strong>Price:</strong> {{ $service->price }}
    </div>

    <a href="{{ route('services.index') }}" class="btn btn-secondary">Back to Services</a>
    <a href="{{ route('services.edit', $service) }}" class="btn btn-warning">Edit Service</a>
    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete Service</button>
    </form>
</div>
@endsection
