<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<META name="generator" content=
"HTML Tidy for Mac OS, see www.w3.org">
<TITLE>The AlphaLinux Homepage</TITLE>
<META http-equiv="Content-Type" content=
"text/html; charset=iso-8859-1">
<META name="description" content=
"Information on the Alpha port of Linux">
<META name="keywords" content=
"alpha linux axp multia as200 jensen ruffian alphastation alphaserver 21064 21164 21264 064 64-bit 164 264 sx lx">

 <STYLE type="text/css">
 BODY {
		font-family: Arial, helvetica, sans-serif;
		font-size: 80%;
		}
 </STYLE> 
 <!-- this page in 4.01 compliant except for the use of valign. without it the page breaks. -->
</HEAD>
 
 <?php
	$debug=0;

	include ("database.php");
	require_once('browser.php');

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
/*
	$news_container_start=" 
	<!-- Newsitem starts here. Duplicate news item as neccessary. -->
	<TABLE summary=\"\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
	<TR>";
	
	$news_header_begin="
	<TD width=\"32\"><IMG src=\"img/icon_beak.gif\" width=\"32\" height=\"32\"
	alt=\"*\"></TD>
	<TD bgcolor=\"#B70000\" valign=\"TOP\" align=\"LEFT\"><IMG src=
	\"img/sl.gif\" alt=\"\"></TD>
	<TD bgcolor=\"#B70000\"><FONT color=\"#000000\" size=\"+1\"><B>";
	
	
	$news_header_end="
	</B></FONT> </TD>
	<TD bgcolor=\"#B70000\" valign=\"top\" align=\"right\"><IMG src=
	\"img/sr.gif\" alt=\"\"></TD>
	</TR>";
	
	
	$news_date_begin="
	<TR>
	<TD></TD>
	<TD colspan=\"3\"><IMG src=\"img/sp.gif\" valign=\"TOP\" width=\"100%\"
	height=\"2\" alt=\"\"></TD>
	</TR>
	
	<TR>
	<TD></TD>
	<TD colspan=\"3\" bgcolor=\"#DC9D33\">";
	
	$news_date_end="
	</TD>
	</TR>";
	
	$news_body_begin="
	<TR>
	<TD>&nbsp;</TD>
	<TD colspan=\"3\"><FONT face=\"Arial, Helvetica, sans-serif\">
	<P>";
	
	$news_body_end="
	</P>
	</FONT> </TD>";
	
	$news_container_end=" 
	</TR>
	</TABLE>
	<!-- end news item -->";
*/
	function print_sections($rec) {
		echo "<!-- Newsitem starts here. Duplicate news item as neccessary. -->
	<TABLE summary=\"\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">
	<TR>";

		echo "<TD width=\"32\"><IMG src=\"img/icon_beak.gif\" width=\"32\" height=\"32\"
	alt=\"*\"></TD>
	<TD bgcolor=\"#B70000\" valign=\"TOP\" align=\"LEFT\"><IMG src=
	\"img/sl.gif\" alt=\"\"></TD>
	<TD bgcolor=\"#B70000\"><FONT color=\"#000000\" size=\"+1\"><B>";
			echo "$rec->hdline";
		echo "</B></FONT> </TD>
	<TD bgcolor=\"#B70000\" valign=\"top\" align=\"right\"><IMG src=
	\"img/sr.gif\" alt=\"\"></TD>
	</TR>";
	//print (date("l F jS Y g:i:s a",$rec->insdate));
		echo "<TR>
	<TD></TD>
	<TD colspan=\"3\"><IMG src=\"img/sp.gif\" valign=\"TOP\" width=\"100%\"
	height=\"2\" alt=\"\"></TD>
	</TR>
	
	<TR>
	<TD></TD>
	<TD colspan=\"3\" bgcolor=\"#DC9D33\">";
		echo "$rec->insdate";
		echo "</TD>
	</TR>";
	
		echo "<TR>
	<TD>&nbsp;</TD>
	<TD colspan=\"3\"><FONT face=\"Arial, Helvetica, sans-serif\">
	<P>";
			echo "$rec->newstxt";
		echo "</P>
	</FONT> </TD>";
	
		echo "</TR>
	</TABLE>";
	}
	

	function fix_penguin() { 
	  	$br = new browser;
		if ($br->Name == "msie" && $br->Version >= 6 ) {
  		echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"0\" alt=\"\">";	  
  		}
  	  else if ($br->Name == "netscape" && $br->Version >= 4  && $br->Version < 5) {
  	  	echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"0\" alt=\"\">";
  	  	}
  	  else {
		echo "<IMG src=\"img/penguinedge.gif\" width=\"16\" height=\"77\" hspace=\"0\"  vspace=\"12\" alt=\"\">";
		}
	}
