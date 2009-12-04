<?php
// $Id: language/portuguesebr/modinfo.php,v 0.93 23/12/2006 10:00:00 DeejotaMix Exp $
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

define("_MI_DEBASER_NAME","�udio/V�deo");

//Defini��o do idioma para template manager
define("_MI_DEBASER_UPLOADER","debaser Uploader");
define("_MI_DEBASER_MPEGPLAYER","Player em Popup-Window");
define("_MI_DEBASER_INDEX","debaser pagina inicial");
define("_MI_DEBASER_GENRES","Exibi��es das categorias para  debaser");
define("_MI_DEBASER_AMEDITGENRE","ADMIN: Editar Categoria(s)");
define("_MI_DEBASER_AMGENREMANAGE","ADMIN: Gerenciar Categoria(s)");
define("_MI_DEBASER_AMPLAYMANAGE","ADMIN: Gerenciar Tocadores");
define("_MI_DEBASER_AMSHOWMPEGS","ADMIN: Visualiza��es de arquivos agrupados por genero");
define("_MI_DEBASER_AMEDITPLAY","ADMIN: Editar Tocadores");
define("_MI_DEBASER_EDITMPEGS","ADMIN: Editar Arquivos");
define("_MI_DEBASER_APPROVE","<strong>ADMIN:</strong> Aprovar Arquivos");
define("_MI_DEBASER_SINGLEFILE","Melhores Arquivos");

define("_MI_DEBASER_DESC","Mediaplayer Para Xoops 2.x");

//Defini��o do idioma para submenu
define("_MI_DEBASER_SUBMIT","Enviar");
define("_MI_DEBASER_MYDEBASER","Selecionar tocador");

//Defini��o do idioma para blocks
define("_MI_DEBASER_LATEST","Arquivos recentes");
define("_MI_DEBASER_LATEST_DESC","Melhores arquivos recentes");
define('_MI_DEBASER_RATED','Top arquivos avaliados');
define('_MI_DEBASER_RATED_DESC','Melhores arquivos avaliados');
define('_MI_DEBASER_HITS','Top Downloads');
define('_MI_DEBASER_HITS_DESC','Melhores arquivos mais baixados');
define('_MI_DEBASER_VIEWS','Top Mais Vistos');
define('_MI_DEBASER_VIEWS_DESC','Os Melhores arquivos visitados');
define("_MI_DEBASER_DISPLATEST","Ou�a o mais recente arquivo");
define("_MI_DEBASER_DISPLATEST_DESC","Ou�a o mais recente arquivo dentro do bloco ");
define("_MI_DEBASER_DISPRATED","Play best rated file");
define("_MI_DEBASER_DISPRATED_DESC","Ou�a o melhor arquivo avaliado dentro do bloco ");
define("_MI_DEBASER_DISPFEATURED","Play featured file");
define("_MI_DEBASER_DISPFEATURED_DESC","Ou�a um arquivo caracterizado dentro do bloco ");
define("_MI_DEBASER_DISPDOWN","Ou�a o top Arquivo mais baixado");
define("_MI_DEBASER_DISPDOWN_DESC","Ou�a o top Arquivo mais baixado dentro do bloco");
define("_MI_DEBASER_DISPVIEWED","Ou�a o arquivo mais visualizado");
define("_MI_DEBASER_DISPVIEWED_DESC","Ou�a o arquivo mais visualizado dentro do bloco");

