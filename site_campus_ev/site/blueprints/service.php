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
    type: select
    options: query
    query:
      page: offre
    width: 1/2
  cible:
    label: Cible
    type: text
  objectifs:
    label: Objectifs
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
  why:
    label: Pourquoi ce service ?
    type: textarea
  video:
    label: video (url)
    type: url
  text:
    label: Texte
    type: textarea
  icon:
    label: Icone
    type: select
    options:
      user : User
      users : Users
      microphone : Microphone
