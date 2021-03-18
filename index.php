<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <style>
            .container {
                margin-bottom: 20px;
            }
        </style>
        <script>
            $(document).ready(function() {
                $("#processarSoma").click(function() {
                    $("#resultadoSoma").text( parseInt($("#campo1Soma").val()) + parseInt($("#campo2Soma").val()) )
                })

                $("#processarSubtracao").click(function() {
                    $("#resultadoSubtracao").text( parseInt($("#campo1Subtracao").val()) - parseInt($("#campo2Subtracao").val()) )
                })

                $("#processarMultiplicacao").click(function() {
                    $("#resultadoMultiplicacao").text( parseInt($("#campo1Multiplicacao").val()) * parseInt($("#campo2Multiplicacao").val()) )
                })

                $("#processarDivisao").click(function() {
                    $("#resultadoDivisao").text( parseInt($("#campo1Divisao").val()) / parseInt($("#campo2Divisao").val()) )
                })

            });
        </script>

    </head>
    <body>
        <div>
            <div id="containerSoma" class="container">
                Soma:
                <input type="text" name="campo1Soma" id="campo1Soma" />
                +
                <input type="text" name="campo2Soma" id="campo2Soma" />
                =
                <span id="resultadoSoma"></span>
                <input type="button" id="processarSoma" value="Processar" />
            </div>
            <div id="containerSubtracao" class="container">
                Subtração:
                <input type="text" name="campo1Subtracao" id="campo1Subtracao" />
                -
                <input type="text" name="campo2Subtracao" id="campo2Subtracao" />
                =
                <span id="resultadoSubtracao"></span>
                <input type="button" id="processarSubtracao" value="Processar" />
            </div>
            <div id="containerMultiplicacao" class="container">
                Multiplicação:
                <input type="text" name="campo1Multiplicacao" id="campo1Multiplicacao" />
                +
                <input type="text" name="campo2Multiplicacao" id="campo2Multiplicacao" />
                =
                <span id="resultadoMultiplicacao"></span>
                <input type="button" id="processarMultiplicacao" value="Processar" />
            </div>
            <div id="containerDivisao" class="container">
                Divisão:
                <input type="text" name="campo1Divisao" id="campo1Divisao" />
                /
                <input type="text" name="campo2Divisao" id="campo2Divisao" />
                =
                <span id="resultadoDivisao"></span>
                <input type="button" id="processarDivisao" value="Processar" />
            </div>
        </div>
    </body>
</html>
