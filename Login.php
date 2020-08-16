<!DOCTYPE HTML>
<h1> ADMINS PAGE </h1>
<br></br>
<?php

session_start();
$username = "user";
$password="password";
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
{
  $file = "/var/www/Complaint.com/complaint.txt";
$f = fopen($file, "r") or exit("Unable to open file!");
echo "<table>";

while(!feof($f))
{
  $data = fgets($f); 
  echo "<tr><td>" . str_replace('|','</td> <td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($f);
exit();

}
if (isset($_POST['USERNAME']) && isset($_POST['PASSWORD']))
{if  ($_POST['USERNAME'] == $username && $_POST['PASSWORD'] == $password)
  {
    $_SESSION['logged_in'] = true;
    $file = "/var/www/Complaint.com/complaint.txt";
    $f = fopen($file, "r") or exit("Unable to open file!");
echo "<table>";

    while(!feof($f))
{
    $data = fgets($f); 
    echo "<tr><td>" . str_replace('|','</td><td>',$data) . '</td></tr>';
}
echo "</table>";
fclose($f);
exit();


  }

}

?>
<html>
<body>
  <form method="post" action="index.php">
    USERNAME:<br/>
    <input type ="text" name="USERNAME"><br/>
    PASSWORD<br/>
    <input type ="password" name="PASSWORD"><br/>
    <input type="submit" value="LOGIN">
  </form>
</body>
</html>


