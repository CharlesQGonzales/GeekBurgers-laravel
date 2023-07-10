<!DOCTYPE html>
<html lang="en">

  <head>
  @include("layouts/head_editprofile")
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
                  class="nav-link"
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
                <a class="nav-link active" href="/profile/edit"
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
            <div class="profile-heading">EDIT PROFILE</div>
            <hr />
            <div>
              
              <div class="profile-img">
                @foreach ($userimage as $ui)
                <img src="/img/{{$ui->image}}" />
                @endforeach
              </div>
              <div class="profile-edit-pict">            
                <label for="file-input">
                <input id="file-input" type="file" name="image" onchange="updateImageSrc()" style="display:none" />
                  <img src="../img/camera.svg" />
                  
                </label>
                <form action="/profile/edit/{{request() -> route('id')}}/upload" method="POST" enctype="multipart/form-data">
        @csrf
               
              </div>
            </div>
            <form action="/profile/edit" method="POST">
               @csrf
              <table class="table">
                <tr>
                  <th><label for="fname">First Name</label></th>
                  <td><input required="" type="text" class="input" name="first_name" value="{{$user->first_name}}" /></td>
                  <th><label for="lname">Last Name</label></th>
                  <td><input required="" type="text" class="input" name="last_name" value="{{$user->last_name}}" /></td>
                </tr>
                <tr>
                  <th>Birthdate</th>
                  <td>
                  <input type="date" class="input" name="birthdate" value="{{$user->birthdate}}" />
                  </td>
                  <th><label for="gender">Gender</label></th>
                  <td>
                    <select required="" name="gender" id="gender" >
                      <option value="" selected disabled>Select gender</option>
                      <option value="Male" {{$user->gender == 'Male' ? 'selected' : ''}}>Male</option>
                      <option value="Female" {{$user->gender == 'Female' ? 'selected' : ''}}>Female</option>
                      <option value="Other" {{$user->gender == 'Other' ? 'selected' : ''}}>Other</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th><label for="fname">Mobile Number</label></th>
                  <td><input required="" type="text" class="input" name="mobile_number" value="{{$user->mobile_number}}" /></td>
                  <th><label for="fname">Email Address</label></th>
                  <td><input required="" type="email" class="input" name="email" value="{{$user->email}}"/></td>
                </tr>
                <tr>
                  <th><label for="fname">Password</label></th>
                  <td>
                    <input class="input" required="" type="password" name="password" value="{{$user->password}}"/>
                  </td>
                  <th><label for="fname">Confirm Password</label></th>
                  <td>
                    <input class="input" required="" type="password"  name="con-password" value="{{$user->password}}"/>
                  </td>
                </tr>
                <tr>
                  <th>
                    <button class="editProfile-btn">
                      <span style="color:whitesmoke">Save</span>
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