
<?php 
include_once('config.php');
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>Razorpay Integration App</title>
</head>
<body>
    <form action="result.php" method="post">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $payment_merchant_key; ?>"
    data-amount="100"
    data-name="Razorpay"
    data-buttontext="Pay with RazorPay"
    data-description="Purchase Description"
    data-image="https://razorpay.com/favicon.png"
    data-prefill.name="Hayat Parvez"
    data-prefill.email="hayatgd@gmail.com"
    data-prefill.contact="7982006128"
    data-theme.color="#F37254"
></script>
<input type="hidden" value="Success" name="hidden">
</form>
</body>
</html>