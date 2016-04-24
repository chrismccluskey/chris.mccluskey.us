@if (count($errors) > 0)
  <div class="error">
  <strong>Oops! I couldn't send that message..</strong>
  <p>Please fix the following:</p>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
  </div>
@endif
