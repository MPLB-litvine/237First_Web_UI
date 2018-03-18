<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset') ?>" >
	<meta name="viewport" content="width=device-width" >
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="site_header">
		<h1><a href="<?php echo home_url(); ?>"></a><?php bloginfo('name'); ?>
			<img class="toolbar" id="menu" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAABISURBVGhD7dYxDcAAEAOx50+6JZC9OtWWbgmCHHBPvDmWmmOpOZYCAIAPrYtaao6l5lhqjqUAAOBD66KWmmOpOZaaYyn4sbsXccQ938OVsxIAAAAASUVORK5CYII=">
			<img class="toolbar" id="notifications" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARNSURBVGhD7ZhdaBxVFMdHbWbmTtWUgkVU8Fu0RVCrPhkfClYsVFGs0gf7IqXVov0ymlht0nY2KtQiCBXFDyz60hdp0T7YhJ1t0k0bk2rtVpPdpGtRQYQWbEht1L3H/509u9kmN7jZmZ2NsH/4k83N7Dm/c78zRl111TW7lGq7cn7GFY+lXbE829Y4j5v/Hxpy7WaAn8/EBCmnY2IMP1/gP89uZWL2Uwydw+f9adf+CsVI1Tbc4Szjx2or6TXcKT1zk0xY78iEuZsSVjt+X0b9ixsBfdTveddexY8bKOB5vyhXdHJTbQTgh6VnDQCYfPfeSHTicaLhzUQ/bSc50ipHu5pyI286lG0zbP5afj2oomL2GW6KVrTXuAzwbxXBe+YRnXwa0Nt8cN+ZF4n6FhEdEjR+wKbfPrBX8tfVCCzPj4Ddx03RyYf3rM+K8MlrALtxAjzbTvTdEh+8+Az819dW7vQuZyfWQgfg/8iPgLOaw0ajKfC91xOdai2B34JeX3gReKnH9ln+LuTbFR8SGZdw6OrrP+HVZ7UGSoB1/v0T69NhV9zLYaNRefBoKwGdzojzBYeNRjIurkPS00WIAPDKWPyj1G80cPjqiOLG5djHH8Gevgfw/xQBAsIXrDqFU4UjShkmxe0HAL0VTgB6fEriI7eGAq8suxsWcerKJJOGwFCuoYS5F7AD8HldIkpeS/Ttg9gm102AB4RXlofnLmCUmQvgS+ALusDUcxVR/z1EqSdwmjZfDF3wSEB4z/w10PYpD5kJP5g6aHpvQA834RRdOT1wwWqPP/EoipyvBSvXWFfvM0plkseX/kmDz2IavKYHLfWpFozGCozKXUTdV2iBZmKM/N8UN29nlMokh1ulFlY5u5VocDXR8aVYtDdPuQ4ENQp4mzEql0w/d64IrObzj6vyd5ejtwB4rjZxGMbc71QHImNULnmsaQ99g4WavFqbqBpWWzMOL4cRgom6rZswlBOHU5UdKnxBKOBzXbKwXRV4JWylt2lP2xCN7TJbFfiCUMB2XeIwjJ4fl3Ej3PvOZMkDhoUiUjqAoEYB6zlNdYVEd6CIczqISu3fqw4ajZyi+sJ6eBJJpQ6mEmPuH+TQ0Qm30hYdTGU2WzhstMLWulMPNDNLb859HDJaqSsu1sR7Oqhyjal4NpTrQhABYocOrhxjFPdzmNqJ2oxLM+9aPbn4zBc2RnAzh6mdel4S33eudyj5ikNjX+pBp7OMz4n2fc9kqRdOqXYhvU0OqSLiGx365aPy/ifA1MvVfP5nYvar6rXf0A5Bh5vzRSj3ve7Q6D49eMHY/3/mMLVTxrVbS95d0sAWh7o25IvogrO7RQILNT0VHr3vmSs4TO005Ir7iwWwBzEaR1ryhfS+bD2knpNew92AXodp8wZ6fkPoL6qCCD3/8eQilE9uc3bxI7Nb6kBLu2JtOibSKOYC4H/IdNjP8J/rqquuusqRYfwLA/CFPOAOCJIAAAAASUVORK5CYII=">
			<button class="toolbar" id="language">EN</button>
		</h1>
	</header>
		<nav class="navig_tabs">
			<?php $args = array('theme_location' => 'primary'); ?>
			<?php wp_nav_menu($args); ?>
		</nav>