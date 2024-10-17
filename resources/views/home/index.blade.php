@extends('layouts.app')

@section('title','Home')

@section('content')
    <div class="flex-1 p-6 bg-gray-100">
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Dashboard</h2>

        <!-- Sambutan untuk User -->
        <div class="bg-blue-100 text-blue-700 rounded-lg p-4 mb-6">
        <p class="text-lg font-semibold">Selamat datang, {{ $username }}</p>
        <p>Anda telah berhasil login. Berikut adalah daftar kontak Anda:</p>
        </div>

        <!-- Data Table -->
        <div class="bg-white shadow-md rounded-lg p-4">
        <h3 class="text-lg font-semibold mb-4">Top Contacts</h3>
        <table class="min-w-full bg-white">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">No.</th>
                <th class="py-2 px-4 border-b">Name</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Phone</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact['name'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact['email'] }}</td>
                    <td class="py-2 px-4 border-b">{{ $contact['notelp'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
@endsection
