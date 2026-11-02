<x-layouts::landing>
    {{-- Navigation Bar --}}
    @include('partials.landing.navbar')

    {{-- Main Content --}}
    <main>
        {{-- Hero Section --}}
        @include('partials.landing.hero')

        {{-- Services Section --}}
        @include('partials.landing.services')

        {{-- Portfolio / Projects Showcase Section --}}
        @include('partials.landing.portfolio')

        {{-- Pricing Section --}}
        @include('partials.landing.pricing')

        {{-- Advantages / Why Choose Us Section --}}
        @include('partials.landing.advantages')

        {{-- Call To Action Section --}}
        @include('partials.landing.cta')
    </main>

    {{-- Footer Section --}}
    @include('partials.landing.footer')
</x-layouts::landing>
