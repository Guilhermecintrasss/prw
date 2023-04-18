<?php
$estado = $_POST['est'];

switch($estado) {
    case "Acre":
        $capital = "Rio Branco";
        break;
    case "Alagoas":
        $capital = "Maceió";
        break;
    case "Amapá":
        $capital = "Macapá";
        break;
    case "Amazonas":
        $capital = "Manaus";
        break;
    case "Bahia":
        $capital = "Salvador";
        break;
    case "Ceará":
        $capital = "Fortaleza";
        break;
    case "Distrito Federal":
        $capital = "Brasília";
        break;
    case "Espírito Santo":
        $capital = "Vitória";
        break;
    case "Goiás":
        $capital = "Goiânia";
        break;
    case "Maranhão":
        $capital = "São Luís";
        break;
    case "Mato Grosso":
        $capital = "Cuiabá";
        break;
    case "Mato Grosso do Sul":
        $capital = "Campo Grande";
        break;
    case "Minas Gerais":
        $capital = "Belo Horizonte";
        break;
    case "Pará":
        $capital = "Belém";
        break;
    case "Paraíba":
        $capital = "João Pessoa";
        break;
    case "Paraná":
        $capital = "Curitiba";
        break;
    case "Pernambuco":
        $capital = "Recife";
        break;
    case "Piauí":
        $capital = "Teresina";
        break;
    case "Rio de Janeiro":
        $capital = "Rio de Janeiro";
        break;
    case "Rio Grande do Norte":
        $capital = "Natal";
        break;
    case "Rio Grande do Sul":
        $capital = "Porto Alegre";
        break;
    case "Rondônia":
        $capital = "Porto Velho";
        break;
    case "Roraima":
        $capital = "Boa Vista";
        break;
    case "Santa Catarina":
        $capital = "Florianópolis";
        break;
    case "São Paulo":
        $capital = "São Paulo";
        break;
    case "Sergipe":
        $capital = "Aracaju";
        break;
    case "Tocantins":
        $capital = "Palmas";
        break;
    default:
        $capital = "Não foi encontrada uma capital para o estado informado";
}

echo "A capital de " . $estado . " é " . $capital;
?>