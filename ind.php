<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function CallFunction() {
ifPushkar.style.visibility = 'visible';
}
</script>

<html>
<title>
Red's Fountain
</title>
<head>

</head>
<body bgcolor="white">
<table>
	<tr>
		<td>
		<img src="Title-ReDFountain.png">
		</td>
		<td>
		you can't see me
		</td>
		<td>
			<table cellpadding="10">
				<tr>
				<a href="SmithaMShankar" onmouseover="MM_swapImage('smitha','','Smitha-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Smitha.png" name="smitha" id="smitha" /></a>
				</tr>
				<tr>
				<a href="" id="pushkar-a" onClick="clicked='true'" onmouseover="MM_swapImage('pushkar','','Pushkar-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Pushkar.png" name="pushkar" id="pushkar" /></a>
				<script type="text/javascript"><!-- 
				  if (clicked == "true")
					document.writeln("\<!--");
				//-->
				</script>				
					<table id="ifPushkar" cellpadding="3">
						<tr>
						<td>
						<a href="PushkarB" onmouseover="MM_swapImage('pushkar-prof','','Professional-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Professional.png" name="pushkar-prof" id="pushkar-prof" /></a>
						</td>
						<td>
						<a href="PushkarB" onmouseover="MM_swapImage('pushkar-other','','Other-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Other.png" name="pushkar-other" id="pushkar-other" /></a>
						</td>
						</tr>
					</table>
				<script type="text/javascript"><!-- 
				   if (clicked == "true")
					 document.writeln("--\>");
				//-->
				</script>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>


</html>