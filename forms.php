<?php
$connection = mysqli_connect('localhost','root','','tech_haven_db');

if(isset($_POST['send'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


  $request = " insert into contact(name, email, phone, message) values('$name','$email','$phone','$message') ";
  mysqli_query($connection, $request);

  header('location:index.php');
  echo('success');

}else{
  echo 'something went wrong please try again!';
}

if(isset($_POST['pay'])){

  $fname = $_POST['fullname'];
  $email2 = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];
  $expyear = $_POST['expyear'];

  $request2 = " insert into payments(fname, email, address, city, state, cardname, cardnumber, expmonth, expyear) values('$fname', '$email2', '$address', '$city', '$state', '$cardname', '$cardnumber', '$expmonth', '$expyear') ";
  mysqli_query($connection, $request2);

  header('location:payment.php');

}else{
  echo 'something went wrong please try again!';
}
 ?>
