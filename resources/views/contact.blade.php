@extends('layouts.master')

@section('content')
  <article>
    <div class="contact masthead"><h2>Contact Me</h2></div>

    <section>
    <div class="solid background">
        <h3>Let's Talk.</h3>
        @include('common.errors')
        <p>Please complete the form below and I will respond as soon as possible.</p>

        <form method="post" action="/contact/send-message">
            {!! csrf_field() !!}
            <label for="name">Your Name</label>
            <input type="text" name="name" value="{{ old('name') }}" />
            <br />
            <label for="email">Your Email Address</label>
            <input type="text" name="email" value="{{ old('email') }}" />
            <p>Your information is never shared and you will not be added to a mailing list.</p>
            <br />
            <label for="message">Your Message</label>
            <textarea type="text" name="message">{{ old('message') }}</textarea>
            <br />
            <input type="submit" value="Send Message">
        </form>
    </div>
    </section>
  </article>
@stop
