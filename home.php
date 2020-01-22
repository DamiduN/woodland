
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Woodland Automobiles.ho</title>


  <link href="bootstrap.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link href="Woodland.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Best Automobile Store in Sabaragamuwa Province</span>
    <span class="site-heading-lower"><b>WOODLAND AUTOMOBILES</b></span>
  </h1>
<?php include_once('header.php') ?>
  <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
	  function valPsw(){
          var psw =  document.signup.psw.value;
          var rpsw = document.signup.pswrepeat.value;
          
          if(psw == rpsw){
              return true;
          }else{
              window.alert("The passwords do not match");
              return false;
          }
      }
      </script>
      
 

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/home.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Best Automobile Store</span>
            <span class="section-heading-lower">VISIT US!<span>
          </h2>
          <p class="mb-11">Finding for the right part for your car can be quite a Hard work, especially when every place you go to does not have the exact thing you are after. So far, every petrol head and automotive enthusiast has had to go through this rigorous deal.

              That is until <b>WOODLAND AUTOMOBILES</b>, Sabaragamuwa province biggest online platform for automobile products, parts and services!</p>
          <div class="intro-button mx-auto">
              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up Here</button>

              <div id="id01" class="modal">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <form name="signup" class="modal-content" action="insert.php" method="post" onsubmit="return valPsw()">
                  <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="First Name"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="fname" required>

                    <label for="Last Name"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="lname" required>

                    <label for="Username"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="un" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
              
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
              
                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="pswrepeat" required>
                    
                    <label>
                      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Terms and conditions
                    </label>
              
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              
                    <div class="clearfix">
                      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                      <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                  </div>
                </form>
              </div>
              
              <script>
              // Get the modal
              var modal = document.getElementById('id01');
              
              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
              </script>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">DELIVERY </span>
              <span class="section-heading-lower">ISLAND WIDE </span>
            </h2>
            <p class="mb-11">Island-wide delivery within 1-3 working days and one day delivery in Ratnapura district 1- 15. Cash on delivery available except for Tyres.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy;Woodland Automobiles Official</p>
    </div>
  </footer>

</body>

</html>

  
