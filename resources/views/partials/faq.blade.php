<style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
    body {
    font-family: "Montserrat", sans-serif;
    background-color: #34495e;
    color: #fff;
    }
    h1 {
    text-align: center;
    margin: 2rem 0;
    font-size: 2.5rem;
    }

    .accordion {
    width: 90%;
    max-width: 1000px;
    margin: 2rem auto;
    }
    .accordion-item {
    background-color: #fff;
    color: #111;
    margin: 1rem 0;
    border-radius: 0.5rem;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.25);
    }
    .accordion-item-header {
    padding: 0.5rem 3rem 0.5rem 1rem;
    min-height: 3.5rem;
    line-height: 1.25rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    position: relative;
    cursor: pointer;
    }
    .accordion-item-header::after {
    content: "\002B";
    font-size: 2rem;
    position: absolute;
    right: 1rem;
    }
    .accordion-item-header.active::after {
    content: "\2212";
    }
    .accordion-item-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    }
    .accordion-item-body-content {
    padding: 1rem;
    line-height: 1.5rem;
    border-top: 1px solid;
    border-image: linear-gradient(to right, transparent, #34495e, transparent) 1;
    }

    @media (max-width: 767px) {
    html {
        font-size: 14px;
    }
    }
</style>

<!-- MOBILE MENU -->
{{-- @include('layout.frontend.navebar') --}}
@extends('index')
@section('content')

<div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form action="" method="GET">
                        <div class="sf-type">
                            <div class="sf-input">
                                <input type="text" id="sf-box" name="q" placeholder="Rechercher">
                            </div>
                            <div class="sf-list">

                            </div>
                        </div>

                        <div class="sf-submit">
                            <input type="submit" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END HEADER SECTION-->
<h1>FOIRE AUX QUETIONS</h1>
<div class="accordion">
  <div class="accordion-item">
    <div class="accordion-item-header">
    PRESENTEZ-NOUS HIT-T
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <p>
        Présentation de HIT-T
HIT-TECHNOLOGY (HIT-T) SARL U est un cabinet spécialisé dans le développement des
applications web et mobiles. Il offre également des services tels que : Les formations en
Multimédia, Informatique et Télécommunications, l’installation des réseaux informatiques, la
maintenance informatique et réseau, la conception et la réalisation de sites web, la conception
et la réalisation des applications web et mobiles, l’électricité, le consulting dans le domaine de
mise en place des bases de données, des systèmes d’information, la sécurité réseau, pour ne
citer que ces points. Les formations sont offertes dans les filières tertiaires et technologiques.
Le cabinet est enregistré sous le décret n° 2012-008 / PR du 07-03-2012, Arrêté n° 011 /
MCPSP / CAB / DPSP du 13-04-2012.
Localisation actuelle: Non loin du Rond-point deux (2) Lions, en face du Bar Djiwonou
sur la voie d’Agbalépédogan, Lomé-Togo.
Organigramme:
HIT-T est dirigé à ce jour par une équipe de trois (3) personnes : Un DG, un DAF et une
Secrétaire.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    Objectifs et Vision
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Objectifs (Formation complète et renforcement de capacité)
Offrir une formation pratique en adéquation avec le marché de l’emploi togolais, vulgariser
les outils des TIC (usage d’ordinateurs portables et bureau), promouvoir la créativité auprès
des jeunes.
Vision
Aller vers les formations certifiantes en gestion de projet (PMC), programmation web et
mobile, en conception et administration des bases de données Oracle, MySQL, etc.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    POURQUOI APPRENDRE L’INFORMATIQUE ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
        <ul style="padding-left: 1rem;">

          <li>L’Informatique devient de plus en plus importante dans la vie quotidienne de l’Homme
moderne. En effet,
</li>
          <li>Elle constitue une science transversale,</li>
          <li>Elle permet de résoudre les problèmes quotidiens (utilisation de l’informatique dans
notre quotidien),
</li>
          <li>Elle sert de base pour le monde numérique,
</li>
          <li>Autonomie dans le monde numérique actuel,</li>
          <li>Etc.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    QUI PEUT S’INSCRIRE A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      1. En formation modulaire, le niveau minimum d’admission est le BEPC,
2. En formation à la carte, tous les niveaux de formation sont admis pour suivre nos
formations
En gros, jeune élève, étudiant ou professionnel en activité ou toute personne quel que soit son
niveau et domaine de formation peut s’inscrire à HIT-T.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    COMMENT S’INSCRIRE A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      La préinscription se fait en rempliçant le formulaire de préinscrption en ligne ou en se rendant
dans le centre de formation. Après la préinscription, l’apprenant est invité à valider son
inscription en présentiel suite à un échange avec un responsable de l’institution.
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    QUEL DIPLÔME EST DELIVRE A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      A ce jour, HIT-T délivre les certificats de formations professionnelles.
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    QUELLES SONT LES DIFFERENTES FILIERES DISPONIBLES A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Les formations à HIT-T se déclinent en deux filières à savoir :
        <li>
        -Filière Tertiaire : Secrétariat/Bureautique, Assistant (e) de direction, Aide Comptable,
Marketing et Communication, Commerce, etc.
        </li>
        <li>
        -Filière Technologique : Analyste programmeur, Conception et développement des Bases
de Données, Installation et maintenances informatiques et réseaux, outils de modélisation
des systèmes d’information et bases de données (MERISE 1 et 2, UML 1 et 2), Gestion
des projets informatiques (MS Project, …), multimédia, Electricité, etc.
        </li>
        A ces deux filières s’ajoute les formations à la carte ou en recyclage dans les options
suivantes :
        <li>
        Initiation informatique, réseaux sociaux et recherche internet, Office word, écrits
professionnels, Tenue de caisse et facturation, OMA et classement, multimédia (Infographie –
PhotoShop), Installation et maintenance informatique, câblage et maintenance réseau,
marketing digital, Algorithme et programmation, Bases de données, ergonomie et qualité en
entreprise, installation et maintenance téléphonique, négociation et contrats informatiques,
Gestion de projets avec MS Project, etc.
        </li>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    COMMENT S’INSCRIRE A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      La préinscription se fait en rempliçant le formulaire de préinscrption en ligne ou en se rendant
dans le centre de formation. Après la préinscription, l’apprenant est invité à valider son
inscription en présentiel suite à un échange avec un responsable de l’institution.
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    DOMAINES DE FORMATIONS
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Quatre (4) domaines de formations sont offerts à HIT-T à savoir :
        <li>
        SISG : Sciences Informatiques de Secrétariat et de Gestion couvre les formations en
secrétariat bureautique, Caisse, Comptabilité, Commerce, Marketing et communication, Force
de vente, etc.
        </li>
        <li>
        TRIT : Technologies de Réalisations Informatiques et Télécoms couvre les formations en
Informatique, Réseaux informatiques et Télécoms (Maintenance informatique et Télécoms,
Câblage réseaux, installation et maintenance téléphonique), le multimédia (Conception
bâches, affiches, logo, etc.), Marketing digital (Community management), etc.
        </li>
          <li>
          TREB : Technologies de Réalisations Electriques et Bâtiments couvre les formations dans les
domaines d’électricité bâtiment, Schémas bâtiment, Chaudronnerie, etc.
          </li>
          <li>
          TIA : Technologies et Intelligence Artificielle qui couvre les formations dans les options de
la BlockChain, crypto monnaies (monnaies électroniques), les échangeurs électroniques,
l’informatique et l’électronique embarquées (à l’avenir).

          </li>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <div class="accordion-item-header">
    QUELLE EST LA PARTICULARITE DE HIT-T PAR RAPPORT A D’AUTRES
ECOLES DE FORMATION ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Les particularités de HIT-T sont les suivantes :
      <li>
      Formations professionnelles, personnalisées et pratiques,
      </li>
      <li>
      Formations dispensées par des professionnels du terrain,
      </li>
      <li>
      Modules orientés informatiques et Télécoms (le numérique),
      </li>
      <li>
      Entreprenariat (pour les jeunes qui veulent entreprendre),
      </li>
      <li>
      Vulgarisation des outils TIC,
      </li>
      <li>
      Possibilités de stages de perfectionnement en formation modulaire.
      </li>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    QUELS SONT LES DEBOUCHES APRES UNE FORMATION A HIT-T ?

    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      DEBOUCHES de nos formations:
        <li>
        Filière Tertiaire (TRIT) : Secrétaire de bureau, Secrétaire Comptable, Agent marketing et
communication, cassier (ère), Community manager, rédacteur web / articles, etc.
        </li>
        <li>
        Filière Technologique (TRIT-TREB-TIA) : Analyste programmeur, Gestionnaire de projets
informatiques, technicien en maintenance informatique et réseau, technicien en installation
réseau, administrateur de bases de données, responsable des SI, responsable de
communication, commerce, Electricien, chaudronnier, etc
        </li>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    QUELLES LES OUVERURES POUR L’ENTREPRENEURIAT ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      <li>
      Ouverture de points de traitement d’images et montage vidéo (Studio numériques),
      </li>
      <li>
      Achat et dépannage de matériels informatiques du port et revente,
      </li>
      <li>
      Ouverture de points de traitement de texte,
      </li>
      <li>
      Etc.
      </li>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    COMMENT S’INSCRIRE A HIT-T ?
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      La préinscription se fait en rempliçant le formulaire de préinscrption en ligne ou en se rendant
dans le centre de formation. Après la préinscription, l’apprenant est invité à valider son
inscription en présentiel suite à un échange avec un responsable de l’institution.
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    NOS CONTACTS
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      Direction Générale : 97 31 77 52 (WhatsApp) / 90 47 51 03
Secrétariat : 96 54 52 54 / 93 75 18 42 (WhatsApp)
Fixe : 22 21 68 48
Web : www.hittechnologie.net, E-mail : formationfacile.hitt.tg@gmail.com,
Facebook: www.facebook.com/hittechnologieservices,
Boîte postale: 01 BP 1341 Lomé-Togo.
Les formations sont offertes en cours du jour et du soir avec des attestations délivrées à
la fin de chaque formation.
      </div>
    </div>
    </div><div class="accordion-item">
    <div class="accordion-item-header">
    Les services du groupe HIT-T
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      <table class="TableGrid" border="0" cellspacing="0" cellpadding="0" width="619" style="width:464.3pt;margin-left:-5.3pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.5pt 0cm 0cm">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">N° </b></p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.8pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Intitulé du
  service </b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.25pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Services
  informatiques et multimédia</b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:28.15pt">
  <td width="54" style="width:40.7pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:28.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:28.15pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Services de conception et de réalisation de
  solutions informatiques : Sites et applications web </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal"align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Services de conception et de réalisation des
  applications mobiles (Android et iOS) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’entretien de matériels informatiques
  et réseaux </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux de conception et d’imprimerie de bâches
  </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance informatique
  </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">6 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance des
  caméras de surveillance </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">7 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance de
  photocopieurs </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">8 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Mise en place des systèmes d’information (SI)
  : Bases de données </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10;height:14.45pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.45pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">9 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.45pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Administration de sites web </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">10 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Applications de gestion de caisse et stock </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.2pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Réseaux
  Informatiques Télécoms</b> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance des
  réseaux informatiques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance
  téléphonique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance des antennes
  paraboliques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16;height:14.95pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0cm 5.5pt 0cm 0cm;height:14.95pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.3pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Services
  d’expertise et RH</b> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Suivi-évaluation des projets </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Montage des offres de marchés publics pour les
  prestations intellectuelles </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Techniques de rédaction de projets </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:-35.45pt;text-align:left;text-indent:0cm;
  line-height:107%">
  </td>
 </tr>
 <tr style="mso-yfti-irow:21;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Recrutement et accompagnement </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.3pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Services connexes</b>
  </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:23;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Fourniture de matériel informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:24;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Fourniture de consommables informatiques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:25;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’électricité </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:26;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Travaux d’installation et de maintenance des
  climatiseurs </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:27;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conception et mise en place des enseignes lumineuses </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:28;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">6 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Multimédia (<span class="SpellE">Elaboration</span>
  des affiches publicitaires), montage des images et vidéo </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:29;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">7 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation de panneaux solaires </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:30;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">8 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation électrique bâtiment </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:31;height:20.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:20.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">9 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:20.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Traitement de texte, photocopie, impression </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:32;height:34.1pt">
  <td width="54" style="width:40.7pt;border:solid black 1.0pt;border-top:none;
  mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:34.1pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">10 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:34.1pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Mise en place des notes de cours dans les domaines de
  conception et réalisation des sites web <span class="GramE">et<span style="mso-spacerun:yes">&nbsp; </span>applications</span> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:33;mso-yfti-lastrow:yes;height:20.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:20.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">11 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:20.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Assistance à la rédaction de mémoires
  et de rapports de stage </p>
  </td>
 </tr>
