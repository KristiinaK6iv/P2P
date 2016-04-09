
<div class="container">
		
<?php


// STEP 1. Setup private key
// =========================

// Tuleb juurde lisada!!!

$private_key = openssl_pkey_get_private(
"");


 //Getting the right current date format for bank
function getDatetimeNow() {
    $dt = new DateTime("now", new DateTimeZone('Europe/Helsinki'));
	return $dt->format('Y-m-d\TH:i:s\+0200');
    
}



// STEP 2. Define payment information
// ==================================

// Pangatüübiks on Ipizza Testpank - enda kohalikus sereveris jooksutamiseks muuta väärtused enda 
// loodud pangaserveri järgi

$fields = array(
        "VK_SERVICE"     => "1011", // Teenuse number
        "VK_VERSION"     => "008",	// Kasutatav krüptoalgoritm
        "VK_SND_ID"      => "uid100023",  // Meie firma pangakonto (P2Pkuulutused) tunnuskood (uue panga tegemisel muuta)
        "VK_STAMP"       => "12345",	// Päringu ID
        "VK_AMOUNT"      => "150",   // Makse suurus
        "VK_CURR"        => "EUR",   // Valuuta lühend
        "VK_ACC"         => "EE871600161234567892",  // Saaja kontonumber (uue panga tegemisel muuta)
        "VK_NAME"        => "P2Pkuulutused",   // Saaja nimi
        "VK_REF"         => "1234561",	// Viitenumber
        "VK_LANG"        => "EST",
        "VK_MSG"         => "Makse reklaami eest",  // Makse selgitus
        "VK_RETURN"      => 'http' . '://' . $_SERVER['HTTP_HOST'] .
                                            dirname ($_SERVER['PHP_SELF']) . '/recieve', // URL, kuhu vastatakse edukal tehingu sooritamisel
        "VK_CANCEL"      => 'http' . '://' . $_SERVER['HTTP_HOST'] .
                                            dirname ($_SERVER['PHP_SELF']) . '/notrecieved', // URL, kuhu vastatakse ebaõnnestunud tehingu puhul
        "VK_DATETIME"    => getDatetimeNow(), 
        "VK_ENCODING"    => "utf-8",
);


// STEP 3. Generate data to be signed
// ==================================

// Data to be signed is in the form of XXXYYYYY where XXX is 3 char
// zero padded length of the value and YYY the value itself
// NB! Ipizza Testpank expects symbol count, not byte count with UTF-8,
// so use `mb_strlen` instead of `strlen` to detect the length of a string
   
 // Genereerime tehingu väärtustest signatuuri
     
$data = str_pad (mb_strlen($fields["VK_SERVICE"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_SERVICE"] .    /* 1011 */
        str_pad (mb_strlen($fields["VK_VERSION"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_VERSION"] .    /* 008 */
        str_pad (mb_strlen($fields["VK_SND_ID"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_SND_ID"] .     /* uid100023 */
        str_pad (mb_strlen($fields["VK_STAMP"], "UTF-8"),   3, "0", STR_PAD_LEFT) . $fields["VK_STAMP"] .      /* 12345 */
        str_pad (mb_strlen($fields["VK_AMOUNT"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_AMOUNT"] .     /* 150 */
        str_pad (mb_strlen($fields["VK_CURR"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_CURR"] .       /* EUR */
        str_pad (mb_strlen($fields["VK_ACC"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_ACC"] .        /* EE871600161234567892 */
        str_pad (mb_strlen($fields["VK_NAME"], "UTF-8"),    3, "0", STR_PAD_LEFT) . $fields["VK_NAME"] .       /* P2Pkuulutused */
        str_pad (mb_strlen($fields["VK_REF"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_REF"] .        /* 1234561 */
        str_pad (mb_strlen($fields["VK_MSG"], "UTF-8"),     3, "0", STR_PAD_LEFT) . $fields["VK_MSG"] .        /* Selgitus */
        str_pad (mb_strlen($fields["VK_RETURN"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_RETURN"] .     /* http://localhost:8080/project/wkQ9zaaYO9ENSyrw?payment_action=success */
        str_pad (mb_strlen($fields["VK_CANCEL"], "UTF-8"),  3, "0", STR_PAD_LEFT) . $fields["VK_CANCEL"] .     /* http://localhost:8080/project/wkQ9zaaYO9ENSyrw?payment_action=cancel */
        str_pad (mb_strlen($fields["VK_DATETIME"], "UTF-8"), 3, "0", STR_PAD_LEFT) . $fields["VK_DATETIME"];    /* 2016-03-26T19:41:27+0200 */

/* $data = "0041011003008009uid10002300512345003150003EUR020EE871600161234567892013P2Pkuulutused0071234561011Torso Tiger069http://localhost:8080/project/wkQ9zaaYO9ENSyrw?payment_action=success068http://localhost:8080/project/wkQ9zaaYO9ENSyrw?payment_action=cancel0242016-03-26T19:41:27+0200"; */

// STEP 4. Sign the data with RSA-SHA1 to generate MAC code
// ========================================================

openssl_sign ($data, $signature, $private_key, OPENSSL_ALGO_SHA1);

/* TncZRh0s9kLC1fq+RyQxt1eXlppSCu9BXP7xYvw5ijHAeswmtjBg0D1P+sGyYBMdKdCRgDK6fbPbX6tk6oQc8ng5j2PUSjznsRZcIZbKIQmXlXXIxyIURdfD5YdbN5ulkV9BsffwFO4fmbTY9NAeT4hSw3YV8qhMxjOzBmlbPgYVLotu9eAnxMzjTQ9k37fqzZsStpdVUCmUoyUjoeGLXOJvSWQ7R9UyoZlP7lXPFsMUPBGbIiLH1TRAUostSmEo9YZwTj/9k0m7+hE+6Qx5mQ5IEnDlpnuD1Hmm6edrYF6cGDVJQzBwKJqbRVNuDZFO9LQrG4JfepgXokLvIv9jpw== */
$fields["VK_MAC"] = base64_encode($signature);

// STEP 5. Generate POST form with payment data that will be sent to the bank
// ==========================================================================
?>
   

<!--Lisada siia enda panga "Pöörduspunkti URL" serveri aadress, kui teete uue local pangaserveri-->

<form method="POST" action="http://localhost:8080/banklink/ipizza">
	<?php
	    foreach ($fields as $f => $v) {
	        echo '<input type="hidden" name="' . $f . '" value="' . htmlspecialchars ($v) . '" />' . "\n";
	    }
	?>

	<h3 class="alert alert-info">You can add commercials into this webpage. It costs 150 Euros. You can pay here:  </h3>

	<div class="col-lg-12 well">	
		    <div class="row">
				<div class="col-sm-4 form-group">
			        <label for="PANGALINK_NAME">Payer name: </label>
			        <input type="text" name="PANGALINK_NAME" id="PANGALINK_NAME" required/>
		    	</div>
				<div class="col-sm-4 form-group">
			        <label for="PANGALINK_ACCOUNT">Payer account: </label>
			        <input type="text" id="PANGALINK_ACCOUNT" name="PANGALINK_ACCOUNT" required/>
		    	</div>
				<div class="col-sm-4 form-group">
		        	<input type="submit" value="PAY" />
		    	</div>
		    </div>
	</div>
</form>	
		
		
</div>

<?php
include('en_alaosa.php')
?>
