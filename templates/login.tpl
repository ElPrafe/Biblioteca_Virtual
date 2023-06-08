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
{*     <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
        <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
        </div>

        <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
        </div>
    </div>

   

    <!-- Register buttons -->
    <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
        <p>or sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
    </div>

</div> *}

{include file="footer.tpl"}