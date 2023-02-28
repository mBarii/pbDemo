
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1 class="display-3">Rooms</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Room ID</th>
      <th scope="col">Description</th>
      <th scope="col">Capacity</th>
      <th scope="col">Date From</th>
      <th scope="col">Date To</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($rooms as $room)
    <tr>
      <td>{{$room->roomID}}</td>
      <td>{{$room->roomDescription}}</td>
      <td>{{$room->roomCapacity}}</td>
      <td>{{$room->dateFrom}}</td>
      <td>{{$room->dateTo}}</td>
      <td><button type="button" class="btn btn-dark">Edit</button></td>
      <td><button type="button" class="btn btn-dark">Delete</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
    
</body>
</html>