<html>

<link href="css/form_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/form.js"></script>
<script src="scripts/jquery-1.8.3.js"></script>
<script src="scripts/jquery-ui.js"></script>


<body>
<div class="style">
<form class="form-style-4" method="POST" name="f_nuevo" id="f_nuevo" onSubmit="mensaje('insert.php'); return false">
    <div>
	<p>[INSERTAR DATOS EN NAGIOS]<p>
	
		<label for="tipo">Tipo Archivo:</label>
        <select id="tipo" name="tipo_archivo">
		
			<option value="" selected="selected">- Selecciona un Archivo -</option>
			<option value="cfg/windows.cfg">windows.cfg</option>
			<option value="cfg/wifi.cfg">wifi.cfg</option>
			<option value="cfg/apwifi.cfg">apwifi.cfg</option>
			<option value="cfg/compu.cfg">compu.cfg</option>
		
		</select>
		
		<p>
	
        <label for="name">Use:</label>
        <input type="text" name="use" id="use" autocomplete="off" />
		
		<p>
   
        <label for="mail">Host Name:</label>
        <input type="text" name="hostname" id="hostname" autocomplete="off" />
		
		<p>
   
        <label for="msg">Alias:</label>
        <input type="text" name="alias" id="alias" autocomplete="off" />
		
		<p>
		
		<label for="msg">Address:</label>
        <input type="text" name="address" id="address" autocomplete="off" />
		
		<p>
		
		<label for="msg">Parents:</label>
        <input type="text" name="parents" id="parents" autocomplete="off" />
		
		<p>
		
		<label for="msg">Icon Image:</label>
        <input type="text" name="iconimage" id="iconimage" autocomplete="off"/>
		
		<p>
		
		<label for="msg">Status:</label>
        <input type="text" name="estatus" id="estatus" autocomplete="off" />
		
		<p>
		
		<label for="msg">Notes:</label>
        <input type="text" name="notes" id="notes" autocomplete="off" />
		
		<p>
		
		<input type="submit" value="Enviar"/>
		<input type="reset" value="Borrar"/>
	
</form>



 <div class="ok">        Operacion correcta.    </div>
 <div class="error">     Operacion invalida.    </div>
 <div class="enc" id="enc">     
 
 El hostname ya esxiste.
		
<button onclick="mod('test.php');return false;">Mostrar</button>


 </div>
    

</div>

</body>

</html>