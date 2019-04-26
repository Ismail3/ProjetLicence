<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> VOITURE PLUS </title>
       <link rel="stylesheet" href="styles/index.css" media="screen" type="text/css" />
    </head>

    <body>

    <div id="market">
   <h1 id="maVoiture"> <center> VOITURE PLUS</center> </h1>
</div>
<!--le menu principal-->

<div id="menu">

  <ul id="onglets">

   
    <li class="active"><a href="acceuil.php"> Accueil </a></li>

    <li><a href="indexAM.php"> Recherche </a></li>

    <li><a href="offres.php"> Offres </a></li>

    <li><a href="publier.php"> Publier mon annonce </a></li>

    <li><a href="inscription.php"> S'inscrire </a></li>

    <li><a href="login.php"> Se connecter </a></li>

  </ul>

</div>


<!--un identifiant : id = market donc  si tu veux utiliser le #market du fichier CSS il faut aussi le mettre dans le fichier HTML-->


<fieldset>
  
  <legend>Proprietaire du véhicule</legend>

<label for="Proprietaire">Proprietaire</label>

        <select id="Proprietaire" name="Proprietaire">
        <option value="">Choisissez </option>
        <option value="Particulier">Particulier</option>
        <option value="Professionnel">Professionnel</option>
        </select><br>

</fieldset>


  
  <fieldset>  <!-- cadrage qui englobe les champs du formulaire-->
    <legend>Caractéristique du véhicule</legend>

      <label for="marque">Marque</label>
  <select name="marque">
                <option value="Choisissez">Choisissez</option>
                 <option value="Renault"> Renault</option>
                 <option value="Peugeot">Peugeot</option>
                 <option value="Citroen">Citroen</option>
                 <option value="Dacia">Dacia</option>
                 <option value="Mercedes">Mercedes</option>
                 <option value="Audi">Audi</option>
                 <option value="Voldswagen">Voldswagen</option>
                 <option value="Bmw">Bmw</option>
                 <option value="Opel">Opel</option>
                 <option value="Ford">Ford</option>
</select>

<label>Modèle</label>
                <input type="text" name="modele" required>

      <label for="Carburant">Carburant</label>

        <select id="Carburant" name="carburant">
        <option value="">Choisissez </option>
        <option value="Diesel">Diesel</option>
        <option value="Essence">Essence</option>
        </select><br>

                      
<label for="marque">Année</label> 

                <?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';
 
  // Parcours du tableau
  echo '<select name="annee">',"\n";
  for($i=1970; $i<=2030; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('Y'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?>

<br>


         <label>Kilométrage</label>
         <input type="text" name="kilometrage" required>

<label for="Boite à vitesse">Boite à vitesse</label>
        <select id="Boite à vitesse">
        <option value="">Choisissez </option>
        <option value="Manuelle" name="Boite à vitesse">Manuelle</option>
        <option value="Automatique" name="Boite à vitesse">Automatique</option>
        </select><br>

  </fieldset>

  <fieldset>

    <legend>Documents du véhicule</legend>
    
    <label for="Carte grise">Carte grise</label>
        <select id="Carte grise">
        <option value="">Choisissez </option>
        <option value="à jour" name="Carte grise">à jour</option>
        <option value="N'est pas à jour" name="Carte grise">N'est pas à jour</option>
        </select><br>
  
    
    <label for="Controle technique">Controle technique</label>
        <select id="Controle technique">
        <option value="">Choisissez </option>
        <option value="à jour" name="Controle technique">à jour</option>
        <option value="N'est pas à jour" name="Controle technique">N'est pas à jour</option>
        </select><br>
  
  </fieldset>

<fieldset>

    <legend>L'état mécanique du véhicule</legend>

<label for="kit_distribution">kit de distribution</label>
        <select id="kit_distribution">
        <option value="">Choisissez </option>
        <option value="En service" name="kit_distribution">En service</option>
        <option value="à prévoir" name="kit_distribution">à prévoir</option>
        </select><br>
 
  <label for="kit_embrayage">kit d'embrayage</label>
        <select id="kit_embrayage">
        <option value="">Choisissez </option>
        <option value="En service" name="kit_embrayage">En service</option>
        <option value="à prévoir" name="kit_embrayage">à prévoir</option>
        </select><br>

        <label for="volant_moteur">Volant moteur</label>
        <select id="volant_moteur">
        <option value="">Choisissez </option>
        <option value="En service" name="volant_moteur">En service</option>
        <option value="à prévoir" name="volant_moteur">à prévoir</option>
        </select><br>

        <label for="turbo">Turbo</label>
        <select id="turbo">
        <option value="">Choisissez </option>
        <option value="En service" name="turbo">En service</option>
        <option value="à prévoir" name="turbo">à prévoir</option>
        </select><br>

        <label for="plaquette_frein">Plaquettes de freins</label>
        <select id="plaquette_frein">
        <option value="">Choisissez </option>
        <option value="En service" name="plaquette_frein">En service</option>
        <option value="à prévoir" name="plaquette_frein">à prévoir</option>
        </select><br>

        <label for="vidange">Vidange</label>
        <select id="vidange">
        <option value="">Choisissez </option>
        <option value="En service" name="vidange">En service</option>
        <option value="à prévoir" name="vidange">à prévoir</option>
        </select><br>

        <label for="batterie">Batterie</label>
        <select id="batterie">
        <option value="">Choisissez </option>
        <option value="En service" name="batterie">En service</option>
        <option value="à prévoir" name="batterie">à prévoir</option>
        </select><br>

        <label for="filtre_air">Filtre à air</label>
        <select id="filtre_air">
        <option value="">Choisissez </option>
        <option value="En service" name="batterie">filtre_air</option>
        <option value="à prévoir" name="batterie">filtre_air</option>
        </select><br>

        <label for="filtre_air">Filtre à air</label>
        <select id="filtre_air">
        <option value="">Choisissez </option>
        <option value="En service" name="batterie">filtre_air</option>
        <option value="à prévoir" name="batterie">filtre_air</option>
        </select><br>






</fieldset>

  



  <!--LE BOUTON SUBMIT POUR VALIDER -->
  
  <p><input type="submit" value="Rechercher"></p>
</form>

    </body>
</html>