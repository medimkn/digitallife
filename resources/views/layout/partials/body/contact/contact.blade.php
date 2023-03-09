@extends('layout.master')
@section('contenu')
          <div class="core-banner">
						<img src="{{asset('assets/img/contact-bg-banner.png')}}" alt="" class="cover">
            <div class="section-center">
							<h1 class="title-big" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
                Nous <span class="bold">contacter</span>
              </h1>
						</div>

          </div>

					<div class="contact-form">
						<form action="{{Route('contact.store')}}" method="POST">
						 @csrf
							<h2 class= "fs-1 text-center mb-5">Nous voulons <span class="bold">vous connaître<span class="blue">.</span></span></h2>
							<div class="mb-3">
								<label for="names">Nom et prenom (*)</label>
								<input type="text"  id="name" class="input" name ="nom">
							</div>
							<div class="mb-3">
								<label for="email">Courriel (*)</label>
								<input type="email"  id="email" class="input" name ="courriel">
							</div>
							<div class="mb-3">
								<label for="entreprise">Entreprise</label>
								<input type="text"  id="entreprise" class="input" name ="entreprise">
							</div>
							<div class="mb-3">
								<label for="telephone">Telephone</label>
								<input type="tel"  id="telephone" class="input" name ="telephone">
							</div>
							<div class="mb-3">
								<label for="message">Comment pouvons-nous vous aider ? (*)</label>
								<textarea  id="message" rows="3" class="input" name ="aide"></textarea>
							</div>
							<div class="">
								<button class="btn-core" type="submit">Envoyer votre message</button>
							</div>
						</form>
						<div class="text-center">
							<h3 class="fs-3" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
                <i class="bi bi-geo-alt-fill blue"></i> Nos coordonnées
              </h3>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								N°14 Av. Nguma, Kintambo Magasin, Kinshasa. <br />Immeuble
								Workspace
							</p>
						</div>
					</div>
@endsection