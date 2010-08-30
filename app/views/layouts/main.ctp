<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title><?php echo $title_for_layout; ?></title>	
    <?php echo $this->Html->css('layout'); ?>
</head>
<body>
	<header>
		<div class="content">
			<h1>TalkBattle<h1>
		</div>
	</header>
	<section id="content">
		<?php echo $content_for_layout; ?>
	</section>
	<footer>
		<div class="content">
			<p>#Satolephp</p>
		</div>
	</footer>
</body>
