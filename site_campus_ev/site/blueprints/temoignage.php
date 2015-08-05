<?php if(!defined('KIRBY')) exit ?>

title: Temoignage
pages: false
files: false
fields:
  title:
    label: Nom
    type: text
  poste:
    label: Poste
    type: text
    width: 1/2
  company: 
    label: Entreprise
    type: text
    width: 1/2
  video:
    label: Vidéo
    type: url
  service:
    label: Service ?
    type: select
    options: query
    query:
      page: services
    width: 1/2

  texte:
    label: Texte
    type: textarea