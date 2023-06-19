{include file="header.tpl"}
<div class="author_details d-inline-flex">
    <div class="row justify-content-center">
        {foreach from=$books item=$book}
            <div class="caja_libro col-3">
                <img class="img_libro col" src="{$book->img_tapa}"></img>
                <h6 class="titulo_tarjeta">
                    <a href='book/id/{$book->id}'>{$book->titulo}</a>
                </h6>
                <p class="text-center">{$book->genero}</p>
                {if $logged}
                    <div class="col caja_btns">
                        <a class="btn btn-danger btn-sm row custom_btn" href="book/delete/{$book->id}" role="button">Borrar</a>
                        <a class="btn btn-warning btn-sm row custom_btn" href="book/edit/{$book->id}" role="button">Editar</a>
                    </div>
                {/if}
            </div>
        {/foreach}
    </div>

    <div class="caja_autor_detail col d-flex">
        <div class="caja_descripcion_detail">
            <h4 class="titulo_tarjeta">
                {if $author->img_autor!=null}
                    <a>{$author->nombre}</a>
                {else}
                    {$author->nombre}
                {/if}
            </h4>
            <p class="text-center mb-1">{$author->fecha_nac}</p>
            <p class="text-center  mb-1">({$author->nacionalidad})</p>
        </div>

        <img class="img_autor_detail" src="{$author->img_autor}"></img>
    </div>
</div>
{if $logged}
    <script src="./js/script.js"></script>
{/if}

{include file="footer.tpl"}