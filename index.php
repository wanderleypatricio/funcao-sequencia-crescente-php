<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sequência Crescente</title>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/javascript">
            $(document).on('click', "#btnEnviarDados", function () {
                var vetor = $("#vetor").val();
                var url = "sequenciaCrescente.php";
                var data = {vetor:vetor};
                $.post(
                 url, //Required URL of the page on server
                 data,
                 function(response,status)
                 {
                   // tratando o status de retorno. Sucesso significa que o envio e retorno foi executado com sucesso.
                   if(status == "success")
                   {
                     
                      console.log(response);
                     $("#result").html(
                       "resultado: " + response
                       
                     );
                   }    	
                 },
                );
            });
        </script>
    </head>
    <body>
        <h2>Sequência Crescente</h2>
        <h3>Informe uma sequência de números inteiros separados por virgula.</h3>
        <input id="vetor" type="text" name="vetor"/>
        <input id="btnEnviarDados" type="button" value="Enviar"/>
        
        <div id="result">
            
        </div>
    </body>
</html>
