<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
    <title>RF Holding - Conectando gerações com experiências que transcendem o tempo!</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"/>
<link rel="shortcut icon" href="media/logo.png" />
<link rel="stylesheet" href="/sistema/css/estilo.css">
<link rel="stylesheet" href="/sistema/css/fontawesome.min.css">


<style> 

  .image-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Cria três colunas com largura igual */
  gap: 10px; /* Espaçamento entre as imagens */
}

.image-grid img {
  width: 100%; /* Assegura que a imagem ocupa 100% da largura da coluna */
  height: auto;
}

h1,h2 {
  text-align: center; font-size: 35px;
}

.team-list {
  list-style: none;
  padding: 0;
  display: flex;
  flex-wrap: wrap; /* Permite que os itens se movam para a próxima linha em telas menores */
  justify-content: space-around;
}

.team-list li {
  text-align: center;
  width: 200px; /* Largura fixa dos itens */
  margin: 15px; /* Espaçamento entre os itens */
}

img {
  width: 200px;
  height: 150px;
 
  object-fit: cover;
  margin-bottom: 10px;
}

form { margin-right: 20%;
 margin-left: 20%;
  background-color: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  color: #333;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #555;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ddd;
  border-radius: 4px;
}

input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}


























</style> 
</head>
<body>
<header>
<div id="sub-menu">

  <center><img src="/media/logo.png"></center>

</div>
<div id="menu">

<a class="link-menu" href="#empresas">Empresas</a>
  | 
<a class="link-menu" href="#equipe">Equipe</a>
  |
<a class="link-menu"  href="#contato">Contato</a>
</div>

</header>

 



<h2 id="empresas" style="color:white;size:10px;">Nossas empresas</h2>

<div class="image-grid">
    <a href="https://ieletro.com/ target="_blank"><img src="/media/empresas/01.png" alt="Ieletro">
    
    <a href="http://hospedadados.com/" target="_blank"><img src="/media/empresas/02.png" alt="Hospeda Dados"></a>
    
    <a href="https://diretoriowp.com.br" target="_blank"><img src="/media/empresas/03.png" alt="Diretório Wordpress"></a>
  </div>






<h2 id="equipe" style="color:white;size:10px;">Nossa Equipe</h2>

  <ul class="team-list">
 <li>
          <img style=" border-radius: 50%;width: 100px; height: 100px;"src="/media/colaboradores/railson.png" alt="Railson Felix">

      <h3>Railson Felix</h3>
      <p>Presidente da empresa</p>
    </li>
    <li>
      <img style=" border-radius: 50%;width: 100px; height: 100px;"src="/media/colaboradores/henrique.png" alt="Henrique Tourinho">
      <h3>Henrique Tourinho</h3>
      <p>Diretor de operações</p>
    </li>
    <li>
      <img style=" border-radius: 50%;width: 100px; height: 100px;" src="/media/colaboradores/caua.png" alt="Renato Caua">
      <h3>Renato Caua</h3>
      <p>Designer Gráfico</p>
    </li>
   
    <li>
      <img style=" border-radius: 50%;width: 100px; height: 100px;"src="/media/colaboradores/lucas.png"  alt="LUCAS JENDICK">
      <h3>LUCAS JENDICK</h3>
      <p>Gerente de Produtos</p>
    </li>
  </ul>
  
  <br><br>


  <h2 id="contato" style="color:white;=size:10px">Entre em Contato</h2>

  <form style="color:white;background-color: black;" action="sistema/php/contato.php" method="post">
    <label style="color:white;" for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label style="color:white;"for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
   <label style="color:white; for="assunto">Assunto:</label>
    <input type="text" id="assunto" name="assunto" required>

    <label style="color:white;" for="mensagem">Mensagem:</label>
    <textarea   id="mensagem" name="mensagem" required></textarea>
     <label style="color:white;" for="arquivo">Enviar arquivo:</label>
    <input type="file" id="arquivo" name="arquivo">
    <input style="color:white;background-color:#320dc5" type="submit" value="Enviar">
  </form>


<div id="footer">
<p style="font-size:12px;text-align: center;"> 2021-2024 | RF Holding | Jauá, Abrantes - BA.</p>
<hr style="color:white">
<a style="font-size:10px;" class="link-sub-menu" href="https://henriquetourinho.com.br/" target="_blank">© RF Holding, ou suas Representações, todos os Direitos Reservados. </a>
</div>

 
</div>
</body>
</html>