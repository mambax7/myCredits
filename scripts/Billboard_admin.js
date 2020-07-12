/***********************************************
* DHTML Billboard script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

document.write('<style type="text/css">\n')
if (document.getElementById)
document.write('.billAdmin{display:none;\n'+'filter:progid:DXImageTransform.Microsoft.'+billboardeffects[filterid]+'}\n')
else if (hidecontent_from_legacy)
document.write('#contentAdmin{display:none;}')
document.write('</style>\n')

var AdminselectedDiv=0
var AdmintotalDivs=0

function Admincontractboard(){
var inc=0
while (document.getElementById("billboardAdmin"+inc)){
document.getElementById("billboardAdmin"+inc).style.display="none"
inc++
}
}

function Adminexpandboard(){
var AdminselectedDivObj=document.getElementById("billboardAdmin"+AdminselectedDiv)
Admincontractboard()
if (AdminselectedDivObj.filters){
if (billboardeffects.length>1){
filterid=Math.floor(Math.random()*billboardeffects.length)
AdminselectedDivObj.style.filter="progid:DXImageTransform.Microsoft."+billboardeffects[filterid]
}
AdminselectedDivObj.filters[0].duration=effectduration/1000
AdminselectedDivObj.filters[0].Apply()
}
AdminselectedDivObj.style.display="block"
if (AdminselectedDivObj.filters)
AdminselectedDivObj.filters[0].Play()
AdminselectedDiv=(AdminselectedDiv<AdmintotalDivs-1)? AdminselectedDiv+1 : 0
setTimeout("Adminexpandboard()",tickspeed)
}

function Adminstartbill(){
while (document.getElementById("billboardAdmin"+AdmintotalDivs)!=null)
AdmintotalDivs++
if (document.getElementById("billboardAdmin0").filters)
tickspeed+=effectduration
Adminexpandboard()
}

if (window.addEventListener)
window.addEventListener("load", Adminstartbill, false)
else if (window.attachEvent)
window.attachEvent("onload", Adminstartbill)
else if (document.getElementById)
window.onload=Adminstartbill
