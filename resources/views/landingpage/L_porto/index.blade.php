{{-- <div class="row portfolio-container">
        @foreach ($portofolio as $portof)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="{{ Storage::url('portofolio/') . $portof->image_project }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $portof->name_app }}</h4>
                       
                        <div class="portfolio-links">
                            <a href="{{ Storage::url('portofolio/') . $portof->image_project }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox"
                                title="{{ $portof->name_app }}"><i class="bx bx-plus"></i></a>
                            <a href="{{route('detail.index')}}" data-gallery="portfolioDetailsGallery"
                                data-glightbox="type: external" class="portfolio-details-lightbox"
                                title="Portfolio Details"><i class="bx bx-link"></i></a>
                                
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

<!-- ======= Portfolio Details ======= -->
<div id="portfolio-details" class="portfolio-details">

    <br>
    <br>
    <br>
    <div class="container">
        <h2 class="portfolio-title">
            <div class="section-title">
                <h2>🌀 PORTOFOLIO 🌀</h2>
                <br>
                <p>My Works</p>
            </div>
            <div class="dropdown">
              <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownCenterBtn" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  DOWNLOAD CV-RESUME
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownCenterBtn">
                  <li><a class="dropdown-item" href="{{ asset('cvRiki.pdf') }}" target="_blank">resume Indonesia</a></li>
                  <li><a class="dropdown-item" href="{{ asset('cvRikienglish.pdf') }}" target="_blank">resume English</a>
                  </li>
              </ul>
          </div>
        </h2>
       
        @foreach ($portofolio as $portof)
            <div class="section-title">
                <h2>🟠 {{ $portof->name_app }} 🟠</h2>
            </div>
            <div class="row portfolio-title">

                <div class="col-lg-8">


                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="{{ Storage::url('portofolio/') . $portof->image_project }}"
                                    alt="" style="height: 300px;">
                            </div>

                            {{-- <div class="swiper-slide">
                                <img src="{{ asset('tempassetlanding/assets/img/portfolio/portfolio-details-2.jpg') }}"
                                    alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{ asset('tempassetlanding/assets/img/portfolio/portfolio-details-3.jpg') }}"
                                    alt="">
                            </div> --}}

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <div class="col-lg-4 portfolio-info">
                    <ul>
                        <li><strong>Category</strong>: {{ $portof->categoty }}</li>
                        <li><strong>Client</strong>: {{ $portof->city_clint }}</li>
                        <li><strong>Project date</strong>:{{ $portof->project_date }}</li>
                        <li><strong>Project URL</strong>: <a href="#">{{ $portof->project_url }}</a></li>
                    </ul>

                    {{-- <p>
                  Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                </p> --}}
                </div>

            </div>
        @endforeach

    </div>
</div>
<!-- End Portfolio Details -->
