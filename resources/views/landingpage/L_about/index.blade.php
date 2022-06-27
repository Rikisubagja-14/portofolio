<div class="section-title">
    <h2>About</h2>
    <p>Learn more about me</p>
</div>

<div class="row">
    <div class="col-lg-4" data-aos="fade-right">
        <img src="{{ asset('tempassetlanding/assets/img/wsdriki.png') }}" class="img-fluid" alt="">
    </div>
    @foreach ($aboutt as $abt)
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>{{ $abt->name_about }}</h3>
            <p class="fst-italic">{{ $abt->desc_about }}</p>
            <div class="row">
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                            <span>{{ $abt->birthday }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <br>
                            <span>{{ $abt->website }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $abt->phone }}</span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $abt->city }}</span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $abt->age }}</span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                            <span>{{ $abt->degree }}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $abt->email }}</span>
                        </li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                            <span>{{ $abt->caregory_freelance }}</span></li>
                    </ul>
                </div>
            </div>
            <p>{{ $abt->title }}</p>
        </div>
    @endforeach

</div>
