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
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="Company_Name">Company Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Name" name="Name" placeholder="Your company name..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Last_Update_Date">Last Update Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="L_U_D" name="L_U_D" placeholder="Your last update date..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Last_Update">Last Update</label>
      </div>
      <div class="col-75">
        <input type="text" id="lu" name="lu" placeholder="last update date.">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Number_Of_Vacancies">Number Of Vacancies</label>
      </div>
      <div class="col-75">
        <input type="text" id="nov" name="nov" placeholder="enter number of vacancies..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Relevant_Vacancies">Relevant Vacancies</label>
      </div>
      <div class="col-75">
        <input type="text" id="rv" name="rv" placeholder="......">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="CTC">Enter your CTC</label>
      </div>
      <div class="col-75">
        <input type="text" id="ctc" name="ctc" placeholder="......">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Average_Ctc">Average CTC</label>
      </div>
      <div class="col-75">
        <input type="text" id="actc" name="actc" placeholder=".......">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Stipend">Stipend</label>
      </div>
      <div class="col-75">
        <input type="text" id="stipend" name="stipend" placeholder=".......">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Average_Stipend">Average Stipend</label>
      </div>
      <div class="col-75">
        <input type="text" id="astipend" name="astipend" placeholder=".........">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Drive_Status">Drive Status</label>
      </div>
      <div class="col-75">
        <input type="text" id="ds" name="ds" placeholder=".......">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Profile">Profile</label>
      </div>
      <div class="col-75">
        <input type="text" id="Profile" name="Profile" placeholder="........">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Drive_Sent">Drives Sent</label>
      </div>
      <div class="col-75">
        <input type="text" id="dsent" name="dsent" placeholder=".........">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="JD">Job Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="jd" name="jd" placeholder="........">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Feature">Feature</label>
      </div>
      <div class="col-75">
        <input type="text" id="feature" name="feature" placeholder="........">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="Drive_Date">Drive Date</label>
      </div>
      <div class="col-75">
        <input type="text" id="ddate" name="ddate" placeholder=".......">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Remarks">Remarks</label>
      </div>
      <div class="col-75">
        <textarea id="remarks" name="remarks" placeholder="Write something.." style="height:200px"></textarea>
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
