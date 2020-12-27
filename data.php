
    <?php
    $servername = "localhost:3307";
    $username= "root";
    $password = "";
    $dbname = "register_database";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn)
    {
        echo "Connection:ok";
    }
    else {
        echo "Connection:failed".mysqli_connect_error();
    }
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $age=$_POST['age'];
    $em=$_POST['email'];
    // $gen=$_POST['gender'];
    $dob=$_POST['dob'];
    $st=$_POST['state'];
    echo " $fn ";
    $query="INSERT INTO database VALUES ('$fn','$ln','$age','$em','$dob','$st')";
    $dat = mysqli_query($conn,$query);
   if($dat)
   {
       echo "\nData inserted into database";
   }
   else {
       echo "\nfailed to insert in database";
   }
   header("refresh:10; url= nform.html");
    ?>
