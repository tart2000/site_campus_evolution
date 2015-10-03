<?php if(!defined('KIRBY')) exit ?>

title: Services
pages: false
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
    type: checkboxes
    options: query
    query:
      page: offre
  cible:
    label: Cible
    type: text
  objectifs:
    label: Objectifs (séparés par des virgules)
    type: text
  duree:
    label: Durée
    type: text
  type:
    label : Quel type de service ?
    type: select
    options:
      formation: Formation
      conference: Conférence
    width: 1/2
  icon:
    label: Icone
    type: select
    options:
      user : User
      users : Users
      microphone : Microphone
    width: 1/2
  why:
    label: Pourquoi ce service ?
    type: textarea
  video:
    label: video (url)
    type: url
  text:
    label: Texte
    type: textarea

