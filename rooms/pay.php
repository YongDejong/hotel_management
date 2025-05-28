<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>
<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
      // redirect them to your desired location// if don't work copy your localhost past in the link
      // header('location: http://localhost/hotel-booking/index.php');
     echo "<script>window.location.href='".APPURL."';</script>";
     exit;
}

?>
<div class="hero-wrap js-fullheight" style="background-image: url('<?php echo APPURL;?>/images/image_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Pay Page for your Room</h2>
            <div class="container text-center" style="background: rgba(255,255,255,0.85); border-radius: 12px; padding: 30px 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.08); max-width: 400px;">
                <h3 style="color: #222;">Scan to Pay with ABA Bank</h3>
                <p style="color: #444;">Please scan the QR code below using your ABA Bank app to complete the payment.</p>
                <img src="<?php echo APPURL; ?>/images/aba-qr-code.png" alt="ABA Bank QR Code" style="max-width:160px; width:100%; height:auto; margin:18px 0;">
                <p style="color: #222;"><strong>Amount:</strong> $<?php echo htmlspecialchars($_SESSION['price']); ?></p>
                <p style="color: #444;">After completing the payment, please contact our staff or upload your payment receipt for confirmation.</p>
            </div>
            </div>
         </div>
        </div>
      </div>
    </div>

    <?php require "../includes/footer.php";?>

    