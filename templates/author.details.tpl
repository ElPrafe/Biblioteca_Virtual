{include file="header.tpl"}

<div class="caja_autores justify-content-md-start">
    <div class="caja_autor row">
        <div class="caja_descripcion row col">
            <h4 class="titulo_tarjeta">
                {if $author->img_autor!=null}
                    <a>{$author->nombre}</a>
                {else}
                    {$author->nombre}[]
                {/if}
            </h4>
            <p>{$author->fecha_nac} - ( {$author->nacionalidad})</p>
        </div>
        <img class="img_autor col" src="{$author->img_autor}"></img>
    </div>
</div>
<div class="caja_autores justify-content-md-start">
    {foreach from=$books item=$book}
        
            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">
                        {if $book->img_tapa!=null}
                            <a href="book/{$book->id}">{$book->titulo}</a>
                        {else}
                            {$book->titulo}
                        {/if}
                    </h4>
                    <p>{$book->genero}</p>
                </div>

                    <img class="img_autor col" src="{$book->img_tapa}"></img>
            </div>
        
    {/foreach}
</div>

{include file="footer.tpl"}