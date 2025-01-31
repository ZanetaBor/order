<!doctype html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="order form">
        <meta name="keywords" content="order, shop">
        <title>Shop</title>

	<meta http-equiv="Content-Security-Policy" content="default-src 'self'">
	    
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    </head>

<body>
	
	<h1>Sklep odzieżowy</h1>
	<p>Witaj w sklepie. Poniżej zapisz jakie produkty zamawiasz</p>
	
	<form action="order.php" method ="post">
		<table>
			<tr>
				<td>Produkt</td>
				<td>Ilość</td>
			</tr>
			<tr> 
				<td>Koszulki</td>
				<td><input  type="text" name="koszulki"/></td>
			</tr>
			<tr>
				<td>Spodnie</td>
				<td><input type="text" name="spodnie"/></td>
			</tr>
			<tr>
				<td>Buty</td>
				<td><input type="text" name="buty"/></td>
			</tr>
		</table>
		<input type="submit" value="zamowienie"/>
	</form>
	
</body>
</html>
