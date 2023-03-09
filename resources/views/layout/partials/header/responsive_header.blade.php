<!-- this navigation link is just for mobile view -->
      <div class="navigationLinksMobile">
        <nav class="mobileNavbarLinks">
          <a href="index-2.html">
            <div class="logo">
              <img
                src="{{asset('assets/img/digilife-logo.png')}}"
                alt="Logo DigiLife"
                class="cover"
              />
            </div>
          </a>
          <a href="{{Route('about')}}" class="navigationLink">A propos</a>
          <a href="{{Route('approche')}}" class="navigationLink">Notre approche</a>
          <a href="{{Route('expertise.create')}}" class="navigationLink">Notre expertise</a>
          <a href="{{Route('realisation.create')}}" class="navigationLink"
            >Nos réalisations</a
          >
          <a href="{{ROute('vie')}}" class="navigationLink"
            >La vie chez DigiLife</a
          >
          <a href="{{Route('carriere.create')}}" class="navigationLink">Carrières</a>
          <a href="{{Route('news.create')}}" class="navigationLink">News</a>
          <a href="{{Route('contact.create')}}" class="navigationLink">Contact</a>
          <hr class="hr" />

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
        </nav>
      </div>