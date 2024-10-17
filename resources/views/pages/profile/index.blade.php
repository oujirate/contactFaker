@extends('layouts.app')

@section('title','profile')

@section('content')
    <div class="flex-1 p-6 bg-gray-100">
        <h2 class="text-2xl font-bold text-gray-700 mb-6">Profile</h2>
        <h3 class="text-2xl font-semibold text-gray-700 mb-6">Username : <span class="text-blue-500">{{$username}}</span></h3>
        <div class="mb-4">
            <a href="{{ route('logout') }}" class="inline-block px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">logout</a>
        </div>
    </div>
@endsection
