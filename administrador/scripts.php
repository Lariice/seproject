<!-- scripts -->
<script type="text/javascript" src="../js/color.js"></script>
<script type="text/javascript" src="../js/administrador.js"></script>
<script type="text/javascript">
	window.onload = initialize;
	window.onresize = function () { resizeWindow(document) };
	function initialize() {		        
		resizeWindow(document);
	}
</script> 
<script type="text/javascript" src="../js/jquery-1.5.1.js"></script>
<script type="text/javascript" src="../js/jquery.ui.core.js"></script>
<script type="text/javascript" src="../js/jquery.ui.widget.js"></script>
<script type="text/javascript" src="../js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="../js/navigation.js"></script>        
<script type="text/javascript">
	$(function () {
		var dates = $("#from, #to").datepicker
		(
			{
				defaultDate: "+1w",
				changeMonth: true,
				changeYear: true,
				numberOfMonths: 1,

				onSelect: function (selectedDate) {
					var option = this.id == "from" ? "minDate" : "maxDate",
						instance = $(this).data("datepicker"),
						date = $.datepicker.parseDate(
							instance.settings.dateFormat ||
							$.datepicker._defaults.dateFormat,
							selectedDate, instance.settings);
					dates.not(this).datepicker("option", option, date);
				}
			}
		);
	});
</script> 
<script type="text/javascript">
function validarReporte()
{

	if(document.SolicitarRepo.tipo_reporte.selectedIndex==0)
	{
		alert("El tipo de reporte es un campo obligatorio")
		document.SolicitarRepo.tipo_reporte.focus()
		return 0;
	}
	else
	{
		if(document.SolicitarRepo.tipo_reporte.selectedIndex==1)
		{
			window.location='ReporteVentas.php'
		}
		
	}
	
	
}
</script> 
<script type="text/javascript">
function isNew()
{

	if(document.altasProducto.ingrediente.selectedIndex==4)
	{
		window.location='AltasIngrediente.php'
	}
}
</script>
<script type="text/javascript">
function eliEmp(curp)
{
	resp = confirm("\u00bfDesea eliminar el empleado?")
	if(resp== true)
	{

		form = document.createElement('form');
		form.id='elimina';
		form.name='elimina';
		form.method='POST';
		form.action='EliminaEmpleado.php';

		texto=document.createElement('input');
		texto.id='ide';
		texto.name='ide';
		texto.type = 'text';
		texto.value=curp;
		form.appendChild(texto);
		form.submit();
	
	}
	else{
		window.location="GestionEmpleado.php";
	}
}
function modificarEmpleado(renglon){

	form=document.createElement('form');
	form.id='modificar';
	form.name='modificar';
	form.method='post';
	form.action='ModificarEmpleado.php';

	texto=document.createElement('input');
	texto.id='ide';
	texto.name='ide';
	texto.type = 'text';
	texto.value=renglon;
	form.appendChild(texto);
	form.submit();

}
</script> 

<!-- end of scripts -->