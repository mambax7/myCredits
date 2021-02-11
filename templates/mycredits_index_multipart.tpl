<{include file="db:mycredits_header.tpl"}>

<{if $height}>
<style type="text/css">
.myCredits_admin  {
    height:<{$height}>px;
}

.myCredits_public {
    height:<{$height}>px;
}
</style>
<{/if}>
<script src="<{$xoops_url}>/modules/mycredits/assets/js/Multi-Part-Public.js" type="text/javascript"><!--//--></script>
<script src="<{$xoops_url}>/modules/mycredits/assets/js/Multi-Part-Admin.js" type="text/javascript"><!--//--></script>

<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">
        <div id="form_myCredits_admin" style="display: block; ">
        <table>
        <tr>
            <td>
            <a id='backbutton_myCredits' href='javascript:cycleback_myCredits_admin()' style='float:left'><img src='<{$xoops_url}>/modules/mycredits/assets/images/icon/previous.gif' border='0' style='vertical-align: middle;' alt='<{$lang_prev}>'>&nbsp;<{$lang_prev}></a>
            </td>
            <td>
            <a id='forwardbutton_myCredits' href='javascript:cycleforward_myCredits_admin()' style='float:right'><{$lang_next}>&nbsp;<img src='<{$xoops_url}>/modules/mycredits/assets/images/icon/next.gif' border='0' style='vertical-align: middle;' alt='<{$lang_next}>'></a>
            </td>
        </tr>
        </table>
        </div>
<{/if}>

<{assign var=content value=1}>
<{foreach name=item item=credit from=$credits}>
    <{if $credit.hasmain AND $content AND $credit.weight }>
        <{if $content}>
            <{if $admin_display}>
                </div> <!-- Admintable -->
            <{/if}>
            <{include file="db:mycredits_collaps_public.tpl"}>
            <div id='publictable'>
                <div id="form_myCredits_public" style="display: block; ">
                <table>
                <tr>
                    <td>
                    <a id='backbutton_myCredits' href='javascript:cycleback_myCredits_public()' style='float:left'><img src='<{$xoops_url}>/modules/mycredits/assets/images/icon/previous.gif' border='0' style='vertical-align: middle;' alt='<{$lang_prev}>'>&nbsp;<{$lang_prev}></a>
                    </td>
                    <td>
                    <a id='forwardbutton_myCredits' href='javascript:cycleforward_myCredits_public()' style='float:right'><{$lang_next}>&nbsp;<img src='<{$xoops_url}>/modules/mycredits/assets/images/icon/next.gif' border='0' style='vertical-align: middle;' alt='<{$lang_next}>'></a>
                    </td>
                </tr>
                </table>
                </div>
        <{/if}>
        <div class='myCredits_public' style='display: block;'>
        <{assign var=content value=0}>
    <{elseif $credit.hasmain AND !$content AND $credit.weight }>
        <div class='myCredits_public'>
    <{else}>
        <div class='myCredits_admin'>
    <{/if}>

    <{include file="db:mycredits_block_item.tpl"}>

    </div>
    <{if $smarty.foreach.item.last}>
        </div> <!-- publictable -->
    <{/if}>
<{/foreach}>

<{include file="db:mycredits_footer.tpl"}>
