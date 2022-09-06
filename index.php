<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Market</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/button-top.js" defer></script>
    <script src="assets/js/pop-up-escola.js" defer></script>
    <script src="assets/js/pop-up.js" defer></script>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
</head>
<body>
       
    <section class="landing-page">

        <nav class="menu">
            <div class="position-menu">
                <li>
                    <a id="home" href="index.html">HOME</a>
                </li>
                <li>
                    <a>ALTERAR</a>
                </li>
                <li>
                    <a>EXCLUIR</a>
                </li>
                <li>
                    <a id="btn-cadastrar">CADASTRAR</a>
                </li>
                <li>
                    <a class="listar-produto">LISTAR</a>
                </li>
            </div>
        </nav>

        <div class="field-landing-page">
            <div class="position-field-landing-page">
                <h1 translate="no"><span>s</span>tore<br><span>m</span>arket</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.</p>
                <button class="listar-produto">See Products</button>
                <img src="https://i.postimg.cc/bJ7rCVnQ/mercado.png" alt="Caixa de Mercado">
            </div>
        </div>
        
        <img id="vetor-triangulo" src="https://i.postimg.cc/C5n7337w/background-landing-page.png" alt="Vetor Triangulo">

    </section>

    <section class="field-cadastrar">

        <div class="cadastro">                
            <form method="POST">
                <h1>Cadastro Produtos</h1>
                <div>
                    <label for="input-nome">Nome</label>
                    <input spellcheck="true" name="input_nome" id="input-nome" class="input-text" type="text" placeholder="Digite o nome do Produto" required>
                </div>
                <div>
                    <label for="input-estoque">Estoque</label>
                    <input name="input_estoque" id="input-estoque" class="input-text" type="number" placeholder="Digite a quantidade disponível do Produto" required>
                </div>
                <input name="btn_submit" class="btn-submit" type="submit">
                <?php 
                    extract($_POST, EXTR_OVERWRITE);
                    
                    if(isset($btn_submit)) {
                        include_once 'assets/php/produto.php';
                        $produto = new produto(); 
                        $produto->setNome($input_nome);
                        $produto->setEstoque($input_estoque);
                        $produto->salvar();
                    }
                ?>
            </form>
        </div>

    </section>

    <section class="field-list">

        <div class="listar">
            <div>
                <div>
                    <p class='tabela'>Produtos</p>
                    <p class="btn-ocultar">Ocultar</p>
                </div>
                <table> 
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Estoque</th>
                    </tr>
                    <?php
    
                        include_once 'assets/php/produto.php';
    
                        $lista = new produto();
                        $listar_bd = $lista->listar();
    
                        foreach($listar_bd as $listar) {
    
                        echo "<tr>
                                <td>$listar[0]</td>
                                <td>$listar[1]</td>
                                <td>$listar[2]</td>
                            </tr>";
                        }
    
                    ?>
                </table>
            </div>
        </div>

    </section>

    <footer>
        <div>
            <div class="footer_position">
                <div>
                    <div class="btn_txt">
                        <a href="index.html">Home</a>
                        <a id="btn_footer_contact" href="https://davhyandrade.com.br/">Contact</a>
                        <a id="btn_footer_about">About</a>
                        <a id="btn_footer_Home_screen">Home screen</a>
                        <a href="">Reload</a>
                    </div>
                    <p>My Portfólio © 2022</p>
                    <div class="btn_rodape">
                        <div>
                            <a href="https://www.deviantart.com/davhyzk"><input type="image" src="https://i.postimg.cc/x1Fr86cL/vetor-deviantart.png" alt="Deviant Art"></a>
                            <a href="https://github.com/Davhyandrade"><input type="image" src="https://i.postimg.cc/TwgBkGQc/vetor-github.png" alt="GitHub"></a>
                            <a href="https://www.instagram.com/_davhy/"><input type="image" src="https://i.postimg.cc/SKww7jLs/vetor-instagram.png" alt="Instagram"></a>
                            <a href="https://api.whatsapp.com/send?phone=5511934643395"><input type="image" src="https://i.postimg.cc/C50XXtQp/vetor-whatsapp.png" alt="WhatsApp"></a>
                            <a href="https://www.behance.net/davhyandrade"><input type="image" src="https://i.postimg.cc/Dy63kvhj/vetor-behance.png" alt="Behance"></a>
                            <a href="https://www.linkedin.com/in/davhy-andrade-dev"><input type="image" src="https://i.postimg.cc/1X8BYb6G/image-removebg-preview-68.png" alt="Linkedin"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>