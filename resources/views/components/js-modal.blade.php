<!-- Modal row -->
<div class="row">
    <div class="modal fade" id="btnModal" tabindex="-1" aria-labelledby="btnModalLabel" aria-hidden="true" style="text-align:center">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header font-monospace">
            <h5 class="modal-title  fw-bold" id="btnModal">Watch Intro Video</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body theme">
            <p class="p-0 m-0">
            <iframe class="img-fluid img-thumbnail" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </p>
             <button class="btn btn-lg btn-warning btnYoutube font-monospace fw-bold mt-3"><a href="https://www.youtube.com/c/TechnicalPankajKumar7/videos" style="text-decoration: none; color: white;">Visit Channel</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Model row end -->
  <!-- Modal row -->
<div class="row">
    <div class="modal fade" id="login-Model" tabindex="-1" aria-labelledby="btnModalLabel" aria-hidden="true" style="text-align:center">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header font-monospace">
            <p class="modal-title fw-bold" id="login-Model">Login Now</p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body theme text-start">
            <form action="{{route('admin_Login')}}" method="POST" name="loginForm" enctype="multipart/from-data">
              @csrf
                <div class="mb-3">
                  <label for="login-email" class="form-label">Enter email ID</label>
                  <input type="email" name="email" class="form-control" id="login-email" required>
                  <div id="login-email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="mobile-number" class="form-label">Enter mobile number</label>
                  <input type="number" class="form-control" id="mobile-number" name="mobile_number" pattern="[0-9]{10}">
                </div>
                <div class="mb-3">
                  <label for="login-password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="login-password" name="password" required>
                </div>
                {{-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                <center><input type="submit" value="Login" name="submit" class="btn btn-warning btn-lg btnColor font-monospace"></center>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Model row end -->