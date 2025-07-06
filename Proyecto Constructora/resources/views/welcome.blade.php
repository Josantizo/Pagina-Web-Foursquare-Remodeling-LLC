@extends('layout')

@section('content')
    <section id="home" class="py-16 min-h-[60vh] flex flex-col justify-center items-center text-center">
        <h1 class="text-4xl font-bold mb-4 text-red-700">Welcome to Foursquare Remodeling LLC</h1>
        <p class="text-lg max-w-2xl mb-6">We are your trusted construction and remodeling partner in the United States. Transforming spaces, building dreams.</p>
    </section>

    <section id="about" class="py-16 bg-white flex flex-col items-center text-center">
        <h2 class="text-3xl font-semibold mb-3">About Us</h2>
        <p class="max-w-2xl text-base">Foursquare Remodeling LLC is a professional construction company with years of experience delivering high-quality remodeling, renovation, and building services. Our team is dedicated to excellence, reliability, and customer satisfaction.</p>
    </section>

    <section id="services" class="py-16 flex flex-col items-center text-center">
        <h2 class="text-3xl font-semibold mb-3">Our Services</h2>
        <p class="max-w-2xl text-base mb-6">We offer a wide range of construction and remodeling services, including:</p>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left max-w-2xl">
            <li>• Home Remodeling</li>
            <li>• Kitchen & Bathroom Renovation</li>
            <li>• Flooring & Painting</li>
            <li>• Roofing & Siding</li>
            <li>• Decks & Patios</li>
            <li>• Commercial Construction</li>
        </ul>
    </section>

    <section id="gallery" class="py-16 bg-white flex flex-col items-center text-center">
        <h2 class="text-3xl font-semibold mb-3">Gallery</h2>
        <p class="max-w-2xl text-base mb-6">Take a look at some of our recent projects and transformations.</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-4xl w-full">
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 1</div>
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 2</div>
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 3</div>
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 4</div>
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 5</div>
            <div class="bg-gray-200 h-48 rounded shadow flex items-center justify-center">Image 6</div>
        </div>
    </section>

    <section id="handyman" class="py-16 flex flex-col items-center text-center">
        <h2 class="text-3xl font-semibold mb-3">Handyman Services</h2>
        <p class="max-w-2xl text-base mb-6">We also provide reliable handyman services for all those small repairs and improvements around your home or business. No job is too small!</p>
        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-left max-w-2xl">
            <li>• Minor Repairs</li>
            <li>• Furniture Assembly</li>
            <li>• Fixture Installation</li>
            <li>• Maintenance Tasks</li>
        </ul>
    </section>

    <section id="contact" class="py-16 bg-white flex flex-col items-center text-center">
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
