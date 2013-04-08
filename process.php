<?php
	switch($_REQUEST['id'])
	{
		case 'a': $goto = "try-again.html";    break;
		case 'b': $goto = "try-again.html";    break;
		case 'c': $goto = "right-answer.html";    break;
		case 'd': $goto = "try-again.html";    break;
	}
	echo "<script>window.location='$goto';</script>";
?>