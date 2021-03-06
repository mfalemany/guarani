<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Certificado</title>

	<style>
		*{
			font-family: "Times New Roman", Times, serif;
		}
		body{
		}
		#contenedor{
			width: 215.9mm;
			height: 250.4mm;
			margin: auto;
			background-color: #FFFFFF;
			padding-top: 7mm;
		}
		#destinatario{
			font-weight: bolder;
			font-size: 1.1em;
			font-style: italic;
			line-height: 0.2em;
			margin: 10mm 0mm 0mm 30mm;
		}
		#cuerpo{
			margin: 9mm 0mm 0mm 0mm;
			padding: 0mm 20mm 0mm 20mm;
		}
		#cuerpo p{
			text-indent: 70mm;
			word-wrap: break-word;
			line-height: 10mm;
			text-align: justify;
			font-style: italic;
		}
		#firma{
			padding: 0mm 30mm 0mm 30mm;
		}
		#firma p{
			text-align: right;
		}
		#linea_firma{
			margin-top: 20mm;
		}
		#autor{
			font-size: 0.8em;
			margin: 15mm 0mm 0mm 30mm;
			font-style: italic;
		}
		#firma_director{
			position: relative;
			top: 135px;
			left: 380px;
		}
		#sello_director{
			position: relative;
			left: 430px;
		}
		
	</style>
	<?php extract($_GET); ?>
	<?php $meses = array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'); ?>
	<?php $modalidad = ($modalidad == 'pasantia')? 'pasant&iacute;a':'tesina';  ?>
</head>
<body>
	<div id="contenedor">
		<center><img src="<?php echo base_url(); ?>assets/img/perm/logo_encabezado_2020.png" alt="Facultad de Ciencias Agrarias - UNNE" width='600mm' height="100mm;"></center>
		<div id="destinatario">
			<p>Señor Decano</p>
			<p>Ing. Agr. (Dr.) Mario Hugo Urbani</p>
			<p><u>S&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;D</u></p>
		</div>
		<div id="cuerpo">
			<p>
			Cumplo en informar a Usted que <b> <?php echo ($sexo == '1')? 'el Sr.':'la Srta.'; ?> <?php echo strtoupper(str_replace(array("_","-N-"),array(" ","Ñ"),$apellido)); ?>, <?php echo ucwords(strtolower(str_replace(array("_","-N-"),array(" ","ñ"),$nombres))); ?> (D.N.I.: <?php echo substr($dni, 0,2).".".substr($dni, 2,3).".".substr($dni, 5,3); ?>), <?php echo ($sexo == '1')? 'alumno':'alumna'; ?> 
			<?php echo ($sexo == '1')? 'activo':'activa'; ?> – regular</b> se encuentra en condiciones de rendir el 
			<b>T</b>rabajo <b>F</b>inal de <b>G</b>raduación <b>(<?php echo ucfirst(strtolower($modalidad)); ?>)</b> al tener aprobada la totalidad de las asignaturas de la carrera.-
			</p>
			<p>Sirva la presente de atenta nota.-</p>
		</div>
		<div id="firma">
			<p><b><i>Dirección Gestión Estudios</b>, <?php echo date('d'); ?> de <?php echo $meses[date('n')-1]; ?> de <?php echo date("Y"); ?>.-</i></p>
			<img src="<?php echo base_url(); ?>/assets/img/perm/firma_director.png" id="firma_director">
			<p id="linea_firma">______________________</p>
			<img src="<?php echo base_url(); ?>/assets/img/perm/sello_director.png" id="sello_director">
		</div>
		<div id="autor">
			<?php 
				if(isset($autor)){
					for($i = 0; $i < strlen($autor); $i++ ){
						echo substr($autor,$i,1)."."; 	
					}	
				}
			?>
		</div>
	</div>
	<?php include("btn_imprimir.html"); ?>
</body>

</html>