// preferences constants
define('_MI_DEBASER_DOWNLOAD','1. Download');
define('_MI_DEBASER_ALLOWDOWN','<span style="color:#ff0000;"><em>Permitir Downloads</em></span>');
define('_MI_DEBASER_PLAYLIST','2. Playlists');
define('_MI_DEBASER_PLAYLISTDSC','<span style="color:#ff0000;"><em>Permitir playlists(N�O CONTUDO)</em></span>');
define('_MI_DEBASER_VIEWLIMIT','3. Arquivos por pagina');
define('_MI_DEBASER_VIEWLIMITDESC','<span style="color:#ff0000;"><em>Arquivos a ser exibido por p�gina </em></span>');
define('_MI_DEBASER_UPLOAD','4. Permi��o para Upload');
define('_MI_DEBASER_UPLOADDESC','<span style="color:#ff0000;"><em>Grupos que s�o permitidos submeter arquivos</em></span>');
define('_MI_DEBASER_ANONPOST','5. Permitir que an�nimos envie arquivos');
define('_MI_DEBASER_ANONPOSTDESC','');
define('_MI_DEBASER_AUTOFILEAPPROVE','6. Auto aprovar arquivos unicos enviados?');
define('_MI_DEBASER_AUTOFILEAPPROVEDSC','<span style="color:#ff0000;"><em>Uploads dos arquivos unicos s�o aprovados imediatamente</em></span>');
define('_MI_DEBASER_AUTOLINKAPPROVE','7. Auto aprovar links de arquivos imediatamente?');
define('_MI_DEBASER_AUTOLINKAPPROVEDSC','<span style="color:#ff0000;"><em>Os Links Enviados S�o Aprovados imediatamente</em></span>');
define('_MI_DEBASER_AUTOBATAPPROVE','8. Auto aprovar Uploads em massa?');
define('_MI_DEBASER_AUTOBATAPPROVEDSC','<span style="color:#ff0000;"><em>Os Arquivos Em Massa S�o aprovados imediatamente</em></span>');
define('_MI_DEBASER_MAXSIZE','9. Tamanho Maximo para upload dos arquivos unicos em bytes');
define('_MI_DEBASER_MAXSIZEDSC','<span style="color:#ff0000;"><em>O tamanho padr�o se encontra no php.ini</em></span>');
define('_MI_DEBASER_UPSEL','10. Tipo de submiss�o de dados ');
define('_MI_DEBASER_UPSELDSC','<span style="color:#ff0000;"><em>Aqui voc� pode definir se os arquivos, podem ser submetidas por links ou por  arquivos ou ambos </em></span>');
define('_MI_DEBASER_UPFILE','Arquivos');
define('_MI_DEBASER_UPLINK','Links');
define('_MI_DEBASER_UPBOTH','Ambos');
define('_MI_DEBASER_GUESTVOTE','11. Avalia��o de an�nimos ');
define('_MI_DEBASER_GUESTVOTEDSC','<span style="color:#ff0000;"><em>Aqui voce Pode Definir se s�o permitidos que os visitantes votem nos arquivos</em></span>');
define('_MI_DEBASER_AUTOGENRESINGLE','12. Categorias autom�ticas para �nico uploads ?');
define('_MI_DEBASER_AUTOGENRESINGLEDSC','<span style="color:#ff0000;"><em>Aqui voc� pode definir se ser�o criadas categorias da informa��o do arquivo ou se voc� quer fazer pr�prias categorias</em></span>');
define('_MI_DEBASER_AUTOGENREBATCH','13. Categorias autom�ticas para uploads em massa?');
define('_MI_DEBASER_AUTOGENREBATCHDSC','<span style="color:#ff0000;"><em>Aqui voc� pode definir se ser�o criadas categorias da informa��o do arquivo ou se voc� quer fazer pr�prias categorias</em></span>');
define('_MI_DEBASER_CATEGORYIMG','14. Diret�rio de Upload para categoria imagens');
define('_MI_DEBASER_USETHUMBS', '15. Thumbnails:');
define('_MI_DEBASER_USETHUMBSDSC', '<span style="color:#ff0000;"><em>Tipos de arquivos suportados: JPG, GIF, PNG.<br /><br />Downloads usar� thumb nails para imagens . Fixe  \'N�o\' usar imagem original se o servidor n�o suportar esta op��o. </em></span>');
define('_MI_DEBASER_SHOTWIDTH', '16. Largura Maxima Do screenshot/thumbnails imagens');
define('_MI_DEBASER_SHOTHEIGHT', '17. Altura Maxima Do screenshot/thumbnails imagens');
define('_MI_DEBASER_SHOTWIDTHDSC', '');
define('_MI_DEBASER_QUALITY', '18. Qualidade do Thumb Nail: ');
define('_MI_DEBASER_IMGUPDATE', '19. Atualizar Thumbnails?');
define('_MI_DEBASER_IMGUPDATEDSC', '<span style="color:#ff0000;"><em>Se selecionou Thumbnail imagens ser� atualizado a cada p�gina feita, caso contr�rio o primeiro thumbnail imagem ser� usado indiferentemente.</em></span>');
define("_MI_DEBASER_KEEPASPECT", "20. Mantenha Rela��o de Aspecto de Imagem ?");
define("_MI_DEBASER_KEEPASPECTDSC", "Selecionando esta Op��o a imagem n�o ira perder sua qualidade");
define('_MI_DEBASER_USECATPERM','21. Usar permiss�es para categorias?');
define('_MI_DEBASER_USECATPERMDSC','<span style="color:#ff0000;"><em>Aqui voc� pode definir se voc� quiser ter trabalho adicional usando um sistema 
de permiss�o para categorias ou n�o </em></span>');
define('_MI_DEBASER_USEFILEPERM','22. Usar pemiss�es para os arquivos?');
define('_MI_DEBASER_USEFILEPERMDSC','<span style="color:#ff0000;"><em>Aqui voc� pode definir se voc� quiser ter trabalho adicional usando um sistema 
de permiss�o para arquivos ou n�o</em></span>');
define("_MI_DEBASER_PRESELECTPLAY","23. Pr�-sele��o de Tocador");
define("_MI_DEBASER_PRESELECTPLAYDESC","<span style='color:#ff0000;'><em>Aqui voc� pode definir quais usos de grupo pre-selecionam os Tocadores. 
Convidados sempre usar�o os Tocadores pre-selecionados.</em></span>");
define('_MI_DEBASER_SORTBY', '24. Ordene os arquivos por:');
define('_MI_DEBASER_SORTBY_DSC', '<span style="color:#ff0000;"><em>Aqui voc� pode definir como ordenar os arquivos no lado do usu�rio</em></span>');
define('_MI_DEBASER_ORDERBY', '25. Ordene os arquivos por:');
define('_MI_DEBASER_ORDERBY_DSC', '<span style="color:#ff0000;"><em>Aqui voc� pode definir como ordenar os arquivos no lado do usu�rio</em></span>');
define("_MI_DEBASER_CATSORTBY", '26. Ordene as categorias por:');
define("_MI_DEBASER_CATSORTBY_DSC","<span style='color:#ff0000;'><em>Aqui voc� pode definir como ordenar as categorias no lado do usu�rio</em></span>");
define("_MI_DEBASER_CATORDERBY","27. Ordene as categorias por:");
define("_MI_DEBASER_CATORDERBY_DSC","<span style='color:#ff0000;'><em>Aqui voc� pode definir como ordenar as categorias no lado do usu�rio</em></span>");
define("_MI_DEBASER_USETOOLTIPS","28. Use tooltips:");
define("_MI_DEBASER_USETOOLTIPSDSC","<span style='color:#ff0000;'><em>Aqui voc� pode definir se tooltips com info adicional deveriam ser usados para genre.php e blocos</em></span>");
define('_MI_DEBASER_ID','ID');
define('_MI_DEBASER_ARTIST','Artista');
define('_MI_DEBASER_TITLE','Titulo');
define('_MI_DEBASER_WEIGHT','Peso');
define("_MI_DEBASER_CATEGORY","Nome da categoria");

//Defini��o do idioma para flyout menu
define("_MI_DEBASER_ADMIN","Administra��o");
define("_MI_DEBASER_EDITGENRES","Editar categoria");
define("_MI_DEBASER_EDITPLAYERS","Editar Tocadores");
define("_MI_DEBASER_SINGLEUP","Upload Unico");
define("_MI_DEBASER_BATCH","Upload em Massa");
define("_MI_DEBASER_MAPPROVE","Aprovar arquivos");
define('_MI_DEBASER_PERMISSIONS','Permiss�es');
define('_MI_DEBASER_FILETYPES', 'Tipos de arquivos');
define('_MI_DEBASERRAD_ADMIN','Administra��o do Radio');

//Defini��o do idioma para notifications
define('_MI_DEBASER_GLOBAL_NOTIFY', 'Global');
define('_MI_DEBASER_GLOBAL_NOTIFYDSC', 'Global notifica��es.');

define('_MI_DEBASER_GENRE_NOTIFY', 'Categoria');
define('_MI_DEBASER_GENRE_NOTIFYDSC', 'Notifica��es relativo a categorias .');

define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFY', 'Nova categoria');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYCAP', 'Notifique-me Sobre novas categorias.');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYDSC', 'Notifica��o em categorias novas.');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notifica��o Autom�tica: Nova Categoria');

define ('_MI_DEBASER_SONG_NOTIFY', 'Arquivos');
define ('_MI_DEBASER_SONG_NOTIFYDSC', 'Notifica��es relativo a arquivos.');

define ('_MI_DEBASER_SONG_NEWSONG_NOTIFY', 'Novo Arquivo');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYCAP', 'Notifique-me Sobre novos arquivos.');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYDSC', 'Notifica��es em arquivos novos.');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notifica��o Autom�tica: Novo Arquivo');

