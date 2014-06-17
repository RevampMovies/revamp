<!-- (c) 2014 Revamp.  
             _
             \`\
             |= |
            /-  ;.---.
      _ __.'     (____)
       `         (_____)
       _'  ._ .' (____)
        `        (___)
       --`'------'`          
       Made in Italy
-->
<!DOCTYPE html>

<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <!-- for Google -->
	<meta name="title" content="Revamp" />
	<meta name="description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<meta name="keywords" content="revamp,streaming,indie,historic,film,movie" />
	<meta name="author" content="Lorenzo Stella,Giulio Perin" />
	<meta name="copyright" content="2014" />
	<meta name="application-name" content="Revamp" />
	<!-- for Facebook -->          
	<meta property="og:title" content="Revamp" />
	<meta property="og:type" content="article" />
	<meta property="og:image" content=" http://www.revampmovies.org/images/share_logo.png" />
	<meta property="og:url" content=" http://www.revampmovies.org" />
	<meta property="og:description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<!-- for Twitter -->          
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Revamp" />
	<meta name="twitter:description" content="Revamp is a web application for the streaming of indipendent and historic films." />
	<meta name="twitter:image" content="http://www.revampmovies.org/images/share_logo.png" />
	<meta name="twitter:creator" content="@lorenzostella"> 
    <link href="css/item.css" rel="stylesheet" type="text/css">
    <link href="css/detailed-info.css" rel="stylesheet" type="text/css">
    <link href="css/frame.css" rel="stylesheet" type="text/css">
    <link href="css/header.css" rel="stylesheet" type="text/css">
    <link href="css/navsettings.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="shortcut icon" href="favicon.ico" />
	<style>
		#privacy {
			color: rgb(255, 255, 255);
			font-family: "Open Sans", sans-serif;
			font-size: 14px;
		}
		#print {
			color: #2d75df;
			text-decoration:none;
		}
	</style>
    <title>Privacy - Revamp</title>
</head>

<body style="margin: 0px;height: 100%;">
    <div class="background">
		
		<!-- header -->
        <div id="header">


            <div class="title">
                <img src="images/revamp.svg" heigth="20px" width="20px" style="vertical-align: middle"/>&nbsp;Revamp
            </div>

            <div class="movies">
                Film
                <div class="selected movies"></div>
            </div>

            <div class="settings"></div>
            <div class="queue"></div>
            <div class="favorites"></div>

            <form class="SearchField" method="GET" action="search">
                <input name="title" type="search" placeholder="Cerca">
            </form>

        </div>


        <div id="item-container">

				<center>

				<table border="0" cellpadding="0" cellspacing="0" width="700" id="privacy">
				  <tbody><tr>
					<td>
					  <h5><b><font color="#FF4136"><i class="fa fa-exclamation-circle"></i>&nbsp;Informativa ai sensi della legge n. 196/03 sulla tutela dei dati personali</font></b></h5></td>
				  </tr>
				  <tr>
					<td>Il trattamento dei dati personali è effettuato ai sensi del D.Lgs 196/03
					  <b>"Codice in materia di protezione dei dati personal"</b> di cui si riportano gli articoli:</td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td><p align="justify"><b>Art. 7. Diritto di accesso ai dati personali ed altri diritti</b><br>
					  1. L'interessato ha diritto di ottenere la conferma dell'esistenza o meno di dati personali che lo riguardano, anche se non ancora registrati, e la loro comunicazione in forma intelligibile.<br>
					  <br>2. L'interessato ha diritto di ottenere l'indicazione:<br>
					  a) dell'origine dei dati personali;<br>
					  b) delle finalità e modalità del trattamento;<br>
					  c) della logica applicata in caso di trattamento effettuato con l'ausilio di strumenti elettronici;<br>
					  d) degli estremi identificativi del titolare, dei responsabili e del rappresentante designato ai sensi dell'articolo 5, comma 2;<br>
					  e) dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere comunicati o che possono venirne a conoscenza in qualità di rappresentante designato nel territorio dello Stato, di responsabili o incaricati.<br><br>
					  3. L'interessato ha diritto di ottenere:<br>
					  a) l'aggiornamento, la rettificazione ovvero, quando vi ha interesse, l'integrazione dei dati;<br>
					  b) la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione di legge, compresi quelli di cui non è necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o successivamente trattati;<br>
					  c) l'attestazione che le operazioni di cui alle lettere a) e b) sono state portate a conoscenza, anche per quanto riguarda il loro contenuto, di coloro ai quali i dati sono stati comunicati o diffusi, eccettuato il caso in cui tale adempimento si rivela impossibile o comporta un impiego di mezzi manifestamente sproporzionato rispetto al diritto tutelato.<br><br>
					  4. L'interessato ha diritto di opporsi, in tutto o in parte:<br>
					  a) per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorchè pertinenti allo scopo della raccolta;<br>
					  b) al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale.
					</p></td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td><p align="justify"><b>Art. 8. Esercizio dei diritti</b><br>
				1. I diritti di cui all'articolo 7 sono esercitati con richiesta rivolta senza formalità al titolare o al responsabile, anche per il tramite di un incaricato, alla quale è fornito idoneo riscontro senza ritardo.<br><br>
				2. I diritti di cui all'articolo 7 non possono essere esercitati con richiesta al titolare o al responsabile o con ricorso ai sensi dell'articolo 145, se i trattamenti di dati personali sono effettuati:<br>
				a) in base alle disposizioni del decreto-legge 3 maggio 1991, n. 143, convertito, con modificazioni, dalla legge luglio 1991, n. 197,e successive modificazioni, in materia di riciclaggio;<br>
				b) in base alle disposizioni del decreto-legge 31 dicembre 1991,n. 419, convertito, con modificazioni, dalla legge 18 febbraio 1992,n. 172, e successive modificazioni, in materia di sostegno alle vittime di richieste estorsive;<br>
				c) da Commissioni parlamentari d'inchiesta istituite ai sensi dell'articolo 82 della Costituzione;<br>
				d) da un soggetto pubblico, diverso dagli enti pubblici economici,in base ad espressa disposizione di legge, per esclusive finalità inerenti alla politica monetaria e valutaria, al sistema dei pagamenti, al controllo degli intermediari e dei mercati creditizi e finanziari, nonchè alla tutela della loro stabilità;<br>
				e) ai sensi dell'articolo 24, comma 1, lettera f), limitatamente al periodo durante il quale potrebbe derivarne un pregiudizio effettivo e concreto per lo svolgimento delle investigazioni difensive o per l'esercizio del diritto in sede giudiziaria;<br>
				f) da fornitori di servizi di comunicazione elettronica accessibili al pubblico relativamente a comunicazioni telefoniche in entrata, salvo che possa derivarne un pregiudizio effettivo e concreto per lo svolgimento delle investigazioni difensive di cui alla legge 7 dicembre 2000, n. 397;<br>
				g) per ragioni di giustizia, presso uffici giudiziari di ogni ordine e grado o il Consiglio superiore della magistratura o altri organi di autogoverno o il Ministero della giustizia;<br>
				h) ai sensi dell'articolo 53, fermo restando quanto previsto dalla legge 1 aprile 1981, n. 121.<br><br>
				3. Il Garante, anche su segnalazione dell'interessato, nei casi dicui al comma 2, lettere a), b), d), e) ed f) provvede nei modi di cui agli articoli 157, 158 e 159 e, nei casi di cui alle lettere c), g) ed h) del medesimo comma, provvede nei modi di cui all'articolo 160.<br>
				<br>4. L'esercizio dei diritti di cui all'articolo 7, quando non riguarda dati di carattere oggettivo, può avere luogo salvo che concerna la rettificazione o l'integrazione di dati personali di tipo valutativo, relativi a giudizi, opinioni o ad altri apprezzamenti di tipo soggettivo, nonchè l'indicazione di condotte da tenersi o di decisioni in via di assunzione da parte del titolare del trattamento.
					</p></td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td><p align="justify"><b>Art. 9. Modalità di esercizio</b><br>
					  1. La richiesta rivolta al titolare o al responsabile può essere trasmessa anche mediante lettera raccomandata, telefax o posta elettronica. Il Garante può individuare altro idoneo sistema in riferimento a nuove soluzioni tecnologiche. Quando riguarda l'esercizio dei diritti di cui all'articolo 7, commi 1 e 2, la richiesta può essere formulata anche oralmente e in tal caso è annotata sinteticamente a cura dell'incaricato o del responsabile.<br><br>
					  2. Nell'esercizio dei diritti di cui all'articolo 7 l'interessato può conferire, per iscritto, delega o procura a persone fisiche, enti, associazioni od organismi. L'interessato può, altresì, farsi assistere da una persona di fiducia.<br><br>
					  3. I diritti di cui all'articolo 7 riferiti a dati personali concernenti persone decedute possono essere esercitati da chi ha un interesse proprio, o agisce a tutela dell'interessato o per ragioni familiari meritevoli di protezione.<br><br>
					  4. L'identità dell'interessato è verificata sulla base di idonei elementi di valutazione, anche mediante atti o documenti disponibili o esibizione o allegazione di copia di un documento di riconoscimento. La persona che agisce per conto dell'interessato esibisce o allega copia della procura, ovvero della delega sottoscritta in presenza di un incaricato o sottoscritta e presentata unitamente a copia fotostatica non autenticata di un documento di riconoscimento dell'interessato. Se l'interessato è una persona giuridica, un ente o un'associazione, la richiesta è avanzata dalla persona fisica legittimata in base ai rispettivi statuti od ordinamenti.<br><br>
					  5. La richiesta di cui all'articolo 7, commi 1 e 2, è formulata liberamente e senza costrizioni e può essere rinnovata, salva l'esistenza di giustificati motivi, con intervallo non minore di novanta giorni.
					</p></td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td><p align="justify">
					  <b>Art. 10. Riscontro all'interessato</b><br>
					  1. Per garantire l'effettivo esercizio dei diritti di cui all'articolo 7 il titolare del trattamento è tenuto ad adottare idonee misure volte, in particolare:<br>
					  a) ad agevolare l'accesso ai dati personali da parte dell'interessato, anche attraverso l'impiego di appositi programmi per elaboratore finalizzati ad un'accurata selezione dei dati che riguardano singoli interessati identificati o identificabili;<br>
					  b) a semplificare le modalità e a ridurre i tempi per il riscontro al richiedente, anche nell'ambito di uffici o servizi preposti alle relazioni con il pubblico.<br><br>2.
					  I dati sono estratti a cura del responsabile o degli incaricati e possono
					  essere comunicati al richiedente anche oralmente, ovvero offerti in
					  visione mediante strumenti elettronici, sempre che in tali casi la
					  comprensione dei dati sia agevole, considerata anche la qualità e la
					  quantità delle informazioni. Se vi è richiesta, si provvede alla
					  trasposizione dei dati su supporto cartaceo o informatico, ovvero alla
					  loro trasmissione per via telematica.<br><br>
					  3. Salvo che la richiesta sia riferita ad un particolare trattamento o a specifici dati personali o categorie di dati personali, il riscontro all'interessato comprende tutti i dati personali che riguardano l'interessato comunque trattati dal titolare. Se la richiesta è rivolta ad un esercente una professione sanitaria o ad un organismo sanitario si osserva la disposizione di cui all'articolo 84, comma 1.<br><br>
					  4. Quando l'estrazione dei dati risulta particolarmente difficoltosa il riscontro alla richiesta dell'interessato può avvenire anche attraverso l'esibizione o la consegna in copia di atti e documenti contenenti i dati personali richiesti.<br><br>
					  5. Il diritto di ottenere la comunicazione in forma intelligibile dei dati non riguarda dati personali relativi a terzi, salvo che la scomposizione dei dati trattati o la privazione di alcuni elementi renda incomprensibili i dati personali relativi all'interessato.<br><br>
					  6. La comunicazione dei dati è effettuata in forma intelligibile anche attraverso l'utilizzo di una grafia comprensibile. In caso di comunicazione di codici o sigle sono forniti, anche mediante gli incaricati, i parametri per la comprensione del relativo significato.<br><br>
					  7. Quando, a seguito della richiesta di cui all'articolo 7, commi1 e 2, lettere a), b) e c) non risulta confermata l'esistenza di dati che riguardano l'interessato, può essere chiesto un contributo spese non eccedente i costi effettivamente sopportati per la ricerca effettuata nel caso specifico.<br><br>
					  8. Il contributo di cui al comma 7 non può comunque superare l'importo determinato dal Garante con provvedimento di carattere generale, che può individuarlo forfettariamente in relazione al caso in cui i dati sono trattati con strumenti elettronici e la risposta è fornita oralmente. Con il medesimo provvedimento il Garante può prevedere che il contributo possa essere chiesto quando i dati personali figurano su uno speciale supporto del quale è richiesta specificamente la riproduzione, oppure quando, presso uno o più titolari, si determina un notevole impiego di mezzi in relazione alla complessità o all'entità delle richieste ed è confermata l'esistenza di dati che riguardano l'interessato.<br><br>
					  9. Il contributo di cui ai commi 7 e 8 è corrisposto anche mediante versamento postale o bancario, ovvero mediante carta di pagamento o di credito, ove possibile all'atto della ricezione del riscontro e comunque non oltre quindici giorni da tale riscontro.
					</p></td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td><p align="justify">
					  <b>Art. 11. Modalità del trattamento e requisiti dei dati</b><br>
					  1. I dati personali oggetto di trattamento sono:<br>
					  a) trattati in modo lecito e secondo correttezza;<br>
					  b) raccolti e registrati per scopi determinati, espliciti e legittimi, ed utilizzati in altre operazioni del trattamento intermini compatibili con tali scopi;<br>
					  c) esatti e, se necessario, aggiornati;<br>
					  d) pertinenti, completi e non eccedenti rispetto alle finalità per le quali sono raccolti o successivamente trattati;<br>
					  e) conservati in una forma che consenta l'identificazione dell'interessato per un periodo di tempo non superiore a quello necessario agli scopi per i quali essi sono stati raccolti o successivamente trattati.<br>
					  <br>
					  2. I dati personali trattati in violazione della disciplina rilevante in materia di trattamento dei dati personali non possono essere utilizzati.
					</p></td>
				  </tr>
				  <tr>
					<td height="30">
					  <hr size="1" style="border: 1 dotted #000000">
					</td>
				  </tr>
				  <tr>
					<td align="center">&nbsp;</td>
				  </tr>
				  <tr>
					<td align="center"><a id="print" href="JavaScript:parent.window.print();">Stampa la pagina</a></td>
				  </tr>
				  <tr>
					<td height="50">&nbsp;</td>
				  </tr>
				</tbody></table>


				  </center>
  
  
   </div>
</body>

<script src="js/jquery-2.1.0.min.js"></script>
<script src="js/core.js"></script>
<script>
	//Smooth scroll
if (window.addEventListener) window.addEventListener('DOMMouseScroll', wheel, false);
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

function handle(delta) {
    var time = 450;
	var distance = 300;
    
    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}
</script>


</html>
<!-- E' tutto. -->
