{include file="header.tpl"}
<div class="mt-5">
<form action="book/addAttempt" method="POST">    
    <div class="form-outline mb-4">
        <input type="text" name="title" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Titulo Libro</label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" name="desc" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Descripcion del Libro</label>
    </div>    
    <div class="form-outline mb-4">
        <input type="text" name="genre" id="form2Example2" class="form-control" required/>
        <label class="form-label" for="form2Example2">Generos del Libro</label>
    </div>     
    <div class="form-outline mb-4">    
        <select class="mb-3" name="author" required>
        {foreach from=$authors item=$author}
            <option value="{$author->id}">{$author->nombre}</option>
        {/foreach}            
        </select>
    </div>     
    <div class="form-outline mb-4">
        <input type="text" name="img" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Link de la Imagen de la Tapa del Libro</label>
    </div>   
     <button type="submit" class="btn btn-primary btn-block mb-4">Agregar Libro</button>
    </form>
</div> 

{include file="footer.tpl"}