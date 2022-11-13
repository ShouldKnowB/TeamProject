@extends('layouts.app')

<body>
    <section class="contact_us">
        <div class="content">
            <h2>contact us</h2>
            <p>Have a question? Send us a message, we'd love to hear from you. We'll get back to you as soon as
                possible.
            </p>
        </div>
        <div class="container">
            <div class="contactForm">
                <form>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span> full name </span>
                    </div>
                    <div class="inputBox">
                        <input type="email" required="required">
                        <span> email </span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span> type message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="Send">
                </form>
            </div>
    </section>
</body>
