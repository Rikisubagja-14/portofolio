
    <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
       
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
                <h4>Riki subagja</h4>
                @foreach ($summar as $lan)
                    <p><em>{{ $lan->title_sumary }}</em></p>
                    <p>
                    <ul>
                        <li>{{ $lan->city }}</li>
                        <li>{{ $lan->phone }}</li>
                        <li>{{ $lan->email }}</li>
                    </ul>
                    </p>
                @endforeach

            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
                @foreach ($educ as $edu )
                <h4>TEKNIK INFORMATIKA</h4>
                <h5>{{$edu->date_of_entry}} | {{$edu->out_date}}</h5>
                <p><em>{{$edu->name_university}}</em></p>
                <h4>SEJARAH KAMPUS</h4>
                <p>{{$edu->title}}</p>
                @endforeach
            </div>
        </div>
        {{-- <div class="col-lg-6">
        <h3 class="resume-title">Professional Experience</h3>
        <div class="resume-item">
            <h4>Senior graphic design specialist</h4>
            <h5>2019 - Present</h5>
            <p><em>Experion, New York, NY </em></p>
            <p>
            <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and
                    production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of
                    the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and
                    accuracy of the design</li>
                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000
                </li>
            </ul>
            </p>
        </div>
        <div class="resume-item">
            <h4>Graphic design specialist</h4>
            <h5>2017 - 2018</h5>
            <p><em>Stepping Stone Advertising, New York, NY</em></p>
            <p>
            <ul>
                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and
                    advertisements).</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers
                </li>
            </ul>
            </p>
        </div>
    </div> --}}
    </div>

