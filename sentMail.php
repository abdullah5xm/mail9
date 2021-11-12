<? php
if (isset($_POST['esubmit'])) {
$to = "abdullah5xm@gmail.com";
$subject = $_POST['submit'];
$message = $_POST['message'];
$from = $_POST['email'];
$headers = "From : $from";
mail($to, $subject, $message, $headers);
echo "Mail Successfully Sent";
}

?>