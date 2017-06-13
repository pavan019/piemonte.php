<?php
	$title = "Home";
	include_once 'header.php';
?>

	<body>
		<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test website HTML5 | <?php print $title; ?> </title>

    <!-- Bootstrap -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom -->
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          <?php
            $class_home = "";
            $class_about = "";
            $class_contact = "";
            // if ($title == "Home") {
            //   $class_home = ' class="active"';
            // } else if ($title == "About") {
            //   $class_about = ' class="active"';
            // } else if ($title == "Contact") {
            //   $class_contact = ' class="active"';
            // }
            switch ($title) {
              case 'Home':
                $class_home = ' class="active"';
                break;
              case 'About':
                $class_about = ' class="active"';
                break;
              case 'Contact':
                $class_contact = ' class="active"';
                break;
            }
          ?>

            <li<?php print $class_home; ?>><a href="index.php">Home</a></li>
            <li<?php print $class_about; ?>><a href="about.php">About</a></li>
            <li<?php print $class_contact; ?>><a href="contact.php">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
		<h1>Piemonte</h1>
		<div>
			<p>Il <b>Piemonte</b> è una regione dell’Italia nord-occidentale di 4.377.791 abitanti con capoluogo Torino. Confina<br> ad ovest con la Francia, a nord-ovest con la Valle d’Aosta, a nord con la Svizzera, ad est con la Lombardia,<br> a sud-est con l’Emilia-Romagna e a sud con la Liguria.
			</p>
		</div>
		<div>
			<p>Il Piemonte è la seconda regione italiana per superficie, dopo la Sicilia, e la sesta per numero di abitanti. È<br> inoltre la quarta regione italiana per esportazioni, con una quota del 10% sul totale nazionale.
			</p>
		</div>
		<img src="images/mappa-piemonte.jpg">
		<p>Il Piemonte e le sue province</p>
		<h2>Geografia</h2>
		<div>
			<p>Il territorio della regione è suddivisibile in tre fasce concentriche, di cui la prevalente e più esterna è quella<br> alpina ed appenninica. Al suo interno vi è la zona collinare, la quale racchiude la zona pianeggiante.
			</p>
		</div>
		<div>
			<p>Nella regione scorrono moltissimi fiumi e torrenti, tutti affluenti del fiume Po che nasce al <em>Pian del Re</em> ai piedi del Monviso.
			</p>
		</div>
		<h4>Monti</h4>
		<div>
			<p>Le principali catene montuose sono le <a href="alpi.html">Alpi</a>, che circondano la regione ad ovest e nord, e gli Appennini che,<br> situati al confine con Liguria ed Emilia-Romagna, costituiscono così un confine naturale.
			</p>
		</div>
		<div> 
			<p>Piemonte significa <em>ai piedi dei monti</em>, così definito perché circondato su tre lati dalle montagne delle Alpi<br> Occidentali e dell’Appennino Ligure. La montagna piemontese ha un  aspetto imponente ed aspro: infatti le<br> sommità al di sopra dei tremila metri scendono rapidamente verso la pianura.
			</p>
		</div>
		<div>
			<p>Il territorio piemontese è ricco di corsi d’acqua, tutti tributari del fiume Po, che attraversa interamente la<br> regione da ovest a est. Da citare oltre allo stesso Po, sono:
			</p>
			<ul>
				<li><b>Tanaro</b>, il principale affluente di destra, lungo 276 km con i suoi sub-affluenti principali, la Bormida e<br> la <a href="http://www.vallesturademonte.com/">Stura di Demonte</a>;</li>
				<li><b>Dora Riparia</b>, affluente di sinistra, lungo 125 km, percorre interamente, coi suoi affluenti, la Valle di<br> Susa;</li>
				<li><b>Sesia</b>, lungo 140 km, attraversa il vercellese ed è uno dei più importanti fiumi del Piemonte orientale;</li>
				<li><b>Ticino</b>, lungo 248 km, il secondo fiume italiano per portata d’acqua, immissario ed emissario del <a href="lago-maggiore.html">Lago<br> Maggiore</a>, scorre però solo per pochi km interamente in Piemonte in quanto funge da confine con la<br> Lombardia;</li>
			</ul>
		</div>
		<h2>Le attività</h2>
		<div>
			<p>La maggior parte della popolazione vive in pianura in particolare a Torino e nei paesi limitrofi, dove si<br> concentra l’attività industriale. Nelle province di Vercelli e di Novara, l’economia è basata sulla coltivazione<br> del riso di cui la regione è il primo produttore italiano. Altri prodotti dell’agricoltura praticata con tecniche<br> macchinari moderni sono: cereali, patate, ortaggi, frutta e foraggio. Sulle colline sono diffusi i vigneti che<br> producono vini pregiati.
			</p>
		</div>
		<a href="http://www.vallesturademonte.com/"><img src="images/stemma-novara.jpg"></a>
		<p>Clicca sullo stemma del Comune di Novara</p>
		<h4>Clima</h4>
		<div>
			<p>Il Piemonte ha un clima tipicamente temperato a carattere sub-continentale che sulle Alpi diventa<br> progressivamente temperato-freddo e freddo salendo in quota. Nelle zone situate a bassa quota gli inverni<br> sono freddi ed umidi (spesso si formano nebbie fitte) ma poco piovosi. Le estati invece sono calde ed afose<br> con possibilità di forti temporali, specialmente nelle zone a nord del Po
			</p>
		</div>
		<div>
			<p>Sulla piovosità ha molta influenza la direzione di provenienza delle masse d’aria. Se esse sono umide e<br> provengono da sud, sud-est o est, la catena alpina sbarra loro la strada (si tratta del fenomeno detto <em>stau</em>): in<br> tal caso le precipitazioni possono anche essere molto abbondanti, specialmente sui primi versanti montani,<br> talvolta provocando alluvioni.
			</p>
		</div>

<?php
	include_once 'footer.php';
?>
