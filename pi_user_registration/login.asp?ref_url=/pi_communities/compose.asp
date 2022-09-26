
<html>
<head>
	<title>User Login</title>
</head>

<body marginwidth=2 marginheight=2 leftmargin=2 topmargin=2>

<table border=0 cellpadding=0 cellspacing=0 width=100%>
	<tr valign=middle>
	<td><a href="../index.asp"><img src="../images/logo.gif" alt="Database Answers" border=0></a><br><font face="Verdana" size=1 color="blue"><b>&nbsp;&nbsp;You are not logged in</b> | <a href="/pi_user_registration/login.asp">login</a></font></td>
	<td align=right><img src="../images/graphics/bienecke_xsml.jpg"></td>
	</tr>

</table>



<!--- START OF DEC 5th. --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" background="../images/nav_bg.jpg" align="left" valign="middle">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
       	<td width="1%"><img src="../images/spacer.gif" width="15" height="15"></td>
	<td width="6%"><A STYLE="text-decoration:none" HREF="../index.htm"><font COLOR=white FACE=Verdana SIZE=2>Home</font></td>
      	<td width="11%"><A STYLE="text-decoration:none" HREF="../pi_ask_a_question/index.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>
	Ask a Question</font></A></td>
	<td width="10%">
	<A STYLE="text-decoration:none" HREF="../pi_best_practice_display/index.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>Best Practice</font></A> 
	</td>

	<td width="9%">
<!---	<A STYLE="text-decoration:none" HREF="pi_communities/boards.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>Communities</font></A> --->
	<A STYLE="text-decoration:none" HREF="../careers.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Careers</font></A>
	</td>
	<td width="9%"><A STYLE="text-decoration:none" HREF="../contact_us.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Contact Us</font></A>
	</td>
          <td width="10%"><A STYLE="text-decoration:none" HREF="../data_models/index.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Data Models</font></A></td>
          <td width="7%"><A STYLE="text-decoration:none" HREF="../search.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Search</font></td>
          <td WIDTH=20% wiiiidth="37%"><A STYLE="text-decoration:none" HREF="../site_map.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Site Map</font></A></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--- END OF DEC 5th. --->


<table border=0 cellpadding=0 cellspacing=0 width=100%>
	<tr valign=top>
	<td width=90 background="../images/bg_side.gif">
	<table border=0 cellpadding=0 cellspacing=0 width=90>
		<tr><td>
		<table border=0 cellpadding=0 cellspacing=0 width=90>
			<tr>
			<td align=center><img src="../images/graphics/my_life_entity.gif"></td>
			</tr>
		</table>
		</td></tr>
	</table>
	</td>
	<td width=100% bgcolor="#CCCCFF" align=center>
	<table border=0 cellpadding=10 cellspacing=0 width=100%>
	<tr>
	<td>
	<!-- Body Starts -->
	
	<!-- Sample Section Starts -->
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
		<tr>
		<td align=right><font face="Verdana, Tahoma, sans-serif" size=2><b>User Login</b>&nbsp;&nbsp;</font></td>
		<td width=2 bgcolor="#FF9900"><img src="../images/shim.gif" width=2 height=4></td>
		</tr>
		<tr>
		<td colspan=2 bgcolor="#FF9900"><img src="../images/shim.gif" width=20 height=2></td>
		</tr>
	</table>
	<table border=0 cellpadding=0 cellspacing=0 width=100%>
		<tr>
		<td width=2 bgcolor="#FF9900"><img src="../images/shim.gif" width=2 height=4></td>
		<td width=2><img src="../images/shim.gif" width=2 height=4></td>
		<td><font face="Verdana, Tahoma, sans-serif" size=2>
		Please use your username and password to login to the site. If you are not a member you can easily <a href="register.asp">become a member</a>.
		</font></td>
		</tr>
	</table>
	<!-- Sample Section Ends -->
	
	<p>
	
<HR><FONT COLOR=blue FACE=Verdana SIZE=2>


<FORM ACTION="login.asp" method="POST">

<!--- <B>SECTION A : Basic Registration details ...</B> --->

<B>1. Your Login name (e.g. johnd):</B> <INPUT TYPE="TEXT" NAME="login" MAXLENGTH=50>

<p>
<FONT SIZE=2><B>2. Password ?</B> <INPUT TYPE="password" NAME="password" MAXLENGTH="50">

<p>
<font size=2><b>3. Your language:</b> 
<select name="language">

<option value="English"> English
<option value="Spanish"> Spanish
<option value="German"> German
<option value="French"> French
<option value="Dutch"> Dutch
<option value="Portuguese"> Portuguese
<option value="Bulgarian"> Bulgarian
<option value="Chinese"> Chinese
<option value="Croatian"> Croatian
<option value="Czech"> Czech
<option value="Danish"> Danish
<option value="Estonian"> Estonian
<option value="Greek"> Greek
<option value="Hungarian"> Hungarian
<option value="Hebrew"> Hebrew
<option value="Italian"> Italian
<option value="Japanese"> Japanese
<option value="Korean"> Korean
<option value="Latvian"> Latvian
<option value="Lithuanian"> Lithuanian
<option value="Norwegian"> Norwegian
<option value="Polish"> Polish
<option value="Romanian"> Romanian
<option value="Russian"> Russian
<option value="Slovak"> Slovak
<option value="Slovenian"> Slovenian
<option value="Swedish"> Swedish
<option value="Turkish"> Turkish
</select>
</font>
<p align=center>

<input type="hidden" name="ref_url" value="/pi_communities/compose.asp">

<INPUT TYPE="SUBMIT" NAME="Submit" VALUE="Submit">
<input type="hidden" name="action" value="login">

</FORM>


<HR>

	
	<!-- Body Ends -->	
	</td>
	</tr>
	</table>
	</td>
	</tr>
</table>


<!--- START OF DEC 5th. --->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" background="../images/nav_bg.jpg" align="left" valign="middle">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
       	<td width="1%"><img src="../images/spacer.gif" width="15" height="15"></td>
	<td width="6%"><A STYLE="text-decoration:none" HREF="../index.htm"><font COLOR=white FACE=Verdana SIZE=2>Home</font></td>
      	<td width="11%"><A STYLE="text-decoration:none" HREF="../pi_ask_a_question/index.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>
	Ask a Question</font></A></td>
	<td width="10%">
	<A STYLE="text-decoration:none" HREF="../pi_best_practice_display/index.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>Best Practice</font></A> 
	</td>

	<td width="9%">
<!---	<A STYLE="text-decoration:none" HREF="pi_communities/boards.asp"><font color="#FFFFFF" FACE=Verdana SIZE=2>Communities</font></A> --->
	<A STYLE="text-decoration:none" HREF="../careers.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Careers</font></A>
	</td>
	<td width="9%"><A STYLE="text-decoration:none" HREF="../contact_us.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Contact Us</font></A>
	</td>
          <td width="10%"><A STYLE="text-decoration:none" HREF="../data_models/index.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Data Models</font></A></td>
          <td width="7%"><A STYLE="text-decoration:none" HREF="../search.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Search</font></td>
          <td WIDTH=20% wiiiidth="37%"><A STYLE="text-decoration:none" HREF="../site_map.htm"><font color="#FFFFFF" FACE=Verdana SIZE=2>Site Map</font></A></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!--- END OF DEC 5th. --->


</body>
</html>