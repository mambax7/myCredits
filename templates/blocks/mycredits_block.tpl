<{assign var=admin_display value=$block.admin_display}>
<{assign var=version_display value=$block.version_display}>
<{assign var=lang_admin value=$block.lang_admin}>
<{assign var=lang_public value=$block.lang_public}>
<{assign var=lang_module value=$block.lang_module}>
<{assign var=lang_name value=$block.lang_name}>
<{assign var=lang_description value=$block.lang_description}>
<{assign var=lang_version value=$block.lang_version}>
<{assign var=lang_credits value=$block.lang_credits}>
<{assign var=lang_author value=$block.lang_author}>
<{assign var=lang_prev value=$block.lang_prev}>
<{assign var=lang_next value=$block.lang_next}>

<{assign var=tips value=$block.tips}>
<{assign var=height value=$block.height}>
<{assign var=delay value=$block.delay}>
<{assign var=show value=$block.show}>

<{assign var=credits value=$block.credits}>

<{if $block.display == 0}>
    <{include file="db:mycredits_index_list.tpl"}>
<{elseif $block.display == 1}>
    <{include file="db:mycredits_index_block.tpl"}>
<{elseif $block.display == 2}>
    <{include file="db:mycredits_index_scroll.tpl"}>
<{elseif $block.display == 3}>
    <{include file="db:mycredits_index_multipart.tpl"}>
<{/if}>
