let listaBotonesBorrar = document.querySelectorAll('.btn-danger');
listaBotonesBorrar.forEach(element => {
        element.addEventListener('click',function(){
            let confirmar = confirm('Seguro?');
            if (confirmar){
                console.log('a0');
            }else{
                event.preventDefault();
                console.log('b0');
            }
        });
    });
    