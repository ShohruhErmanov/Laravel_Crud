<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car CRUD</title>
</head>
<body>





@extends('layouts.crud')
@section('content')

<div class="py-5 d-flex justify-content-between align-items-center">
    <h2>Cars</h2>
    <div class="col-xl-2">
       <a href="{{ route('cars.create') }}" class="btn btn-primary">Car add</a>
    </div>
</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Year</th>
        <th scope="col">Img</th>
        <th scope="col">Button</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)


      <tr>
        <th scope="row">{{ $car->id }}</th>
        <td>{{ $car->name }}</td>
        <td>{{ $car->price }}</td>
        <td>{{ $car->year }}</td>
       <td>
        <img src="/images/{{ $car->img }}" alt="" width="150px">
       </td>


      <td style="display: flex; column-gap: 10px;">
        <a href="{{ route('cars.show', $car->id) }}" class="btn btn-warning">Show</a>
        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-success">Update</a>
        <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('o\'chirishni hohlaysizmi?')">Delete</button>
         </form>
     </td>

      </tr>
      @endforeach


    </tbody>
  </table>

@endsection

</body>
</html>
