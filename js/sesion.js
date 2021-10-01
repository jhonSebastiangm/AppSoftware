$(document).ready(function() {
    let cargar = false;
    
    cargarSelect();
    cargarSelect2();
    function cargarSelect(){
        $.ajax({
          type: "GET",
          url: 'negocio/cargarSelectProyecto.php', 
          dataType: "json",
          success: function(data){
              
            $.each(data,function(key, proyecto) {
              $("#Select").append('<option value='+proyecto.idProyecto+'>'+proyecto.nombre+'</option>');
            });        
            
          },
          error: function(data) {
            alert('error');
          }
      });
    }
    
    function cargarSelect2(){
        $.ajax({
          type: "GET",
          url: 'negocio/cargarSelectProyecto.php', 
          dataType: "json",
          success: function(data){
              
            $.each(data,function(key, proyecto) {
              $("#Select2").append('<option value='+proyecto.idProyecto+'>'+proyecto.nombre+'</option>');
            });        
            BuscarHu();
          },
          error: function(data) {
            alert('error');
          }
      });
    }

    $("#Select2").change(function() {
      BuscarHu();
    });
    $('#hu-form').submit(e => {
      e.preventDefault();
      const postData = {
        nombre: $('#nombre').val(),
        idProyecto: $('#Select').val(),
        comentario: $('#comentario').val(),
        idHu: $('#idHu').val()
      };
      const url = cargar === false ? 'negocio/AgregarHu.php' : 'negocio/AgregarTicket.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        $('#hu-form').trigger('reset');
        cargar = false;
        BuscarHu();
      });
    });
  
    // Fetching Tasks
    function BuscarHu() {
      const postData = {
        idProyecto: $('#Select2').val()
      };
      const url = 'negocio/hulist.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        const hus = JSON.parse(response);
        let template = '';
        hus.forEach(hu => {
          template += `
                  <tr idHu="${hu.idHu}">
                  <td>${hu.idHu}</td>
                  <td>
                  <a href="#" class="company-item">
                    ${hu.nombre} 
                  </a>
                  </td>
                  <td>${hu.idProyecto}</td>
                  <td>
                    <button class="company-item btn btn-danger">
                     Crear Ticket 
                    </button>
                  </td>
                  </tr>
                `
        });
        $('#hus').html(template);
      });
    }
  
    // Get a Single Task by Id 
    $(document).on('click', '.company-item', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let idHu = $(element).attr('idHu');
      console.log(idHu);
      $.post('negocio/cargarHu.php', {idHu}, (response) => {
        console.log(response);
        const company = JSON.parse(response);
        $('#idHu').val(company.idHu);
        $('#nombre').val(company.nombre);
        $('#Select').val(company.idProyecto);
        cargar = true;
      });
    });
  
    // Delete a Single Task
    $(document).on('click', '.company-delete',function() {
      if(confirm('Estas Seguro De Eliminar La Company?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idCompany = $(element).attr('idCompany');
        $.post('negocio/company-delete.php', {idCompany}, (response) => {
            console.log(response);
            BuscarHu();
        });
      }
    });
  });
  