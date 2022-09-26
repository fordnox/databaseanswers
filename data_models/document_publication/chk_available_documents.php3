<HTML><HEAD><TITLE>Document Publication</TITLE>
</HEAD>

<BODY TEXT="#202020">

<TABLE BGCOLOR=blue WIDTH=90%>
<TR>
<TD ALIGN=left VALIGN=top>
<IMG ALT="Database Answers Header" HEIGHT=67 WIDTH=417 SRC="../../images/ivans_dba_logo_alt.jpg">
</TD>
<TD ALIGN=right ROWSPAN=2 VALIGN=top>
<IMG ALT="Pier at Cannes" HEIGHT=88 WIDTH=188 SRC="../../images/philg/cannespier_xsml.jpg">
</TD>
</TR>
</TABLE>

<FONT COLOR=blue FACE=Verdana SIZE=2>
<!-- end Standard Header - Version 3-->

<TABLE BGCOLOR="#0000FF" WIDTH=90%>
<TR>
<TD ALIGN=left COLSPAN=1 VALIGN=TOP WIDTH=63>
<A HREF="../../index.htm"><IMG ALT="Home" BORDER=0 SRC="../../images/buttons/button_studio/home.gif"></A>
</TD>
<TD ALIGN=left VALIGN=top WIDTH=120>
<A HREF="../../ask_a_question_rbw.php3">
<IMG ALT="Ask a Question" BORDER=0 SRC="../../images/buttons/button_studio/ask_a_question.gif"></A>
</TD>
<TD ALIGN=left VALIGN=top WIDTH=85>
<A HREF="../../data_models/index.htm">
<IMG ALT="Data Models" BORDER=0 SRC="../../images/buttons/button_studio/data_models_on.gif"></A>
</TD><TD ALIGN=left VALIGN=top WIDTH=72>
<A HREF="../../faqs.htm"><IMG ALT="FAQs" BORDER=0 SRC="../../images/buttons/button_studio/faqs.gif"></A>
</TD>
<TD ALIGN=left VALIGN=top WIDTH=74>
<A HREF="../../search.htm"><IMG ALT="Search" BORDER=0 SRC="../../images/buttons/button_studio/search.gif"></A>
</TD><TD ALIGN=left VALIGN=top WIiDTH=62>
<A HREF="../../site_map.htm"><IMG ALT="Site Map" BORDER=0 SRC="../../images/buttons/button_studio/site_map.gif"></A></TD>
<TD ALIGN=right VALIGN=top><FONT COLOR=white face="Verdana" size="1">&nbsp</TD>
</TR>

</TABLE>



<FONT COLOR=blue FACE=Verdana SIZE=2>

<TABLE BGCOLOR="#98CEFD" BORDER=0 WIDTH=90%>
<!---
<TR>
<TD ALIGN=middle BGCOLOuuuR="white" COLSPAN=3 VALIGN=top>
<FONT COLOR=white FACE=Verdana SIZE=2>&nbsp</TD>
</TR>
--->

<TR>
<TD ALIGN=middle BGCOLOR="6699FF" COLSPAN=3 VALIGN=top>
<FONT COLOR=white FACE=Verdana SIZE=2>
<B>This is a list of the Documents available in the 'documents' Table in the Database</B>
</TD>
</TR>




<TR><TD>

<CENTER>
<TABLE> 
<TABLE BORDER=1 CELLPADDING=3 CELLSPACING=3>
<TR VALIGN="top">
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2><B>Type</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2><B>Document Code</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2><B>Title</FONT></TD>
</TR>

<!---   printf ("%s", $row[question_date]); --->

<?
 include( 'database.php3');

 mysql_connect($hostname, $username, $password) OR DIE( "Unable to connect to database");
 @mysql_select_db(  "$dbName") or die(  "Unable to select database");

 $query =  "SELECT document_type_code,document_code,document_title FROM documents ORDER BY document_type_code,document_code;";
 $result = MYSQL_QUERY($query);

while ($row = mysql_fetch_array ($result))
{
   print ("<TR VALIGN=top >\n");

   print ("<TD BGCOLOR=#004098>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[document_type_code]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD BGCOLOR=blue>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[document_code]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD ALIGN=left BGCOLOR=blue>\n");
   print ("<FONT color=white FACE=Verdana SIZE=1><B>\n");
   printf ("%s", $row[document_title]);     
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("</TR>\n");
}

?>

</TABLE>
</TD></TR>
</TABLE>

</CENTER>

<BR>End of Computer-Generated (PHP3/MySQL) List of Documents in barrysdb.
<!---
   print ("<TR VALIGN=top >\n");

   print ("<TD ALIGN=left BGCOLOR=blue COLSPAN=6>\n");
   print ("<FONT color=white FACE=Verdana SIZE=1><B>\n");
   printf ("%s", $row[comments]);     
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("</TR>\n");
--->


<HR>

</BODY>
</HTML>
