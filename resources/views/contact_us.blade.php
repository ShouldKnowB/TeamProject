@extends('layouts.app')

<body>
    <section class="contact_us">
        <div class="content">
            <h2>contact us
                @if (session('message'))
                    <h5>
                        <div class="alert alert-success">{{ session('message') }}</div>
                    </h5>
                @endif
            </h2>
            <p>Have a question? Send us a message, we'd love to hear from you. We'll get back to you as soon as
                possible.
            </p>
        </div>
        <div class="container">

            <div class="contact-form">
                <form action="{{ url('contact_us') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="name" required="required">
                        <span> full name </span>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="email" name="email" required="required" />
                        <span> email </span>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="input-box">
                        <textarea name="queries" rows="3" required="required"></textarea>
                        <span> type message...</span>
                        @error('queries')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="button">Send Message</button>
                </form>
            </div>
    </section>
</body>
