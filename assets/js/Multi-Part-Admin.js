/***********************************************
* Multi-Part Content script- � Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

if (document.getElementById){
    document.write('<style type="text/css">')
    document.write('.myCredits_admin, #form_myCredits_admin{display:none;}')
    document.write('</style>')
}

var curpart_admin=0

function getElementbyClass_myCredits_admin(classname){
    partscollect_admin=new Array()

    var inc=0
    var alltags=document.all? document.all : document.getElementsByTagName("*")
    for (i=0; i<alltags.length; i++){
        if (alltags[i].className==classname)
            partscollect_admin[inc++]=alltags[i]
        }
    }

function cycleforward_myCredits_admin(){
    partscollect_admin[curpart_admin].style.display="none"
    curpart_admin=(curpart_admin<partscollect_admin.length-1)? curpart_admin+1 : 0
    partscollect_admin[curpart_admin].style.display="block"
    updatenav_myCredits_admin()
}

function cycleback_myCredits_admin(){
    partscollect_admin[curpart_admin].style.display="none"
    curpart_admin=(curpart_admin>0)? curpart_admin-1 : partscollect_admin.length-1
    partscollect_admin[curpart_admin].style.display="block"
    updatenav_myCredits_admin()
}


function updatenav_myCredits_admin(){
    document.getElementById("backbutton_myCredits_admin").style.visibility=(curpart_admin==0)? "hidden" : "visible"
    document.getElementById("forwardbutton_myCredits_admin").style.visibility=(curpart_admin==partscollect_admin.length-1)? "hidden" : "visible"
}

function onloadfunct_myCredits_admin(){
    getElementbyClass_myCredits_admin("myCredits_admin")
    partscollect_admin[0].style.display="block"
    document.getElementById("form_myCredits_admin").style.display="block"
    updatenav_myCredits_admin()
}


if (window.addEventListener)
    window.addEventListener("load", onloadfunct_myCredits_admin, false)
else if (window.attachEvent)
    window.attachEvent("onload", onloadfunct_myCredits_admin)
else if (document.getElementById)
    window.onload=onloadfunct_myCredits_admin
