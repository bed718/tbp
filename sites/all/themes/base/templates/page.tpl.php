
<div id="header-container">
	<div id="header">
		<div id="logo"><a href="/"><img src="/sites/all/themes/base/images/TB-logo.svg" alt="Tiffanie Byron Photography Logo"></a></div>
		
		<div id="main-nav">
			<div class="menu-toggle icon-list"></div>

			<div id="menu">
				<?php print render($page['nav_main']); ?>
				<div class="social-icons">
					<a href="http://twitter.com/TiffanieByron" class="icon-twitter" target="_blank"></a>
					<a href="http://instagram.com/TiffanieByron" class="icon-instagram" target="_blank"></a>
				</div>
			</div>
		</div> 
	</div>
	<div id="header-bg"></div>
</div>

<div id="main-container">
	<div class="main">
		<?php if(isset($messages)): ?>
			<div id="messages"><?php echo $messages; ?></div>
		<?php endif; ?>

		<?php if(isset($tabs)): ?>
			<div id="tabs"><?php echo render($tabs); ?></div>
		<?php endif; ?>

		<?php if(isset($title) && !$is_front): ?>
			<h1 id="page-title"><?php echo $title; ?></h1>
		<?php endif; ?>
		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>
