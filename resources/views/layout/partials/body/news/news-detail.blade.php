@extends('layout.master')
@section('contenu')
				<section class="section">
					<div class="container">
						<div class="content-center" data-aos="fade-down" data-aos-duration="650" data-aos-delay="50">
							<div class="core-img mb-5">
								<img src="{{asset('assets/img/life-illustration-12-m-2x.jpg')}}" alt="" class="cover bordered-20">
							</div>
				
							<h1 class="title">DigiLife a un nouvel habit pour son site web.</h1>
							<div class="d-flex mb-5">
								<div class="me-5"><i class="bi-clock-history me-2"></i>Il y a 2 heure</div>
								<div><i class="bi-person me-2"></i>Caleb Muyombo</div>
							</div>

							<div class="news-content">
								<p>
									Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repellendus ut eligendi temporibus maxime fugit explicabo atque natus optio perferendis. Illo hic minima veniam officia magni nam laborum odio fugit! Quidem sequi neque, ad porro consectetur hic provident aperiam et facilis ea itaque voluptatum similique eum distinctio tenetur rerum quae!
								</p>
								<p>
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum odit eaque eius porro. Corporis, non. Natus magni dolor placeat dolorum est cum recusandae ipsam quas omnis quae at voluptatum dicta, dolorem quisquam consequuntur eius fugiat ut nulla neque tempora eaque officiis iusto sed nesciunt. Dolorem ratione, repellat corrupti libero architecto nam doloremque deserunt iste in quis atque mollitia dicta unde? Dolores praesentium expedita omnis, voluptas impedit quia rem. Beatae obcaecati ab natus amet alias perferendis nostrum blanditiis totam, ea harum ut consequatur consequuntur, ipsum repellat iste! Incidunt est sint perferendis, beatae voluptatibus corrupti quod rem facere quis impedit vitae consequuntur.

								</p>
								<p>
									Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati at ab odio tempore possimus eum ad eaque totam amet! Eius recusandae non perspiciatis deserunt officiis suscipit voluptatem odit amet veniam. Corrupti, a dolorum odit temporibus tempora ab obcaecati provident, tenetur veniam quam aspernatur, nemo laboriosam culpa sunt odio error deleniti.
								</p>
							</div>

							<div class="news-footer">
								<div class="d-flex">
									<div class="me-4">Ce contenu vous a-t-il plu ?</div>
									<div>
										<!-- once the use click on the thumbs up link, just add the class 'bi-hand-thumbs-up-fill' -->
										<a href="#" class="me-2 bi-hand-thumbs-up d-inline-block" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50"></a>
										<a href="#" class="me-2 bi-hand-thumbs-down d-inline-block" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<h2 class="title text-center mb-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
							D'autres nouvelles <span class="bold">intéressantes.</span>
						</h2>
						<div class="row">
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">
										<div>DigiLife a un nouvel habit pour son site web.</div>
										<div class="project-time">
											<i class="bi bi-clock"></i> Il y 2 jours
										</div>
									</div>
									<div class="project-button">
										<a class="btn-core" href="news-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">
										<div>DigiLife a un nouvel habit pour son site web.</div>
										<div class="project-time">
											<i class="bi bi-clock"></i> Il y 2 jours
										</div>
									</div>
									<div class="project-button">
										<a class="btn-core" href="news-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="project-preview-box">
									<img src="{{asset('assets/img/etude-abbvie-illustration-03-2x.png')}}" alt="" class="cover" />
									<div class="project-title">
										<div>DigiLife a un nouvel habit pour son site web.</div>
										<div class="project-time">
											<i class="bi bi-clock"></i> Il y 2 jours
										</div>
									</div>
									<div class="project-button">
										<a class="btn-core" href="news-detail.html">Voir détails</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
@endsection