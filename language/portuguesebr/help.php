<?php
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();

echo '
<table><tr><td>
<h1>debaser!</h1>
<b> Tradu��o Da Ajuda Por PowerTranslation</b><br><br>

<b>O que � debaser?</b><br>
debaser � um pequeno em Xoops embutiu multim�dia-Tocador. Com debaser � poss�vel Tocar v�rios arquivos de multim�dias dentro de Xoops. Voc� pode selecionar v�rios Tocador.<br><br>

<b>Requerimentos de sistema para debaser<br></b>
debaser trabalha melhor com Xoops 2.0.6 ou mais alto. Em vers�es mais velhas voc� ver� algumas advert�ncias s�rdidas e notifica��es. Arrependido para isso.<br><br>

<b>Como instalar debaser<br></b>
ser�o instalados debaser como qualquer outro m�dulo por administra��o de m�dulo. O upload de pastas de pap�is, batchload, images/category e images/category/thumbs precisam de CHMOD 777.<br>

<b>Como para arquivos de upload</b><br>
Simples! Isto pode ser feito com �nico upload ou batchload.<br> Com �nico upload pode voc� upload um arquivam de cada vez. <br>O tamanho de m�ximo do arquivo depende das coloca��es em php.ini ou as prefer�ncias do m�dulo.<br> Quando voc� � no submeta p�gina que o tamanho de m�ximo ser� exibido.<br> Se voc� quer usar batchload que voc� tem a upload os arquivos com ftp em pasta de pap�is de batchload. <br>Se isto � terminado v� para administra��o de debaser e fa�a tique-taque em batchload.<br> Todo arquivo na pasta de pap�is de batchload ser� processado.<br> Para ambas as possibilidades de upload pode selecionar voc� ser�o geradas categorias de wether automaticamente ou manualmente. <br>Durante batchload poderia acontecer, isso arquiva � somado sem mimetype, mas n�o preocupa.<br>Estes arquivos ser�o marcados para ser aprovados e voc� pode fixar a informa��o para isto.<br><br>

<b>Como acrescentar liga��es a arquivos Simples!</b> <br><br>Isto pode ser feito de lado de usu�rio e admin ap�ia se prefer�ncias de m�dulo permitirem isto. <br>Voc� tem a duas escolhas. <br>Digite toda a informa��o ou a leas a URL.<br> Se voc� n�o prov� informa��o adicional que o manuscrito tenta fazer isto para voc�.<br> Mas h� duas coisas ruins.<br> O manuscrito tenta ler o primeiro 10 kb do arquivo. <br>Mas n�o toda a informa��o sobre um arquivo mente dentro do primeiro 10 kb.<br> Mas por que n�o lendo mais de 10 kb?<br> N�o faz sentido nenhum para esperar tal muito tempo por s� somar uma liga��o.<br> As outras not�cias ruins s�o se fopen n�o � permitido no servidor remoto que o arquivo n�o pode ser lido.<br><br>

<b>Como somar os Tocadores<br></b>
Voc� pode somar tantos Tocadores quanto voc� gosta. Isto pode ser feito em administra��o.<br> H� pouco digite o nome do Tocador e o c�digo para o Tocador. Nos lugares onde o c�digo est� pedindo a fonte voc� t�m digitar a vari�vel seguinte: <@ mp3file @>. <br>Lugares no c�digo onde altura, largura e autostart s�o usados, deve ser substitu�do com as vari�veis <@ altura @>, <@ largura @> e <@ autostart @>. <br>Sempre use dobrar-cita��es dentro do Tocador-c�digo!

<b>Fluxos de r�dio Tocando<br></b>
� constru�da a funcionalidade de iradio 0.5 em debaser. <br>
N�o � poss�vel separar as fun��es do Tocador de r�dio do Tocador de multim�dias. <br>
Isto significa se voc� quer permitir os convidados para usar o bloco de r�dio que eles t�m acesso a parte de Tocador de multim�dias.<br>

