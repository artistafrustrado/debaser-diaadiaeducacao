<?php
include '../../../../mainfile.php';

include '../../../../include/cp_functions.php';

	xoops_cp_header();

echo '
<table><tr><td>
<h1>debaser!</h1>
<b> Tradução Da Ajuda Por PowerTranslation</b><br><br>

<b>O que é debaser?</b><br>
debaser é um pequeno em Xoops embutiu multimídia-Tocador. Com debaser é possível Tocar vários arquivos de multimídias dentro de Xoops. Você pode selecionar vários Tocador.<br><br>

<b>Requerimentos de sistema para debaser<br></b>
debaser trabalha melhor com Xoops 2.0.6 ou mais alto. Em versões mais velhas você verá algumas advertências sórdidas e notificações. Arrependido para isso.<br><br>

<b>Como instalar debaser<br></b>
serão instalados debaser como qualquer outro módulo por administração de módulo. O upload de pastas de papéis, batchload, images/category e images/category/thumbs precisam de CHMOD 777.<br>

<b>Como para arquivos de upload</b><br>
Simples! Isto pode ser feito com único upload ou batchload.<br> Com único upload pode você upload um arquivam de cada vez. <br>O tamanho de máximo do arquivo depende das colocações em php.ini ou as preferências do módulo.<br> Quando você é no submeta página que o tamanho de máximo será exibido.<br> Se você quer usar batchload que você tem a upload os arquivos com ftp em pasta de papéis de batchload. <br>Se isto é terminado vá para administração de debaser e faça tique-taque em batchload.<br> Todo arquivo na pasta de papéis de batchload será processado.<br> Para ambas as possibilidades de upload pode selecionar você serão geradas categorias de wether automaticamente ou manualmente. <br>Durante batchload poderia acontecer, isso arquiva é somado sem mimetype, mas não preocupa.<br>Estes arquivos serão marcados para ser aprovados e você pode fixar a informação para isto.<br><br>

<b>Como acrescentar ligações a arquivos Simples!</b> <br><br>Isto pode ser feito de lado de usuário e admin apóia se preferências de módulo permitirem isto. <br>Você tem a duas escolhas. <br>Digite toda a informação ou a leas a URL.<br> Se você não provê informação adicional que o manuscrito tenta fazer isto para você.<br> Mas há duas coisas ruins.<br> O manuscrito tenta ler o primeiro 10 kb do arquivo. <br>Mas não toda a informação sobre um arquivo mente dentro do primeiro 10 kb.<br> Mas por que não lendo mais de 10 kb?<br> Não faz sentido nenhum para esperar tal muito tempo por só somar uma ligação.<br> As outras notícias ruins são se fopen não é permitido no servidor remoto que o arquivo não pode ser lido.<br><br>

<b>Como somar os Tocadores<br></b>
Você pode somar tantos Tocadores quanto você gosta. Isto pode ser feito em administração.<br> Há pouco digite o nome do Tocador e o código para o Tocador. Nos lugares onde o código está pedindo a fonte você têm digitar a variável seguinte: <@ mp3file @>. <br>Lugares no código onde altura, largura e autostart são usados, deve ser substituído com as variáveis <@ altura @>, <@ largura @> e <@ autostart @>. <br>Sempre use dobrar-citações dentro do Tocador-código!

<b>Fluxos de rádio Tocando<br></b>
É construída a funcionalidade de iradio 0.5 em debaser. <br>
Não é possível separar as funções do Tocador de rádio do Tocador de multimídias. <br>
Isto significa se você quer permitir os convidados para usar o bloco de rádio que eles têm acesso a parte de Tocador de multimídias.<br>

<b>Multimídia-formatos definindo</b><br>
Serão definidos multimídia-arquivos pela extensão deles/delas.<br>
 Na parte de administração debaixo de Filetypes você achará uma forma por criar multimídia-formatos novos. <br>
 Arquivo-extensão pode estar até quatro caráter deseje (sem o ponto).<br>
  Você tem que prover o nome da aplicação e o mimetype do arquivo. <br>
  O mimetype de um arquivo consiste em duas partes divididas por um golpe.<br>
   Se você tem mais de um mimetype então para um filetype os digite separando um ao outro com um espaço em branco. <br>
   Sempre faça o pré-seleção para Tocadores. <br>
   Se você não sabe o mimetype correto de um arquivo só prova enviar o arquivo dentro.<br>
    No redirecione página que o mimetype correto serão exibidos.<br><br>

