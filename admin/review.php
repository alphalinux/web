<!-- V0.1 Written over Jan to June, 2000. Basic editing, submission of stories -rdp -->

<!-- V0.2  Started July 7th, 2000 Added Catagory support. Catagories will decide where the item gets displayed  -rdp -->

<HTML>
<HEAD>
<TITLE>AlphaLinux - Approve News/Press Release</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php

	//Include the database connection
	include ("../database.php");
	
	// Do you want the ugly green debug message or not?
	$debug=0;

	// We didn't get an ID to edit, so just give up now
	if ($editor =="") {
		echo "<FONT COLOR=#FF0000><H1>Hey, you didn't select a story to edit. You think I can read your mind?";
		echo "</H1></BODY></HTML>";
		die;
	}
   	
	// If we're updating an existing record, this means the user has seen it, and changed it, so we need to update, then select
	if ($action=="update") {
		//decode and setup the text for insertion into mysql
		$decoded_newstext=urldecode($edit_newstext);
		$mysql_safe_newstext=$decoded_newstext;
//                $mysql_safe_newstext=addslashes($decoded_newstext);

		if ($debug) {
			echo "<B><FONT COLOR=\"00FF00\">We're updating kids.....";
			echo "<BR>Headline: $edit_headline";
			echo "<BR>Text is: $mysql_safe_newstext";
			echo "<BR>Catagory is: $catagory";
		}

		$success=mysql_db_query(ALOPage, "UPDATE FrontPage set catagory='$catagory',hdline='$edit_headline', newstxt='$mysql_safe_newstext', insdate=NOW() where indx=$editor",$alodb);
	
		$submit_err=mysql_error();
		if ($debug)
			echo "<BR>MySQL Error: $submit_err";
	}
	// End of Update code

	$query= "SELECT * FROM FrontPage WHERE indx=$editor";
	$catagory_query = "SELECT * FROM Catagories";

	if ($debug)
		echo "<BR><FONT COLOR=#00FF00>$query</FONT>";
	
	//First is the story we're updating, second is all the possible catagories we might have on this system
	$story_to_review=mysql_db_query("ALOPage","$query",$alodb);
	$catagories=mysql_db_query("ALOPage",$catagory_query,$alodb);

	if ((mysql_num_rows($story_to_review)) == 0) 
		die ("<FONT COLOR=00FF00><H1><CENTER>Sorry, no record found with that index! I'm exiting now.</CENTER></H1></FONT>");
		

	// Self explanitory
	$err=mysql_error();
	if ($err)
		echo "<FONT COLOR=#00FF00>AAGGhhhhh...something went wrong!  ".$err."</FONT>";
	

// This actually prints the record, the pretty way so we know what it would look like
// The GLOBALS are because we're going to need these variables MANY times

function print_sections($rec)
	{ 
	$GLOBALS["current_headline"]=$rec->hdline;
	$GLOBALS["current_newstext"]=$rec->newstxt;
	$GLOBALS["current_date"]=$rec->insdate;
	//This is the current catagory the item is in, the user might want to change this (of course)
	$GLOBALS["catagory"]=$rec->catagory;
	

echo "<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0>
<P>
<TR>
<TD WIDTH=\"40\"><IMG SRC=\"img/icon_beak.gif\" WIDTH=\"32\" HEIGHT=\"32\"ALT=\"*\"></TD>
<TD bgcolor=\"#B70000\" valign=top align=left><img src=\"img/sl.gif\"></TD>
<TD bgcolor=\"B70000\"> <FONT COLOR=\"#000000\" SIZE=\"+1\"  FACE=\"Arial, Helvetica, sans-serif\"><B>";
	echo $GLOBALS["current_headline"];
echo "<FONT></TD>
<TD bgcolor=\"#B70000\" valign=top align=right><img src=\"img/sr.gif\"></TD></TR>
<TR>
<TD></TD>
<TD COLSPAN=3><img src=\"img/sp.gif\" VALIGN=TOP WIDTH=100% HEIGHT=2></TD>
</TR>
<TR>
<TD></TD>
<TD COLSPAN=3 bgcolor=\"#DC9D33\"><FONT SIZE=\"-1\"  FACE=\"Arial, Helvetica, sans-serif\"><B>";
	echo $GLOBALS["current->insdate"];
echo "</tr>
<TR>
<TD>&nbsp;</TD>
<TD COLSPAN=3><FONT FACE=\"Arial, Helvetica, sans-serif\">";
	echo $GLOBALS["current_newstext"]; 
echo "</TD>
</TR>
</TABLE>
<P>";
}

// End of the pretty print function
	
function print_cats($rec, $current_cat) {
	if (($rec->catagory) == $current_cat)
		echo "<OPTION SELECTED>$rec->catagory";
	else
		echo "<OPTION>$rec->catagory";
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
      <TD HEIGHT="4"><IMG SRC="../img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
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

		print_sections(mysql_fetch_object($story_to_review));
	
	?>
	  <HR NOSHADE SIZE=3>

	  <P><B>Make any changes below and select update to view any changes, or submit to commit this to the database.
		News texts can contain any valid HTML tags, headlines should be plain text only. Remember that any changes
		made below will only take effect it you first update, then commit.</B></P>
	  <HR NOSHADE SIZE=3>
	  
	<?php
		echo "<FORM METHOD=POST ACTION=review.php?action=update>";
		echo "<INPUT TYPE=HIDDEN NAME=editor VALUE=$GLOBALS[editor]>";
		echo "<P><B>Catagory is currently:</B><SELECT NAME=catagory>";

		$num_cats=mysql_num_rows($catagories);
		for ($i=0; $i<$num_cats;$i++) 
			print_cats(mysql_fetch_object($catagories),$GLOBALS[catagory]);	
			
	  	echo "</SELECT><P><B>Headline</B><TEXTAREA ROWS=1 COLS=70 NAME=edit_headline>$current_headline</TEXTAREA>";
		echo "<P><B>News Text</B><TEXTAREA ROWS=10 COLS=70 NAME=edit_newstext>$current_newstext</TEXTAREA>";
		echo "<P ALIGN=CENTER><TABLE><TR><TD><INPUT TYPE=SUBMIT NAME=updater VALUE=\"Update Changes\"><BR>";

		echo "</FORM></TD><TD><FORM ACTION=approve.php?record=$GLOBALS[editor]&action=update METHOD=POST>";
		echo "<INPUT TYPE=HIDDEN NAME=edit_headline VALUE=\"$current_headline\">";
		echo "<INPUT TYPE=HIDDEN NAME=edit_newstext VALUE=\"";
		echo urlencode($current_newstext)."\">";
		echo "<INPUT TYPE=HIDDEN NAME=catagory VALUE=$catagory>";
		echo "<INPUT TYPE=SUBMIT NAME=submitter VALUE=\"Commit Changes\">";
		
		echo "</FORM></TD><TD><FORM METHOD=POST ACTION=approve.php?record=$GLOBALS[editor]&action=delete>";
		echo "<INPUT TYPE=SUBMIT VALUE=\"Delete Record\" NAME=deleter>";
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










