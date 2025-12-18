@extends('layout')

@section('content')
<section class="py-16 bg-white flex flex-col items-center text-center">
    <h2 class="text-3xl font-semibold mb-3 text-orange-600">Gallery</h2>
    <p class="max-w-2xl text-base mb-6 text-teal-600">Take a look at some of our recent projects and transformations.</p>
    
    @php
        $fotos = [
            'Foto 52.jpeg',
            'Foto 35.jpeg',
            'Foto 42.jpeg',
            'Foto 23.jpeg',
            'Foto 48.jpeg',
            'Foto 36.jpeg',
            'Foto 19.jpeg',
            'Foto 45.jpeg',
            'Foto 22.jpeg',
            'Foto 49.jpeg',
            'Foto 37.jpeg',
            'Foto 43.jpeg',
            'Foto 20.jpeg',
            'Foto 46.jpeg',
            'Foto 39.jpeg'
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 max-w-4xl w-full px-4">
        @foreach($fotos as $index => $foto)
            <div class="group relative overflow-hidden rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300 aspect-[4/3] w-full bg-white">
                <img 
                    src="{{ asset('images/' . $foto) }}" 
                    alt="Project {{ $index + 1 }}" 
                    class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-300"
                    loading="lazy"
                >
            </div>
        @endforeach
    </div>
</section>
@endsection 