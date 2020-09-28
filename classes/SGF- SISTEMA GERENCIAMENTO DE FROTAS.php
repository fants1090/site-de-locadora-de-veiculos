<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="serve">
<title> SGF > Sistema de Gerenciamento de frotas</title>
<meta name="description" content=" formulario em html">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<!--font com cor acrecentar centralizado no meio da pagina-->
<body> 

 <!--<center><FONT size=7 COLOR="#000000">B</FONT>
 <FONT size=6 COLOR="#800000">E</FONT>
 <FONT size=5 COLOR="#008000">M</FONT> -

 <FONT size=7 COLOR="#808000">V</FONT>
 <FONT size=6 COLOR="#008080">I</FONT>
 <FONT size=5 COLOR="#00FF00">N</FONT>
 <FONT size=4 COLOR="#00FFFF">D</FONT>
 <FONT size=3 COLOR="#0FFF55">O</FONT>
  <br/>
  <FONT size=7 COLOR="#000000">C</FONT><B>adrastro
  </b></center>-->

 <!--aqui temos todos os dados-->
 <!--para podermos acrecentar uma legenda no label para identificar melhor os 
dados de cada descrição basta acrentenar na frente do <input type="text"name=
"email" -> required="required" type="password"placeholder="ex.vinicius"/>-->
  <form action="welcome.php" method="post">
  <!--Dados pessoais-->
  <fieldset>
    <legend>Dados pessoais</legend>
    <table cerllspacing="10">
      <tr>
        <td>
          <label for="nome">Nome:</label>
        </td>
        <td align="left">
          <input type="text"name="email"required="required" type=
          "password"placeholder="ex.vinicius"/>
        </td>
        <td>
          <label for="=sobrenome">Sobrenome: <label>
          </td>
          <td align="left">
            <input type="text"name="sobrenome"required="required" type=
            "password"placeholder="ex.ferreira"/>
          </td>
      </tr>
      <tr>
        <td>
          <label>Nascimento:</label>
        </td>
        <td align="left">
          <input type="text" name="dia" size="2"max1 ength="2" required=
          "required" type="password"placeholder="ex.dd"/>

          <input type="text" name="mes" size="2"maxle ength="2"required=
          "required" type="password"placeholder="ex.mm"/>

          <input type="text" name="ano" size="4"maxle ength="4"required=
          "required" type="password"placeholder="ex.aaaa"/>
        </td>
      </tr>
      <tr>
        <td>
          <label for="rg">RG:</label>
        </td>
        <td align="left">
          <input type="text"name="rg" size="8" maxl ength="8"required=
          "required" type="text"placeholder="ex.numero"/>
           - 
          <input typer="text"name="rg2" size="2"maxl ength="2"required=
          "required" type="text"placeholder="ex.digito"/>
        </td>
      </tr>
      <tr>
        <td>
          <label>CPF</label>
        </td>
        <td align="left">
          <input type="text" name="cpf" size="9" maxl ength="9"required=
          "required" type="text"placeholder="ex.numero"/> -

           <input type="text" name="cpf2" size="2" maxlength="2"required=
           "required" type="text"placeholder="ex.digito"/>
        </td>
      </tr>
      <tr>
        <td>
          <!--aqui temos um comando label for com option de generos-->
          <label for="sexo">sexo:</label>
        </td>
        <td align="´left">
          <select name="sexo"> 
          <option value="MC">masculino</option> 
          <option value="FM">feminino</option>
          <option value="">nao quero declara</option>
        </select>  
        </td>
      </tr>
    </table>
  </fieldset>

  <br />
  <!--ENDEREÇO-->
  <fieldset>
    <legend>Endereço</legend>
    <table cellspacing="10">

      <tr>
        <td>
            <label for="rua">Rua:</label>
          </td>
          <td align="left">
           <input type="text" name="rua"required=
           "required" type="password"placeholder="ex.Francisco Talenti"/>
          </td>
          <td>
           <label for="numero">Numero:</label>
          </td>
          <td align="left">
           <input type="text" name="numero" size="4"required=
           "required" type="password"placeholder="ex.317"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="bairro">Bairro: </label>
          </td>
          <td align="left">
           <input type="text" name="bairro"required=
           "required" type="password"placeholder="ex.JD fraternidade"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="estado">Estado:</label>
          </td>
          <td align="left">
           <select name="estado"> 
           <option value="ac">Acre</option> 
           <option value="al">Alagoas</option> 
           <option value="am">Amazonas</option> 
           <option value="ap">Amapá</option> 
           <option value="ba">Bahia</option> 
           <option value="ce">Ceará</option> 
           <option value="df">Distrito Federal</option> 
           <option value="es">Espírito Santo</option> 
           <option value="go">Goiás</option> 
           <option value="ma">Maranhão</option> 
           <option value="mt">Mato Grosso</option> 
           <option value="ms">Mato Grosso do Sul</option> 
           <option value="mg">Minas Gerais</option> 
           <option value="pa">Pará</option> 
           <option value="pb">Paraíba</option> 
           <option value="pr">Paraná</option> 
           <option value="pe">Pernambuco</option> 
           <option value="pi">Piauí</option> 
           <option value="rj">Rio de Janeiro</option> 
           <option value="rn">Rio Grande do Norte</option> 
           <option value="ro">Rondônia</option> 
           <option value="rs">Rio Grande do Sul</option> 
           <option value="rr">Roraima</option> 
           <option value="sc">Santa Catarina</option> 
           <option value="se">Sergipe</option> 
           <option value="sp">São Paulo</option> 
           <option value="to">Tocantins</option> 
          </select>
          </td>
         </tr>
         <tr>
          <td>
           <label for="cidade">Cidade: </label>
          </td>
          <td align="left">
           <input type="text" name="cidade"required=
           "required" type="password"placeholder="ex.São Paulo"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="cep">CEP: </label>
          </td>
          <td align="left">
           <input type="text" name="cep" size="5" maxlength="5"required=
           "required" type="password"placeholder="ex.numero"/> -

           <input type="text" name="cep2" size="3" maxlength="3"required=
           "required" type="password"placeholder="ex.digito"/>
          </td>
         </tr>
        </table>
       </fieldset>
       <br />
       
       <!-- DADOS DE LOGIN -->
       <fieldset>
        <legend>Dados de login</legend>
        <table cellspacing="10">
         <tr>
          <td>
           <label for="email">E-mail: </label>
          </td>
          <td align="left">
           <input type="text" name="email"required=
           "required" type="password"placeholder="ex.Systemplus@hotmail.com"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="imagem">Foto de perfil:</label>
          </td>
          <td>
           <input type="file" name="imagem"required=
           "required" type="password"placeholder="ex.Sua foto"/>
       
          </td>
         </tr>
         <tr>
          <td>
           <label for="login">Nome do usuário: </label>
          </td>
          <td align="left">
           <input type="text" name="usuario"required=
           "required" type="password"placeholder="ex.frotas123"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="pass">Senha: </label>
          </td>
          <td align="left">
           <input type="password" name="pass"required=
           "required" type="password"placeholder="ex.senha"/>
          </td>
         </tr>
         <tr>
          <td>
           <label for="passconfirm">Confirme a senha: </label>
          </td>
          <td align="left">
           <input type="password" name="passconfirm"required=
           "required" type="password" placeholder="ex.Confirmar senha"/>
          </td>
         </tr>
        </table>
       </fieldset>
       <br />
       <!--temos dois butoom um para enviar a consulta e outro para limprar os
      dados e temos outros comando para enviar email para as pessoas selecionadas-->
       <input type="submit" value="Enviar">
       <input type="reset" value="Limpar">
       <!--outros  modos para enviar email, para os geretes do sistema 
         
        <a href="Mailto:matheusfabrig@gmailcom,karinachristyna@hotmail.com,
       jessirodrigues0501@gmail.com?
       subject=capitulo nove">Enviar mensagem para matheusfabrig e karinachristyna
       e jessirodrigues0501
       com o assunto</a><br>

       <a href="mailto:matheusfabrig@gmail.com,karinachristyna@hotmail.com?subject
       =capitulo nove&cc=jessirodrigues0501@gmail.com">Enviar mensagem para 
       matheusfabrig e karinachristyna e jessirodrigues0501 com assunto e copia
      </a><br>

       <a href="mailto:matheusfabrig@gmail.com,jessirodrigues0501@gmail.com,
       karinachristyna@hotmail.com?subject=capitulo nove&cc=
       jessirodrigues0501@gmailcom&body=Estou muito contente por conseguir 
       executar o programa em uma pagina wep."
       >Enviar mensagem para matheusfabrig e karinachristyna e 
       jessirodrigues0501 com assunto, copia e texto da mensagem.</a>-->
</form>
</body>
</html>