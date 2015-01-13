<HTML>
<HEAD>
<TITLE>AlphaLinux - Approve News/Press Release</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php

	if ($started == 0) {

	$current_headline="";
	$current_newstext="";
	$current_date="";
     
        $alodb=mysql_pconnect("localhost","root") 
		or die ("<P>Can't connect to db");

	$query= "SELECT * FROM FrontPage WHERE indx=$editor";
	$story_to_review=mysql_db_query("ALOPage","$query",$alodb);

	$err=mysql_error();
	if ($err)
		echo "AAGGhhhhh...something went wrong!  ".$err;
	}

	function print_sections($rec)
	{

	if ($GLOBALS[started]==0) {
		$GLOBALS["current_headline"]=$rec->hdline;
		$GLOBALS["current_newstext"]=$rec->newstxt;
		$GLOBALS["current_date"]=$rec->insdate;
	}
	else {
		$GLOBALS["current_headline"]=$GLOBALS[edit_headline];
		$GLOBALS["current_newstext"]=$GLOBALS[edit_newstext];
		$GLOBALS["current_date"]=$GLOBALS[ins_date];
	}

echo "<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0>
<P>
<TR>
<TD WIDTH=\"40\"><IMG SRC=\"img/icon_beak.gif\" WIDTH=\"32\" HEIGHT=\"32\"ALT=\"*\"></TD>
<TD bgcolor=\"#B70000\" valign=top align=left><img src=\"img/sl.gif\"></TD>
<TD bgcolor=\"B70000\"> <FONT COLOR=\"#000000\" SIZE=\"+1\"  FACE=\"Arial, Helvetica, sans-serif\"><B>";
if ($GLOBALS[started]==0) 
	echo $rec->hdline;
else
	echo $GLOBALS[edit_headline];

echo "<FONT></TD>
<TD bgcolor=\"#B70000\" valign=top align=right><img src=\"img/sr.gif\"></TD></TR>
<TR>
<TD></TD>
<TD COLSPAN=3><img src=\"img/sp.gif\" VALIGN=TOP WIDTH=100% HEIGHT=2></TD>
</TR>
<TR>
<TD></TD>
<TD COLSPAN=3 bgcolor=\"#DC9D33\"><FONT SIZE=\"-1\"  FACE=\"Arial, Helvetica, sans-serif\"><B>";
if ($GLOBALS[started]==0)
	echo $rec->insdate;
else
   	echo $GLOBALS[ins_date];
echo"</B></td>
</tr>
<TR>
<TD>&nbsp;</TD>
<TD COLSPAN=3><FONT FACE=\"Arial, Helvetica, sans-serif\">";
if ($GLOBALS[started]==0)
	echo $rec->newstxt; 
else
	echo $GLOBALS[edit_newstext];
echo "<P>

</TD>
</TR>
</TABLE>
<P>";
$GLOBALS[started]=1;
}
	
?>

<CENTER>
  <TABLE BORDER=0 WIDTH="0" CELLPADDING="0" CELLSPACING="0">
 <TR>
   <TD WIDTH=16>&nbsp;</TD>
  
   </TR>     

    <TR>
      <TD WIDTH=16>&nbsp;</TD>
      <TD WIDTH=600 BGCOLOR="#B70000" ALIGN="CENTER"><A HREF="../"><IMG SRC="../img/butt_home.gif" WIDTH="55" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Home" BORDER="0"></A><A HREF="../docs/"><IMG SRC="../img/butt_docs.gif" WIDTH="48" HEIGHT="28" ALT="Documentation" BORDER="0" VSPACE="0" HSPACE="8"></A><A HREF="../intro/"><IMG SRC="../img/butt_intro.gif" WIDTH="45" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Intro" BORDER="0"></A><A HREF="../hardware/"><IMG SRC="../img/butt_hardware.gif" WIDTH="94" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Hardware" BORDER="0"></A><A HREF="../otherpages/"><IMG SRC="../img/butt_otherpages.gif" WIDTH="119" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Other pages" BORDER="0"></A><A HREF="../about/"><IMG SRC="../img/butt_about.gif" WIDTH=57 HEIGHT=28 VSPACE=0 HSPACE=8 ALT="About" BORDER=0></A></TD>
      <TD WIDTH=16>&nbsp;</TD>

    </TR>
    <TR>
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
b      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
 
    </TR>
    <TR VALIGN="top">
      <TD></TD>
      <TD BGCOLOR="#DC9D33">
      
        <TABLE BORDER="0" WIDTH="584" HSPACE="8" VSPACE="0">

        <TR> <TD WIDTH=10></TD>
            <TD WIDTH="552">

            <FONT FACE="Helvetica, sans-serif"><FONT SIZE="+2"><B>
             
            <!-- Document title goes here. If this is the top-level -->
            <!-- document in the hierarchy, i.e. /docs/index.html,  -->
            <!-- the document title is omitted. -->
            
            </B></FONT><P><FONT SIZE="+2"><B>Approve News/Press Release</B></FONT>

	      <!-- Actual document -->
	      <P><B>This is what the news item will look like when displayed on the front page:</B></P>
		<HR NOSHADE SIZE=3>
	   
	<?php

	if ($GLOBALS[started]==0)		
		print_sections(mysql_fetch_object($story_to_review));
	else
		print_sections(null);
			
	?>
	  <HR NOSHADE SIZE=3>

	  <P><B>Make any changes below and select update to view any changes, or submit to commit this to the database.
		News texts can contain any valid HTML tags, headlines should be plain text only.</B></P>
	  <HR NOSHADE SIZE=3>
	  
	<?php
		echo "<FORM METHOD=POST ACTION=review.php3>";
		echo "<INPUT TYPE=HIDDEN NAME=started VALUE=$GLOBALS[started]>";
		echo "<INPUT TYPE=HIDDEN NAME=ins_date VALUE=$current_date>";
		echo "<INPUT TYPE=HIDDEN NAME=editor VALUE=$GLOBALS[editor]>";
	  	echo "<P><TEXTAREA ROWS=1 COLS=70 NAME=edit_headline>$current_headline</TEXTAREA>";
		echo "<P><TEXTAREA ROWS=10 COLS=70 NAME=edit_newstext>$current_newstext</TEXTAREA>";
		echo "<P ALIGN=CENTER><TABLE><TR><TD><INPUT TYPE=SUBMIT NAME=updater VALUE=\"Update Changes\"><BR>";
		echo "</FORM></TD><TD><FORM ACTION=approve.review.php3 METHOD=POST>";
		echo "<INPUT TYPE=HIDDEN NAME=editor VALUE=$GLOBALS[editor]>";
		echo "<INPUT TYPE=HIDDEN NAME=edit_headline VALUE='$GLOBALS[edit_headline]'>";
		echo "<INPUT TYPE=HIDDEN NAME=edit_newstxt VALUE='$GLOBALS[edit_newstext]'>";
		ECHO "<INPUT TYPE=SUBMIT NAME=submitter VALUE=\"Commit Changes\">";
		echo "</FORM></TD></TR></TABLE>";	
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
</CENTER>
</BODY>
</HTML>

