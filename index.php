<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Information Management System</title>
  <style type="text/css">
  a:hover
    {
      font-size: 2em;
    }
    #heading
    {
      float: left;
    }
    @keyframes slider {

0% {
  left: 0;
}

20% {
  left: 0;
}

25% {
  left: -100%;
}

45% {
    left: -100%;

}

50% {
    left: -200%;

}

70% {
  left: -200%;
}

75% {
  left: -300%;
}

95% {
  left: -300%;
}

100% {
  left: -400%;

}

}

#slider {
  overflow: hidden;
}

#slider figure img {
  width: 20%;
  float: left;
}

#slider figure {
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 10s slider infinite; 

}


  </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
  <div class="heading">
    <img src="header.jpeg" width="100%" height="100px">
  </div>
 
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div>
      <ul class="nav navbar-nav">
         <li class="active" ><a href="index.php">Home</a></li>
                 <li ><a href="stu_detail.php">Enter Students Details</a></li>
                  <li ><a href="stu_drive.php">Enter Student Drive</a></li>
                <li  ><a href="query.php">Query </a></li>
                 
          </ul>
      </div>
  </div>
</nav>

<div id="slider" >
<figure>
<img src="k1.jpg">
<img src="k2.jpg">
<img src="k3.jpg">
<img src="k4.jpg">
<img src="k5.jpg">
<img src="k6.jpg">
</figure> 
<img src="k7.jpg" width="100%">



</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>