<li class="nav-item">
    <a href="{{ route('oderdetails.index') }}"
       class="nav-link {{ Request::is('oderdetails*') ? 'active' : '' }}">
        <p>Oderdetails</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('scorders.index') }}"
       class="nav-link {{ Request::is('scorders*') ? 'active' : '' }}">
        <p>Scorders</p>
    </a>
</li>


