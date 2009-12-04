<?php
// $Id: language/portuguesebr/modinfo.php,v 0.93 23/12/2006 10:00:00 DeejotaMix Exp $
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

define("_MI_DEBASER_NAME","Áudio/Vídeo");

//Definição do idioma para template manager
define("_MI_DEBASER_UPLOADER","debaser Uploader");
define("_MI_DEBASER_MPEGPLAYER","Player em Popup-Window");
define("_MI_DEBASER_INDEX","debaser pagina inicial");
define("_MI_DEBASER_GENRES","Exibições das categorias para  debaser");
define("_MI_DEBASER_AMEDITGENRE","ADMIN: Editar Categoria(s)");
define("_MI_DEBASER_AMGENREMANAGE","ADMIN: Gerenciar Categoria(s)");
define("_MI_DEBASER_AMPLAYMANAGE","ADMIN: Gerenciar Tocadores");
define("_MI_DEBASER_AMSHOWMPEGS","ADMIN: Visualizações de arquivos agrupados por genero");
define("_MI_DEBASER_AMEDITPLAY","ADMIN: Editar Tocadores");
define("_MI_DEBASER_EDITMPEGS","ADMIN: Editar Arquivos");
define("_MI_DEBASER_APPROVE","<strong>ADMIN:</strong> Aprovar Arquivos");
define("_MI_DEBASER_SINGLEFILE","Melhores Arquivos");

define("_MI_DEBASER_DESC","Mediaplayer Para Xoops 2.x");

//Definição do idioma para submenu
define("_MI_DEBASER_SUBMIT","Enviar");
define("_MI_DEBASER_MYDEBASER","Selecionar tocador");

//Definição do idioma para blocks
define("_MI_DEBASER_LATEST","Arquivos recentes");
define("_MI_DEBASER_LATEST_DESC","Melhores arquivos recentes");
define('_MI_DEBASER_RATED','Top arquivos avaliados');
define('_MI_DEBASER_RATED_DESC','Melhores arquivos avaliados');
define('_MI_DEBASER_HITS','Top Downloads');
define('_MI_DEBASER_HITS_DESC','Melhores arquivos mais baixados');
define('_MI_DEBASER_VIEWS','Top Mais Vistos');
define('_MI_DEBASER_VIEWS_DESC','Os Melhores arquivos visitados');
define("_MI_DEBASER_DISPLATEST","Ouça o mais recente arquivo");
define("_MI_DEBASER_DISPLATEST_DESC","Ouça o mais recente arquivo dentro do bloco ");
define("_MI_DEBASER_DISPRATED","Play best rated file");
define("_MI_DEBASER_DISPRATED_DESC","Ouça o melhor arquivo avaliado dentro do bloco ");
define("_MI_DEBASER_DISPFEATURED","Play featured file");
define("_MI_DEBASER_DISPFEATURED_DESC","Ouça um arquivo caracterizado dentro do bloco ");
define("_MI_DEBASER_DISPDOWN","Ouça o top Arquivo mais baixado");
define("_MI_DEBASER_DISPDOWN_DESC","Ouça o top Arquivo mais baixado dentro do bloco");
define("_MI_DEBASER_DISPVIEWED","Ouça o arquivo mais visualizado");
define("_MI_DEBASER_DISPVIEWED_DESC","Ouça o arquivo mais visualizado dentro do bloco");

