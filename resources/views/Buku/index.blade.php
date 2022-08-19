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

    <title>Daftar Buku</title>
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
              <h1 class="h2">Daftar Buku</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="dropdown">
                  <button class="btn btn-warning dropdown-toggle"  type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Kategori 
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a name="semua" class="dropdown-item" href="/daftarbuku">Semua</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a name="novel" class="dropdown-item" href="/daftarbuku/novel">Novel</a></li>
                    <li><a name="komik" class="dropdown-item" href="/daftarbuku/komik">Komik</a></li>
                    <li><a name="biografi" class="dropdown-item" href="/daftarbuku/biografi">Biografi</a></li>
                    <li><a name="kamus" class="dropdown-item" href="/daftarbuku/kamus">Kamus</a></li>
                    <li><a name="ensiklopedia" class="dropdown-item" href="/daftarbuku/ensiklopedia">Ensiklopedia</a></li>
                    <li><a name="dongeng" class="dropdown-item" href="/daftarbuku/dongeng">Dongeng</a></li>
    
                  </ul>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                  <div class="col">
                                      
                        <div class="row">
                            <div class="col-8">
                              <div class="input-group ">
                                <form action="{{url("/daftarbuku")}}" method="GET" class="input-group mb-2">
                                <a href="/daftarbuku/create" class="btn btn-warning my-3"> Tambah Buku</a>
                                <input type="text" name="cari" class="form-control typeahead my-3 ms-1 " placeholder="Cari Judul" value="{{ Request::get('cari') }}" >
                                <button class="btn btn-outline-secondary my-3 " type="submit" id="button-addon2" value="cari">Search</button>
                              </form>
                              </div>
                            </div>
                      </div>
                      @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                      @endif
                      
                      <table class="table  table-hover">
                        <thead class="table-dark">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Buku</th>
                            <th scope="col">Kategori </th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody class="table-light">
                          <tr>
                            @foreach ($buku as $bk)  
                            <tr>
                              <th scope="row">{{$loop->iteration}}</th>
                              <td>{{$bk->kodebuku}}</td>
                              <td>{{$bk->kategori}}</td>
                              <td>{{$bk->judulbuku}}</td>
                              <td>{{$bk->jumlah}}</td>
                              <td>
                                 
                                  <a href="/daftarbuku/{{$bk->id}}/edit" class="btn btn-info">Edit</a>
    
                                  <form action="/daftarbuku/{{ $bk->id }}" method="post" class="d-inline" onclick="return confirm('Apakah anda yakin menghapus data ?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                              </td>
                            </tr>
                            @endforeach
                          </tr>
        
                        </tbody>
                      </table>
                  </div>
              </div>
          </div>
            
            <canvas class="my-4 w-100" id="myChart" width="900" height="260"></canvas>
      
          </main>
        </div>
        
      </div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    --> --}}

  </body>
</html>
    
