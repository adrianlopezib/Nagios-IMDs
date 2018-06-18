
function objetoAjax(){
        var xmlhttp=false;
        try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
                try {
                   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                        xmlhttp = false;
                }
        }

        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
}

function coincidencia(){
				jtype = document.forms['f_nuevo'].tipo_archivo.value;
				jhost = document.forms['f_nuevo'].hostname.value;
			
				ajax = objetoAjax();
				ajax.open("POST","coincidencia.php", true);
				ajax.onreadystatechange=function(){
				
				if(ajax.readyState==4){
					coin = ajax.responseText.split("|")[0];
					if(coin ==1){
				
				$('#enc').fadeIn();
				//$('.enc').delay();
				//$('.enc').fadeOut();
				
				}else{
					
					insertar();
				}
						
			}	
					
		}
				
			
			
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.send("tipo_archivo="+jtype+"&hostname="+jhost);
				
			
		}
		

function insertar(){
		
	jtype = document.forms['f_nuevo'].tipo_archivo.value;
	juse = document.forms['f_nuevo'].use.value;
	jhost = document.forms['f_nuevo'].hostname.value;
	jalias = document.forms['f_nuevo'].alias.value;
	jaddress = document.forms['f_nuevo'].address.value;
	jparents = document.forms['f_nuevo'].parents.value;
	jicon = document.forms['f_nuevo'].iconimage.value;
	jstatus = document.forms['f_nuevo'].estatus.value;
	jnotes = document.forms['f_nuevo'].notes.value;
		
			ajax = objetoAjax();
			ajax.open("POST","insert.php", true);
			ajax.onreadystatechange=function(){
				
				if(ajax.readyState==4){}
				
				document.forms['f_nuevo'].reset();
				
				
			}
			
			$('.ok').fadeIn();
			$('.ok').delay(1000);
			$('.ok').fadeOut();
			
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.send("tipo_archivo="+jtype+"&use="+juse+"&hostname="+jhost+"&alias="+jalias+"&address="+jaddress+"&parents="+jparents+"&iconimage="+jicon+"&estatus="+jstatus+"&notes="+jnotes);
			
		}
		

function mensaje(){
	
	jtype = document.forms['f_nuevo'].tipo_archivo.value;
	juse = document.forms['f_nuevo'].use.value;
	jhost = document.forms['f_nuevo'].hostname.value;
	jalias = document.forms['f_nuevo'].alias.value;
	jaddress = document.forms['f_nuevo'].address.value;
	jparents = document.forms['f_nuevo'].parents.value;
	jicon = document.forms['f_nuevo'].iconimage.value;
	jstatus = document.forms['f_nuevo'].estatus.value;
	jnotes = document.forms['f_nuevo'].notes.value;
	
	
	if(jtype=="" || juse=="" || jhost=="" || jaddress=="" || jparents==""){
		
		$('.error').fadeIn();
		$('.error').delay(1500);
		$('.error').fadeOut();
		
	}else{
		coincidencia('coincidencia.php');return false;
		}
				
	}	
	

//==========================*****************************======================


function mod(){
				jtypes = document.forms['f_nuevo'].tipo_archivo.value;
				jnombre = document.forms['f_nuevo'].hostname.value;
			
				ajax = objetoAjax();
				ajax.open("POST","test.php", true);
				ajax.onreadystatechange=function(){
				
				if(ajax.readyState==4){
					document.getElementById('use').value = ajax.responseText.split("|")[0];
					document.getElementById('hostname').value = ajax.responseText.split("|")[1];
					document.getElementById('alias').value = ajax.responseText.split("|")[2];
					document.getElementById('address').value = ajax.responseText.split("|")[3];
					document.getElementById('parents').value = ajax.responseText.split("|")[4];					
					document.getElementById('iconimage').value = ajax.responseText.split("|")[5];
					document.getElementById('estatus').value = ajax.responseText.split("|")[6];
					document.getElementById('notes').value = ajax.responseText.split("|")[7];
					$('#enc').fadeOut();
			}	
					
		}
				
	
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.send("type="+jtypes+"&nombreh="+jnombre);
				
			
		}
		
		
//=================================== EFECTS =========================================


function efect(){
	
	ajax = objetoAjax();
				ajax.open("POST","form.php", false);
				ajax.onreadystatechange=function(){
				
				if(ajax.readyState==4){
					
					document.getElementById('container').innerHTML = ajax.responseText;
					
			}	
					
		}
				
	
			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			ajax.send(null);
				
			
		}
	























