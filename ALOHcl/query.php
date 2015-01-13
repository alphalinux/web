
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- V0.1 Written Sept 5th 2000 -rdp -->
<!-- V0.2 Updated Feb 4th 2001 -rdp -->

<HTML>
<HEAD>
<TITLE>AlphaLinux - Query Results</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php
	include ("../database.php");
	
	// Do you want the ugly green debug message or not?
	$debug=0;
	$Platform = $_GET["Platform"];
	print "<p> platform is $Platform";
	$platform=mysql_db_query("ALOHcl","SELECT indx FROM Platforms where name=\"$Platform\" ORDER BY name", $alodb)
		or die ("<P>Can't query db");
	$platform_obj=mysql_fetch_object($platform);
	$platform_id=$platform_obj->indx;
	
	$results=mysql_db_query("ALOHcl","SELECT * from Configs where platform=$platform_id ORDER BY insdate",$alodb)
		or die ("<P>Can't query db");
	$num_results=mysql_num_rows($results);

	if ($debug)
		echo "<FONT COLOR=#00FF00>Results:".$num_results;
	

	function print_results($rec, $connection) {
	
		$card=mysql_db_query("ALOHcl","SELECT name,bus_type FROM Cards WHERE indx=$rec->card_tested",$connection);
		$card_obj=mysql_fetch_object($card); 

		$srm=mysql_db_query("ALOHcl","SELECT revision FROM SRMRevs WHERE indx=$rec->srm_rev",$connection);
		$srm_obj=mysql_fetch_object($srm);

		echo "<TR><TD WIDTH=\"10%\">$card_obj->name</TD>";
		echo "<TD WIDTH=\"10%\">$card_obj->bus_type</TD>";
		echo "<TD WIDTH=\"10%\">$srm_obj->revision</TD>";
		echo "<TD WIDTH=\"10%\">$rec->worky_linux</TD>";
		echo "<TD WIDTH=\"10%\">$rec->worky_srm</TD>";
		echo "<TD WIDTH=\"10%\">$rec->user_name</TD>";
		echo "<TD WIDTH=\"5%\">$rec->email</TD>";
		echo "<TD WIDTH=\"35%\">$rec->notes</TD></TR>";
	}

?>

<CENTER>
  <TABLE BORDER=0 WIDTH="0" CELLPADDING="0" CELLSPACING="0">
 <TR>   <TD WIDTH=16>&nbsp;</TD>
  
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
      
        <TABLE BORDER="0" WIDTH="90%">

        <TR> <TD WIDTH=10></TD>
            <TD WIDTH="552">
             <FONT SIZE="+2"><B>Query ALO Hardware Database</B></FONT>
		<CENTER>Search Results for:<B> <?php echo $Platform ?></B>
			<TABLE BORDER=1 CELLSPACING=3>
			<TR> 
				<TH WIDTH="10%">Card Name</TH>
				<TH WIDTH="10%">Bus Type</TH>
				<TH WIDTH="10%">SRM Revision</TH>
				<TH WIDTH="10%">Works in Linux</TH>
				<TH WIDTH="10%">Works in SRM</TH>
				<TH WIDTH="10%">Reported By</TH>
				<TH WIDTH="5%">Email</TH>
				<TH WIDTH="35%">Notes</TH>
			</TR>
				<?php
					for ($i=0;$i<$num_results;$i++)
						print_results(mysql_fetch_object($results),$alodb);
				?>
				
			
		</TABLE></CENTER>
		<?php
			if ($num_results == 0)
				echo "<P><CENTER><FONT SIZE=\"+2\">Sorry, No information yet on the $Platform product";
		?>
		
	      <!-- Actual document -->
	     
	
              <!-- End of actual document -->

	    </TD>
          </TR>

        </TABLE>
        <P>&nbsp;</P>
      </TD>
      <TD>&nbsp;</TD>

    </TR>
  </TABLE>
</CENTER>
	<?php include("footer.php") ?>











