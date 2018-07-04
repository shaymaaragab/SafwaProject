function saveblogs(){

	$("#loading").slideDown();
	var data = new Array();
	data[0] = $('#title').val();
	data[1] = $('#logo').val();
	data[2] = $('#post').val();
	$.ajax({
		url:'handler.php',
		type:'post',
		data:{data: data , op: 'saveblog'},
		success: function(res){
			if(res != 0){
				$("#loading").slideUp(function(){
					$("#success").slideDown();
					setTimeout(function(){
						$("#success").slideUp();
						location.reload();
					},2000);
				});
			}else{

				$("#loading").slideUp(function(){
					$("#error").slideDown();
					setTimeout(function(){
						$("#error").slideUp();
					},2000);
				});

			}

		}
	});

}


function editteammember(id){
   var flag = 0;
	var data = new Array();

	data[0] = $("#name"+id).val();
	if(data[0]==''){ $("#name"+id).parent().addClass('has-error'); flag=1; }else{ $("#name"+id).parent().removeClass('has-error'); flag=0; }
	
	data[1] = $("#position"+id).val();
	if(data[1]==''){ $("#position"+id).parent().addClass('has-error'); flag=1; }else{ $("#position"+id).parent().removeClass('has-error'); flag=0; }
	
	data[2] = $("#contactNo"+id).val();
	if(data[2]==''){ $("#contactNo"+id).parent().addClass('has-error'); flag=1; }else{ $("#contactNo"+id).parent().removeClass('has-error'); flag=0; }
	
	data[3] = $("#email"+id).val();
	if(data[3]==''){ $("#email"+id).parent().addClass('has-error'); flag=1; }else{ $("#email"+id).parent().removeClass('has-error'); flag=0; }
	
	
  if(flag==1){ return; }
  
  $('#loading'+id).slideDown();
  $.ajax({
	url:'handler.php',
	type:'post',
	data:{data: data , op: 'editmembers' , id : id },
	success: function(res){
		if(res == 1){
			$('#loading'+id).slideUp(function(){
				$("#success"+id).slideDown();
			});

		setTimeout(function(){
			
            $('#success'+id).hide(500);
			$("#formModal"+id).modal('toggle');
			
		$("#success"+id).hide();
		location.reload();
		},2000);

		}else{
			$('#loading'+id).slideUp(function(){
           setTimeout(function() {
           	$('#error'+id).slideDown();

           }, 2000);
           });
		}
	}
}); 
}

function compType(type){
	var type = new Array();
	$(".type").each(function(){	
		if($(this).is(':checked')){
			type.push(this.value);
		}
	});
       var json_type =  JSON.stringify(type);

$('#pro_company').val(json_type);
}
// function compType2(type,id){
// 	var type2 = new Array();
// 	$(".type2").each(function(){	
// 		if($(this).is(':checked')){
// 			type2.push(this.value);
// 		}
// 	});
//       var json_type =  JSON.stringify(type2);

// $('#pro_company'+id).val(json_type);
// }
function saveimages(){
	var data = new Array();
    data[0] = $("#logo").val();
    data[1] = $("#product_id").val();

    $("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'addnewImage', data: data},
			success: function(data){ 
				setTimeout(function(){
					$("#formModal #loading").slideUp(function(){					
						if(parseInt(data)==0){
							$("#formModal #error").slideDown();
							setTimeout(function(){ $("#formModal #error").slideUp(); }, 2000);
						}else{
							$("#formModal #success").slideDown();
							setTimeout(function(){ location.reload(); $("#formModal").modal('toggle'); }, 2000);
						}
					});
				},2000);
			}
		});


}

