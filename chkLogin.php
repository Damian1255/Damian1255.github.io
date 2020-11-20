 <?php 
    include 'global.php';

    session_start();
    $userName = $_POST['txtUsername'];
    $userPwd = $_POST['txtPwd'];
    $bool = true;

    $con = mysqli_connect($DBHost, $DBUser, $DBPwd); //Connect to server
    if (!$con)
      {
        die('Could NOT connect:  ' . mysqli_error());
      }

    //Connect to database
    mysqli_select_db($con, $DBName) or die ("Could NOT connect to database");

    $sql = "Select * from users WHERE username='$userName' and userpwd='$userPwd'"; 

    // Query the guests table
    $result = mysqli_query($con, $sql);
    $exists = mysqli_num_rows($result);
    echo $sql;
    if($exists > 0) //IF there are no returning rows or no existing username
    {
        echo $exists;
        while($row = mysqli_fetch_assoc($result)) // display all rows from query
        {
            $role = $row['role']; // the first name row is passed on to $name, and so on until the query is finished
        }
       
        $_SESSION['role'] = $role;
        $_SESSION['userName'] = $userName; //set the email in a session. This serves as a global variable
        echo $_SESSION['userName'];
        header("location: home.php"); // redirects the user to the authenticated home page
    }
    else{
        header("location: index.html?error=Wrong%20email%20or%20password");
    }

    mysqli_close($con);
?>