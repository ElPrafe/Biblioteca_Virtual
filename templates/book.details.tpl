{include file="header.tpl"}

<div class="caja_autores justify-content-md-start">

            <div class="caja_autor row">
                <div class="caja_descripcion row col">
                    <h4 class="titulo_tarjeta">                        
                        <a>{$books[0]->titulo}</a>                                               
                    </h4>
                    <h3>{$books[0]->genero}</h3>
                    <p>{$books[0]->descripcion}
                </div>

                    <img class="img_autor col" src="{$books[0]->img_tapa}"></img>
            </div>
</div>

{include file="footer.tpl"}