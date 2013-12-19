<!DOCTYPE html>
<html>

  <head>
    <meta charset='utf-8' />
    <meta http-equiv="X-UA-Compatible" content="chrome=1" />
    <meta name="description" content="Drjoebell : " />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <title>About - MVC</title>
    </head>
    <p>
  MVC Signifie Modèle View Contrôleur,<br>
  C'est une méthode de developpement qui consiste à séparer différentes couches:
  <ul>
  	<li>Modèles: C'est là où sont les principales fonction de l'application</li>
  	<li>Intefaces(View - Vues): Tout ce qui concerne l'affichage des données</li>
  	<li>Controleur: Reçoit les données et les transmet au autres couches</li>
  </ul>
   </p>
   <img src="mvcsf9.jpg">
   <p>
<ul>
<li>1. le client fait une demande au contrôleur. Ce contrôleur voit passer toutes les demandes des clients. C'est la porte d'entrée de
l'application. C'est le C de MVC.</li>
<li>2. le contrôleur traite cette demande. Pour ce faire, il peut avoir besoin de l'aide de la couche métier, ce qu'on appelle le modèle M
dans la structure MVC.</li>
<li>3. le contrôleur reçoit une réponse de la couche métier. La demande du client a été traitée. Celle-ci peut appeler plusieurs réponses
possibles. Un exemple classique est
• une page d'erreurs si la demande n'a pu être traitée correctement
• une page de confirmation sinon</li>
<li>4. le contrôleur choisit la réponse (= vue) à envoyer au client. Celle-ci est le plus souvent une page contenant des éléments
dynamiques. Le contrôleur fournit ceux-ci à la vue.</li>
<li>5. la vue est envoyée au client. C'est le V de MVC.</li>
</ul>
Source: <a href="http://dico.developpez.com/html/3020-Conception-MVC-Model-View-Controller.php">Developpez.com</a>
</p>
   </html>
