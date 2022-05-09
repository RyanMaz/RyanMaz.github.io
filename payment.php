<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Payments</title>
    <link rel="stylesheet" href="css/paymentStyle.css">


  </head>

  <body>
    <div class="container">
      <form action="forms.php" method = "POST">

        <h2>Billing Address</h2>
        <label for="fname" class = "label"><i class="fa fa-user"></i> Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="John M. Doe" class="box">

        <label for="email" class = "label"><i class="fa fa-envelope"></i> Email</label>
        <input type="text" id="email" name="email" placeholder="john@example.com" class ="box">

        <label for="adr" class = "label"><i class="fa fa-address-card-o"></i> Address</label>
        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" class ="box">

        <label for="city" class = "label"><i class="fa fa-institution"></i> City</label>
        <input type="text" id="city" name="city" placeholder="Harare" class ="box">

        <label for="state" class = "label">State</label>
        <input type="text" id="state" name="state" placeholder="Harare" class ="box">

        <h2>Payment</h2>



        <label for="cname" class = "label">Name on Card</label>
        <input type="text" id="cname" name="cardname" placeholder="John More Doe" class ="box">

        <label for="ccnum" class = "label">Credit card number</label>
        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" class ="box">

        <label for="expmonth" class = "label">Exp Month</label>
        <input type="text" id="expmonth" name="expmonth" placeholder="September" class ="box">

        <label for="expyear" class = "label">Exp Year</label>
        <input type="text" id="expyear" name="expyear" placeholder="2025" class ="box">


        <input type="submit" value="Make Payment" class="btn" name = "pay">

      </form>
    </div>

  </body>
</html>
