<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Efetuado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        header {
            margin-bottom: 3vw;
        }

        header h1 {
            font-size: 4vw;
            text-align: center;
            color: rgb(96, 248, 248);
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);

        }

        header>h4 {
            color: black;
            margin-bottom: 0;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
            text-align: center;
        }

        body {
            background-image: url(https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/Pantanal_Mato_Grosso_Brasil.png);
            background-size: 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;

        }

        .fim {
            display: flex;
            flex-direction: column;
            margin: auto;
            margin-top: -2vw;
            margin-bottom: 30px;
            padding: 4vw;
            background-color: rgba(170, 170, 170, 0.589);
            max-width: 600px;
            max-height: 1050px;
            width: 55vw;
            height: 35vw;
            border-radius: 1vw;
            border: 2vw 2vw 2vw solid black;
        }

        form>h1 {
            color: aliceblue;
            font-size: 2vw;
            text-align: center;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        img {
            max-height: 100vw;
            height: 13vw;
            max-width: 100vw;
            width: 13vw;
            align-self: center;
            margin: 2vw;
            
        }

        h5 {
            font-size: 1.2vw;
            text-align: center;
            margin: auto;
            margin-top: 0;
            margin-bottom: 1vw;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
        }

        a {
            max-width: 200vw;
            width: 6vw;
            max-height: 100vw;
            height: 1.7vw;
            font-size: 1vw;
            display: block;
            margin: auto;
            margin-top: 1vw;
            margin-bottom: 0;
            padding-top: 0.3vw;
            border-radius: 1vw;
            text-decoration: none;
            text-align: center;
            color: black;
            background-color: aliceblue;
        }

        a:hover {
            background-color: rgb(11, 48, 94);
            color: azure;
        }

        .dados {
            display: flex;
            margin: auto;
            border: 1px solid black;
            border-radius: 5px;
            color: aliceblue;
            text-shadow: 3px 3px 7px rgb(0, 0, 0, 0.5);
            margin-top: 20px;
            padding: 10px;
            line-height: 150%;
            text-align: center;
            background-color: rgb(68, 68, 68, 0.5);
            font-size: 1.5vw;
        }

        fieldset {
            background: linear-gradient(to bottom right,rgba(0, 0, 0, 0.5) 20%, rgba(0, 0, 255, 0.6)70%, rgba(255, 255, 255)100%);
            border-radius: 10px;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }
        fieldset>p{
            color: aliceblue;
            margin: auto; 
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <header>
        <h4>Pousada</h4>
        <h1>Sonho Pantaneiro</h1>
    </header>
    <form class="fim">
        <h1>Agendamento cadastrado com sucesso!</h1>
        <form action="conclusao.php" method="get" id="dados">
            <?php
            include "conclusao.php";
            foreach ($receber_cadastro as $item) {

                $nome_completo = $item['Nome_completo'];
                $email = $item['Email'];
                $cpf = $item['Cpf'];
                $rg = $item['Rg'];
                ?>

                <fieldset>
                    <p>
                        <?php echo "Nome: ". $nome_completo . "\n<br>" ?>
                    </p>

                    <p>

                        <?php echo "E-mail: ".$email . "\n<br>" ?>
                    </p>

                    <p>
                        <?php echo "CPF: ".$cpf . "\n<br>" ?>
                    </p>
                    <p>
                        <?php echo "RG: ".$rg . "\n<br>" ?>
                    </p>
                </fieldset>
                <!-- <td>
                            <?php echo $tempo . "\n<br>" ?>
                        </td>
                        <td>
                            <?php echo $conclusao . "\n<br>" ?>
                        </td> -->
                </tr>
            <?php }
            ; ?>
            <img src="https://raw.githubusercontent.com/ValdecarlosLZ/Imagens/main/accept%20(1).png" alt="CHECK"
                width="100px">
            <h5>Deseja adicionar outro agendamento?</h5>
            <a href="index.html">Adicionar</a>
        </form>
    </form>

</body>

</html>
