<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/web.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/emeritus-general-landing.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/pagos-flexibles.css" rel="stylesheet" type="text/css">
    <link href="../emfavicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="../emfavicon.png" rel="apple-touch-icon">
    <title>Pagos Flexibles | Marketing Digital</title>
</head>
<body>
<?php
//If the HTTPS is not found to be "on"
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on")
{
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    //Prevent the rest of the script from executing.
    exit;
}
?>
  <div class="c-main-admision-flexi fancy-flexi" style="opacity: 1; pointer-events: all;">
    <div class="c-admision-flexi vertica-cent">
      <!--<div class="cerrar-flexi">
        <img src="../assets/img/svg/x.svg" alt="cerrar">
      </div>-->
      <div class="close-flexi">
        <div class="pagos-cont-tittle align fs30">Plan de pagos flexibles</div>
        <div class="pagos-cont-subtittle align fs16">La opción de pagos flexible permite al alumno pagar la cuota del curso en parcialidades.</div>
        <div class="pagos-cont-subtittle align fs16">Esta opción está disponible en la solicitud de inscripción y deberá seleccionarse antes de realizar el pago.</div>
        <div class="pagos-cont-info align fs20">Las siguientes opciones de pago están disponibles para el
          <strong>Curso de Marketing Digital:</strong>
        </div>
        <div class="pagos-cont-one">
          <div class="pago-one-tittle align fs20">Pago total</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>La cuota completa del curso:
            <strong> $1,295 </strong>USD</div>
        </div>
        <div class="pago-linea" style="margin: 20px auto; width: 50%;"></div>
        <div class="pagos-cont-two">
          <div class="pago-one-tittle align fs20">Pago en 2 parcialidades</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>
            La primera parcialidad de
            <strong> $726 </strong>USD se paga al inicio.</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>
            La última parcialidad de
            <strong> $594 </strong>USD a pagar del 22 de Febrero de 2019</div>
          <div class="pago-linea" style="margin: 20px auto; width: 50%;"></div>
        </div>
        <div class="pagos-cont-three">
          <div class="pago-one-tittle align fs20">Pago en 3 parcialidades</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>
            La primera parcialidad de
            <strong> $490 </strong>USD se paga al inicio.</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>
            La segunda parcialidad de
            <strong> $435 </strong>USD a pagar del 22 de Febrero de 2019</div>
          <div class="pago-one-subtittle align fs16">
            <div class="cuadrado-pago"></div>
            La última parcialidad de
            <strong> $435 </strong>USD a pagar del 24 de Marzo de 2019</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>