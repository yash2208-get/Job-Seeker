<?php
  require "cont.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tailwind.css">
    <style>
      button
{
    margin: 10px;
    padding: 10px;
    text-align: center;
    background-color: rgb(109, 36, 36);
    width: 200px;
    margin-bottom: 20px;
    border-radius: 10px;
}
    </style>
</head>
<body onload="my()">
  <div id="loaging">

  </div>
    <!--Naver bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RK Jobs Consultancy Services</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="index.php" style="color: black; font-weight: bold;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="about.php" style="color: black; font-weight: bold;">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  text-capitalize" href="jobs.php" style="color: black; font-weight: bold;">Job Seekers</a>
              </li>             
              <li class="nav-item" >
                <a class="nav-link  text-capitalize" style="color: black; font-weight: bold;">Contact </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--slider Image
      <div class="slider-box bg-fixed"> 
      </div>-->
      <section class="bg-fixed">
        <div class="container-fluid">
            <div class="row my-5">
                <div class="col-lg-12 col-md-6 col-12 col-xxl-12 ">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.0366835761674!2d75.76419501454764!3d26.902330867014374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db46362094121%3A0xa246dc22562dc8b6!2sShyam%20Sadan!5e0!3m2!1sen!2sin!4v1644431363989!5m2!1sen!2sin" width="100%" height="450" style="margin-top: 30px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-6 col-md-6 col-10 col-xxl-6 form-img">
                        
                        <form class="mt-10" method="post">
                            <center><h1 class="display-5">Contact Us</h1></center>
                            <div class="row mb-3">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Full Name</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Full Name..." required>
                              </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputPassword3" class="col-sm-2 col-form-label">E-mail</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputPassword3" name="mail" placeholder="E-mail..." required>
                              </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Contact </label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputEmail3" name="phone" placeholder="Contact Number..." required>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                  <textarea  class="form-control" placeholder="Message..." name="meag" required></textarea>
                                </div>
                              </div>
                              <center><button type="submit" name="bt1"> Send Message</button></center>
                          </form>
                          <?php
                        if (isset($_POST["bt1"])) 
                        {
                          $name=$_POST["name"];
                          $mail=$_POST["mail"];
                          $phone=$_POST["phone"];
                          $meg=$_POST["meag"];
                          $sql = "INSERT INTO meg (name,mail,cont,meg) VALUES ( '$name', '$mail', '$phone','$meg')";
                          $check1=mysqli_query($con,$sql);
                          if($check1)
                          {?>
                            <script>
                              alert("Data is Insert");
                            </script>
                            <?php
                          }
                          else
                          {?>
                            <script>
                              alert("Data is NOT Insert");
                            </script>
                            <?php
                          }
                        }
                        ?>
                    </div>
                    <div class="col-lg-6 col-md-6 col-10 col-xxl-6 form-text">
                      <center>    <p class="address" style="color: #000;">Address <br><span>RK Jobs Consultancy Services</span></p>
                        <p class="ph" style="color: #000;"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span> B25 1st Floor , Shyam Sadan Sodala,<br> Jaipur (Raj) India.</p>
                        <p class="ph" style="color: #000;"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919928990097">+91-9928990097</a></p>
                        <p class="ph" style="color: #000;"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919772124945">+91-9772124945</a></p>
                        <p class="ph" style="color: #000;"><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:hrrkjcs@gmail.com">hrrkjcs@gmail.com</a> </p></center>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">
                      <h1 class="display-6 mt-6 ml-7">RK Jobs Consultancy Services</h1>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">
                    
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">
                        <center><p class="address">Address <br><br><span>RK Jobs Consultancy Services</span></p>
                          <p class="ph"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                          </span> B25 1st Floor , Shyam Sadan Sodala,<br> Jaipur (Raj) India.</p>
                          <p class="ph"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919928990097">+91-9928990097</a></p>
                          <p class="ph"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919772124945">+91-9772124945</a></p>
                          <p class="ph"><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:hrrkjcs@gmail.com">hrrkjcs@gmail.com</a> </p></center>
                    </div>
                </div>
            </div>
    </section>
    <script src="src.js"></script>
</body>
</html>