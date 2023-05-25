<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car show</title>
</head>
<body>
    @extends('layouts.crud')
    @section('content')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Year</th>
            <th scope="col">Img</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <th scope="row">{{ $car->id }}</th>
            <td>{{ $car->name }}</td>
            <td>{{ $car->price }}</td>
            <td>{{ $car->year }}</td>
           <td>
            <img src="/images/{{ $car->img }}" alt="" width="150px">
           </td>
          </tr>



        </tbody>
      </table>

    @endsection


</body>
</html>
