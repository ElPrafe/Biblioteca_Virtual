{include file="header.tpl"}

{include file="form_alta.tpl"}


<ul>
    {foreach from=$authors item=$author}        
            <span> <b>{$author->nombre}</b> - <img src='{$author->img_autor}'> -{$author->fecha_nac} ( {$author->nacionalidad}) </span>
        </li>
    {/foreach}
</ul>


{include file="footer.tpl"}