?>

<BODY bgcolor="#000000" text="#000000" link="#DD0000" alink=
"#CC0000" vlink="#CC0000">

<TABLE summary="" border="0" width="0" cellpadding="0" cellspacing=
"0">
<TR>
<TD width="16">&nbsp;</TD>
<TD width="700" bgcolor="#B70000" align="CENTER"><A href=
"intro/"><IMG src="img/butt_intro.gif" width="45" height="28"
vspace="0" hspace="8" alt="Intro" border="0"></A> <A href=
"docs/"><IMG src="img/butt_docs.gif" width="48" height="28" vspace=
"0" hspace="8" alt="Docs" border="0"></A> <A href="software/"><IMG
src="img/butt_software.gif" width="87" height="28" vspace="0"
hspace="8" alt="Software" border="0"></A> <A href="hardware/"><IMG
src="img/butt_hardware.gif" width="94" height="28" vspace="0"
hspace="8" alt="Hardware" border="0"></A> <A href=
"otherpages/"><IMG src="img/butt_otherpages.gif" width="119"
height="28" vspace="0" hspace="8" alt="Other pages" border="0"></A>
<A href="about/"><IMG src="img/butt_about.gif" width="57" height=
"28" vspace="0" hspace="8" alt="About" border="0"></A> </TD>
<TD width="16">&nbsp;</TD>
</TR>

<TR>
<TD height="4"><IMG src="img/dot.gif" width="1" height="1" hspace=
"0" vspace="0" alt=""></TD>
<TD height="4"><IMG src="img/dot.gif" width="1" height="1" hspace=
"0" vspace="0" alt=""></TD>
<TD height="4"><IMG src="img/dot.gif" width="1" height="1" hspace=
"0" vspace="0" alt=""></TD>
</TR>

<TR valign="top">
<TD>
<!-- positions the edge of the penguin circle properly. looks fine in
NS4 and IE6 however all of the complient browsers get it wrong. For the
later we adjust the vheight attribute accordingly -->
	<?php
		  fix_penguin(); 
	 ?>
</TD>
<TD bgcolor="#DC9D33">
<P><IMG src="img/penguincircle.gif" width="92" height="112" hspace=
"0" vspace="0" alt=""> <IMG src="img/logo.gif" width="498" height=
"112" hspace="0" vspace="0" alt="AlphaLinux"> 
<!-- <B>August 3rd, 2004 </B> -->
</P>

<TABLE summary="" border="0" width="584" hspace="8">
<TR>
<TD>
<TABLE summary="" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="500" valign="TOP">


<?php 
for ($i=0; $i<$num_rows; $i++) {
		print_sections(mysql_fetch_object($result)); 
	}
?>

<!--Begin sidebar--></TD>
<TD width="2"></TD>

<TD  valign="TOP" bgcolor="#DC9D33" width="190" style="float:right; padding-left:32px;">
<TABLE summary="" cellspacing="0" cellpadding="0" border="0" width="100%">
<TR>
<TD id="sidebar" align="LEFT">


<TABLE bgcolor="#B70000" summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD  valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><center><B>Latest From AlphaNews.NET</B></center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD  bgcolor="#DC9D33"><IMG src="img/sp.gif" width="100%" valign=
"TOP" alt=""><BR>

		 <?php
 $file = fopen("backend.rdf", "r");
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
  
 ?>
 <BR><BR>
 </TD>
</TR>
</TABLE>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0">
<TR>
<TD bgcolor="#B70000" align="LEFT">
<TABLE summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><Center><B>Alpha Related Sites</B></center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD bgcolor="#DC9D33"><IMG src="img/sp.gif" valign="TOP" width=
"100%" alt=""><BR>
 <A href="search.shtml">Search All Of AlphaLinux.Org</A> - New!<BR>
 <A href="http://www.alphanews.net">Alpha News Network</A><BR>
 <A href="hardware/vendors.shtml">Vendor List</A><BR>
 <A href="http://www.api-networks.com">API Networks, Inc.</A>
(API)<BR>
 <A href="http://www.compaq.com/linux">Compaq Computer Co.</A><BR>
 <A href="http://www.digital.com">Compaq Digital Products</A>
(DEC)<BR>
 <A href=
"http://samsungelectronics.com/semiconductors/Alpha_CPU/alpha_cpu_index.htm">
Samsung Semiconductor</A><BR>
 <BR>
  <BR><BR>
 </TD>
