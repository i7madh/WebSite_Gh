<div class="footer">
   <p>&copy; Copyright 2017-2018 Ezhalha Online Store</p>
</div>

<script>
jQuery(window).scroll(function() {
var vscroll = jQuery(this).scrollTop();
jQuery('#logotext').css( {
"transform" : "translate(0px , "+vscroll/2+"px)"
});
}) ;

function detailsmodal(id) {
var data = {"id" :id};
jQuery.ajax({
  url:'/website/include/detailsmodal.php' ,
  method : "post",
  data : data,
  success : function (data){
    jQuery('body').append(data);
    jQuery('#details-modal').modal('toggle');
},
  error : function (){
  alert("something is wrong! ") ;
}
});
}

</script>


</body>

</html>
