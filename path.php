<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>XPath Test</title>
</head>

<body>
<?php
print "The page is loading";
function renderMenu($menu){
	$xml=simplexml_load_file("menus/menu.xml") or die("Error: Cannot create object");
	$nodes = $xml->xpath('/zest/menu[@name=\'' . $menu . '\']/item');
	foreach ($nodes as $menuItem){
		$description = $menuItem->description;
		$price = $menuItem->price;
		
		// Pull Attributes from Item
		$name = $menuItem->attributes();
		$name = $name['name'];
		
		print "<h2>" . $name . "</h2>";
		print "<div class='menu_item'><p>";
		print $description;
		print "</p><p>";
		print $price;
		print "</p></div>";
	}
}
renderMenu("lunch");

?>
</body>
</html>