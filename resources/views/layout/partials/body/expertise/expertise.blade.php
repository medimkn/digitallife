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
                      <h4 class="bold">Analyse et strat??gie</h4>
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
                      <h4 class="bold">D??veloppement</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                    <div
                      class="view_illustrations_wrapper_slider_illustration"
                      data-for="view_input-4"
                    >
                      <h4 class="bold">Maintenance et ??volution</h4>
                      <div
                        class="view_illustrations_wrapper_slider_illustration_img"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="view_buttons">
                <label class="view_buttons_button" for="view_input-1"
                  ><span>Analyse et strat??gie</span></label
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
                  ><span>D??veloppement</span></label
                >
                <img
                  class="arrow"
                  src="{{asset('assets/img/svg/icons/arrow-right-grey.svg')}}"
                  alt=""
                  loading="lazy"
                />
                <label class="view_buttons_button" for="view_input-4"
                  ><span>Maintenance et ??volution</span></label
                >
              </div>

              <div class="view_text">
                <div class="view_text_card" data-for="view_input-1">
                  <h2 class="bold">
                    <span>Analyse et strat??gie</span><br />
                    Comprendre et recommander.
                  </h2>
                  <p>
                    Pour fa??onner une exp??rience num??rique, nous devons tout
                    d&#039;abord cerner en profondeur votre r??alit??
                    d&#039;affaires, vos besoins et vos d??fis. Nos experts
                    s&#039;assurent de vous guider en validant les balises et la
                    faisabilit?? du projet. Ensuite, en nous basant sur du
                    concret, nous recommandons la strat??gie la plus appropri??e
                    pour atteindre le succ??s.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-2">
                  <h2 class="bold">
                    <span>Design</span><br />
                    Fa??onner l&#039;exp??rience num??rique.
                  </h2>
                  <p>
                    Nous faisons ??quipe avec vous pour r??inventer vos
                    exp??riences num??riques et cr??er de nouvelles solutions
                    innovantes. Jouant constamment avec de nouvelles fa??ons de
                    faire, nous ajoutons une dimension qui cr??e un lien ??motif
                    et du plaisir pour l&#039;utilisateur. Notre cr??ativit?? ??
                    toute ??preuve nous permet de r??soudre ??l??gamment des
                    probl??mes complexes.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-3">
                  <h2 class="bold">
                    <span>D??veloppement</span><br />
                    Mat??rialiser la solution.
                  </h2>
                  <p>
                    ?? cette ??tape cruciale, nous transformons votre strat??gie en
                    r??alit??. Fortes de leur exp??rience, nos ??quipes sp??cialis??es
                    utilisent la technologie pour co-cr??er votre vision et
                    construire des produits et ??cosyst??mes de premi??re classe.
                    Notre communication ouverte et notre approche collaborative
                    tout au long du processus sont garantes de votre succ??s.
                  </p>
                </div>

                <div class="view_text_card" data-for="view_input-4">
                  <h2 class="bold">
                    <span>Maintenance et ??volution</span><br />
                    Soutenir l&#039;??volution de la solution.
                  </h2>
                  <p>
                    Pour favoriser le succ??s de vos plateformes, nos experts
                    vous accompagnent dans leur adoption et leur mise en place.
                    Nous facilitons l&#039;op??rationnalisation et le d??ploiement
                    pour livrer votre projet en vous offrant la tranquillit??
                    d&#039;esprit. Finalement, nous vous accompagnons dans
                    l&#039;??volution de votre solution afin que vos produits et
                    ??cosyst??mes num??riques gardent toute leur pertinence dans le
                    futur.
                  </p>
                </div>
              </div>

              <div class="view_content">
                <div class="view_content_page" data-for="view_input-1">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Strate??gie d&#039;expe??rience nume??rique
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous analysons la qualit?? et l&#039;homog??n??it?? de vos
                        expe??riences nume??riques et les comparons aux bonnes
                        pratiques de l&#039;industrie.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Processus de de??couverte de produits
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous explorons et d??finissons avec vous votre projet
                        afin d&#039;identifier les opportunit??s et les risques
                        technologiques.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Audit de l&#039;e??cosyste??me applicatif
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous ??tudions votre e??cosyste??me applicatif afin d&#039;en
                        comprendre la port??e et la valeur, en plus de d??tecter
                        le potentiel d&#039;??volution et d&#039;am??lioration.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Analyse d&#039;affaires et de processus
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous observons votre fonctionnement et trouvons des
                        pistes afin d&#039;optimiser vos ope??rations.
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
                        Design d&#039;expe??rience utilisateurs (UX)
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous imaginons avec vous les composantes qui rendront
                        votre solution num??rique intuitive, ludique et efficace.
                      </div>
                      <div class="view_content_page_buttons_button_icon">
                        En savoir plus
                      </div>
                    </a>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Parcours utilisateurs dans l&#039;??cosyst??me
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous cartographions, d??finissons et optimisons le
                        parcours de vos utilisateurs ?? travers toutes vos
                        applications en visant leur succe??s au sein de votre
                        ??cosyst??me.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Design de prototype navigable
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous cr??ons un outil non-programme?? servant a?? tester
                        rapidement la pertinence, la puissance et la cohe??rence
                        des fonctionnalit??s et des interfaces.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="view_content_page" data-for="view_input-3">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Architecture d&#039;e??cosyste??me applicatif
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous re??fle??chissons a?? votre constellation
                        d&#039;applications et comment elles interagissent les
                        unes avec les autres de fa??on optimis??e.
                      </div>
                    </div>
                    <a
                      class="view_content_page_buttons_button"
                      href="expertise-detail.html"
                    >
                      <div class="view_content_page_buttons_button_title">
                        De??veloppement d&#039;applications mobiles
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous b??tissons des applications con??ues en langages
                        natifs pour les plateformes iOS et Android qui r??pondent
                        aux sp??cificit??s de chacune.
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
                        De??veloppement d&#039;applications Web
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
                        Nous re??alisons des sites internet et des portails Web
                        vous permettant d&#039;interagir avec vos donne??es et vos
                        utilisateurs.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Rapports et tableaux de bord
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous outillons pour la visualisation et
                        l&#039;analyse des donne??es de vos syste??mes gra??ce a?? des
                        outils statistiques adapte??s et faciles a?? comprendre.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Interconnectivite?? et inte??gration
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous inte??grons et connectons de fa??on s??curitaire vos
                        applications entre elles (Middleware, CRM, ERP, Ecom,
                        CMS, ioT, etc.) afin de maximiser la valeur de vos
                        investissements et ??largir les possibilite??s.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Modernisation technologique et migration cloud
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous actualisons vos anciens logiciels sur mesure afin
                        qu&#039;ils r??pondent aux nouveaux standards
                        ergonomiques et techniques gra??ce a?? une r????criture
                        e??volutive.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Assurance qualite?? et tests automatise??s
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous implantons un rigoureux processus d&#039;assurance
                        qualite?? afin d&#039;assurer l&#039;excellence de tous
                        nos projets de de??veloppement logiciel.
                      </div>
                    </div>
                  </div>
                </div>

                <div class="view_content_page" data-for="view_input-4">
                  <div class="view_content_page_buttons">
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Maintenance et ??volution
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous veillons ?? l&#039;am??lioration et ?? la pe??rennite?? de
                        vos plateformes gra??ce a?? nos plans de support re??actif et
                        proactif.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Formation et soutien technique
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous aidons ?? apprendre ?? bien utiliser vos
                        nouveaux outils ??tape par e??tape gra??ce a?? nos plans de
                        formation personnalis??s.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        He??bergement et monitoring
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous offrons un service performant et fiable
                        d&#039;he??bergement de vos solutions dans le nuage ou sur
                        nos serveurs s??curis??s.
                      </div>
                    </div>
                    <div class="view_content_page_buttons_button">
                      <div class="view_content_page_buttons_button_title">
                        Gestion du changement
                      </div>
                      <div class="view_content_page_buttons_button_info">
                        Nous vous ??paulons dans votre transition
                        organisationnelle afin d&#039;am??liorer l&#039;adoption
                        de vos nouvelles applications num??riques.
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
                      Analyse et strat??gie<br />
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
                      <span>Fa??onner l&#039;exp??rience num??rique.</span>
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
                      D??veloppement<br />
                      <span>Mat??rialiser la solution.</span>
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
                      Maintenance et ??volution<br />
                      <span>Soutenir l&#039;??volution de la solution.</span>
                    </div>
                  </label>
                </div>

                <div class="view_bottomButtons_buttons_right">
                  <label
                    class="view_bottomButtons_buttons_right_button"
                    for="view_input-1"
                  >
                    <div class="view_bottomButtons_buttons_button_label">
                      Analyse et strat??gie<br />
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
                      <span>Fa??onner l&#039;exp??rience num??rique.</span>
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
                      D??veloppement<br />
                      <span>Mat??rialiser la solution.</span>
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
                      Maintenance et ??volution<br />
                      <span>Soutenir l&#039;??volution de la solution.</span>
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