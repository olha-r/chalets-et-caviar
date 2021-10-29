## **Projet 2 de la formation Développeur d'application - PHP / Symfony - Openclassrooms**

## **Intégrez un thème Wordpress pour un client**

URL du site : [http://chalets-caviar-courchevel.online/](http://chalets-caviar-courchevel.online/)

### **Descriptif du besoin**

L’agence immobilière “Chalets et caviar” de Courchevel possède une quinzaine de chalets de luxe à la vente et une vingtaine en location.

Cependant, elle ne possède pas encore de site web pour promouvoir la vente et la location de ses chalets. C’est pour cette raison qu’elle fait appel à vous.

Lors d’une première réunion, vous rencontrez Marie, la directrice de l’agence.  Voici l’échange de mails que vous recevez suite à cette réunion.

`<table>
<tbody>
<tr>
<td>
<p><strong>De : Marie D.</strong></p>
<p><strong>À : Moi</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Bonjour,</p>
<p>Je suis ravie de savoir que le projet te plaise. Comme nous en avons discuté, je souhaite créer un site web pour notre agence “Chalets et caviar”. J’aimerais que mon équipe et moi puissions mettre à jour le site régulièrement, sans passer par un prestataire.</p>
<p>As-tu une recommandation à me faire pour que les mises à jour soient le plus simple possible ?</p>
<p>Cordialement,&nbsp;</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : moi</strong></p>
<p><strong>À : Marie</strong></p>
<p>------------------------------------------------------------------------------------------------------</p>
<p>Bonjour Marie,</p>
<p>Pour que vous puissiez mettre à jour votre site facilement, sans passer par un prestataire externe, je vous recommande un site Wordpress.</p>
<p>Peux-tu me donner plus de détails sur le design du site que tu recherches ? Cela me permettra de te proposer le thème Wordpress le plus adapté à tes besoins.</p>
<p>Merci.</p>
<p>-------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Marie&nbsp;</strong></p>
<p><strong>À : Moi</strong></p>
<p>-------------------------------------------------------------------------------------------------------</p>
<p>Bonjour,</p>
<p>Je souhaite un design clair et épuré, qui montre la ligne luxe de l’agence. J’aimerais que tu me présentes la première version en ligne du site avec les éléments suivants :&nbsp;</p>
<ul>
<li>une section avec 5 chalets à louer ;</li>
<li>une section avec 5 chalets à vendre ;</li>
<li>une page de contact avec les coordonnées de l’agence et un formulaire de contact fonctionnel.</li>
</ul>
<p>&nbsp;</p>
<p>Pour que ce soit plus facile pour nous de collaborer sur les différentes offres, pourras-tu t’assurer de bien utiliser des catégories séparées pour que chacun retrouve ses petits ?</p>
<p>Tu trouveras en pièce jointe un dossier contenant les <a href="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/P2_Prep_fullstack/Visuels+chalets-20190627T080943Z-001+(1).zip">visuels</a> de nos chalets ainsi qu’un <a href="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/P2_Prep_fullstack/Pre%CC%81sentation+des+chalets.pdf">document</a> avec leurs caractéristiques.</p>
<p>&nbsp;</p>
<p>Merci,&nbsp;</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Moi</strong></p>
<p><strong>À : Marie Dubois</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Bonjour Marie,</p>
<p>Merci, j’ai bien pris en note toutes les informations. Je te préparerai un document présentant le thème wordpress et montrant que cela correspond bien à tes attentes en termes de design.</p>
<p>Y a-t-il d’autres éléments que je dois prendre en compte pour la création du site ?</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Marie&nbsp;</strong></p>
<p><strong>À : Moi</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Oui, tout d'abord, il faut que l'ont puisse éditer plusieurs articles en même temps pour faciliter la mise à jour du site par l’équipe (ajout, suppression et modification de chalets). De plus, pourrais-tu ajouter des droits d’administrateur selon les règles suivantes :&nbsp;</p>
<ul>
<li>un compte administrateur pour la directrice de l'agence ;</li>
<li>un compte administrateur pour le développeur (toi) s'il n'existe pas déjà ;</li>
<li>des comptes éditeurs pour les 2 autres collaborateurs de l'agence ?</li>
</ul>
<p>Pourrais-tu également me fournir un document contenant les instructions de mise à jour ? 3 à 5 pages devraient suffire. N’oublie pas qu’on ne connaît rien au développement, donc je veux bien toutes les étapes détaillées, si possible avec des captures d’écran !</p>
<br>
<p>Merci,</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
</td>
</tr>
</tbody>
</table>`

`<table>
<tbody>
<tr>
<td>
<p><strong>De : Marie D.</strong></p>
<p><strong>À : Moi</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Bonjour,</p>
<p>Je suis ravie de savoir que le projet te plaise. Comme nous en avons discuté, je souhaite créer un site web pour notre agence “Chalets et caviar”. J’aimerais que mon équipe et moi puissions mettre à jour le site régulièrement, sans passer par un prestataire.</p>
<p>As-tu une recommandation à me faire pour que les mises à jour soient le plus simple possible ?</p>
<p>Cordialement,&nbsp;</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : moi</strong></p>
<p><strong>À : Marie</strong></p>
<p>------------------------------------------------------------------------------------------------------</p>
<p>Bonjour Marie,</p>
<p>Pour que vous puissiez mettre à jour votre site facilement, sans passer par un prestataire externe, je vous recommande un site Wordpress.</p>
<p>Peux-tu me donner plus de détails sur le design du site que tu recherches ? Cela me permettra de te proposer le thème Wordpress le plus adapté à tes besoins.</p>
<p>Merci.</p>
<p>-------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Marie&nbsp;</strong></p>
<p><strong>À : Moi</strong></p>
<p>-------------------------------------------------------------------------------------------------------</p>
<p>Bonjour,</p>
<p>Je souhaite un design clair et épuré, qui montre la ligne luxe de l’agence. J’aimerais que tu me présentes la première version en ligne du site avec les éléments suivants :&nbsp;</p>
<ul>
<li>une section avec 5 chalets à louer ;</li>
<li>une section avec 5 chalets à vendre ;</li>
<li>une page de contact avec les coordonnées de l’agence et un formulaire de contact fonctionnel.</li>
</ul>
<p>&nbsp;</p>
<p>Pour que ce soit plus facile pour nous de collaborer sur les différentes offres, pourras-tu t’assurer de bien utiliser des catégories séparées pour que chacun retrouve ses petits ?</p>
<p>Tu trouveras en pièce jointe un dossier contenant les <a href="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/P2_Prep_fullstack/Visuels+chalets-20190627T080943Z-001+(1).zip">visuels</a> de nos chalets ainsi qu’un <a href="https://s3-eu-west-1.amazonaws.com/course.oc-static.com/projects/P2_Prep_fullstack/Pre%CC%81sentation+des+chalets.pdf">document</a> avec leurs caractéristiques.</p>
<p>&nbsp;</p>
<p>Merci,&nbsp;</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Moi</strong></p>
<p><strong>À : Marie Dubois</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Bonjour Marie,</p>
<p>Merci, j’ai bien pris en note toutes les informations. Je te préparerai un document présentant le thème wordpress et montrant que cela correspond bien à tes attentes en termes de design.</p>
<p>Y a-t-il d’autres éléments que je dois prendre en compte pour la création du site ?</p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p><strong>De : Marie&nbsp;</strong></p>
<p><strong>À : Moi</strong></p>
<p>--------------------------------------------------------------------------------------------------------</p>
<p>Oui, tout d'abord, il faut que l'ont puisse éditer plusieurs articles en même temps pour faciliter la mise à jour du site par l’équipe (ajout, suppression et modification de chalets). De plus, pourrais-tu ajouter des droits d’administrateur selon les règles suivantes :&nbsp;</p>
<ul>
<li>un compte administrateur pour la directrice de l'agence ;</li>
<li>un compte administrateur pour le développeur (toi) s'il n'existe pas déjà ;</li>
<li>des comptes éditeurs pour les 2 autres collaborateurs de l'agence ?</li>
</ul>
<p>Pourrais-tu également me fournir un document contenant les instructions de mise à jour ? 3 à 5 pages devraient suffire. N’oublie pas qu’on ne connaît rien au développement, donc je veux bien toutes les étapes détaillées, si possible avec des captures d’écran !</p>
<br>
<p>Merci,</p>
<p>Marie Dubois</p>
<p>Directrice de l’agence Chalets et caviar</p>
</td>
</tr>
</tbody>
</table>`

De : Marie D.

À : Moi

--------------------------------------------------------------------------------------------------------

Bonjour,

Je suis ravie de savoir que le projet te plaise. Comme nous en avons discuté, je souhaite créer un site web pour notre agence “Chalets et caviar”. J’aimerais que mon équipe et moi puissions mettre à jour le site régulièrement, sans passer par un prestataire.

As-tu une recommandation à me faire pour que les mises à jour soient le plus simple possible ?

Cordialement,

Marie Dubois

Directrice de l’agence Chalets et caviar

--------------------------------------------------------------------------------------------------------

De : moi

À : Marie

------------------------------------------------------------------------------------------------------

Bonjour Marie,

Pour que vous puissiez mettre à jour votre site facilement, sans passer par un prestataire externe, je vous recommande un site Wordpress.

Peux-tu me donner plus de détails sur le design du site que tu recherches ? Cela me permettra de te proposer le thème Wordpress le plus adapté à tes besoins.

Merci.

-------------------------------------------------------------------------------------------------------

De : Marie

À : Moi

-------------------------------------------------------------------------------------------------------

Bonjour,

Je souhaite un design clair et épuré, qui montre la ligne luxe de l’agence. J’aimerais que tu me présentes la première version en ligne du site avec les éléments suivants :

une section avec 5 chalets à louer ;
une section avec 5 chalets à vendre ;
une page de contact avec les coordonnées de l’agence et un formulaire de contact fonctionnel.


Pour que ce soit plus facile pour nous de collaborer sur les différentes offres, pourras-tu t’assurer de bien utiliser des catégories séparées pour que chacun retrouve ses petits ?

Tu trouveras en pièce jointe un dossier contenant les visuels de nos chalets ainsi qu’un document avec leurs caractéristiques.



Merci,

Marie Dubois

Directrice de l’agence Chalets et caviar

--------------------------------------------------------------------------------------------------------

De : Moi

À : Marie Dubois

--------------------------------------------------------------------------------------------------------

Bonjour Marie,

Merci, j’ai bien pris en note toutes les informations. Je te préparerai un document présentant le thème wordpress et montrant que cela correspond bien à tes attentes en termes de design.

Y a-t-il d’autres éléments que je dois prendre en compte pour la création du site ?

--------------------------------------------------------------------------------------------------------

De : Marie

À : Moi

--------------------------------------------------------------------------------------------------------

Oui, tout d'abord, il faut que l'ont puisse éditer plusieurs articles en même temps pour faciliter la mise à jour du site par l’équipe (ajout, suppression et modification de chalets). De plus, pourrais-tu ajouter des droits d’administrateur selon les règles suivantes :

un compte administrateur pour la directrice de l'agence ;
un compte administrateur pour le développeur (toi) s'il n'existe pas déjà ;
des comptes éditeurs pour les 2 autres collaborateurs de l'agence ?
Pourrais-tu également me fournir un document contenant les instructions de mise à jour ? 3 à 5 pages devraient suffire. N’oublie pas qu’on ne connaît rien au développement, donc je veux bien toutes les étapes détaillées, si possible avec des captures d’écran !


Merci,

Marie Dubois

Directrice de l’agence Chalets et caviar

### **Livrables**

- le **code** HTML / CSS / PHP complet du site web Wordpress ;
- l’**URL** du site hébergé en ligne ;
- la **documentation** PDF d'utilisation du site Wordpress pour l'agence ;
- un fichier présentant le **thème choisi** et expliquant pourquoi il a été choisi.



