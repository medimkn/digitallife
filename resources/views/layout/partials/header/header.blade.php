        <!-- the top header content -->
        <header class="top-header">
          <div class="container">
            <div class="top-header-content">
              <div class="brand light" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
                <a href="/">
                  <img
                    src="{{asset('assets/img/digilife-logo.png')}}"
                    alt="Logo DigiLife"
                    class="cover"
                  />
                </a>
              </div>
              <div class="menu-links">
                <a href="{{Route('carriere.create')}}" class="btn-core" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">On engage</a>
                <div class="menu-link" data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
                  <span class="link-bars"></span>
                </div>
                <span class="weight d-none d-md-inline-block" data-aos="fade-up" data-aos-duration="650" data-aos-delay="350">Menu</span>
              </div>
            </div>
          </div>

          <!-- the top menu content -->
          <div class="top-menu">
            <div class="container">
              <div class="row">
                <div class="col-4">
                  <div class="top-menu-link">
                    <a href="{{route('about')}}">A propos</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('approche')}}">Notre approche</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('expertise.create')}}">Notre expertise</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('realisation.create')}}">Nos réalisations</a>
                  </div>
                </div>
                <div class="col-4">
                  <div class="top-menu-link">
                    <a href="{{Route('vie')}}">La vie chez DigiLife</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('carriere.create')}}">Carrières</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('contact.create')}}">Contact</a>
                  </div>
                  <div class="top-menu-link">
                    <a href="{{Route('news.create')}}">News</a>
                  </div>
                </div>
                <div class="col-4">
                  <div class="start-project-box">
                    <p>Lancer votre projet avec nous.</p>
                    <a href="{{Route('contact.create')}}" class="btn-core">Nous contacter</a>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="follow">Suivez-nous</div>
                    <div class="social-links">
                      <div class="social-link">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                      <div class="social-link">
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                      </div>
                      <div class="social-link">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>