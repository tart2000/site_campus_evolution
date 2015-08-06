<?php if(!defined('KIRBY')) exit ?>

title: Membre
pages: false
images: true
fields:
	title:
		label: Nom
		type: text
	prenom:
		label: Prénom
		type: text
	role:
		label: role
		type: text 
	site:
		label: Site
		type: url
	linkedin:
		label: Linkedin
		type: url
		width: 1/2
	facebook: 
		label: Facebook
		type: Url
		width: 1/2
	twitt: 
		label: Twitter
		type: Url
		width: 1/2
	text:
		label: Texte
		type: textarea