<b>Multim�dia-formatos definindo</b><br>
Ser�o definidos multim�dia-arquivos pela extens�o deles/delas.<br>
 Na parte de administra��o debaixo de Filetypes voc� achar� uma forma por criar multim�dia-formatos novos. <br>
 Arquivo-extens�o pode estar at� quatro car�ter deseje (sem o ponto).<br>
  Voc� tem que prover o nome da aplica��o e o mimetype do arquivo. <br>
  O mimetype de um arquivo consiste em duas partes divididas por um golpe.<br>
   Se voc� tem mais de um mimetype ent�o para um filetype os digite separando um ao outro com um espa�o em branco. <br>
   Sempre fa�a o pr�-sele��o para Tocadores. <br>
   Se voc� n�o sabe o mimetype correto de um arquivo s� prova enviar o arquivo dentro.<br>
    No redirecione p�gina que o mimetype correto ser�o exibidos.<br><br>

<b>Informa��o adicional</b><br>
Notifica��es n�o trabalham com batchload! Ou o faz desejo que a conta de e-mail ou o inbox s�o inundados com mensagens?<br><br>

<b>prefer�ncias de debaser</b><br>
H� muitas prefer�ncias para fixar. <br>Uma explica��o de todas as fun��es segue agora.<br><br>


Carregue: Aqui voc� pode permitir se podem ser carregados arquivos.<br><br>

Arquivos por p�gina: Quantos arquivos deveriam ser exibidos por p�gina?<br><br>

Permiss�o de Upload: Aqui voc� pode definir quais grupos s�o permitidos a arquivos de upload.<br> Uploads para convidados � uma op��o separada.<br><br>

Permita an�nimo submeter arquivos: Eu tenho que explicar isto?<br><br>

Autoapprove �nico uploads de arquivo? <br>Aqui voc� pode definir se �nico uploads forem automaticamente aprovados.<br><br>

Autoapprove submeteu liga��es?<br> Aqui voc� pode definir se submeteu liga��es s�o automaticamente aprovadas.<br><br>

Batchloads de Autoapprove?<br> Aqui voc� pode definir se batchloads forem automaticamente aprovados.<br><br>

Max. �nico uploadsize em bytes:<br> Aqui voc� pode definir o tamanho de m�ximo para �nico uploads. <br>O valor exibido reflete o m�ximo que fixa de seu php.ini.<br><br>

Tipo de submiss�o de dados Aqui voc� pode definir se arquivos, podem ser submetidas liga��es para arquivos ou ambos.<br><br>

Convidado que Taxa Aqui voc� pode definir se s�o permitidos para os convidados votar em arquivos.<br><br>

Categorias autom�ticas para �nico uploads? <br>Se voc� quer ter menos trabalho (depende) use esta op��o fixou esta op��o para Sim. <br>Neste caso ser�o lidas categorias (se dispon�vel) do arquivo. <br>Se Nenhum � poss�vel selecionar as categorias de um pulldown-card�pio. <br>Se informa��o de categoria n�o � fixa ou n�o pode ser lida que a categoria ser� definida como Outro.<br> Claro que voc� pode mudar o nome desta categoria.<br> Esta categoria n�o pode ser apagada com administra��o de debaser. <br>Se voc� apaga esta categoria com phpMyAdmin que este m�dulo pode n�o funcionar corretamente.<br> Se voc� n�o quer exibir esta categoria uso o sistema de permiss�o de debaser.<br><br>

Categorias autom�ticas para batchloads? <br>Para explica��o veja o ponto pr�vio.<br><br>

Diret�rio de Upload para imagens de categoria Aqui voc� pode definir o caminho para as imagens de categoria. <br>Se voc� seleciona outra pasta de pap�is que a falta um, tem certeza que esta pasta de pap�is � writable.<br><br>

Thumbnail: Ser�o exibidas imagens de categoria pelas Thumbnail.<br> Fixe a op��o para Nenhum se voc� servidor n�o usa nenhuma gr�fico-biblioteca. Filetypes apoiado s�o gif, jpg e png.<br><br>

Largura de m�ximo de imagens de Thumbnail Aqui voc� pode definir a largura de m�ximo das imagens de categoria.<br> Trabalhos s� se Thumbnail de op��o s�o fixadas Sim.<br><br>

