<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>&lt;toby&gt; Mackenzie</title>
<!--
._______.  _____  ._____   __     _.
|__   __| /  _  \ |   _  \ \ \  / /
   | |   |  | |  ||  |_| /   \ v /
   | |   |  | |  ||   _  \    | |
   | |   |  |_|  ||  |_|  \   | |
   |_|    \_____/ |______/    |_|
__     __    _      ______ ._.    __._______.._    ._. _______.._______.._______.
| \   / |  /   \   /  __  \| |   / /| ._____|| \   | ||_____  ||__   __|| ._____|
|  \ /  | /  ◊  \ | /    \|| | / /  | |_____.|  \  | |     / /    | |   | |_____.
| |\˘/| ||  / \  || |      |   <    | ._____|| |\ \| |   / /      | |   | ._____|
| | ˘ | || |   | || \___/¯|| | \ \  | |_____.| |  \  | / /____ .__| |__.| |_____.
|_|   |_||_|   |_| \_____/ |_|   \_\|_______||_|   \_||_______||_______||_______|
-->
			<meta content="initial-scale=1,width=device-width" name="viewport" />
			<link rel="shortcut icon" href="//www.tobymackenzie.com/favicon.ico" />
			<style><!--
				*{
					box-sizing: border-box;
					word-wrap: break-word;
					word-wrap: anywhere;
				}
				a{
					color: inherit;
					text-decoration-color: rgba(209, 255, 209, 0.5);
					transition: color 0.2s;
				}
				a:focus, a:hover{
					color: #90df90;
				}
				body, html{
					margin: 0;
					padding: 0;
				}
				body{
					background: rgba(78,120,78,0.95);
					min-height: 100%;
					opacity: 0.95;
					text-align: center;
					height: 100%;
				}
				.card{
					background: #353;
					border: 3px solid #002c00;
					box-shadow: inset 0 0 1em 0.5em #242;
					color: rgb(209, 255, 209);
					padding: 1em;
					min-height: 100%;
				}
				.cardCol1{
					text-align: center;
					margin-bottom: 1.5em;
				}
				* + .cardGroup, * + .cardItem{
					margin-top: 0.5em;
				}
				.cardImage{
					display: block;
					filter: contrast(1.5) saturate(0);
					/*mask-image: radial-gradient(ellipse at center, rgba(0,0,0,0) 20%, rgba(0,0,0,0.8) 100%);*/
					max-height: 100%;
					max-width: 100%;
					mix-blend-mode: soft-light;
					object-fit: cover;
					opacity: 0.8;
				}
				.cardItemEtc{
					display: inline-block;
				}
				.cardMedia:after, .cardMedia:before{
					content: '';
					position: absolute;
				}
				.cardMedia:after{
					background: url('/_toby.jpg') center center no-repeat;
					background-size: cover;
					height: 100%;
					left: 0;
					opacity: 0;
					top: 0;
					transition: opacity 0.5s;
					width: 100%;
				}
				.cardMedia:hover:after{
					opacity: 0.6;
				}
				.cardMedia:before{
					bottom: -1px;
					box-shadow: 0 0 8px 8px #353 inset;
					left: -1px;
					right: -1px;
					top: -1px;
					z-index: 1;
				}
				.cardLogo{
					color: #90df90;
					left: -1em;
					line-height: 1;
					opacity: 0.6;
					position: absolute;
					top: 0.3em;
					/*-# translate3d to fix blurry text while animating image in chrome */
					transform: rotate(-45deg) translate3d(0,0,0);
					transition: opacity 0.2s, transform 0.8s;
					z-index: 1;
				}
				.cardLogo:hover{
					opacity: 1;
					transform: rotate(1080deg) translate3d(0,0,0);
				}
				.cardMedia{
					display: inline-block;
					position: relative;
				}
				h1{
					border-bottom: 1px solid;
					color: #90df90;
					font-size: 1.5em;
					margin: 0;
					line-height: 1.1;
				}
				h1 span{
					/*--needed for first letter */
					display: inline-block;
				}
				h1 span:first-letter{
					color: #66ce66;
				}
				html{
					background-image: none, url("//www.tobymackenzie.com/_assets/grunge-pattern.png");
					font-family: meslo, "Meslo LG S", menlo, "Menlo Regular", cousine, Consolas, "Courier New", courier, monospace;
					height: 100%;
				}
				@media (min-width: 20em){
					.card{
						display: flex;
						justify-content: center;
						flex-direction: column;
					}
					.cardMedia{
						display: inline-flex;
						min-height: 8em;
						height: 50vh;
					}
				}
				@media (min-height: 500px), (min-width: 34em){
					.cardMedia{
						height: auto;
					}
				}
				@media (min-width: 34em){
					.card{
						align-items: center;
						flex-direction: row;
					}
					.cardImage{
						min-height: 10em;
						max-height: calc(100vh - 2.8em);
					}
					.cardCol1, .cardCol2{
						display: inline-block;
						text-align: left;
						vertical-align: middle;
					}
					.cardCol1{
						margin: 0 1.5em 0 0;
					}
				}
				@media (min-width: 34em) and (min-height: 24em){
					body{
						align-items: center;
						display: flex;
						justify-content: center;
						height: auto;
						min-height: 100%;
						padding: 0.5em; /*--ensure rotation doesn't cause scroll bars */
					}
					.card{
						align-items: flex-end;
						padding: 1.5em;
						transform: rotate(2deg);
						transition: transform 0.2s;
					}
					.card:hover, .card:focus-within{
						transform: rotate(0deg);
					}
					.cardCol1{
						align-self: stretch;
						width: auto;
					}
					.cardCol2{
						padding: 8px 0; /*--alignment for fuzzy image inset */
					}
					.cardLogo{
						font-size: 1.5em;
					}
					h1{
						font-size: 3em;
						width: 5.8em;
					}
					@supports (object-fit: cover){
						.cardMedia{
							height: 100%;
						}
					}
				}
			--></style>
		</head>
	<body>
		<div class="card" itemscope="itemscope" itemtype="http://schema.org/Person">
			<div class="cardCol1">
				<div class="cardMedia">
					<div class="cardLogo">&lt;toby&gt;</div>
					<img alt="Photo of Toby" class="cardImage" itemprop="image" src="/_toby.jpg" />
				</div>
			</div>
			<div class="cardCol2">
				<h1 class="cardItem" itemprop="name"><span itemprop="givenName">Toby</span> <span itemprop="familyName">Mackenzie</span></h1>
				<div class="cardGroup" itemprop="hasOccupation" itemscope="itemscope" itemtype="http://schema.org/Occupation">
					<div class="cardItem" itemprop="name">Web developer <small class="cardItemEtc">(Full-stack LAMP)</small></div>
					<small class="cardSkills cardItem" itemprop="skills">HTML CSS JS PHP MySQL Linux Apache</small>
				</div>
				<div class="cardItem" itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
					<span itemprop="addressLocality">Akron</span>,
					<span itemprop="addressRegion">Ohio</span>
				</div>
				<div class="cardItem"><a href="//www.tobymackenzie.com" itemprop="url">tobymackenzie.com</a></div>
				<div class="cardItem"><a href="mailto:public@tobymackenzie.com" itemprop="email">public@tobymackenzie.com</a></div>
			</div>
		</div>
<?php
$jsFile = __DIR__ . '/../../PublicApp/Resources/public/scripts/prod/short.js';
if(file_exists($jsFile)){
?>
		<script><!--
		<?=file_get_contents($jsFile)?>
		--></script>
<?php } ?>
	</body>
</html>
