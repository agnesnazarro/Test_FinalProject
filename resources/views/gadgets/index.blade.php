@extends('gadgets.home')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-4">Gadgets Inventory</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('gadgets.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Gadget</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            <svg class="w-6 h-6 text-green-700 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 011 18z"></path></svg>
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Brand Name</th>
                    <th class="px-4 py-2">Gadget Name</th>
                    <th class="px-4 py-2">Category</th>
                    <th class="px-4 py-2">Description</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="px-4 py-2">Purchase Date</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gadgets as $gadget)
                    <tr>
                        <td class="border px-4 py-2">{{ $gadget->id }}</td>
                        <td class="border px-4 py-2">{{ $gadget->brand_name }}</td>
                        <td class="border px-4 py-2">{{ $gadget->gadget_name }}</td>
                        <td class="border px-4 py-2">{{ $gadget->category }}</td>
                        <td class="border px-4 py-2">{{ $gadget->description }}</td>
                        <td class="border px-4 py-2">{{ $gadget->quantity }}</td>
                        <td class="border px-4 py-2">{{ $gadget->purchase_date }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('gadgets.edit', $gadget->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('gadgets.destroy', $gadget->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
