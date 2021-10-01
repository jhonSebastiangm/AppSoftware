$(document).ready(function() {


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

    BuscarProyectos();
    $('#proyecto-form').submit(e => {
      e.preventDefault();
      const postData = {
        nombre: $('#nombre').val(),
        Select: $('#Select').val(),
        idProyecto: $('#idProyecto').val()
      };
      const url =  'negocio/AgregarProyecto.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        $('#proyecto-form').trigger('reset');
        BuscarProyectos();
      });
    });
  
    // Fetching Tasks
    function BuscarProyectos() {
      $.ajax({
        url: 'negocio/proyectolist.php',
        type: 'GET',
        success: function(response) {
          console.log(response);
          const proyectos = JSON.parse(response);
          let template = '';
          proyectos.forEach(proyect => {
            template += `
                    <tr idCompany="${proyect.idProyecto}">
                    <td>${proyect.idProyecto}</td>
                    <td>${proyect.nombre}</td>
                    <td>${proyect.idCompany}</td>
                    </tr>
                  `
          });
          $('#proyectos').html(template);
        }
      });
    }
  
  });
  