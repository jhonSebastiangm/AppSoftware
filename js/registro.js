$(document).ready(function() {
  console.log("ready");
  cargarSelect();
  function cargarSelect(){
      $.ajax({
        type: "GET",
        url: 'negocio/cargarSelect.php', 
        dataType: "json",
        success: function(data){
            
          $.each(data,function(key, company) {
            $("#Select").append('<option value='+company.idCompany+'>'+company.nombre+'</option>');
          });        
        },
        error: function(data) {
          alert('error');
        }
    });
  }

  $('#Resultados').hide();
  $('#RegistrarUsuario').submit(e => {
  e.preventDefault();
  const postData = {
        usuario: $('#email').val(),
        company: $('#Select').val(),
        password: $('#password').val(),
        password_confirmation: $('#password_confirmation').val()
      };
      const url ='negocio/AgregarUsuarios.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
         
          console.log(response);
          let template = '';
          console.log("entro");
          if (response == 1) {
              template += 
              `
              <br>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  El nombre de usuario está en uso, por favor escoja otro
                  </div>
                  <br>
              `  
          }
          else if (response==2) {
              template += 
              `
              <br>
                  <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Las contraseñas no coinciden
                  </div>
                  <br>
              `  
          }
          else if (response==3) {
              template += 
              `
              <br>
                  <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  Felicidades se ha registrado correctamente
                  </div>
                  <br>
              `  
          }
          $('#Resultados').show();
          $('#Resultados').html(template);       
      });
  });


});