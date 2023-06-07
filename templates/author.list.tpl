{include file="header.tpl"}

<div class="caja_autores justify-content-md-start">
    {foreach from=$authors item=$author}
        {if $author->id!=0}
            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">
                        {if $author->img_autor!=null}
                            <a href='author/{$author->id}'>{$author->nombre}</a>
                        {else}
                            {$author->nombre}
                        {/if}
                    </h4>
                    <p>{$author->fecha_nac} - ( {$author->nacionalidad})</p>
                </div>

                    <img class="img_autor col" src="{$author->img_autor}"></img>
            </div>
        {/if}
    {/foreach}
</div>

{include file="footer.tpl"}