@extends('layout.master')
@section('contenu')
				<div class="core-banner">
					<img src="{{asset('assets/img/contact-bg-banner.png')}}" alt="" class="cover">
					<!-- <div class="section-center">
						<h1 class="title-big">Nous <span class="bold">contacter</span></h1>
					</div> -->

				</div>

				<div class="core-content">
					<h1 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
						<a class="blue" href="https://www.sababalar.com/">{{$realisation->titre}}</a>
					</h1>
					<div class="d-flex align-items-start mb-4">
						<div class="me-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
							<div class="small">Client situé à</div>
							<div><i class="bi-geo-alt me-2"></i>{{$realisation->pays}}</div>
						</div>
						<div class="" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
							<div class="small">Dans le secteur</div>
							<div><i class="bi-tags me-2"></i>{{$realisation->secteur}}</div>
						</div>
					</div>
					<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="200">
						{{$realisation->message}}.
					</p>
				</div>

				<section>
					<div class="container">
						<div class="content-center text-center">
							<h2 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Contexte.</h2>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								L'expérience utilisateur devait être sans friction pour les clients, tout en donnant aux gestionnaires une
								connectivité
								maximum avec tous les systèmes administratifs de gestion, tels que le système de comptabilité et de paiements, le
								système de calendriers, la collecte de données diverses sur les habitudes des membres etc.
							</p>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="row align-items-start">
							<div class="col-12 col-md-6 p-0">
								<div class="core-img">
									<img src="{{asset('assets/img/black-coder.jpg')}}" alt="" class="cover" />
								</div>
							</div>
							<div class="col-12 col-md-6 p-0">
								<div class="blue-box text-center">
									<h3 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
										Mandat.
									</h3>
									<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
										DigiLife a d'abord été mandatée pour développer un projet pilote lors de la création de CommonGrounds. Depuis, la solution
										ayant prouvé son impact, nous continuons à développer et à faire évoluer l'ensemble de l'écosystème, incluant les
										applications mobiles, au rythme d'une mise à jour par mois et ce, depuis plus de trois ans.
									</p>
									
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="content-center">
							<h2 class="title mb-5 bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Ce que nous avons fait.</h2>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								Réalisation de toutes les composantes de l'écosystème digital de CommonGrounds qui est depuis, devenu l'outil central
								pour toutes les interactions avec les clients. En utilisant l'application, le membre peut créer sa propre entreprise,
								souscrire à un contrat de location, gérer ses méthodes de paiement, accéder à sa facture, réserver des salles de
								conférence et interagir avec le responsable de la communauté locale, et ce, sur l'ensemble des sites du réseau qui sont
								répartis dans plusieurs états américains. L'application a été développée en utilisant les langage natifs Swift pour iOS
								et Kotlin pour Android afin de maximiser l'évolution du projet.
							</p>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								Afin de bien desservir tous les utilisateurs du système, autant les clients que l'équipe de gestion, le système intègre
								plusieurs éléments tels qu'une API qui permet la synchronisation en temps réel des calendriers en plus d'être connectée
								au système de comptabilité, une console de gestion administrative permettant de gérer la totalité des sites et toutes
								leurs composantes à partir du même endroit. Puisque l'application devient un élément clé de différenciation pour
								l'entreprise, l'expérience utilisateur représente un critère de conception et un objectif majeur, en particulier dans un
								contexte où celle-ci offre de nombreuses et complexes fonctionnalités.
							</p>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								Les applications sont disponibles sur l'App Store pour iOS et le Google Play Store pour Android et l'application Web
								ainsi que la console de gestion sont disponibles via le Web.
							</p>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-md-6 mb-4 mb-md-0">
								<div class="fs-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">De nombreux</div>
								<h2 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">Nouveaux clients.</h2>
								<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
									Plus de 90% de tous les paiements exécutés vers et par CommonGrounds sont présentement traités via le système
									propriétaire développé. Un grand nombre de nouveaux clients qui proviennent d'autres organisations de ce secteur,
									décrivent l'écosystème de CommonGrounds et son environnement mobile, comme une véritable évolution dans le domaine.
								</p>
							</div>
							<div class="col-12 col-md-6">
								<div class="img-core" data-aos="flip-right" data-aos-duration="650" data-aos-delay="150">
									<img src="{{asset('assets/img/academy-student-programmer-3.jpg')}}" alt="" class="cover bordered-15">
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="content-center">
							<h2 class="title text-center mb-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								D'autres projets qui font une <span class="bold">différence.</span>
							</h2>
						</div>

						<div class="row">
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">Saba ba lar</div>
									<div class="project-button">
										<a class="btn-core" href="realisation-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">Saba ba lar</div>
									<div class="project-button">
										<a class="btn-core" href="realisation-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">Saba ba lar</div>
									<div class="project-button">
										<a class="btn-core" href="realisation-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection