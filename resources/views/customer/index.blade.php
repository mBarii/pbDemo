
@include('partials.header')
<x-nav/>

@if(Session::has('success'))
<div><p>{{session::get('success')}}</p></div>
@endif

<table class="table table-hover" style="background-color:#ffe59e" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Address</th>
      <th></th>
      <th>

      </th>
    </tr>
  </thead>
  @foreach ($customers as $customer)
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td>
         
        <a href="edit/{{$customer->id}}" class="btn btn-outlinr-danger">Edit</a>
        <a href="delete/{{$customer->id}}" class="btn btn-outlinr-danger">Delete</a>
        
        
      </td>
    </tr>
  </tbody>
  @endforeach
</table>

@include('partials.footer')