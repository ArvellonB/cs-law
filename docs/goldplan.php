 <?php
session_start();
if($_SESSION['spousename1'] != '')
{
	$nametwo = " and ".$_SESSION['spousename1'].",";
	$dear = " and ".$_SESSION['spousename1']."";
}
else
{
	$nametwo = ",";
}
 require __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
		<div>
			<div>
				<p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt">
					<span style="height:0pt; display:block; position:absolute; z-index:-65539"><img src="https://myfiles.space/13361_f4623bd5824fbbbf/1535925139_3.3-gold-plan/1535925139_3.3-gold-plan.001.jpg" width="864" height="326" alt="" style="margin-top:145.61pt; margin-left:36.08pt; position:absolute" ></span><span style="font-family:Cambria">&#xa0;</span>
				</p>
			</div>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:28pt">
				<img src="https://myfiles.space/13361_f4623bd5824fbbbf/1535925139_3.3-gold-plan/1535925139_3.3-gold-plan.002.png" width="180" height="132" alt="" style="margin-right:9pt; margin-left:9pt; float:right" ><strong><span style="font-family:Garamond; color:#ffc918"> </span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:144pt; margin-bottom:0pt; text-indent:36pt; text-align:center; font-size:30pt">
				<strong><span style="font-family:Garamond; color:#ba9449">Care &amp; Advocacy Plan (</span></strong><strong><em><span style="font-family:Garamond; color:#ba9449">Gold</span></em></strong><strong><span style="font-family:Garamond; color:#ba9449">)</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<em><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></em>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; text-indent:36pt; text-align:center; font-size:18pt">
				<em><span style="font-family:Garamond; color:#ba9449">Membership Services Authorized to:</span></em>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<em><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></em>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:20pt">
				<span style="font-family:Garamond; color:#ba9449">_____________________________________</span>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:54pt; margin-bottom:0pt; text-indent:18pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; font-size:12pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<ul type="disc" style="margin:0pt; padding-left:0pt">
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Family Protection Analysis</span></u></strong><strong><span style="font-family:Garamond; "> for your friends and family (a $450 value)</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Referral discount</span></u></strong><strong><span style="font-family:Garamond; "> so your friends and family will received 25% off their estate plans</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Support &amp; Guidance Meeting</span></u></strong><strong><span style="font-family:Garamond; "> for your spouse or successor trustee to settle your estate correctly</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Free Monthly Newsletter</span></u></strong><strong><span style="font-family:Garamond; "> to keep you informed about anything that might affect your plan</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Unlimited Phone Calls and Emails</span></u></strong><strong><span style="font-family:Garamond; "> to discuss your estate plan</span></strong>
				</li>
			</ul>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<ul type="disc" style="margin:0pt; padding-left:0pt">
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Free Notary Services</span></u></strong><strong><span style="font-family:Garamond; "> for any document</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Free Amendments</span></u></strong><strong><span style="font-family:Garamond; "> or changes to your estate plan</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">Peace of Mind Meeting</span></u></strong><strong><span style="font-family:Garamond; "> </span></strong><strong><em><span style="font-family:Garamond; ">at any time</span></em></strong><strong><span style="font-family:Garamond; "> to review your estate plan</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><span style="font-family:Garamond; ">&#xa0;</span></strong><strong><u><span style="font-family:Garamond; ">Guided Legacy Meeting</span></u></strong><strong><span style="font-family:Garamond; "> annually to pass your values to the next generation</span></strong>
				</li>
				<li style="margin-left:29.44pt; text-align:center; padding-left:6.56pt; font-family:serif; font-size:14pt; color:#ba9449">
					<strong><u><span style="font-family:Garamond; ">If enrolled at time of passing, </span></u></strong><strong><span style="font-family:Garamond; ">66</span></strong><strong><span style="font-family:Garamond; ">% discount for attorney-assisted Trust Administration</span></strong>
				</li>
			</ul>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; font-size:14pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt">
				<em><span style="font-family:Garamond; color:#ba9449">From _____________________________________ until _________________________________</span></em><span style="font-family:Garamond; color:#ba9449">,</span><em><span style="font-family:Garamond; color:#ba9449"> unless renewed</span></em>
			</p>
			<p style="margin-top:0pt; margin-left:36pt; margin-bottom:0pt; text-align:center; font-size:28pt">
				<strong><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></strong>
			</p>
			<p style="margin-top:0pt; margin-bottom:12pt; text-align:center; font-size:12pt">
				<em><span style="font-family:Garamond; color:#ba9449">&#xa0;</span></em>
			</p>
			<div>
				<p style="margin-top:0pt; margin-right:18pt; margin-bottom:0pt; font-size:12pt">
					<span style="font-family:Cambria">&#xa0;</span>
				</p>
				<p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:14pt">
					<strong><u><span style="font-family:Garamond; color:#ba9449">Benefits Continued (Over)</span></u></strong>
				</p>
				<p style="margin-top:0pt; margin-right:18pt; margin-bottom:0pt; font-size:12pt">
					<span style="font-family:Cambria">&#xa0;</span>
				</p>
			</div>
		</div>
	');
$mpdf->Output();
?> 