<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
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
<h2 align="center">Information Management System</h2>
<h2 align="center">Please Enter the following details of the students</h2>

<div class="container">
  <form action="stu_detail1.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="Name1">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Name1" name="Name1" placeholder="Your name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Mobile_Number">Mobile Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="Mobile_Number" name="Mobile_Number" placeholder="Your mobile number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Email">Email id</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="Email" placeholder="Your email id..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="Address" name="Address" placeholder="Your address..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Father_Name">Father's Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Father_Name" name="Father_Name" placeholder="Your father's name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Father_Contact">Father's Contact Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="Father_Contact" name="Father_Contact" placeholder="Your father's contact number..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Father_Email">Father's Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="Father_Email" name="Father_Email" placeholder="Your father's email id..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Graduation_University">Graduation University/College</label>
      </div>
      <div class="col-75">
        <input type="text" id="Graduation_University" name="Graduation_University" placeholder="Your graduation University/college name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Graduation_Scores">Graduation Scores/Percentages/Grades</label>
      </div>
      <div class="col-75">
        <input type="text" id="Graduation_Scores" name="Graduation_Scores" placeholder="Your graduation scores/percentage/grades..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Graduation_Backlog">Graduation Backlog(if any)</label>
      </div>
      <div class="col-75">
        <input type="text" id="Graduation_Backlog" name="Graduation_Backlog" placeholder="Graduation Backlog Details, if any..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Year_Of_Passing">Year Of Passing</label>
      </div>
      <div class="col-75">
        <input type="text" id="Year_Of_Passing" name="Year_Of_Passing" placeholder="enter year of passing..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="PG_University">Post-Graduation University/College</label>
      </div>
      <div class="col-75">
        <input type="text" id="PG_University" name="PG_University" placeholder="Your PG University/college name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="PG_Scores">Post-Graduation Scores/Percentages/Grades</label>
      </div>
      <div class="col-75">
        <input type="text" id="PG_Scores" name="PG_Scores" placeholder="Your post-graduation scores/percentage/grades..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="PG_Backlog">Post-Graduation Backlog(if any)</label>
      </div>
      <div class="col-75">
        <input type="text" id="PG_Backlog" name="PG_Backlog" placeholder="Post-Graduation Backlog Details, if any..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="PG_Year_Of_Passing">PG Year Of Passing</label>
      </div>
      <div class="col-75">
        <input type="text" id="PG_Year_Of_Passing" name="PG_Year_Of_Passing" placeholder="enter pg year of passing..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Employment_Details">Employment Details</label>
      </div>
      <div class="col-75">
        <input type="text" id="Employment_Details" name="Employment_Details" placeholder="enter Employment Details..">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="Work_Experience">Work Experience</label>
      </div>
      <div class="col-75">
        <input type="text" id="Work_Experience" name="Work_Experience" placeholder="enter Work Experience..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Presently_Working">Presently Working</label>
      </div>
      <div class="col-75">
        <input type="text" id="Presently_Working" name="Presently_Working" placeholder="enter Presently Working..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="PlacedUnplaced">Placed/Unplaced</label>
      </div>
      <div class="col-75">
        <input type="text" id="PlacedUnplaced" name="PlacedUnplaced" placeholder="enter Placed or Unplaced..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Linkedin_Profile">Linkedin Profile</label>
      </div>
      <div class="col-75">
        <input type="text" id="Linkedin_Profile" name="Linkedin_Profile" placeholder="enter Linkedin Profile..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Resume_Link">Resume Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="Resume_Link" name="Resume_Link" placeholder="enter Resume Link..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Github_Link">Github Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="Github_Link" name="Github_Link" placeholder="enter Github Link..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
      <input type="submit" name="submit" value="Submit">
    </div>
    </div>
  </form>
</div>

</body>
</html>
