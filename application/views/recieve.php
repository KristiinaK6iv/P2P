<?php
include('ylaosa.php')
?>
	<div class="container">
<?php


// STEP 1. Setup bank certificate
// ==============================


// Tuleb juurde lisada!

$public_key = openssl_pkey_get_public("");

// STEP 2. Define payment information
// ==================================


 $fields = array ();
  foreach ((array)$_REQUEST as $f => $v) {
        if (substr ($f, 0, 3) == 'VK_') {
            $fields[$f] = $v;
        }
    }



// STEP 3. Generate data to be verified
// ====================================

// Data to be verified is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Ipizza Testpank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string

$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1111 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* GENIPIZZA */
        str_pad (mb_strlen($fields["VK_REC_ID"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_REC_ID"] .     /* uid100010 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_T_NO"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_T_NO"] .       /* 10002 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),      3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_REC_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_REC_ACC"] .    /* EE871600161234567892 */
        str_pad (mb_strlen($fields["VK_REC_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_REC_NAME"] .   /* ÕIE MÄGER */
        str_pad (mb_strlen($fields["VK_SND_ACC"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_SND_ACC"] .    /* EE871600161234567892 */
        str_pad (mb_strlen($fields["VK_SND_NAME"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_NAME"] .   /* Tõõger Leõpäöld */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),       3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Torso Tiger */
        str_pad (mb_strlen($fields["VK_T_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_T_DATETIME"];  /* 2016-03-26T17:32:31+0200 */

/* $data = "0041111003008009GENIPIZZA009uid1000100051234500510002003150003EUR020EE871600161234567892009ÕIE MÄGER020EE871600161234567892015Tõõger Leõpäöld0071234561011Torso Tiger0242016-03-26T17:32:31+0200"; */

// STEP 4. Verify the data with RSA-SHA1
// =====================================

if (openssl_verify ($data, base64_decode($fields["VK_MAC"]), $public_key) !== 1) {
    $signatureVerified = false;
}else{
    $signatureVerified = true;
}

// STEP 5. Display output of the received payment
// ==============================================
?>

    <h2>Maksetulemused: </h2>
    
    		<!--Message - if failed or not-->
			<div class="alert alert-success text-center">
  			<strong>Success!</strong> 
  			<?php echo $fields["VK_SERVICE"] == "1111" ? "Aitäh! Makse edukalt sooritatud." : "Makse tühistatud." ?>
  			<!--Signature: <?php echo $signatureVerified ? "verified" : "not verified" ?>-->
			</div>
    <div class="alert alert-info text-center">
    <!--Showing payment info if everythig is valid-->
    <?php if($fields["VK_SERVICE"] == "1111" and $signatureVerified):?>
	    
				<div class="row text-center">
						<div class="col-sm-12">
							<div class="row">
								Maksja: <?php echo $fields["VK_SND_NAME"]?>
							</div>
							<div class="row">
								Maksja konto: <?php echo $fields["VK_SND_ACC"]?>
							</div>
							<div class="row">
								Maksekorralduse number: <?php echo $fields["VK_T_NO"]?>
							</div>
							<div class="row">
								Summa: <?php echo $fields["VK_AMOUNT"]." ".$fields["VK_CURR"]?>
							</div>
							<div class="row">
								Selgitus: <?php echo $fields["VK_MSG"]?>
							</div>
							<div class="row">
								Tehingu identifikaator: <?php echo $fields["VK_STAMP"]?>
							</div>
						</div>
				</div>
		
	<?php endif; ?>
    </div>
	</div>
<?php
include('alaosa.php')
?>
