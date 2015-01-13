<!-- V0.2 Added EISA as bus choice. -rdp 09/11/00 -->

<!-- V0.1 Written Sept 5th 2000 -rdp -->

<HTML>
<HEAD>
<TITLE>AlphaLinux - Add New Card To The ALOHcl Database</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
</HEAD>

<BODY BGCOLOR="#000000" TEXT="#000000" LINK="#DD0000" ALINK="#CC0000" VLINK="#CC0000">

<?php
	include ("../database.php");
	
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
            
            </B></FONT><P><FONT SIZE="+2"><B>Add A Card To The ALO Hardware Database</B></FONT>
		
		<FORM ACTION=add.php?action=addcard METHOD=POST>
		<CENTER><TABLE CELLSPACING=10>

			<TR><TD>Name (Ex: Adaptec 2940):</TD>
			<TD><input type=text size=30 name=Name></TD></TR>

			<TR><TD ALIGN=RIGHT>Bus Type:</TD>
			<TD><SELECT NAME=Bus_type>
				<OPTION>PCI
				<OPTION>AGP
				<OPTION>ISA
				<OPTION>EISA
				</SELECT></TD></TR>
			<TR><TD COLSPAN=2 ALIGN=CENTER><INPUT TYPE=SUBMIT VALUE="Add Card">	
		</TABLE></CENTER>
		</FORM>
	      <!-- Actual document -->
	     
	
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
	<?php include("footer.php") ?>
</BODY>
</HTML>










