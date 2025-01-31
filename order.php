<?php

	$ile_koszulek=$_POST['koszulki'];
	$ile_spodnie=$_POST['spodnie'];
	$ile_buty=$_POST['buty'];

	define('KOSZULKI', 26.24);
	define('SPODNIE', 46.38);
	define('BUTY', 128,23);
	define('P_VAT', 0.23);

	$brutto_koszulki=KOSZULKI+(KOSZULKI*P_VAT);
	$brutto_spodnie=SPODNIE+(SPODNIE*P_VAT);
	$brutto_buty=BUTY+(BUTY*P_VAT);

	$wartosc_zamowienia_netto=(KOSZULKI*$ile_koszulek)+(SPODNIE*$ile_spodnie)+(BUTY*$ile_buty);
	$wartosc_zamowienia_brutto=($brutto_koszulki*$ile_koszulek)+($brutto_spodnie*$ile_spodnie)+($brutto_buty*$ile_buty);

?>


<!doctype html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="order form">
        <meta name="keywords" content="order, shop">
		<title>Podsumowanie zamowienia</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">

	
	<meta http-equiv="Content-Security-Policy" default-src 'none'; script-src 'self'; style-src 'self'; img-src 'self' data:;">
	
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>	

<body>

	<h1>Poniżej Twoje zamówienie wraz z ceną netto oraz brutto. Prosimy dokonać wpłaty.</h1>
	<div class="order">
		<?php		
			echo "Zamówiłeś ".$ile_koszulek." koszulek. Cena netto jednej koszulki wynosi: ".KOSZULKI." zł. Cena brutto jednej koszulki to: ".$brutto_koszulki." zł. <br/>"; 
			
			echo "Zamówiłeś ".$ile_spodnie." spodni. Cena netto jednej pary wynosi: ".SPODNIE." zł. Cena brutto jednej pary to: ".$brutto_spodnie." zł. <br/>"; 
			
			echo "Zamówiłeś ".$ile_buty." par butów. Cena netto jednej pary wynosi: ".BUTY." zł. Cena brutto jednej pary to: ".$brutto_buty." zł. <br/>"; 
			
			echo "Kwota netto całego zamówienia wynosi: ".$wartosc_zamowienia_netto." zł <br/>";
				
			echo "Kwota brutto całego zamówienia wynosi: ".$wartosc_zamowienia_brutto." zł <br/>";
		?>
		<a href="shop.php">Powrót do strony głównej</a>
	</div>
</body>
</html>
