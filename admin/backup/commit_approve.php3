<HTML>
<HEAD><TITLE>Result Page</TITLE>
</HEAD>

<BODY>
<BR>

<?php
        $alodb=mysql_connect("localhost","root") 
		or die ("<P>Can't connect to db");

	

	$success=mysql_db_query(ALOPage, "INSERT INTO FrontPage (hdline, insdate, newstxt, shown) VALUES ('$headline',NOW(),'$release_info',0)",$alodb);
	
print mysql_error()."<BR>";

print "This is what happened:".$success."<P>";
print "Headline:".$headline."<BR>";
print "News Text:".$release_info;


?>

</BODY>
</HTML>

