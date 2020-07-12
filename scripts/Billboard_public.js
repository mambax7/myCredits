/***********************************************
* DHTML Billboard script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

document.write('<style type="text/css">\n')
if (document.getElementById)
document.write('.billPublic{display:none;\n'+'filter:progid:DXImageTransform.Microsoft.'+billboardeffects[filterid]+'}\n')
else if (hidecontent_from_legacy)
document.write('#contentPublic{display:none;}')
document.write('</style>\n')

var PublicselectedDiv=0
var PublictotalDivs=0

function Publiccontractboard(){
var inc=0
while (document.getElementById("billboardPublic"+inc)){
document.getElementById("billboardPublic"+inc).style.display="none"
inc++
}
}

function Publicexpandboard(){
var PublicselectedDivObj=document.getElementById("billboardPublic"+PublicselectedDiv)
Publiccontractboard()
if (PublicselectedDivObj.filters){
if (billboardeffects.length>1){
filterid=Math.floor(Math.random()*billboardeffects.length)
PublicselectedDivObj.style.filter="progid:DXImageTransform.Microsoft."+billboardeffects[filterid]
}
PublicselectedDivObj.filters[0].duration=effectduration/1000
PublicselectedDivObj.filters[0].Apply()
}
PublicselectedDivObj.style.display="block"
if (PublicselectedDivObj.filters)
PublicselectedDivObj.filters[0].Play()
PublicselectedDiv=(PublicselectedDiv<PublictotalDivs-1)? PublicselectedDiv+1 : 0
setTimeout("Publicexpandboard()",tickspeed)
}

function Publicstartbill(){
while (document.getElementById("billboardPublic"+PublictotalDivs)!=null)
PublictotalDivs++
if (document.getElementById("billboardPublic0").filters)
tickspeed+=effectduration
Publicexpandboard()
}

if (window.addEventListener)
window.addEventListener("load", Publicstartbill, false)
else if (window.attachEvent)
window.attachEvent("onload", Publicstartbill)
else if (document.getElementById)
window.onload=Publicstartbill