{include file="header.tpl"}
<div class="mt-5">

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

<form action="book/editAttempt/{$book->id}" method="POST">    
    <div class="form-outline mb-4">
        <input type="text" value="{$book->titulo}" name="title" id="form2Example1" class="form-control" required />
        <label class="form-label" for="form2Example1"></label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" value="{$book->genero}" name="genre" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1"></label>
    </div>
    <div class="form-outline mb-4">
        <textarea name="desc" id="form2Example1" class="form-control">{$book->descripcion}</textarea>        
        <label class="form-label" for="form2Example1"></label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" value="{$book->img_tapa}" name="img" id="form2Example2" class="form-control" required/>
        <label class="form-label" for="form2Example2"></label>
    </div>     
     <button type="submit" class="btn btn-primary btn-block mb-4">Editar Libro</button>
    </form>
</div> 

{include file="footer.tpl"}