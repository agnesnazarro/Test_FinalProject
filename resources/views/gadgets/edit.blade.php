@extends('gadgets.home')

@section('content')
<div class="container mx-auto p-4 md:p-6 lg:p-8">
    <h1 class="text-3xl font-bold mb-4">Edit Gadget</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
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
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="brand_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Brand Name:</label>
                <input type="text" name="brand_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="{{ old('brand_name', $gadgets->brand_name) }}">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label for="gadget_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Gadget Name:</label>
                <input type="text" name="gadget_name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="{{ old('gadget_name', $gadgets->gadget_name) }}">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="category" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Category:</label>
                <input type="text" name="category" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="{{ old('category', $gadgets->category) }}">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label for="quantity" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Quantity:</label>
                <input type="number" name="quantity" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="{{ old('quantity', $gadgets->quantity) }}">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label for="description" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Description:</label>
                <textarea name="description" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">{{ old('description', $gadgets->description) }}</textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="purchase_date" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Purchase Date:</label>
                <input type="date" name="purchase_date" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" value="{{ old('purchase_date', $gadgets->purchase_date) }}">
            </div>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Gadget</button>
    </form>
</div>
@endsection
