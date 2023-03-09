@extends('layout.master')
@section('contenu')
				<div class="core-banner">
					<img src="{{asset('assets/img/poste-bg-banner.jpg')}}" alt="" class="cover">
					<!-- <div class="section-center">
						<h1 class="title-big">Nous <span class="bold">contacter</span></h1>
					</div> -->

				</div>

				<div class="core-content">
					<div data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
						<h1 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">{{$carriere->poste}}</h1>
						<div class="d-flex align-items-start mb-4">
							<div class="me-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="75">
								<!-- <div class="small">Client situé à</div> -->
								<div><i class="bi-geo-alt me-2"></i>100% Hybride</div>
							</div>
							<div class="" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								<!-- <div class="small">Dans le secteur</div> -->
								<div><i class="bi-clock me-2"></i>Temps plein</div>
							</div>
						</div>
						<p>
							{{$carriere->detail1}}
						</p>
						<p>
							{{$carriere->detail2}}
						</p>
					</div>
				</div>

				<section class="">
					<div class="container">
						<div class="content-center">
							<h3 class="fs-1 bold">Plus spécifiquement, voici les défis qui t'attendent :</h3>
							<ul class="core-list mb-4">
								<li>Développer et améliorer des applications iOS natives</li>
								<li>Participer aux révisions de code avec l'équipe</li>
								<li>Développer et améliorer l'architecture technique des applications</li>
								<li>Publier les applications sur le « App Store »</li>
								<li>Surveiller les logs d'erreurs pour assurer une amélioration constante de la stabilité</li>
								<li>Collaborer avec le coordonnateur de projets pour introduire les nouvelles fonctionnalités requises</li>
								<li>Collaborer avec l'équipe de développement du « Back-end » pour s'assurer que les applications mobiles communiquent
								adéquatement avec les Web API</li>
								<li>Documenter les analyses techniques menant au code qui sera développé dans notre plateforme de gestion de la connaissance
								Confluence</li>
								<li>Tester et corriger d'éventuels bugs, afin de livrer des produits sans bugs à l'équipe d'assurance qualité</li>
							</ul>

							<h3 class="fs-1 bold">Tu es notre candidat idéal car…</h3>
							<ul class="core-list mb-4">
								<li>Tu comptes 4 années ou plus d'expérience en développement d'applications mobiles iOS natives</li>
								<li>Tu possèdes des connaissances des libraires iOS et des Web API</li>
								<li>Tu as des connaissances poussées du langage Swift</li>
								<li>Tu as des habiletés marquées en programmation orientée objet, et en intégration d'interfaces usagers</li>
								<li>Tu possèdes des connaissances des outils de développement : Git, CocoaPods, Xcode</li>
								<li>Tu maîtrises le français et l'anglais, tant à l'oral qu'à l'écrit</li>
							</ul>

							<h3 class="fs-1 bold">Ce qui te permettra de te démarquer du lot</h3>
							<ul class="core-list mb-4">
								<li>Diplôme en développement logiciel ou similaire</li>
								<li>Expérience de travail avec les passerelles de paiements (Payment gateways)</li>
								<li>Expérience en Agile</li>
								<li>Expérience avec le système de gestion de projet Jira</li>
								<li>Posséder des connaissances en ergonomie, navigation et expérience utilisateur</li>
								<li>Détenir une connaissance des outils de statistiques et de monitorage mobile et Web</li>
								<li>Expérience en développement de systèmes Back-End en lien avec des solutions mobiles</li>
							</ul>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<h2 class="title text-center mb-5">Ce que nous t'offrons en retour</h2>
						<div class="row">

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Horaires flexibles</h4>
									<p>
										Notre semaine à 37.5 heures t'offre un cadre flexible. Pour mieux collaborer, nos heures de disponibilités communes sont
										de 9h30 à 15h. On te fait confiance pour gérer le reste de ton temps.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Bureau ou maison</h4>
									<p>
										Entre les deux, ton coeur balance? Profite du confort de chez toi ainsi que du dynamisme de nos bureaux centralisés dans
										le Vieux-Longueuil. Tu pourras choisir selon ton envie du jour!
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Assurance collective</h4>
									<p>
										On veille au bien-être et à la santé de nos employés. C'est pourquoi on t'offre une gamme d'avantages dont une assurance
										collective, un compte santé et un programme d'aide aux employés.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Des leaders accessibles</h4>
									<p>
										On est une entreprise à échelle humaine, et nos leaders aussi. Ils sont à l'écoute des idées de l'équipe et laissent la
										place à l'innovation. Leur porte est toujours ouverte, même en télétravail!
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Journées maladie illimitées</h4>
									<p>
										On ne le souhaite pas, mais ça peut arriver à tout le monde de tomber malade. On t'offre de prendre le temps dont tu as
										besoin pour te remettre sur pied.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4">
								<div class="about-card">
									<h4 class="fs-2 bold">Un focus sur tes intérêts</h4>
									<p>
										On veut soutenir ta passion. On s'efforce de te donner des projets qui te font vibrer dans les spécialités techniques de
										ton choix. Tu auras l'opportunité de contribuer aux communautés de pratique avec tes collègues.
									</p>
								</div>
							</div>


						</div>
					</div>
				</section>
@endsection