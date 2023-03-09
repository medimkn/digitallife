@extends('layout.master')
@section('contenu')
				<div class="banner banner-digilife short">
					<div class="container">
						<div class="content-center text-center">
							<h1 class="title bold" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Nos réalisations voient loin.</h1>
							<p class="fs-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								Ces organisations nous font confiance pour mener à terme leurs projets de création de produits et d'écosystème
								numérique.
							</p>
						</div>

						<div class="animated-arrow center-forced">
							<a href="#realisations" class="">
								<img src="{{asset('assets/img/svg/arrow-down-icon.svg')}}" alt="" loading="lazy" />
							</a>
						</div>
					</div>
				</div>

				<section class="section" id="realisations">
					<div class="container">
						<div class="row">
						 @foreach ($realisations as $realisation)	
							<div class="col-12 col-sm-6 col-md-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{ asset('assets/img/'.$realisation->image) }}" alt="" class="cover" />
									<div class="project-title">{{$realisation->titre}}</div>
									<div class="project-button">
										<a class="btn-core" href="/realisation-detail/{{$realisation->id}}">Voir détails</a>
									</div>
								</div>
							</div>
						 @endforeach
						</div>
					</div>
				</section>
@endsection