Altura de m�ximo de imagens de unha do polegar Aqui voc� pode definir a altura de m�ximo das imagens de categoria.<br> Trabalhos s� se Thumbnail de op��o s�o fixadas Sim.<br><br>

Qualidade de Thumbnail: Aqui voc� pode definir a qualidade das imagens de categoria.<br> O valor 100 qualidade de meios 100%. Trabalhos s� se Thumbnail de op��o s�o fixadas Sim.<br><br>

Atualize Thumbnail?<br> Se selecionou ser�o atualizadas imagens de unha do polegar a cada p�gina fa�a, caso contr�rio a primeira imagem de unha do polegar ser� usada indiferentemente.<br> Trabalhos s� se Thumbnail de op��o s�o fixadas Sim.<br><br>

Mantenha Rela��o de Aspecto de Imagem? <br>Trabalhos s� se Thumbnail de op��o s�o fixadas Sim.<br><br>

Use sistema de permiss�o para categorias? <br>Aqui voc� pode definir se voc� quiser usar o XOOPS permiss�o sistema para categorias ou n�o.<br><br>

Use sistema de permiss�o para arquivos? Aqui voc� pode definir se voc� quiser usar o XOOPS permiss�o sistema para arquivos ou n�o.<br><br>

Pr�-sele��o de Tocador Aqui voc� pode definir os grupos que deveriam usar os Tocadores de preselected. Usu�rios an�nimos usam os Tocadores de preselected por falta.

Poderiam ser ordenados arquivos de tipo em Arquivos em crit�rios diferentes.<br><br>

Ordem de Ordem de arquivos de arquivos pode estar ascendendo ou pode descer.<br><br>

Ordene categorias em Categorias poderia ser ordenado em crit�rios diferentes.
<br><br>
Ordem de Ordem de categorias de categorias pode estar ascendendo ou pode descer.<br><br>

Use tooltips Com tooltips ser�o mostradas informa��es adicionais sobre liga��es nos blocos e em genre.php.<br><br>



Mudan�as em 0.7<br>
- Id3-classe nova que l� id3v1 - e id3vs-informa��o<br>
- debaser definitivamente trabalha com register_globals Fora<br>
- Notifica��es somaram<br>
- Cria��o autom�tica ou manual de categorias<br>
- Os usu�rios registrados podem selecionar o Tocador de favourite deles/delas<br>
- Poderiam ser submetidas liga��es para mpeg-arquivos<br>
- Biblioteca de Overlib� para popup-informa��o. Se voc� quer usar Overlib� com seus modelos visite http://smarty.php.net ou http://www.bosrup.com<br><br>


Mudan�as em 0.8<br>
- Id3-classe nova que � informa��o lida capaz de quase qualquer formato de arquivo<br>
- Cria��o de subcategories aninhado ilimitado<br>
- Quase todas formas est�o usando xoopsform-classes agora<br>
- Complete reescreva de lado de admin<br>
- Complete reescreva de myDebaser-p�gina. Agora podem ser nomeados os Tocadores a filetypes<br>
- Arquivo - e podem ser administrados mimetypes agora<br>
- Arquivos comoventes para outras categorias<br>
- Modelos de Superfluos apagaram<br>
- Permiss�es somaram<br>
- Admin ser� notificado se s�o submetidos filetypes desconhecido<br>
- Imagens para categorias principais<br>


Mudan�as em 0.9<br>
- Podem ser ordenados categorias e arquivos em crit�rios diferentes<br>
- N�mero de arquivos em categorias ser� exibido<br>
- Bloco para arquivos populares somados<br>
- Pr�-sele��o de Tocadores<br><br>


Mudan�as em 0.91<br>
- O contador para arquivos visitados e carrega<br>
- Popup-Info-manuscrito novo<br>
- Bugfixes em upload-manuscrito<br>