</TR>
</TABLE>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0">
<TR>
<TD bgcolor="#B70000" align="LEFT">
<TABLE summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><center><B>AlphaLinux Docs</B> </center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD bgcolor="#DC9D33"><IMG src="img/sp.gif" width="100%" valign=
"TOP" alt=""><BR>
 <A href="faq/FAQ.html">AlphaLinux FAQ</A><BR>
 <A href="docs/alpha-howto.html">AlphaLinux Howto</A><BR>
 <A href="kernel">AlphaLinux kernel page</A><BR>
 <A href="faq/MILO-HOWTO/t1.html">MILO Howto</A><BR>
 <A href="faq/SRM-HOWTO/index.html">SRM Howto</A><BR>
 <A href="faq/alphabios-howto.html">AlphaBIOS Howto</A><BR>
 <A href="docs/fbcon_faq.shtml">Frame Buffer Howto</A><BR>
 <A href="archives/">Mailing List Archives</A><BR>
 <A href="http://www.alphalinux.org/ALOHcl">ALO Hardware
Database</A><BR>
 <BR><BR>
 </TD>
</TR>
</TABLE>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0">
<TR>
<TD bgcolor="#B70000" align="LEFT">
<TABLE summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><center><B>AlphaLinux Distributions</B></center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD bgcolor="#DC9D33"><IMG src="img/sp.gif" valign="TOP" width=
"100%" alt=""><BR>
 <A href="http://www.debian.org">Debian</A><BR>
 <A href="http://www.gentoo.org">Gentoo</A><BR>
 <A href="http://www.kondara.org">Kondara</A><BR>
 <A href="mandrake/">Mandrake</A><BR>
 <A href="http://www.pld.org.pl">Polish Linux Distribution</A><BR>
 <A href="http://www.support.compaq.com/alpha-tools/redhat/">RedHat
7.2 (From HP)</A><BR>
 <A href="http://www.redhat.com">RedHat</A><BR>
 <A href="http://www.rocklinux.org/">RockLinux</A><BR>
 <A href="http://www.slackware.com">Slackware</A><BR>
 <A href="http://www.suse.com">SuSE</A><BR>
 <A href="http://talinux.tal.org">TA-Linux</A><BR>
 <BR><BR>
 </TD>
</TR>
</TABLE>

<P><!-- Create the articles box -->
</P>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0">
<TR>
<TD bgcolor="#B70000" align="LEFT">
<TABLE summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><center><B>Articles</B></center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD bgcolor="#DC9D33"><IMG src="img/sp.gif" valign="TOP" width=
"100%" alt=""><BR>
 <FONT face="Arial, Helvetica, sans-serif">
<?php
	for ($i=0;$i<$article_rows;$i++) {
		$article_obj=(mysql_fetch_object($article_result));
		echo "<A HREF=\"http://www.alphalinux.org/press-articles/index.php?indx=$article_obj->indx&type=Articles\">$article_obj->hdline $article_obj->insdate</A><BR>";
	}

?>		
				
</FONT>
 <BR><BR>
 </TD>
</TR>
</TABLE>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0">
<TR>
<TD bgcolor="#B70000" align="LEFT">
<TABLE summary="" cellpadding="0" cellspacing="0" border="0" width=
"100%">
<TR>
<TD valign="TOP" align="LEFT"><IMG src="img/sl.gif" alt=""></TD>
<TD width="190"><center><B>Contact Us</B></center></TD>
<TD valign="TOP" align="RIGHT"><IMG src="img/sr.gif" alt=""></TD>
</TR>
</TABLE>
</TD>
</TR>

<TR>
<TD bgcolor="#DC9D33"><IMG src="img/sp.gif" valign="TOP" width=
"100%" alt=""><BR>
 <A href="http://www.alphalinux.org/user/">Submit News</A><BR>
 <A href="mailto:webmaster@alphalinux.org">Webmaster</A><BR>
 <A href="mailto:ftpadmin@alphalinux.org">FTP Admin</A><BR>
 

<P><A href="http://www.alphalinux.org/oldnews/">Old News...</A><BR>
</P>
 <BR><BR>

</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
</TD>
</TR>

<!-- End of Sidebar. -->
</TABLE>
</TD>
</TR>

<TR>
<TD></TD>
<TD>
<CENTER><FONT color="#DC9D33" face="helvetica,sans-serif" size=
"-1">Powered by Alpha / Linux&reg; is a registered trademark of
Linus Torvalds</FONT></CENTER>

</TD>
<TD></TD>
</TR>
</TABLE>


*</BODY>
</HTML>

