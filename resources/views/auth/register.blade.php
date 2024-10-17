@extends('layouts.app')

@section('title','Register')

@section('content')
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-semibold text-blue-600 text-center mb-6">Buat Akun Anda</h2>

            <form action="#" method="POST" class="space-y-6">
                @csrf
                <div>
                <label for="name" class="block text-gray-700 text-sm font-semibold mb-2">Nama Lengkap</label>
                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan nama lengkap Anda">
                </div>

                <div>
                <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Masukkan email Anda">
                </div>

                <div>
                <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Buat kata sandi">
                </div>

                <div>
                <label for="confirm_password" class="block text-gray-700 text-sm font-semibold mb-2">Konfirmasi Kata Sandi</label>
                <input type="password" id="confirm_password" name="confirm_password" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-600" placeholder="Konfirmasi kata sandi Anda">
                </div>

                <div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">Registrasi</button>
                </div>
            </form>

            <div class="text-center my-6 text-gray-500">
                atau
            </div>

            <div class="text-center">
                <p class="text-gray-600">Sudah memiliki akun? <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-semibold">Login di sini</a></p>
            </div>
        </div>
    </div>
@endsection
