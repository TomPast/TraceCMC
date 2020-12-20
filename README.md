# Trace Forum CMC

Ce projet a été réalisé par  **Manuel Jehanno, Maxime Bizeray et Tom Pastor**. L'objectif du projet est de créer un moteur de calcul d'indicateurs et de visualiser 2 indicateurs.


## Live Demo

Une live démo est accessible ici : [https://www.tompastor.fr/TraceCMC/](https://www.tompastor.fr/TraceCMC/)

## Fonctionnement
Nous avons créé deux moulinettes qui vont créer deux fichiers JSON, l'un pour la motivation et l'autre pour les relations. Ces deux moulinettes vont faire des requêtes SQL vers la base de données pour créer des fichiers JSON.
L'interet de ces deux moulinettes est que nous avons à les lancer une seule fois pour transformer les données. Il faudra simplement relancer les deux moulinettes lorsque l'on souhaitera mettre à jour les données.
Ensuite nous avons créé un site permettant de visualiser le contenu de ces fichiers JSON sous la forme de graphiques et de tableaux (index.php)

## Mode d'emploi
1. Modifier le fichier connect.php avec vos informations de connexion à votre base de données
2. Importer le fichier traceforum.sql dans votre base de données
3. FACULTATIF (l'opération a déja été éffectuée, vous pouvez la refaire pour actualiser les données) : Lancer la moulinetteMotivation.php qui va créer un fichier JSON avec les résultats du moteur : resultMotivation.json
4. FACULTATIF (l'opération a déja été éffectuée, vous pouvez la refaire pour actualiser les données) : Lancer la moulinetteRelation.php qui va créer un fichier JSON avec les résultats du moteur : resultRelation.json, attention l'exécution de la moulinette peut prendre jusqu'à 2 minutes
5. Lancer la page index.php pour visualiser les indicateurs