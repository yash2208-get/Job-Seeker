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
    <link rel="stylesheet" href="job.css">
    <link rel="stylesheet" href="tailwind.css">
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
              <li class="nav-item" >
                <a class="nav-link  text-capitalize" href="jobs.php" style="color: black; font-weight: bold;">Job Seekers</a>
              </li>             
              <li class="nav-item" >
                <a class="nav-link  text-capitalize" href="contact.php" style="color: black; font-weight: bold;">Contact number</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--slider Image
      <div class="slider-box bg-fixed"> 
      </div>-->
      <section class="backg-img bg-fixed">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12 col-md-6 col-12 col-xxl-12 ">
                    <center> <h1 class="text-capitalize display-4 m-5">Job Seekers</h1></center>
            </div>
        </div>
    </div>
</section>
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-9 col-md-6 col-10 col-xxl-9">
                        <center><p>Standing at the Cross Roads – confused about your career, unable to fulfill your Caliber, and looking for advice on starting your career / switching jobs? Write to us for expert guidance and advice, to move ahead in your Quest for the right Job. We have a vast range of services besides the standard placement assistance services.
                        </p></center>
                        <h1 class="text-capitalize display-6 mt-5" style="color: brown;">Respecting the needs of the applicant</h1>
                        <hr class="w-30 mx-auto my-4">
                        <p>The most important feature we offer to candidates is our straight forward and honest approach. We are deadly confidential with the information you supply us. Our track record and reputation proves our commitment to you.</p>

                        <h1 class="text-capitalize display-6 mt-5" style="color: brown;">Info for Job seekers:</h1>
                        <hr class="w-30 mx-auto my-4">
                        <p>Resumes are never sent to a potential employer without discussion. We match up candidates profile with companies which hold the most similar values. <br>
                            Our positions run till top level management. <br>
                            We have openings in all segments like Technical, Non -Technical, IT, Non – IT etc.</p>

                            <h1 class="text-capitalize display-6 mt-5" style="color: brown;">Registration, Counseling, and Resume Making</h1>
                            <hr class="w-30 mx-auto my-4">
                            <p>Resumes are never sent to a potential employer without discussion. We match up candidates profile with companies which hold the most similar values. <br>
                                Our positions run till top level management. <br>
                                We have openings in all segments like Technical, Non -Technical, IT, Non – IT etc.</p>

                                <h1 class="text-capitalize display-6 mt-5" style="color: brown;">Career Orientation</h1>
                                <hr class="w-30 mx-auto my-4">
                                <p>Resumes are never sent to a potential employer without discussion. We match up candidates profile with companies which hold the most similar values. <br>
                                    Our positions run till top level management. <br>
                                    We have openings in all segments like Technical, Non -Technical, IT, Non – IT etc.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-10 col-xxl-3">
                        <div class="Upload_Resume">
                            <h3 class="text-center text-capitalize display-6 mt-5" style="color: #fff;">Upload Your Resume Here</h3>
                            <form method="post"  enctype="multipart/form-data" >
                                <label for="">Name :</label><br>
                                <input type="text" placeholder="Name..." required name="name" id="name"><br>
                                <label for="">E-mail</label><br>
                                <input type="email" placeholder="E-mail..." name="mail" required><br>
                                <label for="">Contact</label><br>
                                <input type="number" placeholder="Contact..."  name="phone" required><br>
                                <label for="">Upload Resume*:</label><br>
                                <input type="file" placeholder="Upload Resume..." name="file1" required><br>
                                <center><button type="submit" name="bt1">Send</button></center>
                            </form>
                        </div>
                        <?php
                        if (isset($_POST["bt1"])) 
                        {
                          $name=$_POST["name"];
                          $mail=$_POST["mail"];
                          $phone=$_POST["phone"];
                          $file1=$_FILES["file1"];
                          $filename=$file1['name'];
                          $filepath=$file1['tmp_name'];
                          $file_error=$file1['error'];
                          $filetype=$file1['type'];
                          $filesize=$file1['size'];
                          $destfile='upod/'.$filename;
                          move_uploaded_file($filepath,$destfile);
                          $sql = "INSERT INTO apply (name,mail,cont,file1) VALUES ( '$name', '$mail', '$phone','$destfile')";
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
                </div>
            </div>
        </div>
        </section>
        <section>
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">
                        <h1 class="display-6 mt-6 ml-7">RK Jobs Consultancy Services</h1>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">

                    </div>
                    <div class="col-lg-4 col-md-6 col-12 col-xxl-4 footer">
                      <center>    <p class="address">Address <br><br><span>RK Jobs Consultancy Services</span></p>
                        <p class="ph"><span><i class="fa fa-map-marker" aria-hidden="true"></i>
                        </span> B25 1st Floor , Shyam Sadan Sodala,<br> Jaipur (Raj) India.</p>
                        <p class="ph"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919928990097">+91-9928990097</a></p>
                        <p class="ph"><span><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:919772124945">+91-9772124945</a></p>
                        <p class="ph"><span><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="mailto:hrrkjcs@gmail.com">hrrkjcs@gmail.com</a> </p></center>
                    </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="src.js"></script>
</body>
</html>