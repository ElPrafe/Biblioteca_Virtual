{include file="header.tpl"}



<div class="row justify-content-md-center">
    {foreach from=$authors item=$author}
    <div class="col col-lg-4">
    <span> <h4>{$author->nombre}</h4> <img src='{$author->img_autor}'class="img-fluid"> <p>{$author->fecha_nac} -  ( {$author->nacionalidad})</p> </span>
    </div>
    {/foreach}
</div>




{include file="footer.tpl"}