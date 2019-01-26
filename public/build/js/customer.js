$(document).ready(function(){
	// work with uploading fille
	$("#push").on("click",function(){
		var name=$("#name").val();
		var cat=$("#cat").val();
		var token=$("#token").val();
		var file=$("#file").val();
		var discribtion=$("#Discribtion").val();
		//======================================//
		 if(!name || !cat || !token || !file || !discribtion){
       
       swal("missing input", "You shoud full all feild ", "warning")
		 	
}

else{
$("form_upload").submit(function(){
var formData = new FormData($(this)[0]);
alert("s")
 $.ajax({
 type: "POST",
 url: '/upf',
 data: formData,
     success: function (msg) {
     	console.log(msg);

    
},
     error: function (msg) {
                              
 }

 });
 
});}
});
});