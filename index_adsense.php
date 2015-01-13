<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>
<META name="generator" content="HTML Tidy for Mac OS, see www.w3.org">
<TITLE>The AlphaLinux Homepage</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META name="description" content="Information on the Alpha port of Linux">
<META name="keywords" content="alpha linux axp multia as200 jensen ruffian alphastation alphaserver 21064 21164 21264 064 64-bit 164 264 sx lx up1500 up2000 up1100">

 <STYLE type="text/css">
 BODY {
		font-family: Arial, helvetica, sans-serif;
		font-size: 80%;
		}
		
 </STYLE> 
 <!-- this page in 4.01 compliant except for the use of valign. without it the column on the right side would sit in the middle. I could use CSS instead but then NS4 would lose out. -->
</HEAD>
 
<?php
include("alphalinux.php");
?>
<BODY bgcolor="#000000" text="#000000" link="#DD0000" alink=
"#CC0000" vlink="#CC0000">

<div align="center">
	<script type="text/javascript"><!--
	google_ad_client = "pub-3347771567266310";
	/* 728x90, created 6/3/10 */
	google_ad_slot = "7158234347";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
	<p>&nbsp;</p>
</div>

<TABLE width="700" align="center" summary="" border="0" width="0" cellpadding="0" cellspacing=
"0">

<TR>
<TD width="16">&nbsp;</TD>
<TD width="100%" bgcolor="#B70000" align="CENTER"><A href=
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

<!-- makes the black space between the nav bar and main body -->
<TR>
	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE="0" VSPACE="0" ALT=""></TD>
	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE="0" VSPACE="0" ALT=""></TD>
	<TD HEIGHT="4"><IMG SRC="img/dot.gif" WIDTH="1" HEIGHT="1" HSPACE="0" VSPACE="0" ALT=""></TD>
 
</TR>

<!-- this row isnt terminated until the very end of the file -->
<TR valign="top">
<TD>
<!-- positions the edge of the penguin circle properly. looks fine in
NS4 and IE6 however all of the complient browsers get it wrong. For the
later we adjust the vspace attribute accordingly -->
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

<!-- main layout table -->
<TABLE summary="" border="0" width="100%" hspace="8">
<TR>

	<TD>
	
<!-- left column -->	
<TABLE summary="" border="0" cellpadding="0" cellspacing="0">
<TR>
<TD width="500" valign="TOP">

<?php

		for ($i=0; $i<$num_rows; $i++) {
			print_sections(mysql_fetch_object($result)); 
		}	

?>
</TD>

<TD width="4">
<IMG SRC="img/dot.gif" WIDTH="4" HEIGHT="1" HSPACE="0" VSPACE="0" ALT="">
</TD>


<!--Begin sidebar-->
<TD width="200" valign="top" style="padding-left:4px;padding-right:4px;">
<!--snip-->




<TABLE summary="" cellspacing="0" cellpadding="0" border="0" width="100%">
<TR>
	<TD id="sidebar" align="LEFT" >
	
 <?php
 /*	alphanews_net(); */
  ?>

<TABLE summary="" cellspacing="0" cellpadding="0" border="0" width="100%">
    <TR>
	<TD id="sidebar" align="right" >


