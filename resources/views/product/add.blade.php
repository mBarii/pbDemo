@include('partials.header')


<form action="/save" method="POST">
    @csrf
    @error('email')
        <p>Invalid Account</p>
    @enderror

  <div class="form-group">
    <label for="prodName">Product Name</label>
    <input type="text" class="form-control" name="prodName" placeholder="Enter product">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="quantity" placeholder="Quantity">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" placeholder="Price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')