// preferences constants
define('_MI_DEBASER_DOWNLOAD','1. Download');
define('_MI_DEBASER_ALLOWDOWN','<span style="color:#ff0000;"><em>Permitir Downloads</em></span>');
define('_MI_DEBASER_PLAYLIST','2. Playlists');
define('_MI_DEBASER_PLAYLISTDSC','<span style="color:#ff0000;"><em>Permitir playlists(NÃO CONTUDO)</em></span>');
define('_MI_DEBASER_VIEWLIMIT','3. Arquivos por pagina');
define('_MI_DEBASER_VIEWLIMITDESC','<span style="color:#ff0000;"><em>Arquivos a ser exibido por página </em></span>');
define('_MI_DEBASER_UPLOAD','4. Permição para Upload');
define('_MI_DEBASER_UPLOADDESC','<span style="color:#ff0000;"><em>Grupos que são permitidos submeter arquivos</em></span>');
define('_MI_DEBASER_ANONPOST','5. Permitir que anônimos envie arquivos');
define('_MI_DEBASER_ANONPOSTDESC','');
define('_MI_DEBASER_AUTOFILEAPPROVE','6. Auto aprovar arquivos unicos enviados?');
define('_MI_DEBASER_AUTOFILEAPPROVEDSC','<span style="color:#ff0000;"><em>Uploads dos arquivos unicos são aprovados imediatamente</em></span>');
define('_MI_DEBASER_AUTOLINKAPPROVE','7. Auto aprovar links de arquivos imediatamente?');
define('_MI_DEBASER_AUTOLINKAPPROVEDSC','<span style="color:#ff0000;"><em>Os Links Enviados São Aprovados imediatamente</em></span>');
define('_MI_DEBASER_AUTOBATAPPROVE','8. Auto aprovar Uploads em massa?');
define('_MI_DEBASER_AUTOBATAPPROVEDSC','<span style="color:#ff0000;"><em>Os Arquivos Em Massa São aprovados imediatamente</em></span>');
define('_MI_DEBASER_MAXSIZE','9. Tamanho Maximo para upload dos arquivos unicos em bytes');
define('_MI_DEBASER_MAXSIZEDSC','<span style="color:#ff0000;"><em>O tamanho padrão se encontra no php.ini</em></span>');
define('_MI_DEBASER_UPSEL','10. Tipo de submissão de dados ');
define('_MI_DEBASER_UPSELDSC','<span style="color:#ff0000;"><em>Aqui você pode definir se os arquivos, podem ser submetidas por links ou por  arquivos ou ambos </em></span>');
define('_MI_DEBASER_UPFILE','Arquivos');
define('_MI_DEBASER_UPLINK','Links');
define('_MI_DEBASER_UPBOTH','Ambos');
define('_MI_DEBASER_GUESTVOTE','11. Avaliação de anônimos ');
define('_MI_DEBASER_GUESTVOTEDSC','<span style="color:#ff0000;"><em>Aqui voce Pode Definir se são permitidos que os visitantes votem nos arquivos</em></span>');
define('_MI_DEBASER_AUTOGENRESINGLE','12. Categorias automáticas para único uploads ?');
define('_MI_DEBASER_AUTOGENRESINGLEDSC','<span style="color:#ff0000;"><em>Aqui você pode definir se serão criadas categorias da informação do arquivo ou se você quer fazer próprias categorias</em></span>');
define('_MI_DEBASER_AUTOGENREBATCH','13. Categorias automáticas para uploads em massa?');
define('_MI_DEBASER_AUTOGENREBATCHDSC','<span style="color:#ff0000;"><em>Aqui você pode definir se serão criadas categorias da informação do arquivo ou se você quer fazer próprias categorias</em></span>');
define('_MI_DEBASER_CATEGORYIMG','14. Diretório de Upload para categoria imagens');
define('_MI_DEBASER_USETHUMBS', '15. Thumbnails:');
define('_MI_DEBASER_USETHUMBSDSC', '<span style="color:#ff0000;"><em>Tipos de arquivos suportados: JPG, GIF, PNG.<br /><br />Downloads usará thumb nails para imagens . Fixe  \'Não\' usar imagem original se o servidor não suportar esta opção. </em></span>');
define('_MI_DEBASER_SHOTWIDTH', '16. Largura Maxima Do screenshot/thumbnails imagens');
define('_MI_DEBASER_SHOTHEIGHT', '17. Altura Maxima Do screenshot/thumbnails imagens');
define('_MI_DEBASER_SHOTWIDTHDSC', '');
define('_MI_DEBASER_QUALITY', '18. Qualidade do Thumb Nail: ');
define('_MI_DEBASER_IMGUPDATE', '19. Atualizar Thumbnails?');
define('_MI_DEBASER_IMGUPDATEDSC', '<span style="color:#ff0000;"><em>Se selecionou Thumbnail imagens será atualizado a cada página feita, caso contrário o primeiro thumbnail imagem será usado indiferentemente.</em></span>');
define("_MI_DEBASER_KEEPASPECT", "20. Mantenha Relação de Aspecto de Imagem ?");
define("_MI_DEBASER_KEEPASPECTDSC", "Selecionando esta Opção a imagem não ira perder sua qualidade");
define('_MI_DEBASER_USECATPERM','21. Usar permissões para categorias?');
define('_MI_DEBASER_USECATPERMDSC','<span style="color:#ff0000;"><em>Aqui você pode definir se você quiser ter trabalho adicional usando um sistema 
de permissão para categorias ou não </em></span>');
define('_MI_DEBASER_USEFILEPERM','22. Usar pemissões para os arquivos?');
define('_MI_DEBASER_USEFILEPERMDSC','<span style="color:#ff0000;"><em>Aqui você pode definir se você quiser ter trabalho adicional usando um sistema 
de permissão para arquivos ou não</em></span>');
define("_MI_DEBASER_PRESELECTPLAY","23. Pré-seleção de Tocador");
define("_MI_DEBASER_PRESELECTPLAYDESC","<span style='color:#ff0000;'><em>Aqui você pode definir quais usos de grupo pre-selecionam os Tocadores. 
Convidados sempre usarão os Tocadores pre-selecionados.</em></span>");
define('_MI_DEBASER_SORTBY', '24. Ordene os arquivos por:');
define('_MI_DEBASER_SORTBY_DSC', '<span style="color:#ff0000;"><em>Aqui você pode definir como ordenar os arquivos no lado do usuário</em></span>');
define('_MI_DEBASER_ORDERBY', '25. Ordene os arquivos por:');
define('_MI_DEBASER_ORDERBY_DSC', '<span style="color:#ff0000;"><em>Aqui você pode definir como ordenar os arquivos no lado do usuário</em></span>');
define("_MI_DEBASER_CATSORTBY", '26. Ordene as categorias por:');
define("_MI_DEBASER_CATSORTBY_DSC","<span style='color:#ff0000;'><em>Aqui você pode definir como ordenar as categorias no lado do usuário</em></span>");
define("_MI_DEBASER_CATORDERBY","27. Ordene as categorias por:");
define("_MI_DEBASER_CATORDERBY_DSC","<span style='color:#ff0000;'><em>Aqui você pode definir como ordenar as categorias no lado do usuário</em></span>");
define("_MI_DEBASER_USETOOLTIPS","28. Use tooltips:");
define("_MI_DEBASER_USETOOLTIPSDSC","<span style='color:#ff0000;'><em>Aqui você pode definir se tooltips com info adicional deveriam ser usados para genre.php e blocos</em></span>");
define('_MI_DEBASER_ID','ID');
define('_MI_DEBASER_ARTIST','Artista');
define('_MI_DEBASER_TITLE','Titulo');
define('_MI_DEBASER_WEIGHT','Peso');
define("_MI_DEBASER_CATEGORY","Nome da categoria");

//Definição do idioma para flyout menu
define("_MI_DEBASER_ADMIN","Administração");
define("_MI_DEBASER_EDITGENRES","Editar categoria");
define("_MI_DEBASER_EDITPLAYERS","Editar Tocadores");
define("_MI_DEBASER_SINGLEUP","Upload Unico");
define("_MI_DEBASER_BATCH","Upload em Massa");
define("_MI_DEBASER_MAPPROVE","Aprovar arquivos");
define('_MI_DEBASER_PERMISSIONS','Permissões');
define('_MI_DEBASER_FILETYPES', 'Tipos de arquivos');
define('_MI_DEBASERRAD_ADMIN','Administração do Radio');

//Definição do idioma para notifications
define('_MI_DEBASER_GLOBAL_NOTIFY', 'Global');
define('_MI_DEBASER_GLOBAL_NOTIFYDSC', 'Global notificações.');

define('_MI_DEBASER_GENRE_NOTIFY', 'Categoria');
define('_MI_DEBASER_GENRE_NOTIFYDSC', 'Notificações relativo a categorias .');

define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFY', 'Nova categoria');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYCAP', 'Notifique-me Sobre novas categorias.');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYDSC', 'Notificação em categorias novas.');
define ('_MI_DEBASER_GENRE_NEWGENRE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação Automática: Nova Categoria');

define ('_MI_DEBASER_SONG_NOTIFY', 'Arquivos');
define ('_MI_DEBASER_SONG_NOTIFYDSC', 'Notificações relativo a arquivos.');

define ('_MI_DEBASER_SONG_NEWSONG_NOTIFY', 'Novo Arquivo');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYCAP', 'Notifique-me Sobre novos arquivos.');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYDSC', 'Notificações em arquivos novos.');
define ('_MI_DEBASER_SONG_NEWSONG_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação Automática: Novo Arquivo');

define ('_MI_DEBASER_SUBMIT_NOTIFY', 'Arquivos');
define ('_MI_DEBASER_SUBMIT_NOTIFYDSC', 'Notificações relativo a uploads.');

define ('_MI_DEBASER_NEWSUBMIT_NOTIFY', 'Novo upload');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYCAP', 'Notifique-me Sobre novos uploads.');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYDSC', 'Notificações em Novos uploads.');
define ('_MI_DEBASER_NEWSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação Automática: Novo upload');

