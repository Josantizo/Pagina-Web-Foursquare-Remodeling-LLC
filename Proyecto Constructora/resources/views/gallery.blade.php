@extends('layout')

@section('content')
<section class="py-16 bg-white flex flex-col items-center text-center">
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
@endsection 