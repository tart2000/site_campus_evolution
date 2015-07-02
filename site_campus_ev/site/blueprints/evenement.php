<?php if(!defined('KIRBY')) exit ?>

title: Événement
pages: false
files: false
fields:
  title:
    label: Titre
    type:  text
  category_conf:
    label: Conférence
    type: select
    options: query
    query:
      page: conferences
  category_form:
    label: Formation
    type: select
    options: query
    query:
      page: formations
  text:
    label: Text
    type:  textarea
  date:
   	label: Date
   	type: date
  lieu:
  	label: Lieu
  	type: text
  link:
  	label: lien
  	type: url
  info:
  	label: Infos
  	type: url
  inscription:
  	label: Inscription
  	type: url
