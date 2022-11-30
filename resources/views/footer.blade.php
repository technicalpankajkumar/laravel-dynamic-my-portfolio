 <!-- Footer Top Section -->
 <div class="row theme p-1 text-center" id="map">
    <div class="col-md-4 font-monospace mt-3">
      <p class="fs-4 fw-bold text-center">--Google Map--</p>
      <iframe class="rounded" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d19694.56085376808!2d82.91337878729146!3d26.041224115693275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjbCsDAxJzM4LjAiTiA4MsKwNTQnMTEuNiJF!5e0!3m2!1sen!2sin!4v1668011800904!5m2!1sen!2sin" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-4 mt-3">
      <p class="fs-3 fw-bold text-center font-monospace">--Contact Us--</p>
      <form action="{{route('message.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3 px-5">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-signature fa-xl"></i></span>
          <input type="text" name="name" class="form-control" placeholder="Enter your full name">
        </div>
        <div class="input-group mb-3 px-5">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope fa-xl"></i></span>
          <input type="email" name="email_id" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        {{-- <div class="input-group mb-3 px-5">
          <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa-solid fa-mobile fa-xl" ></i></span>
          <input type="number" name="number" class="form-control" placeholder="Enter your mobile number">
        </div> --}}
        <div class="mb-3 px-5">
          <textarea name="message" class="form-control" rows="3" placeholder="Write your message here...." style="resize: none"></textarea>
        </div>
        <div class="mb-3 px-5">
          <input type="submit" value="Send" name="submit" class="btn btn-md text-bg-primary" style="width:100%">
        </div>
      </form>
    </div>
    <div class="col-md-4 font-monospace mt-3">
      <p class="fs-4 fw-bold text-center">--Follow Social Media--</p>
      <div class="fs-5 text-center">
        @foreach ($socialIcons as $icon)
            <span><a href="{{$icon->socialmedialink}}" class="text-white"><i class="{{$icon->font_iconname}} fa-2x" aria-hidden="true"></i></a></span>&nbsp;
            @endforeach
      </div>
    </div>
  </div>
  <!-- Footer Top Section end -->

  <!-- Footer Bottom Section -->
  <div class="row blacktheme">
    <div class="col text-light fs-5 fw-normal font-monospace py-1 px-5">&copy; Copyright By <span class="orange"> Pankaj kumar </span>
    </div>
  </div>
  <!-- Footer Bottom Section end -->