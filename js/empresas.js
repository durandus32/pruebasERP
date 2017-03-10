
$.post(base_url+"empresa/Cempresa/getTempresas",
      {},
      function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
              $('#tbEmpresa').append(
                  '<tr><th>'+item.id_empresa+'</th>'+
                  '<th>'+item.nombre+'</th>'+
                  '<th>'+item.correo+'</th>'+
                  '<th>'+item.direccion+'</th>'+
                  '<th>'+item.telefono+'</th>'+
                  '<th>'+item.codigo_postal+'</th></tr>');

          });
      });
