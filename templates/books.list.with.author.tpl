{include file="header.tpl"}

<div class="caja_autores ">
    {foreach from=$books item=$book}
        <div class="caja_autor row">
            <div class="caja_descripcion col">
                <h4 class="titulo_tarjeta">
                    <a href='book/id/{$book['id']}'>{$book['titulo']} - {$book['autor_nombre']}</a>
                </h4>
                <h3>{$book['genero']}</h3>
            </div>
            <img class="img_autor col" src="{$book['img_tapa']}"></img>

            {if $logged}
                <div class="col caja_btns">
                    <a class="btn btn-warning btn-sm row custom_btn" href="book/delete/{$book['id']}" role="button">Borrar</a>
                    <a class="btn btn-danger btn-sm row custom_btn" href="book/edit/{$book['id']}" role="button">Editar</a>
                </div>
            {/if}
        </div>
    {/foreach}
</div>
{include file="footer.tpl"}