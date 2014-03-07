<div id="header_background">
	<div id="header">
		<ul>
			<li>
				<div id="header_left">
					<?php if ($logo): ?>
				      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
				    <?php endif; ?>
					<div id="search">
						<form name="search" method="post" action="/index.php/main/search">
						    <input type="search" name="query" placeholder="Поиск" id="search_field">
						    <button type="submit" id="search_btn">Найти</button> 
						</form>
					</div>
				</div>
			</li>
			<li>
				<div id="header_center">
					<div id="header_phone">+7(8352)63-06-54</div>
					<div id="header_socials">
						<div class="icon_header_vk"></div>
						<div class="icon_header_tweet"></div>
						<div class="icon_header_fb"></div>
					</div>
				</div>
			</li>
			<li>
				<div id="header_right">
					<div id="logistr">
						<div id="registr">Регистрация</div>
						<div> | </div>
						<div id="login">Вход</div>
					</div>
					<div id="cart">
						<div id="cart_title">Корзина</div>
						<div id="cart_items">Товары: <b>0</b></div>
						<div id="cart_summ">Сумма: <b>0</b></div>
					</div>
					<?php if ($secondary_menu): ?>
				      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
				        <?php print theme('links__system_secondary_menu', array(
				          'links' => $secondary_menu,
				          'attributes' => array(
				            'class' => array('links', 'inline', 'clearfix'),
				          ),
				          'heading' => array(
				            'text' => $secondary_menu_heading,
				            'level' => 'h2',
				            'class' => array('element-invisible'),
				          ),
				        )); ?>
				      </nav>
				    <?php endif; ?>
				</div>
			</li>
			<li class="helper"></li>
		</ul>
		<?php print render($page['header']); ?>
	</div>
</div>