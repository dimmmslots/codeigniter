<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">
    <a class="navbar-brand" href="#">Dimas Adi Pangestu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <a class="nav-link <?= $navState[0];?>" aria-current="page" href="/pages/">Home</a>
        <a class="nav-link <?= $navState[1];?>" href="/pages/about">About</a>
        <a class="nav-link <?= $navState[2];?>" href="/kegiatandimas">Kegiatan</a>
        <a class="nav-link <?= $navState[3];?>" href="/kegiatandimas/input">Input Kegiatan</a>
      </ul>
    </div>
  </div>
</nav>