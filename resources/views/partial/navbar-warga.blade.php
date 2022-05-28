<div class="side-bar">
  <div class="header">
      <a href="/warga-dashboard">
          <img src="/img/rtee_logo1.png" alt="" height="100px">
      </a>
  </div>
  <ul>
      <li><a href="/warga/list-resident"><i class='bx bx-list-ul'></i> Daftar Warga</a></li>
      <li><a href="/warga/list-family"><i class='bx bx-list-ul'></i> Daftar Keluarga</a></li>
  </ul>
  <div class="logout">
      <form method="post" action="/warga-logout">
          @csrf
          <button class="w-15 btn btn-lg text-bold rounded keluar " type="submit"><i class='bx bx-log-out' ></i> Keluar</button>
      </form>
  </div>
</div>


{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/warga-dashboard">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="/warga/list-resident">List Warga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/warga/list-family">List KK</a>
          </li>   
        </ul>
      </div>
    </div>
  </nav> --}}