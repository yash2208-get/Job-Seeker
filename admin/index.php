<?php
  require "../cont.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>RK Jobs Consultancy Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/9b8b300c29.js" crossorigin="anonymous"></script>
    <style>
      img{
        width: 150px;
        height: 150px;
      }
      i{
        cursor: pointer;
        size: 30px;
        
      }
    </style>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="siderBar">
  <span  onclick="openNav()">&#9776; </span>
</div>
  
    <div id="mySidenav" class="sidenav" >

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Apply</a>
        <a href="meg.php">Message</a>
      </div>
      <table>
        <tr>
          <th>Name</th>
          <th>E-mail</th>
          <th>Contact</th>
          <th>Resume</th>
          
        </tr>
        <?php
        
        $sel_query="Select * from apply";
        $check=mysqli_query($con,$sel_query);
        while($row=mysqli_fetch_assoc($check))
        {?>
        <tr>
          <td><?php echo $row['name']?></td>
          <td><?php echo $row['mail']?></td>
          <td><?php echo $row['cont']?></td>

          <td><a href="../<?php echo $row['file1'];?>">Click</a></td>
        </tr>
        <?php
        }?>
      </table>
      <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        //document.getElementById("main").style.marginLeft = "245px";
      }
      
      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        //document.getElementById("main").style.marginLeft= "0";
      }
      </script>
</body>
</html>