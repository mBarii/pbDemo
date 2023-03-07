
@include('partials.header')
<x-nav>

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
<table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">First Name</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Last Name</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Address</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">E-mail</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900">Contact Number</th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
      <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-100 border-t border-gray-100">
  @foreach ($customers as $customer)
    <tr class="hover:bg-gray-50">
      <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
      <div class="text-sm">    
          <div class="font-medium text-gray-700">{{$customer->lastName}}</div>
          </div>
      </th>
      <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->firstName}}</div>
              </div>
          </td>
  
      <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->email}}</div>
              </div>
      </td>
  
      <td class="px-6 py-4">
          <div class="text-sm">
              <div class="font-medium text-gray-700">{{$customer->address}}</div>
              </div>
      </td>
      <td><button type="button" class="btn btn-dark">Edit</button></td>
      <td><button type="button" class="btn btn-dark">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div> 
@include('partials.footer')