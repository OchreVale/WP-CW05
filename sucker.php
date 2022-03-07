<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
        <?php
        if (!($_REQUEST["name"]) ||!($_REQUEST["credit_card"]) ||!($_REQUEST["section"]) || !($_REQUEST["card"])){
            header("Location:unfilled.php");
        }
        ?>
		<h1>Thanks, sucker!</h1>
		<p>Your information has been recorded.</p>
        <?php
        if (($_REQUEST["name"]) && ($_REQUEST["credit_card"]) &&($_REQUEST["section"]) &&($_REQUEST["card"])){
        $file = fopen("suckers.txt", "a+") or die("Couldn't find file.");
        $name = $_POST["name"];
        $credit_card = $_POST["credit_card"];
        $section = $_POST["section"];
        $card = $_POST["card"];
        $output = $name.";".$section.";".$credit_card.";".$card;
        $break = "\n"; 
        fwrite($file, $output);
        fwrite($file, $break);
        fclose($file);
        }
        ?>

		<dl>
			<dt>Name</dt>
			<dd><?php print $_POST["name"]?></dd>

			<dt>Section</dt>
			<dd><?php print $_POST["section"]?></dd>

			<dt>Credit Card</dt>
			<dd><?php print $_POST["credit_card"];
            print " (";
            print $_POST["card"];
            print ")";?></dd>

		</dl>
        <br>
        <h3>Here are all the suckers who submitted who have submitted here</h3>
        <pre>
        <?php print file_get_contents("suckers.txt") ?>
        </pre>
	</body>
</html> 