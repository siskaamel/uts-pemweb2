<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Homepage</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
</head>
<body>
   
<x-layout>
    <div class="row">
    <h3>Categories</h3>
    @foreach($categories as $category)
    <div class="col-2">
    <div class="card">
    <img src="{{ $category['image'] }}" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">{{ $category['name'] }}</h5>
    <p class="card-text">
    {{ $category['description'] }}
    </p>
    <a href="/category/{{ $category['slug'] }}" class="btn
    btn-primary">Detail</a>
    </div>
    </div>
    </div>
    @endforeach
  </div>
</x-layout>

 <script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>
</body>
</html>

