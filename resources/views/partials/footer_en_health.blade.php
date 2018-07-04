<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-logo">
                <a href='{{ route("Home") }}' class="health">
                    <img src="{{asset('assets/img/logo-02.png')}}" class="img-responsive" title="moility">
                </a>
                <a href='{{ route("Autoclinic") }}'>
                    <img src="{{asset('assets/img/logo-indexc%20(2).png')}}" class="img-responsive" title="Autoclinic">
                </a>
            </div>
            <div class="footer-copyright">
                <p>© {{ date('Y') }} Alsafwa. All Rights Reserved</p>
            </div>
            <div class="footer-social">
                <a href="https://www.twitter.com" class="social">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="https://www.facebook.com" class="social">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="https://plus.google.com/" class="social">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="https://youtube.com/" class="social">
                    <i class="fa fa-youtube-play"></i>
                </a>
                <a href="#" class="social">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="#" class="social">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
            <div class="footer-email">
                <div class="input-group">
                    <input type="text" class="form-control" id="subemail" placeholder="E-mail">
                    <span class="input-group-btn">
                    <button onclick="saveSub()" class="btn btn-default">
                      subscribe to newsletter 
                      <i class="fa fa-angle-right"></i>
                    </button>
                  </span>
                </div><!-- /input-group -->
            </div>
        </div>
    </div>
</footer>