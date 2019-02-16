<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
<title>Customer</title>
</head>
<body> 

<?php
// define variables and set to empty values
$firstName = "";
$city = "";
$Full = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $firstName = $_POST["Fname"];
   $city ="  ". $_POST["City"];

   $ConEmail = $firstName.$city;
   $ConEmail = preg_replace('/\s\s+/', '', $ConEmail);
   $thankyou = "Thank you". " " . $firstName. " ". "for visiting.";
   $Email = "Your Allocated Email is :". $ConEmail."@gcutours.com";
   $password = str_shuffle($firstName);
   $allocatedpassword = "Your Password is:". " ".$password; 
}  
   
   
?>

<h2>PHP Customer Details Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   First Name: <input type="text" name="Fname">
   <br><br>
         City:      <input type="text" name="City">
   <br><br>
       <br><br>
   <input type="submit" name="submit" value="Submit"> 
       <br><br>
   <input type="reset" name="reset" value="Reset"> 
</form>

<?php
echo "";
echo "<br>";
echo $thankyou;
echo "<br>";
echo $Email;
echo "<br>";
echo $allocatedpassword;
echo "<br/>";
echo $ConEmail;


?>

</body>
</html>