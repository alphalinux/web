<HTML>
<HEAD><TITLE>Result Page</TITLE>
</HEAD>

<BODY>
<BR>

<?php
        $alodb=mysql_pconnect("localhost","root") 
		or die ("<P>Can't connect to db");

	$success=mysql_db_query(ALOPage, "UPDATE FrontPage set hdline='$edit_headline', newstxt='$edit_newstxt', shown=1 where indx=$editor",$alodb);
	
print mysql_error()."<BR>";

print "This is what happened:".$success."<P>";
print "Headline: ".$edit_headline."<BR>";
print "News Text: ".$edit_newstxt."<BR>";
print "Index is: ".$editor;


?>

</BODY>
</HTML>

