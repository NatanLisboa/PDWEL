<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>XML - Livro</title>
</head>
<body>
    <?php
        $xml_file = simplexml_load_file('original-xml-file.xml');
        $xml_file->nome = 'Xiiiin code';
        $xml_file->data = '2021-12-23';
        $xml_file->autor->nome = 'Natan da Fonseca Lisboa';
        $xml_file->autor->site = 'https://github.com/NatanLisboa';
        $xml_file->comentarios->comentario[0]->autor = 'Bianca Kaori Hng';
        $xml_file->comentarios->comentario[0]->texto = 'MARAVILHOSOOOO!';
        $xml_file->comentarios->comentario[1]->autor = 'Leonardo Naoki Narita';
        $xml_file->comentarios->comentario[1]->texto = 'Simplesmente sensacional! Aprendi o padrão de projeto "Megazord" com essa obra-prima';
        echo '<p><h1>' . $xml_file->nome . '</h1></p>';
        echo '<p><h3> Autor: ' . $xml_file->autor->nome . '</h3></p>';
        echo '<p><h3> Data de publicação: ' . $xml_file->data . '</h3></p>';
        echo '<br>';
        echo '<p><h3>Comentários</h3></p>';
        echo '<p><h4>' . $xml_file->comentarios->comentario[0]->autor . '</h4></p>';
        echo '<p>' . $xml_file->comentarios->comentario[0]->texto . '</p>';
        echo '<p><h4>' . $xml_file->comentarios->comentario[1]->autor . '</h4></p>';
        echo '<p>' . $xml_file->comentarios->comentario[1]->texto . '</p>';

        $xml_file->saveXML('original-xml-file.xml');
    ?>
</body>
</html>
