<{include file="db:mycredits_header.tpl"}>

<style type="text/css">
#pscrollerAdmin{
    height: <{if $height != 0}><{$height}><{else}>200<{/if}>px;
}

#pscrollerPublic{
    height: <{if $height != 0}><{$height}><{else}>200<{/if}>px;
}
</style>

<script type="text/javascript">
var Admincontent=new Array();
var Publiccontent=new Array();
<{assign var="Publicindex" value=0}>
<{assign var="Adminindex" value=0}>
<{foreach item=credit from=$credits}>
<{if $credit.hasmain && $credit.weight }>
Publiccontent[<{$Publicindex}>]='<{$credit.dhtml_content}>';
<{assign var="Publicindex" value=$Publicindex+1}>
<{else}>
Admincontent[<{$Adminindex}>]='<{$credit.dhtml_content}>';
<{assign var="Adminindex" value=$Adminindex+1}>
<{/if}>
<{/foreach}>
</script>

<script type='text/javascript' src='<{$xoops_url}>/modules/mycredits/assets/js/Pausing-up-down-scroller.js'></script>

<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">
    <script type="text/javascript">
    new pausescroller(Admincontent, "pscrollerAdmin", "pscrollerAdminclass", <{$delay}>)
    </script>
    </div>
<{/if}>

<{include file="db:mycredits_collaps_public.tpl"}>
<div id='publictable'>
<script type="text/javascript">
new pausescroller(Publiccontent, "pscrollerPublic", "pscrollerPublicclass", <{$delay}>)
</script>
</div>

<{include file="db:mycredits_footer.tpl"}>
