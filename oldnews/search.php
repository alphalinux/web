<HTML>
<HEAD>
<TITLE>AlphaLinux - Search Results</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php
	
	include ("../database.php");

	// Do you want the ugly green debug message or not?
	$debug=0;
   

	// Construct the query
	$query = "SELECT * FROM FrontPage WHERE ";
	if ($headline != "")
		$query=$query."hdline LIKE '%$headline%'";
	else if (($headline == "") && ($newstxt != ""))
		$query=$query."newstxt LIKE '%$newstxt%'";

	if (($headline != "") && ($newstxt != ""))
		$query=$query."AND newstxt LIKE '%$newstxt%'";

	$query=$query." ORDER BY insdate DESC";

	$answer = mysql_db_query("ALOPage",$query,$alodb);
	$num_hits=mysql_num_rows($answer);

	if ($debug) {
		echo "<P><FONT COLOR=#00FF00>Headline is: $headline and newstxt is $newstxt</FONT>"; 
		echo "<P><FONT COLOR=#00FF00>$query</FONT";
	}
			

	function print_results($rec) {
		echo "<TR>";
		echo "<TD><A HREF=\"view.php?index=$rec->indx\">$rec->hdline</A></TD>";
		echo "<TD>$rec->insdate</TD>";
		echo "<TD>$rec->catagory</TD>";	
		echo "</TR>";
	}

	
?>

<CENTER>
  <TABLE BORDER=0 WIDTH="0" CELLPADDING="0" CELLSPACING="0">
 <TR>
   <TD WIDTH=16>&nbsp;</TD>
  
   </TR>     

    <TR>
      <TD WIDTH=16>&nbsp;</TD>
      <TD WIDTH=95% BGCOLOR="#B70000" ALIGN="CENTER"><A HREF="../"><IMG SRC="../img/butt_home.gif" WIDTH="55" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Home" BORDER="0"></A><A HREF="../docs/"><IMG SRC="../img/butt_docs.gif" WIDTH="48" HEIGHT="28" ALT="Documentation" BORDER="0" VSPACE="0" HSPACE="8"></A><A HREF="../intro/"><IMG SRC="../img/butt_intro.gif" WIDTH="45" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Intro" BORDER="0"></A><A HREF="../hardware/"><IMG SRC="../img/butt_hardware.gif" WIDTH="94" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Hardware" BORDER="0"></A><A HREF="../otherpages/"><IMG SRC="../img/butt_otherpages.gif" WIDTH="119" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Other pages" BORDER="0"></A><A HREF="../about/"><IMG SRC="../img/butt_about.gif" WIDTH=57 HEIGHT=28 VSPACE=0 HSPACE=8 ALT="About" BORDER=0></A></TD>
      <TD WIDTH=16>&nbsp;</TD>

    </TR>
    <TR>
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
 
    </TR>
    <TR VALIGN="top">
      <TD></TD>
      <TD BGCOLOR="#DC9D33">
      
        <TABLE BORDER="0" WIDTH="100%" HSPACE="8" VSPACE="0">

        <TR> <TD WIDTH=10></TD>
            <TD WIDTH="552">

            <FONT FACE="Helvetica, sans-serif"><FONT SIZE="+2"><B>
             
            <!-- Document title goes here. If this is the top-level -->
            <!-- document in the hierarchy, i.e. /docs/index.html,  -->
            <!-- the document title is omitted. -->
            
            </B></FONT><P><FONT SIZE="+2"><B>Search Results</B></FONT>

	      <!-- Actual document -->
	
		<?php
			if ($num_hits == "")
				echo "<P><FONT SIZE=\"+1\">Sorry, I didn't find any matches your query.</FONT>";
			else {
				if ($num_hits == 1) 
					echo "<P><FONT SIZE=\"+1\">I found ".$num_hits." hit that matches your query.</FONT>";
				else
					echo "<P><FONT SIZE=\"+1\">I found ".$num_hits." hits that match your query.</FONT>";
				echo "<P><TABLE BORDER=0 CELLSPACING=5 WIDTH=90%>";
				echo "<TH ALIGN=LEFT>Headlne</TH><TH ALIGN=LEFT>Date Submitted</TH><TH ALIGN=LEFT><TH>Catagory</TH><TH></TH>";

				for ($i=0;$i<$num_hits;$i++) {
					print_results(mysql_fetch_object($answer));
				}
				echo "</TABLE>";
			}				

		?>   
	
              <!-- End of actual document -->

	      </FONT></TD>
          </TR>

        </TABLE>
        <P>&nbsp;</P>
      </TD>
      <TD>&nbsp;</TD>

    </TR>
  </TABLE>
	<? include ("footer.php"); ?>
</CENTER>
</BODY>
</HTML>










