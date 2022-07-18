$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val()); 
   var tipo =$.trim($("#tipo").val());     
    
   if(usuario.length == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario',
      });
    }
    if(tipo.length == "--Seleccione Rol--"){
        Swal.fire({
            type:'warning',
            title:'Seleccione Tipo',
        });
      }

       if(password.length == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar password',
      });
    
      return false; 
    }
    else{
        $.ajax({
           url:"bd/login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password, tipo:tipo}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });

               }
             else if(tipo == "Tareador"){
                Swal.fire({
                    type:'success',
                       title:'! Bienvenido ' + usuario +' !' ,
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                }).then((result) => {
                    if(result.value){
                        //window.location.href = "vistas/pag_inicio.php";
                        window.location.href = "dashboard/indextareador.php";
                    }
                })

            }

               else{
                   Swal.fire({
                       type:'success',
                       title:'! Bienvenido ' + usuario +' !' ,
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "dashboard/index.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});