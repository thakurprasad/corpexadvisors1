
<!--<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <ul class="support-area">
                    <li>
                        <a href="#0"><i class="flaticon-support"></i>Support</a>
                    </li>
                    <li>
                        <a href="Mailto:info@corpexadvisors.com"><i class="flaticon-email"></i>info@corpexadvisors.com </a>
                    </li>
                     <li>
                        <a href="tel:+91 9811333133"><i class="fa fa-phone" aria-hidden="true"></i>+91 9811333133 </a>
                    </li>
                </ul>
            </div>
            <div class="col-6" >                            
                <ul class="cart-area">
                    <li>
                        <i class="flaticon-globe"></i>
                        <div class="select-area">
                            <select class="select-bar">
                                <option value="en">English</option>
                                <option value="bn">Bangla</option>
                                <option value="sp">Spanish</option>
                            </select>
                        </div>
                    </li>
                    <li>
                        <a href="#0"><i class="flaticon-shopping-cart"></i>My cart <span>0</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>-->
<div class="header-bottom">
    <div class="container">
        <div class="header-area">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ url('public/assets/images/logo/logo.png') }}" alt="logo">
                </a>
            </div>                      
                           

                <nav class="navbar navbar-expand-md navbar-light bg-light">  
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav"> 
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Us</a></li> 

                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">STARTUP REGISTRATION </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                   
                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Business Registrations</a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Business Registrations</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/private-limited-company-registration') }}">Private Limited Company Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/public-limited-company-registration') }}">Public Limited Company Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/one-person-company') }}">One Person Company</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/nidhi-company-registration') }}">Nidhi Company Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/producer-company-registration') }}">Producer Company Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/indian-subsidiary-company-registration') }}">Indian Subsidiary Company Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/limited-liability-partnership') }}">Limited Liability Partnership</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/partnership-firm-registration') }}">Partnership Firm Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-registrations/sole-proprietorship-registration') }}">Sole Proprietorship Registration</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Fssai & Eating License</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/fssai-license') }}">FSSAI License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/fssai-state-license') }}">FSSAI State License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/central-fssai-license') }}">Central FSSAI License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/fssai-annual-return') }}">FSSAI Annual Return</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/fssai-license-renewal') }}">FSSAI License Renewal</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/fssai-eating-license/eating-house-license') }}">Eating House License</a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Government Registrations</a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Government Licenses</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/psara-license') }}">PSARA License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/drug-license') }}">Drug License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/ayush-license') }}">AYUSH License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/manufacturing-drug-license') }}">Manufacturing Drug License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/retail-drug-license') }}">Retail Drug License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/wholesale-drug-license') }}">Wholesale Drug License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/trade-license') }}">Trade License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/health-trade-license') }}">Health Trade License</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-licenses/iso-registration') }}">ISO Registration</a></li> 
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Government Registration</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/apeda-registration') }}">APEDA Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/rera-registration') }}">RERA Registration</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/rera-registration-for-agents') }}">RERA Registration for Agents</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/rera-registration-for-promoters') }}">RERA Registration For Promoters</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/noc-pollution-control-board') }}">NOC Pollution Control Board</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/fire-department-noc') }}">Fire Department NOC</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/building-noc') }}">Building NOC</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/delhi-pollution-control-committee') }}">Delhi Pollution Control Committee</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/government-registration/uttar-pradesh-pollution-control-board') }}">Uttar Pradesh Pollution Control Board</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">TRADEMARK & NGO</a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">IPR</a>
                                                <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-registration') }}">Trademark Registration</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-classes-finder') }}"> Trademark Classes Finder</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-renewal') }}">Trademark Renewal</a></li>                                    
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-search') }}">Trademark Search</a></li>                                    
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/copyright-disclaimer') }}">Copyright Disclaimer</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-objection') }}">Trademark Objection</a></li>
                                                <li><a class="dropdown-item" href="{{ url('/trademark-ipr/trademark-rectification') }}">Trademark Rectification</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">NGO</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/ngo-registration') }}">NGO Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/trust-registration') }}">Trust Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/society-registration') }}">Society Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/section-8-company-registration') }}">Section 8 Company Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/fcra-registration') }}">FCRA Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/80g-and-12a-registration') }}">80G and 12A Registration</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/trademark-ngo/12aa-registration') }}">12AA Registration</a></li> 
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Business Conversion</a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Business Conversion</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/business-conversion/sole-proprietorship-to-pvt-ltd-company') }}">Sole Proprietorship to Pvt. Ltd. Company</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-conversion/conversion-of-pvt-ltd-to-public-limited') }}">Conversion of Pvt. Ltd. to Public Limited</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-conversion/conversion-of-llp-to-private-company') }}">Conversion of LLP to Private Company</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/business-conversionpartnership-firm-into-pvt-ltd-company') }}">Partnership Firm into Pvt. Ltd. Company</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Business Closure</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/business-closure/winding-private-limited-company') }}">Winding Private Limited Company</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/business-closure/closing-a-limited-liability-partnership') }}">Closing a Limited Liability Partnership</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/business-closure/revival-of-struck-off-companies') }}">Revival of Struck Off Companies</a></li>  
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">SECRETARIAL & EVENT s</a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Secretarial SECRETARIAL & EVENT s</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/secretarial-events/annual-compliance-of-a-pvt-ltd-company') }}">Annual Compliance of a Pvt Ltd Company</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/secretarial-events/annual-filing-for-llp') }}">Annual Filing for LLP</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/secretarial-secretarial-events/nidhi-company-compliance') }}">Nidhi Company Compliance</a></li>
                                                    <li><a class="dropdown-item" href="{{ url('/secretarial-events/section-8-company-compliance') }}">Section 8 Company Compliance</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Event Based SECRETARIAL & EVENT's</a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="{{ url('/event-based-secretarial-events/change-in-object-clause') }}">Event Based Compliances in a Company</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/event-based-secretarial-events/change-in-object-clause') }}">Change in Object Clause</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/event-based-secretarial-events/appointment-and-resignation-of-directors') }}">Appointment and Resignation of Directors</a></li> 
                                                    <li><a class="dropdown-item" href="{{ url('/event-based-secretarial-events/change-in-name-clause') }}">Change in Name Clause</a></li>  
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/affiliate') }}">Affiliate</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/contact-us') }}">Contact Us</a></li>
                           @if(!\Auth::user())
                             <li class="pr-0">
                                <a href="{{ url('login') }}" class="custom-button">Join Us</a>
                            </li> 
                            @else
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i></a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">   
        <li> <a class="nav-link" href="{{ url('/agents/add') }}">{{\Auth::user()->name}} </a></li> 
        <li class="">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
        </li>
    </ul>
</li>  
                     @endif                              
                        </ul>
                    </div>
                </nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>                               

            <div class="header-bar d-lg-none navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </div>
</div>