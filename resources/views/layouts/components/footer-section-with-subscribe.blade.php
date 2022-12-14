<!-- ==========Footer-Section Starts Here========== -->
<footer class="footer-section">
    <div class="newslater-section padding-bottom">
        <div class="container">
            <div class="newslater-area">
                <div class="newslater-content padding-bottom padding-top">
                    <span class="cate">SUBSCRIBE TO Corpex Advisors</span>
                    <h3 class="title">To Get Exclusive Benefits</h3>
                       <form class="newslater-form" method="POST" action="{{ url('subscription') }}">
                        @csrf
                        <input type="text" placeholder="Enter Your Email Here" name="email" required>
                        <button type="submit">Subscribe</button>
                          @if(session()->has('success'))
                            <div class="form-group">
                                <span style="color: green;">{{ session()->get('success') }}</span>
                            </div>
                            @endif
                            @if($errors->any())
                            <div class="form-group" style="color: red; line-height: 1;">
                                <p>There were some problems with your input.</p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                              </div>
                            @endif
                    </form>
                </div>
                <div class="newslater-thumb">
                    <img src="{{ url('public/assets/images/footer/footer.png') }}" alt="footer">
                    <div class="coin-1">
                        <img src="{{ url('public/assets/images/footer/Coin_01.png') }}" alt="footer">
                    </div>
                    <div class="coin-2">
                        <img src="{{ url('public/assets/images/footer/Coin_02.png') }}" alt="footer">
                    </div>
                    <div class="coin-3">
                        <img src="{{ url('public/assets/images/footer/Coin_03.png') }}" alt="footer">
                    </div>
                    <div class="coin-4">
                        <img src="{{ url('public/assets/images/footer/Coin_04.png') }}" alt="footer">
                    </div>
                    <div class="coin-5">
                        <img src="{{ url('public/assets/images/footer/Coin_05.png') }}" alt="footer">
                    </div>
                    <div class="coin-6">
                        <img src="{{ url('public/assets/images/footer/Coin_06.png') }}" alt="footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="color: white;">
        <div class="footer-top footer">
            <!--<div class="logo col-md-3">
                <a href="index.html">
                    <img src="{{ url('public/assets/images/logo/footer-logo.png') }}" alt="logo">
                </a>
            </div> -->

            <div class="col-md-2 col-lg-3">
                <h3>Business Registrations </h3>
                <ul>
                    @foreach(\App\Models\Menu::list('business_registrations') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
                <h3>Fssai & Eating License </h3>
                <ul>
                     @foreach(\App\Models\Menu::list('fssai_and_eating_license') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2 col-lg-3">
                <h3>Government Registrations</h3>
                 <ul>
                    @foreach(\App\Models\Menu::list('government_registrations') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
                <h3>Government Licenses</h3>
                <ul>
                     @foreach(\App\Models\Menu::list('government_licenses') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Trademark IPR</h3>
                 <ul>
                    @foreach(\App\Models\Menu::list('ipr') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
                <h3>Trademark NGO</h3>
                <ul>
                     @foreach(\App\Models\Menu::list('ngo') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Business Conversion</h3>
                 <ul>
                    @foreach(\App\Models\Menu::list('business_conversion') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
                <h3>Business Closure </h3>
                <ul>
                     @foreach(\App\Models\Menu::list('business_closure') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-2">


                <h3>Secretarial & Events</h3>
                 <ul>
                    @foreach(\App\Models\Menu::list('secretarial_secretarial_and_events') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
                <h3>Event Based Secretarial & Events </h3>
                <ul>
                     @foreach(\App\Models\Menu::list('event_based_secretarial_and_events') as $key=> $menu )
                        <li><a href="{{ $menu->url }}">{{ $menu->name }}</a> </li>
                    @endforeach
                </ul>
            </div>           
            <!--<ul class="links">
                <li>
                    <a href="#0">About</a>
                </li>
                <li>
                    <a href="#0">Affiliates</a>
                </li>
                <li>
                    <a href="#0">Plans</a>
                </li>
                <li>
                    <a href="#0">FAQ</a>
                </li>
                <li>
                    <a href="#0">Privacy Policy</a>
                </li>
            </ul>-->
        </div>
<style type="text/css">
    .footer{
         align-items: normal;
    }
   .footer h3{
        color: #ED6450;
        font-size: 16px;
        margin-top: 20px;
        line-height: 1.7;
    }
    .footer ul li a{
        font-size: 14px;
        color: white;
        line-height:1.5;
    }
    .footer ul li {
        padding: 1px 0px;
    }
</style>        
        <div class="footer-bottom container">
            <div class="footer-bottom-area">
                <div class="left">
                    <p>&copy; 2020 <a href="http://corpexadvisors.com">Corpex Advisors</a> | All right reserved</p>
                </div>
                <ul class="social-icons">
                    <li>
                        <a href="#0">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0" class="active">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>		
                    <li>
                        <a href="#0">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ==========Footer-Section Ends Here========== -->