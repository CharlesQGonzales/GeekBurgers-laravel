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
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="/profile"
                  ><img
                    class="profile-icon"
                    src="../img/user.svg"
                    width="20px"
                  /><span class="sideNav-text underline-hover-effect"
                    >My Profile</span
                  ></a
                >
              </div>
              <nav class="sub-nav nav flex-column">
                <a class="nav-link" href="/profile/edit"
                  ><img
                    class="spin profile-icon"
                    id="image"
                    src="../img/settings.svg"
                    width="20px"
                  /><span class="edit-text sideNav-text underline-hover-effect"
                    >Edit Profile</span
                  ></a
                >
              </nav>
              <div class="sideNav">
                <a class="nav-link /profile/edit" href="profile/address"
                  ><img
                    class="profile-icon"
                    src="../img/address-book.svg"
                    width="25px"
                  /><span class="sideNav-text underline-hover-effect"
                    >My Address</span
                  ></a
                >
              </div>
              <nav class="sub-nav nav flex-column">
                <a class="nav-link" href="address/edit"
                  ><img
                    class="spin profile-icon"
                    id="image"
                    src="../img/settings.svg"
                    width="20px"
                  /><span class="edit-text sideNav-text underline-hover-effect"
                    >Edit Address</span
                  ></a
                >
              </nav>
            </nav>
          </div>

          <div class="column-8">
            <div class="profile-heading">{{Session::get('first_name')}} {{Session::get('last_name')}}'s ADDRESS</div>
            <hr />
            @foreach ($address as $a)
            <div>
              <div class="profile-img">
                <img src="../img/41.jpg" />
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
                <th>House Number</th>
                <td>{{$a->house_number}}</td>
                <th>Street</th>
                <td>{{$a->street}}</td>
              </tr>
              <tr>
                <th>Barangay</th>
                <td>{{$a->barangay}}</td>
                <th>Province</th>
                <td>{{$a->province}}</td>
              </tr>
              <tr>
                <th>City</th>
                <td>{{$a->city}}</td>
                <th>Zip Code</th>
                <td>{{$a->zipcode}}</td>
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
    </div>