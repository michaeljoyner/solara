<nav class="main-nav">
    <div class="nav-list-holder">
        <ul>
            @if(Request::path() === "/" || Request::path() === 'home')
                <li class="current">Home</li>
            @else
                <a href="/"><li>Home</li></a>
            @endif
            @if(Request::path() === "services")
                <li class="current">Services</li>
            @else
                <a href="/services"><li>Services</li></a>
            @endif
            @if(Request::path() === "products")
                <li class="current">Products</li>
            @else
                <a href="/products"><li>Products</li></a>
            @endif
            @if(Request::path() === "quote")
                <li class="current">Quote</li>
            @else
                <a href="/quote"><li>Quote</li></a>
            @endif
            @if(Request::path() === "contact")
                <li class="current">Contact</li>
            @else
                <a href="/contact"><li>Contact</li></a>
            @endif
        </ul>
    </div>
</nav>