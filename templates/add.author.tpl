{include file="header.tpl"}
<div class="mt-5">
<form action="author/addAttempt" method="POST">    
    <div class="form-outline mb-4">
        <input type="text" name="name" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Nombre Autor</label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" name="img" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Link Imagen Autor</label>
    </div>    
    {include file ="nationality.tpl"}
    <div class="form-outline mb-4">
        <input type="date" name="date" id="form2Example2" class="form-control" required/>
        <label class="form-label" for="form2Example2">Fecha de Nacimiento</label>
    </div>     
     <button type="submit" class="btn btn-primary btn-block mb-4">Agregar Autor</button>
    </form>
</div> 

{include file="footer.tpl"}