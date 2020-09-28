<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>System Plus</title>
<meta http-equiv="Content-Type" content="text/html;">
<meta charset="utf-8"/>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
      <div id="website"> 
        <a href="index.php" class="logo"><img src="images/sf.png" alt="" width="195" height="80"/></a>
          <ul id="menu">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="servicos.php">serviços</a></li>
                  <li><a href="#">cupons de descontos</a></li>
                  <li><a href="locais.php">locais</a></li>
                  <li><a href="sobre.php">Sobre</a></li>
          </ul>
        <div id="contentS"> 
            <div id="faleConosco">
              <form action="faleConosco.php" method="POST">
                  Nome: <input type="text" name="nome"required="required"
                  placeholder="seu nome"/><br>
                  Email: <input type="text" name="email" required="required" placeholder="seu@email.com"><br>
                  Assunto: <input type="text" name="assunto" required="required" placeholder="assunto"><br>
                  Mensagem: <input type="text" name="msg" required="required" placeholder="digite a mensagem aqui"><br>
                
                <input type="submit"><value="Enviar"><br>
              </form>
            </div>
      </div>
      </div>
    </html>
</body>