<br>
Mudan�as em 0.92<br>
- Campos adicionais por inserir altura, largura e autostart do Tocador<br>
- Blocos novos que Tocar�o os arquivos dentro do bloco<br>
- Max de Bugfix. upload classificam segundo o tamanho<br>
- Bugfix Radioadministration, longo fluxo-urls � agora poss�vel<br>
- Filetype. wmv somaram <br><br>

Mudan�as em 0.93<br>
- Download Em janela javascript<br>
- Corre��o do template<br>
- Corre��o em uploads<br>
- Filetype Para Som <b>Mid</b> Adicionado<br>
- Tradu��o Para Portugues , Portuguesebr, portugues.do.brasil.<br>
- Icones Administrativos <br><br>

Cr�ditos<br>
onlamp.swf e v�rias partes pequenas n�o s�o escritas por mim mas de Mark Lubkowitz (mail@mark-lubkowitz.de).<br> Overlib� � de http://www.bosrup.com/web/overlib /. A id3-classe � getid3. Neste momento eu gostaria de agradecer Chapi, gnikalu e Predador o apoio deles/delas.<br><br>

Desculpas
Este � meu primeiro m�dulo, assim n�o se queixa do c�digo. Se voc� por favor acha que erros severos os informam a perseguidor de bicho.<br><br>

Coisas para fazer<br>
- Playlists<br>
- O Tocador de Winamp etc. pp.<br><br>

Desfrute! frankblack <br><br><br>
 
<b>Tradu��es e Corre��es:</b> deejotamix@gmail.com<br><br><br>
________________________________Texto Original_____________________________________<br><br><br>
<ol><li><span style="color:#ff0000; font-weight:bold;">What is debaser?</span><br />
debaser is a small in Xoops embedded multimedia-play. With debaser it is possible to play various multimedia files inside Xoops. You can select several player.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">System requirements for debaser</span><br />
debaser works best with Xoops 2.0.6 or higher. In older versions you\'ll see some nasty warnings and notices. Sorry for that.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">How to install debaser</span><br />
debaser will be installed like any other module via module administration. The folders <strong>upload, batchload, images/category</strong> and <strong>images/category/thumbs</strong> need <strong>CHMOD 777</strong>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">How to upload files</span><br />
Simple! This can be done with <strong>single upload</strong> or <strong>batchload</strong>. With <strong>single upload</strong> you can upload one file at a time. The maximum size of the file depends on the settings in php.ini or the preferences of the module. When you are on the submit page the maximum size will be displayed. If you want to use <strong>batchload</strong> you have to upload the files with ftp into batchload folder. If this is done go to debaser administration and click on <strong>batchload</strong>. Every file in the batchload folder will be processed. For both upload possibilities you can select wether categories will be generated automatically or manually. During batchload it could happen, that files are added with no mimetype, but don\'t worry. These files will be marked to be approved and you can set the information for this.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">How to add links to files</span><br />
Simple! This can be done from user side and admin side if module preferences allow this. You have to two choices. Type in all the information or at leas the URL. If you do not supply additional information the script tries to do this for you. But there are two bad things. The script tries to read the first 10 kb of the file. But not all information about a file lies within the first 10 kb. But why not reading more than 10 kb? It makes no sense to wait such a long time for only adding a link. The other bad news is if <strong>fopen</strong> is not allowed on the remote server the file cannot be read.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">How to add players</span><br />
You can add as many players as you like. This can be done in administration. Just type in the name of the player and the code for the player. At the places where the code is asking for the source you have to type the following variable: <strong><@mp3file@></strong>. Places in the code where height, width and autostart are used, must be replaced with the variables <strong><@height@>, <@width@> and <@autostart@>. <strong>Always</strong> use double-quotes inside the player-code!</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Playing radio streams</span><br />
The functionality of iradio 0.5 is built into debaser. It is not possible to separate the functions of the radio player from the multimedia player. This means if you want to allow guests to use the radio block they have access to multimedia player part.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Defining multimedia-formats</span><br />
Multimedia-files will be defined through their extension. In the administration part under <strong>Filetypes</strong> you\'ll find a form for creating new multimedia-formats. File-extension can be up to four characters long (without the dot). You must provide the name of the application and the mimetype of the file. The mimetype of a file consists of two parts divided by a slash. If you have more than one mimetype for a filetype then type them in separating each other with a blank. Always make the preselection for players. If you don\'t know the correct mimetype of a file just try to send the file in. On the redirect page the correct mimetype will be displayed.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Additional information</span><br />
Notifications do not work with <strong>batchload</strong>! Or do you want that the email account or the inbox are flooded with messages?</li><br />

