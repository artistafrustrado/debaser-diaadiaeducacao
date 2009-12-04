<?php
// $Id: language/portuguesebr/admin.php,v 0.93 23/12/2006 10:00:00 DeejotaMix Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                   Tradução: deejotamix@gmail.com                          //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //

define('_AM_DEBASER_SAVE','Salvar');
define('_AM_DEBASER_NEWPLAYER','Novo Player');
define("_AM_DEBASER_NAME","Name:");
define("_AM_DEBASER_NEWPLAYERNAME","Nome para o novo player");
define("_AM_DEBASER_CODE","Code:");
define("_AM_DEBASER_NEWPLAYERCODE","Codigo para o novo player");
define('_AM_DEBASER_DELETED',' Apagado');
define('_AM_DEBASER_NOTDELETED',' não apagado ');
define('_AM_DEBASER_PERMISSIONS','Permissões ');

//Definição do idioma para amdebaser.html
define("_AM_DEBASER_SHOWFILES","Ver e editar Arquivos");
define("_AM_DEBASER_EDITGENRES","Editar categorias ");
define("_AM_DEBASER_EDITPLAYERS","Editar Players");
define("_AM_DEBASER_SINGLEUP","Upload Simples");
define("_AM_DEBASER_PREFS","Preferencias");
define("_AM_DEBASER_BATCH","Upload em massa");
define("_AM_DEBASER_APPROVE","Aprovar arquivos");
define('_AM_DEBASER_SHOWSORT','Ver arquivos ordenados por categoria');
define("_AM_DEBASER_TOAPPROVE","Arquivos aguardando aceitação");

//Definição do idioma para amshowmpegs.html
define("_AM_DEBASER_ID","ID:");
define("_AM_DEBASER_PLAY","Play");
define('_AM_DEBASER_FILEADMIN','Administrar Arquivos');
define('_AM_DEBASER_SUREDELETEFILE','Voce tem certeza que deseja apagar esse arquivo?');

//Definição do idioma para ameditmpegs.html
define("_AM_DEBASER_ARTIST","Artista:");
define("_AM_DEBASER_TITLE","Titulo:");
define("_AM_DEBASER_ALBUM","Album:");
define("_AM_DEBASER_YEAR","Ano:");
define("_AM_DEBASER_COMMENT","Comentario:");
define("_AM_DEBASER_TRACK","Faixa:");
define("_AM_DEBASER_GENRE","Categoria:");
define("_AM_DEBASER_LENGTH","Duração:");
define('_AM_DEBASER_WEIGHT', 'Peso');
define('_AM_DEBASER_WEIGHT_DSC', 'Se \'Ordenar por peso\' Você pode inverter em preferencias, os arquivos serão ordenados pelo peso deles/delas no lado do índice página do usuário.');

//Definição do idioma para amplaymanage.html
define("_AM_DEBASER_NEWPLAYADD","Novo player adicionado");
define('_AM_DEBASER_SUREDELETEPLAYER', 'Você Tem certeza que deseja apagar esse player?');
define('_AM_DEBASER_PLAYERADMIN','Administrar Player');
define("_AM_DEBASER_HEIGHT","Altura do Player:");
define("_AM_DEBASER_WIDTH","Largura do Player:");
define("_AM_DEBASER_AUTOSTART","Iniciar Automático:");

//various defines for admin site
define("_AM_DEBASER_DBUPDATE","Banco de dados Atualizado");
define("_MD_DEBASER_MAXUPSIZE","Tamanho max para upload = ");
define("_AM_DEBASER_ALLUP","Todos os arquivos foram Carregados !");
define("_AM_DEBASER_NO_ALLUP","Não foi localizado arquivos para serem carregados !");
define("_AM_DEBASER_GO","Vai!");
define('_AM_DEBASERRAD_ADMIN','Administrar Radio(s)');

//Definição do idioma para admin/amapprove
define("_AM_DEBASER_APPROVE2","Aprovar:");
define("_AM_DEBASER_NOAPPROVE","Não há nenhum arquivo para aprovar");

//Definição do idioma para amgenremanage.html
define("_AM_DEBASER_ADDNEWGENRE","Adicionar uma nova categoria ");
define('_AM_DEBASER_EDITGENRE','Editar categoria');
define('_AM_DEBASER_GENREADMIN','Administração de categoria ');
define('_AM_DEBASER_SUREDELETEGENRE', 'Você está seguro em apagar esta categoria? ainda há arquivos nesta categoria e serão todos deletados.');

