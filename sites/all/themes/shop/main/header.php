<div id="header_background">
	<div id="header">
		<ul>
			<li>
				<div id="header_left">
					<a href="/"><div id="logo"><img src="/sites/all/themes/shop/include/images/logo.png"></div></a>
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
					<?php print render($page['login_menu']);?>

					<!-- <div id="logistr">
						<div id="registr">Регистрация</div>
						<div> | </div>
						<div id="login">Вход</div>
					</div>
					<div id="cart">
						<div id="cart_title">Корзина</div>
						<div id="cart_items">Товары: <b>0</b></div>
						<div id="cart_summ">Сумма: <b>0</b></div>
					</div> -->
				</div>
			</li>
			<li class="helper"></li>
		</ul>
	</div>
</div>