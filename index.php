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
function showUpFunction(who) {
if(who == 'smitha')
{
	smithaPro.style.visibility='visible';
	smithaOther.style.visibility='visible';
}
if(who == 'pushkar')
{
	pushkarPro.style.visibility='visible';
	pushkarOther.style.visibility='visible';
}
}
var clicked='false';
</script>

<html>
<title>
ReD's Fountain
</title>
<head>
<link rel="stylesheet" type="css" href="mycss.css">
</head>
<body bgcolor="black">
<div>
<script type="javascript">
var homeLink="http://fountainred.azurewebsites.net/"
/*
var smithaProLink=document.getElementById('smithaPro');
var smithaOtherLink=document.getElementById('smithaOther');

smithaProLink.href=homeLink+"SmithaMShankar";
*/
</script>
	<div class="titlePicture">
		<img src="Title-ReDFountain.png">
	</div>
	<div class="ourTiles1">
		<div class="fade-in">
			<a class="ourTiles2" onClick="showUpFunction('smitha');" onmouseover="MM_swapImage('smitha','','Smitha-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Smitha.png" name="smitha" id="smitha" /></a>
			<div class="popTilesHorizontlal fade-in-target">
				<a id="smithaPro" href=homeLink+"'SmithaMShankar'" onmouseover="MM_swapImage('smitha-prof','','SProfessional-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="SProfessional.png" name="smitha-prof" id="smitha-prof" /></a>
			</div>
			<div class="popTilesHorizontlal fade-in-target">
				<a id="smithaOther" href="http://fountainred.azurewebsites.net/SmithaMShankar" onmouseover="MM_swapImage('smitha-other','','SOther-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="SOther.png" name="smitha-other" id="smitha-other" /></a>
			</div>
		</div>
		<div class="fade-in">
			<div class="popTilesHorizontlal fade-in-target" >
				<a id="pushkarPro" href="http://fountainred.azurewebsites.net/PushkarB" onmouseover="MM_swapImage('pushkar-prof','','SProfessional-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="SProfessional.png" name="pushkar-prof" id="pushkar-prof" /></a>
			</div>
			<div class="popTilesHorizontlal fade-in-target" >
				<a id="pushkarOther" onmouseover="MM_swapImage('pushkar-other','','SOther-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="SOther.png" name="pushkar-other" id="pushkar-other" /></a>
			</div>
			<a class="ourTiles2" onClick="showUpFunction('pushkar');" onmouseover="MM_swapImage('pushkar','','Pushkar-Hover.png',1)" onmouseout="MM_swapImgRestore()"><img src="Pushkar.png" name="pushkar" id="pushkar" /></a>							
		</div>
	</div>
</div>
</body>
</html>
