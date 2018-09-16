<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>Döviz Kurlarını Çekme</title>
    </head>
    <body style="margin:0 auto; max-width: 500px; padding: 150px; font-family: sans-serif">
        <h3>TCMB Güncel Döviz Kurları</h3>
        <hr>
        <p>
            <strong>Dolar Alış:</strong> <?php echo $dolar_alis; ?><br>
            <strong>Euro Alış:</strong> <?php echo $euro_alis; ?>
        <p>
        <p>
            <strong>Dolar Satış:</strong> <?php echo $dolar_satis; ?><br>
            <strong>Euro Satış:</strong> <?php echo $euro_satis; ?>
        </p>
        <p>
            <strong>Dolar Efektif Alış:</strong> <?php echo $dolar_efektif_alis; ?><br>
            <strong>Euro Efektif Alış:</strong> <?php echo $euro_efektif_alis; ?>
        <p>
        <p>
            <strong>Dolar Efektif Satış:</strong> <?php echo $dolar_efektif_satis; ?><br>
            <strong>Euro Efektif Satış:</strong> <?php echo $euro_efektif_satis; ?>
        </p>
        <hr>
    </body>
</html>