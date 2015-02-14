 <footer>
    <ul class="footer-nav-list">
        <li>{!! link_to_route('home', 'home') !!}</li>
        <li>{!! link_to_route('services', 'services') !!}</li>
        <li>{!! link_to_route('products', 'products') !!}</li>
        <li>{!! link_to_route('quote', 'quote') !!}</li>
        <li>{!! link_to_route('contact', 'contact') !!}</li>
    </ul>
    <img src="images/solara_logo_wh2.png" alt="logo" width="200" height="60" class="footer-logo">
    <img src="{{ asset('images/image-strip-red-line.svg') }}" alt="image strip" class="footer-strip"/>
    <p class="local-listing" itemscope itemtype="http://schema.org/LocalBusiness">
        <span itemprop="name">Solara Asia</span>
        <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">3F-4, No 215, Sec 2, ChengDe Rd,</span>
            <span itemprop="addressLocality">Datong Dist, Taipei City,</span>
            <span itemprop="addressCountry">Taiwan</span>
        </span>
    </p>
</footer>