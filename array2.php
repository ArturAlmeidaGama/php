<?php

$alunos = 
[
    ["matricula" => "2023293",
    "nome" => "artur",
    "cpf" => "987654321",
    "endereco" => ["logradoro" => "jaguari",
    "número" => "12345",
    "cep" => "07986",
    "bairro" => "esplanada",
    "cidade" => "embu",
    "uf" => "sp"],
    "email" => "@2"],
    ["matricula" => "2023293",
    "nome" => "artur",
    "cpf" => "987654321",
    "email" => "@"],
    ["matricula" => "2023293",
    "nome" => "artur",
    "cpf" => "987654321",
    "email" => "@3"],
];

foreach($alunos as $n => $aluno)
{
    echo $n+1 . ")<br>";

    foreach($aluno as $i => $dado)
    {
        if($i == "endereco")
        {
            foreach($dado as $tipo => $endereco)
            {
                echo $tipo . ": " . $endereco . "<br>";
            }
        }

        else 
        {
            echo $i . ": ". $dado ."<br>";
        }
    }

    echo "<br>";
}