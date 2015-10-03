<?php if(!defined('KIRBY')) exit ?>

title: Événement
pages: false
files: true
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
  start_time: 
    label: Heure de début
    type: time
    width: 1/2
  end_time: 
    label: Heure de fin
    type: time
    width: 1/2
  lieu:
  	label: Lieu
  	type: text
  link_name:
    label: Nom du lien
    type: text
    width: 1/2
  link:
    label: lien
    type: url
    width: 1/2
