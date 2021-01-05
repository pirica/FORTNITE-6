<?php

#Desafios                   | https://fortniteapi.io/v1/challenges?season=current&lang=en
#Itens                      | https://fortniteapi.io/v1/items/list?lang=en
#Próximos Itens             | https://fortniteapi.io/v1/items/upcoming?lang=en
#Detalhes do item           | https://fortniteapi.io/v1/items/get?id=CID_242_Athena_Commando_F_Bullseye&lang=en
#Lista de cosmeticos        | https://fortniteapi.io/v1/items/sets?lang=en
#Itens diários              | https://fortniteapi.io/v1/shop?lang=en
#opções de votação na loja  | https://fortniteapi.io/v1/shop/voting
#Pesquisar ID da conta      | https://fortniteapi.io/v1/lookup?username=Ninja
    /* A plataforma de parâmetros pesquisará contas não vinculadas a uma conta épica, valores: xbl ou psn
    O parâmetro strict = false retornará outros resultados para nomes semelhantes */
#Estat. glob. do jogador    | https://fortniteapi.io/v1/stats?account=4735ce9132924caf8a5b17789b40f79c
#Partidas recen. do jogador | https://fortniteapi.io/v1/matches?account=4735ce9132924caf8a5b17789b40f79c
#Battle Royale / STW / NEWS | https://fortniteapi.io/v1/news?lang=en&type=br
#Recompensas do Battle Pass | https://fortniteapi.io/v1/battlepass?lang=en&season=current
#Conquistas                 | https://fortniteapi.io/v1/achievements?lang=en
#Torneios                   | https://fortniteapi.io/v1/events/list?lang=en&region=NAE

define('API_KEY', '86e1c4f5-f3b9b18d-71fd47ab-cb5693b9');
define('SITE_NAME', 'FORTNITE BRASIL');
define('BASE_URL', 'www.localhost');
define('BASE_API', 'https://fortniteapi.io');

#Endpints
define('CHALLENGS', BASE_API . '/v1/challenges?season=current&lang=pt-BR');
define('STORE', BASE_API . '/v1/shop?lang=pt-BR');

#Arquivos diretórios raízes
$PastaInterna = "";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') :
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}");
else :
    define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}");
endif;

#Diretórios Específicos
define('DIRIMG', DIRPAGE . "public/assets/images/");
define('DIRCSS', DIRPAGE . "public/assets/css/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "db_name");
define('USER', "root");
define('PASS', "");
