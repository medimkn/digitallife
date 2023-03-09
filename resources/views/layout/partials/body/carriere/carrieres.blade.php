@extends('layout.master')
@section('contenu')
				<div class="banner banner-carreer">
					<svg class="section-banner_leftLines draw-appcomLines blue-lines" data-animated width="331" height="321"
						viewBox="0 0 331 321" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="line-1"
							d="M123.568 320C110.24 320.032 97.4404 314.805 87.9608 305.459L16.1396 234.892C11.356 230.173 7.55562 224.556 4.95729 218.365C2.35896 212.175 1.01404 205.532 1 198.821L1 124.78C1 111.354 6.34656 98.4767 15.8635 88.9825C25.3804 79.4883 38.2882 74.1545 51.7471 74.1545L112.052 74.1545L169.551 16.0472C174.283 11.2933 179.909 7.51734 186.106 4.93534C192.303 2.35334 198.95 1.01604 205.666 1C219.125 1 232.033 6.33379 241.55 15.828C251.067 25.3222 256.413 38.1991 256.413 51.626V74.1264H279.263C289.355 74.1285 299.216 77.132 307.588 82.7532C315.96 88.3743 322.462 96.3579 326.263 105.684C330.064 115.009 330.991 125.254 328.927 135.108C326.863 144.963 321.9 153.979 314.674 161.006L241.133 232.459C231.673 241.692 218.956 246.848 205.722 246.817H174.316V269.318C174.316 282.744 168.969 295.621 159.452 305.116C149.935 314.61 137.027 319.944 123.568 319.944V320Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-2"
							d="M123.559 307.167C113.571 307.195 103.978 303.276 96.8804 296.267L25.0985 225.816C21.528 222.273 18.6945 218.063 16.7607 213.425C14.8269 208.788 13.8308 203.815 13.8297 198.793L13.8297 124.83C13.8297 114.772 17.8367 105.126 24.9691 98.0145C32.1014 90.9026 41.775 86.9072 51.8618 86.9072L117.347 86.9072L178.537 25.1076C183.839 19.7547 190.618 16.0954 198.012 14.5951C205.406 13.0948 213.08 13.8214 220.058 16.6825C227.037 19.5435 233.004 24.4097 237.201 30.662C241.398 36.9144 243.635 44.2702 243.628 51.7938V86.9072H279.138C286.703 86.9074 294.095 89.1567 300.371 93.3677C306.646 97.5787 311.52 103.56 314.369 110.547C317.218 117.534 317.913 125.21 316.364 132.593C314.816 139.976 311.094 146.73 305.676 151.993L232.19 223.358C225.095 230.265 215.567 234.123 205.652 234.103H161.591V269.216C161.591 279.274 157.584 288.919 150.452 296.031C143.319 303.143 133.646 307.139 123.559 307.139V307.167Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-3"
							d="M123.63 295.25C116.979 295.263 110.593 292.639 105.86 287.949L34.2156 217.1C31.8275 214.73 29.9304 211.909 28.6337 208.799C27.3369 205.689 26.6662 202.353 26.6601 198.982L26.6601 124.631C26.6601 117.889 29.3283 111.424 34.0779 106.657C38.8274 101.89 45.2691 99.2115 51.9859 99.2115L122.715 99.2115L187.578 33.3052C189.94 30.9193 192.748 29.024 195.84 27.7276C198.933 26.4313 202.25 25.7593 205.601 25.7501C212.318 25.7501 218.76 28.4281 223.509 33.1952C228.259 37.9622 230.927 44.4277 230.927 51.1693V99.1833H279.032C284.072 99.1869 288.997 100.7 293.175 103.529C297.354 106.357 300.597 110.373 302.488 115.062C304.38 119.751 304.835 124.9 303.794 129.85C302.754 134.8 300.265 139.326 296.648 142.848L223.245 214.586C218.522 219.218 212.176 221.804 205.573 221.789L148.956 221.789V269.803C148.956 276.544 146.287 283.01 141.538 287.777C136.788 292.544 130.347 295.222 123.63 295.222V295.25Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-4"
							d="M123.748 282.417C120.433 282.418 117.25 281.111 114.885 278.777L43.2543 208.005C42.0599 206.822 41.112 205.412 40.4657 203.857C39.8195 202.302 39.4878 200.634 39.4902 198.949L39.4902 124.678C39.4902 121.311 40.822 118.082 43.1926 115.701C45.5632 113.32 48.7784 111.983 52.131 111.983L128.13 111.983L196.545 42.3673C198.306 40.5722 200.56 39.3444 203.019 38.8401C205.477 38.3358 208.03 38.5779 210.351 39.5355C212.672 40.4931 214.657 42.123 216.053 44.2175C217.449 46.312 218.192 48.7763 218.189 51.2966V111.954L278.879 111.954C281.391 111.956 283.846 112.71 285.929 114.119C288.013 115.529 289.632 117.53 290.578 119.867C291.525 122.204 291.756 124.772 291.244 127.242C290.731 129.712 289.497 131.972 287.699 133.735L214.425 205.41C212.064 207.717 208.899 209.008 205.604 209.007L136.389 209.007L136.389 269.664C136.389 273.032 135.057 276.261 132.686 278.642C130.316 281.023 127.101 282.36 123.748 282.36V282.417Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-5"
							d="M57.0877 124.438L131.614 124.438C132.243 124.439 132.867 124.315 133.449 124.072C134.03 123.83 134.558 123.474 135.002 123.025L197.702 59.2698C198.366 58.5899 199.216 58.1241 200.144 57.932C201.072 57.7399 202.036 57.8301 202.912 58.1911C203.789 58.5522 204.539 59.1677 205.066 59.9591C205.593 60.7504 205.874 61.6818 205.872 62.6343V119.632C205.872 120.904 206.374 122.125 207.267 123.026C208.161 123.927 209.373 124.435 210.639 124.438L267.489 124.438C268.439 124.437 269.367 124.72 270.155 125.252C270.943 125.783 271.555 126.54 271.913 127.423C272.271 128.307 272.358 129.278 272.164 130.212C271.97 131.146 271.502 132 270.822 132.666L207.264 194.866C206.38 195.758 205.184 196.265 203.932 196.279L128.801 196.279C127.533 196.279 126.317 196.786 125.421 197.687C124.524 198.588 124.02 199.811 124.02 201.086L124.02 258.366C124.022 259.312 123.745 260.237 123.225 261.025C122.705 261.813 121.965 262.428 121.097 262.794C120.23 263.16 119.274 263.259 118.35 263.08C117.427 262.901 116.577 262.451 115.907 261.787L53.727 200.28C53.2787 199.832 52.9235 199.299 52.6821 198.711C52.4407 198.124 52.3179 197.494 52.3209 196.859L52.3209 129.231C52.319 128.601 52.4411 127.977 52.68 127.395C52.9189 126.812 53.2699 126.283 53.7129 125.838C54.1559 125.392 54.6822 125.04 55.2613 124.799C55.8405 124.559 56.4612 124.437 57.0877 124.438V124.438Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-6"
							d="M64.2353 192.754V139.511C64.2353 138.958 64.4552 138.428 64.8466 138.037C65.238 137.645 65.7689 137.426 66.3224 137.426H131.081C133.395 137.418 135.684 136.954 137.818 136.062C139.952 135.17 141.89 133.866 143.52 132.225L189.24 85.9447C189.529 85.6568 189.897 85.4595 190.297 85.3768C190.697 85.2941 191.112 85.3297 191.492 85.4792C191.872 85.6287 192.2 85.8857 192.436 86.2187C192.673 86.5516 192.807 86.9461 192.822 87.354V117.794C192.813 120.369 193.312 122.92 194.292 125.302C195.271 127.683 196.712 129.848 198.53 131.672C200.349 133.495 202.51 134.943 204.889 135.93C207.269 136.917 209.82 137.426 212.396 137.426L242.731 137.426C243.142 137.435 243.541 137.565 243.879 137.8C244.216 138.035 244.476 138.364 244.627 138.747C244.778 139.129 244.812 139.548 244.726 139.949C244.639 140.351 244.436 140.719 244.141 141.005L200.931 183.058C200.552 183.426 200.048 183.637 199.521 183.65H130.277C125.086 183.65 120.107 185.711 116.436 189.379C112.765 193.048 110.703 198.023 110.703 203.211V234.37C110.729 234.797 110.623 235.222 110.4 235.587C110.176 235.952 109.845 236.239 109.453 236.41C109.06 236.581 108.625 236.627 108.205 236.542C107.785 236.457 107.402 236.245 107.107 235.934L64.7994 194.248C64.4231 193.843 64.2207 193.307 64.2353 192.754V192.754Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-7"
							d="M77.0643 188.435L77.0643 150.434H131.418C139.515 150.406 147.269 147.194 152.975 141.505L180.647 113.75V118.362C180.658 126.864 184.074 135.016 190.145 141.028C196.216 147.04 204.447 150.423 213.032 150.434H217.279L195.75 171.18H130.639C122.053 171.191 113.822 174.573 107.751 180.586C101.68 186.598 98.2648 194.749 98.2536 203.252V209.083L77.0643 188.435Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-8"
							d="M89.8947 183.075V162.665H111.024C102.003 167.084 94.6924 174.381 90.2343 183.416L89.8947 183.075ZM150.649 158.114C154.912 155.999 158.795 153.187 162.14 149.793L173.221 138.5C177.402 146.405 183.799 152.903 191.619 157.189L190.657 158.114H150.649Z"
							stroke="#ffffff" stroke-miterlimit="10" />
					</svg>

					<svg class="section-banner_rightLines draw-appcomLines blue-lines" data-animated width="331" height="321"
						viewBox="0 0 331 321" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path class="line-1"
							d="M123.568 320C110.24 320.032 97.4404 314.805 87.9608 305.459L16.1396 234.892C11.356 230.173 7.55562 224.556 4.95729 218.365C2.35896 212.175 1.01404 205.532 1 198.821L1 124.78C1 111.354 6.34656 98.4767 15.8635 88.9825C25.3804 79.4883 38.2882 74.1545 51.7471 74.1545L112.052 74.1545L169.551 16.0472C174.283 11.2933 179.909 7.51734 186.106 4.93534C192.303 2.35334 198.95 1.01604 205.666 1C219.125 1 232.033 6.33379 241.55 15.828C251.067 25.3222 256.413 38.1991 256.413 51.626V74.1264H279.263C289.355 74.1285 299.216 77.132 307.588 82.7532C315.96 88.3743 322.462 96.3579 326.263 105.684C330.064 115.009 330.991 125.254 328.927 135.108C326.863 144.963 321.9 153.979 314.674 161.006L241.133 232.459C231.673 241.692 218.956 246.848 205.722 246.817H174.316V269.318C174.316 282.744 168.969 295.621 159.452 305.116C149.935 314.61 137.027 319.944 123.568 319.944V320Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-2"
							d="M123.559 307.167C113.571 307.195 103.978 303.276 96.8804 296.267L25.0985 225.816C21.528 222.273 18.6945 218.063 16.7607 213.425C14.8269 208.788 13.8308 203.815 13.8297 198.793L13.8297 124.83C13.8297 114.772 17.8367 105.126 24.9691 98.0145C32.1014 90.9026 41.775 86.9072 51.8618 86.9072L117.347 86.9072L178.537 25.1076C183.839 19.7547 190.618 16.0954 198.012 14.5951C205.406 13.0948 213.08 13.8214 220.058 16.6825C227.037 19.5435 233.004 24.4097 237.201 30.662C241.398 36.9144 243.635 44.2702 243.628 51.7938V86.9072H279.138C286.703 86.9074 294.095 89.1567 300.371 93.3677C306.646 97.5787 311.52 103.56 314.369 110.547C317.218 117.534 317.913 125.21 316.364 132.593C314.816 139.976 311.094 146.73 305.676 151.993L232.19 223.358C225.095 230.265 215.567 234.123 205.652 234.103H161.591V269.216C161.591 279.274 157.584 288.919 150.452 296.031C143.319 303.143 133.646 307.139 123.559 307.139V307.167Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-3"
							d="M123.63 295.25C116.979 295.263 110.593 292.639 105.86 287.949L34.2156 217.1C31.8275 214.73 29.9304 211.909 28.6337 208.799C27.3369 205.689 26.6662 202.353 26.6601 198.982L26.6601 124.631C26.6601 117.889 29.3283 111.424 34.0779 106.657C38.8274 101.89 45.2691 99.2115 51.9859 99.2115L122.715 99.2115L187.578 33.3052C189.94 30.9193 192.748 29.024 195.84 27.7276C198.933 26.4313 202.25 25.7593 205.601 25.7501C212.318 25.7501 218.76 28.4281 223.509 33.1952C228.259 37.9622 230.927 44.4277 230.927 51.1693V99.1833H279.032C284.072 99.1869 288.997 100.7 293.175 103.529C297.354 106.357 300.597 110.373 302.488 115.062C304.38 119.751 304.835 124.9 303.794 129.85C302.754 134.8 300.265 139.326 296.648 142.848L223.245 214.586C218.522 219.218 212.176 221.804 205.573 221.789L148.956 221.789V269.803C148.956 276.544 146.287 283.01 141.538 287.777C136.788 292.544 130.347 295.222 123.63 295.222V295.25Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-4"
							d="M123.748 282.417C120.433 282.418 117.25 281.111 114.885 278.777L43.2543 208.005C42.0599 206.822 41.112 205.412 40.4657 203.857C39.8195 202.302 39.4878 200.634 39.4902 198.949L39.4902 124.678C39.4902 121.311 40.822 118.082 43.1926 115.701C45.5632 113.32 48.7784 111.983 52.131 111.983L128.13 111.983L196.545 42.3673C198.306 40.5722 200.56 39.3444 203.019 38.8401C205.477 38.3358 208.03 38.5779 210.351 39.5355C212.672 40.4931 214.657 42.123 216.053 44.2175C217.449 46.312 218.192 48.7763 218.189 51.2966V111.954L278.879 111.954C281.391 111.956 283.846 112.71 285.929 114.119C288.013 115.529 289.632 117.53 290.578 119.867C291.525 122.204 291.756 124.772 291.244 127.242C290.731 129.712 289.497 131.972 287.699 133.735L214.425 205.41C212.064 207.717 208.899 209.008 205.604 209.007L136.389 209.007L136.389 269.664C136.389 273.032 135.057 276.261 132.686 278.642C130.316 281.023 127.101 282.36 123.748 282.36V282.417Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-5"
							d="M57.0877 124.438L131.614 124.438C132.243 124.439 132.867 124.315 133.449 124.072C134.03 123.83 134.558 123.474 135.002 123.025L197.702 59.2698C198.366 58.5899 199.216 58.1241 200.144 57.932C201.072 57.7399 202.036 57.8301 202.912 58.1911C203.789 58.5522 204.539 59.1677 205.066 59.9591C205.593 60.7504 205.874 61.6818 205.872 62.6343V119.632C205.872 120.904 206.374 122.125 207.267 123.026C208.161 123.927 209.373 124.435 210.639 124.438L267.489 124.438C268.439 124.437 269.367 124.72 270.155 125.252C270.943 125.783 271.555 126.54 271.913 127.423C272.271 128.307 272.358 129.278 272.164 130.212C271.97 131.146 271.502 132 270.822 132.666L207.264 194.866C206.38 195.758 205.184 196.265 203.932 196.279L128.801 196.279C127.533 196.279 126.317 196.786 125.421 197.687C124.524 198.588 124.02 199.811 124.02 201.086L124.02 258.366C124.022 259.312 123.745 260.237 123.225 261.025C122.705 261.813 121.965 262.428 121.097 262.794C120.23 263.16 119.274 263.259 118.35 263.08C117.427 262.901 116.577 262.451 115.907 261.787L53.727 200.28C53.2787 199.832 52.9235 199.299 52.6821 198.711C52.4407 198.124 52.3179 197.494 52.3209 196.859L52.3209 129.231C52.319 128.601 52.4411 127.977 52.68 127.395C52.9189 126.812 53.2699 126.283 53.7129 125.838C54.1559 125.392 54.6822 125.04 55.2613 124.799C55.8405 124.559 56.4612 124.437 57.0877 124.438V124.438Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-6"
							d="M64.2353 192.754V139.511C64.2353 138.958 64.4552 138.428 64.8466 138.037C65.238 137.645 65.7689 137.426 66.3224 137.426H131.081C133.395 137.418 135.684 136.954 137.818 136.062C139.952 135.17 141.89 133.866 143.52 132.225L189.24 85.9447C189.529 85.6568 189.897 85.4595 190.297 85.3768C190.697 85.2941 191.112 85.3297 191.492 85.4792C191.872 85.6287 192.2 85.8857 192.436 86.2187C192.673 86.5516 192.807 86.9461 192.822 87.354V117.794C192.813 120.369 193.312 122.92 194.292 125.302C195.271 127.683 196.712 129.848 198.53 131.672C200.349 133.495 202.51 134.943 204.889 135.93C207.269 136.917 209.82 137.426 212.396 137.426L242.731 137.426C243.142 137.435 243.541 137.565 243.879 137.8C244.216 138.035 244.476 138.364 244.627 138.747C244.778 139.129 244.812 139.548 244.726 139.949C244.639 140.351 244.436 140.719 244.141 141.005L200.931 183.058C200.552 183.426 200.048 183.637 199.521 183.65H130.277C125.086 183.65 120.107 185.711 116.436 189.379C112.765 193.048 110.703 198.023 110.703 203.211V234.37C110.729 234.797 110.623 235.222 110.4 235.587C110.176 235.952 109.845 236.239 109.453 236.41C109.06 236.581 108.625 236.627 108.205 236.542C107.785 236.457 107.402 236.245 107.107 235.934L64.7994 194.248C64.4231 193.843 64.2207 193.307 64.2353 192.754V192.754Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-7"
							d="M77.0643 188.435L77.0643 150.434H131.418C139.515 150.406 147.269 147.194 152.975 141.505L180.647 113.75V118.362C180.658 126.864 184.074 135.016 190.145 141.028C196.216 147.04 204.447 150.423 213.032 150.434H217.279L195.75 171.18H130.639C122.053 171.191 113.822 174.573 107.751 180.586C101.68 186.598 98.2648 194.749 98.2536 203.252V209.083L77.0643 188.435Z"
							stroke="#ffffff" stroke-miterlimit="10" />
						<path class="line-8"
							d="M89.8947 183.075V162.665H111.024C102.003 167.084 94.6924 174.381 90.2343 183.416L89.8947 183.075ZM150.649 158.114C154.912 155.999 158.795 153.187 162.14 149.793L173.221 138.5C177.402 146.405 183.799 152.903 191.619 157.189L190.657 158.114H150.649Z"
							stroke="#ffffff" stroke-miterlimit="10" />
					</svg>

					<div class="container">
						<div class="row align-items-center">
							<div class="col-12 col-md-6 mb-4">
								<p class="fs-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Toujours à l'affût de nouveaux talents.</p>
								<h1 class="title" data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
									Propulse ta carrière et <span class="bold">laisse ta marque.</span>
								</h1>
								<p class="mb-0 fs-5" data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">Nourris ta passion du numérique dans un milieu de travail valorisant.
									<span class="bold">Rejoins une équipe allumée qui carbure aux défis!</span>
								</p>
							</div>
							<div class="col-12 col-md-6"></div>
						</div>
					</div>
				</div>


				<section class="section">
					<div class="container">
						<div class="row align-items-start">
							<div class="col-12 col-md-6 p-0">
								<div class="core-img">
									<img src="{{asset('assets/img/academy-student-programmer-3.jpg')}}" alt="" class="cover" />
								</div>
							</div>
							<div class="col-12 col-md-6 p-0">
								<div class="blue-box text-center">
									<h3 data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
										Nous sommes toujours à l'affût de
										<strong class="bold">nouveaux talents.</strong>
									</h3>
									<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
										Si tu cherches à travailler aux côtés d'une belle gang
										allumée, à faire une différence grâce à des projets
										innovants et à faire grandir tes talents, alors nous
										voulons te parler.
									</p>
									<div data-aos="fade-up" data-aos-duration="650" data-aos-delay="250">
										<a href="vie-chez-digilife.html" class="btn-core-white d-inline">Découvrir la vie chez DigiLife</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section">
					<div class="container">
						<div class="content-center text-center mb-5">
							<h2 class="title" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">Des avantages qui font du bien.</h2>
							<p data-aos="fade-up" data-aos-duration="650" data-aos-delay="150">
								Valoriser le bien-être de nos employés, ça nous tient à coeur.
							</p>
						</div>

						<div class="row align-items-stretch">
							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-02.svg')}}" class="cover" alt="">
									</div>
									<h4 class="fs-2 bold">Horaires flexibles</h4>
									<p>
										Notre semaine à 37.5 heures t'offre un cadre flexible. Pour mieux collaborer, nos heures de disponibilités communes sont
										de 9h30 à 15h. On te fait confiance pour gérer le reste de ton temps.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-03.svg')}}" class="cover" alt="">
									</div>
									<h4 class="fs-2 bold">Bureau ou maison</h4>
									<p>
										Entre les deux, ton coeur balance? Profite du confort de chez toi ainsi que du dynamisme de nos bureaux centralisés dans
										le Vieux-Longueuil. Tu pourras choisir selon ton envie du jour!
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-04.svg')}}" class="cover" alt="">
									</div>
									<h4 class="fs-2 bold">Journées maladie illimitées</h4>
									<p>
										On ne le souhaite pas, mais ça peut arriver à tout le monde de tomber malade. On t'offre de prendre le temps dont tu as
										besoin pour te remettre sur pied.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-05.svg')}}" class="cover" alt="">
									</div>
									<h4 class="fs-2 bold">Assurance collective</h4>
									<p>
										On veille au bien-être et à la santé de nos employés. C'est pourquoi on t'offre une gamme d'avantages dont une assurance
										collective, un compte santé et un programme d'aide aux employés.
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-06.svg')}}" class="cover" alt="">
									</div>
									<h4 class="fs-2 bold">Des leaders accessibles</h4>
									<p>
										On est une entreprise à échelle humaine, et nos leaders aussi. Ils sont à l'écoute des idées de l'équipe et laissent la
										place à l'innovation. Leur porte est toujours ouverte, même en télétravail!
									</p>
								</div>
							</div>

							<div class="col-12 col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								<div class="about-card">
									<div class="about-card-logo">
										<img src="{{asset('assets/img/svg/illustrations/careers-illustration-07.svg')}}" class="cover" alt="">
									</div>
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

				<section class="section">
					<div class="container">
						<div class="content-center text-center mb-5">
							<h2 class="title" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
								On attend <span class="bold">que toi<span class="blue">.</span></span>
							</h2>
							<p class="mb-5">
								Explore tes possibilités de carrière.
							</p>

							<div class="job" data-aos="fade-up" data-aos-duration="650" data-aos-delay="50">
							 @foreach ($carrieres as $carriere )								
								<div class="mb-4 me-5 mb-md-0">
									<div class="job-category">{{$carriere->type}}</div>
									<div class="job-title">{{$carriere->poste}}</div>
									<div class="d-flex flex-wrap"><div class="me-4 mb-2 mb-md-0"><i class="bi-geo-alt me-2"></i>100% Hybride</div>
									<div><i class="bi-clock me-2"></i>Temps plein</div></div>
								</div>
								<div>
									<a href="/job-detail/{{$carriere->id}}" class="btn-core">Consulter</a>
								</div>
							 @endforeach
							</div>
 
							<div class="mt-5">
								<h3 class="fs-1">Ton poste idéal n'est pas affiché?</h3>
								<p class="mb-5">Ta candidature spontanée est toujours la bienvenue.</p>
								<form action="{{Route('candidature.store')}}" method="POST">
								 @csrf
									<div class="row">
										<div class="col-12 col-lg-6 mb-3">
											<label for="first-name">Prénom*</label>
											<input type="text"  class="input" name="prenom">
										</div>
										<div class="col-12 col-lg-6 mb-3">
											<label for="name">Nom de famille*</label>
											<input type="text"  class="input" name="nom">
										</div>
										<div class="col-12 col-lg-6 mb-3">
											<label for="email">Courriel*</label>
											<input type="email" class="input" name="courriel">
										</div>
										<div class="col-12 col-lg-6 mb-3">
											<label for="phone">Numéro de téléphone*</label>
											<input type="tel" class="input" name="telephone">
										</div>
										<div class="col-12 mb-3">
											<label for="curriculum-vitae">Envoie ton CV</label>
											<input type="file" class="input" name="cv">
										</div>
										<div class="col-12">
											<button class="btn-core" type="submit">Envoyer ma candidature</button>
										</div>
									</div>
								</form>
							</div>
						</div>


					</div>
				</section>
@endsection
				