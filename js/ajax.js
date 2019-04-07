$(document).ready(function () {
$('#insertbtn').click(function(e){
  e.preventDefault();
  $.ajax({
      method:"post",
      url:"insertdata.php",
      data:$('#formid').serialize(),
      datatype:"html",
      success:function(response){
      	$('#messagedisplay').text(response);
      }

   });

})
});

$(document).ready(function () {

$('#displaybtn').click(function(e){
  e.preventDefault();
  $.ajax({
      method:"post",
      url:"displaydata.php",
      data:$('#displaydata').serialize(),
      datatype:"html",
      success:function(response){
      	$('#displaydata').html(response);
      }

  });
})

});