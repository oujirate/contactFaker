@extends('layouts.app')

@section('title','contact')

@section('content')
    <div class="flex-1 p-6 bg-gray-100">
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Contact List</h2>

        <div class="mb-4">
            <a href="#" class="inline-block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                New Contact
            </a>
        </div>

        <div class="mb-6">
            <input type="text" placeholder="Search contacts..." class="w-full p-2 border border-blue-300 rounded-lg focus:outline-none focus:border-blue-500">
        </div>

        <table class="min-w-full bg-white">
            <thead class="bg-blue-100 text-blue-600">
                <tr>
                    <th class="py-3 px-4 text-left">Name</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Phone</th>
                    <th class="py-3 px-4 text-left">Address</th>
                    <th class="py-3 px-4 text-left">Company</th>
                    <th class="py-3 px-4 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <!-- Example Contact Row (Repeat this using Laravel Faker) -->
                @foreach ($contacts as $contact)
                <tr class="border-t hover:bg-blue-50">
                    <td class="py-3 px-4">{{ $loop->iteration }}</td>
                    <td class="py-3 px-4">{{ $contact['name'] }}</td>
                    <td class="py-3 px-4">{{ $contact['email'] }}</td>
                    <td class="py-3 px-4">{{ $contact['notelp'] }}</td>
                    <td class="py-3 px-4">{{ $contact['company'] }}</td>
                    <td class="py-3 px-4 flex justify-center space-x-2">
                        <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600">Edit</button>
                        <button class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Delete</button>
                        <button class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Favourite</button>
                    </td>
                </tr>
                @endforeach
                <!-- Add more rows here dynamically with Laravel -->
            </tbody>
        </table>
    </div>
@endsection
