<html>
    <head>
        <title>
            Pendaftaran ISE
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 

        <script>
            function validasi(){
                var nrp = document.getElementById("nrp").value;
                var nama = document.getElementById("nrp").value;
                //cek sudah diisi atau belum, isi tidak boleh kosong
                if (nrp.length == 0) {
                    Swal.fire({
                    title:"kesalahan Input",
                    text: "NRP tidak boleh kosong!",
                    icon: "error"
                    });
                    return false;
                }
                if (nama.length == 0) {
                    Swal.fire({
                    title:"kesalahan Input",
                    text: "Nama tidak boleh kosong!",
                    icon: "error"
                    });
                    return false;
                }
                //cek NRP harus angka
                    if (isNaN(nrp)) {
                    Swal.fire({
                    title:"kesalahan Input",
                    text: "NRP harus angka!",
                    icon: "error"
                    });
                    return false;
                }
                //cek panjang NRP, harus 10 digit  
                if (nrp.length != 10) {
                    Swal.fire({
                    title:"kesalahan Input",
                    text: "NRP harus 10 digit!",
                    icon: "error"
                    });
                    return false;
                }
                //pesan error spesifik untuk 1 error
                //cek NRP harus diawali dengan angka 5 
                if (nrp.charAt(0) !== '5') {
                    Swal.fire({
                        title: "Kesalahan Input",
                        text: "NRP harus diawali dengan angka 5!",
                        icon: "error"
                    });
                    return false;
                }
            }
            // default return true;
        </script>
    </head>
    <body>
        <div class="container">
            <form action="https://google.co.id" method="get" onsubmit="return validasi()">
                <b3>Form Pendaftaran</b3>
                NRP:
                <input type="text" name="nrp" id="nrp" class="form-control"
                placeholder="Silahkan diisi 10 digit NRP, harus berisi angka, tidak boleh kosong.">
                <br>
                Nama:
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Isikan nama peserta yang valid!">
                <input type="submit" class="btn btn-success" value="Daftar">
            </form>
        </div>
    </body>
</html>