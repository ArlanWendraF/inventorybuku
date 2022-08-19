<x-app-layout>

</x-app-layout>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Tambah Buku</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column ">
                <li class="nav-item">
                  <a class="nav-link text-light active" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="/daftarbuku">
                    <span data-feather="file"></span>
                    Daftar Buku
                  </a>
                </li>

              </ul>
            </div>
          </nav>

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Form Tambah Buku</h1>
              <div class="btn-toolbar mb-2 mb-md-0">

              </div>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-5">


                        <form method="POST" action="{{url('daftarbuku/')}}">
                          @csrf
                          <div class="mb-1">
                          <div class="mb-2">
                            <label for="kodebuku" class="form-label">Kode Buku</label>
                            <input type="number" class="form-control @error('kodebuku')is-invalid
                             @enderror" id="kodebuku" placeholder="Masukan Kode Buku" name="kodebuku" value="{{ old('kodebuku') }}">
                            @error('kodebuku')
                             <div class="invalid-feedback">{{$message}}</div>
                             @enderror
                            </div>

                            <div class="mb-1">
                                <label for="kategori" class="form-label">Kategori</label>
                                  <select name="kategori" id="kategori" class="form-select @error('kategori')is-invalid
                                  @enderror"   >
                                    <option value="Pilih">Pilih Kategori</option>
                                    <option value="Novel" >Novel</option>
                                    <option value="Komik" >Komik</option>
                                    <option value="Biografi">Biografi</option>
                                    <option value="Kamus" >Kamus</option>
                                    <option value="Ensiklopedia" >Ensiklopedia</option>
                                    <option value="Dongeng" >Dongeng</option>
                              </select>
                            </div>

                          <div class="mb-2">
                            <label for="judulbuku" class="form-label">Judul Buku</label>
                            <input type="text" class="form-control @error('judulbuku')is-invalid
                            @enderror" id="judulbuku" placeholder="Masukan Judul Buku" name="judulbuku" value="{{ old('judulbuku') }}">
                            @error('judulbuku')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>

                          <div class="mb-2">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control @error('jumlah')is-invalid
                            @enderror" id="jumlah" placeholder="Masukan Jumlah" name="jumlah" value="{{ old('jumlah') }}">
                            @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                          </div>

                          <button type="submit" class="btn btn-warning my-3"> Tambah Buku</button>
                          <button type="reset" class="btn btn-info my-3"> Reset</button>
                        </form>
                        <br>
                        </div>
                    </div>
                </div>
            </div>
            <canvas class="my-4 w-100" id="myChart" width="900" height="100"></canvas>

          </main>
        </div>
      </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

