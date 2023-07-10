<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/admin_head")
    <title>Document</title>
</head>
<body>
@include("layouts/admin_navbar")
<div class="col-xl-8">
<h1>User Table</h1>
<table class="table table-sm mt-5">
  <thead>
<tr>
      <th scope="col">User_id</th>
      <th scope="col"> Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $u)
    <tr>
      <td>{{$u -> user_id}}</td>
      <td>{{$u -> last_name}}, {{$u -> first_name}}</td>
      <td>{{$u -> mobile_number}}</td>
      <td>{{$u -> email}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>

</html>