function editFormevent(id){
   var flag = 0;
	var data = new Array();

	data[0] = $("#title"+id).val();
	if(data[0]==''){ $("#title"+id).parent().addClass('has-error'); flag=1; }else{ $("#title"+id).parent().removeClass('has-error'); flag=0; }
	
	data[1] = $("#date"+id).val();
	if(data[1]==''){ $("#date"+id).parent().addClass('has-error'); flag=1; }else{ $("#date"+id).parent().removeClass('has-error'); flag=0; }
	
	data[2] = $("#time"+id).val();
	if(data[2]==''){ $("#time"+id).parent().addClass('has-error'); flag=1; }else{ $("#time"+id).parent().removeClass('has-error'); flag=0; }
	
	data[3] = $("#location"+id).val();
	if(data[3]==''){ $("#location"+id).parent().addClass('has-error'); flag=1; }else{ $("#location"+id).parent().removeClass('has-error'); flag=0; }
	
	data[4] = $("#category_id"+id).val();
	if(data[4]==''){ $("#category_id"+id).parent().addClass('has-error'); flag=1; }else{ $("#category_id"+id).parent().removeClass('has-error'); flag=0; }
	

	data[5] = $("#desc"+id).val();
	if(data[5]==''){ $("#desc"+id).parent().addClass('has-error'); flag=1; }else{ $("#desc"+id).parent().removeClass('has-error'); flag=0; }
	
  if(flag==1){ return; }
     
  $('#loading'+id).slideDown();
  $.ajax({
	url:'handler.php',
	type:'post',
	data:{data: data , op: 'editevents' , id : id },
	success: function(res){
		if(res == 1){
			$('#loading'+id).slideUp(function(){
				$("#success"+id).slideDown();
			});

		setTimeout(function(){
			
            $('#success'+id).hide(500);
			$("#formModal"+id).modal('toggle');
			
		$("#success"+id).hide();
		location.reload();
		},2000);

		}else{
			$('#loading'+id).slideUp(function(){
           setTimeout(function() {
           	$('#error'+id).slideDown();

           }, 2000);
           });
		}
	}
});
}

function editFormproduct(id){
   var flag = 0;
	var data = new Array();

	data[0] = $("#name"+id).val();
	if(data[0]==''){ $("#name"+id).parent().addClass('has-error'); flag=1; }else{ $("#name"+id).parent().removeClass('has-error'); flag=0; }
	
	data[1] = $("#model"+id).val();
	if(data[1]==''){ $("#model"+id).parent().addClass('has-error'); flag=1; }else{ $("#model"+id).parent().removeClass('has-error'); flag=0; }
	
	data[2] = $("#video"+id).val();
	if(data[2]==''){ $("#video"+id).parent().addClass('has-error'); flag=1; }else{ $("#video"+id).parent().removeClass('has-error'); flag=0; }
	
	data[3] = $("#category_id"+id).val();
	if(data[3]==''){ $("#category_id"+id).parent().addClass('has-error'); flag=1; }else{ $("#category_id"+id).parent().removeClass('has-error'); flag=0; }
	
	data[4] = $("#Manufacturer_id"+id).val();
	if(data[4]==''){ $("#Manufacturer_id"+id).parent().addClass('has-error'); flag=1; }else{ $("#Manufacturer_id"+id).parent().removeClass('has-error'); flag=0; }
	

	data[5] = $("#description"+id).val();
	if(data[5]==''){ $("#description"+id).parent().addClass('has-error'); flag=1; }else{ $("#description"+id).parent().removeClass('has-error'); flag=0; }
	
	data[6] = $("#fullDesc"+id).val();
	if(data[6]==''){ $("#fullDesc"+id).parent().addClass('has-error'); flag=1; }else{ $("#fullDesc"+id).parent().removeClass('has-error'); flag=0; }
	
  if(flag==1){ return; }
     
  $('#loading'+id).slideDown();
  $.ajax({
	url:'handler.php',
	type:'post',
	data:{data: data , op: 'editproduct' , id : id },
	success: function(res){
		if(res == 1){
			$('#loading'+id).slideUp(function(){
				$("#success"+id).slideDown();
			});

		setTimeout(function(){
			
            $('#success'+id).hide(500);
			$("#formModal"+id).modal('toggle');
			
		$("#success"+id).hide();
		location.reload();
		},2000);

		}else{
			$('#loading'+id).slideUp(function(){
           setTimeout(function() {
           	$('#error'+id).slideDown();

           }, 2000);
           });
		}
	}
});
}  

