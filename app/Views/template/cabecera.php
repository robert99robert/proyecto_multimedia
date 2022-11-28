<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

    
    <link rel="stylesheet" href="./css/jquery.dataTables.min.css">
    <script src="./js/jquery.dataTables.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" integrity="sha512-OD9Gn6cAUQezuljS6411uRFr84pkrCtw23Hl5TYzmGyD0YcunJIPSBDzrV8EeCiFxGWWvtJOfVo5pOgB++Jsag==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>

    <script type="text/javascript">
      function confirmarBorrado(){
        var respuesta = confirm("¿Deseas borrar este registro?");
        if(respuesta == true){
          return true;
        }
        else{
          return false;
        }
      }
    
    </script>
    <script type="text/javascript">
      function confirmarEditado(){
        var respuesta = confirm("¿Deseas editar este registro?");
        if(respuesta == true){
          return true;
        }
        else{
          return false;
        }
      }
    
    </script>

  <!--Scripts para el uso de QRs-->

  <link rel="stylesheet" href="../public/css/jqx.base.css" type="text/css"/>
  <script type="text/javascript" src="../public/js/jqxcore.js"></script>
	<script type="text/javascript" src="../public/js/jqxbarcode.js"></script>
	<script type="text/javascript" src="../public/js/jqxqrcode.js"></script>
	<script type="text/javascript" src="../public/js/jqxbuttons.js"></script>
	<script type="text/javascript" src="../public/js/demos.js"></script>
	<script type="text/javascript">
		window.onload = function () {
			const qrcodes = [...document.querySelectorAll('.qrcode')];
			for (let i = 0; i < qrcodes.length; i++) {
				const qrcodeElement = qrcodes[i];
				const renderAs = qrcodeElement.getAttribute('render-as') || 'svg';
				const displayLabel = qrcodeElement.hasAttribute('display-label') ? true : false;
				const value = qrcodeElement.getAttribute('value');
				const labelPosition = qrcodeElement.getAttribute('label-position') || 'bottom';
				const errorLevel = qrcodeElement.getAttribute('error-level') || 'L';
				const embedImage = qrcodeElement.getAttribute('embed-image') || '';
				// create Barcode component
				new jqxQRcode(qrcodeElement, {
					renderAs: renderAs,
					value: value,
					errorLevel: errorLevel,
					labelPosition: labelPosition,
					embedImage: embedImage,
					imageWidth: 40,
					imageHeight: 60,
					displayLabel: displayLabel
				});
			}
		}
	</script>
  <!---->

  </head>
<style>

  body{
    background-image:url(https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1593204479-flavor-paper-wallpaper-1593204447.png);
  }
  .center {
  margin: auto;
  width: 60%;
  padding: 10px;
}
  
</style>
<body>

  
  <div class="container">