@extends('layout')

@section('content')
<section class="py-16 bg-white flex flex-col items-center text-center">
    <h2 class="text-3xl font-semibold mb-3">Register</h2>
    <form class="max-w-lg w-full grid gap-4 text-left">
        <div>
            <label for="name" class="block mb-1 font-medium">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label for="password" class="block mb-1 font-medium">Password</label>
            <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-red-700 text-white px-6 py-2 rounded font-semibold hover:bg-red-800 transition">Register</button>
    </form>
</section>
@endsection