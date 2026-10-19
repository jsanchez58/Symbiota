<?php
include_once('../config/symbini.php');
header("Content-Type: text/html; charset=".$CHARSET);
include_once('content/lang/misc/aboutproject.' . $LANG_TAG . '.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
	<head>
		<title>About Project</title>
		<?php

		include_once($SERVER_ROOT.'/includes/head.php');
		?>
	</head>
	<body>
		<?php
		$displayLeftMenu = false;
		include($SERVER_ROOT.'/includes/header.php');
		?>
		<div class="navpath">
			<a href="../index.php"><?= $LANG['HOME']; ?></a> &gt;&gt;
			<b><?= $LANG['ABOUT_PROJECT'] ?></b>
		</div>
		<!-- This is inner text! -->
		<main id="innertext">
			<?php
			if($LANG_TAG=='en'){
				?>
				<h1>About the Project</h1>
				<p>
					The <b>Network of Mexican Herbariums</b>, previously known as the Network of Herbariums of Northwest Mexico
					(<a href="http://herbario.uson.mx/wp-content/uploads/2022/01/Sanchez-Gilbert_RHNM-AridoCiencia_2018_Vol_3-2_Pag_21-35.pdf" target="_blank">Sánchez and Gilbert, 2018</a>),
					is an initiative promoted jointly by the <a href="" target="_blank">University of Sonora</a>
					and the <a href="https://biokic.asu.edu/" target="_blank">Arizona State University (BioKIC)</a>.
					The biodiversity data portal has been established using the <a href="https://symbiota.org" target="_blank">Symbiota Software platform</a>.
					See the <a href="https://biokic.github.io/symbiota-docs/" target="_blank">Symbiota Support Hub docuemntation</a> pages for more information about the features and capabilities of this portal.
				</p>
				<p>
					The <b>Red de Herbarios Mexicanos</b> is being built in collaboration with the following Mexican Herbaria:
				</p>
				<h2>Noroeste:</h2>
				<ul>
					<li>Universidad Autónoma de Baja California (BCMEX)</li>
					<li>Centro de Investigaciones Biológicas del Noroeste (HCIB)</li>
					<li>Universidad de Sonora (USON)</li>
					<li>Universidad Autónoma de Sinaloa (UAS)</li>
					<li>Herbario Regional CIAD-Mazatlán (HCIAD)</li>
					<li>Jardín Botánico Culiacán (HJBC)</li>
				</ul>
				<h2>Norte-Centro-Sur:</h2>
				<ul>
					<li>Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional Unidad Durango (CIIDIR)</li>
					<li>Universidad Autónoma de San Luis Potosí (SLPM)</li>
					<li>Universidad Juárez del Estado de Durango (JAAA)</li>
					<li>Universidad de Guadalajara (IBUG)</li>
					<li>Universidad Autónoma de Querétaro (QMEX)</li>
					<li>Jardín Botánico de la Benemérita Universidad Autónoma de Puebla (HUAP)</li>
					<li>Jardín Botánico El Charco del Ingenio (WLM)</li>
					<li>Universidad Autónoma de Aguascalientes (HUAA)</li>
					<li>Herbario del Estado de Zacatecas (ZAC-HZAC)</li>
					<li>Universidad de Colima (UCOL)</li>
					<li>Universidad Autónoma Chapingo Unidad Regional Universitaria de Zonas Áridas (URUZA)</li>
					<li>Colegio de Postgraduados (CHAPA)</li>
					<li>Universidad Autónoma del Estado de Hidalgo (HGOM)</li>
					<li>Universidad Autónoma de Tamaulipas (UAT)</li>
					<li>Universidad Autónoma de Yucatán (UADY)</li>
				</ul>
				<p>
					We hope to build collaborations with additional herbaria throughout Mexico in an effort to extend the ability of this resource to
					share the knowledge of the amazing flora of Mexico that our collections are striving to research and protect.
				</p>
				<div class="title-div">References:</div>
				<?php
			}
			else{
				?>
				<h1>Sobre el proyecto</h1>
				<p>
					Este portal, conocido anteriormente como Red de Herbarios del Noroeste de México
					(<a href="http://herbario.uson.mx/wp-content/uploads/2022/01/Sanchez-Gilbert_RHNM-AridoCiencia_2018_Vol_3-2_Pag_21-35.pdf" target="_blank">Sánchez y Gilbert, 2018</a>),
					ahora está denominado como <b>Red de Herbarios Mexicanos</b>,
					una iniciativa impulsada conjuntamente desde 2015 por la <a href="https://www.uson.com/" target="_blank">Universidad de Sonora</a>
					y la <a href="https://biokic.asu.edu/" target="_blank">Universidad Estatal de Arizona (BioKIC)</a>.
					El portal de datos sobre biodiversidad se ha establecido utilizando el sofware
					<a href="https://symbiota.org" target="_blank">Symbiota</a>.
					En las páginas de ayuda de <a href="https://biokic.github.io/symbiota-docs/" target="_blank">Symbiota Support Hub</a>
					podrá conocer mas sobre las características y capacidades de este portal.
				</p>
				<p>
					En el presente, la <b>Red de Herbarios Mexicanos</b> cuenta con la participación y colaboración de los herbarios de las siguientes regiones e instituciones de México:
				</p>
				<h2>Noroeste:</h2>
				<ul>
					<li>Universidad Autónoma de Baja California (BCMEX)</li>
					<li>Centro de Investigaciones Biológicas del Noroeste (HCIB)</li>
					<li>Universidad de Sonora (USON)</li>
					<li>Universidad Autónoma de Sinaloa (UAS)</li>
					<li>Herbario Regional CIAD-Mazatlán (HCIAD)</li>
					<li>Jardín Botánico Culiacán (HJBC)</li>
				</ul>
				<h2>Norte-Centro-Sur:</h2>
				<ul>
					<li>Centro Interdisciplinario de Investigación para el Desarrollo Integral Regional Unidad Durango (CIIDIR)</li>
					<li>Universidad Autónoma de San Luis Potosí (SLPM)</li>
					<li>Universidad Juárez del Estado de Durango (JAAA)</li>
					<li>Universidad de Guadalajara (IBUG)</li>
					<li>Universidad Autónoma de Querétaro (QMEX)</li>
					<li>Jardín Botánico de la Benemérita Universidad Autónoma de Puebla (HUAP)</li>
					<li>Jardín Botánico El Charco del Ingenio (WLM)</li>
					<li>Universidad Autónoma de Aguascalientes (HUAA)</li>
					<li>Herbario del Estado de Zacatecas (ZAC-HZAC)</li>
					<li>Universidad de Colima (UCOL)</li>
					<li>Universidad Autónoma Chapingo Unidad Regional Universitaria de Zonas Áridas (URUZA)</li>
					<li>Colegio de Postgraduados (CHAPA)</li>
					<li>Universidad Autónoma del Estado de Hidalgo (HGOM)</li>
					<li>Universidad Autónoma de Tamaulipas (UAT)</li>
					<li>Universidad Autónoma de Yucatán (UADY)</li>
				</ul>
				<p>
					Esperemos que, poco a poco, se vayan sumando más herbarios de otras regiones del país; para que, entre todos,
					contribuyamos a compartir en línea el gran conocimiento de la flora de México que se resguarda en nuestras colecciones.
				</p>
				<div class="title-div">Referencia</div>
				<?php
			}
			?>
			<p>
				Sánchez-Escalante, José Jesús y Edward E. Gilbert. 2018. Red de Herbarios del noroeste de México: Un esfuerzo colaborativo entre botánicos mexicanos.
				<a href="http://herbario.uson.mx/wp-content/uploads/2022/01/Sanchez-Gilbert_RHNM-AridoCiencia_2018_Vol_3-2_Pag_21-35.pdf" target="_blank">Árido-Ciencia 2018 Vol. 3 (2): 21-35</a> - Nota Corta.
			</p>
			<div>
				<p style="text-align: center;">
					<a href="http://www.cibnor.mx/es/investigacion/colecciones-biologicas/herbario-hcib/entrada" target="_blank">
						<img alt="Herbario Anetta Mary Carter (HCIB)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/hcib.jpg" style="width: 130px; height: 48px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="http://bajaterraignota.webnode.mx/herbario-bcmex/" target="_blank">
						<img alt="Herbario de la Universidad Autónoma de Baja California (BCMEX)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/bcmex.jpg" style="width: 89px; height: 80px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="http://herbario.uson.mx/" target="_blank">
						<img alt="Herbario de la Universidad de Sonora (USON)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/uson.png" style="width: 80px; height: 80px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="http://www.ciidirdurango.ipn.mx/investigacion/Paginas/herbario.aspx" target="_blank">
						<img alt="Herbario del Instituto Politécnico Nacional-Unidad Durango (CIIDIR)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/ciidir.jpg" style="width: 82px; height: 80px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<img alt="Herbario Jesús González Ortega (UAS)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/uas.jpg" style="width: 59px; height: 80px;" />
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="http://www.ciad.mx/herbario/" target="_blank">
						<img alt="Herbario Regional CIAD-Mazatlán (HCIAD)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/hciad.jpg" style="width: 64px; height: 80px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="http://slpm.uaslp.mx/" target="_blank">
						<img alt="Herbario Isidro Palacios (SLPM)" src="<?php echo $CLIENT_ROOT; ?>/images/icons/uaslp.jpg" style="width: 64px; height: 80px;" />
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="/portal/collections/misc/collprofiles.php?collid=397" target="_blank" rel="noopener">
						<img style="width: 124px; height: 80px;" src="<?php echo $CLIENT_ROOT; ?>/images/icons/jaaa.jpg" alt="Herbario Jorge Arturo Alba Avila (UJED-JAAA)">
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="/portal/collections/misc/collprofiles.php?collid=396" target="_blank" rel="noopener">
						<img style="width: 63px; height: 100px;" src="<?php echo $CLIENT_ROOT; ?>/images/icons/qmex.jpg" alt="Herbario de la Universidad Autónoma de Querétaro (QMEX)">
					</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					<a href="/portal/collections/misc/collprofiles.php?collid=400" target="_blank" rel="noopener">
						<img style="width: 244px; height: 65px;" src="<?php echo $CLIENT_ROOT; ?>/images/icons/hjbc.jpg" alt="Herbario del Jardín Botánico Culiacán (HJBC)">
					</a>
				</p>
			</div>
		</main>
		<?php
		include($SERVER_ROOT.'/includes/footer.php');
		?>
	</body>
</html>