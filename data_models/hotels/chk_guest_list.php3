<HTML>
<HEAD>
<TITLE>Guest List</TITLE>
</HEAD>

<BODY TEXT="#202020">

<TABLE WIDTH=80%>
<TR>
<TD ALIGN=left VALIGN=top>
<IMG ALT="Database Answers Header" HEIGHT=58 WIDTH=400 SRC="../../images/dba_banner_and_btn_400.jpg">
</TD>
<TD ALIGN=right VALIGN=top>
<IMG ALT="Chateau Laurier Hotel, Ottawa, Canada" SRC="../../images/chateau_laurier_xsml.jpg">
</TD>
</TR>
</TABLE>

<TABLE BGCOLOR="#6699FF" BORDER=0 WIDTH=80%>
<TR>
<TD ALIGN=left COLSPAN=1 VALIGN=TOP WIDTH=40>
<A HREF="../../index.htm"><FONT COLOR=white FACE=Verdana SIZE=1>Home</A>
</TD>
<TD ALIGN=left VALIGN=top WIDTH=100><A HREF="../../ask_a_question.htm"><FONT COLOR=white FACE=Verdana SIZE=1>Ask a Question</A>
</TD><TD ALIGN=left VALIGN=top WIDTH=85>
<A HREF="../../data_models/index.htm"><FONT COLOR=white FACE=Verdana SIZE=1>Data Models</A>
</TD><TD ALIGN=left VALIGN=top WIDTH=50>
<A HREF="../../faqs.htm"><FONT COLOR=white FACE=Verdana SIZE=1>FAQs</A>
</TD><TD ALIGN=left VALIGN=top WIDTH=75>
<A HREF="../../sql_scripts/index.htm"><FONT COLOR=white FACE=Verdana SIZE=1>SQL Scripts</A>
</TD><TD ALIGN=left VALIGN=top WIDTH=50>
<A HREF="../../site_map.htm"><FONT COLOR=white FACE=Verdana SIZE=1>Search</A>
</TD><TD ALIGN=left VALIGN=top WIDTH=62>
<A HREF="../../site_map.htm"><FONT COLOR=white FACE=Verdana SIZE=1>Site Map</A>
</TD>
<TD ALIGN=right VALIGN=top>&nbsp
<FONT COLOR=white face="Verdana" size="1"><SCRIPT</TD>
</TR>

</TABLE>

<FONT COLOR=red FACE="Comic Sans MS" SIZE=4><B>Guest List</B></FONT>

<FONT COLOR=blue FACE=Verdana SIZE=2>
<!-- end Standard Header - Version 3-->

<!-- begin body Text -->
<P>This Page is a simple demo of MySQL and PHP3 to display a Guest List from the GUESTS Table in the barrysdb Database ...
<BR>If you would like the Code and details of how to use it, please <A HREF="mailto:info@databaseanswers.com">Email Me.</A>
<P>
<CENTER>
<TABLE> 
<Table border>
<TR VALIGN="bottom">
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2>Guest Name</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2>Nr.</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2>Guest Address</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2>City</FONT></TD>
<TD ALIGN=middle BGCOLOR=blue><FONT COLOR=white FACE="Verdana" SIZE=2>Country</FONT></TD>
</TR>

<?
 include( 'database.php3');

 mysql_connect($hostname, $username, $password) OR DIE( "Unable to connect to database");
 @mysql_select_db(  "$dbName") or die(  "Unable to select database");

 $query =  "select * from GUESTS ORDER BY GUEST_NAME;";
 $result = MYSQL_QUERY($query);

while ($row = mysql_fetch_array ($result))
{
   print ("<TR>\n");
   print ("<TD BGCOLOR=#6699FF>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[GUEST_NAME]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD ALIGN=middle BGCOLOR=#6699FF>\n");
   print ("<FONT color=white FACE=Verdana SIZE=1><B>\n");
   printf ("%s", $row[GUEST_NUMBER]);     
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD BGCOLOR=#6699FF>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[GUEST_ADDRESS]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD BGCOLOR=#6699FF>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[GUEST_CITY]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");

   print ("<TD ALIGN=right BGCOLOR=#6699FF>\n");
   print ("<FONT color=white FACE=Verdana, Verdana, Helvetica SIZE=1><B>\n");
   printf ("%s", $row[COUNTRY_CODE]);
   print ("</FONT>"); 
   print ("</A>\n");
   print ("</TD>\n");
   print ("</TR>\n");

}

?>

</TABLE>

</CENTER>

<BR>End of Computer-Generated (PHP3/MySQL) Guest List.
<HR>

</BODY>
</HTML>
