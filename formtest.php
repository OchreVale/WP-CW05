
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
  <title>Form Data</title>
</head>
<body>

<h1>Raw Form Data</h1>
<pre><?php print_r($_POST)?>
</pre>

<!-- Extract each form item from posted data -->

<h1>Form input values</h1>
<p>Your Name: <?php print $_POST["visitor_name"]?></p>
<p>Password: <?php print $_POST["password"]?></p>
<p>License accepted: <?php print $_POST["licenseOK"]?></p>
<p>Account type: <?php print $_POST["account_type"]?></p>
<p>Options: <?php foreach($_POST["options"] as $option){
    echo $option;
    echo " ";
    }?></p>
<p>Operating system: <?php print $_POST["system"]?></p>
<p>Remarks:  <?php print $_POST["remarks"]?></p>

<!-- Run thru all elements of the array of posted data -->

<h1>All Form Data</h1>

<p>visitor_name = <?php print $_POST["visitor_name"]?>
</p><p>password = <?php print $_POST["password"]?>
</p><p>licenseOK = <?php print $_POST["licenseOK"]?>
</p><p>account_type = <?php print $_POST["account_type"]?>
</p><p>userid = <?php print $_POST["userid"]?>
</p><p>system = <?php print $_POST["system"]?>
</p><p>options = <?php foreach($_POST["options"] as $option){
    echo $option;
    echo " ";
    }?>
</p><p>remarks =  <?php print $_POST["remarks"]?>
</p>


</body>
</html>