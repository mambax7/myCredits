<div class="item">
    <div class="itemHead">
           <span style="float:right;">
        <{if $credit.hasmain}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/" title="<{$credit.name}>">
        <{/if}>
        <{$credit.dirname}>&nbsp;
        <{if $version_display}>
               <{$credit.version}>
        <{/if}>
        <{if $credit.hasmain}>
            </a>
        <{/if}>
        </span>

        <span>
        <{if $credit.hasmain}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/" title="<{$credit.name}>">
        <{/if}>
        <{$credit.name}>
        <{if $credit.hasmain}>
            </a>
        <{/if}>
        </span>
    </div>

    <div class="itemBody" style="height:100px; ">
        <span style="float:right;">
        <{if $credit.hasmain}>
            <a href="<{$xoops_url}>/modules/<{$credit.dirname}>/" title="<{$credit.name}>">
        <{/if}>
        <img src="<{$xoops_url}>/<{$credit.image}>" alt="<{$credit.description}>" vspace="5" hspace="5">
        <{if $credit.hasmain}>
            </a>
        <{/if}>
        </span>
        <span style="float:left;"><{$credit.description}></span>
    </div>

    <div class="itemFoot">
        <span><b><{$lang_author}></b> : <{$credit.authors}></span>
        <br>
        <span><b><{$lang_credits}></b> : <{$credit.credit}></span>
    </div>
</div>