<li><span style="color:#ff0000; font-weight:bold;">debaser preferences</span><br />
There are a lot of preferences to set. An explanation of all the functions follow now.<br /><br />
<ol><li><span style="color: #006633; font-weight:bold;">Download:</span> Here you can allow if files can be downloaded.</li><br />
<li><span style="color: #006633; font-weight:bold;">Files per page:</span> How many files should be displayed per page?</li><br />
<li><span style="color: #006633; font-weight:bold;">Upload permission:</span> Here you can define which groups are allowed to upload files. Uploads for guests is a separate option.</li><br />
<li><span style="color: #006633; font-weight:bold;">Allow anonymous to submit files:</span> Must I explain this?</li><br />
<li><span style="color: #006633; font-weight:bold;">Autoapprove single file uploads?</span> Here you can define if single uploads are approved automatically.</li><br />
<li><span style="color: #006633; font-weight:bold;">Autoapprove submitted links?</span> Here you can define if submitted links are approved automatically.</li><br />
<li><span style="color: #006633; font-weight:bold;">Autoapprove batchloads?</span> Here you can define if batchloads are approved automatically.</li><br />
<li><span style="color: #006633; font-weight:bold;">Max. Single uploadsize in bytes:</span> Here you can define the maximum size for single uploads. The value displayed reflects the maximum setting from your php.ini.</li><br />
<li><span style="color: #006633; font-weight:bold;">Kind of data submission</span> Here you can define if files, links to files or both can be submitted.</li><br />
<li><span style="color: #006633; font-weight:bold;">Guest Rating</span> Here you can define if guests are allowed to vote for files.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatic categories for single uploads?</span> If you want to have less work (depends) use this option set this option to <strong>Yes</strong>. In this case categories will be read (if available) from the file. If <strong>No</strong> it is possible to select the categories from a pulldown-menu. If category information is not set or can\'t be read the category will be defined as <strong>Other</strong>. Of course you can change the name of this category. This category cannot be deleted with debaser administration. If you delete this category with phpMyAdmin this module may not function properly. If you don\'t want this category to be displayed use the permission system of debaser.</li><br />
<li><span style="color: #006633; font-weight:bold;">Automatic categories for batchloads?</span> For explanation see the previous point.</li><br />
<li><span style="color: #006633; font-weight:bold;">Upload directory for category images</span> Here you can define the path for the category images. If you select another folder than the default one, make sure that this folder is writable.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnails:</span> Category images will be displayed through the thumbnails. Set the option to <strong>No</strong> if you server does not use any graphic-libraries. Supported filetypes are gif, jpg and png.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximum width of thumbnail images</span> Here you can define the maximum width of the category images. Works only if option Thumbnails is set to <strong>Yes</strong>.</li><br />
<li><span style="color: #006633; font-weight:bold;">Maximum height of thumbnail images</span> Here you can define the maximum height of the category images. Works only if option Thumbnails is set to <strong>Yes</strong>.</li><br />
<li><span style="color: #006633; font-weight:bold;">Thumbnail Quality:</span> Here you can define the quality of the category images. The value <strong>100</strong> means quality 100 %. Works only if option Thumbnails is set to <strong>Yes</strong>.</li><br />
<li><span style="color: #006633; font-weight:bold;">Update Thumbnails?</span> If selected thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. Works only if option Thumbnails is set to <strong>Yes</strong>.</li><br />
<li><span style="color: #006633; font-weight:bold;">Keep Image Aspect Ratio?</span> Works only if option Thumbnails is set to <strong>Yes</strong>.</li><br />
<li><span style="color: #006633; font-weight:bold;">Use permission system for categories?</span> Here you can define if you want to use the XOOPS permission system for categories or not.</li><br />
<li><span style="color: #006633; font-weight:bold;">Use permission system for files?</span> Here you can define if you want to use the XOOPS permission system for files or not.</li><br />
<li><span style="color: #006633; font-weight:bold;">Player preselection</span> Here you can define the groups that should use preselected players. Anonymous users use preselected players per default.</li><br />
<li><span style="color: #006633; font-weight:bold;">Sort files on</span> Files could be sorted on different criteria.</li><br />
<li><span style="color: #006633; font-weight:bold;">Order of files</span> Order of files can be ascending or descending.</li><br />
<li><span style="color: #006633; font-weight:bold;">Sort categories on</span> Categories could be sorted on different criteria.</li><br />
<li><span style="color: #006633; font-weight:bold;">Order of categories</span> Order of categories can be ascending or descending.</li><br />
<li><span style="color: #006633; font-weight:bold;">Use tooltips</span> With tooltips additional information will be shown on links in the blocks and in genre.php.</li><br />
</ol></li><br />

