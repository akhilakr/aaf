<?php

if($custCode = $_GET['CodeField'])
	setcookie('CakeCustomer', $custCode, time() + 60*60*2);
  else
	$custCode = 'Unknown';

?>

<html>
	<head>
		<title>Cake Order Form</title>

	</head>

	<body>

<H1>Cake Order Form</H1><HR/>

<?php

  if ($custCode == "Unknown")
  	echo "Something went wrong<br/>\n";
  else {
?>

 <FORM ACTION="goodbye.php" METHOD="GET">
      <P>How many cakes would you like?
      <INPUT TYPE="text" NAME="QtyField" SIZE="20" VALUE="Enter quantity">
      <INPUT TYPE="hidden" NAME="CodeField" VALUE="<?php echo $custCode ?>">
      <INPUT TYPE="submit" VALUE="Click to submit">
 </FORM>

<?php
  }
 ?>

	</body>
</html>