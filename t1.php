<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
           "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
<title>The AlphaLinux Homepage</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Information on the Alpha port of Linux">
<meta name="keywords" content="alpha linux axp multia as200 jensen ruffian alphastation alphaserver 21064 21164 21264 064 64-bit 164 264 sx lx">
<style type="text/css">
  <!--
  BODY
  {
    margin: 0;
    padding: 0;
  }

  BODY, P, DIV, TD, TH, TR, FORM, OL, UL, LI, INPUT, TEXTAREA, SELECT, A
  {
    font-family: Verdana, Tahoma, Arial, Helvetica, sans-serif;
      }

  A:hover  {
  	text-decoration: none;
  }

  A  {
  	text-decoration: underline;
  }
  
  .code
  {
  	font-family: Courier, "Courier New", Monospaced, Serif;
  }
  -->
  </style>

</head>

<body bgcolor="#000000" text="#000000" link="#DD0000" alink="#CC0000" vlink="#CC0000">

<?php
	$debug=0;

	include ("database.php");

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

	function print_sections($rec)
	{
	echo "<TABLE  width=\"100%\" BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
<TR>
<TD WIDTH=\"32\"><IMG SRC=\"img/icon_beak.gif\" WIDTH=\"32\" HEIGHT=\"32\"ALT=\"*\"></TD>
<TD WIDTH=\"32\" bgcolor=\"#B70000\" VALIGN=\"TOP\" ALIGN=\"LEFT\"><img src=\"img/sl.gif\" ALT=\"\"></TD>
<TD width=\"100%\" bgcolor=\"B70000\"> <FONT COLOR=\"#000000\" SIZE=\"+1\"><B>
$rec->hdline
</B></FONT></TD>
<TD WIDTH=\"32\" bgcolor=\"#B70000\" valign=\"top\" align=\"right\"><img src=\"img/sr.gif\" ALT=\"\"></TD></TR>
<TR>
<TD></TD>
<!-- <TD COLSPAN=\"3\"><img src=\"img/sp.gif\" VALIGN=\"TOP\" WIDTH=\"100%\" HEIGHT=2 ALT=\"\"></TD> -->
</TR>
<TR>
<TD></TD>
<TD COLSPAN=3 bgcolor=\"#DC9D33\">";
//print (date("l F jS Y g:i:s a",$rec->insdate));
echo "$rec->insdate";
echo "</TD>
</TR>
<TR>
<TD>&nbsp;</TD>
<TD align=\"left\" colspan=\"3\">
$rec->newstxt
<BR><BR>
</TD>
</TR>
</TABLE>";
}
?>

<center>


<table width="732" border="0" width="0" cellpadding="0" cellspacing="0">
<tr>

	<td width="16">&nbsp;</td>
	<td width="700" bgcolor="#B70000" align="center">
	<a href="intro/"><img src="img/butt_intro.gif" width="45" height="28" vspace="0" hspace="8" alt="Intro" border="0"></a>
	<a href="docs/"><img src="img/butt_docs.gif" width="48" height="28" vspace="0" hspace="8" alt="Docs" border="0"></a>
	<a href="software/"><img src="img/butt_software.gif" width="87" height="28" vspace="0" hspace="8" alt="Software" border="0"></a>
	<a href="hardware/"><img src="img/butt_hardware.gif" width="94" height="28" vspace="0" hspace="8" alt="Hardware" border="0"></a>
	<a href="otherpages/"><img src="img/butt_otherpages.gif" width="119" height="28" vspace="0" hspace="8" alt="Other pages" border="0"></a>
	<a href="about/"><img src="img/butt_about.gif" width=57 height=28 vspace="0" hspace="8" alt="About" border="0"></a>
	</td>
	<td width="16">&nbsp;</td>

