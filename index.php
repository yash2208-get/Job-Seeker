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
</head>
<body onload="my()">
    <!--Naver bar-->
    <div id="loaging">

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RK Jobs Consultancy Services</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active " aria-current="page" href="#" style="color: black; font-weight: bold;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-capitalize" href="about.php" style="color: black; font-weight: bold;">about us</a>
              </li>             
              <li class="nav-item" >
                <a class="nav-link  text-capitalize" href="jobs.php" style="color: black; font-weight: bold;">Job Seekers</a>
              </li
              <li class="nav-item" >
                <a class="nav-link text-capitalize" href="contact.php" style="color: black; font-weight: bold;">Contact number</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--slider Image
      <div class="slider-box bg-fixed"> 
      </div>-->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active ">
            <img src="img/1.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="img/2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="img/3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
      <br>

      <section class="main-header">
        <div class="text-center">
            <h1 class=" text-capitalize display-4" data-aos="fade-right">Leading consultancy Service in India</h1>
            <hr class="w-30 mx-auto mt-4">
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-12 col-md-6 col-10 col-xxl-12">
                        <p>The RK job consultancy services has established itself as a distinguished name in the placement of Jaipur. By providing a wide range of recruitment and selection services to diverse companies, we have been able to become a significant name in the industry. We provide several placement services such as HR consultancy services, placement consultancy services, corporate training services, educational consultancy services, career consultancy services. Working for us is a reliable team of placement industry experts, who are instrumental in leveraging the business potential of our clients by offering strategic placement services. Dial our numbers now to connect with us.
                        </p>
                    
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section >
            <div class="text-center" >
                <h1 class=" text-capitalize display-4">Our Services</h1>
                <hr class="w-30 mx-auto mt-4">
                <div class="container">
                    <div class="row my-5">
                        <div class="col-lg-4 col-md-6 col-12 col-xxl-4">
                            <center><div class="light ml-20"><img src="img/18.jpg" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                            <h1 class="head1">Recruitment</h1></center>
                            <p class="page"> 
                              RK Jobs Consultancy Services is dedicated to providing Jobs."Hire people who are smarter than you are—whose talents surpass yours—and give them opportunities for growth. <span style="color: red; cursor: pointer;" id="click_item" onclick="click_item_show()">..Read more</span> <span style="display: none;" id="show_item">It’s the smart thing to do and it is a sign of high personal humility".<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite()"> ..Less</span></span> 
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 col-xxl-4">
                            <center><div class="light ml-20"><img src="img/19.png" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                            <h1 class="head1">Hr Consultancy</h1></center><p class="page">
                            If you own a company or have an organization to run, managing the manpower is important. Getting ways to manage people and staffs as well as their payroll and setting rules and regulations is important. <span style="color: red;cursor: pointer;" id="click_item1" onclick="click_item_show1()">..Read more</span><span style="display: none;" id="show_item1">With the help of an HR Consultant, you can easily get things done. You just need to connect with RK Jobs Consultancy Services and we will do the needful.<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite1()"> ..Less</span></span>

                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 col-xxl-4" style="border-right: 1px solid #fff;">
                            <center><div class="light ml-20"><img src="img/15.jpg" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                            <h1 class="head1">Placement Consultancy</h1></center>
                            <p class="page"> Searching for a job amidst this pandemic can be difficult. However, if you are tired of searching for a job and want to get assistance,<span style="color: red;cursor: pointer;" id="click_item2" onclick="click_item_show2()"> ..Read more</span>
                              <span style="display: none;" id="show_item2"> 
                              you can always contact J Jobs Consultancy Services and we will be glad to help you find a job. We have a team of experts who have done this a thousand times. We are a reputed placement consultant that has helped numerous candidates to find a suitable job.<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite2()"> ..Less</span></span></p>
                        </div>
                    </div>
                    <div class="row my-5">
                      <div class="col-lg-4 col-md-6 col-12 col-xxl-4">
                          <center><div class="light ml-20"><img src="img/13.jpg" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                          <h1 class="head1">Career Consultant</h1></center>
                          <p class="page"> If you are stressed about your carrier and want to get assistance, RK Jobs Consultancy services is your one-stop- destination. We are a renowned career consultant that has helped a lot of fresher and experienced <span style="color: red;cursor: pointer;" id="click_item3" onclick="click_item_show3()"> ..Read more</span>
                            <span style="display: none;" id="show_item3">
                            professionals that are in a dilemma of making the right career choices.There is nothing you need to worry about as we will provide you step by step assistance. You need to share your concerns and we will find the best possible way to help you with answering your query and resolving your concern.<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite3()"> ..Less</span></span>

 
                          </p>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 col-xxl-4">
                          <center><div class="light ml-20"><img src="img/11.jpg" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                          <h1 class="head1">Corporate Training Services</h1></center>
                          <p class="page">
                          If you own a company or have an organization to run, managing the manpower is important. Getting ways to manage people and staffs 
                          <span style="color: red;cursor: pointer;" id="click_item4" onclick="click_item_show4()"> ..Read more</span>
                            <span style="display: none;" id="show_item4">as well as their payroll and setting rules and regulations is important. With the help of an HR Consultant, you can easily get things done. You just need to connect with RK Jobs Consultancy Services and we will do the needful.<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite4()"> ..Less</span></span>
                          </p>
                      </div>
                      <div class="col-lg-4 col-md-6 col-12 col-xxl-4" style="border-right: 1px solid #fff;">
                          <center><div class="light ml-20"><img src="img/17.png" width="100%" style="height: 150px; z-index: -1; border-radius: 50%;"></div>
                          <h1 class="head1">Educational Consultant</h1></center>
                          <p class="page"> Education is an important thing that makes you think logically and achieve your dreams and goals. You can learn new things that you are passionate about and interested in.
                            <span style="color: red;cursor: pointer;" id="click_item5" onclick="click_item_show5()"> ..Read more</span>
                            <span style="display: none;" id="show_item5"> Finding the right institution that can provide you with the right guidance with relevant resources.All you need to do connect with us and we will do the needful.<span style="color: red; cursor: pointer;" id="less" onclick="click_item_hite5()"> ..Less</span></span>

                          </p>
                      </div>
                  </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container-fluid">
                <div class="row">
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