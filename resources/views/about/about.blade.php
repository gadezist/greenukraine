<x-app-layout>
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-black">
                    <h1>About Us</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('build/assets/img/about-hero.svg') }}" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <div class="text-center">
        <a href="{{ route('contact') }}">
            <button type="button" class="btn btn-block btn-outline-dark btn-lg">Contact Us</button>
        </a>
    </div>
</x-app-layout>
