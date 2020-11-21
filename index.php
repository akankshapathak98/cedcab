<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cab Fare</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper ">
        <div class=" text-center">
          <header>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <h3 class="text-white">CED <span id="logo">CAB</span></h3>
            
            <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navb" >
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse " id="navb">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#">Disabled</a>
                </li>
              </ul>
            </div>
          </nav>
          <h1 class="text-white">Book a city Taxi to your destination in town </h1>
          
            
          </header>
          <section>
            <div class="row container">
              <div class="container">
              <div class="col-lg-4 formcontainer text-center ">
                <span class="border">CED CAB</span>
                <div class="clearfix"></div>
                <div id="line">
                  <h2>Your everyday travel partner </h2>
                  <p>AC Cabs for point to point travel</p>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="inputGroupSelect01">PICKUP</label>
                  </div>
                  <select class="custom-select focus"  id="inputGroupSelect01">
                    <option selected>Current</option>
                    <option value="Charbagh">Charbagh</option>
                    <option value="Indira_Nagar">Indira Nagar </option>
                    <option value="BBD">BBD</option>
                    <option value="Barabanki">Barabanki</option>
                    <option value="Faizabad">Faizabad</option>
                    <option value="Basti">Basti</option>
                    <option value="Gorakhpur">Gorakhpur</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="inputGroupSelect02">DROP</label>
                  </div>
                  <select class="custom-select focus"  id="inputGroupSelect02">
                    <option selected>Enter drop for ride estimate</option>
                    <option value="Charbagh">Charbagh</option>
                    <option value="Indira_Nagar">Indira Nagar </option>
                    <option value="BBD">BBD</option>
                    <option value="Barabanki">Barabanki</option>
                    <option value="Faizabad">Faizabad</option>
                    <option value="Basti">Basti</option>
                    <option value="Gorakhpur">Gorakhpur</option>
                  </select>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text " for="inputGroupSelect03">CAB TYPE</label>
                  </div>
                  <select class="custom-select focus"  id="inputGroupSelect03">
                    <option selected>Drop down to select CAB type</option>
                    <option value="CedMicro">CedMicro</option>
                    <option value="CedMini">CedMini</option>
                    <option value="CedRoyal">CedRoyal</option>
                    <option value="CedSUV">CedSUV</option>
                  </select>
                </div>
                <div class="input-group  mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" id="luggage">Luggage</label>
                  </div>
                  <input type="text" class="form-control focus" id="luggage_input" placeholder="Enter Weight in KG">
                </div>
                <button  type="button" class="btn btn-default  form-control form-btn buttonfare" id="getfare">Calculate Fare</button>
              </div></div>
            </div>
          </section>
          <footer class="bg-dark w-100 p-4">
            <div class="row clearfix">
              <div class="text-white col-lg-4 text-center"><i class="fa fa-facebook-square fa-2x"></i> &nbsp;<i class="fa fa-twitter fa-2x"></i></div>
              <div class="col-lg-4 text-center"><h5 class="text-white">copyright &copy; <span id="footerconn">cedcoss</span> pvt.limited</h5></div>
              <div class="col-lg-4 text-center"><a class="text-white" href="#">Link</a>&nbsp;<a class="text-white" href="#">Link</a></div>
            </div>
            
            
          </footer>
        </div>
      </div>
      <script src="script.js"></script>
   </body>
</html>