</tr>
<tr>

	<td height="4"><img src="img/dot.gif" width="1" height="1" hspace="0" vspace="0" alt=""></td>
	<td height="4"><img src="img/dot.gif" width="1" height="1" hspace="0" vspace="0" alt=""></td>
	<td height="4"><img src="img/dot.gif" width="1" height="1" hspace="0" vspace="0" alt=""></td>
 
</tr>
<tr valign="top">
	<td align="right" ><img src="img/penguinedge.gif" width="16" height="77" hspace="0" vspace="0" alt=""></td>
	<td align="left" bgcolor="#DC9D33">
	<p>
	<img src="img/penguincircle.gif" width="92" height="112" hspace="0" vspace="0" alt="">
	<img src="img/logo.gif" width="498" height="112" hspace="0" vspace="0" alt="AlphaLinux">
	<!-- <B><?php print (date("F jS, Y ")) ?></B> -->
	</p>



<table border="0" cellpadding="0" cellspacing="0" width="100%">
	<tr>
	<td width="60%" valign="top">
	<!-- Newsitem starts here. Duplicate news item as neccessary. -->


<?php
	for ($i=0; $i<$num_rows; $i++)
	{
	 print_sections(mysql_fetch_object($result));
}
?>

<!--Begin sidebar--> 

	
	</td>
	<td valign="top" bgcolor="#DC9D33" width="40%" align="left">
        <table cellspacing="0" cellpadding="0" border="0">
                <tr><td bgcolor="#B70000" align="left">

                <table cellpadding=0 cellspacing=0 border=0 width="100%"><tr>
                        <td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
                        <td width="190">
                        Latest From AlphaNews.NET</td>
                        <td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
                </tr></table>

                </td></tr>

                <tr><td bgcolor="#DC9D33">
                <img src="img/sp.gif" width="100%" valign="top" alt=""><br>
		 <?php
 $file = fopen("http://www.alphalinux.org/backend.rdf", "r");
 $rf = fread($file, 32000); // read 32K  
 $grab = eregi("<item>(.*)</item>", $rf, $printing);
 $pieces = explode("<item>", $printing[0]);
 $count=count($pieces);

 for($x=1;$x<=$count-1;$x++){
 ereg("<title>(.*)</title>",$pieces[$x],$title );
 ereg("<link>(.*)</link>",$pieces[$x],$links );
 ereg("<description>(.*)</description>",$pieces[$x],$desc );
	
 echo "<a href=\"$links[1]\">$title[1]</a><br>";
    }
 ?>

        </td></tr>
        </table>
	<p>

	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
			<td width="190">
