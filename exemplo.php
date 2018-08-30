<?php 
    //passando o nome do arquivo//
    // $caminho_do_arquivo = "hobbies.txt";
    // procura o arquvio if != true => new file = hobbies.txt
    // $recursos = fopen($caminho_do_arquivo, 'a');
    //create new content => Dormir
    // fwrite($recursos,"Dormir \n");
    // fwrite($recursos,"cagar \n");
    // fwrite($recursos,"Cagar \n");
    // fclose($recursos);
    // function file_get_content_creado($nome_arquivo){
    //     $recursos = fopen($nome_arquivo,'r');
    //     $tamanhodoarquivo = filesize($nome_arquivo);
    //     return $conteudo_arquivo = fread($recursos,$tamanhodoarquivo);
    // }

    // $caminho_do_arquivo = "hobbies.txt";
    // // $recursos = fopen($caminho_do_arquivo,'r');
    // // $tamanhodoarquivo = filesize($caminho_do_arquivo);
    // // $conteudo_arquivo = fread($recursos,$tamanhodoarquivo);
    // // fclose($recursos);
    // $conteudo_arquivo = file_get_content_creado($caminho_do_arquivo);
    // $conteudo_arquivo .= $hobbies = "nome\nsobre\nseila";
    // file_put_contents($caminho_do_arquivo, $hobbies);
    // echo $conteudo_arquivo;

    $caminho_do_arquivo = "hobbies.txt";
    $recursos = fopen($caminho_do_arquivo, 'r');
    if($recursos){
        while(($linha = fgets($recursos)) !== false){
            echo "$linha <br>";
        }
    }
?>