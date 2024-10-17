@extends('layouts.app')

@section('title','Login')

@section('content')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
      <h2 class="text-3xl font-semibold text-blue-600 text-center mb-6">Masuk ke Akun Anda</h2>

      <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf
        <div>
          <label for="text" class="block text-gray-700 text-sm font-semibold mb-2">Username</label>
          <input type="text" name="username" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan Nama anda">
        </div>

        <div>
          <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password</label>
          <input type="password" name="password" value="passwd" readonly disabled class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan Password anda">
        </div>

        <div class="flex justify-between items-center">
          <label class="inline-flex items-center text-sm text-gray-600">
            <input type="checkbox" class="form-checkbox text-blue-600">
            <span class="ml-2">Ingat saya</span>
          </label>
          <a href="#" class="text-sm text-blue-600 hover:underline">Lupa password?</a>
        </div>

        <div>
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">Login</button>
        </div>
      </form>

      <div class="text-center my-6 text-gray-500">
        atau
      </div>

      <div class="text-center">
        <p class="text-gray-600">Tidak punya akun? <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-semibold">Daftar Disini!</a></p>
      </div>
    </div>
@endsection
