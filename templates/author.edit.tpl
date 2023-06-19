{include file="header.tpl"}
<div class="mt-5">

<div class="caja_autores justify-content-md-start mb-3">
    <div class="caja_autor row">
        <div class="caja_descripcion row col">
            <h4 class="titulo_tarjeta">
                {if $author->img_autor!=null}
                    <a>{$author->nombre}</a>
                {else}
                    {$author->nombre}
                {/if}
            </h4>
            <p>{$author->fecha_nac} - ({$author->nacionalidad})</p>
        </div>
        <img class="img_autor col" src="{$author->img_autor}"></img>
    </div>
</div>

<form action="author/editAttempt/{$author->id}" method="POST">    
    <div class="form-outline mb-4">
        <input type="text" value="{$author->nombre}" name="name" id="form2Example1" class="form-control" required />
        <label class="form-label" for="form2Example1">Nombre Autor</label>
    </div>
    <div class="form-outline mb-4">
        <input type="text" value="{$author->img_autor}" name="img" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Link Imagen Autor</label>
    </div>    
    {include file ="nationality.tpl"}
    <div class="form-outline mb-4">
        <input type="date" value="{$author->fecha_nac}" name="date" id="form2Example2" class="form-control" required/>
        <label class="form-label" for="form2Example2">Fecha de Nacimiento</label>
    </div>     
     <button type="submit" class="btn btn-primary btn-block mb-4">Editar Autor</button>
    </form>
</div> 

{include file="footer.tpl"}