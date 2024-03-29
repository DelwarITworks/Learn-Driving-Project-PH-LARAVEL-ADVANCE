@php
$setting = App\Models\Admin\Setting::first();
@endphp
  <footer class="footer">
    <div class="footer_top">
      <div class="container-fluid">
        <div class="row gy-5">

          <div class="col-lg-4 col-12 col-sm-6">
            <div class="footer_logo">
              <div class="logo">
                <h2 class="text-light">@if($setting) {{ $setting->title }} @endif</h2>
              </div>
              <p>@if($setting) {{ $setting->meta_description }} @endif</p>
              <div class="footer_icon">
                <a href="@if($setting) {{ $setting->fb_link }} @endif"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="@if($setting) {{ $setting->twitter_link }} @endif"><i class="fa-brands fa-twitter"></i></a>
                <a href="@if($setting) {{ $setting->instagram_link }} @endif"><i class="fa-brands fa-instagram"></i></a>
                <a href="@if($setting) {{ $setting->youtube_link }} @endif"><i class="fa-brands fa-youtube"></i></a>
                <a href="@if($setting) {{ $setting->email }} @endif"><i class="fa-solid fa-globe"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <div class="footer_link">
              <h4>Quick Links</h4>
              <ul class="footer_link_list">
                <li><a href="#">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">services</a></li>
                <li><a href="#">document</a></li>
                <li><a href="#">objection</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-6">
            <div class="footer_link">
              <h4>Courses</h4>
              <ul class="footer_link_list">
                <li><a href="#">Driving lessons</a></li>
                <li><a href="#">Theory Test</a></li>
                <li><a href="#">Intensive course</a></li>
                <li><a href="#">Practical Test</a></li>
                <li><a href="#">Quize Test</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-12 col-sm-6">
            <div class="footer_add">
              <h4>Address</h4>
              <div class="add_box">
                <div class="add">
                  <div class="row">
                    <div class="col-1">
                      <i class="fa-solid fa-map-location"></i>
                    </div>
                    <div class="col-11">
                      <a href="https://www.google.com/maps/place/Delwar+IT/@24.8950491,91.8641504,17z/data=!3m2!4b1!5s0x3750552b026861c1:0xaaa3d67e606742af!4m5!3m4!1s0x375055acacce36e7:0xc262199c88f09443!8m2!3d24.8950443!4d91.8683776"
                        target="_blank">@if($setting) {{ $setting->address }} @endif</a>
                    </div>
                  </div>
                </div>
                <div class="add">
                  <div class="row">
                    <div class="col-1">
                      <i class="fa-solid fa-phone-flip"></i>
                    </div>
                    <div class="col-11">
                      <span>@if($setting) {{ $setting->phone }} @endif</span>
                    </div>
                  </div>
                </div>
                <div class="add">
                  <div class="row">
                    <div class="col-1">
                      <i class="fa-solid fa-envelope-open"></i>
                    </div>
                    <div class="col-11">
                      <a href="#">@if($setting) {{ $setting->email }} @endif</a>
                    </div>
                  </div>
                </div>
                <div class="add">
                  <div class="row">
                    <div class="col-1">
                      <i class="fa-solid fa-satellite-dish"></i>
                    </div>
                    <div class="col-11">
                      <span>@if($setting) {{ $setting->hotline }} @endif</span>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </footer>