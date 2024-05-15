<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        #fotoPrincipal, #miniatura1, #miniatura2 {
            display: none;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: url('./imagens/imagenssite/fundo.jpeg');
            background-attachment: fixed;
            background-size: cover;
        }

        header {
            background-color: rgb(27, 27, 27);
            color: rgb(255, 255, 255);
            padding: 5px;
            box-shadow: 0px 8px 5px rgba(0, 0, 0, 0.322);
        }

        header menu {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header #title {
            display: flex;
            align-items: center;
        }

        header #img1 {
            width: 60px;
            transition: .5s;
        }

        header #img2 {
            width: 60px;
            height: 40px;
            margin-right: 50px;
            transition: .5s;
        }

        #shield img {
            margin-right: 5px;  
        }

        #logo img {
            vertical-align: middle;
            width: 25px;
            height: 25px;
        }

        h1 {
            text-align: center;
            color: white;
            margin-bottom: 15px;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: #073260f1;
            box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.425);
            align-items: center;
            width: 500px;
            margin: auto;
            padding: 5.5px 15px 5.5px 15px;
        }

        input {
            width: 100%;
            padding: 15px;
        }

        label {
            font-family: Arial, Helvetica, sans-serif;
            font-size: .8rem;
            color: gray;
            border: 1px solid rgb(116, 116, 116);
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 5px 5px 5px 15px;
        }

        label span:nth-child(2){
            background-color: #007bff;
            color: white;
            padding: 10px;
            cursor: pointer;
        }

        .botoes {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .bot {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <menu id="topo">
            <a href="./index.html">
                <div id="title">
                    <img src="./imagens/logolm1.png" alt="logo L e M" id="img1">
                    <img src="./imagens/logonfl.png" alt="logo nfl" id="img2">
                </div>
            </a>
            <div id="logo">
                <img src="./imagens/shield.png" alt="shield" id="shield">
                <span>Ambiente 100% seguro</span>
            </div>
        </menu>
    </header>
    <main>
        <form action="get" onsubmit="cadastrar(event)">
            <h1 id="title">Cadastre o Produto</h1>
            <input type="text" name="protocolo" id="idProtocolo" placeholder="Protocolo do Produto"><br>
            <input type="text" name="nome" id="idNome" placeholder="Nome do Produto"><br>
            <input type="text" name="preco" id="idPreco" placeholder="Preço do Produto"><br>
            <input type="text" name="descricao" id="idDescricao" placeholder="Descrição do Produto"><br>
            <label for="fotoPrincipal"><span id="prin">Imagem Principal</span><span>Selecionar</span></label>
            <input type="file" name="fotoPrincipal" id="fotoPrincipal"><br>
            <label for="miniatura1" class="mini"><span id="mini1">Miniatura 1</span><span>Selecionar</span></label>
            <input type="file" name="miniatura01" id="miniatura1"><br>
            <label for="miniatura2" class="mini"><span id="mini2">Miniatura 2</span><span>Selecionar</span></label>
            <input type="file" name="miniatura02" id="miniatura2">
            <section class="botoes">
                <button class="bot" type="submit">CADASTRAR</button>
                <button class="bot" type="reset">LIMPAR</button>
            </section>
        </form>
    </main>

    <script>
        function cadastrar(event) {
            event.preventDefault();
            let protocolo = document.getElementById('idProtocolo');
            let nomeProd = document.getElementById('idNome');
            let precoProd = document.getElementById('idPreco');
            let descProd = document.getElementById('idDescricao');
            let fotoPrin = document.getElementById('fotoPrincipal');
            let mini1 = document.getElementById('miniatura1');
            let mini2 = document.getElementById('miniatura2');

            if ( protocolo.value != ''
                && nomeProd.value != ''
                && precoProd.value != ''
                && descProd.value != ''
                && fotoPrin.value != ''
                && mini1.value != ''
                && mini2.value != ''
            ) {
                localStorage.setItem('protocolo', protocolo.value);
                 localStorage.setItem('nomeProd', nomeProd.value);
                  localStorage.setItem('precoProd', precoProd.value);
                   localStorage.setItem('descProd', descProd.value);
                    localStorage.setItem('fotoPrin', fotoPrin.value);
                     localStorage.setItem('mini1', mini1.value);
                      localStorage.setItem('mini2', mini2.value);
                
                alert('Produto cadastrado!');
                
            } else {
                alert('Preencha todos os campos corretamente!');
            }
        }
        document.getElementById('fotoPrincipal').addEventListener('change', function(){
            document.getElementById('prin').textContent = this.files[0].name;
        })
        document.getElementById('miniatura1').addEventListener('change', function(){
            document.getElementById('mini1').textContent = this.files[0].name;
        })
        document.getElementById('miniatura2').addEventListener('change', function(){
            document.getElementById('mini2').textContent = this.files[0].name;
        })
        
    </script>
</body>
</html>