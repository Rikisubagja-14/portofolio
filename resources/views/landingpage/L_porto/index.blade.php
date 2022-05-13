<div class="container">

    <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
    </div>

    <div class="row portfolio-container">
        @foreach ($portofolio as $portof)
            <div class="col-lg-4 col-md-6 portfolio-item">
                <div class="portfolio-wrap">
                    <img src="{{ Storage::url('portofolio/') . $portof->image_project }}" class="img-fluid"
                        alt="">
                    <div class="portfolio-info">
                        <h4>{{ $portof->name_app }}</h4>
                        {{-- <p>App</p> --}}
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

    </div>

</div>
