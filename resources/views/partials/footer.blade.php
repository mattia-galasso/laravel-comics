<footer>
    <section id="DCFooter">
      <div class="container">
        <div id="footerMenu">
            <div id="list-box">
                {{-- DC COMICS --}}
                <div class="list-group">
                    <div class="listTitle">DC COMICS</div>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
        
                {{-- SHOP --}}
                <div class="list-group">
                    <div class="listTitle">SHOP</div>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                    
                    {{-- DC --}}
                <div class="list-group">
                    <div class="listTitle">DC</div>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
        
                {{-- SITES --}}
                <div class="list-group">
                    <div class="listTitle">SITES</div>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            {{-- LOGO FOOTER --}}
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="Logo DC" id="logoFooter" />
        </div>
      </div>
    </section>

    {{-- SOCIAL --}}
    <section id="socialSection">
      <div class="container" id="socialBox">
        <button class="btn btn-outline-primary" id="btnSignUp">
          SIGN-UP NOW!
        </button>
        <section>
            <span>FOLLOW US</span>
            <ul id="socialList">
            <li>
              <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Logo Social" />
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Logo Social" />
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="Logo Social" />
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Logo Social" />
            </li>
            <li>
              <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Logo Social" />
            </li>
      </ul>
        </section>
      </div>
    </section>
</footer>