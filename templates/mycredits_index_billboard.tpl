<{include file="db:mycredits_header.tpl"}>
<style type="text/css">
#contentAdmin{
height: 300px;
}

.billAdmin{
width: 100%;
display:block;

#contentPublic{
height: 300px;
}

.billPublic{
width: 100%;
display:block;
}

</style>

<script type="text/javascript">
//List of transitional effects to be randomly applied to billboard:
var billboardeffects=["GradientWipe(GradientSize=1.0 Duration=0.7)", "Inset", "Iris", "Pixelate(MaxSquare=5 enabled=false)", "RadialWipe", "RandomBars", "Slide(slideStyle='push')", "Spiral", "Stretch", "Strips", "Wheel", "ZigZag"]

//var billboardeffects=["Iris"] //Uncomment this line and input one of the effects above (ie: "Iris") for single effect.

var tickspeed=3000 //ticker speed in miliseconds (2000=2 seconds)
var effectduration=500 //Transitional effect duration in miliseconds
var hidecontent_from_legacy=1 //Should content be hidden in legacy browsers- IE4/NS4 (0=no, 1=yes).

var filterid=Math.floor(Math.random()*billboardeffects.length)
</script>
<script src="<{$xoops_url}>/modules/mycredits/assets/js/Billboard_admin.js" type="text/javascript"><!--//--></script>
<script src="<{$xoops_url}>/modules/mycredits/assets/js/Billboard_public.js" type="text/javascript"><!--//--></script>

<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">
    <div id="contentAdmin">
<{/if}>

<{assign var=indexAdmin value=0}>
<{assign var=indexPublic value=0}>
<{assign var=content value=1}>
<{foreach name=item item=credit from=$credits}>
    <{if $credit.hasmain AND $content AND $credit.weight }>
        <{if $admin_display}>
            </div></div> <!-- Admintable -->
        <{/if}>
        <{include file="db:mycredits_collaps_public.tpl"}>
        <div id='publictable'>
        <div id="contentPublic">
        <div id="billboardPublic<{$indexPublic}>" class="billPublic">
        <{assign var=content value=0}>
        <{assign var="indexPublic" value=$indexPublic+1}>
    <{elseif $credit.hasmain AND !$content AND $credit.weight }>
        <div id="billboardPublic<{$indexPublic}>" class="billPublic">
        <{assign var="indexPublic" value=$indexPublic+1}>
    <{else}>
        <div id="billboardAdmin<{$adminObject}>" class="billAdmin">
        <{assign var="indexAdmin" value=$adminObject+1}>
    <{/if}>

    <div class="item"> <!-- item -->
    <{include file="db:mycredits_block_item.tpl"}>
    </div> <!-- item -->
    </div> <!-- billboard -->

    <{if $smarty.foreach.item.last}>
        </div></div> <!-- publictable -->
    <{/if}>
<{/foreach}>

<{include file="db:mycredits_footer.tpl"}>
