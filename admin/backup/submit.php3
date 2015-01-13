<HTML>
<HEAD>
<TITLE>AlphaLinux - Approve News/Press Release</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php

//connect to the database and get any items that are not approved.
        $alodb=mysql_pconnect("localhost","root") 
		or die ("<P>Can't connect to db");

	$query= "SELECT * FROM FrontPage WHERE indx=$editor";
	$story_to_review=mysql_db_query("ALOPage","$query",$alodb);

	$err=mysql_error();
	if ($err)
		echo "AAGGhhhhh...something went wrong!  ".$err;

	
	function print_item($rec) {
		echo "<TR><TD WIDTH=550><HR NOSHADE></TD></TR>";
		echo "<TR><TD><INPUT TYPE=RADIO NAME=editor VALUE=$rec->indx>";
		echo "<B>HeadLine:</B>  $rec->hdline</TD></TR>";
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
	     Below are the list of news items currently awaiting approval. Select the headline to review and press the
		submit button.

	<?php
		
		if ($num_items==0)
			echo "<P><H1>Sorry, no items to approve</H1></P>";
		else
		   {
			echo "<FORM ACTION=review.php3 METHOD=POST>";
			echo "<TABLE CELLPADDING=5 CELLSPACING=5 BORDER=0>";
			for ($i=0;$i<$num_items;$i++) {
				print_item(mysql_fetch_object($results));
				}
			echo "<TR><TD><INPUT TYPE=SUBMIT VALUE=\"Review Selected Item\"></TD></TR></FORM></TABLE>";
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
</CENTER>
</BODY>
</HTML>