define ('_MI_DEBASER_SUBMIT_NOTIFY', 'Arquivos');
define ('_MI_DEBASER_SUBMIT_NOTIFYDSC', 'Notifica��es relativo a uploads.');

define ('_MI_DEBASER_NEWSUBMIT_NOTIFY', 'Novo upload');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYCAP', 'Notifique-me Sobre novos uploads.');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYDSC', 'Notifica��es em Novos uploads.');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notifica��o Autom�tica: Novo upload');

define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFY', 'mimetype Desconhecido');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYCAP', 'Notifique-me Sobre mimetype Desconhecido.');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYDSC', 'Notifica��o em mimetypes desconhecido.');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notifica��o Autom�tica: mimetype Desconhecido');

define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFY', 'mimetype Vazio');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYCAP', 'Notifique-me Sobre mimetype Vazio.');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYDSC', 'Notifica��o em mimetype Vazio.');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notifica��o Autom�tica: mimetype Vazio');

define('_MI_DEBASERRAD_DESC','D� um bloco em popup com que voc� pode Ouvir r�dio da internet');
define('_MI_DEBASERRAD_TITLE','Radio Online');

define("_MI_DEBASER_WARNING", "Este m�dulo vem como �, sem qualquer garantia tudo que. Embora este m�dulo � beta, ainda est� debaixo de desenvolvimento ativo. Esta libera��o pode ser usada em um site da Web ao vivo ou um ambiente de produ��o, mas seu uso est� debaixo de sua propria responsabilidade  isso  significa que o autor n�o � respons�vel.");
define('_MI_DEBASER_AUTHORMSG','debaser � meu primeiro m�dulo de XOOPS assim n�o se queixa do c�digo. Me perdoe por n�o saber melhor, mas eu estou bastante orgulhoso que eu vim t�o distante. N�o ruim para algu�m com habilidades de programa��o muito limitadas? Trabalho duro para algu�m que s� pode escrever  &lt;?php echo "Oi Mundo"; ?&gt; ;-).');
define("_MI_DEBASER_MODULE_DISCLAIMER","Retrata��o");
define("_MI_DEBASER_AUTHOR_WORD","Coment�rios do autor");
define("_MI_DEBASER_MODULE_STATUS","Vers�o");
define("_MI_DEBASER_AUTHOR_INFO","Informa��o do autor ");
define("_MI_DEBASER_AUTHOR_WEBSITE","Site da Web do autor");
define("_MI_DEBASER_AUTHOR_EMAIL","E-mail do autor ");
define("_MI_DEBASER_AUTHOR_CREDITS","Cr�ditos do m�dulo ");
define("_MI_DEBASER_MODULE_SUPPORT","Site De Suporte");
define("_MI_DEBASER_MODULE_BUG","Submeter bug");
define("_MI_DEBASER_MODULE_FEATURE","Caracter�stica de pedido");
define("_MI_DEBASER_MODULE_INFO","Informa��o do m�dulo geral");
define('_AM_DEBASER_BY','Editado e traduzido Por: <a href="mailto:deejotamix@gmail.com">deejotamix@gmail.com</a><br> Desenvolvido por:');

define('_MI_DEBASER_HELP','Help');

define('_MI_DEBASER_CREDITS','Eu gostaria de agradecer todos os fomentador de m�dulo que me deram a oportunidade roubar e aprender dos manuscritos excelentes deles/delas. Especialmente: "Sobre este m�dulo" roubado de marcan \ "inteligente-m�dulos de s. "Mimetype-administra��o", "Categoria-imagens e partes de getfile.php roubadas de v�rios wf-m�dulos. "Admin-interface" roubada de hszalasar \ "m�dulos de s. Eu gostaria de agradecer o getid3-projeto a classe deles/delas por ler informa��o de arquivo. Eu gostaria de agradecer Mark Lubkowitz a id3-classe dele que me inspirou para este m�dulo. Eu gostaria de agradecer Bob Janes a exoops-convers�o dele de iRadio. Claro que eu gostaria de agradecer Predador, chapi, phppp, Marcan, L�quido, gnikalu e Mithrandir a ajuda deles/delas. Se eu esquecesse algu�m: Me Desculpe !');
?>