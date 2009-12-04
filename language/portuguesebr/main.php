<?php
// $Id: language/portuguesebr/main.php,v 0.93 23/12/2006 10:00:00 DeejotaMix Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//                   Tradu��o: deejotamix@gmail.com                          //
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

define("_MD_DEBASER_FILE","Arquivo:");
define("_MD_DEBASER_ALBUM","Album:");
define('_MD_DEBASER_TAMANHO','Tamanho:');
define("_MD_DEBASER_YEAR","ano:");
define("_MD_DEBASER_COMMENT","Informac�es Adicionais:");
define("_MD_DEBASER_TRACK","Faixa:");
define("_MD_DEBASER_GENRE","Categoria:");
define("_MD_DEBASER_LENGTH","Dura��o:");
define("_MD_DEBASER_BITRATE","Bitrate:");
define("_MD_DEBASER_FREQUENCY","Frequencia:");
define("_MD_DEBASER_DOWNLOAD","Baixar Agora");
define("_MD_DEBASER_UPLOADSUCC","CArregado com sucesso!");
define("_MD_DEBASER_TITLE","Titulo:");
define("_MD_DEBASER_ARTIST","Artista:");
define("_MD_DEBASER_SECONDS","Minutos");
define("_MD_DEBASER_KBITS","kBit/s");
define("_MD_DEBASER_HERTZ","Hz");
define("_MD_DEBASER_ADDED","Adicionado em");

//Defini��o do idioma para category.html
define("_MD_DEBASER_INDEX","Inicio");
define("_MD_DEBASER_PLAY","Tocar");
define("_MD_DEBASER_NOFILES","N�o h� nenhum arquivo atualmente dispon�vel nesta categoria");

//Defini��o do idioma para upload.html
define("_MD_DEBASER_MAXUPSIZE","Tamanho maximo para upload = ");
define("_MD_DEBASER_MAXBYTES","bytes");
define("_MD_DEBASER_EXTLINK","Link Externo");
define("_MD_DEBASER_FCATEGORY_GROUPPROMPT", "Permiss�o de acesso da categoria :");

//Defini��o do idioma para getfile.php
define("_MD_DEBASER_FILENOTFOUND","O arquivo n�o Foi Encontrado !");

//Defini��o do idioma para singlefile.php
define("_MD_DEBASER_READMORE","Mais informa��es...");
define("_MD_DEBASER_RATETHIS", "Avalie este arquivo!");
define("_MD_DEBASER_RATING", "Avaliado");
define("_MD_DEBASER_VOTES", "Votos");
define("_MD_DEBASER_NOTRATED", "Este hasn&#8217t de arquivo sido avaliado contudo ");
define("_MD_DEBASER_VIEWS","Visualiza��es");
define("_MD_DEBASER_HITS","Downloads");
define("_MD_DEBASER_EDIT","Editar");

//Defini��o do idioma para ratefile.php
define("_MD_DEBASER_NORATING", "Voc� n�o selecionou uma avalia��o para este arquivo! ");
define("_MD_DEBASER_VOTEONCE", "Por favor n�o vote mais de uma vez no mesmo recurso .");
define("_MD_DEBASER_VOTEAPPRE", "Seu voto Foi Computado.");
define("_MD_DEBASER_THANKYOU", "Obrigado por Disponibilizar um  tempo para votar aqui no %s");
define("_MD_DEBASER_UNKNOWNERROR", "ERROR. Retornando Voc� de Onde Veio!");

//Defini��o do idioma para mydebaser.php
define('_MD_DEBASER_DBUPDATED','Database Atualizado Com sucesso!');
define('_MD_DEBASER_MYFAVPLAYER','Selecione seu tocador preferido:');

//Defini��o do idioma para player.php
define("_MD_DEBASER_NOPLAYERYET","<strong>Voce n�o selecionou um tocador! fixe seu tocador em submenu myDebaser.</strong><br /><br />Esta janela fechar� automaticamente.");

//Defini��o do idioma para include/functions.php
define("_MD_DEBASER_ALREADYEXIST","Este Arquivo j� exixte!");

define("_MD_DEBASER_ADDLINK","Adicionarlink");
define("_MD_DEBASER_ADDMPEG","Adicionar arquivo");

/* class/uploader.php */
define('_MD_NOFILECHOOSE','Voc� n�o escolheu um arquivo para upload ou o servidor tem o Armazenamento 
insuficiente para upload deste arquivo .!');
define('_MD_INVALIDFILESIZE','Tamanho do arquivo invalido');
define('_MD_FILENAMEEMPTY','O nome do arquivo esta azio');
define('_MD_NOFILEUP','O arquivo n�o foi carregado � algum erro');
define('_MD_PROBUP','Ocorreu um problema com seu carregamento. Error: 0');
define('_MD_TOOBIG1','O arquivo que voc� est� tentando Carregar � muito grande . Error: 1');
define('_MD_TOOBIG2','O arquivo que voc� est� tentando Carregar � muito grande. Error: 2');
define('_MD_PARTIALLY','O Arquivo que voc� carregou s�era um carregamento parcialmente. Error: 3');
define('_MD_NOFILESEL4','Nenhum Arquivo Selecionado para Carregar. Error: 4');
define('_MD_NOFILESEL5','Nenhum Arquivo Selecionado para Carregar. Error: 5');
define('_MD_UPDIRNOTSET','Diret�rio de Upload n�o fixou');
define('_MD_FAILOPENDIR','Falha na opera��o do diret�rio: ');
define('_MD_FAILOPENDIRWRITE','Falha na opera��o do diret�rio na escrita de permiss�o: ');
define('_MD_FILESIZE','Tamanho do arquivo: ');
define('_MD_MAXSIZEALLOW','Tamanho maximo permitido: ');
define('_MD_MIMENOTALLOW','MIME type N�o Permitido: ');
define('_MD_FAILUPLOADING','Falha ao Carregar  arquivo: ');
define('_MD_ERROR_RETURN','<h4>Erros Encontrados Enquanto carregava</h4>');

/* uploadresult.php */
define("_MD_DEBASER_CLOSEWIN","Fechar Janela");
define("_MD_DEBASER_THANKYOUAPPROVE","Obrigado por sua submiss�o. Sua submiss�o deve ser aprovada pelo webmaster.");

?>