{include file="header.tpl"}

<div class="caja_autores">
    {foreach from=$authors item=$author}
        {if $author->id!=0}
            <div class="caja_autor row">
                <div class="caja_descripcion col">
                    <h4 class="titulo_tarjeta">
                        {if $author->img_autor!=null}
                            <a href='author/id/{$author->id}'>{$author->nombre}</a>
                        {else}
                            {$author->nombre}
                        {/if}
                    </h4>
                    <p>{$author->fecha_nac} - ({$author->nacionalidad})</p>
                </div>

                <img class="img_autor" src="{$author->img_autor}"></img>
                {if $logged}
                    <div class="caja_btns">
                        <a class="btn btn-warning btn-sm row custom_btn" href="author/delete/{$author->id}" role="button">Borrar</a>
                        <a class="btn btn-danger btn-sm row custom_btn" href="author/edit/{$author->id}" role="button">Editar</a>
                    </div>
                {/if}
            </div>
        {/if}
    {/foreach}
</div>

{include file="footer.tpl"}