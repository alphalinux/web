<HTML>
<HEAD>
<TITLE>AlphaLinux - Approve News/Press Release</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php

	$debug=0;

	//connect to the database.
        //$alodb=mysql_connect("localhost","root") 
	//	or die ("<P>Can't connect to db");

	require_once ("../database.php");

	if ($action=="delete") {

		$success=mysql_db_query(ALOPage, "DELETE FROM FrontPage where indx='$record'",$alodb);

		$del_err=mysql_error();
	}
	elseif ($action=="update") {

		// Convert back from the url encoded string. This stops the browsers from spewing the text all over the screen
		//	then add the slashes to mysql doesn't blow up :)

		$decoded_newstext=urldecode($edit_newstext);
		$mysql_safe_newstext=addslashes($decoded_newstext);
		$query="UPDATE FrontPage set catagory='$catagory',hdline='$edit_headline', newstxt='$mysql_safe_newstext', shown=1, insdate=NOW() where indx=$record";
		$success=mysql_db_query(ALOPage, "$query",$alodb);
		
		if ($debug) {
			echo "<FONT COLOR=#00FF00><B>Commiting entry number $record";
			echo "<BR>$mysql_safe_newstext";
			print "<BR>Mysql Errors were: ".mysql_error();
			print "<BR>$query</B></FONT>";	
		}
	}

	// Get all the unapproved items from the database
	$query = "SELECT * FROM FrontPage where shown=0";
	$results = mysql_db_query(ALOPage, "$query",$alodb);
	$num_items = mysql_num_rows($results);
		
	$err=mysql_error();
	if ($err) {
		echo "AAgghhh...something went wrong".$err;
		die;
	}
	

	function print_item($rec) {
		echo "<TR><TD COLSPAN=3 WIDTH=550><HR NOSHADE></TD></TR>";
		echo "<TR><TD>$rec->hdline</TD><TD>";	
		echo "<A HREF=\"approve.php?record=$rec->indx&action=delete\">Delete</A></TD>";
		echo "<TD><A HREF=\"review.php?editor=$rec->indx\">Edit</A></TD></TR>";
		
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
	      <P>
	     <B>Below are the list of news items currently awaiting approval.</B>
	<?php
		if ($action=="delete") {
			if ($success) {
				echo "<P><FONT SIZE=\"+1\"><B>Item number ".$record." has been deleted from the database.</B></FONT>";
			}
			else {
				echo "<P><FONT COLOR=\"00FF00\">Item was not deleted. The error from the database was: ".$del_err."</FONT>";
			}
		}
		if ($num_items==0)
			echo "<P><H1>Sorry, no items to approve</H1></P>";
		else
		   {
			echo "<INPUT TYPE=HIDDEN NAME=started VALUE=0>";
			echo "<TABLE CELLPADDING=5 CELLSPACING=5 BORDER=0>";
			for ($i=0;$i<$num_items;$i++) {
				print_item(mysql_fetch_object($results));
				}
			echo "</TABLE>";
		   }
		
			
	?>
	  <HR NOSHADE>
		<B><FONT  FACE="Arial, Helvetica, sans-serif">Edit Existing Approved Items:</B></FONT>
		<FORM ACTION=review.php METHOD=POST>
		Enter Record Number:  <INPUT TYPE=TEXT SIZE=6 NAME=editor>
		<INPUT TYPE=SUBMIT VALUE="Edit Record">
		</FORM>
	     <P><FONT SIZE="+1"><B>Or</B></FONT>
		<P><FORM ACTION=search.php METHOD=POST>
		<TABLE CELLSPACING=5>
		<TR>
			<TD><FONT  FACE="Arial, Helvetica, sans-serif">Headline:</TD><TD> <INPUT TYPE=TEXT SIZE=25 NAME=headline><BR></TD>
		</TR>
		<TR>
			<TD><FONT  FACE="Arial, Helvetica, sans-serif">NewsText:</TD><TD> <INPUT TYPE=TEXT SIZE=25 NAME=newstxt><BR></TD>
			<TD><INPUT TYPE=submit NAME=submitter VALUE="Search"></TD>
		</TR>
		</TABLE>
		</FORM>

		<A HREF="../">Return To Home Page</A>
		

              <!-- End of actual document -->

	      </FONT></TD>
          </TR>

        </TABLE>
        <P>&nbsp;</P>
      </TD>
      <TD>&nbsp;</TD>

    </TR>
  </TABLE>
	<? include ("footer.php") ?>
</CENTER>
</BODY>
</HTML>






