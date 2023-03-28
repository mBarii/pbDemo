@include('partials.header')


<form action="/save" method="POST">
    @csrf
    @error('email')
        <p>Invalid Account</p>
    @enderror

  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" class="form-control" name="lastName" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" name="firstName" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="contactNumber">contact Number</label>
    <input type="text" class="form-control" name="contactNumber" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')