function loginin(){

  var data = new Array();
  data[0]  = $("#mobile").val();
  data[1]  = $("#password").val();
  $.ajax({
    url: 'handler.php',
    type: 'post',
    data:{data: data , op: 'loginin'},
    success: function(res){
       if(res == 1){
        window.location.assign("index.php");
       }else{
        $("#login_fail").slideDown();
        setTimeout(function(){
          $("#login_fail").slideUp();
        },2000);
       }
    }
  });
  }
  function logouttt(){
  $.ajax({
    url:'handler.php',
    type:'post',
    data:{op:'logouttt'},
    success: function(res){
        location.reload();

      
    }
  });
}
function addchecksize(id){
	var sizes = new Array();
	$(".size").each(function(){	
		if($(this).is(':checked')){
			sizes.push(this.value);
		}
	});
       var json_sizes =  JSON.stringify(sizes);

$('#size_id').val(json_sizes);
}
function accesslocation() {
   	var flag = 0;
	var data = new Array();
	data[0] = $("#longitude").val();
	if(data[0]==''){ $("#longitude").parent().addClass('has-error'); flag=1; }else{ $("#longitude").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#latitude").val();
	if(data[1]==''){ $("#latitude").parent().addClass('has-error'); flag=1; }else{ $("#latitude").parent().removeClass('has-error'); flag=0; }
	
	if(flag==1){ return; }
	// $("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'updateLocation', data: data},
			success: function(data){ 
				if(data == 1){location.reload();}else{alert('Some Thing Wrong !!!');}
			}
		});
}
function saveteam(){
     	var flag = 0;
	var data = new Array();
	data[0] = $("#formModal #name").val();
	if(data[0]==''){ $("#formModal #name").parent().addClass('has-error'); flag=1; }else{ $("#formModal #name").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#formModal #logo").val();
	if(data[1]==''){ $("#formModal #logo").parent().addClass('has-error'); flag=1; }else{ $("#formModal #logo").parent().removeClass('has-error'); flag=0; }
	
	data[2] = $("#formModal #position").val();
	if(data[2]==''){ $("#formModal #position").parent().addClass('has-error'); flag=1; }else{ $("#formModal #position").parent().removeClass('has-error'); flag=0; }
	
    data[3] = $("#formModal #contactNo").val();
	if(data[3]==''){ $("#formModal #contactNo").parent().addClass('has-error'); flag=1; }else{ $("#formModal #contactNo").parent().removeClass('has-error'); flag=0; }
	
	data[4] = $("#formModal #email").val();
	if(data[4]==''){ $("#formModal #email").parent().addClass('has-error'); flag=1; }else{ $("#formModal #email").parent().removeClass('has-error'); flag=0; }
	
	if(flag==1){ return; }
	$("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'saveteam', data: data},
			success: function(data){ //alert(data);
				setTimeout(function(){
					$("#formModal #loading").slideUp(function(){					
						if(parseInt(data)==0){
							$("#formModal #error").slideDown();
							setTimeout(function(){ $("#formModal #error").slideUp(); }, 2000);
						}else{
							$("#formModal #success").slideDown();
							setTimeout(function(){ location.reload(); $("#formModal").modal('toggle'); }, 2000);
						}
					});
				},2000);
			}
		});	
}


