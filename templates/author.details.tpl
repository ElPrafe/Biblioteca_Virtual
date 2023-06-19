{include file="header.tpl"}
<div class="author_details d-inline-flex">
    <div class="caja_autores">
        {foreach from=$books item=$book}
            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">
                        {if $book->img_tapa!=null}
                            <a href="book/id/{$book->id}">{$book->titulo}</a>
                        {else}
                            {$book->titulo}
                        {/if}
                    </h4>
                    <p>{$book->genero}</p>
                </div>

                <img class="img_autor col" src="{$book->img_tapa}"></img>
                {if $logged}
                    <div class="col caja_btns">
                        <a class="btn btn-warning btn-sm row custom_btn" href="book/delete/{$book->id}" role="button">Borrar</a>
                        <a class="btn btn-danger btn-sm row custom_btn" href="book/edit/{$book->id}" role="button">Editar</a>
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
            <p>{$author->fecha_nac} - ({$author->nacionalidad})</p>
        </div>

        <img class="img_autor_detail" src="{$author->img_autor}"></img>
    </div>

</div>

{include file="footer.tpl"}