<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset= "UTF-8">
    <link rel= stylesheet href="css/estilo.css">
    <title>Formulário de Cadastro</title>

    <script>
        function formatar(src, mask)
        {
          var i = src.value.length;
          var saida = mask.substring(0,1);
          var texto = mask.substring(i)
        if (texto.substring(0,1) != saida)
          {
            src.value += texto.substring(0,1);
          }
        }
        
    </script>
</head>
<body>
<div class="interface">

    <div class="formulario">

        <h1>Formulário de Cadastro</h1>

        <form action="cadastro.php" method="post">
            <table>
                <tr><td class="esquerda"><label for="nome">Nome Completo: </label></td><td><input type="text" name="nome" id="nome"></td></tr>

                <tr><td class="esquerda"><label for="email">Email: </label></td><td><input type="email" name="email" id="email"></td></tr>

                <tr><td class="esquerda"><label for="telefone">Telefone: </label></td><td><input type="text" name="telefone" id="telefone" onkeypress="formatar(this, '00)00000-0000')" maxlength="13" placeholder="(00)00000-0000"></td></tr>

                <tr><td class="esquerda"><label for="data_nasci">Data de Nascimento: </label></td><td><input type="date" name="data_nasci" id="data_nasci"></td></tr>

                <tr><td class="esquerda"><label for="idade">Idade: </label></td><td><input type="number" name="idade" id="idade" min="0" max="99"></td></tr>

                <tr><td class="esquerda"><label for="local_nasci">Local de Nascimento: </label></td><td><input type="text" name="local_nasci" id="local_nasci"></td></tr>

                <tr><td class="esquerda"><label for="cpf">CPF: </label></td><td><input type="text" name="cpf" id="cpf" onkeypress="formatar(this, '000.000.000-00')" maxlength="14" placeholder="Ex.:000.000.000-00"></td></tr>

                <tr><td class="esquerda"><label for="registro_geral">Registro Geral: </label></td><td><input type="text" name="registro_geral" id="registro_geral" onkeypress="formatar(this, '00.000.000')" maxlength="10" placeholder="Ex.:00.000.000"></td>

                <td class="esquerda"><label for="rg_expedidor">Órgão Expedidor/UF: </label></td><td><input type="text" name="rg_expedidor" id="rg_expedidor"></td>

                <td class="esquerda"><label for="data_expedi">Data de Expedição: </label></td><td><input type="date" name="data_expedi" id="data_expedi"></td></tr>

                <tr><td class="esquerda"><label for="carteira_trab">Carteira de Trabalho: </label></td><td><input type="text" name="carteira_trab" id="carteira_trab"></td>
                
                <td class="esquerda"><label for="carteira_serie">Série: </label></td><td><input type="text" name="cpf" id="carteira_serie"></td> </tr>

                <tr><td class="esquerda"><label for="endereco">Endereço: </label></td><td><input type="text" name="endereco" id="endereco"></td>
                
                <td class="esquerda"><label for="num_endereco">N°: </label></td><td><input type="number" name="num_endereco" id="num_endereco"></td></tr>

                <tr><td class="esquerda"><label for="bairro">Bairro: </label></td><td><input type="text" name="bairro" id="bairro"></td></tr>

                <tr><td class="esquerda"><label for="municipio">Município/UF: </label></td><td><input type="text" name="municipio" id="municipio"></td>
                
                <td class="esquerda"><label for="cep">CEP: </label></td><td><input type="text" name="cep" id="cep" onkeypress="formatar(this, '00000-000')" maxlength="9" placeholder="Ex.:00000-000"></td></tr>

                <tr><td class="esquerda"><label for="escolaridade">grau de escolaridade: </label></td><td><input type="text" name="escolaridade" id="escolaridade"></td></tr>

                <tr><td class="esquerda"><label for="profissao">profissão: </label></td><td><input type="text" name="profissao" id="profissao"></td></tr>

                <tr><td class="esquerda"><label for="nome_pai">nome do pai: </label></td><td><input type="text" name="nome_pai" id="nome_pai"></td></tr>

                <tr><td class="esquerda"><label for="nome_mae">nome da mãe: </label></td><td><input type="text" name="nome_mae" id="nome_mae"></td></tr>

                <tr><td class="esquerda"><label for="estado_civil">Estado Civil: </label></td><td><select>
                    <option value="casado">Casado</option>
                    <option value="solteiro">Solteiro</option>
                    <option value="viuvo">Viúvo</option>
                    <option value="relacao_est">Relação Estável</option>
                </select></td>
                
                <td class="esquerda"><label for="estado_civil">Filhos: </label></td><td><select>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select></td></tr>

                <tr><td class="esquerda"><label for="observacoes">Observações: </label></td><td><textarea type="text" name="observacoes" id="observacoes" rows="5" cols="22"></textarea></td></tr>

            </table>
    
        </form>
    </div>

</div>
</body>
</html>