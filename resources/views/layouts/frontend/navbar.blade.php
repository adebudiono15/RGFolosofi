<div id="header">
  <nav class="navbar header navbar-expand-lg navbar-light bg-light shadow-sm fixed-top" id="nav">
      <div class="container">
          <a class="navbar-brand" href="{{ route('index') }}">RG FOLOSOFI</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item ml-2 mr-2">
                      <a class="nav-link" href="#produksi">Produk Konveksi</a>
                  </li>
                  <li class="nav-item ml-2 mr-2">
                      <a class="nav-link" href="#order">Cara Order</a>
                  </li>
                  <li class="nav-item ml-2 mr-2">
                      <a class="nav-link" href="#portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item ml-2 mr-2">
                      <a class="nav-link" href="#tentang">Tentang</a>
                  </li>
                  <a href="{{ $wa }}" target="_blank" style="text-decoration: none;">
                  <button class="btn btn-sm btn-order ml-2">Fast Order</button>
                  </a>
              </ul>
          </div>
      </div>
  </nav>
</div>
