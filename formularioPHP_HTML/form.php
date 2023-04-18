<?php 
    // $_GET obtem o dado do formulario enviado via GET
    // $_POST obtém o dado do formulario enviado via POST
    // o nome entre '' dentro do get, tem que ser igual ao name do input do html
    // Quando se usa GET, os dados ficam expostos no URL, aparecem no link
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo "<h1>$nome</h1>";
    
    //checka se o aluno é maior ou menor de idade
    if($idade >= 18){
        echo "<h3>Aluno maior de idade</h3>";
    } else {
        echo "<h3>Aluno menor de idade</h3>";
    }
    
    echo "<label>Idade</label><input type='number' name='idade' value='$idade'>";


    // o botão nao consegue se redirecionar para a pagina diretamente, então cria-se um
    // <a></a> que tem o href para quando ser clicado, se direcionar para o nome do arquivo 
    // inserido no href, e ja que o nome do formulario em html é "form.html" ele foi inserido
    echo "<a href='form.html'><button>voltar</button></a>";

?>