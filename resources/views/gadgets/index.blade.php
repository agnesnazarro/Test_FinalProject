@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gadgets Inventory</h1>
    <a href="{{ route('gadgets.create') }}" class="btn btn-primary">Add New Gadget</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand Name</th>
                <th>Gadget Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Purchase Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gadgets as $gadget)
                <tr>
                    <td>{{ $gadget->id }}</td>
                    <td>{{ $gadget->brand_name }}</td>
                    <td>{{ $gadget->gadget_name }}</td>
                    <td>{{ $gadget->category }}</td>
                    <td>{{ $gadget->description }}</td>
                    <td>{{ $gadget->quantity }}</td>
                    <td>{{ $gadget->purchase_date }}</td>
                    <td>
                        <a href="{{ route('gadgets.edit', $gadget->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection