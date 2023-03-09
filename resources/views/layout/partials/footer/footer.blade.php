
			<footer class="main-footer">
				<div class="blue-box contact-footer-section">
					<div class="container">
						<div class="content-center mx-0">
							<p class="m-0" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Concrétisons votre succès
								ensemble.</p>
							<p class="sub-title mt-0" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								Nous développons votre
								<span class="bold">plein potentiel numérique.</span>
							</p>
							<a href="{{Route('contact.create')}}" class="btn-core-white" data-aos="fade-up" data-aos-duration="650"
								data-aos-delay="250">Parlons-en</a>
						</div>
					</div>
				</div>
			
				<div class="footer-content">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="logo mb-3">
									<img src="{{asset('assets/img/digilife-logo.png')}}" alt="" class="cover" />
								</div>
								<div>2022 © DigiLife tous droits réservés.</div>
								<div>
									<a href="termes-et-conditions.html">Termes et conditions</a>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								<div class="mb-3">
									<span class="bold">Adresse :</span> N°14 Av. Nguma, Kintambo
									Magasin, Kinshasa. <br />Immeuble Workspace
								</div>
								<div class="">
									<span class="bold">Tel :</span>
									<a href="tel:+243828024589">+243828024589</a>
								</div>
								<div class="mb-3">
									<span class="bold">Mail :</span>
									<a href="mailto:+243828024589">infos@e-digitallife.com</a>
								</div>
							</div>
							<div class="col-6 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
								<div class="mb-2">
									<span class="bold">ID National :</span> 01-J6100-N946331T
								</div>
								<div class="mb-2">
									<span class="bold">RCCM :</span> CD/KNM/RCCM/21-A-02264
								</div>
								<div class="mb-2">
									<span class="bold">N° Impôts :</span> A2298028C
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-3 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="350">
								<p class="mt-0">
									Pour ne plus rien manquer de nos nouvelles, abonnez-vous
									avec votre adresse mail.
								</p>
								<form method="POST" action="{{Route('news-letter.store')}}">
									<div class="d-flex">
										<div class="n-input">
											<input type="text" name="email" placeholder="Email" class="input white" />
										</div>
										<div class="n-button">
											<button type="submit" class="btn-core">
												S'abonner
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</footer>