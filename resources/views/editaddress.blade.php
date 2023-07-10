<!DOCTYPE html>
<html lang="en">


  <head>
  @include("layouts/head_editaddress")
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
                  href="profile.html"
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
                <a class="nav-link" href="/profile"
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
                <a class="nav-link" href="/address"
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
                <a class="nav-link" href="/address/edit"
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
  <div class="profile-heading">EDIT ADDRESS</div>
  <hr />
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
  <form action="/profile/edit" method="POST">
    @csrf
    <table>
      <tr>
        <th><label for="house-number">House Number</label></th>
        <td><input required="" type="text" class="input" name="house_number" id="house-number"  /></td>
        <th><label for="street">Street</label></th>
        <td><input required="" type="text" class="input" name="street" id="street"  /></td>
      </tr>
      <tr>
        <th><label for="brgy">Barangay</label></th>
        <td><input required="" type="text" class="input" name="barangay" id="brgy"  /></td>
        <th><label for="province">Province</label></th>
        <td><input required="" type="text" class="input" name="province" id="province"  /></td>
      </tr>
      <tr>
        <th><label for="city">City</label></th>
        <td><input required="" type="text" class="input" name="city" id="city"  /></td>
        <th><label for="zip-code">Zip Code</label></th>
        <td><input required="" type="text" class="input" name="zipcode" id="zip-code"  /></td>
      </tr>
      <tr>
        <th>
          <button class="editAddress-btn">
            <span style="color: white">Save</span>
            <div class="arrow-wrapper">
              <div class="arrow"></div>
            </div>
          </button>
        </th>
      </tr>
    </table>
  </form>
</div>
        </div>
        <div class="profile-svg"><img src="../img/burger-guy.svg" /></div>
        <div class="profile-svg-2"><img src="../img/fry-1.svg" /></div>
        <div class="profile-svg-3"><img src="../img/fry-3.svg" /></div>
        <div class="profile-svg-4"><img src="../img/fry-2.svg" /></div>
        <div class="profile-svg-5"><img src="../img/fry-2.svg" /></div>
      </div>
    </div>


@include("layouts/footer")
</body>
</html>