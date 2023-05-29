{include file="header.tpl"}

{include file="form_alta.tpl"}


<div class="row justify-content-md-center">
    {foreach from=$authors item=$author}
    <div class="col col-lg-4">
    <span> {$author->nombre} - <img src='{$author->img_autor}'class="img-fluid "> -{$author->fecha_nac} ( {$author->nacionalidad}) </span>
    </div>
    {/foreach}
</div>




{include file="footer.tpl"}