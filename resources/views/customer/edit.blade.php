@include('partials.header')


<form action="/update" method="POST">
    @csrf
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <input type="hidden" id="Id" name="id" value="{{$customers->id}}">

  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" value="{{$customers->lastName}}">
  </div>
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" name="firstName" value="{{$customers->firstName}}">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" name="email" value="{{$customers->email}}">
  </div>
  <div class="form-group">
    <label for="contactNumber">contact Number</label>
    <input type="text" class="form-control" name="contactNumber" value="{{$customers->contactNumber}}">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" value="{{$customers->address}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')