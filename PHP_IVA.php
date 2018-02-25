<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP IVA </title>
    </head>
    <body>
        <form action='PHP_IVA.php' method='post'>
        Primer Numero: <input type='text' name='num1'>
        Segundo Numero: <input type="text" name="num2" value="">
        <input value="Sumar" type="submit" />
        </form>
            
        <table style="width:100%">
            <tr>
                <th>PRIMER NUMERO</th>
                <th>SEGUNDO NUMERO</th> 
                <th>LA SUMA ES</th>
                <th>WEB_SERVICE IVA</th>
            </tr>
            
        

        <?php
            try {
            $wsdl_url = 'http://localhost:8080/Calculadora_Iva_Servidor/Operacion?WSDL';
            $client = new SOAPClient($wsdl_url);
            $num1 = filter_input(INPUT_POST,'num1');
            $num2 = filter_input(INPUT_POST,'num2');
            
            $suma = $num1 + $num2;
            $params = array('q' => "$suma",
            );
            $respuesta = $client->Calcular($params);
            echo '<pre>';
            print_r($respuesta);
            echo '</pre>';
        } catch (Exception $e) {
            echo "Exception occured: " . $e;
        }

        echo
        '<TR>' .
        '<TH>' .$num1 . '</TH>'.
        '<TH>' .$num2 . '</TH>'.
        '<TH>' .$suma . '</TH>';
        
        
        ?>
            

   </table>

</body>
</html>
