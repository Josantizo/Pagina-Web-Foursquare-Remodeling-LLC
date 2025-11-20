@extends('layout')

@section('content')
<section class="py-16 bg-gradient-to-b from-white to-orange-50/40">
    <div class="max-w-5xl mx-auto px-6 space-y-12">
        <div class="text-center space-y-4">
            <h2 class="text-3xl md:text-4xl font-semibold text-orange-600">About Us</h2>
            <p class="text-lg text-teal-700 leading-relaxed">
                Foursquare Remodeling LLC blends high-quality craftsmanship with personalized service to elevate both residential and commercial spaces. We bring experience, creativity, and dependable project management to every renovation so you can enjoy a smoother process and inspiring results.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-3xl border border-orange-100 shadow-lg shadow-orange-100/50 p-8 space-y-4">
                <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-teal-500">
                    <span class="h-0.5 w-8 bg-orange-400"></span>
                    Mission
                </span>
                <h3 class="text-2xl font-semibold text-orange-600">What drives our work</h3>
                <p class="text-base md:text-lg leading-relaxed text-teal-700">
                    At Foursquare Remodeling LLC, our mission is to transform residential and commercial spaces through high-quality craftsmanship, personalized design, and exceptional customer service. We are committed to delivering reliable, detail-oriented remodeling solutions that bring our clients’ visions to life while enhancing comfort, functionality, and long-term value.
                </p>
            </div>

            <div class="bg-white rounded-3xl border border-teal-100 shadow-lg shadow-teal-100/50 p-8 space-y-4">
                <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-[0.2em] text-orange-500">
                    <span class="h-0.5 w-8 bg-teal-400"></span>
                    Vision
                </span>
                <h3 class="text-2xl font-semibold text-teal-700">Where we’re headed</h3>
                <p class="text-base md:text-lg leading-relaxed text-teal-700">
                    Our vision is to become a leading remodeling company recognized for innovation, integrity, and excellence in every project. We aim to set the standard in the industry by consistently providing outstanding results, building lasting client relationships, and creating spaces that inspire and improve everyday living.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection