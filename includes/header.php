<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
						<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span style="white-space: nowrap;" class="button button-tertiary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/viewprofile.php"><?= $LANG['H_MY_PROFILE'] ?></a>
					</span>
					<span style="white-space: nowrap;" class="button button-secondary bottom-breathing-room-rel">
						<a href="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout"><?= $LANG['H_LOGOUT'] ?></a>
					</span>
					<?php
				} else {
					?>
					<span class="button button-secondary">
						<a href="<?= $CLIENT_ROOT . "/profile/index.php?refurl=" . htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
							<?= $LANG['H_LOGIN'] ?>
						</a>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<div class="image-container" style="height:126px">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/header_med2_reducido.jpeg" alt="RHM Logo">
					</div>
				</a>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="#" ><?= $LANG['H_FLORAS']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=96">Baja California</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=97">Baja California Sur</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=98">Chihuahua</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=99">Durango</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=100">Sinaloa</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=92">Sonora</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?proj=6"><?= $LANG['H_MABA_PROJECT']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?= $LANG['H_SEARCH']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/search/index.php" ><?= $LANG['H_COLLECTIONS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/map/index.php" target="_blank"><?= $LANG['H_MAP']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" ><?= $LANG['H_DYN_LISTS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php" ><?= $LANG['H_TAXONOMIC_EXPLORER']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?= $LANG['H_IMAGES']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php" ><?= $LANG['H_IMAGE_BROWSER']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/search.php" ><?= $LANG['H_IMAGE_SEARCH']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/contributors.php" ><?= $LANG['H_IMAGE_CONTRIBUTORS']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" ><?= $LANG['H_MORE_INFO']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/misc/collprofiles.php" ><?= $LANG['H_PARTNERS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/misc/sobreproyecto.php" ><?= $LANG['H_ABOUT_PROJECT']; ?></a>
							</li>
							<li>
								<a href="https://biokic.github.io/symbiota-docs/" target="_blank" ><?= $LANG['H_HELP']; ?></a>
							</li>
							<li>
								<a href='<?= $CLIENT_ROOT; ?>/sitemap.php'><?= $LANG['H_SITEMAP']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="es" >Español</option>
							<option value="en" <?= ($LANG_TAG=='en'?'SELECTED':'') ?>>English</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>
