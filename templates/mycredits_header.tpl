<script type='text/javascript' src='<{$xoops_url}>/modules/mycredits/assets/js/collapsableBar.js'></script>
<link rel="stylesheet" type="text/css" media="all" href="<{$xoops_url}>/modules/mycredits/assets/css/module.css">

<{if !$block.credits}>
    <{if $banner}>
        <div class="item" align="center" style="width:100%;">
            <img src="<{$xoops_url}>/modules/mycredits/assets/images/logo.png">
            <br>
        </div>
    <{/if}>

    <{if $textindex}>
        <div class="itemText" align="center">
               <{$textindex}>
           </div>
        <br>
    <{/if}>
<{/if}>
