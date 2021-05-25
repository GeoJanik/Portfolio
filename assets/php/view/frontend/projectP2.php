<?php $title = 'P1'; ?>
<?php ob_start(); ?>

<H1>PROJET IREKI</H1>

<div class="divImg">
    <img src="assets/public/img/P2.jpg" alt="P1">
</div>

<h2>Missions ! ireki</h2>
<p>Pour débuter chez nous, je souhaite que tu t’occupes de la refonte de notre site, qui n’a pas été mis à jour depuis plusieurs mois. <br>
<br>
Voici quelques informations dont tu auras besoin pour te lancer : <br>
<br>
le site doit tenir sur une page avec un menu qui reste visible, en haut de la page, même lorsque l'on se déplace dans la page ;
les différentes sections attendues sont :
un premier écran d'accueil de bienvenue, très visuel :
la liste des services offerts par l'agence ;
des exemples de projets déjà réalisés :
une carte avec un formulaire de contact (on ne vous demande pas de faire marcher le formulaire, juste de l'afficher).
Le site devra être réalisé en HTML et CSS (sans framework tel que Bootstrap). <br>
<br>
Par ailleurs, j’aimerais également que tu rédiges le texte de présentation de WebAgency. <br>
<br>


<h2>COMPTE RENDU DU JURY</h2>

Projet validé <br>
<br>
1. Évaluation globale du travail réalisé par l’étudiant  :
<br>
Le site de l’étudiant a été retravaillé pour correspondre au design de la maquette
La présentation orale a, elle aussi, été de nouveau préparée. Le projet respecte le cahier des charges, il est donc validé<div class="br"></div>
<br>
2. Évaluation des livrables selon les critères du projet :
<br>
Présents et conformes <br>
<br>
3. Évaluation de la présentation orale et sa conformité aux attentes : 
<br>
La présentation orale est dynamique et agréable à suivre. L’étudiant utilise son support de présentation pour montrer le code source du site, et il développe et justifie à l’oral ses choix. Le rôle d’un intégrateur est compris, et les difficultés rencontrées bien identifiées. <br> 
<br>
4. Évaluation des nouvelles compétences acquises par l'étudiant : 
<br>
Coder la présentation d'une page web en CSS : acquise
Définir le contenu d'une page web à partir d'une maquette : acquise
Présenter une réalisation de manière professionnelle : acquise
Gérer la responsivité avec les Media Queries :  acquise
Coder la structure d'une page web en HTML :  acquise
5. Points positifs :
<br>
Utilisation d'un support de présentation <br>
<br>
6. Axes d'amélioration :
<br>
Respecter plus précisément la maquette

<h3>UN COMMENTAIRE ? UN AVIS ? RIEN A DIRE ? FAIT LE SAVOIR JUSTE EN DESSOUS</h3>

<div class="formComment">
    <h2>Commentaires</h2>
    <form action="" method="post">
        <div>
            <label for="author">Auteur</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div> <br>
        <div>
            <button type="submit" class="btn btn-success">Envoyer</button>
        </div>
    </form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>