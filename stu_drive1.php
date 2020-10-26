<?php


if(isset($_POST['submit']))
{

   include("dbcon.php");

  $Name2=$_POST['Name1'];
 
  $Mobile_Number=$_POST['Mobile_Number'];
  $Email=$_POST['Email'];
  $Address=$_POST['Address'];
  $Father_Name=$_POST['Father_Name'];
  $Father_Contact=$_POST['Father_Contact'];
  $Father_Email=$_POST['Father_Email'];
  $Graduation_University=$_POST['Graduation_University'];
  $Graduation_Scores=$_POST['Graduation_Scores'];
  $Graduation_Backlog=$_POST['Graduation_Backlog'];
  $Year_Of_Passing=$_POST['Year_Of_Passing'];
  $PG_University=$_POST['PG_University'];
  $PG_Scores=$_POST['PG_Scores'];
  $PG_Backlog=$_POST['PG_Backlog'];
  $PG_Year_Of_Passing=$_POST['PG_Year_Of_Passing'];
  $Employment_Details=$_POST['Employment_Details'];
  $Work_Experience=$_POST['Work_Experience'];
  $Presently_Working=$_POST['Presently_Working'];
  $PlacedUnplaced=$_POST['PlacedUnplaced'];
  $Linkedin_Profile=$_POST['Linkedin_Profile'];
  $Resume_Link=$_POST['Resume_Link'];
  $Github_Link=$_POST['Github_Link'];

  $qry="INSERT INTO 'stu_details'(Name,Mobile_Number,Email,Address,Father_Name,Father_Contact,Father_Email,Graduation_University,Graduation_Scores,Graduation_Backlog,Year_Of_Passing,PG_University,PG_Scores,PG_Backlog,PG_Year_Of_Passing,Employment_Details,Work_Experience,Presently_Working,PlacedUnplaced,Linkedin_Profile,Resume_Link,Github_Link) VALUES ('$Name`,`$Mobile_Number`,`$Email`,`$Address`,`$Father_Name`,`$Father_Contact`,`$Father_Email`,`$Graduation_University`,`$Graduation_Scores`,`$Graduation_Backlog`,`$Year_Of_Passing`,`$PG_University`,`$PG_Scores`,`$PG_Backlog`,`$PG_Year_Of_Passing`,`$Employment_Details`,`$Work_Experience`,`$Presently_Working`,`$PlacedUnplaced`,`$Linkedin_Profile`,`$Resume_Link`,`$Github_Link')";

  $qry="INSERT INTO 'stu_details'('Name') VALUES ('$Name2')";

  echo $qry;


  $run=mysqli_query($con,$qry);

  if($run==true)
  {
    
      echo "Data Inserted Successfully";
  }
  else
  {
    echo "NO";
  }
  
}


?>
