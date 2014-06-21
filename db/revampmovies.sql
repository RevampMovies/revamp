/*
Navicat MySQL Data Transfer

Source Server         : Revamp
Source Server Version : 50161
Source Host           : localhost:3306
Source Database       : revampmovies

Target Server Type    : MYSQL
Target Server Version : 50161
File Encoding         : 65001

Date: 2014-06-21 12:33:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `categorie`
-- ----------------------------
DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `IDCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  PRIMARY KEY (`IDCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categorie
-- ----------------------------
INSERT INTO `categorie` VALUES ('1', 'Comico');
INSERT INTO `categorie` VALUES ('2', 'Drammatico');
INSERT INTO `categorie` VALUES ('3', 'Storico');
INSERT INTO `categorie` VALUES ('4', 'Non Definito');
INSERT INTO `categorie` VALUES ('5', 'Commedia');
INSERT INTO `categorie` VALUES ('6', 'Giallo');
INSERT INTO `categorie` VALUES ('7', 'Avventura');
INSERT INTO `categorie` VALUES ('8', 'Grottesco');

-- ----------------------------
-- Table structure for `favourites`
-- ----------------------------
DROP TABLE IF EXISTS `favourites`;
CREATE TABLE `favourites` (
  `IDUtente` int(11) NOT NULL,
  `IDFilm` int(11) NOT NULL,
  PRIMARY KEY (`IDUtente`,`IDFilm`),
  KEY `Film` (`IDFilm`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of favourites
-- ----------------------------
INSERT INTO `favourites` VALUES ('8', '3');
INSERT INTO `favourites` VALUES ('8', '10');
INSERT INTO `favourites` VALUES ('8', '11');
INSERT INTO `favourites` VALUES ('8', '12');
INSERT INTO `favourites` VALUES ('8', '13');
INSERT INTO `favourites` VALUES ('8', '18');
INSERT INTO `favourites` VALUES ('8', '19');
INSERT INTO `favourites` VALUES ('8', '26');
INSERT INTO `favourites` VALUES ('8', '27');
INSERT INTO `favourites` VALUES ('9', '8');
INSERT INTO `favourites` VALUES ('9', '14');
INSERT INTO `favourites` VALUES ('9', '20');
INSERT INTO `favourites` VALUES ('9', '21');
INSERT INTO `favourites` VALUES ('9', '22');
INSERT INTO `favourites` VALUES ('10', '1');
INSERT INTO `favourites` VALUES ('10', '2');
INSERT INTO `favourites` VALUES ('10', '3');
INSERT INTO `favourites` VALUES ('10', '6');
INSERT INTO `favourites` VALUES ('10', '7');
INSERT INTO `favourites` VALUES ('10', '10');
INSERT INTO `favourites` VALUES ('10', '15');
INSERT INTO `favourites` VALUES ('10', '20');
INSERT INTO `favourites` VALUES ('10', '22');
INSERT INTO `favourites` VALUES ('10', '23');
INSERT INTO `favourites` VALUES ('10', '49');
INSERT INTO `favourites` VALUES ('10', '55');

-- ----------------------------
-- Table structure for `film`
-- ----------------------------
DROP TABLE IF EXISTS `film`;
CREATE TABLE `film` (
  `IDFilm` int(11) NOT NULL AUTO_INCREMENT,
  `IDCategoria` int(11) NOT NULL,
  `durata` int(11) DEFAULT NULL,
  `titolo` varchar(40) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `anno` date NOT NULL,
  `descrizione` text,
  `link` varchar(255) NOT NULL,
  `IDRegisti` int(11) DEFAULT NULL,
  `health` varchar(11) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT 'Excellent',
  PRIMARY KEY (`IDFilm`),
  KEY `IDCategoria` (`IDCategoria`),
  KEY `IDRegisti` (`IDRegisti`),
  CONSTRAINT `IDCategoria` FOREIGN KEY (`IDCategoria`) REFERENCES `categorie` (`IDCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of film
-- ----------------------------
INSERT INTO `film` VALUES ('1', '3', '99', 'Roma città aperta', '/images/imgCopertine/RomaCittaAperta.jpg', '1945-00-00', 'Roma, inverno 1944. L\'ingegner Manfredi, comunista e impegnato nel Comitato di Liberazione Nazionale, chiede aiuto a Pina, una popolana vedova con un figlio e in procinto di risposarsi, per portare a termine un\'azione. La donna lo mette in contatto con don Pietro, un sacerdote disposto ad aiutare i partigiani. Manfredi è però comunque in pericolo perché la sua amante, Marina, dipende da una collaboratrice della Gestapo che le fornisce la droga.', 'http://www.dailymotion.com/embed/video/x15g3ok_rome-open-city-1945-pt-1_creation', '1', 'Excellent');
INSERT INTO `film` VALUES ('2', '2', '108', 'Riso amaro', '/images/imgCopertine/RisoAmaro.jpg', '1949-00-00', 'Braccata dalla polizia, la complice di un ladro si unisce a un gruppo di mondine in partenza per le risaie del Vercellese dove viene raggiunta dall\'amante che, aiutato da Silvana, una delle mondine, progetta di impossessarsi con alcuni amici del raccolto di riso. Epilogo sanguinoso. Nella bizzarra mistura dei suoi ingredienti questo melodramma con ambizioni di romanzo nazional-popolare ebbe un grande successo anche all\'estero ed è un capitolo importante nella storia del divismo italiano.', 'https://www.youtube.com/watch?v=wHxnvxclme0', '7', 'Excellent');
INSERT INTO `film` VALUES ('3', '2', '93', 'Ladri di biciclette', '/images/imgCopertine/LadriDiBiciclette.jpg', '1948-00-00', 'Derubato della bicicletta, indispensabile per il lavoro appena trovato, un disoccupato va col figlioletto alla ricerca del ladro attraverso la Roma del dopoguerra, incontrando solidarietà, indifferenza, aperta ostilità. Tratto dal romanzo (1946) omonimo di Luigi Bartolini, la cui sceneggiatura risulta firmata anche da O. Biancoli, S. Cecchi D\'Amico, A. Franci, G. Gherardi, G. Guerrieri, è con Umberto D (1952) il risultato più alto del sodalizio De Sica-Zavattini e uno dei capolavori del neorealismo.', 'https://www.youtube.com/watch?v=2F4Wa-OYYyY', '3', 'Excellent');
INSERT INTO `film` VALUES ('4', '1', '101', 'Guardie e ladri', '/images/imgCopertine/GuardieLadri.jpg', '1951-00-00', 'Totò è un ladruncolo napoletano che una bonaria guardia romana (Fabrizi) deve catturare, pena la perdita del posto. Dopo inseguimenti vari, i due fanno amicizia, scoprendo di avere molti problemi in comune. Uno dei rari film di Totò che fu elogiato quasi all\'unanimità dalla critica dell\'epoca anche perché s\'innestava nel filone neorealistico. \"Ho favorito il passaggio di Totò al neorealismo, limitando le sue caratteristiche di comicità surreale che lo aveva caratterizzato in precedenza\" (M. Monicelli). Ebbe noie dalla censura.', 'https://www.youtube.com/watch?v=V3HmnhSLPkg', '8', 'Excellent');
INSERT INTO `film` VALUES ('5', '1', '110', 'Ninotchka', '/images/imgCopertine/Ninotchka.jpg', '1939-00-00', 'Iranoff, Buljanoff e Kopalski sono tre commissari del governo sovietico inviati a Parigi per vendere i gioielli confiscati alla granduchessa Swana. Interviene però il conte Léon, amante della granduchessa, il quale non fatica molto a distrarre i tre grazie alle sirene della vita parigina. Da Mosca si decide allora di inviare a mettere a posto le cose l\'inflessibile ispettrice Nina Ivanova Yakushova. La quale a poco a poco cede alla corte di Léon che se ne è sinceramente innamorato. La granduchessa decide allora di intervenire.', 'http://vimeo.com/39063669', '9', 'Excellent');
INSERT INTO `film` VALUES ('6', '1', '106', 'Risate di gioia', '/images/imgCopertine/RisateGioia.jpg', '1960-00-00', 'Gioia, soprannominata Tortorella, sta cercando in tutti modi di trascorrere una notte di Capodanno festeggiando adeguatamente. Si troverà invece a fianco di Umberto Vernazzi detto Infortunio. Costui è costretto a fare spalla a Lello, un borsaiolo che ha deciso di approfittare della confusione dei festeggiamenti collettivi per mettere a segno qualche buon colpo. Gioia, senza esserne cosciente, sarà di intralcio ai suoi piani.', 'https://www.youtube.com/watch?v=g-CxYEDW9kw', '8', 'Excellent');
INSERT INTO `film` VALUES ('7', '3', '187', 'Il Gattopardo', '/images/imgCopertine/IlGattopardo.jpg', '1963-00-00', 'Dall\'alto della propria villa, la famiglia nobiliare dei Corbera accoglie con preoccupazione la notizia dello sbarco delle truppe garibaldine in Sicilia per rovesciare il regno borbonico e avviare il processo di unificazione dell\'Italia. Il capofamiglia Fabrizio, principe di Salina, sfruttando la propria intelligenza politica e l\'attivismo dell\'ambizioso nipote Tancredi Falconeri fra le file delle camicie rosse, comprende che i tempi stanno cambiando e che il potere politico e istituzionale è ormai in mano ad una nuova classe di ricchi.', 'https://www.youtube.com/watch?v=xr2z_NpwqxI', '10', 'Excellent');
INSERT INTO `film` VALUES ('8', '2', '124', 'Paisà', '/images/imgCopertine/Paisa.jpg', '1946-00-00', 'È considerato una delle vette del cinema neorealista italiano. Girato con attori prevalentemente non-professionisti, il film rievoca l\'avanzata delle truppe alleate dalla Sicilia al Nord Italia. È costituito da 6 episodi: Sicilia, Napoli, Roma, Firenze, Appennino Emiliano, Porto Tolle. È stato candidato ai Premi Oscar 1950 per la migliore sceneggiatura originale.', 'https://www.youtube.com/watch?v=O1RdEjbnhd4', '1', 'Excellent');
INSERT INTO `film` VALUES ('9', '2', '75', 'Germania anno zero', '/images/imgCopertine/GermaniaAnnoZero.jpg', '1947-00-00', 'Berlino 1946. macerie della città vive il dodicenne Edmund che convive con la sorella, il padre malato e un fratello maggiore che si nasconde per timore di essere arrestato in quanto ex soldato nazista. Il bambino cerca con ogni mezzo un lavoro ma viene anche in qualche modo attratto dal suo ex maestro, un pedofilo che gli inculca l\'idea che i deboli vadano soppressi. Il padre di Edmund è un debole...', 'https://www.youtube.com/watch?v=WBnICml1eec', '1', 'Excellent');
INSERT INTO `film` VALUES ('10', '2', '100', 'Sciuscià', '/images/imgCopertine/Suscia.jpg', '1946-00-00', 'Due giovanissimi suscià (da \"shoe-shine\", lustrare scarpe) napoletani sognano di comperare un cavallo bianco tutto per loro e, per averlo, s\'invischiano in un \"lavoretto\" per adulti che li porta in un carcere minorile. Uno dei film del neorealismo italiano più conosciuti all\'estero (Oscar speciale 1947 per \"la qualità superlativa raggiunta in circostanze avverse\").', 'https://www.youtube.com/watch?v=stRF2sWRI-w', '3', 'Excellent');
INSERT INTO `film` VALUES ('11', '2', '93', 'Stazione Termini', '/images/imgCopertine/StazioneTermini.jpg', '1953-00-00', 'Dopo una breve e tempestosa relazione, un\'americana sposata (Jones) in vacanza a Roma e un insegnante italiano (Clift) si dicono addio alla Stazione Termini. Maldestro tentativo di inserire due divi di Hollywood in una struttura neorealistica di taglio semidocumentario. Frutto di una serie di compromessi con il produttore americano, è una storia d\'amore dove soltanto a sprazzi si coglie la sensibilità di V. De Sica (anche coproduttore). Vale soprattutto per il finale.', 'https://www.youtube.com/watch?v=TUddXNFrQzY', '3', 'Excellent');
INSERT INTO `film` VALUES ('12', '2', '86', 'Gioventù perduta', '/images/imgCopertine/GioventuPerduta.jpg', '1947-00-00', 'Nella Roma del dopoguerra una banda di giovani rapinatori è guidata dal figlio di un professore universitario. Sua sorella s\'innamora di un ispettore di polizia che s\'è infiltrato tra gli studenti. 2° film di Germi, ancora attento alla lezione del cinema americano d\'azione, è un poliziesco con una spruzzata di sociologia in cui le molte approssimazioni e goffaggini prevalgono sulle poche qualità.', 'https://www.youtube.com/watch?v=vGzBWHIEcgQ', '11', 'Excellent');
INSERT INTO `film` VALUES ('13', '2', '107', 'Roma ore 11', '/images/imgCopertine/RomaOre11.jpg', '1952-00-00', 'Una prostituta, la moglie di un disoccupato, l\'amica ricca di un pittore squattrinato, una ragazza incinta, una servetta e altre venti donne, richiamate da un annuncio che promette un lavoro, s\'affollano su una scala che crolla. Forse il miglior film del diseguale e ambizioso De Santis e un\'opera chiave dell\'ultimo neorealismo. Da un fatto di cronaca nasce una ricca galleria di personaggi femminili in fertile equilibrio tra passione e ideologia.', 'http://www.dailymotion.com/embed/video/x1cb2qz_roma-ore-11-1952-delia-scala-lucia-bose-paolo-stoppa-1_shortfilms', '12', 'Excellent');
INSERT INTO `film` VALUES ('14', '2', '80', 'Il bandito', '/images/imgCopertine/Bandito.jpg', '1946-00-00', 'Reduce dalla prigionia in Germania, Ernesto arriva a Torino dove trova la sua casa distrutta in un bombardamento, apprende che la madre è morta e che la sorella Maria si prostituisce. Dopo la sua morte accidentale, ne uccide lo sfruttatore. Pur senza smentire la sua indole generosa, diventa un fuorilegge risoluto e violento, finché, in conflitto con l\'amante prostituta, si lascia uccidere dai carabinieri.', 'https://www.youtube.com/watch?v=CUI4iY_hzwk', '13', 'Excellent');
INSERT INTO `film` VALUES ('15', '2', '108', 'La strada', '/images/imgCopertine/LaStrada.jpg', '1954-00-00', 'L\'ingenua e infantile Gelsomina è venduta a Zampanò, rozzo girovago che si esibisce nei paesini con giochi di forza e che la usa e ne abusa. Quando incontrano il Matto, equilibrista filosofo, Zampanò lo uccide. Gelsomina lo abbandona. E il film che diede rinomanza internazionale a F. Fellini: Leone d\'argento a Venezia, Oscar 1956 per il film straniero. Parabola cristiana sul peccato, apologo sulla condizione umana in generale e della donna in particolare.', 'https://www.youtube.com/watch?v=_DAa5SN0ffI', '4', 'Excellent');
INSERT INTO `film` VALUES ('16', '2', '120', 'Mamma Roma', '/images/imgCopertine/MammaRoma.jpg', '1962-00-00', 'Mamma Roma, prostituta, decide di diventare una rispettabile piccolo borghese. Con il figlio Ettore va ad abitare in un appartamento della periferia romana. Saputa la verità su di lei, il ragazzo delinque, è arrestato e muore in carcere per i maltrattamenti subiti, invocando Guidonia, il paese dov\'è cresciuto, ma anche metafora della Madre e del grembo materno.', 'https://www.youtube.com/watch?v=uEcUqRnMe1c', '14', 'Excellent');
INSERT INTO `film` VALUES ('17', '2', '97', 'Viaggio in Italia', '/images/imgCopertine/ViaggioInItalia.jpg', '1954-00-00', 'Coppia di coniugi inglesi ritrova, a contatto col Sud, una speranza di comunicazione e comprensione reciproca, uscendo dalla noia e dalla solitudine. Il migliore dei 4 Rossellini con la Bergman. Ignorato dal pubblico, poco compreso e strapazzato dalla critica italiana, esaltato da quella francese: \"Con l\'apparizione di Viaggio in Italia tutti i film sono improvvisamente invecchiati di dieci anni\" (J. Rivette, 1955). Influenzò il cinema moderno degli anni \'60.', 'https://www.youtube.com/watch?v=EI5bkdnfFhg', '1', 'Excellent');
INSERT INTO `film` VALUES ('18', '2', '89', 'Umberto D.', '/images/imgCopertine/UmbertoD.jpg', '1952-00-00', 'Un mite, silenzioso pensionato, ridotto a non essere più (economicamente) in grado di sopravvivere, rifiuta la tentazione del suicidio per non abbandonare il proprio cane. Uno dei capolavori del cinema neorealista, e il suo canto del cigno. Frutto maturo del sodalizio tra Zavattini e De Sica, sostenuto anche da ricerche, non tutte risolte, sul tempo e la durata (famosa la sequenza del risveglio della servetta), il film tocca una crudeltà lucida senza compromessi sentimentali.', 'https://www.youtube.com/watch?v=SvrvJaC_1pk', '3', 'Excellent');
INSERT INTO `film` VALUES ('19', '1', '100', 'Luci del varietà', '/images/imgCopertine/LuciDelVarieta.jpg', '1951-00-00', 'Liliana Antonelli ha investito i suoi risparmi e il suo corpo per diventare una famosa soubrette. Ci riesce servendosi di Checco Delmonte, capocomico di una scalcinata compagnia d\'avanspettacolo. Diventa Lilly, abbandona il suo scopritore e viaggia in 1ª classe, mentre lui e i suoi ex compagni continuano a spostarsi in 3ª.', 'https://www.youtube.com/watch?v=pl4JPMwFaHM', '4', 'Excellent');
INSERT INTO `film` VALUES ('20', '1', '108', 'I vitelloni', '/images/imgCopertine/IVitelloni.jpg', '1953-00-00', 'Sono cinque, in una cittadina romagnola dell\'Adriatico, i giovanotti non ancora occupati, né ricchi né poveri, irresponsabili e velleitari figli di mamma. Che fanno? Piccoli divertimenti, piccole miserie, piccoli squallori, noia grande. Soltanto Moraldo va in città. Tra loro campeggia Alberto (Sordi), punto di fusione di violenza satirica, grottesco, patetismo. Fellini fa col suo 2° film e mezzo uno scanzonato omaggio, distaccato ma non troppo, alla Rimini della sua adolescenza, reinventata sul litorale tirrenico, vicino a Ostia.', 'http://www.dailymotion.com/embed/video/xgdswz_oi-%CE%B2i%CF%84%CE%B5%CE%BBonoi-i-vitelloni-1953-%CF%84%CE%BF%CF%85-%CF%86%CE%B5%CE%BD%CF%84%CE%B5%CF%81%CE%AF%CE%BA%CE%BF-%CF%86%CE%B5%CE%BB%CE%AF%CE%BD%CE%B9_shortfilms', '4', 'Excellent');
INSERT INTO `film` VALUES ('21', '1', '146', 'Lo sceicco bianco', '/images/imgCopertine/LoSceiccoBianco.jpg', '1952-00-00', 'Due sposini meridionali vanno in viaggio di nozze a Roma dove lei, accanita consumatrice di fotoromanzi, va a far visita all\'eroe dei suoi sogni. 1° film di F. Fellini dopo la regia a mezzadria di Luci del varietà (1951). Irridente parata dei mediocri all\'insegna di una vena caricaturale che qua e là diventa graffiante satira di costume. Un A. Sordi memorabile e una Roma ancora realistica, ma già deformata da un talento visionario. Da un\'idea di M. Antonioni. Scritto da Fellini con T. Pinelli e E. Flaiano. 1° incontro Fellini/Nino Rota.\n', 'https://www.youtube.com/watch?v=m76AKgtdQzs', '4', 'Excellent');
INSERT INTO `film` VALUES ('22', '2', '118', 'Il ferroviere', '/images/imgCopertine/IlFerroviere.jpg', '1956-00-00', 'Macchinista delle FF. SS. che ama, un po\' troppo, il buon vino entra in una grave crisi professionale e familiare, ma la supera con l\'aiuto del figlioletto e dei compagni di lavoro. È il film cui Germi era affezionato e in cui si riconosceva, \"fatto per gente all\'antica... col risvolto dei pantaloni\". Nonostante i limiti della sua poetica (un po\' De Amicis, un po\' Capra) e del suo moralismo ottocentesco, sfugge alle trappole della retorica per la scrittura calda e avvolgente, concentrata sugli attori.', 'https://www.youtube.com/watch?v=r25KtF2Bd3g', '11', 'Excellent');
INSERT INTO `film` VALUES ('23', '2', '101', 'In nome della legge', '/images/imgCopertine/InNomeDellaLegge.jpg', '1948-00-00', 'pretore settentrionale in Sicilia si trova in conflitto con un potente latifondista. Lo aiutano, vincendo l\'omertà e la paura, la popolazione locale e persino un capomafia. La Sicilia e la mafia (quella di vecchio stampo) raccontata (e mitizzata) dal giovane Germi tenendo d\'occhio i western di John Ford. Vigoroso, qua e là affascinante film d\'azione anche se sociologicamente poco attendibile. Tratto dal romanzo Piccola pretura del magistrato Giuseppe Guido Lo Schiavo.', 'https://www.youtube.com/watch?v=L7NzcRCOBFI', '11', 'Excellent');
INSERT INTO `film` VALUES ('24', '2', '100', 'Non c\'è pace tra gli ulivi', '/images/imgCopertine/NonCePaceTraGliUlivi.jpg', '1950-00-00', 'Un soldato smobilitato scopre di essere stato spossessato del suo gregge da un pastore che s\'è arricchito con l\'usura. Arrestato perché cerca di riprendersi il suo e condannato, evade per farsi giustizia. Questo melodramma ciociaro è il più brechtiano (ma anche il più astratto) dei film di De Santis. D\'impostazione volutamente teatrale e stilizzata, si vale della suggestiva fotografia di Piero Portalupi, notevole per l\'uso del panfocus nella profondità di campo e nel risalto del paesaggio ciociaro.', 'https://www.youtube.com/watch?v=qz3hNkYfc98', '12', 'Excellent');
INSERT INTO `film` VALUES ('25', '2', '144', 'Ossessione', '/images/imgCopertine/Ossessione.jpg', '1943-00-00', 'Il vagabondo Gino Costa si ferma presso un ristoro per viaggiatori nella bassa padana, divenendo l\'amante di Giovanna, moglie dell\'ignaro Giuseppe, proprietario dello spaccio. Gino non sopporta questa situazione e propone alla donna di fuggire con lui. Giovanna rifiuta e lui parte per Ancona, in cui lo attira la presenza del porto: spera di imbarcarsi e di lasciarsi alle spalle la storia appena conclusa. Durante il viaggio per Ancona fa amicizia con un girovago detto lo spagnolo...', 'https://www.youtube.com/watch?v=l3yv1WrGd34', '10', 'Excellent');
INSERT INTO `film` VALUES ('26', '2', '92', 'L\'Uomo del Sud', '/images/imgCopertine/LUomoDelSud.jpg', '1945-00-00', 'Tratto dal romanzo Hold Autumn in Your Hand di George Session Perry, adattato dal regista col contributo di William Faulkner, è la storia di Sam Tucker (Z. Scott), contadino del Tennessee che decide di diventare coltivatore diretto di cotone invece che lavorare sotto padrone, ma deve vedersela con le difficoltà del nuovo ambiente, la meschinità e gli egoismi dei vicini e soprattutto le calamità naturali. ', 'http://www.youtube.com/watch?v=U1QN-X1nZn0', '12', 'Excellent');
INSERT INTO `film` VALUES ('27', '2', '68', 'The Kid (iI Monello)', '/images/imgCopertine/TheKid.jpg', '1921-00-00', 'Charlot, povero vetraio, raccoglie e alleva un bimbetto abbandonato dalla madre, vittima di un seduttore. Per aiutare il padre adottivo, il monello rompe i vetri. Poi torna la madre, diventata ricca, e lo riprende. 1 lungometraggio di Chaplin, largamente autobiografico per quel che riguarda la sua infanzia povera nei quartieri popolari di Londra.\nLingua originale', 'http://www.youtube.com/watch?v=-AsXbAU-kig&list=TL7_-vZJT8jSsBjhmmb0Z36YEtJS_bvZEE', null, 'Excellent');
INSERT INTO `film` VALUES ('28', '6', '97', 'La signora scompare', '/images/imgCopertine/LaSignoraScompare.jpg', '1938-00-00', 'Una giovane inglese conosce un\'anziana lady in treno, ai confini della Germania del Terzo Reich, poi la signora scompare e nessuno sembra averla mai vista. Gioiello hitchcockiano a sfondo spionistico, un tour de force paradossale risolto in scioltezza. Rifatto nel \'79 (\"Il mistero della signora scomparsa\").', 'http://www.youtube.com/watch?v=yknUZKQygUU', '2', 'Excellent');
INSERT INTO `film` VALUES ('29', '6', '97', 'Io ti salverò', '/images/imgCopertine/IoTiSalvero.jpg', '1945-00-00', 'Una giovane psicologa si accorge che il nuovo giovane direttore della casa di cura dove lavora, di cui pian piano si innamora, è affetto da un complesso di colpa che ha radici nell\'infanzia. Con l\'aiuto del suo anziano professore, la donna riesce a scoprire l\'origine delle turbe; in questo modo viene risolto anche un caso d\'omicidio. Il film segna l\'incontro tra Hitchcock e Ingrid Bergman, che interpreterà poi anche Il peccato di Lady Considine e Notorius. ', 'http://www.youtube.com/watch?v=LORAQcrV_eA', '2', 'Excellent');
INSERT INTO `film` VALUES ('30', '7', '105', 'Angelica alla corte del Re', '/images/imgCopertine/AngelicaAllaCorteDelRe.jpg', '1965-00-00', 'Angelica si è ritirata nelle sue terre in segno di lutto, ma Luigi XIV la richiama a Parigi e la mette alle costole dell\'ambasciatore di Persia, dal quale ottiene un trattato di alleanza con la Francia. L\'orientale la vorrebbe come schiava, ma il re la dichiara sua favorita (e vorrebbe goderne i favori). Si scopre che il primo marito di Angelica, conte di Peyrac, non è affatto morto, e lei lo cercherà...\n', 'http://www.youtube.com/watch?v=8iq-86_H2u0', '15', 'Excellent');
INSERT INTO `film` VALUES ('31', '5', '92', 'Chi si ferma è perduto', '/images/imgCopertine/ChiSiFermaEPerduto.jpg', '1960-00-00', 'Dopo tanti anni di lavoro, Antonio e Peppino non sono mai riusciti a passare di grado a causa dell\'accanita opposizione del loro superiore. Quando quest\'ultimo improvvisamente muore, i due tentano il tutto per tutto per occupare il posto diventato vacante. Prima scassinano la cassaforte per far sparire le note negative di carriera, poi cercano di avvicinare l\'ispettore della ditta (sbagliando però persona), infine fanno la corte alla sorella nubile del titolare. I risultati sono disastrosi...', 'http://www.youtube.com/watch?v=w-bFLj4G50A', '16', 'Excellent');
INSERT INTO `film` VALUES ('32', '5', '90', 'Totò all\'inferno', '/images/imgCopertine/TotoAllInferno.jpg', '1954-00-00', 'Dopo diversi tentativi di suicidio, Antonio annega incidentalmente in un fiume. Finisce all\'Inferno, dove incontra Cleopatra; il grande amore che scoppia tra i due fa ingelosire Satana e Antonio allora fugge. Mentre si diverte in un ritrovo esistenzialista, viene riacchiappato dai diavoli e riportato nell\'Aldilà. Totò scatenato in una sarabanda di trovate, per un soggetto (firmato da lui medesimo) bizzarro e fantastico funzionale alla sua comicità incontenibile. Esilarante la gag musicale con gli esistenzialisti.', 'http://www.youtube.com/watch?v=GfphqmC2S9c', '5', 'Excellent');
INSERT INTO `film` VALUES ('33', '5', '100', 'Totò e Cleopatra', '/images/imgCopertine/TotoECleopatra.jpg', '1963-00-00', 'Marco Antonio ama Cleopatra ma è perseguitato dalla moglie gelosa. Costei, trovato un poveretto del tutto simile al marito, lo invia alla corte della regina d\'Egitto con lo scopo di porre fine alla relazione tra i due. Cleopatra, per le pene d\'amore, vorrebbe uccidersi ma l\'aspide velenoso, una volta morsa la regina, cade per terra avvelenato. Dal canto suo, il malcapitato sosia si mette in salvo. Tutta Cinecittà nel 1963 era impegnata per il kolossal Cleopatra, e fioccavano imitazioni e parodie.', 'http://www.youtube.com/watch?v=iNvX-az0Uv0', '17', 'Excellent');
INSERT INTO `film` VALUES ('34', '5', '98', 'Totò, Peppino e la... malafemmina', '/images/imgCopertine/TotoPeppinoeLaMalafemmina.jpg', '1956-00-00', 'Totò e Peppino vengono a sapere che il loro nipote Gianni, anziché studiare all\'università, si è unito a una compagnia di teatro per seguire la bella Marisa della quale si è innamorato. I due zii tentano di tutto per allontanare il nipote da quella che credono sia una donna di facili costumi e a questo scopo lasciano per la prima volta il paesello per Milano.', 'http://www.youtube.com/watch?v=0tSg7xDAacY', '5', 'Excellent');
INSERT INTO `film` VALUES ('35', '7', '116', 'La voce della luna', '/images/imgCopertine/LaVoceDellaLuna.jpg', '1990-00-00', 'Bassa Padana: il sognatore Ivo Salvini, sente le voci dai pozzi illuminati dalla luna e cerca la donna ideale. Ha piccole avventure con personaggi un po\' folli, finchè incontra l\'ex prefetto Gonella, che dappertutto vede congiure. Insieme irrompono in una discoteca, assistono alla \"cattura\" della luna in diretta Tv. Solo loro due, per amore o per angoscia, sanno \"ascoltare\" il silenzio della notte.', 'http://www.youtube.com/watch?v=PdtHQx4U0sc', '4', 'Excellent');
INSERT INTO `film` VALUES ('36', '5', '104', 'I due colonnelli', '/images/imgCopertine/I2Colonelli.jpg', '1962-00-00', 'A Montegreco, un paesino balcanico, durante l\'ultima guerra un colonnello inglese e uno italiano sono impegnati nell\'alterna conquista sia del villaggio che di una seducente fanciulla indigena la cui madre, seguendo le alterne vicende della guerra, espone in casa i ritratti del duce e di Churchill.', 'http://www.youtube.com/watch?v=1RgS8rwrHvc', '6', 'Excellent');
INSERT INTO `film` VALUES ('37', '8', '165', 'Il Casanova', '/images/imgCopertine/IlCasanova.jpg', '1976-00-00', 'Vecchio e malandato, Casanova, bibliotecario in un castello della Boemia, rievoca la sua vita densa di amori e di avventure. Prima, da giovane a Venezia, dove, incarcerato per la sua vita sregolata, evade dai Piombi e comincia a vagare per le corti europee conducendo una vita ricca di amori e truffe. Con il passare del tempo il successo con le donne comincia a scemare. Molte porte gli si chiudono in faccia mano a mano che la degradazione fisica e morale aumenta. Trova infine rifugio presso un nobile boemo che lo fa esibire.', 'http://www.youtube.com/watch?v=SRdxZxZGJqI', '4', 'Excellent');
INSERT INTO `film` VALUES ('38', '8', '125', 'Amarcord', '/images/imgCopertine/Amarcord.jpg', '1974-00-00', 'A Borgo, nei primi anni \'30, l\'adolescente Titta cresce subendo condizionamenti dentro e fuori l\'ambito domestico. Suo padre Aurelio è un piccolo imprenditore edile, perennemente in discordia con la moglie Miranda. Zio Pataca vegeta alle spalle dei parenti; zio Teo è ricoverato in manicomio. Nella provinciale cittadina vivono anche Gradisca, una procace parrucchiera e Volpina, una ragazza un po\' scema e priva di freni inibitori.', 'http://www.youtube.com/watch?v=x7JwBYXB3-U', '4', 'Excellent');
INSERT INTO `film` VALUES ('39', '8', '35', 'La ricotta', '/images/imgCopertine/LaRicotta.jpg', '1963-00-00', 'Un cattivissimo Orson Welles sta girando nella campagna romana una kolossal biblico in cui ricostruisce, come tableau vivent la deposizione del Rosso Fiorentino. A impersonare la figura di uno dei ladroni viene reclutato un proletario, di nome Stracci, dalla fame atavica. L\'improvvisa abbondanza di ricotta gli procura un\'indigestione fatale.', 'http://www.youtube.com/watch?v=U-FxFN0VTAE', '14', 'Excellent');
INSERT INTO `film` VALUES ('40', '2', '121', 'Tre passi nel delirio', '/images/imgCopertine/TrePassiNelDelirio.jpg', '1967-00-00', 'M_etzengerstein_: rifiutata dal cugino, una nobildonna provoca un incendio che sarà fatale a entrambi. _William Wilson_: un ufficiale disonesto sfida a duello un sosia che lo ossessiona. _Toby Dammit_: un attore ubriacone, appena sbarcato a Cinecittà, è perseguitato dalla fantasmatica figura di una bambina che gioca a palla.', 'http://www.youtube.com/watch?v=bOdHIOgvJn4', '4', 'Excellent');
INSERT INTO `film` VALUES ('41', '5', '113', 'La ragazza con la valigia', '/images/imgCopertine/LaRagazzaConLaValigia.jpg', '1961-00-00', 'Aida è una ballerina dal passato burrascoso. Lorenzo è uno studente serio e di buona famiglia. Nonostante tutto congiuri contro la possibilità di una loro unione, Lorenzo decide di invitare Aida a raggiungerlo a Parma, dove si accolla anche il suo mantenimento. Interviene a un certo punto il professore di matematica di Lorenzo, che convince Aida della rovina a cui questa unione porterà inevitabilmente il ragazzo. Aida suo malgrado capisce che il professore (nonché sacerdote) ha ragione e decide di andarsene.', 'http://www.youtube.com/watch?v=PbkmHvlf5KY', '19', 'Excellent');
INSERT INTO `film` VALUES ('42', '5', '125', 'Finché c\'è guerra c\'è speranza', '/images/imgCopertine/FincheCeGuerraCeSperanza.jpg', '1974-00-00', 'Pietro Chiocca vendeva pompe idaruliche e guadagnava bene. Ora vende armi ai Paesi del Terzo Mondo, e guadagna ancora di più, con affari sempre più loschi. Quando viene pubblicamente definito \"mercante di morte\", sarebbe disposto a tornare ad un\'attività onesta, ma la famiglia non è d\'accordo.', 'http://www.youtube.com/watch?v=Pd29E3eWcwk', '20', 'Excellent');
INSERT INTO `film` VALUES ('43', '3', '129', 'La grande guerra', '/images/imgCopertine/LaGrandeGuerra.jpg', '1959-00-00', 'Prima le tentano tutte per imboscarsi quando gli altri vanno all\'assalto, ma poi moriranno da eroi per non tradire la patria di fronte al nemico. Indovinatissima commistione di tragedia e commedia. Strepitosi Sordi e Gassman.', 'http://www.youtube.com/watch?v=YhvD9rGUnrE', '8', 'Excellent');
INSERT INTO `film` VALUES ('44', '2', '106', 'Le amiche', '/images/imgCopertine/LeAmiche.jpg', '1955-00-00', 'Sbarcata a Torino per lavoro, la giovane romana Clelia conosce Rosetta in circostanze drammatiche (la ragazza infatti ha appena tentato il suicidio per amore) e successivamente le sue amiche, variamente coinvolte in vicende sentimentali critiche che sembrano affrontare con la massima disinvoltura. Disinvoltura che manca a Rosetta: tenterà una seconda volta di togliersi la vita. Clelia, dapprima propensa a fermarsi a Torino, torna a Roma.', 'http://www.youtube.com/watch?v=WxBE2c1Fvwc', '18', 'Excellent');
INSERT INTO `film` VALUES ('45', '2', '100', 'Estate violenta', '/images/imgCopertine/EstateViolenta.jpg', '1959-00-00', 'Riccione: Carlo, figlio di un gerarca fascista, si innamora di Roberta, vedova di un ufficiale. Quando Carlo rischia l\'arresto per i suoi documenti non in regola, Roberta lo vuole nascondere a Rovigo: ma dopo un attacco aereo, il giovane decide diversamente...', 'http://www.youtube.com/watch?v=qmyP26vUELw', '19', 'Excellent');
INSERT INTO `film` VALUES ('46', '3', '138', 'Stalingrad', '/images/imgCopertine/Stalingrad.jpg', '1992-00-00', 'Il giovane tenente tedesco Hals viene mandato per punizione sul fronte di Stalingrado. È l\'inverno 1942-43 e la situazione, fino ad allora favorevole alle truppe di Hitler, si capovolge. Nelle spaventevoli condizioni climatiche, mentre si compiono le ultime criminali follie di alcuni dei più fanatici fra i loro ufficiali, i tedeschi si rendono conto che la sconfitta è inevitabile e la morte è certa.', 'http://www.youtube.com/watch?v=RuXe0uoPcLs', '21', 'Excellent');
INSERT INTO `film` VALUES ('47', '2', '104', 'Lo straniero', '/images/imgCopertine/LoStraniero.jpg', '1967-00-00', 'Lo straniero è un film del 1967 diretto da Luchino Visconti e tratto dal romanzo omonimo di Albert Camus.', 'http://www.youtube.com/watch?v=byPg1GbiUlg', '10', 'Excellent');
INSERT INTO `film` VALUES ('48', '2', '130', 'Morte a Venezia', '/images/imgCopertine/MorteAVenezia.jpg', '1971-00-00', 'Il musicista Gustav von Aschenbach, prossimo alla vecchiaia, prende alloggio nel lussuoso \"Hotel des bains\" del Lido di Venezia. Indifferente a tutto, viene colpito dalla bellezza di un adolescente, Tadzio, ospite con la sua famiglia nello stesso albergo. Dopo un fallito tentativo di fuga, non può fare a meno di pedinarlo. Venezia è in preda a un\'epidemia di colera e Gustav si ammala.', 'http://www.youtube.com/watch?v=JE2oGAH7PHQ', '10', 'Excellent');
INSERT INTO `film` VALUES ('49', '5', '109', 'Ricomincio da tre', '/images/imgCopertine/RicomincioDaTre.jpg', '1981-00-00', 'Gaetano (Massimo Troisi), giovane napoletano timido e impacciato decide di fuggire dall\'inerzia di Napoli e dalla famiglia e va alla ricerca di stimoli più vivi altrove. Approda a Firenze dove trova un appoggio presso una zia, ma appena viene a sapere che la donna convive con un professore accetta l\'ospitalità di un ragazzo italoamericano...', 'http://www.youtube.com/watch?v=pgV0OOitBlk', '22', 'Excellent');
INSERT INTO `film` VALUES ('50', '2', '95', 'L\'assassino ', '/images/imgCopertine/LAssassino.jpg', '1961-00-00', 'L\'antiquario Alfredo Martelli viene fermato dalla polizia con l\'accusa di aver ucciso una sua ex amante per motivi di denaro. La permanenza negli uffici della polizia fa riflettere Alfredo su alcuni episodi poco puliti della sua vita, e affiora il senso di colpa. Poi il vero omicida viene scoperto: Alfredo, rilasciato, finisce per dimenticare l\'angoscia di quelle ore e ritorna alla vita di sempre.', 'http://www.youtube.com/watch?v=Srg9Tx8aVZ4', '23', 'Excellent');
INSERT INTO `film` VALUES ('51', '2', '122', 'Io la conoscevo bene', '/images/imgCopertine/IoLaConoscevoBene.jpg', '1965-00-00', 'Adriana parte dalla provincia per tentare il successo nella capitale. A Roma però non è facile trovare fortuna e a nulla portano le promesse dei numerosi conoscenti. Alla fine prevale la disperazione.', 'http://www.youtube.com/watch?v=vVkGVdG8Ktk', '24', 'Excellent');
INSERT INTO `film` VALUES ('52', '2', '126', 'La proprietà non è più un furto', '/images/imgCopertine/LaProprietaNonEPiuUnFurto.jpg', '1973-00-00', 'Total, giovane impiegato di banca, è allergico al denaro, gli fa schifo toccarlo e disprezza chi lo possiede. Convinto che il mondo sia fatto di ladri, quelli che si professano tali e quelli che si arrichiscono alle spalle degli altri, crede di aver individuato un appartenente alla seconda categoria in un macellaio cliente della banca per cui lavora. Decide di prenderlo di mira.', 'http://www.youtube.com/watch?v=qmPNJVfOXhE', '23', 'Excellent');
INSERT INTO `film` VALUES ('53', '8', '130', 'Todo modo', '/images/imgCopertine/TodoModo.jpg', '1975-00-00', 'Mentre nel paese infuria un\'epidemia, un centinaio di \"notabili\" del partito che da trent\'anni governa l\'Italia si riunisce in un albergo convento per seguire un corso di esercizi spirituali condotto da un gesuita, don Gaetano. In realtà ai convenuti preme soltanto concordare una nuova spartizione del potere. Ben presto, dopo un furto sacrilego, la riunione si trasforma in rissa e cominciano i morti.', 'http://www.youtube.com/watch?v=wPX4B3tWF-w', '23', 'Excellent');
INSERT INTO `film` VALUES ('54', '2', '93', 'A Ciascuno Il Suo', '/images/imgCopertine/ACiascunoIlSuo.jpg', '1967-00-00', 'Le indagini su due omicidi compiuti in un paesino della Sicilia portano alla conclusione che si sia trattato di un delitto d\'onore. Paolo Laurana, un professore di liceo, non ne è convinto e confida questi suoi dubbi all\'avvocato Rosello. Continuando le sue indagini però Laurana capisce che il mandante del duplice omicidio è proprio l\'avvocato, con la complicità di Luisa, vedova di una delle vittime. Laurana muore sotto i colpi di un killer; l\'avvocato Rosello e Luisa si sposano.', 'http://www.youtube.com/watch?v=8wIYvD1rzm4', '23', 'Excellent');
INSERT INTO `film` VALUES ('55', '2', '114', 'Indagine su un cittadino al di sopra di ', '/images/imgCopertine/IndagineSuUnCittadinoAlDiSopraDiOgniSospetto.jpg', '1970-00-00', 'Il capo della sezione omicidi della polizia, conosciuto da tutti come \"il dottore\", viene nominato dirigente dell\'ufficio politico della questura; ma proprio il giorno della sua promozione, il funzionario uccide la sua amante Augusta Terzi. Forte della posizione che occupa, \"il dottore\" non si preoccupa neppure di sviare le indagini; finché, quando una bomba deflagra nella centrale di polizia e vengono fermati alcuni contestatori...', 'http://www.youtube.com/watch?v=J-0yC82xWNA', '23', 'Excellent');

-- ----------------------------
-- Table structure for `registi`
-- ----------------------------
DROP TABLE IF EXISTS `registi`;
CREATE TABLE `registi` (
  `IDRegisti` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `Cognome` varchar(20) NOT NULL,
  `dataNascita` year(4) DEFAULT NULL,
  PRIMARY KEY (`IDRegisti`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of registi
-- ----------------------------
INSERT INTO `registi` VALUES ('1', 'Roberto', 'Rossellini', '1906');
INSERT INTO `registi` VALUES ('2', 'Alfred', 'Hitchcock', '1901');
INSERT INTO `registi` VALUES ('3', 'Vittorio', 'De Sica', '1901');
INSERT INTO `registi` VALUES ('4', 'Federico', 'Fellini', '1920');
INSERT INTO `registi` VALUES ('5', 'Camillo', 'Mastrocinque', '1901');
INSERT INTO `registi` VALUES ('6', null, 'Steno', '1917');
INSERT INTO `registi` VALUES ('7', 'Giuseppe', 'De Santis', '1917');
INSERT INTO `registi` VALUES ('8', 'Mario', 'Monicelli', '1915');
INSERT INTO `registi` VALUES ('9', 'Ernst', 'Lubitsch', null);
INSERT INTO `registi` VALUES ('10', 'Luchino', 'Visconti', '1906');
INSERT INTO `registi` VALUES ('11', 'Pietro', 'Germi', '1914');
INSERT INTO `registi` VALUES ('12', 'Jean', 'Renoir', null);
INSERT INTO `registi` VALUES ('13', 'Alberto', 'Lattuada', '1913');
INSERT INTO `registi` VALUES ('14', 'Pier Paolo', 'Pasolini', '1922');
INSERT INTO `registi` VALUES ('15', 'Bernard', 'Borderie', '1924');
INSERT INTO `registi` VALUES ('16', 'Sergio', 'Corbucci', '1927');
INSERT INTO `registi` VALUES ('17', 'Fernando', 'Cerchio', '1914');
INSERT INTO `registi` VALUES ('18', 'Michelangelo', 'Antonioni', '1912');
INSERT INTO `registi` VALUES ('19', 'Valerio', 'Zurlini', '1926');
INSERT INTO `registi` VALUES ('20', 'Alberto', 'Sordi', '1920');
INSERT INTO `registi` VALUES ('21', 'Joseph', 'Vilsmaier', '1939');
INSERT INTO `registi` VALUES ('22', 'Massimo', 'Troisi', '1953');
INSERT INTO `registi` VALUES ('23', 'Elio', 'Petri', '1929');
INSERT INTO `registi` VALUES ('24', 'Antonio', 'Pietrangeli', '1919');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('8', 'phosphore', 'fdf03ad80cf7d68ec2f17d54fb61b0659a45e3eb', 'User', 'lorenzo.stl@gmail.com', '2014-06-15 20:09:37', '2014-06-16 18:45:51', 'wYOJA4KS5GSrImIQ6nMUYVEhzYkEqgkxdkEfyQUeLopf42RPgc7nFOZwsNEe');
INSERT INTO `users` VALUES ('9', 'admin', 'fdf03ad80cf7d68ec2f17d54fb61b0659a45e3eb', 'User', 'admin@yesadmin.it', '2014-06-16 13:07:03', '2014-06-18 17:59:15', '9MTMjLbiL7oqqYKRLlsGu4mWunx6fCx2uw3i4HXiI6U5LI0ihb2UdsVo0L8F');
INSERT INTO `users` VALUES ('10', 'giulio', 'b69566ebaa157721f0891efee709bf5e6e652208', 'User', 'giulio.perin@alice.it', '2014-06-16 21:40:58', '2014-06-21 09:06:30', '1Qm03iP8KVybfjFFQ1B1f5x8Dm8s3v5DmmQupyJ82gCLP326YJND5CYdHjO0');
INSERT INTO `users` VALUES ('11', 'bob', '0eec9036c33be73f7ee585aad653e358b9de6841', 'User', 'bob@bob.it', '2014-06-18 17:59:49', '2014-06-18 17:59:49', null);

-- ----------------------------
-- Table structure for `watchlater`
-- ----------------------------
DROP TABLE IF EXISTS `watchlater`;
CREATE TABLE `watchlater` (
  `IDUtente` int(11) NOT NULL,
  `IDFilm` int(11) NOT NULL,
  PRIMARY KEY (`IDUtente`,`IDFilm`),
  KEY `Film` (`IDFilm`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of watchlater
-- ----------------------------
INSERT INTO `watchlater` VALUES ('8', '4');
INSERT INTO `watchlater` VALUES ('8', '11');
INSERT INTO `watchlater` VALUES ('8', '12');
INSERT INTO `watchlater` VALUES ('8', '30');
INSERT INTO `watchlater` VALUES ('8', '35');
INSERT INTO `watchlater` VALUES ('8', '36');
INSERT INTO `watchlater` VALUES ('8', '37');
INSERT INTO `watchlater` VALUES ('10', '3');
INSERT INTO `watchlater` VALUES ('10', '14');
INSERT INTO `watchlater` VALUES ('10', '20');
INSERT INTO `watchlater` VALUES ('10', '45');
INSERT INTO `watchlater` VALUES ('10', '55');
