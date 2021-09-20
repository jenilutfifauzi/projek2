<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Signup TOWIS</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up to <strong>TOWIS</strong></h3>
              <p class="mb-4"></p>
            </div>
            <form action="proses.php?action=add_user" method="post">
              <div class="form-group first">
                <label for="username">Full Name</label>
                <input type="text" name="name" class="form-control" required>

              </div>
              <div class="form-group last mb-4">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" required>
                
              </div>
              <div class="form-group last mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" required>
                
              </div>
              <div class="form-group last mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" required>
                
              </div>
              <div class="form-group last mb-4">
                <label for="address">Password</label>
                <input type="text" title="6 Character Password. Use UpperCase, Lowercase and Numeric" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimal 6 Karakter' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" name="password" class="form-control" >
                
              </div>
              <div >
                <label> Birth Date</label>
                <input type="date" name="tgl_lahir" class="form-control" required>
                
              </div>
              <div>
              <input type="hidden" name="level_user" value="user" class="form-control" >
                            
              </div>


              <input type="submit" value="Signup" class="btn text-white btn-block btn-primary">

              <!-- <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span>  -->
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>