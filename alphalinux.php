 <?php
	$debug=0;

	require_once ("database.php");
	require_once($_SERVER['DOCUMENT_ROOT'].'/browser.php');

	// This get the main titles
	$result=mysql_db_query("ALOPage", "SELECT * FROM FrontPage where shown=1 AND Catagory='News' ORDER BY insdate DESC LIMIT 0,7",$alodb)
		or die ("<P>Can't query db");
	$num_rows=mysql_num_rows($result);
	if ($num_rows == 0)
		die ("<P>DB is empty, exiting");

	// Get the Press items for the page
	$press_result=mysql_db_query("ALOPage","SELECT indx, hdline FROM FrontPage WHERE shown=1 AND Catagory='Press' ORDER BY insdate DESC LIMIT 0,5",$alodb);
	$press_rows=mysql_num_rows($press_result);
	

	// Get the Article items for the page
	$article_result=mysql_db_query("ALOPage","SELECT indx, hdline FROM FrontPage WHERE shown=1 AND Catagory='Articles' ORDER BY insdate DESC LIMIT 0,5",$alodb);
	$article_rows=mysql_num_rows($article_result);


	function print_sections($rec) {
	echo "<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\" width=\"100%\">
<TR>
<TD WIDTH=\"32\"><IMG SRC=\"img/icon_beak.gif\" WIDTH=\"32\" HEIGHT=\"32\"ALT=\"*\"></TD>
<TD bgcolor=\"#B70000\" VALIGN=\"TOP\" ALIGN=\"LEFT\"><img src=\"img/sl.gif\" ALT=\"\"></TD>
<TD bgcolor=\"#B70000\" width=\"460\"><CENTER> <FONT COLOR=\"#000000\" FACE=\"Lucida, Helvetica, sans-serif\" SIZE=\"+1\"><B>
$rec->hdline
</B></FONT></CENTER></TD>
<TD bgcolor=\"#B70000\" valign=\"top\" align=\"right\"><img src=\"img/sr.gif\" ALT=\"\"></TD></TR>
<TR>
<TD></TD>
<TD COLSPAN=\"3\"><img src=\"img/sp.gif\" VALIGN=\"TOP\" WIDTH=\"100%\" HEIGHT=\"2\" ALT=\"\"></TD>
</TR>
<TR>
<TD></TD>
<TD COLSPAN=\"3\" bgcolor=\"#DC9D33\">";
echo "<FONT FACE=\"Lucida, Helvetica, sans-serif\" size=\"-1\"><STRONG>";
//print (date("l F jS Y g:i:s a",$rec->insdate));
echo "$rec->insdate";
echo "</STRONG></FONT>";
echo "</TD>
</TR>
<TR>
<TD>&nbsp;</TD>
<TD COLSPAN=\"3\"><FONT FACE=\"Helvetica, sans-serif\">
$rec->newstxt
<BR><BR>
</FONT>
</TD>
</TR>
</TABLE>";
}

	function sidebar_header($rec) {
		echo "
	<TABLE summary=\"\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"190\">
	<TR>";

		echo "<TD bgcolor=\"#B70000\" valign=\"TOP\" align=\"LEFT\" height=\"16\"><IMG src=
	\"img/sl.gif\" alt=\"\"></TD>
	<TD bgcolor=\"#B70000\" style=\"text-align:center; vertical-text-align:center;\" width=\"190\" height=\"16\">
	<CENTER>
	<FONT color=\"#000000\" FACE=\"Lucida, Helvetica, sans-serif\" ><B>";
			echo "$rec";
		echo "</B></FONT></CENTER>
		</TD>
	<TD  bgcolor=\"#B70000\" valign=\"top\" align=\"right\" height=\"16\"><IMG src=
	\"img/sr.gif\" alt=\"\" style=\"float=:right; \"></TD>
	</TR>";
		echo "<TR>
	<TD colspan=\"3\"><IMG src=\"img/sp.gif\" valign=\"TOP\" width=\"100%\"
	height=\"2\" alt=\"\"></TD>
	</TR>";
	
	echo "<TR>
	<TD colspan=\"3\"><FONT face=\"Arial, Helvetica, sans-serif\">
	<BR>";
	}
	
	function sidebar_footer() {
		echo "
	</FONT></TD>";
	
		echo "</TR>
	</TABLE>
	<!-- end news item -->
	<BR>
	";
	}

	function fix_penguin() { 
		$br = new browser;
	  if ($br->Name == "MSIE" && $br->Version >= 6 ) {
  		echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"0\" alt=\"\">";	  
  		}
   	  else if ($br->Name == "MSIE" && $br->Platform == "MacIntosh") {
  	  	echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"0\" alt=\"\">";
  	  	}
  	  else if ($br->Name == "Netscape" && $br->Version >= 4  && $br->Version < 5) {
  	  	echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"0\" alt=\"\">";
  	  	}
  	  else {
		echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"12\" alt=\"\">";
		}
	}
	
	function detect_browser() { 
		$br = new browser;
		echo "$br->Platform, $br->Name version $br->Version";
	  if ($br->Name == "MSIE" && $br->Version >= 6 ) {
  		echo "<div>hello ie </div>";	  
  		}
   	  else if ($br->Name == "MSIE" && $br->Platform == "MacIntosh") {
  		echo "<div>hello mac </div>";	 
  	  	}
  	  else if ($br->Name == "Netscape" && $br->Version >= 4  && $br->Version < 5) {
  		echo "<div>hello ns </div>";	 
  	  	}
  	  else {
  		echo "<div>hello standards </div>";	 
		}
	}
	
	function print_alphanews_rdf() {
 		$file = fopen("./backend.rdf", "r");
		$rf = fread($file, 32000); // read 32K  
		$grab = eregi("<item>(.*)</item>", $rf, $printing);
		$pieces = explode("<item>", $printing[0]);
 		$count=count($pieces);

		 for($x=1;$x<=$count-1;$x++){
			 ereg("<title>(.*)</title>",$pieces[$x],$title );
			 ereg("<link>(.*)</link>",$pieces[$x],$links );
			 ereg("<description>(.*)</description>",$pieces[$x],$desc );
	
 			 echo "<A HREF=\"$links[1]\">$title[1]</A><BR>";
    	 }
    	 fclose($file);
	}
	/* end alphanews_net() */
	
	function alphanews_net() {
		sidebar_header("Latest From AlphaNews.NET");
		print_alphanews_rdf();
		sidebar_footer();
	}

/* why doesn't this work ??? */
	function current_articles() {
		sidebar_header("Articles");
		
		for ($i=0;$i<$article_rows;$i++) {
			$article_obj=(mysql_fetch_object($article_result));
			echo "<A HREF=\"http://www.alphalinux.org/press-articles/index.php?indx=$article_obj->indx&type=Articles\">$article_obj->hdline $article_obj->insdate</A><BR>";
		}
		sidebar_footer();
	}
	
		
?>
