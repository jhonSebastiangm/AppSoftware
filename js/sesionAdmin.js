$(document).ready(function() {
    BuscarCompany();
    let edit = false;
    $('#company-form').submit(e => {
      e.preventDefault();
      const postData = {
        nombre: $('#nombre').val(),
        nit: $('#nit').val(),
        telefono: $('#telefono').val(),
        direccion: $('#direccion').val(),
        correo: $('#correo').val(),
        id: $('#idCompany').val()
      };
      const url = edit === false ? 'negocio/AgregarCompany.php' : 'negocio/ModificarCompany.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        edit = false;
        $('#company-form').trigger('reset');
        BuscarCompany();
      });
    });
  
    // Fetching Tasks
    function BuscarCompany() {
      $.ajax({
        url: 'negocio/companylist.php',
        type: 'GET',
        success: function(response) {
          console.log(response);
          const companies = JSON.parse(response);
          let template = '';
          companies.forEach(company => {
            template += `
                    <tr idCompany="${company.idCompany}">
                    <td>${company.idCompany}</td>
                    <td>
                    <a href="#" class="company-item">
                      ${company.nombre} 
                    </a>
                    </td>
                    <td>${company.correo}</td>
                    <td>
                      <button class="company-delete btn btn-danger">
                       Delete 
                      </button>
                    </td>
                    </tr>
                  `
          });
          $('#companies').html(template);
        }
      });
    }
  
    // Get a Single Task by Id 
    $(document).on('click', '.company-item', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let idCompany = $(element).attr('idCompany');
      console.log(idCompany);
      $.post('negocio/cargarcompany.php', {idCompany}, (response) => {
          console.log(response);
        const company = JSON.parse(response);
        $('#idCompany').val(company.idCompany);
        $('#nombre').val(company.nombre);
        $('#nit').val(company.nit);
        $('#telefono').val(company.telefono);
        $('#direccion').val(company.direccion);
        $('#correo').val(company.correo);
        edit = true;
      });
    });
  
    // Delete a Single Task
    $(document).on('click', '.company-delete',function() {
      if(confirm('Estas Seguro De Eliminar La Company?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idCompany = $(element).attr('idCompany');
        $.post('negocio/company-delete.php', {idCompany}, (response) => {
            console.log(response);
            BuscarCompany();
        });
      }
    });
  });
  