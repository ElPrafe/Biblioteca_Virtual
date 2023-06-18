{include file="header.tpl"}

<div class="caja_autores justify-content-md-start">
    {foreach from=$books item=$book}
        {if $book->id!=0}
            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">                        
                        <a href='book/id/{$book->id}'>{$book->titulo}</a>                                               
                    </h4>
                    <h3>{$book->genero}</h3>                    
                </div>
                    <img class="img_autor col" src="{$book->img_tapa}"></img>
            </div>
            {if $logged}                
                <a class="btn btn-warning btn-sm" href="book/delete/{$book->id}" role="button">Borrar Libro</a>       
                <a class="btn btn-danger btn-sm" href="book/edit/{$book->id}" role="button">Editar Libro</a>               
            {/if}
        {/if}
    {/foreach}
</div>
{include file="footer.tpl"}