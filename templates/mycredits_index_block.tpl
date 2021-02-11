<{include file="db:mycredits_header.tpl"}>

<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">
<{/if}>

<{assign var=content value=1}>
<{foreach name=item item=credit from=$credits}>
    <{if $credit.hasmain AND $content AND $credit.weight }>
        <{if $admin_display}>
            </div> <!-- Admintable -->
        <{/if}>
        <{if $content}>
            <{include file="db:mycredits_collaps_public.tpl"}>
            <div id='publictable'>
        <{/if}>
        <{assign var=content value=0}>
    <{/if}>

    <div class="item" style="padding-bottom:10px">
    <{include file="db:mycredits_block_item.tpl"}>
    </div>

    <{if $smarty.foreach.item.last}>
        </div> <!-- publictable -->
    <{/if}>
<{/foreach}>

<{include file="db:mycredits_footer.tpl"}>
