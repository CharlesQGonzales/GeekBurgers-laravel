<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title></title>
</head>
<body>
@include("layouts/navbar-user")
    <div class="pageloader col-12 d-flex justify-content-center">
      <img src="../img/pageloader.gif" width="150px" />
    </div>
    <div class="pt-5 col-12 d-flex justify-content-center">
      <div id="myProgress">
        <div id="myBar"></div>
      </div>
    </div>
    <script src="../js/pageloader.js"></script>

</body>

</html>