</tbody></table>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <div class="accordion-item-header">
    Les offres de formations du groupe HIT-T
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
      DIFFERENTES FORMATIONS OFFERTES
      <li>
      Formations modulaires en filières tertiaires et technologiques,
      </li>
      <li>
      Formation en recyclage (à la carte),
      </li>
      <li>
      Formations « Vacances Utiles »,
      </li>
      <li>
      Formations « Congés de Noël et Pâcques ».
      </li>
      <table class="TableGrid" border="0" cellspacing="0" cellpadding="0" width="619" style="width:464.3pt;margin-left:-5.3pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.5pt 0cm 0cm">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">N° </b></p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.7pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">En modulaires
  (Formations certifiées) </b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#FABF8F;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Filières <span class="GramE">tertiaires:</span> Sciences Informatiques de Secrétariat
  et de Gestion (SISG)</b> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:14.45pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.45pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.45pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Secrétariat-Bureautique (SB) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Assistant de Direction (AD) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Aide-Comptable </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Secrétariat-Caisse </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Négociation et Relation Client (NRC) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">6 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion Commerciale (GEC) / Commerce (COM) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">7 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Marketing et Comptabilité </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">8 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Informatique de gestion (IG) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">9 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion des projets </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">10 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion Prévisionnelle des Emplois et
  Compétences (GPEC) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:12;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">11 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Piloter et mobiliser son équipe </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">12 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conduite de réunions </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">13 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-in</p>
  </td>dent:0cm;
  line-height:107%">Cohésion d’équipe et communication
 </tr>
 <tr style="mso-yfti-irow:14;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">14 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-in</p>
  </td>dent:0cm;
  line-height:107%">Encadrer et diriger : Parcours management
 </tr>
 <tr style="mso-yfti-irow:16;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">15 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion du temps </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">16 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Accueil des publics difficiles </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">17 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Recrutement </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">18 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">GRH </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">19 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Entrepreneuriat </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:21;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">20 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Chef de projets informatique et Télécoms </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">21 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Négociation, droit et contrats informatiques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:23;height:27.95pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#FABF8F;padding:0cm 5.5pt 0cm 0cm;height:27.95pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.25pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Filières
  technologiques : Technologies de Réalisations Informatiques et
  Télécoms </b></p>
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.3pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">(TRIT)</b> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:24;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conception et réalisation de sites web </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:25;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conception et réalisation des applications mobiles </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:26;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:27;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance des caméras de
  surveillance </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:28;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance des réseaux
  informatiques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:29;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">6 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance téléphonique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:30;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">7 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance des antennes paraboliques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:31;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">8<span style="mso-spacerun:yes">&nbsp; </span></p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance des imprimantes et
  photocopieurs </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:32;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">9 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Administration des bases de données MySQL, Oracle,
  SQL Server, etc. </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:33;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">10 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">SQL, PL/SQL et <span class="SpellE">Transact</span>-SQL </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:34;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">11 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conception et réalisation des SI avec MERISE </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:35;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">12 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Conception et réalisation des SI avec UML </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:36;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">13 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Génie informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:37;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">14 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Analyste programmeur </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:38;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">15 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Sécurité informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:39;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">16 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Algorithme et programmation </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:40;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">17 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Préparation à la certification Java </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:41;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">18 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Préparation à <span class="GramE">la<span style="mso-spacerun:yes">&nbsp; </span>certification</span> CCNA </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:42;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">19 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Multimédia : <span class="SpellE">PhotoShop</span>/<span class="SpellE">CorelDraw</span>/Illustrator (montage des images et
  vidéo) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:43;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#FABF8F;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:4.6pt;text-align:left;text-indent:0cm;
  line-height:107%"><span class="SpellE"><b style="mso-bidi-font-weight:normal">Electricité</b></span><b style="mso-bidi-font-weight:normal"> et Bâtiment : Technologies de
  Réalisations <span class="SpellE">Electriques</span> et Bâtiments
  (TREB) </b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:44;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%"><span class="SpellE">Electricité</span>-bâtiment
  </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:45;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Conception bâtiment </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:46;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">CAO-DAO : <span class="SpellE">ArchiCad-AutoCad</span> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:47;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Dimensionnement et câblage électrique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:48;mso-yfti-lastrow:yes;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:.15pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin:0cm;text-align:left;text-indent:
  0cm;line-height:107%">Etc. </p>
  </td>
 </tr>