//Definição do idioma para upload
define('_MD_DEBASER_EXTLINK','Link Externo');
define('_MD_DEBASER_GENRE','Categoria:');
define('_MD_DEBASER_TAMANHO','Tamanho:');
define('_MD_DEBASER_ARTIST','Artista:');
define('_MD_DEBASER_TITLE','Titulo:');
define("_MD_DEBASER_ALBUM","Album:");
define("_MD_DEBASER_YEAR","Ano:");
define("_MD_DEBASER_COMMENT","Adicionar Informações:");
define("_MD_DEBASER_TRACK","Faixa:");
define("_MD_DEBASER_LENGTH","Duração:");
define("_MD_DEBASER_BITRATE","Bitrate:");
define("_MD_DEBASER_FREQUENCY","Frequencia:");
define('_AM_DEBASER_SINGLEUPSUCC','Arquivo Carregado com sucesso');
define('_AM_DEBASER_UPLOADFILELINKNO','Você não pode enviar ao mesmo tempo em ambos, um arquivo e um link externo !');
define('_MD_DEBASER_ALREADYEXIST','O Arquivo ja existe!');

//Definição do idioma para admin/radioindex.php
define("_AM_DEBASERRAD_EDIT","Mude colocações");
define("_AM_DEBASERRAD_ERR1","Insira o nome da estação de rádio ");
define("_AM_DEBASERRAD_ERR2","Insira uma URL para a estação de rádio");
define("_AM_DEBASERRAD_NAME","Nome Da estação de rádio");
define("_AM_DEBASERRAD_NEW","Adicionar Nova estação de rádio");
define("_AM_DEBASERRAD_NOST","Não á nenhum radio disponivel");
define("_AM_DEBASERRAD_PICT","Imagem daestação de rádio<div style='padding-top: 8px;'><span style='font-weight: normal;'>A imagem tem que esta na pasta: /debaser/images</span></div>");
define("_AM_DEBASERRAD_PROG","Estações de rádio disponíveis ");
define("_AM_DEBASERRAD_STREAM","URL de fluxo ");
define("_AM_DEBASERRAD_TITLE","Internetradio");
define("_AM_DEBASERRAD_URL","URL de site da Web ");

define('_AM_DEBASER_EDITPLAYER','Editar player');
define('_AM_DEBASER_EDITMPEG','Editar arquivo');

define('_AM_DEBASER_GOMOD','Vá para módulo');
define('_AM_DEBASER_HELP','Ajuda');
define('_AM_DEBASER_ABOUT','Sobre este módulo');
define('_AM_DEBASER_MODADMIN',' Administração de módulo :');
define('_AM_DEBASER_NOSONGAVAIL','Não há nenhum arquivo para esta categoria !');

define('_MD_DEBASER_ADDLINK','Adicionar link');
define('_MD_DEBASER_ADDMPEG','Adicionar Arquivos');

define('_AM_DEBASER_GENREMOVE','Mover arquivos');
define('_AM_DEBASER_GENREFROM','De categoria : ');
define('_AM_DEBASER_GENRETO',' para categoria : ');
define('_AM_DEBASER_MOVED','Arquivo(s) foram movidos!');

define('_AM_DEBASER_ADDNEWSUBGENRE','Adicionar Sub-categoria');
define('_AM_DEBASER_SUBGENRE','Sub-categoria:');
define('_AM_DEBASER_GENREIN',' Criar em: ');

