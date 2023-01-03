<?php

include("language.php");


echo '


<!DOCTYPE html>
<html>
<body>

<h1>'.Language::getLanguage([Language::ptBR => 'Esta página é uma Prova para trabalhar na LigaMagic', Language::enUS => 'This page is an Exam to work at LigaMagic', Language::esES => 'Esta página es una prueba para trabajar en LigaMagic']).'</h1>

<p>'.Language::getLanguage([Language::ptBR => 'Selecione Abaixo o Idioma que deseja utilizar do sistema.', Language::enUS => 'Select down below the language that you want to use on the system.', Language::esES => 'Seleccione a continuación el idioma que desea utilizar en el sistema.']).'</p>

<form action="index.php" method="get">
  <label for="idioma">'.Language::getLanguage([Language::ptBR => 'Idioma:', Language::enUS => 'Language:', Language::esES => 'Idioma']).'</label>
  <select name="selectedLanguage" id="selectedLanguage">
    <option value="pt_BR">'.Language::getLanguage([Language::ptBR => 'Português', Language::enUS => 'Portuguese:', Language::esES => 'Portugués']).'</option>
    <option value="en_US">'.Language::getLanguage([Language::ptBR => 'Inglês', Language::enUS => 'English', Language::esES => 'Inglés']).'</option>
    <option value="es_ES">'.Language::getLanguage([Language::ptBR => 'Espanhol', Language::enUS => 'Spanish', Language::esES => 'Español']).'</option>
  </select>
  <br><br>
  <input type="submit" value='.Language::getLanguage([Language::ptBR => "'Enviar Seleção'", Language::enUS => "'Send Selection'", Language::esES => "'Enviar Selección'"]).'>
</form>

<p>'.Language::getLanguage([Language::ptBR => 'Obrigado por realizar a Prova para trabalhar na LigaMagic.', Language::enUS => 'Thank you for taking the test to work at LigaMagic', Language::esES => 'Gracias por llevar el Trial a trabajar en LigaMagic.']).'</p>

<p>'.Language::getLanguage([Language::ptBR => 'Boa Sorte', Language::enUS => 'Good Luck', Language::esES => 'Buena Suerte']).'</p>

</body>
</html>

';


?>