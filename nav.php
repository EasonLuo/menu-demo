<?php require 'menu.php'; ?>
<nav>
	<ul>
		<?php for($index=0;$index<count($menu);$index++) {
			$item = $menu[$index];
		 ?>
		<li>
			<a href="<?php echo $item['link']; ?>"><?php echo $item['text']; ?></a>
			<?php if(isset($item['items']) && count($item['items'])>0) { ?>
			<ul class="dropdown">
			<?php foreach($item['items'] as $subItem) : ?>
				<li><a href="<?php echo $subItem['link']; ?>"><?php echo $subItem['text']; ?></a></li>
			<?php endforeach; ?>
			</ul>
		</li>
		<?php } //endif
		
			} //endfor
		?>
	</ul>
</nav>