Alpha Related Sites</td>
			<td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>

		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif"  width="100%" alt=""><br>
		<a href="search.shtml">Search  All Of AlphaLinux.Org</a> - New!<br>
		<a href="http://www.alphanews.net">Alpha News Network</a><br>
		<a href="hardware/vendors.shtml">Vendor List</a><br>
		<a href="http://www.api-networks.com">API Networks, Inc.</a> (API)<br>
		<a href="http://www.compaq.com/linux">Compaq Computer Co.</a><br>
		<a href="http://www.digital.com">Compaq Digital Products</a> (DEC)<br>
		<a href="http://samsungelectronics.com/semiconductors/Alpha_CPU/alpha_cpu_index.htm">Samsung Semiconductor</a><br>
		<br>
	</td></tr>
	</table>
	<p>

			

	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align=left><img src="img/sl.gif" alt=""></td>
			<td width="190">
			AlphaLinux Docs</td>
			<td width="16" valign="top" align=right><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>
		
		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif" width="100%" valign=top alt=""><br>
		<a href="faq/FAQ.html">AlphaLinux FAQ</a><br>
		<a href="docs/alpha-howto.html">AlphaLinux Howto</a><br>
		<a href="kernel">AlphaLinux kernel page</a><br>
                <a href="faq/milo.html">MILO Howto</a><br>
		<a href="faq/srm.html">SRM Howto</a><br>
		<a href="faq/alphabios-howto.html">AlphaBIOS Howto</a><br>
		<a href="docs/fbcon_faq.shtml">Frame Buffer Howto</a><br>
		<a href="archives/">Mailing List Archives</a><br>
		<a href="http://www.alphalinux.org/ALOHcl">ALO Hardware Database</a><br>
		
	</td></tr></table>
	<p>

	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
			<td width="190">
			Software Releases</td>
			<td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>

		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif" valign=top width="100%" alt=""><br>
		<a href="/firmware/api">Alpha Firmware (API)</a><br>
		<a href="ftp://ftp.alphalinux.org/pub/patches">Kernel Patches</a><br>
		<a href="ftp://ftp.alphalinux.org/mirrors/kernel">Latest Kernel</a><br>
		<a href="ftp://ftp.alphalinux.org/pub/gnome/helix-gnome/">Helix/Ximian Gnome 1.2</a><br>
		<a href="ftp://ftp.alphalinux.org/pub/kde2">KDE 2.0</a><br>
		<a href="http://www.support.compaq.com/alpha-tools/">Compaq Linux Software</a><br>
		<a href="ftp://ftp.alphalinux.org/DIR_LISTING"> FTP Site Listing</a><br>	
		
	</td></tr></table>
	<p>
	

	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
			<td width="190">
			AlphaLinux Distributions</td>
			<td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>

		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif" valign="top" width="100%" alt=""><br>
		<a href="http://www.debian.org">Debian</a><br>
		<a href="http://www.kondara.org">Kondara</a><br>
		<a href="mandrake/">Mandrake</a><br>
		<a href="http://www.pld.org.pl">Polish Linux Distribution</a><br>
		<a href="http://www.support.compaq.com/alpha-tools/redhat/">RedHat 7.2 (From HP)</a><br>
		<a href="http://www.redhat.com">RedHat</a><br>
		<a href="http://www.rocklinux.org/">RockLinux</a><br>
		<a href="http://www.slackware.com">Slackware</a><br>
		<a href="http://www.suse.com">SuSE</a><br>
	
	</td></tr></table>
	<p>


	<!-- Create the articles box -->
	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
			<td width="190">
			<b>Articles</b></td>
			<td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>

		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif" valign="top" width="100%" alt=""><br>

		<?php
			for ($i=0;$i<$article_rows;$i++) {
				$article_obj=(mysql_fetch_object($article_result));
				echo "<a href=\"http://www.alphalinux.org/press-articles/index.php?indx=$article_obj->indx&type=Articles\">$article_obj->hdline $article_obj->insdate</a><br>";
			}
		
		?>		
	
	</td></tr></table>
	<p>
	
	<table cellspacing="0" cellpadding="0" border="0">
		<tr><td bgcolor="#B70000" align="left">

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><tr>
			<td width="16" valign="top" align="left"><img src="img/sl.gif" alt=""></td>
			<td width="190">
			Contact Us</td>
			<td width="16" valign="top" align="right"><img src="img/sr.gif" alt=""></td>
		</tr></table>

		</td></tr>

		<tr><td bgcolor="#DC9D33">
		<img src="img/sp.gif" valign="top" width="100%" alt=""><br>
		
		<a href="http://www.alphalinux.org/user/">Submit News</a><br>
		<a href="mailto:webmaster@alphalinux.org">Webmaster</a><br>
		<a href="mailto:ftpadmin@alphalinux.org">FTP Admin</a><br>
		<p>
		<a href="http://www.alphalinux.org/oldnews/">Old News...</a><br>
		</td></tr></table>
		<p>	


	    
	</td>
	</tr>
	</table> 
	


<!-- End of Sidebar. -->
	</table>
<!--
      <tr>
	<td></td>
	<td><center>
          <font color="#DC9D33"  face="helvetica,sans-serif" size="-1">
	<center>Powered  by Alpha / Linux® is a registered trademark of Linus Torvalds</center>
	</font>
	</center>
           </td>
	<td></td>	
      </tr>
 </table> -->
</center>
</body>
</html>