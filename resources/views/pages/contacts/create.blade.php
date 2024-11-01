@extends('layouts.app')

@section('title','Create Contact')

@section('content')
<div class="max-w-md mx-auto bg-blue-100 p-6 rounded-lg shadow-md mt-10 mb-10">
    <h2 class="text-2xl font-semibold text-blue-700 mb-6 text-center">Add New Contact</h2>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-blue-700 font-medium">Name</label>
            <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-blue-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-blue-700 font-medium">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-blue-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-blue-700 font-medium">Phone</label>
            <input type="text" id="phone" name="phone" class="w-full px-3 py-2 border border-blue-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-blue-700 font-medium">Address</label>
            <textarea id="address" name="address" class="w-full px-3 py-2 border border-blue-300 rounded-md focus:outline-none focus:border-blue-500"></textarea>
        </div>
        <div class="mb-4">
            <label for="company" class="block text-blue-700 font-medium">Company</label>
            <input type="text" id="company" name="company" class="w-full px-3 py-2 border border-blue-300 rounded-md focus:outline-none focus:border-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
            Create Contact
        </button>
    </form>
</div>
@endsection

