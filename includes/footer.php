<footer>
	<div class="logo-gallery">
		<?php
		//include($SERVER_ROOT . '/accessibility/module.php');
		?>
		<a href="http://herbario.uson.mx" target="_blank" aria-label="Visit USON Website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/uson.gif" alt="Herbario de la Universidad de Sonora (USON)" />
		</a>
		<a href="https://biodiversity.ku.edu/" target="_blank" title="<?= $LANG['F_KU_BI'] ?>" aria-label="Visit KU BI website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/KU_BI.png"  alt="<?= $LANG['F_KU_BI_LOGO'] ?>" />
		</a>
		<a href="https://biokic.asu.edu" target="_blank" title="<?= $LANG['F_BIOKIC'] ?>" aria-label="Visit BioKIC website">
			<img src="<?= $CLIENT_ROOT; ?>/images/layout/logo-asu-biokic.png"  alt="<?= $LANG['F_BIOKIC_LOGO'] ?>" />
		</a>
	</div>
	<p>
		<?= (empty($DEFAULT_TITLE) ? $LANG['F_THIS_PORTAL'] : $DEFAULT_TITLE) . ' ' . $LANG['F_IS_PART_OF_SEINET'] . '. <a href="https://symbiota.org/seinet/" target="_blank">' . $LANG['F_LEARN_MORE_HERE'] . '</a>.'; ?>
	</p>
	<p>
		<?= $LANG['F_POWERED_BY'] ?> <a href="https://symbiota.org/" target="_blank">Symbiota</a>.
	</p>
</footer>
