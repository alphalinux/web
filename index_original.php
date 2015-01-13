<HTML>
<HEAD>
<TITLE>The AlphaLinux Homepage</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<meta name="description" content="Information on the Alpha port of Linux">
<meta name="keywords" content="alpha linux axp multia as200 jensen ruffian alphastation alphaserver 21064 21164 21264 064 64-bit 164 264 sx lx">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

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
	echo "<TABLE BORDER=\"0\" CELLPADDING=\"0\" CELLSPACING=\"0\">
<TR>
<TD WIDTH=\"32\"><IMG SRC=\"img/icon_beak.gif\" WIDTH=\"32\" HEIGHT=\"32\"ALT=\"*\"></TD>
<TD bgcolor=\"#B70000\" VALIGN=\"TOP\" ALIGN=\"LEFT\"><img src=\"img/sl.gif\" ALT=\"\"></TD>
<TD bgcolor=\"B70000\"> <FONT COLOR=\"#000000\" SIZE=\"+1\"  \"><B>
$rec->hdline
</B></FONT></TD>
<TD bgcolor=\"#B70000\" valign=\"top\" align=\"right\"><img src=\"img/sr.gif\" ALT=\"\"></TD></TR>
<TR>
<TD></TD>
<TD COLSPAN=3><img src=\"img/sp.gif\" VALIGN=\"TOP\" WIDTH=\"100%\" HEIGHT=2 ALT=\"\"></TD>
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
<TD COLSPAN=3><FONT FACE=\"Helvetica, sans-serif\">
$rec->newstxt
<BR><BR>
</FONT>
</TD>
</TR>
</TABLE>";
}
?>

<CENTER>


<TABLE BORDER="0" WIDTH="0" CELLPADDING="0" CELLSPACING="0">
<TR>

	<TD WIDTH=16>&nbsp;</TD>
	<TD WIDTH="700" BGCOLOR="#B70000" ALIGN="CENTER">
	<A HREF="intro/"><IMG SRC="img/butt_intro.gif" WIDTH="45" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Intro" BORDER="0"></A>
	<A HREF="docs/"><IMG SRC="img/butt_docs.gif" WIDTH="48" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Docs" BORDER="0"></A>
	<A HREF="software/"><IMG SRC="img/butt_software.gif" WIDTH="87" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Software" BORDER="0"></A>
	<A HREF="hardware/"><IMG SRC="img/butt_hardware.gif" WIDTH="94" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Hardware" BORDER="0"></A>
	<A HREF="otherpages/"><IMG SRC="img/butt_otherpages.gif" WIDTH="119" HEIGHT="28" VSPACE=0 HSPACE=8 ALT="Other pages" BORDER="0"></A>
	<A HREF="about/"><IMG SRC="img/butt_about.gif" WIDTH=57 HEIGHT=28 VSPACE=0 HSPACE=8 ALT="About" BORDER=0></A>
	</TD>
	<TD WIDTH=16>&nbsp;</TD>

</TR>
<TR>

	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE=0 VSPACE=0 ALT=""></TD>
 
</TR>
<TR VALIGN="top">
	<TD><IMG SRC="img/penguinedge.gif" WIDTH="16" HEIGHT="77" HSPACE=0 VSPACE=0 ALT=""></TD>
	<TD BGCOLOR="#DC9D33">
	<P>
	<IMG SRC="img/penguincircle.gif" WIDTH="92" HEIGHT="112" HSPACE=0 VSPACE=0 ALT="">
	<IMG SRC="img/logo.gif" WIDTH="498" HEIGHT="112" HSPACE=0 VSPACE=0 ALT="AlphaLinux">
	<!-- <B><?php print (date("F jS, Y ")) ?></B> -->
	</P>

<TABLE BORDER=0 WIDTH="584" HSPACE=8>
	<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0>
	<TR>
	<TD WIDTH="500" VALIGN=TOP>
	<!-- Newsitem starts here. Duplicate news item as neccessary. -->


<?php
	for ($i=0; $i<$num_rows; $i++)
	{
	 print_sections(mysql_fetch_object($result));
}
?>

