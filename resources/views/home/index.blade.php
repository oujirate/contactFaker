@extends('layouts.app')

@section('title','Home')

@section('content')
<main class="container mx-auto px-4 py-10">
    <!-- Sambutan untuk User -->
    <div class="bg-blue-100 text-blue-700 rounded-lg p-4 mb-6">
        <p class="text-lg font-semibold">Selamat datang, {{ $username }}</p>
        <p>Jaga hubungan Anda tetap kuat, mudah diakses, dan tertata rapi. Semua informasi kontak yang Anda butuhkan selalu di ujung jari Anda.</p>
    </div>
    <!-- Statistik Utama -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Total Contacts -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Total Contacts</h3>
            <p class="text-7xl font-bold text-blue-600">{{ $totalContacts }}</p>
        </div>

        <!-- Contacts by Company -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Contacts by Company</h3>
            <ul class="mt-4 space-y-2">
                @foreach($contactsByCompany as $company => $count)
                    <li class="flex justify-between">
                        <span class="text-gray-600">{{ $company }}</span>
                        <span class="text-blue-600 font-semibold">{{ $count }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Recent Contacts -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold text-gray-700">Recent Contacts</h3>
            <ul class="mt-4 space-y-2">
                @foreach($recentContacts as $contact)
                    <li>
                        <span class="text-gray-600">{{ $contact->name }}</span>
                        <span class="text-blue-600">({{ $contact->company }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <!-- Daftar Kontak Terbaru -->
    <section class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold text-blue-600 mb-4">Latest Contacts</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($recentContacts as $contact)
                <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                    <h4 class="text-lg font-semibold text-blue-600">{{ $contact->name }}</h4>
                    <p class="text-gray-600"><strong>Email:</strong> {{ $contact->email }}</p>
                    <p class="text-gray-600"><strong>Phone:</strong> {{ $contact->phone }}</p>
                    <p class="text-gray-600"><strong>Company:</strong> {{ $contact->company }}</p>
                    <div class="mt-4 flex justify-end">
                        <a href="#" class="text-blue-500 font-semibold hover:underline">View Details</a>
                        {{-- <a href="{{ route('contacts.show', $contact->id) }}" class="text-blue-500 font-semibold hover:underline">View Details</a> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection
