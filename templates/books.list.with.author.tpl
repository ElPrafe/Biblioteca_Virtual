{include file="header.tpl"}

<div class="row justify-content-center">
    {foreach from=$books item=$book}
        <div class="caja_libro col-3">            
            <img class="img_libro col" src="{$book['img_tapa']}"></img>
                <h6 class="titulo_tarjeta">
                    <a href='book/id/{$book['id']}'>{$book['titulo']} - {$book['autor_nombre']}</a>
                </h6>
                <p>{$book['genero']}</p>                
            {if $logged}
                <div class="col caja_btns">
                    <a class="btn btn-danger btn-sm row custom_btn" href="book/delete/{$book['id']}" role="button">Borrar</a>
                    <a class="btn btn-warning btn-sm row custom_btn" href="book/edit/{$book['id']}" role="button">Editar</a>
                </div>
            {/if}
        </div>
    {/foreach}
</div>
{if $logged}
    <script src="./js/script.js"></script>
{/if}
{include file="footer.tpl"}