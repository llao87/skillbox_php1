<ul class="main-menu">
<?php foreach ($menuItems as $item): ?>
		<li>
			<a href="<?= $item['url'] ?>"><?= $item['title'] ?></a>
		</li>
	<?php endforeach; ?>
</ul>