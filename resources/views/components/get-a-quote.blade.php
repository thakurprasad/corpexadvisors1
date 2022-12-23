 <h4 class="title">Get A Quote </h4>
<form class="contact-form" id="contact_form_submit" method="POST" action="{{ url('/contact-us') }}">
    @csrf
    <div class="form-group">
        <label for="name">First name</label>
        <input type="text" id="name" placeholder="Enter Your Name" required name="name">
    </div>
    <div class="form-group">
        <label for="surename">Mobile</label>
        <input type="tel" id="mobile" placeholder="Enter your Mobile" required name="mobile">
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" id="email" placeholder="Enter your email" required name="email">
    </div>
    <div class="form-group">
        <label for="query">How can we help</label>
        <textarea name="query" id="query" placeholder="Enter your message"></textarea>
    </div>
    
    @if(Request::session()->has('success'))
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

    <div class="form-group">
        <input type="submit" value="Send Message">
    </div>
</form>