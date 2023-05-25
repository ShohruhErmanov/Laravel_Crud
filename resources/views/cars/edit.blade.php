<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car updete</title>
</head>
<body>

    @extends('layouts.crud')
    @section('content')
    <div class="col-xl-6">
        <div class="form">
             <form action="{{route('cars.update', $car->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')


                <div class="from-group py-4">
                     <h1>Create Car</h1>
                </div>

                <div class="from-group py-4">
                     <label for="name" class="form-label">Name</label>
                     <input type="text" class="form-control" name="name" id="name" value="{{ $car->name }}">
                </div>

                <div class="from-group py-4">
                     <label for="price" class="form-label">Price</label>
                     <input type="text" class="form-control" name="price" id="price" value="{{ $car->price }}">
                </div>

                <div class="from-group py-4">
                     <label for="year" class="form-label">Year</label>
                     <input type="number" class="form-control" name="year" id="year" value="{{ $car->year }}">
                </div>

                <div class="from-group py-4">
                     <label for="img" class="form-label">Img</label>
                     <input type="file" class="form-control" name="img" id="img" value="{{ $car->img }}">
                </div>



                <div class="from-group py-4">
                     <input type="submit" value="Yuborish" class="btn-success p-2">
                </div>
             </form>
        </div>
     </div>


 @endsection

</body>
</html>
