
@include('partials.header')
<x-nav/>

@if(Session::has('success'))
<div><p>{{session::get('success')}}</p></div>
@endif

<table class="table table-hover" style="background-color:#ffe59e" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->prodName}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>
         
        <a href="edit/{{$product->id}}" class="btn btn-outlinr-danger">Edit</a>
        <a href="delete/{{$product->id}}" class="btn btn-outlinr-danger">Delete</a>
        
        
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')