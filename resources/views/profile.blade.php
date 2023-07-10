<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head_profile")
    <title>Geekburger</title>
</head>

<body>
@include("layouts/navbar-user")

<!-- profile -->
<div id="profile-body">
  <div id="profile-container" class="container">
    <div class="profile-contain">
      <div class="column-4">
        <nav id="navbar-example-l" class="nav flex-column">
          <h5>My Account</h5>
          <div class="sideNav">
            <a class="nav-link active" aria-current="page" href="/profile">
              <img class="profile-icon" src="../img/user.svg" width="20px" />
              <span class="sideNav-text underline-hover-effect">My Profile</span>
            </a>
          </div>
          <nav class="sub-nav nav flex-column">
            <a class="nav-link" href="/profile/edit">
              <img class="spin profile-icon" id="image" src="../img/settings.svg" width="20px" />
              <span class="edit-text sideNav-text underline-hover-effect">Edit Profile</span>
            </a>
          </nav>
          <div class="sideNav">
            <a class="nav-link" href="/address">
              <img class="profile-icon" src="../img/address-book.svg" width="25px" />
              <span class="sideNav-text underline-hover-effect">My Address</span>
            </a>
          </div>
          <nav class="sub-nav nav flex-column">
            <a class="nav-link" href="/address/edit">
              <img class="spin profile-icon" id="image" src="../img/settings.svg" width="20px" />
              <span class="edit-text sideNav-text underline-hover-effect">Edit Address</span>
            </a>
          </nav>
        </nav>
      </div>
      <div class="column-8">
    <div class="profile-heading">{{Session::get('first_name')}} {{Session::get('last_name')}}'s PROFILE</div>
    <hr />
    @foreach ($profiles as $profile)
        <div>
            <div class="profile-img">
                <img src="/img/{{$profile->image}}" />
            </div>
            <div class="profile-edit-pict">
                <label for="file-input">
                    <!-- <img src="../img/camera.svg" /> -->
                </label>
                <input id="file-input" type="file" />
            </div>
        </div>
        <table>
            <tr>
                <th>First Name</th>
                <td>{{$profile->first_name}}</td>
                <th>Last Name</th>
                <td>{{$profile->last_name}}</td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td>{{$profile->mobile_number}}</td>
                <th>Email Address</th>
                <td>{{$profile->email}}</td>
            </tr>
        </table>
    @endforeach
</div>
    </div>
    <div class="profile-svg"><img src="../img/burger-guy.svg" /></div>
    <div class="profile-svg-2"><img src="../img/fry-1.svg" /></div>
    <div class="profile-svg-3"><img src="../img/fry-3.svg" /></div>
    <div class="profile-svg-4"><img src="../img/fry-2.svg" /></div>
    <div class="profile-svg-5"><img src="../img/fry-2.svg" /></div>
  </div>




@include("layouts/footer")
</body>
</html>