<{include file="db:mycredits_header.tpl"}>

<script type="text/javascript" src="<{$xoops_url}>/modules/mycredits/assets/js/tipster.js"></script>
<script type="text/javascript"><!--
var myCreditsTips = new TipObj('myCreditsTips');
with (myCreditsTips) {
template = '<div class="myCreditsClass" style="width:%2%px"><span>%3%</span></div>';

<{assign var="index" value=0}>
<{foreach item=credit from=$credits}>
tips.myCredits<{$index}> =  new Array(5, 5, 500, '<{$credit.dhtml_content}>');
<{assign var="index" value=$index+1}>
<{/foreach}>


showDelay = 0;
hideDelay = 0;
doFades = false;
//minAlpha = 0;
//maxAlpha = 100;
//fadeInSpeed = 20;
//fadeOutSpeed = 20;
//tipStick = 0.2;
//IESelectBoxFix = true;
}
-->
</script>
<div id="myCreditsTipsLayer" style="position: absolute; z-index: 10000; visibility: hidden; left: 0px; top: 0px; width: 10px">&nbsp;</div>

<{assign var="index" value=0}>
<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">
    <{if $show == 0}>
        <ul>
    <{/if}>
<{/if}>

<{assign var=content value=1}>
<{foreach name=item item=credit from=$credits}>
    <{if $credit.hasmain AND $content AND $credit.weight }>
        <{if $admin_display}>
            <{if $show == 0}>
                </ul>
            <{/if}>
            </div> <!-- Admintable -->
        <{/if}>
        <{if $content}>
            <{include file="db:mycredits_collaps_public.tpl"}>
            <div id='publictable'>
            <{if $show == 0}>
                <ul>
            <{/if}>
        <{/if}>
        <{assign var=content value=0}>
    <{/if}>

    <{if $show == 0}>
        <li>
    <{else}>
        <div style="text-align:center">
    <{/if}>

       <{if $credit.hasmain && $credit.weight }>
        <{if $tips}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/" onmouseover="myCreditsTips.show('myCredits<{$index}>')" onmouseout="myCreditsTips.hide()">
        <{else}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/">
        <{/if}>
    <{else}>
        <{if $tips}>
            <span style="cursor: help;" onMouseOver="myCreditsTips.show('myCredits<{$index}>')"; onMouseOut="myCreditsTips.hide()">
        <{else}>
            <span>
        <{/if}>
    <{/if}>
    <{if $show == 1 || $show == 2}>
        <img src="<{$xoops_url}>/<{$credit.image}>">
        <br>
        <{if $show == 1}>
            <br>
        <{/if}>
    <{/if}>

    <{if $show == 3}>
        <img src="<{$xoops_url}>/<{$credit.logo}>" vspace="2">
        <br>
    <{/if}>

    <{if $show == 0 || $show == 2}>
        <{$credit.name}>
        <{if $credit.version_display}>
               <{$credit.version}>
        <{/if}>
        <br>
        <{if $show == 2}>
            <br>
        <{/if}>
    <{/if}>

       <{if $credit.hasmain && $credit.weight }>
        </a>
    <{else}>
        </span>
    <{/if}>

    <{if $show == 0}>
        </li>
    <{else}>
        </div>
    <{/if}>

    <{assign var="index" value=$index+1}>
    <{if $smarty.foreach.item.last}>
        <{if $show == 0}>
            </ul>
        <{/if}>
        </div> <!-- publictable -->
    <{/if}>
<{/foreach}>
</ul>

<{include file="db:mycredits_footer.tpl"}>
