<?php

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>jobMaker</title>

</head>
<body>

<script type="text/javascript">
    window.onload=function(){
    	var your_div = document.getElementByClassName('row');

			var text_to_change = your_div.childNodes[0];

			text_to_change.nodeValue = 'new text';

    }
</script>

</body>
</html>