<!--Begin sidebar--> 

	
	</TD>
	<TD WIDTH=2><FONT COLOR="#DC9D33"></FONT></TD>
	<TD VALIGN=TOP BGCOLOR="#DC9D33" WIDTH="250" ALIGN="CENTER">
        <TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
                <TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

                <TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
                        <TD VALIGN="TOP" ALIGN="LEFT"><IMG SRC="img/sl.gif" ALT=""></TD>
                        <TD WIDTH=190>
                        Latest From AlphaNews.NET</TD>
                        <TD VALIGN="TOP" ALIGN="RIGHT"><IMG SRC="img/sr.gif" ALT=""></TD>
                </TR></TABLE>

                </TD></TR>

                <TR><TD BGCOLOR="#DC9D33">
                <img src="img/sp.gif" WIDTH="100%" VALIGN=TOP ALT=""><BR>
		 <?php
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
 ?>

        </TD></TR>
        </TABLE>
	<P>

	<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
		<TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

		<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
			<TD VALIGN="TOP" ALIGN="LEFT"><IMG SRC="img/sl.gif" ALT=""></TD>
			<TD WIDTH=190>
Alpha Related Sites</TD>
			<TD VALIGN="TOP" ALIGN="RIGHT"><IMG SRC="img/sr.gif" ALT=""></TD>
		</TR></TABLE>

		</TD></TR>

		<TR><TD BGCOLOR="#DC9D33">
		<img src="img/sp.gif" VALIGN=TOP WIDTH="100%" ALT=""><BR>
		<A HREF="search.shtml">Search  All Of AlphaLinux.Org</A> - New!<BR>
		<A HREF="http://www.alphanews.net">Alpha News Network</A><BR>
		<A HREF="hardware/vendors.shtml">Vendor List</A><BR>
		<A HREF="http://www.api-networks.com">API Networks, Inc.</A> (API)<BR>
		<A HREF="http://www.compaq.com/linux">Compaq Computer Co.</a><BR>
		<A HREF="http://www.digital.com">Compaq Digital Products</a> (DEC)<BR>
		<A HREF="http://samsungelectronics.com/semiconductors/Alpha_CPU/alpha_cpu_index.htm">Samsung Semiconductor</a><BR>
		<BR>
	</TD></TR>
	</TABLE>
	<P>

			

	<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
		<TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

		<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
			<TD VALIGN="TOP" ALIGN=LEFT><IMG SRC="img/sl.gif" ALT=""></TD>
			<TD WIDTH=190>
			AlphaLinux Docs</TD>
			<TD VALIGN="TOP" ALIGN=RIGHT><IMG SRC="img/sr.gif" ALT=""></TD>
		</TR></TABLE>

		</TD></TR>
		
		<TR><TD BGCOLOR="#DC9D33">
		<img src="img/sp.gif" WIDTH="100%" VALIGN=TOP ALT=""><BR>
		<A HREF="faq/FAQ.html">AlphaLinux FAQ</A><BR>
		<A HREF="docs/alpha-howto.html">AlphaLinux Howto</A><BR>
		<A HREF="kernel">AlphaLinux kernel page</A><BR>
                <A HREF="faq/MILO-HOWTO/t1.html">MILO Howto</A><BR>
		<A HREF="faq/SRM-HOWTO/index.html">SRM Howto</A><BR>
		<A HREF="faq/alphabios-howto.html">AlphaBIOS Howto</A><BR>
		<A HREF="docs/fbcon_faq.shtml">Frame Buffer Howto</A><BR>
		<A HREF="archives/">Mailing List Archives</A><BR>
		<A HREF="http://www.alphalinux.org/ALOHcl">ALO Hardware Database</A><BR>
		
	</TD></TR></TABLE>
	<P>

	<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
		<TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

		<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
			<TD VALIGN=TOP ALIGN=LEFT><IMG SRC="img/sl.gif" ALT=""></TD>
			<TD WIDTH=190>
			AlphaLinux Distributions</B></TD>
			<TD VALIGN=TOP ALIGN=RIGHT><IMG SRC="img/sr.gif" ALT=""></TD>
		</TR></TABLE>

		</TD></TR>

		<TR><TD BGCOLOR="#DC9D33">
		<img src="img/sp.gif" VALIGN=TOP WIDTH="100%" ALT=""><BR>
		<A HREF="http://www.debian.org">Debian</A><BR>
	<A HREF="http://www.gentoo.org">Gentoo</A><BR>
		<A HREF="http://www.kondara.org">Kondara</A><BR>
		<A HREF="mandrake/">Mandrake</A><BR>
		<A HREF="http://www.pld.org.pl">Polish Linux Distribution</A><BR>
		<a href="http://www.support.compaq.com/alpha-tools/redhat/">RedHat 7.2 (From HP)</a><br>
		<A HREF="http://www.redhat.com">RedHat</A><BR>
		<A HREF="http://www.rocklinux.org/">RockLinux</A><BR>
		<A HREF="http://www.slackware.com">Slackware</A><BR>
		<A HREF="http://www.suse.com">SuSE</A><BR>
		<A HREF="http://talinux.tal.org">TA-Linux</A><BR>

	
	</TD></TR></TABLE>
	<P>


	<!-- Create the articles box -->
	<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
		<TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

		<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
			<TD VALIGN=TOP ALIGN=LEFT><IMG SRC="img/sl.gif" ALT=""></TD>
			<TD WIDTH=190>
			<B>Articles</FONT></TD>
			<TD VALIGN=TOP ALIGN=RIGHT><IMG SRC="img/sr.gif" ALT=""></TD>
		</TR></TABLE>

		</TD></TR>

		<TR><TD BGCOLOR="#DC9D33">
		<img src="img/sp.gif" VALIGN=TOP WIDTH="100%" ALT=""><BR>
		<FONT FACE="Arial, Helvetica, sans-serif">
		<?php
			for ($i=0;$i<$article_rows;$i++) {
				$article_obj=(mysql_fetch_object($article_result));
				echo "<A HREF=\"http://www.alphalinux.org/press-articles/index.php?indx=$article_obj->indx&type=Articles\">$article_obj->hdline $article_obj->insdate</A><BR>";
			}
		
		?>		
	
	</TD></TR></TABLE>
	<P>
	
	<TABLE CELLSPACING=0 CELLPADDING=0 BORDER=0>
		<TR><TD BGCOLOR="#B70000" ALIGN="LEFT">

		<TABLE CELLPADDING=0 CELLSPACING=0 BORDER=0 WIDTH="100%"><TR>
			<TD VALIGN=TOP ALIGN=LEFT><IMG SRC="img/sl.gif" ALT=""></TD>
			<TD WIDTH=190>
			Contact Us</FONT></TD>
			<TD VALIGN=TOP ALIGN=RIGHT><IMG SRC="img/sr.gif" ALT=""></TD>
		</TR></TABLE>

		</TD></TR>

		<TR><TD BGCOLOR="#DC9D33">
		<img src="img/sp.gif" VALIGN=TOP WIDTH="100%" ALT=""><BR>
		
		<A HREF="http://www.alphalinux.org/user/">Submit News</A><BR>
		<A HREF="mailto:webmaster@alphalinux.org">Webmaster</A><BR>
		<A HREF="mailto:ftpadmin@alphalinux.org">FTP Admin</A><BR>
		<P>
		<A HREF="http://www.alphalinux.org/oldnews/">Old News...</A><BR>
		</TD></TR></TABLE>
		<P>	


	    
	</TD>
	</TR>
	</TABLE>
	


<!-- End of Sidebar. -->
	</TABLE>
      <TR>
	<TD></TD>
	<TD><CENTER>
          <FONT COLOR="#DC9D33"  FACE="helvetica,sans-serif" SIZE="-1">
	<CENTER>Powered  by Alpha / Linux® is a registered trademark of Linus Torvalds</CENTER>
	</FONT>
	</CENTER>
           </TD>
	<TD></TD>	
      </TR>
</TABLE>
</CENTER>
</BODY>
</HTML>
 
@
