$(document).ready(function() {
    let cargar = false;
    $('#formulario').hide();
    BuscarTickets();
 
    $('#ticket-form').submit(e => {
      e.preventDefault();
      const postData = {
        comentario: $('#comentario').val(),
        estado: $('#estado').val(),
        idTicket: $('#idTicket').val()
      };
      const url ='negocio/ModificarTicket.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        $('#ticket-form').trigger('reset');
        cargar = false;
        $('#formulario').hide();
        BuscarTickets();
      });
    });
  
    // Fetching Tasks
    function BuscarTickets() {
      $.ajax({
        url: 'negocio/ticketslist.php',
        type: 'GET',
        success: function(response) {
          console.log(response);
          const tickets = JSON.parse(response);
          let template = '';
          tickets.forEach(ticket => {
            template += `
                    <tr idTicket="${ticket.idTicket}">
                    <td>${ticket.idTicket}</td>
                    <td>
                    <a href="#" class="company-item">
                      ${ticket.comentario} 
                    </a>
                    </td>
                    <td>${ticket.estado}</td>
                    <td>
                      <button class="modifcar-item btn btn-danger">
                       Modificar Ticket 
                      </button>
                    </td>
                    <td>
                    <button class="cancelar-item btn btn-danger">
                     Cancelar Ticket 
                    </button>
                  </td>
                    </tr>
                  `
          });
          $('#Tickets').html(template);
        }
      });
    }
  
    // Get a Single Task by Id 
    $(document).on('click', '.modifcar-item', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let idTicket = $(element).attr('idTicket');
      console.log(idTicket);
      $.post('negocio/cargarTicket.php', {idTicket}, (response) => {
        console.log(response);
        const ticket = JSON.parse(response);
        $('#idTicket').val(ticket.idTicket);
        $('#comentario').val(ticket.comentario);
        $('#estado').val(ticket.estado);
        cargar = true;
        $('#formulario').show();
      });
    });
  
    // Delete a Single Task
    $(document).on('click', '.cancelar-item',function() {
      if(confirm('Estas Seguro De canelar el ticket?')) {
        let element = $(this)[0].parentElement.parentElement;
        let idTicket = $(element).attr('idTicket');
        $.post('negocio/ticket-delete.php', {idTicket}, (response) => {
            console.log(response);
            BuscarTickets();
        });
      }
    });
  });
  