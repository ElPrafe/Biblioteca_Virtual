{include file="header.tpl"}
<!-- formulario de alta de tarea -->
<div class="mt-5">
<form action="loginAttempt" method="POST">
    <!-- Email input -->
    <div class="form-outline mb-4">
        <input type="text" name="username" id="form2Example1" class="form-control" required/>
        <label class="form-label" for="form2Example1">Usuario</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" name="password" id="form2Example2" class="form-control" required/>
        <label class="form-label" for="form2Example2">Contraseña</label>
    </div>
     <!-- Submit button -->
     <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
    </form>
</div> 

{include file="footer.tpl"}