</tbody></table>

<table class="TableGrid" border="0" cellspacing="0" cellpadding="0" width="619" style="width:464.3pt;margin-left:-5.3pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.5pt 0cm 0cm">
 <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">N° </b></p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.75pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">A la carte </b></p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:1;height:14.15pt">
  <td width="619" colspan="2" valign="top" style="width:464.3pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  background:#DBE5F1;padding:0cm 5.5pt 0cm 0cm;height:14.15pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.3pt;text-align:center;text-indent:0cm;
  line-height:107%"><b style="mso-bidi-font-weight:normal">Formations à
  la carte (Renforcement de capacité : Recyclage)</b> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:2;height:14.35pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">1 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.35pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Initiation informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:3;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">2 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Internet et réseaux sociaux </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:4;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">3 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Office Publisher - PowerPoint </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:5;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">4 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Office Word - Excel </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:6;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">5 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Office Access </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:7;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">6 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Office Outlook </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:8;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">7 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%"><span class="SpellE">Ecrits</span> professionnels </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:9;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">8 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Tenue de caisse et facturation </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:10;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">9 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation de système solaire </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">10 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation d’antennes paraboliques </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:11;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">11 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">PhotoShop / CorelDraw (Infographie) </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:13;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">12 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation de caméras de surveillance </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:14;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">13 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance informatique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:15;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">14 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Câblage et maintenance réseaux </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:16;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">15 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Algorithme et Programmation en C++ ou Java </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:17;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">16 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Bases de données MySQL </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:18;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">17 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Bases de données Oracle </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:19;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">18 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Bases de données SQL Server </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:20;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">19 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion de projets appliquée à Ms Project
  2016 </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:21;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">20 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Développement et administration de site web avec
  PHP, HTML, CSS </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:22;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">21 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Installation et maintenance téléphonique </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:23;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">22 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Santé, Hygiène et Sécurité au
  travail </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:24;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">23 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Système de climatisation automobile </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:25;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">24 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">L’électronique dans l’automobile </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:26;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">25 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Ergonomie et Qualité en entreprise </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:27;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">26 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">CAO / DAO : <span class="SpellE">ArchiCad</span> ou <span class="SpellE">AutoCad</span> </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:28;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">27 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Techniques d’animation et de communication sociale </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:29;height:14.3pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">28 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.3pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Gestion des projets sociaux </p>
  </td>
 </tr>
 <tr style="mso-yfti-irow:30;mso-yfti-lastrow:yes;height:14.4pt">
  <td width="54" valign="top" style="width:40.7pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="center" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.4pt;text-align:center;text-indent:0cm;
  line-height:107%">29 </p>
  </td>
  <td width="565" valign="top" style="width:423.6pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 5.5pt 0cm 0cm;height:14.4pt">
  <p class="MsoNormal" align="left" style="margin-top:0cm;margin-right:0cm;
  margin-bottom:0cm;margin-left:5.5pt;text-align:left;text-indent:0cm;
  line-height:107%">Suivi et évaluation des projets sociaux<span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span></p>
  </td>
 </tr>
</tbody></table>
      </div>
    </div>
    </div>
</div>

<script>
    const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeader = document.querySelector(
      ".accordion-item-header.active"
    );
    if (
      currentlyActiveAccordionItemHeader &&
      currentlyActiveAccordionItemHeader !== accordionItemHeader
    ) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});
</script>
@endsection
