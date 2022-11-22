@extends('layouts.app')

<body>
    <section class="contact_us">
        <div class="content">
            <h2>contact us
                @if (session('message'))
        <h5><div class="alert alert-success">{{session('message')}}</div></h5>
        @endif
            </h2>
            <p>Have a question? Send us a message, we'd love to hear from you. We'll get back to you as soon as
                possible.
            </p>
        </div>
        <div class="container">

            <div class="contactForm">
                <form action="{{ url('contact_us') }}" method="POST">
                    @csrf
                    <div class="inputBox">
                        <label> full name </label>
                            <input type="text" name="name" >
                             @error('name') <small class ="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="inputBox">
                        <label> email </label>
                        <input type="email" name="email"  />
                         @error('email') <small class ="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div class="inputBox">
                        <label> type message...</label>
                            <textarea name="queries"  rows="3"></textarea>
                            @error('queries') <small class ="text-danger">{{$message}}</small> @enderror
                    </div>
                        <button type="submit" class="btn btn-primary float-end">Send</button>
                </form>
            </div>
    </section>
</body>
