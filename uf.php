<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title> Estados Brasileiros e suas Regioes </title>
</head>
<body>
<div>
    <?php
    $est = isset($_GET ["est"])?$_GET ["est"]:0;
    switch ($est) {
        case "sul":
            $reg = "Região Sul";
            break;
        case "sud":
            $reg = "Região Sudeste";
            break;
        case "ne":
            $reg = "Região Nordeste";
            break;
        case "no":
            $reg = "Região Norte";
            break;
        case "co":
            $reg = "Região Centro Oeste";
    }
    echo "Você está na <span class='foco'>$reg</span>";
    ?>
    <br/><br/><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>﻿

19




</div>
</body>
</html>
 