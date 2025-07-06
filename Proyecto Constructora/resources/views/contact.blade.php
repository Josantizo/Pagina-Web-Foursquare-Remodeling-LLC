@extends('layout')

@section('content')
<section class="py-16 bg-white flex flex-col items-center text-center">
    <h2 class="text-3xl font-semibold mb-3">Contact Us</h2>
    <p class="max-w-2xl text-base mb-6">Ready to start your next project? Contact us today for a free consultation and estimate.</p>
    <form class="max-w-lg w-full grid gap-4 text-left">
        <div>
            <label for="name" class="block mb-1 font-medium">Name</label>
            <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label for="email" class="block mb-1 font-medium">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2" required>
        </div>
        <div>
            <label for="message" class="block mb-1 font-medium">Message</label>
            <textarea id="message" name="message" rows="4" class="w-full border border-gray-300 rounded px-3 py-2" required></textarea>
        </div>
        <button type="submit" class="bg-red-700 text-white px-6 py-2 rounded font-semibold hover:bg-red-800 transition">Send Message</button>
    </form>
</section>
@endsection 