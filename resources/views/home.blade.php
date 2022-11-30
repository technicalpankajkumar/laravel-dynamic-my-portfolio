    <!--Home Page-->
    <div class="row theme p-4 justify-content-around">
        <div class="col-md-5 col-sm-10 pe-md-5 font-monospace fw-bold">
          <h1>My Name is <span class="orange">{{$homeProfile[0]->name}}</span><br>I am <span class="orange">{{$homeProfile[0]->web_name}}</span></h1>
          <p class="fs-5 fw-normal font-monospace mt-3 " style="text-align: justify;">{{$homeProfile[0]->description}}</p>
          <button class="btn btn-lg btn-warning mt-3 btnColor"><a href="#projects" class="text-decoration-none text-white">My Projects</a></button>
          <p class="fs-5 fw-normal font-monospace mt-4">Follow Me One Social Medio -----</p>
          <div class="fs-5">
            @foreach ($socialIcons as $icon)
            <span><a href="{{$icon->socialmedialink}}" class="text-white"><i class="{{$icon->font_iconname}} fa-2x" aria-hidden="true"></i></a></span>&nbsp;
            @endforeach
          </div>
        </div>
        <div class="col-md-5 col-sm-12 font-monospace p-1">
          <img src="{{url('images/homeprofile',$homeProfile[0]->image)}}" class="img-fluid img-thumbnail" style="max-height:450px">
        </div>
      </div>
      <!-- Home Page end -->
  
      <!-- middle buttons -->
      <div class="row justify-content-between mt-3 px-1">
        <div class="col-md-5 px-5">
          <span class="fs-3 font-monospace white">Check my PHP Developer Roadmap</span><br>
          <h2 class="font-monospace fw-bold white">Start Learning<br/>PHP For FREE</h2>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4 p-5 ">
          <button class="btn btn-lg btn-warning btnColor font-monospace">View GitHub</button>&nbsp;&nbsp;
          <button class="btn btn-lg btn-warning btnYoutube font-monospace">View Youtube</button>
        </div>
      </div>
      <!-- middle buttons end -->
  
      <!-- About Section -->
      <div class="row theme p-4 justify-content-between" id="about-us">
        <div class="col-md-5 py-2 ps-5">
          <img src="{{url('images/aboutprofile',$aboutProfile[0]->image)}}" class="img-fluid img-thumbnail mt-3" style="max-height:400px">
        </div>
        <div class="col-md-5">
          <h5 class="border-start border-warning mt-3"style="color:gray">&nbsp;"{{$aboutProfile[0]->tagline}}"</h5>
          <h2 class="font-monospace fw-bold fs-1 mt-4">About Me</h2>
          <p class="textAlignment font-monospace fs-5 pe-5" style="color: gray;">{{$aboutProfile[0]->description}}</p>
          <!-- <p class="textAlignment font-monospace fs-5 pe-5" style="color:gray">In 2022 I decided to create a YouTube channel and share my knowledge. My channel is mostly focused on PHP and Java Programing and HTML, CSS, Javascript, BOOTSTRAP, JQUERY, AJAX, LARAVEL. My content is mostly focused on practical examples and projects.</p> -->
          <a href="{{$aboutProfile[0]->link}}" target="_blank" class="btn btn-lg btn-warning btnYoutube font-monospace mb-3">View Youtube Channel</a>
        </div>
      </div>
      <!-- About Section End -->
  
      <!-- Project Section -->
      <div class="row blacktheme" id="projects">
        <div class="col-md-12 mb-2">
          <h1 class="white text-center font-monospace mt-5 fw-bold">My All Projects</h1>
          <p class="text-center font-monospace fs-4" style="color: gray">You learn most by building projects. Go <br>ahead and build something right now.</p>
          <div class="row justify-content-center" >
            <div class="col-md-8 text-center mb-4">
              <a href="{{route('porfolio')}}"><div class="btn btn-lg btn-warning btnYoutube font-monospace mb-2">All Projects</div></a>
             @foreach ($projectFrameworks as $projectFramework)
             <a href="{{route('porfolio',$projectFramework->framework_id)}}"><div class="btn btn-lg btn-warning btnYoutube font-monospace mb-2">{{$projectFramework->frameworks->name}}</div></a>
             @endforeach
            </div>
          </div>
          <!-- Card Section -->
          <div class="row justify-content-center" style="z-index:1 !important">
            <div class="col-md-10">
              <div class="row justify-content-center">
              @forelse ($projectData as $project)
              <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 rounded card  p-2 mx-2 mb-3 ">
                <figure class="text-center">
                  <img src="{{url('projects/',$project->image)}}" class="img-fluid img-thumbnail">
                  <caption>
                    <p class="py-3">{{$project->description}}</p>
                    <div class="row justify-content-center">
                      <div class="col-8 btn btn-lg btn-warning btnColor"><a href="{{$project->link}}" class="text-decoration-none text-white" target="_blank">View Details</a></div>
                    </div>
                  </caption>
                </figure>
              </div>
              @empty
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 rounded card  p-2 mx-2 mb-5 ">
                  <figure>
                    <img src="{{asset('assts/img/php.png')}}" class="img-fluid img-thumbnail">
                    <caption>
                      <p class="py-3">You learn most by building projects. Go
                      ahead and build something right now.</p>
                      <div class="row justify-content-center">
                        <div class="col-8 btn btn-lg btn-warning btnColor" style="border:2px solid white">View Details</div>
                      </div>
                    </caption>
                  </figure>
                </div>
              @endforelse
              </div>
            </div>
          </div>
          <!-- Card Section End -->
        </div>
      </div>
      <!-- Project Section End -->
  
      <!-- Video Tutorial Section -->
      <div class="row justify-content-center" id="coding-video">
        <div class="col-md-10">
          <h2 class="white text-center font-monospace mt-5 fw-bold">Video Tutorials</h2>
          <p class="text-center font-monospace fs-4" style="color: gray">You learn most by building projects. Go<br>ahead and build something right now.</p>
          <!-- Card Section Start -->
          <div class="row justify-content-center">
            @forelse ($videoData as $video)
            <div class=" col-md-3 col-sm-6 rounded bg-light text-center mx-2 my-2 ">
              <figure>
                <iframe class="img-fluid img-thumbnail" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <caption>
                  <p class="py-3">{{$video->description}}</p>
                  <div class="row justify-content-center">
                    {{-- <div class="col-8 btnColor font-monospace">{{$video->name}}</div> --}}
                  </div>
                </caption>
              </figure>
            </div>
            @empty
            <div class=" col-md-3 col-sm-6 rounded bg-light text-center mx-2 my-2 ">
              <figure>
                <iframe class="img-fluid img-thumbnail" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <caption>
                  <p class="py-3">You learn most by building projects. Go ahead and build something right now.</p>
                  <div class="row justify-content-center">
                    <div class="col-8 btn btn-lg btn-warning btnColor font-monospace">Watch video</div>
                  </div>
                </caption>
              </figure>
            </div>
            @endforelse
          </div>
          <!-- Card Section End -->
  
          <div class="row justify-content-center my-5 px-5">
            <button class="col-md-3 col-sm-6 btn btn-warning btn-lg btnYoutube text-center fw-bold font-monospace" data-bs-toggle="modal" data-bs-target="#btnModal">-Watch Demo video-</button>
          </div>
        </div>    
      </div>
      <!-- Video Tutorial Section End -->
  
      @include('components.js-modal')