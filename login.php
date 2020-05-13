<?php

include('include/header_login.php');
include('connection/config.php');

 ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Sign Up/Login</h1>
            <div class="custom-breadcrumbs">
              <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Log In</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Up To JobBoard</h2>
            <form class="p-4 border rounded" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="repassword">Re-Type Password</label>
                  <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-type Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" id="signup" name="signup" value="Sign Up" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
          <div class="col-lg-6">
            <h2 class="mb-4">Log In To JobBoard</h2>
            <form class="p-4 border rounded" method="POST">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" name="login_email" id="login_email" class="form-control" placeholder="Email address">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="password">Password</label>
                  <input type="password" id="login_password" name="login_password" class="form-control" placeholder="Password">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" id="login" name="login" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer">

      <a href="#top" class="smoothscroll scroll-top">
        <span class="icon-keyboard_arrow_up"></span>
      </a>

      <div class="container">
        <div class="row mb-5">
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Search Trending</h3>
            <ul class="list-unstyled">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Graphic Design</a></li>
              <li><a href="#">Web Developers</a></li>
              <li><a href="#">Python</a></li>
              <li><a href="#">HTML5</a></li>
              <li><a href="#">CSS3</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Company</h3>
            <ul class="list-unstyled">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Career</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Resources</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Support</h3>
            <ul class="list-unstyled">
              <li><a href="#">Support</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3 mb-4 mb-md-0">
            <h3>Contact Us</h3>
            <div class="footer-social">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small></p>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#signup").click(function(){
            var email=$("#email").val();
            var password=$("#password").val();
            var repassword=$("#repassword").val();
            if(email == "")
            {
              alert("Please Enter Email before SignUP");
              return false;
            }if(password == "")
            {
              alert("Please Enter Password before SignUP");
              return false;
            }if(repassword == "")
            {
              alert("Please Confirm Password before SignUP");
              return false;
            }
            if(password != repassword)
            {
              alert("Password Doesn't match");
              return false;
            }
          });
        });
      </script>
      <script type="text/javascript">
        $(document).ready(function(){
          $("#login").click(function(){
            var email= $("#login_email").val();
            var password= $("#login_password").val();
            if(email == "")
            {
              alert("Please Enter Email before Login");
              return false;
            }if(password == "")
            {
              alert("Please Enter Password before Login");
              return false;
            }

          })
        })
      </script>
      <?php

    include('include/footer.php');

     ?>

<!-- Sign UP-->
    
<?php

if(isset($_POST['signup']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $hash_pass=password_hash($password, PASSWORD_DEFAULT);
  $repassword=$_POST['repassword'];

  $email_restrict=mysqli_query($conn,"select * from user_login where email='$email'");
  if(mysqli_num_rows($email_restrict) > 0)
  {
    echo "<script>alert('User already Present Please Login')</script>";   
    exit(0);
  }
  else
  {
     $query=mysqli_query($conn,"insert into user_login (email,password) values ('$email','$hash_pass')");
    if($query)
    {
      echo "<script>alert('Signup Successfull')</script>";
    }
    else
    {
      echo "<script>alert('Some Error Occured')</script>";
    }
    
  }
}

?>
<!--Log In-->
    
<?php

if(isset($_POST['login']))
{
  $email=$_POST['login_email'];
  $password=$_POST['login_password'];

    $query=mysqli_query($conn,"select password from user_login where email='$email'");
    $user=mysqli_fetch_array($query);
    if(mysqli_num_rows($query)>0)
    {
      if(password_verify($password,$user['password']))
      {
        $_SESSION['user_email']=$email;
      }
      else
      {
        echo "<script>alert('Wrong Password')</script>";
      }
    }
    else
    {
      echo "<script>alert('Please SignUP First')</script>";
    }
}

?>