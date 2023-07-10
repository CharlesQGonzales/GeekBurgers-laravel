<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head_signin")
    <title>Sign In</title>
</head>

<body>
@include("layouts/navbar")


   <!-- Form-XL-->

    <div class="form-contain container-fluid d-none d-sm-block">
      <div class="logIn col-12">
      <form action="/signin" method="POST" class="form">
    @csrf
    <div class="row">
            <div class="col-7">
              <img src="../img/people.png" class="form-img" />
            </div>
            <div class="ms-5 col-4">
              <p class="heading fs-4">SIGN IN</p>
              <div class="password-confirmation">
                <span id="password-match-error" class="text-danger">
                  Password and Confirm Password<br />do not match
                </span>
                <span id="password-match-success" class="text-success">
                  Password matched
                </span>
              </div>
              <input
                class="input mt-5"
                required
                placeholder="Email Address"
                type="email"
                name="email"
              />
              <input
                class="input"
                required
                placeholder="Password"
                type="password"
                name="password"
                id="password"
              />
              <div class="register-flex">
                <p>Need an account?</p>
                <a class="nav-link" href="/signup">Register</a>
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
      <form action="/signin" method="POST" class="form">
    @csrf
    <img src="../img/people.png" class="form-img" />
          <p class="heading fs-3">SIGN IN</p>
          <div class="password-confirmation">
            <span id="password-match-error" class="text-danger">
              Password and Confirm Password<br />do not match
            </span>
            <span id="password-match-success" class="text-success">
              Password matched
            </span>
          </div>
          <input
            class="input first"
            required
            placeholder="Email Address"
            type="email"
          />
          <input
            class="input"
            required
            placeholder="Password"
            type="password"
            id="password"
          />
          <div class="register-flex">
            <p>Need an account?</p>
            <a class="nav-link" href="sign-up.html">Register</a>
          </div>
          <button type="submit" class="btn">Submit</button>
        </form>
      </div>
    </div>

    @include("layouts/footer")
</body>

</html>