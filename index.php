<?php
    session_start();
     
    if(empty($_SESSION["SiteDili"])) {
        include("langtr.php"); //Varsayılan dil
    }else{
        if($_SESSION["SiteDili"] == "TR"){
            include("langtr.php");
        }
        elseif ($_SESSION["SiteDili"] == "EN"){
            include("langen.php");
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table width="1000" align="center" border="0">
        <tr height="40">
            <td width="130"><?php echo ANASAYFA; ?></td>
            <td width="135"><?php echo HAKKIMDA; ?></td>
            <td width="130"><?php echo ILETISIM; ?></td>
            <td width="373"><?php echo URUNLER; ?></td>
            <td width="190"><a href="./choice.php?LangChoice=TR" style="color: black; text-decoration: none;">TR</a> | <a href="./choice.php?LangChoice=EN" style="color: black; text-decoration: none;">EN</a></td>
        </tr>
    </table>
    
</body>
</html>