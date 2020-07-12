/***********************************************
* Multi-Part Content script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

if (document.getElementById){
	document.write('<style type="text/css">')
	document.write('.myCredits_public, #form_myCredits_public{display:none;}')
	document.write('</style>')
}

var curpart_public=0

function getElementbyClass_myCredits_public(classname){
	partscollect_public=new Array()

	var inc=0
	var alltags=document.all? document.all : document.getElementsByTagName("*")
	for (i=0; i<alltags.length; i++){
		if (alltags[i].className==classname)
			partscollect_public[inc++]=alltags[i]
		}
	}

function cycleforward_myCredits_public(){
	partscollect_public[curpart_public].style.display="none"
	curpart_public=(curpart_public<partscollect_public.length-1)? curpart_public+1 : 0
	partscollect_public[curpart_public].style.display="block"
	updatenav_myCredits_public()
}

function cycleback_myCredits_public(){
	partscollect_public[curpart_public].style.display="none"
	curpart_public=(curpart_public>0)? curpart_public-1 : partscollect_public.length-1
	partscollect_public[curpart_public].style.display="block"
	updatenav_myCredits_public()
}


function updatenav_myCredits_public(){
	document.getElementById("backbutton_myCredits_public").style.visibility=(curpart_public==0)? "hidden" : "visible"
	document.getElementById("forwardbutton_myCredits_public").style.visibility=(curpart_public==partscollect_public.length-1)? "hidden" : "visible"
}

function onloadfunct_myCredits_public(){
	getElementbyClass_myCredits_public("myCredits_public")
	partscollect_public[0].style.display="block"
	document.getElementById("form_myCredits_public").style.display="block"
	updatenav_myCredits_public()
}


if (window.addEventListener)
	window.addEventListener("load", onloadfunct_myCredits_public, false)
else if (window.attachEvent)
	window.attachEvent("onload", onloadfunct_myCredits_public)
else if (document.getElementById)
	window.onload=onloadfunct_myCredits_public