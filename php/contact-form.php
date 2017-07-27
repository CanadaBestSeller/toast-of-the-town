<?
// Field Name
$name = $_POST['name'];
if(iconv_strlen($name) < 2){echo '<div class="thanks failure">Please enter your name.</div>';exit();}
// Field Email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {echo '<div class="alert error">Please enter a valid email address.</div>';exit();}
// Field Category

$subject = $_POST['subject'];
// Field Message
$message = $_POST['message'];
if(iconv_strlen($message) < 10){echo '<div class="alert error">Please enter your message. It should have at least 10 characters.</div>';exit();}

$headers = "From: $name <$email>\r\n";
mail('toastmasters4741@gmail.com', $subject, "Name:".$name."\n\nMessage:".$message, $headers);
echo "1";
?>

