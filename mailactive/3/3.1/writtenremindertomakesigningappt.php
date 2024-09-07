 <?php
 $doc_body ="
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:\"MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;
	mso-font-alt:\"\FF2D\FF33 \660E\671D\";
	mso-font-charset:128;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:-536870145 1791491579 18 0 131231 0;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1107305727 0 0 415 0;}
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073743103 0 0 415 0;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
@font-face
	{font-family:\"Menlo Regular\";
	mso-font-alt:\"Times New Roman\";
	mso-font-charset:0;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-436198657 -771687941 33554472 0 479 0;}
@font-face
	{font-family:\"Palatino Linotype\";
	panose-1:2 4 5 2 5 5 5 3 3 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870265 1073741843 0 0 415 0;}
@font-face
	{font-family:\"@MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;
	mso-font-charset:128;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:-536870145 1791491579 18 0 131231 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Cambria\",serif;
	mso-ascii-font-family:Cambria;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:\"MS Mincho\";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Cambria;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-link:\"Header Char\";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Times New Roman\",serif;
	mso-fareast-font-family:\"Times New Roman\";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:\"Footer Char\";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 3.25in right 6.5in;
	font-size:12.0pt;
	font-family:\"Cambria\",serif;
	mso-ascii-font-family:Cambria;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:\"MS Mincho\";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Cambria;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:blue;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:purple;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
span.HeaderChar
	{mso-style-name:\"Header Char\";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Header;
	font-family:\"Times New Roman\",serif;
	mso-ascii-font-family:\"Times New Roman\";
	mso-fareast-font-family:\"Times New Roman\";
	mso-hansi-font-family:\"Times New Roman\";
	mso-bidi-font-family:\"Times New Roman\";}
span.FooterChar
	{mso-style-name:\"Footer Char\";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Footer;}
span.SpellE
	{mso-style-name:\"\";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:\"\";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:12.0pt;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:\"Cambria\",serif;
	mso-ascii-font-family:Cambria;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:\"MS Mincho\";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Cambria;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:\"Times New Roman\";
	mso-bidi-theme-font:minor-bidi;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url(\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/header.htm\") fs;
	mso-footnote-continuation-separator:url(\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/header.htm\") fcs;
	mso-endnote-separator:url(\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/header.htm\") es;
	mso-endnote-continuation-separator:url(\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/header.htm\") ecs;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;
	mso-footer:url(\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/header.htm\") f1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:\"Table Normal\";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:\"\";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:\"Cambria\",serif;
	mso-ascii-font-family:Cambria;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Cambria;
	mso-hansi-theme-font:minor-latin;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext=\"edit\" spidmax=\"2052\"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext=\"edit\">
  <o:idmap v:ext=\"edit\" data=\"1\"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US link=blue vlink=purple style='tab-interval:.5in'>

<div class=WordSection1>

<p class=MsoHeader align=center style='text-align:center'><span
style='mso-no-proof:yes'><!--[if gte vml 1]><v:shapetype id=\"_x0000_t75\"
 coordsize=\"21600,21600\" o:spt=\"75\" o:preferrelative=\"t\" path=\"m@4@5l@4@11@9@11@9@5xe\"
 filled=\"f\" stroked=\"f\">
 <v:stroke joinstyle=\"miter\"/>
 <v:formulas>
  <v:f eqn=\"if lineDrawn pixelLineWidth 0\"/>
  <v:f eqn=\"sum @0 1 0\"/>
  <v:f eqn=\"sum 0 0 @1\"/>
  <v:f eqn=\"prod @2 1 2\"/>
  <v:f eqn=\"prod @3 21600 pixelWidth\"/>
  <v:f eqn=\"prod @3 21600 pixelHeight\"/>
  <v:f eqn=\"sum @0 0 1\"/>
  <v:f eqn=\"prod @6 1 2\"/>
  <v:f eqn=\"prod @7 21600 pixelWidth\"/>
  <v:f eqn=\"sum @8 21600 0\"/>
  <v:f eqn=\"prod @7 21600 pixelHeight\"/>
  <v:f eqn=\"sum @10 21600 0\"/>
 </v:formulas>
 <v:path o:extrusionok=\"f\" gradientshapeok=\"t\" o:connecttype=\"rect\"/>
 <o:lock v:ext=\"edit\" aspectratio=\"t\"/>
</v:shapetype><v:shape id=\"Picture_x0020_4\" o:spid=\"_x0000_i1027\" type=\"#_x0000_t75\"
 style='width:333pt;height:65.25pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src=\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/image001.jpg\"
  o:title=\"\"/>
</v:shape><![endif]-->
 
 
 
 <![if !vml]><img width=444 height=87
src='image002.jpg'
v:shapes='Picture_x0020_4'><![endif]></span><b style='mso-bidi-font-weight:
normal'><span style='font-size:6.0pt'><o:p></o:p></span></b></p>
<p class=MsoHeader align=center style='text-align:center'><span
style='font-size:9.5pt;color:#595959'>Principal Office: 250 W. First Street
Suite 244<o:p></o:p></span></p>
<p class=MsoHeader align=center style='text-align:center'><span
style='font-size:9.5pt;color:#595959'>Claremont, California 91711<o:p></o:p></span></p>

<p class=MsoHeader align=center style='text-align:center'><span
style='font-size:9.5pt;color:#595959'>TEL: (800) 587-3162 -- FAX: (877)
795-9845<o:p></o:p></span></p>

<div style='mso-element:para-border-div;border:none;border-bottom:solid windowtext 1.5pt;
padding:0in 0in 1.0pt 0in'>

<p class=MsoNormal align=center style='margin-top:3.0pt;margin-right:0in;
margin-bottom:12.0pt;margin-left:0in;text-align:center;border:none;mso-border-bottom-alt:
solid windowtext 1.5pt;padding:0in;mso-padding-alt:0in 0in 1.0pt 0in'><span
style='font-size:9.5pt;color:#595959'>E-Mail:<span style='mso-spacerun:yes'> 
</span><i style='mso-bidi-font-style:normal'>cs@scarcellaw.com</i></span></p>

</div>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-family:\"Garamond\",serif'>Date: </span></b><span style='font-family:
\"Garamond\",serif'>&lt;<i style='mso-bidi-font-style:normal'>today’s date&gt;</i><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'>Dear &lt;<i
style='mso-bidi-font-style:normal'>client’s name&gt;</i><o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal style='text-indent:.5in;line-height:150%'><span
style='font-family:\"Garamond\",serif'>As per your request, we have created an
estate plan for you.<span style='mso-spacerun:yes'>  </span>The Living Trust
that we have created will allow your estate to pass to your loved ones without
being subject to the probate process.<span style='mso-spacerun:yes'> 
</span>Your family will be very grateful; probate administration takes two
years on average and can cost families tens of thousands of dollars.<o:p></o:p></span></p>

<p class=MsoNormal style='text-indent:.5in;line-height:150%'><span
style='font-family:\"Garamond\",serif'>However, your Trust is <b
style='mso-bidi-font-weight:normal'>NOT</b> effective until it is signed by
yourself, then notarized <span class=GramE>and</span> formally witnessed.<span
style='mso-spacerun:yes'>  </span>We have sent you a copy of the summary of the
estate plan that we wish to implement for your family, and now we kindly ask
that you call our office at (800) 587-3162 to put it into effect.<o:p></o:p></span></p>

<p class=MsoNormal style='text-indent:.5in;line-height:150%'><span
style='font-family:\"Garamond\",serif'>At our appointment, we will review the
document with you, answer any of your questions, and formalize your estate plan.<span
style='mso-spacerun:yes'>  </span>At this point, it will be effective for its
particular purpose. <o:p></o:p></span></p>

<p class=MsoNormal style='text-indent:.5in;line-height:150%'><span
style='font-family:\"Garamond\",serif'>We wish to take care of this very important
matter as soon as possible and have made several phone calls to you with no
avail.<span style='mso-spacerun:yes'>  </span>Please call our office at your
earliest convenience.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'>Thank you and we
will look forward to seeing you soon,<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif;mso-no-proof:yes'><!--[if gte vml 1]><v:shape
 id=\"Picture_x0020_1\" o:spid=\"_x0000_i1026\" type=\"#_x0000_t75\" style='width:84pt;
 height:37.5pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src=\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/image003.png\"
  o:title=\"\"/>
</v:shape><![endif]--><![if !vml]><img width=112 height=50
src=\"3.1%201st%20Written%20Reminder%20to%20Make%20Signing%20Appointment_files/image004.png\"
v:shapes=\"Picture_x0020_1\"><![endif]></span><span style='font-family:\"Garamond\",serif'><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'>Chris <span
class=SpellE>Scarcella</span>,<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-family:\"Garamond\",serif'>Attorney At Law<o:p></o:p></span></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

</div>

</body>
 ";
          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=sampleword.doc");     
          echo "<html>";
          echo "$doc_body";
          echo "</html>";       
?> 