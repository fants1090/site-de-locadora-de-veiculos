<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>System Plus</title>
<meta http-equiv="Content-Type" content="text/html;">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<div id="website">
		<div id="header">
			<!--logo é onde vai ficar o logo da empresa-->
			<a href="#" class="logo"><img src="images/sf.png" alt="" width="195" height="80"/>
			</a>
			<!--cad é o login e senha do usuario-->
				<div id= "cad">
                        <?php echo $_POST["usuario"]; ?><br>
						
					<a href="index.php">Sair</a>	
				</div>
				
				<!--menu onde ficara todos os serviços-->																																							
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="servicos.php">serviços</a></li>
				<li><a href="#">cupons de descontos</a></li>
				<li><a href="locais.php">locais</a></li>
				<li><a href="sobre.php">Sobre</a></li>
			</ul>
		</div>
		<!-- div id="content" são colocações onde fica algumas coisa para 
			documentar-->
			<img src="images/header_bg.jpg" alt="" /><br />
	  <div id="content">
			<h1>BEM VINDO A SYSPLUS</h1><br />
			<p>
					Nossa rede de agência está com mais de 15 locais em São Paulo. Aqui você aluga um carro novo, com preço acessível ao seu bolso. Aproveite nossos ótimos descontos e tarifas promocionais. Conhecida por ser uma empresa que valoriza a prestação de serviço, a SystemPlus oferece a todos os clientes, a primeira manutenção. Para fazer o cadastro só clicar no link, tenha em mãos a CNH. <br>
				<a href="Fale Conosco.php"><br>
				Fale Conosco
				</a> 
			</p>
		  	<h1>NOSSOS SERVIÇOS</h1>
				<p>Fique à vontade para escolher qual carro você quer fazer a reserva.<br>Depois de efetuada a sua reserva, você pode ir até a agência mais próxima e apresentar o comprovante da sua reserva, <br>com CNH e cartão de crédito.
				</p>
			<div id="table">
				<p><span>lavagem completa</span>Antes do seu carro ser alugado, ele
					sempre estara, limpo e cheiroso para te recepsionar.
				</p>
				<p><span>Processos duplos</span>Maior agilidade, tem preca para sair com
					seu veiculo para uma viajem de emergencia, aqui podemos fazer a revicao
					com dois colaboradores.
				</p>
				<p><span>Brilho do pneu</span>Temos parceria com a Pneustore, para ter
					as melhores rodas e pneus.
				</p>
				<p><span>shampoo para carpetes</span>o shampoo que nao irar deixar voce 
					com alergia, ou com cheiro injuativo.
				</p>
			</div>
		</div>
		<div id="footer">
			<!-- VLinks -->

		</div>
	</div>
    <map name="Map">
		<area shape="rect" coords="27,41,562,88" href="#">
		<area shape="rect" coords="589,2,724,185" href="#">
    </map>
</body>
</html>