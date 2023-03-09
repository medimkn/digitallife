@extends('layout.master')
@section('contenu')
          <section class="section" data-aos="fade-down" data-aos-duration="650" data-aos-delay="50">
            <div class="text-center mb-5">
              <h1 class="title-big bold" data-aos="fade-down" data-aos-duration="650" data-aos-delay="250">Expertises.</h1>
            </div>

            <div class="view">
              <input
                class="view_input"
                name="view"
                type="radio"
                id="view_input-1"
                data-anchor="#analyse"
                checked="checked"
              />
              <input
                class="view_input"
                name="view"
                type="radio"
                id="view_input-2"
                data-anchor="#design"
              />
              <input
                class="view_input"
                name="view"
                type="radio"
                id="view_input-3"
                data-anchor="#developpement"
              />
              <input
                class="view_input"
                name="view"
                type="radio"
                id="view_input-4"
                data-anchor="#maintenance-evolution"
              />

              <div class="view_illustrations">
                <div class="view_illustrations_buttons_left">
                  <label
                    class="view_illustrations_buttons_left_button"
                    for="view_input-1"
                  >
                    <img
                      class="view_illustrations_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_left_button"
                    for="view_input-2"
                  >
                    <img
                      class="view_illustrations_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_left_button"
                    for="view_input-3"
                  >
                    <img
                      class="view_illustrations_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_left_button"
                    for="view_input-4"
                  >
                    <img
                      class="view_illustrations_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                </div>

                <div class="view_illustrations_buttons_right">
                  <label
                    class="view_illustrations_buttons_right_button"
                    for="view_input-1"
                  >
                    <img
                      class="view_illustrations_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_right_button"
                    for="view_input-2"
                  >
                    <img
                      class="view_illustrations_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_right_button"
                    for="view_input-3"
                  >
                    <img
                      class="view_illustrations_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_illustrations_buttons_right_button"
                    for="view_input-4"
                  >
                    <img
                      class="view_illustrations_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                </div>

                <div class="view_illustrations_wrapper">
                  <div class="view_illustrations_wrapper_slider">
                    <div
                      class="view_illustrations_wrapper_slider_illustration"
                      data-for="view_input-1"
                    >
                      <h4 class="bold">Analyse et stratégie</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                    <div
                      class="view_illustrations_wrapper_slider_illustration"
                      data-for="view_input-2"
                    >
                      <h4 class="bold">Design</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                    <div
                      class="view_illustrations_wrapper_slider_illustration"
                      data-for="view_input-3"
                    >
                      <h4 class="bold">Développement</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                    <div
                      class="view_illustrations_wrapper_slider_illustration"
                      data-for="view_input-4"
                    >
                      <h4 class="bold">Maintenance et évolution</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="view_buttons">
                <label class="view_buttons_button" for="view_input-1"
                  ><span>Analyse et stratégie</span></label
                >
                <img
                  class="arrow"
                  src="{{asset('assets/img/svg/icons/arrow-right-grey.svg')}}"
                  alt=""
                  loading="lazy"
                />
                <label class="view_buttons_button" for="view_input-2"
                  ><span>Design</span></label
                >
                <img
                  class="arrow"
                  src="{{asset('assets/img/svg/icons/arrow-right-grey.svg')}}"
                  alt=""
                  loading="lazy"
                />
                <label class="view_buttons_button" for="view_input-3"
                  ><span>Développement</span></label
                >
                <img
                  class="arrow"
                  src="{{asset('assets/img/svg/icons/arrow-right-grey.svg')}}"
                  alt=""
                  loading="lazy"
                />
                <label class="view_buttons_button" for="view_input-4"
                  ><span>Maintenance et évolution</span></label
                >
              </div>

              <div class="view_text">
                <div class="view_text_card" data-for="view_input-1">
                  <h2 class="bold">
                    <span>Analyse et stratégie</span><br />
                    Comprendre et recommander.
                  </h2>
                  <p>
                    Pour façonner une expérience numérique, nous devons tout
                    d&#039;abord cerner en profondeur votre réalité
                    d&#039;affaires, vos besoins et vos défis. Nos experts
                    s&#039;assurent de vous guider en validant les balises et la
                    faisabilité du projet. Ensuite, en nous basant sur du
                    concret, nous recommandons la stratégie la plus appropriée
                    pour atteindre le succès.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-2">
                  <h2 class="bold">
                    <span>Design</span><br />
                    Façonner l&#039;expérience numérique.
                  </h2>
                  <p>
                    Nous faisons équipe avec vous pour réinventer vos
                    expériences numériques et créer de nouvelles solutions
                    innovantes. Jouant constamment avec de nouvelles façons de
                    faire, nous ajoutons une dimension qui crée un lien émotif
                    et du plaisir pour l&#039;utilisateur. Notre créativité à
                    toute épreuve nous permet de résoudre élégamment des
                    problèmes complexes.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-3">
                  <h2 class="bold">
                    <span>Développement</span><br />
                    Matérialiser la solution.
                  </h2>
                  <p>
                    À cette étape cruciale, nous transformons votre stratégie en
                    réalité. Fortes de leur expérience, nos équipes spécialisées
                    utilisent la technologie pour co-créer votre vision et
                    construire des produits et écosystèmes de première classe.
                    Notre communication ouverte et notre approche collaborative
                    tout au long du processus sont garantes de votre succès.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-4">
                  <h2 class="bold">
                    <span>Maintenance et évolution</span><br />
                    Soutenir l&#039;évolution de la solution.
                  </h2>
                  <p>
                    Pour favoriser le succès de vos plateformes, nos experts
                    vous accompagnent dans leur adoption et leur mise en place.
                    Nous facilitons l&#039;opérationnalisation et le déploiement
                    pour livrer votre projet en vous offrant la tranquillité
                    d&#039;esprit. Finalement, nous vous accompagnons dans
                    l&#039;évolution de votre solution afin que vos produits et
                    écosystèmes numériques gardent toute leur pertinence dans le
                    futur.
                  </p>
                </div>
              </div>

              <div class="view_content">
                <div class="view_content_page" data-for="view_input-1">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Stratégie d&#039;expérience numérique
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous analysons la qualité et l&#039;homogénéité de vos
                        expériences numériques et les comparons aux bonnes
                        pratiques de l&#039;industrie.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Processus de découverte de produits
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous explorons et définissons avec vous votre projet
                        afin d&#039;identifier les opportunités et les risques
                        technologiques.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Audit de l&#039;écosystème applicatif
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous étudions votre écosystème applicatif afin d&#039;en
                        comprendre la portée et la valeur, en plus de détecter
                        le potentiel d&#039;évolution et d&#039;amélioration.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Analyse d&#039;affaires et de processus
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous observons votre fonctionnement et trouvons des
                        pistes afin d&#039;optimiser vos opérations.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="view_content_page" data-for="view_input-2">
                  <div class="view_content_page_buttons">
                    <a
                      class="view_content_page_buttons_button"
                      href="expertise-detail.html"
                    >
                      <div class="view_content_page_buttons_button_title">
                        Design d&#039;interface utilisateurs (UI)
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous concevons les interfaces qui deviendront la
                        prolongation de votre marque et de votre organisation.
                      </div>
                      <div class="view_content_page_buttons_button_icon">
                        En savoir plus
                      </div>
                    </a>
                    <a
                      class="view_content_page_buttons_button"
                      href="expertise-detail.html"
                    >
                      <div class="view_content_page_buttons_button_title">
                        Design d&#039;expérience utilisateurs (UX)
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous imaginons avec vous les composantes qui rendront
                        votre solution numérique intuitive, ludique et efficace.
                      </div>
                      <div class="view_content_page_buttons_button_icon">
                        En savoir plus
                      </div>
                    </a>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Parcours utilisateurs dans l&#039;écosystème
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous cartographions, définissons et optimisons le
                        parcours de vos utilisateurs à travers toutes vos
                        applications en visant leur succès au sein de votre
                        écosystème.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Design de prototype navigable
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous créons un outil non-programmé servant à tester
                        rapidement la pertinence, la puissance et la cohérence
                        des fonctionnalités et des interfaces.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="view_content_page" data-for="view_input-3">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Architecture d&#039;écosystème applicatif
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous réfléchissons à votre constellation
                        d&#039;applications et comment elles interagissent les
                        unes avec les autres de façon optimisée.
                      </div>
                    </div>
                    <a
                      class="view_content_page_buttons_button"
                      href="expertise-detail.html"
                    >
                      <div class="view_content_page_buttons_button_title">
                        Développement d&#039;applications mobiles
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous bâtissons des applications conçues en langages
                        natifs pour les plateformes iOS et Android qui répondent
                        aux spécificités de chacune.
                      </div>
                      <div class="view_content_page_buttons_button_icon">
                        En savoir plus
                      </div>
                    </a>
                    <a
                      class="view_content_page_buttons_button"
                      href="expertise-detail.html"
                    >
                      <div class="view_content_page_buttons_button_title">
                        Développement d&#039;applications Web
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous concevons des applications Web accessibles et
                        efficaces avec des interfaces qui s&#039;adaptent selon
                        les contextes.
                      </div>
                      <div class="view_content_page_buttons_button_icon">
                        En savoir plus
                      </div>
                    </a>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Portails et consoles de gestion Web
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous réalisons des sites internet et des portails Web
                        vous permettant d&#039;interagir avec vos données et vos
                        utilisateurs.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Rapports et tableaux de bord
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous outillons pour la visualisation et
                        l&#039;analyse des données de vos systèmes grâce à des
                        outils statistiques adaptés et faciles à comprendre.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Interconnectivité et intégration
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous intégrons et connectons de façon sécuritaire vos
                        applications entre elles (Middleware, CRM, ERP, Ecom,
                        CMS, ioT, etc.) afin de maximiser la valeur de vos
                        investissements et élargir les possibilités.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Modernisation technologique et migration cloud
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous actualisons vos anciens logiciels sur mesure afin
                        qu&#039;ils répondent aux nouveaux standards
                        ergonomiques et techniques grâce à une réécriture
                        évolutive.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Assurance qualité et tests automatisés
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous implantons un rigoureux processus d&#039;assurance
                        qualité afin d&#039;assurer l&#039;excellence de tous
                        nos projets de développement logiciel.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="view_content_page" data-for="view_input-4">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Maintenance et évolution
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous veillons à l&#039;amélioration et à la pérennité de
                        vos plateformes grâce à nos plans de support réactif et
                        proactif.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Formation et soutien technique
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous aidons à apprendre à bien utiliser vos
                        nouveaux outils étape par étape grâce à nos plans de
                        formation personnalisés.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Hébergement et monitoring
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous offrons un service performant et fiable
                        d&#039;hébergement de vos solutions dans le nuage ou sur
                        nos serveurs sécurisés.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Gestion du changement
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous épaulons dans votre transition
                        organisationnelle afin d&#039;améliorer l&#039;adoption
                        de vos nouvelles applications numériques.
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="view_bottomButtons">
                <div class="view_bottomButtons_buttons_left">
                  <label
                    class="view_bottomButtons_buttons_left_button"
                    for="view_input-1"
                  >
                    <img
                      class="view_bottomButtons_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                    <div class="view_bottomButtons_buttons_button_label">
                      Analyse et stratégie<br />
                      <span>Comprendre et recommander.</span>
                    </div>
                  </label>
                  <label
                    class="view_bottomButtons_buttons_left_button"
                    for="view_input-2"
                  >
                    <img
                      class="view_bottomButtons_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                    <div class="view_bottomButtons_buttons_button_label">
                      Design<br />
                      <span>Façonner l&#039;expérience numérique.</span>
                    </div>
                  </label>
                  <label
                    class="view_bottomButtons_buttons_left_button"
                    for="view_input-3"
                  >
                    <img
                      class="view_bottomButtons_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                    <div class="view_bottomButtons_buttons_button_label">
                      Développement<br />
                      <span>Matérialiser la solution.</span>
                    </div>
                  </label>
                  <label
                    class="view_bottomButtons_buttons_left_button"
                    for="view_input-4"
                  >
                    <img
                      class="view_bottomButtons_buttons_left_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                    <div class="view_bottomButtons_buttons_button_label">
                      Maintenance et évolution<br />
                      <span>Soutenir l&#039;évolution de la solution.</span>
                    </div>
                  </label>
                </div>

                <div class="view_bottomButtons_buttons_right">
                  <label
                    class="view_bottomButtons_buttons_right_button"
                    for="view_input-1"
                  >
                    <div class="view_bottomButtons_buttons_button_label">
                      Analyse et stratégie<br />
                      <span>Comprendre et recommander.</span>
                    </div>
                    <img
                      class="view_bottomButtons_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_bottomButtons_buttons_right_button"
                    for="view_input-2"
                  >
                    <div class="view_bottomButtons_buttons_button_label">
                      Design<br />
                      <span>Façonner l&#039;expérience numérique.</span>
                    </div>
                    <img
                      class="view_bottomButtons_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_bottomButtons_buttons_right_button"
                    for="view_input-3"
                  >
                    <div class="view_bottomButtons_buttons_button_label">
                      Développement<br />
                      <span>Matérialiser la solution.</span>
                    </div>
                    <img
                      class="view_bottomButtons_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                  <label
                    class="view_bottomButtons_buttons_right_button"
                    for="view_input-4"
                  >
                    <div class="view_bottomButtons_buttons_button_label">
                      Maintenance et évolution<br />
                      <span>Soutenir l&#039;évolution de la solution.</span>
                    </div>
                    <img
                      class="view_bottomButtons_buttons_right_button_img"
                      src="{{asset('assets/img/svg/icons/arrow-long-left-icon.svg')}}"
                      alt=""
                      loading="lazy"
                    />
                  </label>
                </div>
              </div>
            </div>
          </section>
@endsection