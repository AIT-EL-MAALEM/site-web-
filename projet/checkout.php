<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="checkout.css">
    <script src="https://kit.fontawesome.com/d26ed27993.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='checkout.js' type="text/javascript"></script>
</head>
<body>
    <div class="container">

        <form id="paymentForm" action="insetToCoordonnee.php" method="post">

            <h3 class="title">Payment :</h3>

            <div class="PayementMethods">
                <span >cards accepted :</span><br>
                <a href="https://www.paypal.com/ma/home" target="_blank"><img src="assets/icons8-paypal-48.png" alt=""></a>
                <a href="https://www.mastercard.com.lb/ar-lb/consumers/find-card-products/credit-cards.html" target="_blank"> <img src="assets/icons8-mastercard-48.png" alt=""></a>
                <a href="https://ma.visamiddleeast.com/ar_MA/pay-with-visa/find-a-card/credit-cards.html" target="_blank"> <img src="assets/icons8-visa-48.png" alt=""></a>
            </div>

            <div class="content">
                <div class="inputing">
                   <span> Name On Card</span><br>
                   <input id="CardName" type="text" name="CardName" placeholder="Cristiano Ronaldo">
                </div>

                <div class="inputing">
                   <span>Card Number</span><br>
                   <input onchange="verifCardNumber()" id="cardNumber" type="number"  name="cardNumber" placeholder="1111 2222 3333 4444">
                </div>

                <div class="inputing spec">
                    <div class="specDiv1" >
                       <span> Exp Month </span><br>
                       <input onchange="verifMonth()" id="month" type="number"  name="month" placeholder="06">
                    </div>  

                    <div class="specDiv2">
                        <span> Exp Year</span><br>
                        <input onchange="verifYear()" id="year" type="number"  name="year" placeholder="2025">
                    </div>

                 </div>

                 <div class="inputing">
                    <span> CVV </span><br>
                    <input onchange="verifCvv()" id="cvv" type="number" name="cvv" placeholder="1234">
                 </div>

                 
            </div>
            <input onclick="verifAll()" type="submit" value="Confirm"  name="submit" class="submit-btn">
            <h4 id="warning"> warning please fill all input fields to continue !!</h4>
        </form>
    </div>
</body>
</html>