<style type="text/css">
@import url(http://www.google.com/cse/api/branding.css);
</style>
<div class="cse-branding-bottom" style="background-color:##DC9D33;color:#000000">
  <div class="cse-branding-form">
    <form action="http://www.google.com/cse" id="cse-search-box" target="_blank">
      <div>
        <input type="hidden" name="cx" value="partner-pub-3347771567266310:al940p-g86u" />
        <input type="hidden" name="ie" value="ISO-8859-1" />
        <input type="text" name="q" size="12" />
        <input type="submit" name="sa" value="Search" />
      </div>
    </form>
  </div>
  <div class="cse-branding-logo">
    <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
  </div>
  <div class="cse-branding-text">
    Custom Search
  </div>
</div>




	</td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>

<? sidebar_header("AlphaLinux Software"); ?>
 <A href="http://www.alphalinux.org/firmware/api">SRM archive: API Networks</A><BR>
 <A href="http://www.alphalinux.org/software/ccc">Compaq C++ archive</A><BR>
 <A href="http://www.alphalinux.org/software/java">Compaq Java v1.3 archive</A><BR>
<?php #sidebar_footer(); ?>

<?
#sidebar_header("Alpha Related Sites");
?>
<!-- you're within a div when you enter text between these two functions.
     don't worry about padding spaces between the subsequent boxes, it's taken
     care of -->
<!-- <A href="search.shtml">Search AlphaLinux.Org</A><BR>-->
 <!--
 <A href="http://www.alphanews.net">Alpha News Network</A><BR>
 -->
<!-- <A href="hardware/vendors.shtml">Vendor List</A><BR>-->
 <!-- apinetworks is nolonger home to relevant content -->
 <!-- <A href="http://www.api-networks.com">API Networks, Inc.</A> 
(API)<BR>-->
<!-- <A href="http://www.compaq.com/linux">Compaq Computer Co.</A><BR>
 <A href="http://www.digital.com">Compaq Digital Products</A>
(DEC)<BR>
 <A href=
"http://samsungelectronics.com/semiconductors/Alpha_CPU/alpha_cpu_index.htm">
Samsung Semiconductor</A>-->
<?
sidebar_footer();
?>

<?php
sidebar_header("AlphaLinux Docs");
?>
 <A href="wiki/index.php/Main_Page">AlphaLinux Wiki</A><BR>
 <A href="faq/FAQ.html">AlphaLinux FAQ</A><BR>
 <A href="docs/alpha-howto.html">AlphaLinux Howto</A><BR>
 <A href="kernel">AlphaLinux kernel page</A><BR>
 <A href="faq/MILO-HOWTO/t1.html">MILO Howto</A><BR>
 <A href="faq/SRM-HOWTO/index.html">SRM Howto</A><BR>
 <A href="faq/alphabios-howto.html">AlphaBIOS Howto</A><BR>
 <A href="docs/fbcon_faq.shtml">Frame Buffer Howto</A><BR>
<!-- <A href="archives/">Mailing List Archives</A><BR>
 <A href="http://www.alphalinux.org/ALOHcl">ALO Hardware Database</A><BR>-->
<? 
sidebar_footer();
?>


<?
sidebar_header("AlphaLinux Distributions");
?>

<!-- <A href="http://www.alphacore.info">Alpha Core</A><BR>
 <A href="http://www.centos.org">CentOS</A><BR>-->
 <A href="http://www.debian.org/ports/alpha/">Debian</A><BR>
 <A href="http://www.gentoo.org/proj/en/base/alpha/">Gentoo</A><BR>
<!-- <A href="http://www.kondara.org">Kondara</A><BR>
 <A href="mandrake/">Mandrake</A><BR>
 <A href="http://pld-linux.org">Polish Linux Distribution</A><BR>
 <A href="http://h18000.www1.hp.com/products/software/alpha-tools/redhat/">RedHat
7.2 (From HP)</A><BR>
 <A href="http://www.redhat.com">RedHat</A><BR>
 <A href="http://www.rocklinux.org/">RockLinux</A><BR>
 <A href="http://www.slackware.com">Slackware</A><BR>
 <A href="http://www.suse.com">SuSE</A><BR>
 <A href="http://talinux.tal.org">TA-Linux</A><BR>-->
<?php
sidebar_footer();
?>



<?php 
	/*	sidebar_header("Articles");
		
		for ($i=0;$i<$article_rows;$i++) {
			$article_obj=(mysql_fetch_object($article_result));
			echo "<A HREF=\"http://www.alphalinux.org/press-articles/index.php?indx=$article_obj->indx&type=Articles\">$article_obj->hdline $article_obj->insdate</A><BR>";
		}
		sidebar_footer();*/
?>		

<?php sidebar_header(""); ?>
  <A href="http://www.alphalinux.org/oldnews/">Old News...</A><BR>
<? sidebar_footer(); ?>
<!-- snip -->

<!-- the following lower case tags is how our complicated table layout syntax ends out layout table -->
</td>
</tr>
</table>
</td>
</tr>
</table>


<!-- end of main table -->
</TR>
</TABLE>


</TABLE>

<CENTER>
<FONT  color="#DC9D33" face="helvetica,sans-serif" size="-1">
Powered by Alpha / Linux&reg; is a registered trademark of
Linus Torvalds
</FONT>
</CENTER>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2237342-3");
pageTracker._trackPageview();
} catch(err) {}</script>
</BODY>

</HTML>

