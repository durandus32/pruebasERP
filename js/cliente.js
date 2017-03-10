/*$.post("",
      {parametros},
      function (data) {

      });
*/

$.post(base_url+"empresa/Cempresa/getEmpresas",
      {},
      function (data) {
          var c = JSON.parse(data);
          $.each(c,function(i,item){
              $('#cboEmpresa').append(

              '<option value="'+item.id_empresa+'">'+item.nombre+'</option>');
          });
      });

$('#cboEmpresa').change(function(){
  $('#cboEmpresa option:selected').each(function() {
    var id =$('#cboEmpresa').val();

  });
});
