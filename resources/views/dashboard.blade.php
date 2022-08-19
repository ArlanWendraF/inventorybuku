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

    <title>Dashboard</title>
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
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">          
              </div>   

            </div>

            <div >
              <div class="row g-5">
                <div class="col-md-3">
                  <img src="{{('images/5.jpg')}}" width="280px" height="340px" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">NAMA: Arlan Wendra Fadryan</h5>
                    <h5 class="card-title">NPM: 183510332</h5>
                    <p class="card-text" >
                      Nama saya Arlan Wendra Fadryan bisa dipanggil Arlan . Saya seoarang mahasiswa
                      Teknik Informatika di Islamic University of Riau atau yang lebih dikenal dengan sebutan 
                      UIR. Saat ini saya sedang menjalani hidup sebagai mahasiswa dan manusia.
                    </p>
      
                    <p class="card-text" >
                     Website ini merupakan web Inventory Buku yang saya beri nama INPUS yang merupakan Akronim dari
                     Inventory Perpustakaan.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            
            <br>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Jenis Buku</h1>
              <div class="btn-toolbar mb-2 mb-md-0">          
              </div>   

            </div>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4"> 
              <div class="col">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header ">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Novel</h5>
                    <p class="card-text">Novel adalah sebuah karya fiksi prosa yang tertulis dan naratif, biasanya dalam bentuk cerita.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Komik</h5>
                    <p class="card-text">Komik adalah suatu bentuk seni yang menggunakan gambar yang disusun membentuk jalinan cerita.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                  <div class="card-header">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Biografi</h5>
                    <p class="card-text">Biografi adalah kisah atau keterangan tentang kehidupan seseorang.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Kamus</h5>
                    <p class="card-text">Kamus adalah buku acuan yg memuat kata dan ungkapan, biasanya disusun menurut abjad berikut keterangan tentang makna, pemakaian, atau terjemahannya. </p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Ensiklopedia</h5>
                    <p class="card-text">Ensiklopedia adalah sejumlah buku yang berisi penjelasan mengenai setiap cabang ilmu pengetahuan yang tersusun menurut kategori secara singkat dan padat.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                  <div class="card-header">Buku</div>
                  <div class="card-body">
                    <h5 class="card-title">Dongeng</h5>
                    <p class="card-text">Dongeng, merupakan suatu kisah yang di angkat dari pemikiran fiktif dan kisah nyata, menjadi suatu alur perjalanan hidup dengan pesan moral.</p>
                  </div>
                </div>
              </div>
            </div>
            <canvas class="my-4 w-100" id="myChart" width="900" height="90"></canvas>
            
          </main>
        </div>
      </div>
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      @extends('footer.footer')
      @section('footer')
      
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
    
