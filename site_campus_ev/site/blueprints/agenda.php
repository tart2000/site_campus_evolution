<?php if(!defined('KIRBY')) exit ?>

title: Agenda
pages: true
	template: 
		- evenement
		- formation
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea