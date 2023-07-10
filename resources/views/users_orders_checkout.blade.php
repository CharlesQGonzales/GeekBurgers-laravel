<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Geekburger</title>
    
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
    </style>
<body>
    @include("layouts/navbar-user")
    <div class="d-flex justify-content-center mt-5">
        <div class="card text-center">
            <div class="card-body mt-5">
                <h2 class="card-title">Check Order</h2>
                <h3 class="card-text">   
                    <h1>Total order is ₱{{$total}}</h1>
                    <form action="/orders/checkout" method="POST">
                    <ul>

        @for ($i = 0; $i < count($products); $i++)
        <p hidden>
            {{$input = $request->input('order_' . $products[$i] -> product_id)}}
        </p>
        @if ($input > 0)
            <li>{{$products[$i]->name}}: {{$input}} (₱{{$products[$i]->price * $input}})</li>
        @endif
        <input type="text" name="order_{{$products[$i]->product_id}}" value="{{$input}}" hidden/>
        
        @endfor
        </br>
        
        <button class="btn btn-success" type="submit">Place order</button>
    </ul></h3>

            </div>
        </div>
    </div>
</body>

</html>
