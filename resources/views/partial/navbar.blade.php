



<div class="side-bar">
  <div class="header">
      <a href="/dashboard">
          <img src="/img/rtee_logo1.png" alt="" height="100px">
      </a>
  </div>
  <ul>
      <li><a href="/dashboard/listResident"><i class='bx bx-list-ul'></i> Daftar Warga</a></li>
      <li><a href="/dashboard/addResident"><i class='bx bx-message-square-add'></i> Tambah Warga</a></li>
      <li><a href="/dashboard/listFamily"><i class='bx bx-list-ul'></i> Daftar Keluarga</a></li>
      <li><a href="/dashboard/addFamily"><i class='bx bx-message-square-add'></i> Tambah Keluarga</a></li>
  </ul>
  <div class="logout">
      <form method="post" action="/logout">
          @csrf
          <button class="w-15 btn btn-lg text-bold rounded keluar " type="submit"><i class='bx bx-log-out' ></i> Keluar</button>
      </form>
  </div>
</div>



{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="/dashboard/listResident">List Warga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/addResident">Tambah Warga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/listFamily">List KK</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/addFamily">Tambah KK</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav> --}}