@extends('layouts.master')

@section('content')
  <article>
    <h2>Let's Talk</h2>

    <p>Please complete the form below and I will respond as soon as possible.</p>

    <form>
        <label for="name">Your Name</label>
        <input type="text" name="name" />
        <br />
        <label for="email">Your Email Address</label>
        <input type="text" name="email" />
        <p>Your information is never shared and you will not be added to a mailing list.</p>
        <br />
        <label for="message">Your Message</label>
        <input type="text" name="message" />
        <br />
        <input type="submit" value="Send Message">
    </form>
  </article>
@stop