<b>Informação adicional</b><br>
Notificações não trabalham com batchload! Ou o faz desejo que a conta de e-mail ou o inbox são inundados com mensagens?<br><br>

<b>preferências de debaser</b><br>
Há muitas preferências para fixar. <br>Uma explicação de todas as funções segue agora.<br><br>


Carregue: Aqui você pode permitir se podem ser carregados arquivos.<br><br>

Arquivos por página: Quantos arquivos deveriam ser exibidos por página?<br><br>

Permissão de Upload: Aqui você pode definir quais grupos são permitidos a arquivos de upload.<br> Uploads para convidados é uma opção separada.<br><br>

Permita anônimo submeter arquivos: Eu tenho que explicar isto?<br><br>

Autoapprove único uploads de arquivo? <br>Aqui você pode definir se único uploads forem automaticamente aprovados.<br><br>

Autoapprove submeteu ligações?<br> Aqui você pode definir se submeteu ligações são automaticamente aprovadas.<br><br>

Batchloads de Autoapprove?<br> Aqui você pode definir se batchloads forem automaticamente aprovados.<br><br>

Max. Único uploadsize em bytes:<br> Aqui você pode definir o tamanho de máximo para único uploads. <br>O valor exibido reflete o máximo que fixa de seu php.ini.<br><br>

Tipo de submissão de dados Aqui você pode definir se arquivos, podem ser submetidas ligações para arquivos ou ambos.<br><br>

Convidado que Taxa Aqui você pode definir se são permitidos para os convidados votar em arquivos.<br><br>

Categorias automáticas para único uploads? <br>Se você quer ter menos trabalho (depende) use esta opção fixou esta opção para Sim. <br>Neste caso serão lidas categorias (se disponível) do arquivo. <br>Se Nenhum é possível selecionar as categorias de um pulldown-cardápio. <br>Se informação de categoria não é fixa ou não pode ser lida que a categoria será definida como Outro.<br> Claro que você pode mudar o nome desta categoria.<br> Esta categoria não pode ser apagada com administração de debaser. <br>Se você apaga esta categoria com phpMyAdmin que este módulo pode não funcionar corretamente.<br> Se você não quer exibir esta categoria uso o sistema de permissão de debaser.<br><br>

Categorias automáticas para batchloads? <br>Para explicação veja o ponto prévio.<br><br>

Diretório de Upload para imagens de categoria Aqui você pode definir o caminho para as imagens de categoria. <br>Se você seleciona outra pasta de papéis que a falta um, tem certeza que esta pasta de papéis é writable.<br><br>

Thumbnail: Serão exibidas imagens de categoria pelas Thumbnail.<br> Fixe a opção para Nenhum se você servidor não usa nenhuma gráfico-biblioteca. Filetypes apoiado são gif, jpg e png.<br><br>

Largura de máximo de imagens de Thumbnail Aqui você pode definir a largura de máximo das imagens de categoria.<br> Trabalhos só se Thumbnail de opção são fixadas Sim.<br><br>

Altura de máximo de imagens de unha do polegar Aqui você pode definir a altura de máximo das imagens de categoria.<br> Trabalhos só se Thumbnail de opção são fixadas Sim.<br><br>

Qualidade de Thumbnail: Aqui você pode definir a qualidade das imagens de categoria.<br> O valor 100 qualidade de meios 100%. Trabalhos só se Thumbnail de opção são fixadas Sim.<br><br>

Atualize Thumbnail?<br> Se selecionou serão atualizadas imagens de unha do polegar a cada página faça, caso contrário a primeira imagem de unha do polegar será usada indiferentemente.<br> Trabalhos só se Thumbnail de opção são fixadas Sim.<br><br>

Mantenha Relação de Aspecto de Imagem? <br>Trabalhos só se Thumbnail de opção são fixadas Sim.<br><br>

Use sistema de permissão para categorias? <br>Aqui você pode definir se você quiser usar o XOOPS permissão sistema para categorias ou não.<br><br>

