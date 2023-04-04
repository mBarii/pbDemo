@include('partials.header')


<form action="/update" method="POST">
    @csrf
    @error('email')
        <p>Invalid Account</p>
    @enderror

    <input type="hidden" id="Id" name="id" value="{{$products->id}}">

  <div class="form-group">
    <label for="prodName">Product</label>
    <input type="text" class="form-control" name="prodName" value="{{$products->prodName}}">
  </div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" class="form-control" name="quantity" value="{{$products->quantity}}">
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" value="{{$products->price}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@include('partials.footer')