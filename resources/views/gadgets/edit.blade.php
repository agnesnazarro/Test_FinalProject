@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Gadget</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('gadgets.update', $gadgets->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand_name">Brand Name:</label>
            <input type="text" name="brand_name" class="form-control" value="{{ old('brand_name', $gadgets->brand_name) }}">
        </div>
        <div class="form-group">
            <label for="gadget_name">Gadget Name:</label>
            <input type="text" name="gadget_name" class="form-control" value="{{ old('gadget_name', $gadgets->gadget_name) }}">
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" name="category" class="form-control" value="{{ old('category', $gadgets->category) }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control">{{ old('description', $gadgets->description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $gadgets->quantity) }}">
        </div>
        <div class="form-group">
            <label for="purchase_date">Purchase Date:</label>
            <input type="date" name="purchase_date" class="form-control" value="{{ old('purchase_date', $gadgets->purchase_date) }}">
        </div>
        <button type="submit" class="btn btn-success">Update Gadget</button>
    </form>
</div>
@endsection