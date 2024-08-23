  <!-- ======= Hero Section ======= -->
  <section id="contactUs" class="d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <!-- on small screens remove display-4 -->
            <h3 class="mb-4 mt-2 font-weight-bolder text-left"><span class="text-white"><strong>Harness the Power of 24/7 Answering Service for Your Success</strong></span></h3>
        </div>
        <div class="col-md-6">
            <p class="text-white text-left"> <i class="ri-phone-fill"></i> Contact Us</p>
            <div class="card">
                <div class="card-body">
                    <form id="contactForm">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1">Message:</label>
                            <textarea id="summernote" name="message" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section><!-- End Hero -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-7">
            <div class="footer-info">
              <h3>ITTS Services</h3>
              <p>
                {{-- 1475 Buford Dr. <br>
                Suite # 403-747 <br>
                Lawrenceville, <br> GA  30043
                <br> <br> --}}
                {{-- <strong>Phone:</strong> 469-775-9358 Ext. 102<br> --}}
                {{-- <strong>Email:</strong> info@ind.claims<br> --}}
              </p>
              {{-- <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div> --}}
            </div>
          </div>

          <div class="col-lg-3 col-md-7 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/') }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('contact') }}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe To Our Newsletter</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright {{ \Carbon\Carbon::now()->format('Y') }} <strong><span>ITTS Services</span></strong>. All Rights Reserved.
      </div>
    </div>
  </footer>
<!-- End Footer -->
