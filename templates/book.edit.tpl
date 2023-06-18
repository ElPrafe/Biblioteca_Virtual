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
    <div class="form-outline mb-4">    
        <select class="mb-3" name="author" required>{* Esta logica es utilizada para mostrar seleccionado el autor del libro y despues mostrar el resto de autores *}
        {foreach from=$authors item=$author}
            {if ($author->id == $book->id_autor)}
                <option value="{$author->id}">{$author->nombre}</option>
            {/if}          
        {/foreach}    
        {foreach from=$authors item=$author}
            {if ($author->id != $book->id_autor)}
                <option value="{$author->id}">{$author->nombre}</option>
            {/if}
        {/foreach}            
        </select>
    </div>      
     <button type="submit" class="btn btn-primary btn-block mb-4">Editar Libro</button>
    </form>
</div> 

{include file="footer.tpl"}