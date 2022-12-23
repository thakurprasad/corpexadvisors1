<!-- ==========Footer-Section Starts Here========== -->
<footer class="footer-section">
    <div class="newslater-section padding-bottom">
        <div class="container">
            <div class="newslater-area">
                <div class="newslater-content padding-bottom padding-top">
                    @include('components.get-a-quote')                      
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
            
            <div class="col-md-12 row startup-registration">
            <?php $menus = Helper::getAllMenuList(); 
            $i = 0;
            foreach ($menus as $key => $m1) {
                $url = url('startup-registration');
                $i++;
            ?>
            <div class="col-md-2 {{ ($i<3 ? ' col-lg-3 ' : '' ) }} ">
                <?php /*<p class="parent-main-menu"><a href="{{ $url .'/'.$m1['slug'] }}">{{ $m1['name'] }}</a></p> */ ?>
                
                <div class="row">
                    <?php foreach ($m1['childrens'] as $key2 => $m2) { ?>
                <p class="sub-menu"><a href="{{ $url .'/'. $m1['slug'] }}">{{$m2['name']}}</a></p>
                        <ul class="col-md-12">
                            <?php foreach ($m2['childrens'] as $key3 => $m3) { ?>
                            <li><a href="{{ $url . '/' . $m1['slug'] . '/' .$m3['slug']  }}">{{ $m3['name'] }}</a></li>
                            <?php } ?>
                        </ul>            
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>          

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
    .contact-form {
    padding: 13px 10px 20px;
    background: #ffffff;
    border-radius: 30px;
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