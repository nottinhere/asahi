<?php
		include("system/inc/connect.inc.php");
		$sql 	= "select * from game where tel='{$_REQUEST['tel']}'";
		$query	= mysql_query($sql)or die(mysql_error());
		$num	= mysql_num_rows($query);
		if($num==0)
		{
			$sqlA = "insert into game (name,tel,joindate) values('{$_REQUEST['name']}','{$_REQUEST['tel']}',now())";
			mysql_query($sqlA)or die("error=$sqlA");
			exit("<script>window.location='tell-your-friends.html';</script>");	
		}else
		{
			exit("<script>alert('Duplicate Phone number');history.back();</script>");	
		}
?>    
