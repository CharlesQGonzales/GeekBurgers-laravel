<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head_faqs")
    <title>Geekburger</title>
</head>

<body>
@include("layouts/navbar-user")
<div class="grid-container">
      <div class="one">
        <h5>Main Branch</h5>
        <h5>Makati Branch</h5>
        <h5>Address: Geekburger The Peninsula</h5>
        <h5>Makati 123 Makati Ave, Makati City</h5>
        <h5>Contact: +63 9123 456 789</h5>
        <h5>Email: geekburgermakati@gmail.com</h5>
      </div>
      <div class="two">
        <h5>Manila branch</h5>
        <h5>Malate branch</h5>
        <h5>Place, Ground Floor, Taft Ave, Malate</h5>
        <h5>ManilaContact: +63 9123 456 789</h5>
        <h5>Email: geekburgermini@geekburger.ph</h5>
      </div>
      <div class="three">
        <h5>North NCR Branch</h5>
        <h5>Quezon City Branch</h5>
        <h5>Address: Geekburger, SM Mall of Asia</h5>
        <h5>123, Maginhawa St. Quezon city, 1300 Metro Manila</h5>
        <h5>QCContact: +63 9123 456 789</h5>
        <h5>Email: geekburgermnl@geekburger.ph</h5>
      </div>
      <div class="four">
        <h5>South NCR Branch</h5>
        <h5>Pasay Branch</h5>
        <h5>Address: Geekburger, SM Mall of Asia,</h5>
        <h5>1300 Seaside Blvd, Pasay, 1300 Metro Manila</h5>
        <h5>ManilaContact: +63 9123 456 789</h5>
        <h5>geekburgermnl@geekburger.ph</h5>
      </div>
    </div>

    <!--Apply now-->
    <div class="row">
      <div class="col-lg-12 p-5 text-center" style="height: 650px">
        <div class="h-100 d-flex align-items-center">
          <div>
            <h1 class="text-start">JOIN OUR GROWING TEAM</h1>
            <p class="text-start">ELEVATE YOUR CAREER WITH GEEKBURGER</p>
            <button
              type="button"
              class="btn btn-success bt-sm download-buttons">
              Apply Now!
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--Contac us-->

    <div class="container">
      <div class="contact-box">
        <div class="left">
          <h1 class="text-start">For Business Franchise:</h1>
          <p class="text-start">
            Fill up the form and we'll be in touch as soon as possible
          </p>
        </div>
        <div class="right">
          <h2>Contact Us</h2>
          <input type="text" class="field" placeholder="Name" />
          <input type="email" class="field" placeholder="Email" />
          <input type="text" class="field" placeholder="Phone number" />
          <textarea class="field" placeholder="Message"></textarea>
          <button class="btn">Send</button>
        </div>
      </div>
    </div>
    @include("layouts/footer")
</body>
</html>