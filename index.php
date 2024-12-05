<?php
include_once('config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.' . $LANG_TAG . '.php')) include_once($SERVER_ROOT . '/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.' . $LANG_TAG . '.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?= $DEFAULT_TITLE . ' ' . $LANG['H_HOME'] ?></title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?= $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?= $CSS_BASE_PATH; ?>/quicksearch.css?ver=1" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="js/jquery.slides.js"></script>
	<script type="text/javascript">
		var clientRoot = "<?= $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<style>
		#slideshowcontainer{
			border: 2px solid black;
			border-radius:10px;
			padding:10px;
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>
	<!-- This is inner text! -->
	<div class="navpath"></div>
	<main id="innertext">
		<div style="float:right;width:400px;margin-left:20px">
			<div id="quicksearchdiv">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?= $LANG['QSEARCH_SEARCH']; ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?= $LANG['QSEARCH_SEARCH_BUTTON']; ?></button>
				</form>
			</div>
			<div>
				<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1.
				$ssId = 1;
				//Enter number of images to be included in slideshow (minimum 5, maximum 10)
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 350;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				$clId = "8";
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = "both";
				//Enter number of days of most recent images that should be included
				$numDays = 30;
				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clId,$dayInterval,$interval);
				?>
			</div>
		</div>
		<?php
		if($LANG_TAG=='en'){
			?>
			<h1>Welcome to the Red de Herbarios Mexicanos</h1>
			<div>
				<p>
					This data portal is meant to serve as a collaborative resource that integrates
					biodiversity content from various sources. The portal can be used to manage live data directly within the portal or map to datasets
					managed within external management systems. Type of data available within this resource includes specimen data, field observations,
					species inventories, field images, taxonomic information, species distribution data, and more.
				</p>
				<p>
					The <b>Red de Herbarios Mexicanos</b> is a collaboration of Mexican herbaria with a unified goal of providing data management
					resource to the research community as well as a publicly accessible biodiversity information center containing:
					<ul>
						<li>registration of specimen and field observation</li>
						<li>species distribution maps</li>
						<li>species inventories</li>
						<li>images (specimens and field photos)</li>
						<li>interactive identification keys</li>
						<li>taxonomic </li>
					</ul>
				</p>
				<p>
					The Taxon Search field appears on the right margin, where you can query by scientific name to consult Taxon Profile pages.
					Use the "Collections" option within the "Search Tools" section of the main menu to query specimen and observation records.
				</p>
				<p>
					If you have questions, comments, or recommendations, please share your feedback with the
					<a class="bodylink" href="mailto:help@symbiota.org?subject=Mexico Portal Feedback">Support Hub HelpDesk (help@symbiota.org)</a>.
					Visit the <a href="misc/usagepolicy.php">Data Usage Policy</a> page for information on how to cite data obtained from this web resource.
				</p>
			</div>
			<?php
		}
		else{
			?>
			<h1>Bienvenidos a la Red de Herbarios Mexicanos</h1>
			<div>
				<p>
					Este portal de datos está destinado a servir como un recurso colaborativo que integra contenido de biodiversidad de diversas fuentes.
					El portal se puede utilizar para administrar datos en vivo directamente dentro del portal, o mapear conjuntos de datos administrados en
					sistemas de manejo externos. El tipo de datos disponibles dentro de este recurso incluye datos e imágenes de especímenes, observaciones de campo,
					inventarios de especies, fotografías de campo, información taxonómica, datos de distribución de especies y más.
				</p>
				<p>
					La <b>Red de Herbarios Mexicanos</b>, pretende establecer un puente de colaboración entre los herbarios de México,
					otorgando herramientas para la gestión de colecciones y dar acceso a diferentes fuentes de información como:
					<ul>
						<li>registro de especímenes y observaciones de campo</li>
						<li>mapas de distribución de especies</li>
						<li>listas de especies dinámicas y estáticas</li>
						<li>imágenes (especímenes y fotos de campo)</li>
						<li>claves interactivas para identificación</li>
						<li>diccionario taxonómico</li>
					</ul>
				</p>
				<p>
					En el margen derecho aparece el campo <b>Búsqueda de Taxón</b>, donde se pueden consultar fichas de plantas por medio de alguna categoría taxonómica como familia,
					género o nombre científico. Para efectuar búsquedas mas precisas utilice la opción "Colecciones" en la sección "Búsqueda" del menú principal.
				</p>
				<p>
					Puede obtener indicaciones sobre como citar los datos obtenidos en este sitio web, a través de la página
					<a href="includes/usagepolicy.php">Directrices para el uso de los datos</a>.
				</p>
				<p>
					<a href="/portal/profile/newprofile.php?"><b>Regístrese</b></a> como un usuario regular y envíe sus comentarios y opiniones a <a href="mailto:jsanchez@guayacan.uson.mx">jsanchez@guayacan.uson.mx</a>.
				</p>
			</div>
			<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
