<!DOCTYPE html>
<html lang="en">


<head>
    @include("layouts/head_menu")
    <title>Document</title>
</head>
<body>

@include("layouts/navbar-user")
<h1 class="display-1 text-center">Menu</h1>
<form action="/orders" method="POST">
@csrf
<div class="container">
  <div class="row">
  <div style="margin-bottom: 10vh"></div>
    <h1>BURGERS</h1>
    @foreach ($burgers as $b)    
    <div class="card">
      <div class="card-img-top">
        <img src="img/{{$b->image}}" alt="..." />
      </div>
      <div class="card-body">
        <div class="card-text">
          <h3>{{$b->name}}</h3>
          <div class="row">
            <p> ₱{{$b->price}} </p>
            <p class="col-9">
            {{$b->description}}
            </p>
            <div class="col-3">
              <!-- <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add Order</div>
              </button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div style="margin-bottom: 10vh"></div>
    <h1>SIDES</h1>
    @foreach ($sides as $s)
    <div class="card">
      <div class="card-img-top">
        <img src="img/{{$s->image}}" alt="..." />
      </div>
      <div class="card-body">
        <div class="card-text">
          <h3>{{$s->name}}</h3>
          <div class="row">
            <p> ₱{{$s->price}} </p>
            <p class="col-9">
            {{$s->description}}
            </p>
            <div class="col-3">
              <!-- <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add Order</div>
              </button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div style="margin-bottom: 10vh"></div>
    <h1>DRINKS</h1>
    @foreach ($drinks as $d)
    <div class="card">
      <div class="card-img-top">
        <img src="img/{{$d->image}}" alt="..." />
      </div>
      <div class="card-body">
        <div class="card-text">
          <h3>{{$d->name}}</h3>
          <div class="row">
            <p> ₱{{$d->price}} </p>
            <p class="col-9">
            {{$d->description}}
            </p>
            <div class="col-3">
              <!-- <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add Order</div>
              </button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div style="margin-bottom: 10vh"></div>
    <h1>DESSERTS</h1>
    @foreach ($desserts as $ds)
    <div class="card">
      <div class="card-img-top">
        <img src="img/{{$ds->image}}" alt="..." />
      </div>
      <div class="card-body">
        <div class="card-text">
          <h3>{{$ds->name}}</h3>
          <div class="row">
            <p> ₱{{$d->price}} </p>
            <p class="col-9">
            {{$ds->description}}
            </p>
            <div class="col-3">
              <!-- <button class="icon-btn add-btn">
                <div class="add-icon"></div>
                <div class="btn-txt">Add Order</div>
              </button> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</form>
@include("layouts/footer")
</body>

</html>