Use sistema de permissão para arquivos? Aqui você pode definir se você quiser usar o XOOPS permissão sistema para arquivos ou não.<br><br>

Pré-seleção de Tocador Aqui você pode definir os grupos que deveriam usar os Tocadores de preselected. Usuários anônimos usam os Tocadores de preselected por falta.

Poderiam ser ordenados arquivos de tipo em Arquivos em critérios diferentes.<br><br>

Ordem de Ordem de arquivos de arquivos pode estar ascendendo ou pode descer.<br><br>

Ordene categorias em Categorias poderia ser ordenado em critérios diferentes.
<br><br>
Ordem de Ordem de categorias de categorias pode estar ascendendo ou pode descer.<br><br>

Use tooltips Com tooltips serão mostradas informações adicionais sobre ligações nos blocos e em genre.php.<br><br>



Mudanças em 0.7<br>
- Id3-classe nova que lê id3v1 - e id3vs-informação<br>
- debaser definitivamente trabalha com register_globals Fora<br>
- Notificações somaram<br>
- Criação automática ou manual de categorias<br>
- Os usuários registrados podem selecionar o Tocador de favourite deles/delas<br>
- Poderiam ser submetidas ligações para mpeg-arquivos<br>
- Biblioteca de Overlib© para popup-informação. Se você quer usar Overlib© com seus modelos visite http://smarty.php.net ou http://www.bosrup.com<br><br>


Mudanças em 0.8<br>
- Id3-classe nova que é informação lida capaz de quase qualquer formato de arquivo<br>
- Criação de subcategories aninhado ilimitado<br>
- Quase todas formas estão usando xoopsform-classes agora<br>
- Complete reescreva de lado de admin<br>
- Complete reescreva de myDebaser-página. Agora podem ser nomeados os Tocadores a filetypes<br>
- Arquivo - e podem ser administrados mimetypes agora<br>
- Arquivos comoventes para outras categorias<br>
- Modelos de Superfluos apagaram<br>
- Permissões somaram<br>
- Admin será notificado se são submetidos filetypes desconhecido<br>
- Imagens para categorias principais<br>


Mudanças em 0.9<br>
- Podem ser ordenados categorias e arquivos em critérios diferentes<br>
- Número de arquivos em categorias será exibido<br>
- Bloco para arquivos populares somados<br>
- Pré-seleção de Tocadores<br><br>


Mudanças em 0.91<br>
- O contador para arquivos visitados e carrega<br>
- Popup-Info-manuscrito novo<br>
- Bugfixes em upload-manuscrito<br>

<br>
Mudanças em 0.92<br>
- Campos adicionais por inserir altura, largura e autostart do Tocador<br>
- Blocos novos que Tocarão os arquivos dentro do bloco<br>
- Max de Bugfix. upload classificam segundo o tamanho<br>
- Bugfix Radioadministration, longo fluxo-urls é agora possível<br>
- Filetype. wmv somaram <br><br>

Mudanças em 0.93<br>
- Download Em janela javascript<br>
- Correção do template<br>
- Correção em uploads<br>
- Filetype Para Som <b>Mid</b> Adicionado<br>
- Tradução Para Portugues , Portuguesebr, portugues.do.brasil.<br>
- Icones Administrativos <br><br>

Créditos<br>
onlamp.swf e várias partes pequenas não são escritas por mim mas de Mark Lubkowitz (mail@mark-lubkowitz.de).<br> Overlib© é de http://www.bosrup.com/web/overlib /. A id3-classe é getid3. Neste momento eu gostaria de agradecer Chapi, gnikalu e Predador o apoio deles/delas.<br><br>

Desculpas
Este é meu primeiro módulo, assim não se queixa do código. Se você por favor acha que erros severos os informam a perseguidor de bicho.<br><br>

Coisas para fazer<br>
- Playlists<br>
- O Tocador de Winamp etc. pp.<br><br>

Desfrute! frankblack <br><br><br>
 
<b>Traduçôes e Correções:</b> deejotamix@gmail.com<br><br><br>
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
Mudanças em 0.93<br>
- Download Em janela javascript<br>
- Correção do template<br>
- Correção em uploads<br>
- Filetype Para Som <b>Mid</b> Adicoinado<br>
- Tradução Para Portugues , Portuguesebr, portugues.do.brasil. <br><br>
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