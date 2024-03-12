<x-app-layout>

    <div class="contact" style="height: 100%">
        <div class="container">
            <div class="row ">
                <div class="col-md-8 offset-md-2">
                    <div class="titlepage text_align_left">
                        <h2>Get In Touch</h2>
                    </div>
                    @include('partials.success-message')
                    <form id="contact-us" class="main_form" method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                @error('name') <small class="text-danger">{{ $message }}</small>@enderror
                                <input class="contactus @error('name') is-invalid @enderror" placeholder="Name" type="text" name="name">
                            </div>
                            <div class="col-md-12">
                                @error('phone') <small class="text-danger">{{ $message }}</small>@enderror
                                <input class="contactus @error('phone') is-invalid @enderror" placeholder="Phone Number" type="text" name="phone">
                            </div>
                            <div class="col-md-12">
                                @error('email') <small class="text-danger">{{ $message }}</small>@enderror
                                <input class="contactus @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email">
                            </div>
                            <div class="col-md-12">
                                @error('message') <small class="text-danger">{{ $message }}</small>@enderror
                                <textarea class="textarea @error('message') is-invalid @enderror" placeholder="Message" type="text" name="message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('footer')
        @include('layouts.footer')
    @endsection
</x-app-layout>
