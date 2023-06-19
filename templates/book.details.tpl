{include file="header.tpl"}

<div class="caja_autores">
    <div class="caja_autor row">
        <div class="titulo_autor">
            <h1 class="titulo_autor">{$author->nombre}</h1>
        </div>
        <div class="caja_descripcion col">
            <h4 class="titulo_tarjeta">
                <a>{$book->titulo}</a>
            </h4>
            <h3>{$book->genero}</h3>
            <p>{$book->descripcion}</p>
        </div>

        <img class="img_libro_detail col" src="{$book->img_tapa}"></img>
    </div>
</div>

{include file="footer.tpl"}