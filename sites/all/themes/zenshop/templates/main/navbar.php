<div id="navbar_background" class="block_background">
	<div  class="center_block" id="navbar">
		<?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
		<?php print render($page['navigation']); ?>
	</div>
</div>
		<!-- <ul>
			<li><a href="/"><div class="navbar_item"><img src="/sites/all/themes/zenshop/include/images/home.png"></div></a></li>
			<li><a href="/main/catalog"><div class="navbar_item">Мужская одежа</div></a></li>
			<li><a href="/main/catalog"><div class="navbar_item">Женская одежда</div></a></li>
			<li><a href="/main/catalog"><div class="navbar_item">Детская одежда</div></a></li>
			<li><a href="/main/catalog"><div class="navbar_item">Для новорожденных</div></a></li>
			<li class="helper"></li>
		</ul> -->