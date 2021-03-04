<!-- Sidebar -->
<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                {{-- <li class="nav-item {{ Request::is('jurnal') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#home">
                        <i class="fas fa-columns"></i>
                        <p>Home Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('jurnal','homepage') ? 'show' : '' }}" id="home">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('jurnal') ? 'active' : '' }}">
                                <a href="{{ url('jurnal') }}">
                                    <span class="sub-item">Jurnal</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                <li class="nav-item {{ Request::is('kategori','barang') ? 'active' : '' }}">
                    <a data-toggle="collapse" href="#master">
                        <i class="fas fa-layer-group"></i>
                        <p>Master</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Request::is('kategori','barang') ? 'show' : '' }}" id="master">
                        <ul class="nav nav-collapse">
                            <li class="{{ Request::is('barang') ? 'active' : '' }}">
                                <a href="{{ url('barang') }}">
                                    <span class="sub-item">Barang</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('kategori') ? 'active' : '' }}">
                                <a href="{{ url('kategori') }}">
                                    <span class="sub-item">Kategori</span>
                                </a>
                            </li>
                        </ul>
                       
                    </div>
                </li>
                <li class="nav-item {{ Request::is('setting') ? 'active' : '' }}">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="flaticon-next"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->