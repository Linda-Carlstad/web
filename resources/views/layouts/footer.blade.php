<footer class="footer py-5" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3 mb-md-0 text-md-center">
                <a href="{{ url( '/' ) }}">
                    <img class="logo mb-md-4" src="{{ asset( 'img/logo.png') }}" alt="Linda Carlstad logo">
                </a>
                <br class="d-none d-md-block">
                <a href="https://kau.se">
                    <img class="logo" src="{{ asset( 'img/partner/kau.png') }}" alt="Karlstads Universitets logo">
                </a>
            </div>
            <div class="col-md-3">
                <p>
                <hr class="d-block d-md-none">
                <span>Linda Carlstad</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a href="mailto:info@lindacarlstad.se">info@lindacarlstad.se</a>
                <br>
                Universitetsgatan 2
                <br>
                651 68 Karlstad
                </p>
            </div>
            <div class="col-md-3">
                <p>
                <hr class="d-block d-md-none">
                <span>Föreningen</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a href="{{ route( 'contact' ) }}">Kontakta oss</a>
                <br>
                <a href="{{ route( 'about' ) }}">Om oss</a>
                <br>
                <a href="{{ route( 'programs' ) }}">Program</a>
                <br>
                <a href="{{ route( 'it' ) }}">It-kommitté</a>
                <br>
                <a href="{{ route( 'new-member' ) }}">Bli medlem</a>
                </p>
            </div>
            <div class="col-md-3">
                <p>
                <hr class="d-block d-md-none">
                <span>Länkar</span>
                <br class="d-block d-md-none">
                <hr class="d-none d-md-block">
                <a href="{{ route( 'partner' ) }}">Partners</a>
                <br>
                <a href="{{ route( 'song' ) }}">Sånger</a>
                <br>
                <a href="{{ route( 'document' ) }}">Dokument</a>
                <br>
                <a href="{{ route( 'news' ) }}">Nyheter</a>
                <br>
                <a href="http://tenta.lindacarlstad.se/linda">Tentor</a>
                </p>
            </div>
        </div>
        <div class="row social-footer-icons justify-content-center">
            <a target="_blank" href="https://www.facebook.com/linda.carlstad/"><i class="fab fa-facebook"></i></a>
            <br>
            <a target="_blank" href="https://www.linkedin.com/company/linda-carlstad/about/"><i class="fab fa-linkedin"></i></a>
            <br>
            <a target="_blank" href="https://www.instagram.com/lindacarlstad/"><i class="fab fa-instagram"></i></a>
            <br>
            <a data-toggle="tooltip" data-placement="top" title="@lindacarlstad"><i class="fab fa-snapchat"></i></a>
            <br>
            <a target="_blank" href="https://github.com/Linda-Carlstad"><i class="fab fa-github"></i></a>
            <br>
            <a target="_blank" href="https://discord.gg/xGZNRSD"><i class="fab fa-discord"></i></a>
            <br>
            <a target="_blank" href="https://www.reddit.com/r/lindacarlstad/"><i class="fab fa-reddit"></i></a>
            <br>
        </div>
    </div>
    <div class="footer-copyright">
        <br>
        <small>Copyright © 2019 - Alla rättigheter reserverade - Studentföreningen Linda Carlstad</small>
    </div>
    </div>
</footer>