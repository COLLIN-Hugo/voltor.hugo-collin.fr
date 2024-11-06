<?php
/*
Template Name: Informations Légales
*/
get_header();
?>

<div class="legal-container">
    <h1 class="article-title"><?php the_title(); ?></h1>

    <div class="legal-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content(); // Contenu de la page "Informations légales" créée dans l'administration WordPress
            endwhile;
        else :
            echo '<p>' . __('Désolé, aucun contenu trouvé.', 'text-domain') . '</p>';
        endif;
        ?>
    </div>

    <section class="legal-section">
        <h2>Mentions Légales</h2>
        <p>En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site voltor.hugo-collin.fr l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi :</p>
        <ul>
            <li>Propriétaire : Voltor, SARL au capital de 15 000 €</li>
            <li>Numéro d’immatriculation : RCS Montbéliard 345 869 942</li>
            <li>N° SIRET de l’établissement : 504 565 466 000 85</li>
            <li>Créateurs : Hugo Collin</li>
            <li>Responsable publication : Hugo Collin</li>
            <li>Webmaster : Hugo Collin</li>
            <li>Hébergeur : Infomaniak
                <br>Adresse : Rue Eugène-Marziano 25,
                <br>1227, Les Acacias, Genève, Suisse
                <br>Téléphone : +41 22 820 35 44
                <br>Email : manager.infomaniak.com
            </li>
        </ul>
        <p>Tout litige relatif à l’utilisation du site voltor sera soumis exclusivement à l’instance judiciaire de la Cité Judiciaire de Montbéliard.</p>
        <p>Langue de référence : Français</p>
        <ul>
            <li>Tribunal compétent : Cité Judiciaire – Tribunal judiciaire de Montbéliard</li>
            <li>Adresse : Rue Wolfgang Amadeus Mozart, Montbéliard (25200), France</li>
            <li>Téléphone : 03 81 90 70 00</li>
            <li>Fax : 03 81 90 70 91</li>
            <li>Email : accueil-montbeliard@justice.fr</li>
        </ul>

        <h2>Cookies</h2>
        <p>Nous utilisons des cookies sur notre site pour améliorer votre expérience utilisateur. Les cookies sont de petits fichiers texte qui sont déposés sur votre appareil lors de la visite de notre site. Ils permettent de mémoriser vos préférences et d'analyser votre utilisation du site. En utilisant notre site, vous consentez à l'utilisation de ces cookies. Vous pouvez gérer vos préférences en matière de cookies à tout moment via les paramètres de votre navigateur.</p>

        <h2>Conditions Générales d’Utilisation (CGU)</h2>

        <h3>Article 1 : Objet</h3>
        <p>L’utilisation du site implique l’acceptation pleine et entière des conditions générales d’utilisation ci-après décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou complétées à tout moment, les utilisateurs du site sont donc invités à les consulter de manière régulière. Le site est mis à jour régulièrement par Hugo Collin. De la même façon, les mentions légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en prendre connaissance.</p>

        <h3>Article 2 : Acceptation des CGU</h3>
        <p>L’utilisation du site voltor.hugo-collin.fr implique l’acceptation pleine et entière des présentes CGU. L’utilisateur s’engage à respecter les présentes CGU ainsi que les lois et règlements en vigueur.</p>

        <h3>Article 3 : Modification des CGU</h3>
        <p>Voltor se réserve le droit de modifier les CGU à tout moment. Les modifications entreront en vigueur dès leur publication sur le site. L’utilisateur est invité à consulter régulièrement les CGU afin de prendre connaissance des modifications éventuelles.</p>

        <h3>Article 4 : Accès au site</h3>
        <p>Le site voltor.hugo-collin.fr est accessible à tout moment aux utilisateurs. Une interruption pour des raisons de maintenance technique peut être toutefois décidée par Voltor, qui s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.</p>

        <h3>Article 5 : Propriété Intellectuelle</h3>
        <p>Voltor est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment les textes, images, vidéos, logos, icônes et sons. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Voltor.</p>

        <h3>Article 6 : Responsabilité</h3>
        <p>Voltor s’efforce de fournir sur le site voltor.hugo-collin.fr des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des omissions, des inexactitudes ou des carences dans la mise à jour, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations.</p>

        <h3>Article 7 : Liens Hypertextes</h3>
        <p>Le site voltor.hugo-collin.fr peut contenir des liens hypertextes vers d’autres sites internet. Voltor ne dispose d’aucun contrôle sur ces sites et n’assume aucune responsabilité quant à leur contenu, accessibilité ou fonctionnement.</p>

        <h3>Article 8 : Droit Applicable et Juridiction Compétente</h3>
        <p>Les présentes CGU sont régies par le droit français. En cas de litige, seuls les tribunaux français seront compétents.</p>

        <h3>Article 9 : Contact</h3>
        <p>Pour toute question ou information relative aux présentes CGU, l’utilisateur peut contacter Voltor via l’adresse email disponible sur le site voltor.hugo-collin.fr.</p>

        <h2>Politique de Confidentialité</h2>
        <p>Nous nous engageons à protéger la vie privée de nos utilisateurs. Cette politique de confidentialité explique comment nous collectons, utilisons, stockons et partageons les informations que nous recueillons lors de votre utilisation de notre site web et de nos services.</p>

        <h3>Collecte d'Informations</h3>
        <p>En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978...</p>

        <h3>Utilisation des Informations</h3>
        <p>Nous utilisons les informations que nous recueillons pour fournir, maintenir et améliorer notre site...</p>

        <h3>Sécurité des Données</h3>
        <p>Nous avons mis en place des mesures de sécurité techniques et organisationnelles pour protéger vos données personnelles...</p>

        <h3>Modifications de la Politique de Confidentialité</h3>
        <p>Nous pouvons mettre à jour la politique de confidentialité. Nous vous recommandons de consulter régulièrement cette dernière...</p>

        <h3>Droits des Utilisateurs</h3>
        <p>Conformément à la réglementation en vigueur, les utilisateurs disposent des droits suivants :</p>
        <ul>
            <li>Accéder à leurs données personnelles</li>
            <li>Rectifier leurs données personnelles</li>
            <li>Demander l’effacement de leurs données personnelles</li>
            <li>Limiter le traitement de leurs données personnelles</li>
            <li>S’opposer au traitement de leurs données personnelles</li>
            <li>Définir des directives relatives au sort de leurs données personnelles après leur décès</li>
        </ul>
        <p>Pour exercer ces droits, envoyez un email à Voltor avec la mention du type de droit souhaité et la copie d’une pièce d’identité valide.</p>
    </section>
</div>

<?php
get_footer();
?>
