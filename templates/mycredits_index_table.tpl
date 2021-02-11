<div class="item">
<{include file="db:mycredits_header.tpl"}>

<div class="itemBody">
<{if $admin_display}>
    <{include file="db:mycredits_collaps_admin.tpl"}>
    <div id='admintable' style="display:none;">

    <table class="table">
    <tr>
        <th>    N�            </th>
        <th>    <{$lang_module}>     </th>
        <th>    <{$lang_name}>         </th>
        <{if $version_display}>
            <th>    <{$lang_version}>    </th>
        <{/if}>
        <th>    <{$lang_description}>     </th>
        <th>    <{$lang_credits}>    </th>
    </tr>
<{/if}>

<{assign var=content value=1}>
<{assign var=count value=1}>
<{foreach name=item item=credit from=$credits}>
    <{if $credit.hasmain AND $content AND $credit.weight }>
        <{if $admin_display}>
            </table></div> <!-- Admintable -->
        <{/if}>
        <{if $content}>
            <{include file="db:mycredits_collaps_public.tpl"}>
            <div id='publictable'>
            <table class="table">
            <tr>
                <th>    N�            </th>
                <th>    <{$lang_module}>     </th>
                <th>    <{$lang_name}>         </th>
                <{if $version_display}>
                    <th>    <{$lang_version}>    </th>
                <{/if}>
                <th>    <{$lang_description}>     </th>
                <th>    <{$lang_credits}>    </th>
            </tr>
        <{/if}>

        <{assign var=content value=0}>
    <{/if}>

    <tr class="<{cycle values="even,odd"}>">
        <td align="center" rowspan="2">
            <{$count}>
        </td>
        <td align="center" rowspan="2">
        <{if $credit.hasmain}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/" target="_blank" title="<{$credit.name}>"><{/if}>
            <img src="<{$xoops_url}>/<{$credit.image}>" alt="<{$credit.description}>"><br>
            <{$credit.dirname}>
            <{if $credit.hasmain}></a><{/if}>
        </td>
        <td rowspan="2">
            <{$credit.name}>
        </td>
        <{if $version_display}>
            <td align="center" rowspan="2">
                <{$credit.version}>
            </td>
        <{/if}>
        <td rowspan="2">
            <{$credit.description}>
        </td>
        <td align="center">
        <{$credit.authors}>
        </td>
    </tr>

<tr class="<{cycle values="even,odd"}>">
    <td align="center">
        <{$credit.credit}>
    </td>
</tr>

    <{if $smarty.foreach.item.last}>
        </table></div> <!-- publictable -->
    <{/if}>
    <{assign var=count value=$count+1}>
<{/foreach}>
</div>

</div>
<{include file="db:mycredits_footer.tpl"}>