function addnewproduct(){
	var flag = 0;
	var data = new Array();
	data[0] = $("#formModal #name").val();
	if(data[0]==''){ $("#formModal #name").parent().addClass('has-error'); flag=1; }else{ $("#formModal #name").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#formModal #logo").val();
	if(data[1]==''){ $("#formModal #file").parent().addClass('has-error'); flag=1; }else{ $("#formModal #file").parent().removeClass('has-error'); flag=0; }

	data[4] = $("#formModal #pro_company").val();
	if(data[4]==''){ $("#formModal #pro_company").parent().addClass('has-error'); flag=1; }else{ $("#formModal #pro_company").parent().removeClass('has-error'); flag=0; }
	
	data[5] = $("#formModal #manufacturer_id").val();
	if(data[5]==''){ $("#formModal #manufacturer_id").parent().addClass('has-error'); flag=1; }else{ $("#formModal #manufacturer_id").parent().removeClass('has-error'); flag=0; }
	
	data[6] = $("#formModal #description").val();
	if(data[6]==''){ $("#formModal #description").parent().addClass('has-error'); flag=1; }else{ $("#formModal #description").parent().removeClass('has-error'); flag=0; }
	
	data[7] = $("#formModal #video").val();
	if(data[7]==''){ $("#formModal #video").parent().addClass('has-error'); flag=1; }else{ $("#formModal #video").parent().removeClass('has-error'); flag=0; }
	
	data[8] = $("#formModal #model").val();
	if(data[8]==''){ $("#formModal #model").parent().addClass('has-error'); flag=1; }else{ $("#formModal #model").parent().removeClass('has-error'); flag=0; }
	
	data[9] = $("#formModal #fullDesc").val();
	if(data[9]==''){ $("#formModal #fullDesc").parent().addClass('has-error'); flag=1; }else{ $("#formModal #description").parent().removeClass('has-error'); flag=0; }
	
	data[10] = $("#formModal #category_id").val();
	if(data[10]==''){ $("#formModal #category_id").parent().addClass('has-error'); flag=1; }else{ $("#formModal #category_id").parent().removeClass('has-error'); flag=0; }

	if(flag==1){ return; }
	alert(data[5]);
	$("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'saveproduct', data: data},
			success: function(data){ //alert(data);
				setTimeout(function(){
					$("#formModal #loading").slideUp(function(){					
						if(parseInt(data)==0){
							$("#formModal #error").slideDown();
							setTimeout(function(){ $("#formModal #error").slideUp(); }, 2000);
						}else{
							$("#formModal #success").slideDown();
							setTimeout(function(){ location.reload(); $("#formModal").modal('toggle'); }, 2000);
						}
					});
				},2000);
			}
		});
}
function addnewdocument(){
	var flag = 0;
	var data = new Array();
	data[0] = $("#addnewdocument #name").val();
	if(data[0]==''){ $("#addnewdocument #name").parent().addClass('has-error'); flag=1; }else{ $("#addnewdocument #name").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#addnewdocument #logo").val();
	if(data[1]==''){ $("#addnewdocument #logo").parent().addClass('has-error'); flag=1; }else{ $("#addnewdocument #logo").parent().removeClass('has-error'); flag=0; }
	if(flag==1){ return; }
	data[2] = $('#addnewdocument #documentprodid').val();
	$("#addnewdocument #loading").slideDown();
	$.ajax({
		async: true,
		type: 'post',
		url: 'handler.php',
		data: {op:'newdocument', data: data},
		success: function(data){	
			setTimeout(function(){
				$("#addnewdocument #loading").slideUp(function(){					
					if(data== 0){
						$("#addnewdocument #error").slideDown();
						setTimeout(function(){ $("#addnewdocument #error").slideUp(); }, 2000);
					}else{
						$("#addnewdocument #success").slideDown();
						setTimeout(function(){ $("#modal").modal('toggle'); location.reload(); }, 2000);
					}
				});
			},2000);
		}
	});
}

function updateprofileimage(id){
	var flag = 0;
	var data = new Array();
	data[0] = $("#updateprofileimage #logo").val();
	if(data[0]==''){ $("#updateprofileimage #logo").parent().addClass('has-error'); flag=1; }else{ $("#updateprofileimage #logo").parent().removeClass('has-error'); flag=0; }
	if(flag==1){ return; }
	$("#updateprofileimage #loading").slideDown();
	$.ajax({
		async: true,
		type: 'post',
		url: 'handler.php',
		data: {op:'updateprofilimage', id: id ,data: data},
		success: function(data){	
			setTimeout(function(){
				$("#updateprofileimage #loading").slideUp(function(){					
					if(data== 0){
						$("#updateprofileimage #error").slideDown();
						setTimeout(function(){ $("#updateprofileimage #error").slideUp(); }, 2000);
					}else{
						$("#updateprofileimage #success").slideDown();
						setTimeout(function(){ $("#modal").modal('toggle'); location.reload(); }, 2000);
					}
				});
			},2000);
		}
	});
}

function addnewaccessoryy(){
	var flag = 0;
	var data = new Array();
	data[0] = $("#addnewacess #name").val();
	if(data[0]==''){ $("#addnewacess #name").parent().addClass('has-error'); flag=1; }else{ $("#addnewacess #name").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#addnewacess #logo").val();
	if(data[1]==''){ $("#addnewacess #logo").parent().addClass('has-error'); flag=1; }else{ $("#addnewacess #logo").parent().removeClass('has-error'); flag=0; }
	if(flag==1){ return; }
	data[2] = $('#addnewacess #prodid').val();
	$("#addnewacess #loading").slideDown();
	$.ajax({
		async: true,
		type: 'post',
		url: 'handler.php',
		data: {op:'newaccessor', data: data},
		success: function(data){	
			setTimeout(function(){
				$("#addnewacess #loading").slideUp(function(){					
					if(data== 0){
						$("#addnewacess #error").slideDown();
						setTimeout(function(){ $("#addnewacess #error").slideUp(); }, 2000);
					}else{
						$("#addnewacess #success").slideDown();
						setTimeout(function(){ $("#modal").modal('toggle'); location.reload(); }, 2000);
					}
				});
			},2000);
		}
	});
}


function saveForm(){
	var i = 0;
	var flag = 0;
	var data = new Array();
	var table = $("#formModal").attr('table');
	$("#formModal #formBody :input").each(function(){
		var value = $(this).val();
		if(value=='' && $(this).attr('req')=='1'){
			$(this).parent().addClass('has-error');
			flag = 1;
		}else{
			if($(this).attr('req')=='1'){ $(this).parent().removeClass('has-error'); }
			data[i] = $(this).attr('id');
			data[i+1] = value;
			i+=2;
		}
	});
	
	if(flag==0){
		$("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'insert', table: table, data: data},
			success: function(data){ //alert(data);
				setTimeout(function(){
					$("#formModal #loading").slideUp(function(){					
						if(parseInt(data)==0){
							$("#formModal #error").slideDown();
							setTimeout(function(){ $("#formModal #error").slideUp(); }, 2000);
						}else{
							$("#formModal #success").slideDown();
							setTimeout(function(){ location.reload(); $("#formModal").modal('toggle'); }, 2000);
						}
					});
				},2000);
			}
		});
	}
}
function updateuserinfo(id){
    var flag = 0;
	var data = new Array();
	data[0] = $("#formModal #name").val();
	if(data[0]==''){ $("#formModal #name").parent().addClass('has-error'); flag=1; }else{ $("#formModal #name").parent().removeClass('has-error'); flag=0; }
	data[1] = $("#formModal #job").val();
	if(data[1]==''){ $("#formModal #job").parent().addClass('has-error'); flag=1; }else{ $("#formModal #job").parent().removeClass('has-error'); flag=0; }
	
	data[2] = $("#formModal #mobile").val();
	if(data[2]==''){ $("#formModal #mobile").parent().addClass('has-error'); flag=1; }else{ $("#formModal #mobile").parent().removeClass('has-error'); flag=0; }
	
    
	if(flag==1){ return; }
	$("#formModal #loading").slideDown();
		$.ajax({
			async: true,
			type: 'post',
			url: 'handler.php',
			data: {op:'updateuserprofile', id: id ,data: data},
			success: function(data){ //alert(data);
				setTimeout(function(){
					$("#formModal #loading").slideUp(function(){					
						if(parseInt(data)==0){
							$("#formModal #error").slideDown();
							setTimeout(function(){ $("#formModal #error").slideUp(); }, 2000);
						}else{
							$("#formModal #success").slideDown();
							setTimeout(function(){ location.reload(); $("#formModal").modal('toggle'); }, 2000);
						}
					});
				},2000);
			}
		});		
}

function newaccess(id){
	$("#addnewacess #prodid").val(id);
	$("#addnewacess").modal('toggle');
}

function newdocument(id){
	$("#addnewdocument #documentprodid").val(id);
	$("#addnewdocument").modal('toggle');
}


function savejopreq(){

    
	var flag = 0;
	var data = new Array();
	data[0] = $('#name').val();
    if(data[0]==''){ $("#name").parent().addClass('has-error'); flag=1; }else{ $("#name").parent().removeClass('has-error'); }
    

	data[1] = $('#phone').val();
    if(data[1]==''){ $("#phone").parent().addClass('has-error'); flag=1; }else{ $("#phone").parent().removeClass('has-error'); }

	data[2] = $('#email').val();
    if(data[2]==''){ $("#email").parent().addClass('has-error'); flag=1; }else{ $("#email").parent().removeClass('has-error'); }

	data[3] = $('#image').val();
    if(data[3]=='' || typeof data[3] === 'undefined'){ $("#file").parent().addClass('has-error'); flag=1; }else{ $("#file").parent().removeClass('has-error'); }
    
    if(flag == 1){ return ;}
   
   $("#loading").slideDown();
	$.ajax({
		url:'handler.php',
		type:'post',
		data:{data: data , op: 'savejopreq'},
		success: function(res){
			if(res != 0){
				$("#loading").slideUp(function(){
					$("#success").slideDown();
					setTimeout(function(){
						$("#success").slideUp();
						location.reload();
					},2000);
				});
			}else{

				$("#loading").slideUp(function(){
					$("#error").slideDown();
					setTimeout(function(){
						$("#error").slideUp();
					},2000);
				});

			}

		}
	});

	$.ajax({
		url:'sendmail.php',
		type:'post',
		data:{data: data , op: 'savejopreq'},
		success: function(res){
         alert(res); 			
 
		}
	});

}

function savejopreqar(){

    
	var flag = 0;
	var data = new Array();
	data[0] = $('#name').val();
    if(data[0]==''){ $("#name").parent().addClass('has-error'); flag=1; }else{ $("#name").parent().removeClass('has-error'); }
    

	data[1] = $('#phone').val();
    if(data[1]==''){ $("#phone").parent().addClass('has-error'); flag=1; }else{ $("#phone").parent().removeClass('has-error'); }

	data[2] = $('#email').val();
    if(data[2]==''){ $("#email").parent().addClass('has-error'); flag=1; }else{ $("#email").parent().removeClass('has-error'); }

	data[3] = $('#image').val();
    if(data[3]=='' || typeof data[3] === 'undefined'){ $("#file").parent().addClass('has-error'); flag=1; }else{ $("#file").parent().removeClass('has-error'); }
    // alert(data[3]);return;
    if(flag == 1){ return ;}
   
   $("#loading").slideDown();
	$.ajax({
		url:'../handler.php',
		type:'post',
		data:{data: data , op: 'savejopreq'},
		success: function(res){
			if(res != 0){
				$("#loading").slideUp(function(){
					$("#success").slideDown();
					setTimeout(function(){
						$("#success").slideUp();
						location.reload();
					},2000);
				});
			}else{

				$("#loading").slideUp(function(){
					$("#error").slideDown();
					setTimeout(function(){
						$("#error").slideUp();
					},2000);
				});

			}

		}
	});

	$.ajax({
		url:'../sendmail.php',
		type:'post',
		data:{data: data , op: 'savejopreq'},
		success: function(res){
         alert(res); 			
 
		}
	});
}


function savemanufact(){

	$("#loading").slideDown();
	var data = new Array();
	data[0] = $('#name').val();
	data[1] = $('#logo').val();

	$.ajax({
		url:'handler.php',
		type:'post',
		data:{data: data , op: 'saveman'},
		success: function(res){
			if(res != 0){
				$("#loading").slideUp(function(){
					$("#success").slideDown();
					setTimeout(function(){
						$("#success").slideUp();
						location.reload();
					},2000);
				});
			}else{

				$("#loading").slideUp(function(){
					$("#error").slideDown();
					setTimeout(function(){
						$("#error").slideUp();
					},2000);
				});

			}

		}
	});

}
function delRow(table, rowid){
	$("#list #r"+rowid).addClass('danger');
	setTimeout(function(){
		var conf = confirm("Confirm delete this item?");
		if(conf==true){
			$.ajax({
				async: true,
				type: 'post',
				url: 'handler.php',
				data: {op:'delRow', table: table, data: rowid},
				success: function(data){
					if(parseInt(data)==1){
						$("#list #r"+rowid).remove();
					}else{
						$("#list #r"+rowid).removeClass('danger');
					}
				}
			});
		}else{
			$("#list #r"+rowid).removeClass('danger');
		}
	},100);
}