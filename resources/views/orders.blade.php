<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Geekburger</title>
    <style>
    .cards-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: stretch;
}

.card {
  border: none;
  width: 25rem;
  height: 100%;
}

.card img {
    background-color: rgb(138, 228, 229);
  padding: 1em 3em;
  border-radius: 5%;
  max-height: 17rem;
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.card-info {
  padding: 10px;
  text-align: center;
}

.card-info h3 {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 600;
}

.card-info p {
  margin-bottom: 10px;
  font-size: 14px;
  color: #666;
}

.card-info span {
  font-size: 16px;
  font-weight: 600;
}
    </style>
</head>

<body>
    @include("layouts/navbar-user")
    <h1>Orders</h1>
    <form action="/orders" method="POST">
        @csrf
        <div class="cards-wrapper">
            @foreach ($menu as $m)
            <div class="card">
                <img src="/img/{{$m -> image}}" alt="{{$m -> name}}">
                <div class="card-info">
                    <h3>{{$m -> name}}</h3>
                    <p>{{$m -> description}}</p>
                    <span>₱ {{$m -> price}}</span>
                    <br>
                    <input class="text-center" type="number" name="order_{{$m -> product_id}}" value="0" min="0">
                </div>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Checkout</button>
    </form>
</body>

</html>