<li><span style="color:#ff0000; font-weight:bold;">Changes in 0.7</span><br />
- New id3-class which reads id3v1- and id3vs-information<br />
- debaser works definitely with register_globals Off<br />
- Notifications added<br />
- Automatic or manual creation of categories<br />
- Registered users can select their favourite player<br />
- Links to mpeg-files could be submitted<br />
- Overlib&copy; library for popup-information. If you want to use Overlib&copy; with your templates visit <a href="http://smarty.php.net/manual/en/language.function.popup.php" target="_blank">http://smarty.php.net</a> or <a href="http://www.bosrup.com/web/overlib/" target="_blank">http://www.bosrup.com</a><br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Changes in 0.8</span><br />
- New id3-class that is able to read information from nearly any file format<br />
- Creation of unlimited nested subcategories<br />
- Nearly all forms are using now xoopsform-classes<br />
- Complete rewrite of admin side<br />
- Complete rewrite of myDebaser-page. Now players can be assigned to filetypes<br />
- File- and mimetypes can be managed now<br />
- Moving files to other categories<br />
- Superfluos templates deleted<br />
- Permissions added<br />
- Admin will be notified if unknown filetypes are submitted<br />
- Images for main categories<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Changes in 0.9</span><br />
- Categories and files can be sorted on different criteria<br />
- Number of files in categories will be displayed<br />
- Block for popular files added<br />
- Preselection of players<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Changes in 0.91</span><br />
- Counter for visited files and downloads<br />
- New Popup-Info-Script<br />
- Bugfixes in upload-script<br />
</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Changes in 0.92</span><br />
- Additional fields for inserting height, width and autostart of the player<br />
- New blocks which will play the files inside the block<br />
- Bugfix max. upload size<br />
- Bugfix Radioadministration, long stream-urls are now possible<br />
- Filetype .wmv added
</li><br /><br>
Mudan�as em 0.93<br>
- Download Em janela javascript<br>
- Corre��o do template<br>
- Corre��o em uploads<br>
- Filetype Para Som <b>Mid</b> Adicoinado<br>
- Tradu��o Para Portugues , Portuguesebr, portugues.do.brasil. <br><br>
<li><span style="color:#ff0000; font-weight:bold;">Credits</span><br />
onlamp.swf and various small parts are not written by me but from Mark Lubkowitz (mail@mark-lubkowitz.de). Overlib&copy; is from http://www.bosrup.com/web/overlib/. The id3-class is getid3. At this point I would like to thank Chapi, gnikalu and Predator for their support.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Apologies</span><br />
This is my first module, so do not complain about the code. If you find severe errors please report them to <a href="http://dev.xoops.org/modules/xfmod/tracker/?func=add&group_id=1024&atid=197" target="_blank">bug tracker</a>.</li><br />

<li><span style="color:#ff0000; font-weight:bold;">Things to do</span><br />
- Playlists<br />
- Winamp player
etc. pp.</li><br /></ul>

Enjoy!
frankblack  

</td></tr></table>';

	xoops_cp_footer();

?>