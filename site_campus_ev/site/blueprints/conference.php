<?php if(!defined('KIRBY')) exit ?>

title: Conférence
pages: true
  template:
    - temoignage
files:
  sortable: true
fields:
  title:
    label: Courte déscription
    type:  text
  text:
    label: Courte déscription
    type:  text
  piliers:
    label: Pilier(s) (choix du / des piliers correspondant)
    type: text
  cible:
    label: Cible
    type: text
  objectifs:
    label: Objectifs
    type: text
  duree:
    label: Durée
    type: text
  why:
    label: Pourquoi cette conférence ?
    type: textarea
  video:
    label: video (url)
    type: url
  text:
    label: Texte
    type: textarea
