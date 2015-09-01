<?php if(!defined('KIRBY')) exit ?>

title: Événement
pages: false
files: false
fields:
  title:
    label: Titre
    type:  text
  category_service:
    label: Service
    type: select
    options: query
    query:
      page: services
  text:
    label: Texte
    type:  textarea
  date:
   	label: Date
   	type: date
  lieu:
  	label: Lieu
  	type: text
  link_name:
    label: Nom du lien
    type: text
  link:
  	label: lien
  	type: url
