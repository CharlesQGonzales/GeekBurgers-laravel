<!DOCTYPE html>
<html lang="en">

<head>
@include("layouts/head_signup")

<title>Sign Up</title>
</head>
<body>
@include("layouts/navbar-user")
<!-- Form-XL-->

<div class="form-contain container-fluid d-none d-sm-block">
      <div class="logIn col-12">
        <form action="/signup" method="POST" class="form">
            
            @csrf
            <div class="row">
            <div class="col-7">
              <img src="../img/people.png" class="form-img" />
            </div>
            <div class="col-5">
              <p class="heading fs-4">SIGN UP</p>
              <div class="password-confirmation">
                <span id="password-match-error" class="text-danger">
                  Password and Confirm Password<br />do not match
                </span>
                <span id="password-match-success" class="text-success">
                  Password matched
                </span>
              </div>
              <input
                class="input"
                required
                placeholder="First Name"
                type="text"
              />
              <input
                class="input"
                required
                placeholder="Last Name"
                type="text"
              />
              <input
                class="input"
                required
                placeholder="Mobile Number"
                type="text"
              />
              <input
                class="input"
                required
                placeholder="Email Address"
                type="email"
              />
              <input
                required=""
                type="text"
                class="input"
                placeholder="Birthdate"
                onfocus="(this.type='date')"
              />
              <input
                class="input"
                required
                placeholder="Password"
                type="password"
                id="password"
              />
              <input
                class="input"
                required
                placeholder="Confirm Password"
                type="password"
                id="confirm-password"
              />
              <div class="check-flex">
                <label class="checkbox-btn">
                  <label for="checkbox"></label>
                  <input id="checkbox" type="checkbox" />
                  <span class="checkmark"></span>
                </label>
                <div>Agree to terms and conditions</div>
              </div>
              <div class="register-flex">
                <a class="nav-link" href="sign-in.html"
                  >Already have an account?</a
                >
              </div>
              <button type="submit" class="btn">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <div class="icon-fry"><img src="../img/fry-1.svg" /></div>
      <div class="icon-fry-2"><img src="../img/fry-3.svg" /></div>
      <div class="icon-fry-3"><img src="../img/fry-2.svg" /></div>
    </div>

    <!-- Form-SM-->

    <div class="form-contain d-block d-sm-none">
      <div class="logIn col-12">
      <form action="/register" method="POST">
    @csrf
    <img src="../img/people.png" class="form-img" />
          <p class="heading fs-3">SIGN UP</p>
          <div class="password-confirmation">
            <span id="password-match-error" class="text-danger">
              Password and Confirm Password do not match
            </span>
            <span id="password-match-success" class="text-success">
              Password matched
            </span>
          </div>
          <input class="input" required placeholder="First name" type="text" />
          <input class="input" required placeholder="Last name" type="text" />
          <input
            class="input"
            required
            placeholder="Mobile Number"
            type="text"
          />
          <input
            class="input"
            required
            placeholder="Email Address"
            type="email"
          />
          <input
            required=""
            type="text"
            class="input"
            placeholder="Birthdate"
            onfocus="(this.type='date')"
          />
          <input
            class="input"
            required
            placeholder="Password"
            type="password"
            id="password"
          />
          <input
            class="input"
            required
            placeholder="Comfirm Password"
            type="password"
            id="confirm-password"
          />
          <div class="check-flex">
            <label class="checkbox-btn">
              <label for="checkbox"></label>
              <input id="checkbox" type="checkbox" />
              <span class="checkmark"></span>
            </label>
            <div>Agree to terms and conditions</div>
          </div>
          <div class="register-flex">
            <a class="nav-link" href="sign-in.html">Already have an account?</a>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>
@include("layouts/footer")
</body>

</html>