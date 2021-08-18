<div style="text-align:center;">
<h1 style="font-size:130%;margin-top:20%"> Click to Pay:</h1>
<form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_HmVqjaamA2jI7E" async> </script> </form>
</div>

<?php 
    $name = $_GET['name'];
    session_start();
    $_SESSION['gname']=$name;
?>
