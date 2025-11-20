@extends('layout')

@section('content')
    <section id="home" class="bg-white/90 rounded-3xl border border-orange-100 shadow-lg shadow-orange-100/70 p-8 md:p-12">
        <div class="grid gap-10 md:grid-cols-2 items-center">
            <div class="space-y-6 text-center md:text-left">
                <p class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.35em] text-teal-500">
                    <span class="h-2 w-2 rounded-full bg-orange-500"></span> Remodeling & Handyman
                </p>
                <h1 class="text-4xl md:text-5xl font-black leading-tight text-orange-600">
                    Espacios modernos en tonos naranja y turquesa
                </h1>
                <p class="text-lg text-teal-700">Diseñamos proyectos cálidos y frescos a la vez, usando materiales premium y una paleta amable que transmite confianza.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="/contact" class="px-6 py-3 rounded-full bg-orange-500 text-white font-semibold border-2 border-teal-500 shadow hover:bg-orange-600 transition">Agenda tu consulta</a>
                    <a href="/services" class="px-6 py-3 rounded-full bg-orange-500 text-white font-semibold border-2 border-teal-500 shadow hover:bg-orange-600 transition">Ver servicios</a>
                </div>
            </div>
            <div class="space-y-6">
                <div class="rounded-3xl bg-teal-50 border border-teal-100 p-6 text-center">
                    <img src="{{ asset('images/logo-foursquare.jpg') }}" alt="Foursquare logo" class="w-28 h-28 object-contain mx-auto mb-4">
                    <p class="text-teal-700">Aplicamos la combinación naranja + turquesa en cada fachada, interior y detalle decorativo.</p>
                </div>
                <div class="grid grid-cols-3 gap-4 text-center text-teal-700">
                    <div class="p-4 rounded-2xl bg-orange-50 border border-orange-200">
                        <p class="text-3xl font-bold text-orange-500">10+</p>
                        <p class="text-xs uppercase tracking-wide">Años</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-teal-50 border border-teal-200">
                        <p class="text-3xl font-bold text-teal-600">150</p>
                        <p class="text-xs uppercase tracking-wide">Proyectos</p>
                    </div>
                    <div class="p-4 rounded-2xl bg-orange-50 border border-orange-200">
                        <p class="text-3xl font-bold text-orange-500">24/7</p>
                        <p class="text-xs uppercase tracking-wide">Soporte</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mt-12 bg-gradient-to-r from-orange-50 via-white to-teal-50 rounded-3xl border border-teal-100 p-8 md:p-12 shadow">
        <div class="grid gap-8 md:grid-cols-2 items-center">
            <div class="space-y-4">
                <p class="text-sm font-semibold uppercase tracking-[0.3em] text-teal-500">Quiénes somos</p>
                <h2 class="text-3xl font-bold text-orange-600">Remodelamos con propósito cromático</h2>
                <p class="text-teal-700">Cada plano se valida con una guía basada en naranja (energía, confianza) y turquesa (calma, modernidad) para que tu marca se sienta coherente en todo el espacio.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 text-teal-700">
                <div class="p-5 rounded-2xl bg-orange-100/70 border border-orange-200 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.2em] text-orange-600 mb-2">Paleta cálida</p>
                    <p>Naranja 500, coral 400, crema suave.</p>
                </div>
                <div class="p-5 rounded-2xl bg-teal-50 border border-teal-200 shadow-sm">
                    <p class="text-sm uppercase tracking-[0.2em] text-teal-600 mb-2">Paleta turquesa</p>
                    <p>Turquesa 500, aqua 300, blanco brillante.</p>
                </div>
                <div class="col-span-2 p-5 rounded-2xl bg-white border border-slate-100 shadow-sm">
                    <p>Integramos iluminación, pintura y mobiliario para que el recorrido visual sea consistente y amigable.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="mt-12">
        <div class="text-center mb-10 space-y-3">
            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-teal-500">Servicios</p>
            <h2 class="text-3xl font-bold text-orange-600">Soluciones completas en naranja y turquesa</h2>
            <p class="text-teal-700 max-w-3xl mx-auto">Coordinamos diseño, construcción e interiorismo para que todo se vea alineado.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @php
                $services = [
                    ['title' => 'Remodelación residencial', 'copy' => 'Zonas sociales con naranja suave y dormitorios con notas turquesa.'],
                    ['title' => 'Cocinas y baños', 'copy' => 'Superficies resistentes con acentos aqua y herrajes cálidos.'],
                    ['title' => 'Pintura y acabados', 'copy' => 'Curaduría de muros, plafones y molduras en la paleta acordada.'],
                    ['title' => 'Pisos y carpintería', 'copy' => 'Maderas claras selladas para resaltar la combinación cromática.'],
                    ['title' => 'Fachadas y roofing', 'copy' => 'Exterior terracota con detalles turquesa para destacar.'],
                    ['title' => 'Handyman comercial', 'copy' => 'Mantenimiento y señalética con los mismos colores corporativos.'],
                ];
            @endphp
            @foreach ($services as $service)
                <article class="p-6 rounded-2xl bg-white border border-slate-100 shadow-md">
                    <div class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.3em] text-teal-500 mb-3">
                        <span class="h-2 w-2 rounded-full bg-teal-500"></span> {{ $service['title'] }}
                    </div>
                    <p class="text-orange-600">{{ $service['copy'] }}</p>
                </article>
            @endforeach
        </div>
    </section>

    <section id="gallery" class="mt-12 bg-white rounded-3xl border border-orange-100 shadow p-8">
        <div class="text-center space-y-3 mb-6">
            <h2 class="text-3xl font-bold text-orange-600">Galería naranja + turquesa</h2>
            <p class="text-teal-700">Inspiración de proyectos reales con textura cálida y acentos aqua.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @for ($i = 1; $i <= 6; $i++)
                <div class="h-44 rounded-2xl border border-teal-100 bg-gradient-to-br from-orange-50 to-teal-50 flex flex-col justify-center items-center text-teal-700 font-semibold">
                    Proyecto {{ $i }}
                    <span class="text-xs uppercase tracking-[0.4em] text-teal-600 mt-2">Palette</span>
                </div>
            @endfor
        </div>
    </section>

    <section id="contact" class="mt-12 bg-gradient-to-r from-teal-600 to-orange-500 text-white rounded-3xl shadow-xl p-8 md:p-12">
        <div class="text-center space-y-3 mb-6">
            <h2 class="text-3xl font-bold text-white">Contáctanos</h2>
            <p class="max-w-2xl mx-auto text-white/90">Cuéntanos tu idea y diseñamos un plan con la paleta perfecta para tu marca.</p>
        </div>
        <form class="max-w-2xl mx-auto grid gap-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block mb-1 font-semibold">Nombre</label>
                    <input type="text" id="name" name="name" class="w-full rounded-2xl border border-white/40 bg-white/15 px-3 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" required>
                </div>
                <div>
                    <label for="email" class="block mb-1 font-semibold">Correo</label>
                    <input type="email" id="email" name="email" class="w-full rounded-2xl border border-white/40 bg-white/15 px-3 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" required>
                </div>
            </div>
            <div>
                <label for="message" class="block mb-1 font-semibold">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="w-full rounded-2xl border border-white/40 bg-white/15 px-3 py-2 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" required></textarea>
            </div>
            <button type="submit" class="px-6 py-3 rounded-full bg-orange-500 text-white font-semibold border-2 border-teal-500 shadow hover:bg-orange-600 transition w-full md:w-auto">Enviar mensaje</button>
        </form>
    </section>
@endsection

