<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('public') }}/assets-signup/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ url('public') }}/assets-signup/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-signup/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ url('public') }}/assets-signup/css/style.css">

    <title>Register</title>
  </head>
  <body>
  

  
    <div class="content">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <span class="d-block text-center my-4 text-muted"> Or register with</span>
            <div class="social-login text-center">
              <a href="#" class="facebook btn btn-block">
                <span class="icon-facebook mr-3"></span> 
              </a>
              <a href="#" class="twitter btn btn-block">
                <span class="icon-twitter mr-3"></span> 
              </a>
              <a href="#" class="google btn btn-block">
                <span class="icon-google mr-3"></span> 
              </a>
            </div>

          </div>
          <div class="col-lg-2 my-5 text-center">
            &mdash; or &mdash;
          </div>
          <div class="col-lg-5 contents">
            <div class="form-block">
            <div class="mb-4 text-center">
                  <h3>Register</h3>
                  <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                </div>
                <form action="#" method="post">
                  <div class="form-group first">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name">

                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">

                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password">
                    
                  </div>
                  <div class="form-group last mb-4">
                    <label for="re-password">Re-type Password</label>
                    <input type="password" class="form-control" id="re-password">
                    
                  </div>
                  
                  <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"><a href="#">Terms and Conditions</a></span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                    <span class="ml-auto"><a href="{{ url('login') }}" class="forgot-pass">Sign In</a></span> 
                  </div>

                  <input type="submit" value="Register" class="btn btn-pill text-white btn-block btn-primary">

                  
                  
                  
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

  
    <script src="{{ url('public') }}/assets-signup/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public') }}/assets-signup/js/popper.min.js"></script>
    <script src="{{ url('public') }}/assets-signup/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/assets-signup/js/main.js"></script>
  </body>
</html>