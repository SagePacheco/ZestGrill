<?php
// Menu logic. Gathering data from XML.
function renderMenu($menu){
	// entrees
	$xml=simplexml_load_file('menus/menu.xml') or die('Error: Cannot create object');
	$nodes = $xml->xpath("/zest/menu[@name='$menu']/entrees/item");
	foreach ($nodes as $menuItem){
		$description = $menuItem->description;
		$price = $menuItem->price;
		
		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];
		
		print '<div class="menu_item col-xs-4 col-md-4 col-lg-3">';
		print "<h2>$name</h2><p>";
		print "<p>$description</p>";
		print "<p class=\"text-center\">$price</p>";
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
		
		print '<div class="menu_item col-xs-4 col-md-4 col-lg-3">';
		print "<h2>$name</h2><p>";
		print "<p>$description</p>";
		print "<p class=\"text-center\">$price</p>";
		print '</div>';
	}
}

function renderDrinks($drinkType){
	$xml=simplexml_load_file('menus/menu.xml') or die('Error: Cannot create object');
	
	// Produce Drinks
	$nodes = $xml->xpath("/zest/menu[@name='drinks']/drink[@type='$drinkType']/item");
	print '<div class="drink_item col-xs-4 col-md-4 col-lg-3">';
	print "<h3>$drinkType</h3>";
	foreach ($nodes as $menuItem){
		$price = $menuItem->price;

		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];

		print "<p>$name $price</p>";
	}
	print '</div>';
}
?>