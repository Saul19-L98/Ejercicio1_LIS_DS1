<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 💰</title>
</head>
<body style="background-color: blanchedalmond;">
    <?php
        if(ISSET($_POST['convert'])){
            $val = $_POST['val'];
            $digit = $_POST['digit'];
            $currency = $_POST['currency'];

            echo"<center><h1>Conversor 💵🤑💰</h1></center>";

            //USD($)
            if($val=="USD" && $currency=="USD"){
                $output = $digit;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: $".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: $".$output."</label></center>";
            }else if($val=="USD" && $currency=="Euro"){
                $output = $digit*0.88;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: $".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: €".$output."</label></center>";
            }else if($val=="USD" && $currency=="Yen"){
                $output = $digit*115.90;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: $".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: ¥".$output."</label></center>";
            }else if($val=="USD" && $currency=="GBP"){
                $output = $digit*0.74;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: $".$digit."</label></center>";
                echo "<center><label style='font-size:25px;'>Equivale a: £".$output."</label></center>";
            }

            //EUR(€)
            else if($val=="Euro" && $currency=="Euro"){
                $output = $digit;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: €".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: €".$output."</label></center>";
            }else if($val=="Euro" && $currency=="USD"){
                $output = $digit*1.14;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: €".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: $".$output."</label></center>";
            }else if($val=="Euro" && $currency=="Yen"){
                $output = $digit*131.02;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: €".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: ¥".$output."</label></center>";
            }else if($val=="Euro" && $currency=="GBP"){
                $output = $digit*0.84;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: €".$digit."</label></center>";
                echo "<center><label style='font-size:25px;'>Equivale a: £".$output."</label></center>";
            }

            //JPY(¥)
            else if($val=="Yen" && $currency=="Yen"){
                $output = $digit;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: ¥".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: ¥".$output."</label></center>";
            }else if($val=="Yen" && $currency=="USD"){
                $output = $digit*0.0087;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: ¥".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: $".$output."</label></center>";
            }else if($val=="Yen" && $currency=="Euro"){
                $output = $digit*0.0076;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: ¥".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: €".$output."</label></center>";
            }else if($val=="Yen" && $currency=="GBP"){
                $output = $digit*0.0064;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: ¥".$digit."</label></center>";
                echo "<center><label style='font-size:25px;'>Equivale a: £".$output."</label></center>";
            }

            //GBP(£)
            else if($val=="GBP" && $currency=="GBP"){
                $output = $digit;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: £".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: £".$output."</label></center>";
            }else if($val=="GBP" && $currency=="USD"){
                $output = $digit*1.36;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: £".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: $".$output."</label></center>";
            }else if($val=="GBP" && $currency=="Euro"){
                $output = $digit*1.19;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: £".$digit."</label></center>";
                echo"<center><label style='font-size:25px;'>Equivale a: €".$output."</label></center>";
            }else if($val=="GBP" && $currency=="Yen"){
                $output = $digit*157.19;
                echo"<center><label style='font-size:25px;'>Cantidad ingresada: £".$digit."</label></center>";
                echo "<center><label style='font-size:25px;'>Equivale a: ¥".$output."</label></center>";
            }
        }
        echo"\t<center><a href=\"index.html\" style='text-decoration-line: none;color:purple;'>Volver 🙌</a></center>\n"
    ?>
    
</body>
</html>