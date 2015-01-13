<HTML>
<HEAD>
<TITLE>AlphaLinux - Submit News/Press Release</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">
<?php
	$debug=0;
	
	include ("../database.php");
        //$alodb=mysql_connect("localhost","root") 
	//	or die ("<P>Can't connect to db");

	$cat_result=mysql_db_query("ALOPage","SELECT catagory FROM Catagories",$alodb);
	$cat_rows=mysql_num_rows($cat_result);
	
	$err=mysql_error();

	if ($debug)
		echo "<FONT COLOR=00FF00>The error is: $err</FONT>";


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
            
            </B></FONT><P><FONT SIZE="+2"><B>Submit News/Press Release</B></FONT>

	      <!-- Actual document -->
	      <P>
	      Enter the required information below to have your news item or press release
	      published on alphalinux.org. Remember to include any URL(s) and Email Address(es) that
	      may be relevant.<P>
	      <p>
	      Please include proper HTML tags when subimiting URLs otherwise they will not be linked properly. If you're going to use HTML formating please makes sure it's valid before submitting an article</P>
	      <FORM ACTION="submit.php" METHOD=POST>
	      <B>Catagory</B>:
	      <SELECT NAME=catagory>
	      <?php
		for ($i=0;$i<$cat_rows;$i++) {
			$cat_obj=mysql_fetch_object($cat_result);
			echo "<OPTION>$cat_obj->catagory";
			}
	      ?>
	      </SELECT>
	      <P><B>Headline</B>:
	      <INPUT TYPE="text" NAME="headline" SIZE=70><P>
	      
	      <B>News Story (or URL for press release)</B>:<BR>
	      <TEXTAREA NAME=release_info ROWS=10 COLS=70></TEXTAREA>
	      <P>
	      <INPUT TYPE="submit" VALUE="Submit">
	      <INPUT TYPE="reset" VALUE="Clear Entries">
	      </FORM>


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
