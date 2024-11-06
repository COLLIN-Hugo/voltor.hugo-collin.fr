<?php
get_header();
?>
<div class="home-container">
    <img class="hero-image" src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg" alt="Image d'accueil">
    <div class="hero-content">
        <h1 class="home-title">Bienvenue sur <span class="highlight"><br>Voltor</span></h1>
        <p class="home-description">Le plus grand tournoi <span class="highlight-blue">Rocket League</span> de France</p>
    </div>
</div>
<div class="content-section">
    <h1 class="title-contenu">Voltor</h1>
    <p class="text-contenu">Voltor est la <span style="color: #007bff;">plateforme officielle</span> de notre tournoi Rocket League, où passionnés et compétiteurs se retrouvent pour suivre les affrontements les plus intenses de la saison. Ici, chaque équipe peut briller, chaque match compte, et seul le meilleur atteindra le sommet !
    </p>
    <p class="text-contenu">Sur Voltor, vous trouverez :</p>
    <ul class="text-contenu">
        <li>Les équipes inscrites : Découvrez les profils, suivez les <span style="color: #007bff;">scores</span> et restez à jour sur les <span style="color: #007bff;">classements</span>.</li>
        <li>Les matchs : Tous les rendez-vous, horaires et résultats des rencontres en direct.</li>
        <li>Le tableau du tournoi : Suivez le parcours des équipes, des premiers rounds jusqu'à la grande finale.</li>
    </ul>
    <p class="text-contenu"><span style="color: #007bff;">Rejoignez-nous</span> sur Voltor et plongez dans l’action de ce <span style="color: #007bff;">tournoi</span> Rocket League, où le fair-play et la compétition font vibrer la communauté !</p>
</div>
<div class="button-container">
    <a href="<?php echo esc_url(get_permalink(get_page_by_path('inscription'))); ?>" class="standard-button">S'inscrire</a>
</div>
<div class="content-section">
    <h1 class="title-contenu">Les règles <br>sont simples !</h1>
    <ol class="text-contenu">
        <li>Pour participer <span style="color: #007bff;">inscrivez-vous</span> ou connectez-vous !</li>
        <li>Tournoi en <span style="color: #007bff;">3v3</span>, élimination directe. </li> 
        <li>Chaque équipe comporte 3 joueurs.</li> 
        <li>Matchs de <span style="color: #007bff;">5 minutes</span>, avec prolongation en cas d’égalité.</li> 
        <li>Les équipes doivent se présenter 10 minutes avant le début du match. </li> 
        <li>Tout comportement anti-sportif (insultes, triche) est interdit et sanctionné. </li>
        <li>Les participants doivent rejoindre notre <span style="color: #007bff;">serveur Discord</span> pour les annonces et les résultats. </li>
    </ol>
</div>
<?php
get_footer();
?>


