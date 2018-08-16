@extends('layouts.app')
@section('css')

@endsection
@section('content')
<div class="layout-theme animated-css"  data-header="sticky" data-header-top="200">


    <!-- HEADER -->

    <div class="container">
        @include('include.header')
    </div><!-- end container-->


    <div class="section-title parallax-bg parallax-light">
        <ul class="bg-slideshow">
            <li>
                <div style="background-image:url(/media/bg/bg-title.jpg)" class="bg-slide"></div>
            </li>
        </ul>
        <div class="section__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ui-title-page">Demander une cotation</h1>
                        <div class="ui-subtitle-page">Get devis</div>
                        <div class="decor-2 decor-2_mod-a decor-2_mod_white"></div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section__inner -->
    </div><!-- end section-title -->

    <div class="section-bg_mod-b section_mod-a wow">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-first"><span
                                    class="ui-title-block__inner">Demander un devis</span></h2>

                        <form class="form-request form-request_mod-a ui-form block_right_pad" action="#" method="post">
                            <div class="row">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" placeholder="Full Name">
                                </div>
                                <div class="col-xs-12">
                                    <input class="form-control" type="email" placeholder="Email address">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Quel est votre besoin</h4>
                                    <div class="checkbox checkbox-inline">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="select-control">
                                        <select class="selectpicker">
                                            <option>Destinatin To....</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="select-control">
                                        <select class="selectpicker">
                                            <option>Logistics Type</option>
                                            <option>1</option>
                                            <option>2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" placeholder="Subject">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <textarea class="form-control" rows="11" placeholder="message"></textarea>
                                    <button class="ui-form__btn btn btn-sm btn_mod-a btn-effect"><span
                                                class="btn__inner">request quote</span></button>
                                </div>
                            </div>
                        </form>
                    </section>
                    <div class="decor-4 decor-4_mod-b"><i class="icon flaticon-logistics3 color-primary"></i></div>
                </div>

                <div class="col-md-6">
                    <section class="section-area">
                        <h2 class="ui-title-block ui-title-block_w_bg ui-title-block_w_bg-last ui-title-block_w_bg-primary">
                            <span class="ui-title-block__inner">FAQ generale </span></h2>

                        <div class="block_left_pad">
                            <div class="panel-group accordion" id="accordion-1">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-1"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">SMARTSOLUTION package starter</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Description du package <strong>starter</strong> de SMARTSOLUTION </p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>Site Vitrine</li>
                                                        <li>Logo et charte graphique</li>
                                                        <li>Catalogue ou galerie des produits et des services</li>
                                                        <li>Espaces photos/vid&eacute;os anim&eacute;s, pour communication et pub</li>
                                                        <li>Nombre maximum de pages web du site : <strong>05 pages</strong></li>
                                                        <li>Nombre maximum d&apos;adresses e-mails professionnelles  : <strong>02 Adresses</strong></li>
                                                        <li>Formulaire de contact en ligne</li>
                                                        <li>Dur&eacute;e de location du nom de domaine et h&eacute;bergement(1 an) exclu .cm </li>
                                                        <li>Possibilit&eacute; de partager les articles ou autres &eacute;l&eacute;ments souhait&eacute;s du site sur les pages
                                                            professionnelles des r&eacute;seaux
                                                            sociaux de l&apos;entreprise et sur les pages des internautes</li>
                                                        <li>Langue d&apos;utilisation : une seule</li>
                                                        <li>Robot d&apos;alerte SMS/e-mail int&eacute;gr&eacute;, en direction des internautes ou du personnel,
                                                            en fonction des &eacute;v&egrave;nements pouvant arriver sur le site web (&agrave; identifier)</li>
                                                        <li>Optimisation du r&eacute;f&eacute;rencement naturel du site</li>
                                                        <li>Espace d&apos;administration du site</li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>Quantit&eacute; de cr&eacute;dits SMS offert sur SMARTSMS :
                                                            <strong>150 SMS</strong></li>
                                                        <li>D&eacute;lai d&apos;utilisation du cr&eacute;dit SMS disponible :
                                                            <strong>01 mois</strong></li>
                                                        <li>Envoi des milliers de SMS au m&ecirc;me moment en quelques secondes &agrave; vos prospects ou vos clients</li>
                                                        <li>Possibilit&eacute; d&apos;envoi des SMS &agrave; partir de  Microsoft Excel ou depuis la plateforme web SMARTSMS</li>
                                                        <li>Accus&eacute; de r&eacute;ception ou suivi de livraison des SMS en tps r&eacute;el</li>
                                                        <li>Personnalisation des contenus de milliers de SMS par destinataire, automatiquement, en un seul et m&ecirc;me envoi</li>
                                                        <li>Programmer ou diff&eacute;rer automatiquement les envois de SMS pour plus tard </li>
                                                        <li>Personnaliser l&apos;exp&eacute;diteur du SMS en affichant le nom de votre entreprise </li>
                                                        <li>Votre site web envoi des SMS tout seul aux internautes ou aux clients selon vos objectifs via un robot int&eacute;gr&eacute; </li>
                                                        <li>Conception des nouvelles cartes par nos infographes</li>
                                                        <li>Int&eacute;gration de tous les nouveaux &eacute;l&eacute;ments de transformation digitale sur vos cartes</li>
                                                        <li>Prise en compte du logo et de la charte graphique </li>
                                                        <li>Nombre de cartes de visite offerts : <strong>100 cartes</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a class="btn-collapse" data-toggle="collapse" data-parent="#accordion-1"
                                           href="#collapse-2"><i class="icon"></i><span class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">SMARTSOLUTION package Medium</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-2" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>Tout d&apos;abord le package medium contient <strong>tous les &eacute;l&eacute;ments du package starter</strong> Ajouter a sa les &eacute;l&eacute;ments suivants :  </p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>Site de Service standard + vitrine </li>
                                                        <li>Nombre maximum de pages web du site : <strong>20 pages</strong> </li>
                                                        <li>Nombre maximum d&apos;adresses e-mails professionnelles :
                                                            <strong>05 Adresses</strong> </li>
                                                        <li>Langue d&apos;utilisation : <strong>02 langues</strong> </li>
                                                        <li>Compatible &agrave; l&apos;affichage mobile (sur Smartphone)</li>
                                                        <li>Outil de Chat en direct avec message automatique d&apos;accueil de
                                                            l&apos;internaute et alerte des administrateurs en temps r&eacute;el pour assistance </li>
                                                        <li>Newsletters par e-mail et SMS </li>
                                                        <li>Soumission des besoins en ligne </li>
                                                        <li>Demande de cotation en ligne</li>
                                                        <li>Remarques, plaintes, critiques et suggestions en ligne </li>
                                                        <li>Compteur de visites du site </li>
                                                        <li>Plan de localisation Google MAP </li>
                                                        <li>Plaquette de pr&eacute;sentation des produits et services de l&apos;entreprise, t&eacute;l&eacute;chargeable au
                                                            format PDF </li>
                                                        <li>Conception, impl&eacute;mentation et administration  des pages processionnelles de l&apos;entreprise sur les
                                                            r&eacute;seaux
                                                            sociaux, les mieux adapt&eacute;s &agrave; l&apos;activit&eacute; : <strong>02 Reseaux</strong> </li>
                                                        <li>Gestion des Partages </li>
                                                        <li>Gestion des Commentaires </li>
                                                        <li>Gestion des Animations</li>
                                                        <li>Ciblage d&apos;audience pour un nombre minimum de personnes afin de g&eacute;n&eacute;rer un max de leads
                                                            (suivant des crit&egrave;res pr&eacute;cis)
                                                            et ensuite pour conversion en prospect, puis en client :
                                                            <strong> 50. 000 personnes</strong> </li>
                                                        <li>Quantit&eacute; de cr&eacute;dits SMS offert sur SMARTSMS :
                                                            <strong>1000 SMS</strong></li>
                                                        <li>D&eacute;lai d&apos;utilisation du cr&eacute;dit SMS disponible :
                                                            <strong> 03 Mois</strong></li>
                                                        <li>Nombre de cartes de visite offerts  :
                                                            <strong> 200 cartes</strong></li>
                                                        <li>Porte-carte de visite offert</li>
                                                        <li>Nombre d&apos;ordinateurs du parc pour assistance informatique :
                                                            <strong>05 Ordinateus</strong></li>
                                                        <li>Nombre obligatoire d&apos;intervention mensuelle :
                                                            <strong>04 interventions</strong></li>
                                                        <li>Sauvegarde r&eacute;guli&egrave;re des donn&eacute;es  de l&apos;entreprise :
                                                            <strong>04 fois/mois</strong></li>
                                                        <li>Shooting photos/vid&eacute;os pour le site et les r&eacute;seaux sociaux</li>
                                                        <li>Pourcentage de r&eacute;duction sur le montant de votre facture</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-3"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">SMARTSOLUTION PACKAGE PROFESSIONAL</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>En plus des &eacute;l&eacute;ments du package pr&eacute;c&eacute;nt, nous pouvons y ajouter :</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>Site de Service professionnel</li>
                                                        <li>Nombre maximum de pages web du site : <strong> 	Illimit&eacute;</strong></li>
                                                        <li>Nombre maximum d&apos;adresses e-mails professionnelles
                                                            <strong> 	10 Adresses</strong></li>
                                                        <li>D&eacute;p&ocirc;t de candidature spontan&eacute;e et appel &agrave; candidature d&apos;emploi et de stage + triage ou gestion direct des
                                                            recrutements en ligne ; Pr&eacute;sentation des m&eacute;tiers disponibles dans l&apos;entreprise</li>
                                                        <li>D&eacute;p&ocirc;t d&apos;offres de services spontan&eacute;es et appel d&apos;offre pour recherche des prestataires + triage
                                                            ou traitement direct des offres en ligne </li>
                                                        <li>Conception d&apos;un ou plusieurs services en ligne sp&eacute;cialis&eacute;s, et bien adapt&eacute;s &agrave; l&apos;activit&eacute; avec possibilit&eacute; de paiement online</li>
                                                        <li>Robot d&apos;alerte SMS/e-mail concernant l&apos;ensemble des services disponibles  en ligne et de e-commerce,
                                                            avec pour but d&apos;optimiser la qualit&eacute; de la relation client et aussi d&apos;am&eacute;liorer la gestion interne</li>
                                                        <li>Blog ou forum de discussion</li>
                                                        <li>Plan du site</li>
                                                        <li>Ciblage d&apos;audience pour un nombre minimum de personnes afin de g&eacute;n&eacute;rer un max de leads
                                                            (suivant des crit&egrave;res pr&eacute;cis) et ensuite pour conversion en prospect, puis en client</li>
                                                        <li>Quantit&eacute; de cr&eacute;dits SMS offert sur SMARTSMS :
                                                            <strong>1500 SMS</strong></li>
                                                        <li>D&eacute;lai d&apos;utilisation du cr&eacute;dit SMS disponible :
                                                            <strong>illimit&eacute;</strong></li>
                                                        <li>Nombre d&apos;ordinateurs du parc pour assistance informatique :
                                                            <strong>parc complet</strong></li>
                                                        <li>Nombre d&apos;objectifs marketing/e-marketing pour accompagnement :
                                                            <strong>Ceux identifi&eacute;</strong></li>
                                                        <li>Shooting photos/vid&eacute;os pour le site et les r&eacute;seaux sociaux :
                                                            <strong>illimit&eacute;</strong></li>
                                                        <li>Pourcentage de r&eacute;duction sur le montant de votre facture :
                                                            <strong>4%</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->

                                <div class="panel">
                                    <div class="panel-heading">
                                        <a class="btn-collapse collapsed" data-toggle="collapse"
                                           data-parent="#accordion-1" href="#collapse-4"><i class="icon"></i><span
                                                    class="helper-2"></span></a>

                                        <h3 class="panel-title ui-title-inner">SMARTSOLUTION PACKAGE INTEGRALE</h3>

                                        <div class="decor-2 decor-2_mod-b"></div>
                                    </div>
                                    <div id="collapse-4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>En plus du package pr&eacute;c&eacute;dent</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <ul>
                                                        <li>Site E-commerce ou Service Marchand</li>
                                                        <li>Langue d&apos;utilisation : <strong>Au besoin</strong></li>
                                                        <li>Fonctionnalit&eacute;s de e-commerce &agrave; identifier : s&eacute;lection produits, panier, fiche produits, moyens de paiement, avis clients, produits favoris,
                                                            gestions des promotions, gestion des livraisons et d&eacute;lais, gestion des stocks, reporting, etc...</li>
                                                        <li>Programme de fid&eacute;lit&eacute; client</li>
                                                        <li>Programme de parrainage client</li>
                                                        <li>Espace de reporting et de pr&eacute;sentation des tableaux de bord concernant toutes les informations
                                                            de ventes de produits et services, entre autre</li>
                                                        <li>Pourcentage de r&eacute;duction sur le montant de votre facture :
                                                            <strong>5%</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end accordion -->
                            <div class="note text-center">If you didn&apos;t found the answer to your question here, Contact
                                us <br>& our representative will reply you as soon as poossible, usually within 24
                                hours!
                            </div>
                            <div class="decor-3 text-center"></div>
                            <div class="text-center"><a class="btn-link btn-link_lg" href="home.html">get in touch</a>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->

    <div class="section-area parallax-bg parallax-dark">
        @include('include.footer')
    </div><!-- end section-area -->

</div>
<!-- end layout-theme -->


@endsection
@section('js')
@endsection
