<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail PRT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>

    <style>
        body {
        font-family: 'Poppins', sans-serif;
}
        /* Sidebar */
        .sidebar {
            background-color: #4b759e;
            min-height: 100vh;
            color: white;
            transition: width 0.3s ease-in-out;
            width: 250px; /* Lebar sidebar dalam keadaan terbuka */
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            padding-top: 50px;
        }

        /* Tombol Logout diposisikan di bagian bawah */
      .logout-btn {
          position: absolute;
          bottom: 20px; /* Atur jarak dari bawah */
          left: 50%;
          transform: translateX(-50%); /* Tengah secara horizontal */
          width: 80%;
          text-align: center;
      }

        .sidebar.hidden {
            width: 0; /* Sidebar tertutup sepenuhnya */
            padding: 0;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
        }

        .sidebar .nav-link:hover {
            background-color: #183b5e;
        }

        /* Tombol Toggle Sidebar */
        .toggle-btn {
            background: none;
            border: none;
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 1000;
        }

        .toggle-btn img {
            width: 20px;
            height: 20px;
        }

        /* Jika sidebar tertutup, tombol tetap di posisi */
        .sidebar.hidden + .toggle-btn {
            left: 15px;
        }

        /* Profil Gambar */
        .profile-img {
            width: 100%;
            max-width: 350px;
            border-radius: 5px;
        }

        /* Thumbnail */
        .thumbnail-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Tombol Edit */
        .btn-edit {
            background-color: #4b759e;
            color: white;
        }

        .btn-edit:hover {
            background-color: #3a5f86;
        }

        .experience-rating {
            display: flex;
            justify-content: space-between;
            border: 1px solid #ddd; /* Warna border */
            border-radius: 8px; /* Biar ada sudut melengkung */
            padding: 15px;
            text-align: center;
            background: #fff;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }

        /* Style untuk masing-masing item */
        .experience-rating div {
            flex: 1;
            padding: 10px;
        }

        /* Tambahkan border kanan untuk pemisah */
        .experience-rating div:not(:last-child) {
            border-right: 1px solid #ddd;
        }

        /* Style untuk bintang rating */
        .star-icon {
            color: #ffcc00; /* Warna bintang */
            font-size: 20px;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px; /* Sesuaikan dengan sidebar */
            transition: margin-left 0.3s ease-in-out;
        }

        .sidebar.hidden ~ .main-content {
            margin-left: 0;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 min-vh-100">
        <!-- Admin Info -->
        <a href="#" class="d-flex align-items-center text-white text-decoration-none mb-3">
            <img src="https://i.pinimg.com/736x/0e/81/bc/0e81bc9ef69e7b6282253c2e19ba563f.jpg" alt="Admin" width="50" height="50" class="rounded-circle me-2">
            <div>
                <span class="fw-bold">Admin</span><br>
                <small>admin@mail.com</small>
            </div>
        </a>

        <!-- Navigation -->
        <ul class="nav nav-pills flex-column w-100">
            <li class="nav-item">
                <a href="#" class="nav-link text-light d-flex align-items-center">
                    <img src="{{ asset('images/file.svg') }}" width="20" height="20" class="me-2"> Helperlog
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-light d-flex align-items-center">
                    <img src="{{ asset('images/search.svg') }}" width="20" height="20" class="me-2"> Helperfind
                </a>
            </li>
        </ul>

        <!-- Logout Button -->
        <div class="mt-auto w-100 text-center mb-3" style="padding-bottom: 100px;">
            <button type="button" class="btn btn-outline-light">
                <img src="{{ asset('images/login.svg') }}" width="20" height="20" class="me-2"> Log out
            </button>
        </div>
    </div>
</div>

<!-- Tombol Toggle Sidebar -->
<button class="toggle-btn" onclick="toggleSidebar()">
    <img src="{{ asset('images/bars-solid.svg') }}" alt="Toggle Sidebar">
</button>

<!-- Main Content -->
<div class="main-content p-4">
    <!-- Header -->
    <div class="d-flex align-items-center mb-4">
        <a href="#" class="text-dark me-3">
            <img src="{{ asset('images/arrow-left-solid.svg') }}" width="24" height="24">
        </a>
        <h5 class="mb-0">Detail PRT</h5>
    </div>

    <!-- Detail PRT -->
    <div class="row">
        <!-- Foto Profil -->
        <div class="col-md-5 text-center">
            <img src="{{ asset('images/hyundoo.jpg') }}" class="profile-img" alt="Profile Picture" style="width: 400px; height: 450px;">
            <div class="d-flex justify-content-center gap-2 mt-2">
                <img src="{{ asset('images/hyundo2.jpg') }}" class="thumbnail-img" alt="Thumbnail" style="width: 110px; height: 150px;">
                <img src="{{ asset('images/hyundo3.jpg') }}" class="thumbnail-img" alt="Thumbnail" style="width: 110px; height: 150px;">
                <img src="{{ asset('images/hyundo4.jpg') }}" class="thumbnail-img" alt="Thumbnail" style="width: 110px; height: 150px;">
            </div>
        </div>

        <!-- Informasi -->
        <div class="col-md-5">
            <h4>Oh Hyundoo</h4>
            <p class="text-muted">Pemilik Restoran</p>
            <div class="experience-rating">
              <div>
                  <strong>4</strong>
                  <br>
                  <span class="text-muted">Tahun Pengalaman</span>
              </div>
              <div>
                  <strong><span class="star-icon">⭐</span> 4.6</strong>
                  <br>
                  <span class="text-muted">Rating</span>
              </div>
          </div>
          <br>
          <hr>
            <!-- Biodata -->
            <div class="mt-4">
                <h6>Biodata</h6>
                <table class="table table-bordered w-100">
                    <tbody>
                        <tr>
                            <td>Keahlian 1</td>
                            <td>Memasak</td>
                        </tr>
                        <tr>
                            <td>Keahlian 2</td>
                            <td>Manajemen Restoran</td>
                        </tr>
                        <tr>
                            <td>Keahlian 3</td>
                            <td>Pelayanan Customer</td>
                        </tr>
                        <tr>
                            <td>Keahlian 4</td>
                            <td>Kreativitas & Inovasi Menu</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Tombol Edit Data -->
            <button class="btn btn-edit w-100 mt-3">Edit Data</button>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("hidden");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
