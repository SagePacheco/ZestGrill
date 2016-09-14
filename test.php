<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Test</title>
</head>

<body>
<?php
// Menu logic. Gathering data from XML.
function renderMenu($menu){
	// entrees
	print "$menu function has started";
	$xml=simplexml_load_file('menus/menu.xml') or die('Error: Cannot create object');
	$nodes = $xml->xpath("/zest/menu[@name='$menu']/entrees/item");
	foreach ($nodes as $menuItem){
		$description = $menuItem->description;
		$price = $menuItem->price;
		
		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];
		
		print '<div class="menu_item">';
		print "<h2>$name</h2><p>";
		print "<p>$description</p>";
		print "<p class=\"center\">$price</p>";
		print '</div>';
	}
	// Burgers
	$nodes = $xml->xpath("/zest/menu[@name='$menu']/burgers/item");
	foreach ($nodes as $menuItem){
		$description = $menuItem->description;
		$price = $menuItem->price;
		
		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];
		
		print '<div class="menu_item">';
		print "<h2>$name</h2><p>";
		print "<p>$description</p>";
		print "<p class=\"center\">$price</p>";
		print '</div>';
	}
}

function renderDrinks(){
	$xml=simplexml_load_file('menus/menu.xml') or die('Error: Cannot create object');
	
	// Beer
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='Beer']/item");
	print '<div class="drink_item">';
	print '<h3>Beer</h3>';
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';
	
	// IPA
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='IPA']/item");
	print '<div class="drink_item">';
	print '<h3>IPA</h3>';
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';

	// Cider
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='Cider']/item");
	print '<div class="drink_item">';
	print '<h3>Cider</h3>';
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';

	// Signature Drinks
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='Signature Drinks']/item");
	print '<div class="drink_item">';
	print '<h3>Signature Drinks</h3>';
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';

	// Soft Drinks
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='Soft Drinks']/item");
	print '<div class="drink_item">';
	print '<h3>Non-Alcoholic</h3>';
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';

}
renderMenu(lunch);
?>
</body>
</html>
