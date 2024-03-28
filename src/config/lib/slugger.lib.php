<?php

function slug($string) {
  // Convertir en minuscules
  $string = strtolower($string);

  // Remplacer les caractères spéciaux par des tirets
  $string = preg_replace('/[^a-z0-9-]/', '-', $string);

  // Supprimer les tirets multiples
  $string = preg_replace('/-+/', '-', $string);

  // Supprimer les tirets des extrémités
  $string = trim($string, '-');

  return $string;
}