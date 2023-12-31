<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Masyarakat | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">MRHS</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Laporan' ? 'active' : '' }}" href="/laporan">Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Detail Laporan' ? 'active' : '' }}" href="/detailLaporan">Detail Laporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Tanggapan' ? 'active' : '' }}" href="/tanggapan">Tanggapan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Verifikasi' ? 'active' : '' }}" href="/verifikasi">Verifikasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $title === 'Profil' ? 'active' : '' }}" href="/profil">Profil</a>
              </li>
            </ul>
              <a href="/login"><button class="btn btn-success me-3" type="submit">Login</button></a>
              <a href="/register"><button class="btn btn-success me-3" type="submit">Register</button></a>
              <a href="/logout"><button class="btn btn-danger" type="submit">Logout</button></a>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        @yield('content')
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>