define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFY', 'mimetype Desconhecido');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYCAP', 'Notifique-me Sobre mimetype Desconhecido.');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYDSC', 'Notificação em mimetypes desconhecido.');
define ('_MI_DEBASER_MIMETYPESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação Automática: mimetype Desconhecido');

define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFY', 'mimetype Vazio');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYCAP', 'Notifique-me Sobre mimetype Vazio.');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYDSC', 'Notificação em mimetype Vazio.');
define ('_MI_DEBASER_EMPTYMIMETYPE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Notificação Automática: mimetype Vazio');

define('_MI_DEBASERRAD_DESC','Dá um bloco em popup com que você pode Ouvir rádio da internet');
define('_MI_DEBASERRAD_TITLE','Radio Online');

define("_MI_DEBASER_WARNING", "Este módulo vem como é, sem qualquer garantia tudo que. Embora este módulo é beta, ainda está debaixo de desenvolvimento ativo. Esta liberação pode ser usada em um site da Web ao vivo ou um ambiente de produção, mas seu uso está debaixo de sua propria responsabilidade  isso  significa que o autor não é responsável.");
define('_MI_DEBASER_AUTHORMSG','debaser é meu primeiro módulo de XOOPS assim não se queixa do código. Me perdoe por não saber melhor, mas eu estou bastante orgulhoso que eu vim tão distante. Não ruim para alguém com habilidades de programação muito limitadas? Trabalho duro para alguém que só pode escrever  &lt;?php echo "Oi Mundo"; ?&gt; ;-).');
define("_MI_DEBASER_MODULE_DISCLAIMER","Retratação");
define("_MI_DEBASER_AUTHOR_WORD","Comentários do autor");
define("_MI_DEBASER_MODULE_STATUS","Versão");
define("_MI_DEBASER_AUTHOR_INFO","Informação do autor ");
define("_MI_DEBASER_AUTHOR_WEBSITE","Site da Web do autor");
define("_MI_DEBASER_AUTHOR_EMAIL","E-mail do autor ");
define("_MI_DEBASER_AUTHOR_CREDITS","Créditos do módulo ");
define("_MI_DEBASER_MODULE_SUPPORT","Site De Suporte");
define("_MI_DEBASER_MODULE_BUG","Submeter bug");
define("_MI_DEBASER_MODULE_FEATURE","Característica de pedido");
define("_MI_DEBASER_MODULE_INFO","Informação do módulo geral");
define('_AM_DEBASER_BY','Editado e traduzido Por: <a href="mailto:deejotamix@gmail.com">deejotamix@gmail.com</a><br> Desenvolvido por:');

define('_MI_DEBASER_HELP','Help');

define('_MI_DEBASER_CREDITS','Eu gostaria de agradecer todos os fomentador de módulo que me deram a oportunidade roubar e aprender dos manuscritos excelentes deles/delas. Especialmente: "Sobre este módulo" roubado de marcan \ "inteligente-módulos de s. "Mimetype-administração", "Categoria-imagens e partes de getfile.php roubadas de vários wf-módulos. "Admin-interface" roubada de hszalasar \ "módulos de s. Eu gostaria de agradecer o getid3-projeto a classe deles/delas por ler informação de arquivo. Eu gostaria de agradecer Mark Lubkowitz a id3-classe dele que me inspirou para este módulo. Eu gostaria de agradecer Bob Janes a exoops-conversão dele de iRadio. Claro que eu gostaria de agradecer Predador, chapi, phppp, Marcan, Líquido, gnikalu e Mithrandir a ajuda deles/delas. Se eu esquecesse alguém: Me Desculpe !');
?>