/* admin/mimetypes.php */
define('_AM_DEBASER_FILETYPES', 'Tipos de Arquivos');
define('_AM_DEBASER_MIME_CREATEF', 'Criar Mimetype');
define('_AM_DEBASER_MIME_MODIFYF', 'Modificar Mimetype');
define('_AM_DEBASER_MIME_EXTF', 'Extenção do arquivo:');
define("_AM_DEBASER_MIME_NAMEF", "Nome do tipo de aplicação:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entre com a  aplicação associada com esta extensão .</span></div>");
define("_AM_DEBASER_MIME_TYPEF", "Mimetypes:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entre em cada mimetype associado com a extensão do arquivo. Cada mimetype devem 
ser separados com um espaço .</span></div>");
define('_AM_DEBASER_MIME_ADMINF', ' Mimetype permitido para Administradores');
define('_AM_DEBASER_MIME_USERF', 'Mimetype permitido para Usuários');
define('_AM_DEBASER_MIME_CREATE', 'Criar');
define('_AM_DEBASER_MIME_CLEAR', 'Limpar');
define('_AM_DEBASER_MIME_MODIFY', 'Modificar');
define('_AM_DEBASER_MIME_FINDMIMETYPE', 'Achar novo Mimetype:');
define("_AM_DEBASER_MIME_EXTFIND", "Extensão de Arquivo de procura :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Entre com a extensão de arquivo que você deseja procurar .</span></div>");
define('_AM_DEBASER_MIME_FINDIT', 'Adquira Extensão!');
define('_AM_DEBASER_MIME_CREATED', 'informações de criação do Mimetype');
define('_AM_DEBASER_MIME_MODIFIED', 'Informações de modificações no Mimetype');
define('_AM_DEBASER_MIME_MIMEDELETED', 'Mimetype %s Foi Apagado');
define('_AM_DEBASER_DBERROR', 'Erro no Banco de dados!');
define('_AM_DEBASER_MIME_DELETETHIS', 'Apagar mimetype selecionado?');
define('_AM_DEBASER_MIME_DELETE', 'Apagar');
define('_AM_DEBASER_MMIMETYPES', 'Mimetype Administração');
define('_AM_DEBASER_MIME_INFOTEXT', '<ul><li>Podem ser criados novos mimetypes, podem ser editados ou podem ser apagados 
facilmente desta forma .</li><li>Procure um mimetypes novo por um site da Web externo.</li><li>Exibir visualização do mimietypes para Administradores e Uploads de Usuários.</li><li>Mude o estado de upload de mimetype .</li></ul>');
define('_AM_DEBASER_MIME_ADMINFINFO', '<strong>Mimetypes que estão disponiveis para uploads do Administrador :</strong>');
define('_AM_DEBASER_MIME_NOMIMEINFO', 'Nenhum mimetypes selecionado .');
define('_AM_DEBASER_MIME_USERFINFO', '<strong>Mimetypes que esta disponível para uploads de Usuário :</strong>');
define('_AM_DEBASER_MIME_ID', 'ID');
define('_AM_DEBASER_MIME_NAME', 'Tipo de aplicação');
define('_AM_DEBASER_MIME_EXT', 'Externo');
define('_AM_DEBASER_MIME_ADMIN', 'Administrador');
define('_AM_DEBASER_MIME_USER', 'Usuário');
define('_AM_DEBASER_MINDEX_ACTION', 'Ação');
define('_AM_DEBASER_MINDEX_PAGE', '<strong>Pagina:<strong> ');
define('_AM_DEBASER_ONLINE', 'Online');
define('_AM_DEBASER_OFFLINE', 'Offline');
define('_AM_DEBASER_PLAYERPRESELECT','Player padrão');

define('_AM_DEBASER_FILE','Arquivo:');

/* class/uploader.php */
define('_MD_NOFILECHOOSE','Você não escolheu um arquivo para upload ou o servidor tem o Armazenamento 
insuficiente para upload deste arquivo .!');
define('_MD_INVALIDFILESIZE','Tamanho do arquivo invalido');
define('_MD_FILENAMEEMPTY','O nome do arquivo esta azio');
define('_MD_NOFILEUP','O arquivo não foi carregado á algum erro');
define('_MD_PROBUP','Ocorreu um problema com seu carregamento. Error: 0');
define('_MD_TOOBIG1','O arquivo que você está tentando Carregar é muito grande . Error: 1');
define('_MD_TOOBIG2','O arquivo que você está tentando Carregar é muito grande. Error: 2');
define('_MD_PARTIALLY','O Arquivo que você carregou s´era um carregamento parcialmente. Error: 3');
define('_MD_NOFILESEL4','Nenhum Arquivo Selecionado para Carregar. Error: 4');
define('_MD_NOFILESEL5','Nenhum Arquivo Selecionado para Carregar. Error: 5');
define('_MD_UPDIRNOTSET','Diretório de Upload não fixou');
define('_MD_FAILOPENDIR','Falha na operação do diretório: ');
define('_MD_FAILOPENDIRWRITE','Falha na operação do diretório na escrita de permissão: ');
define('_MD_FILESIZE','Tamanho do arquivo: ');
define('_MD_MAXSIZEALLOW','Tamanho maximo permitido: ');
define('_MD_MIMENOTALLOW','MIME type Não Permitido: ');
define('_MD_FAILUPLOADING','Falha ao Carregar  arquivo: ');
define('_MD_ERROR_RETURN','<h4>Erros Encontrados Enquanto carregava</h4>');

/* Permissions defines */
define('_AM_DEBASER_PERM_MANAGEMENT', 'Permições De Administração ');
define('_AM_DEBASER_PERM_PERMSNOTE', '<div><strong>NOTE:</strong> Por favor esteja atento que até mesmo se você &#8217ve disponibilizou permissões  corretas aqui, um grupo poderia não ver os artigos ou 
blocos se você  don&#8217t também conceda que permissões de grupo para acessar o módulo. Para Fazer, vá  <strong>System admin > Grupos</strong>, escolha o grupo apropriado e clique no checkboxes para conceder acesso ao seus Usuários .</div>');
define('_AM_DEBASER_PERM_CPERMISSIONS', 'Permissões de categoria');
define('_AM_DEBASER_PERM_CSELECTPERMISSIONS', 'Categorias selecionadas que cada grupo Possa ver ');
define('_AM_DEBASER_PERM_CNOCATEGORY', 'Não pode fixar permissão \'s: Nenhuma Categoria \'s  ainda foi criado !');
define('_AM_DEBASER_PERM_FPERMISSIONS', 'Permições De Arquivos');
define('_AM_DEBASER_PERM_FNOFILES', 'Não pode fixar permissão\'s: Nenhum arquivo ainda foi criado!');
define('_AM_DEBASER_PERM_FSELECTPERMISSIONS', 'Selecione os arquivos que cada grupo pode visualizar ');

define("_AM_DEBASER_FCATEGORY_CIMAGE", "Selecione a categoria de imagem:");
define("_AM_DEBASER_FCATEGORY_GROUPPROMPT", "Permissões de Acesso a categoria:");
?>