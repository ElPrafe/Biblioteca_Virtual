{include file="header.tpl"}

<div class="caja_autores justify-content-md-start">
            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">                        
                        <a>{$book->titulo}</a>                                               
                    </h4>
                    <h3>{$book->genero}</h3>
                    <p>{$book->descripcion}</p>
                </div>

                    <img class="img_autor col" src="{$book->img_tapa}"></img>
            </div>
</div>

{include file="footer.tpl"}