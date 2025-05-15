<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Linktree Paloma</title>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
            rel="stylesheet" />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="styles.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-papfAKpbdDYaFz7NffAqW+uZwMjvMBpFzP3z1ctm19sMQYarE4V/99S8xwoxk0YdXbVv5MXzVsVZyb5hhbRZKg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer" />

        <style>
        body {
        font-family: 'Karla', sans-serif;
        font-weight: 500;
        background-color: #e5ded3;
    }

    .topbar {
        width: 100%;
        height: 56px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        padding: 0 16px;
    }

    .topbar-content {
        width: 100%;
        max-width: 768px;
        margin: 0 auto;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .button-ellipse {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background-color: #89857f;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

        .button-ellipse:hover {
        background-color: #e5e7eb;
    }

        .button-ellipse img {
        width: 14px;
        height: 14px;
    }

      .toggle-wrapper {
        display: flex;
        background-color: #89857f;
        border-radius: 50px;
        overflow: hidden;
        max-width: 175px;
        margin: 0 auto;
        padding: 1px;
      }

      .toggle-btn {
        flex: 1;
        padding: 12px 0;
        font-weight: bold;
        border: none;
        outline: none;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 50px;
        font-size: 16px;
        background-color: transparent;
        color: white;
      }

      .toggle-btn.active {
        background-color: white;
        color: black;
      }

      .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background-color: white;
        border-radius: 50px;
        transition: transform 0.3s ease;
        z-index: 0;
      }

      .toggle-wrapper .toggle-btn {
        position: relative;
        z-index: 1;
      }

      .profile img {
        max-width: 20%;
      }

      .icon {
        font-size: 24px;
        color: #5b352b;
        margin: 0 10px;
        text-decoration: none;
        transition: transform 0.2s ease
      }

      .icon :hover{
        transform: scale(1.1);
      }

      .btn {
        font-weight: bold;
        width: 120px;
      }

      .active-tab {
        border: 2px solid #5b352b;
      }

      .shop-section {
        position: relative;
        background-color: #751d1d;
        text-align: center;
        align-items: center;
        margin: 0 auto;
        display: flex;
        justify-content: center; 
        flex-wrap: wrap; 
        overflow: hidden;
        max-width: 100%;
        box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease
      }

      .shop-section .ellipsis-icon {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: white;
        cursor: pointer;
        font-size: 15px;
        opacity: 1; /* pastikan terlihat */
        pointer-events: auto; /* bisa diklik */
    }
      .shop-section:hover {
        transform: scale(1.010);
      }

      .product-img {
        border-radius: 15px;
        max-width: 32%; /* Batasi ukuran gambar */
        width: 100%;
        height: auto; /* Jaga aspek rasio */
        object-fit: cover; /* Pastikan gambar tidak terdistorsi */
      }

      p {
        color: #662223;
        font-size: 14px;
        font-weight: 585;
      }

      .carousel iframe {
        border-radius: 15px;
      }

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
      }

      .icon {
        margin-right: 3px;
    }

      .social-buttons .btn {
        background-color: #751d1d;
        color: white;
        border-radius: 30px;
        padding: 16px 24px !important;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: transform 0.2s ease, background-color 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        line-height: 1;          
      }

      .social-buttons p{
        margin-top: 12px;
        color: #ffffff;
        font-weight: 200;
      }

      .social-buttons .btn:hover {
        transform: scale(1.010);
      }
    
      .follow-linktree {
        padding-bottom: 100px;
      }

      .follow-linktree .btn {
        background-color: #edecec;
        color: rgb(0, 0, 0);
        border-radius: 30px;
        padding: 10px;
        font-size: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: transform 0.2s ease, background-color 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }

      .follow-linktree .btn:hover {
        background-color: #ffffff;
        transform: scale(1.010);
      }

      .container {
        max-width: 600px; /* atau 720px, sesuai kebutuhan */
        margin: 0 auto; /* biar selalu di tengah */
        padding: 50px 20px 0;
      }

      .thin-text {
        font-weight: 5;
        font-size: 0.7rem;
        color: #c9aaaa;
      }

      .title {
        text-align: center;
        color: #660f0f;
        margin: 20px 0;
      }

      .carousel-container {
        padding: 20px;
        overflow: hidden;
      }

      .carousel {
        display: flex;
        gap: 16px;
        transition: transform 0.5s ease;
      }

      .card {
        background: #6a1212;
        border-radius: 32px;
        padding: 20px;
        width: 180px;
        min-width: 180px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        position: relative;
      }

      .items {
        display: flex;
        gap: 8px;
      }

      .items img {
        width: 40px;
        height: 40px;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
      }

      .next-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        color: #660f0f;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      }

      .next-btn:hover {
        background: #f2f2f2;
      }

      /* Container */
      .shoppable-carousel-container {
        position: relative;
        padding: 20px; /* lebih kecil dari sebelumnya */
        overflow: hidden;
        max-width: 1200px; /* bisa disesuaikan */
        margin: auto;
      }

      .affiliate-note {
        text-align: center;
        font-size: 12px;
        font-weight: normal;
      }

      /* Carousel */
      .shoppable-carousel {
        display: flex;
        gap: 16px; /* jarak antar card dikurangi */
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 8px;

        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE & Edge lama */
      }

      .shoppable-carousel::-webkit-scrollbar {
        display: none;
      }

      /* Card */
      .shoppable-card {
        background-color: #6a1212;
        border-radius: 20px;
        padding: 12px;
        width: 140px; 
        height: 210px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        flex-shrink: 0;
        text-align: center;
        box-sizing: border-box;
      }

      /* Small Items */
      .shoppable-items {
        margin-top: 150px;
        display: flex;
        justify-content: center;
        gap: 8px;
      }

      .shoppable-items img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        object-fit: cover;
        border: 1px solid #935656;
        cursor: pointer;
      }

      /* Navigation Buttons */
      .shoppable-prev-btn,
      .shoppable-next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: white;
        color: #660f0f;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 2;
      }

      .shoppable-prev-btn {
        left: 0;
        width: 40px;
        height: 40px;
      }

      .shoppable-next-btn {
        right: 0;
        width: 40px;
        height: 40px;
      }

      .ellipsis-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);
        transition: background-color 0.3s ease;
        }

        .ellipsis-icon:hover {
        background-color: rgba(255, 255, 255, 0.3);
        }

        .btn.w-100 {
        padding: 12px 16px;
        background-color: #6a1212; /* Warna merah tua sesuai */
        border-radius: 999px;
        color: white;
        text-decoration: none;
        font-weight: 500;
        display: flex;
        justify-content: space-between;
        align-items: center;
        }

        .btn.w-100 p {
        margin: 0;
        }

        a.shoppable-link,
        a.shop-link {
        text-decoration: none;
        color: inherit;
        display: block;
        }

    </style>

    </head>
    <body class="bg-custom">
        <div class="topbar">
            <div class="topbar-content">
                <div class="button-ellipse">
                    <img src="./image/ellipsis-solid.svg" alt="More Options" />
                </div>
            </div>
        </div>

        <div class="container text-center">
            <!-- Foto Profil -->
            <div class="profile p-3">
              <div class="profile p-3 d-flex flex-column align-items-center text-center">
                <img
                  src="./image/profile2.jpg"
                  alt="Paloma"
                  class="rounded-circle mb-2"
                  style="width: 96px; height: 96px; object-fit: cover;" />
                
                <div class="d-flex align-items-center justify-content-center">
                  <p class="fs-5 fw-bold mb-0">Paloma</p>
                   <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHZpZXdCb3g9IjAgMCAxNiAxNiIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik04LjUyNDcgMTUuMTIzNEM4LjIwMyAxNC45MjUxIDcuNzk3IDE0LjkyNTEgNy40NzUzIDE1LjEyMzRMNy4xNDg3MyAxNS4zMjQ3QzYuNjk0MiAxNS42MDQ4IDYuMDk5NzQgMTUuNDc4NSA1Ljc5ODQ1IDE1LjAzNzdMNS41ODE5OSAxNC43MjFDNS4zNjg3NSAxNC40MDkgNC45OTc4NSAxNC4yNDM4IDQuNjIzMzIgMTQuMjk0MUw0LjI0MzExIDE0LjM0NTJDMy43MTM5MiAxNC40MTYyIDMuMjIyMjYgMTQuMDU5IDMuMTI2MzEgMTMuNTMzOEwzLjA1NzM3IDEzLjE1NjRDMi45ODk0NyAxMi43ODQ3IDIuNzE3OCAxMi40ODMgMi4zNTUxOSAxMi4zNzY2TDEuOTg3MDkgMTIuMjY4NkMxLjQ3NDc1IDEyLjExODIgMS4xNzA4OCAxMS41OTE5IDEuMjk2ODcgMTEuMDczMUwxLjM4NzM4IDEwLjcwMDNDMS40NzY1NSAxMC4zMzMgMS4zNTEwOSA5Ljk0NjkyIDEuMDYzMSA5LjcwMjI0TDAuNzcwNzU3IDkuNDUzODVDMC4zNjM4NTIgOS4xMDgxMyAwLjMwMDMyNyA4LjUwMzczIDAuNjI2NDYyIDguMDgwOTZMMC44NjA3NzcgNy43NzcyMkMxLjA5MTYgNy40NzgwMSAxLjEzNDA0IDcuMDc0MjQgMC45NzA0NjggNi43MzM1OEwwLjgwNDQyNCA2LjM4Nzc2QzAuNTczMzE0IDUuOTA2NDMgMC43NjExMTQgNS4zMjg0NCAxLjIzMTAxIDUuMDc0ODhMMS41Njg2MSA0Ljg5MjdDMS45MDExNyA0LjcxMzI0IDIuMTA0MTcgNC4zNjE2NCAyLjA5MzMgMy45ODM5TDIuMDgyMjcgMy42MDA0NEMyLjA2NjkyIDMuMDY2NzIgMi40NzM1NyAyLjYxNTA5IDMuMDA1OTcgMi41NzQ1N0wzLjM4ODQ4IDIuNTQ1NDZDMy43NjUyOSAyLjUxNjc4IDQuMDkzNzUgMi4yNzgxNCA0LjIzNzQ2IDEuOTI4NjRMNC4zODMzNSAxLjU3Mzg1QzQuNTg2NCAxLjA4MDAyIDUuMTQxNiAwLjgzMjgzNiA1LjY0NDQ1IDEuMDEyMzdMNi4wMDU3MyAxLjE0MTM1QzYuMzYxNjMgMS4yNjg0MiA2Ljc1ODc1IDEuMTg0MDEgNy4wMzIxOSAwLjkyMzE3M0w3LjMwOTc4IDAuNjU4MzkxQzcuNjk2MTMgMC4yODk4NTIgOC4zMDM4NyAwLjI4OTg1MiA4LjY5MDIyIDAuNjU4MzkyTDguOTY3ODEgMC45MjMxNzNDOS4yNDEyNSAxLjE4NDAxIDkuNjM4MzcgMS4yNjg0MiA5Ljk5NDI3IDEuMTQxMzVMMTAuMzU1NSAxLjAxMjM3QzEwLjg1ODQgMC44MzI4MzYgMTEuNDEzNiAxLjA4MDAyIDExLjYxNjcgMS41NzM4NUwxMS43NjI1IDEuOTI4NjRDMTEuOTA2MyAyLjI3ODE0IDEyLjIzNDcgMi41MTY3OCAxMi42MTE1IDIuNTQ1NDZMMTIuOTk0IDIuNTc0NTdDMTMuNTI2NCAyLjYxNTA5IDEzLjkzMzEgMy4wNjY3MiAxMy45MTc3IDMuNjAwNDRMMTMuOTA2NyAzLjk4MzlDMTMuODk1OCA0LjM2MTY0IDE0LjA5ODggNC43MTMyNCAxNC40MzE0IDQuODkyN0wxNC43NjkgNS4wNzQ4OEMxNS4yMzg5IDUuMzI4NDQgMTUuNDI2NyA1LjkwNjQzIDE1LjE5NTYgNi4zODc3NkwxNS4wMjk1IDYuNzMzNThDMTQuODY2IDcuMDc0MjQgMTQuOTA4NCA3LjQ3ODAxIDE1LjEzOTIgNy43NzcyMkwxNS4zNzM1IDguMDgwOTZDMTUuNjk5NyA4LjUwMzczIDE1LjYzNjEgOS4xMDgxMyAxNS4yMjkyIDkuNDUzODVMMTQuOTM2OSA5LjcwMjI0QzE0LjY0ODkgOS45NDY5MiAxNC41MjM0IDEwLjMzMyAxNC42MTI2IDEwLjcwMDNMMTQuNzAzMSAxMS4wNzMxQzE0LjgyOTEgMTEuNTkxOSAxNC41MjUzIDEyLjExODIgMTQuMDEyOSAxMi4yNjg2TDEzLjY0NDggMTIuMzc2NkMxMy4yODIyIDEyLjQ4MyAxMy4wMTA1IDEyLjc4NDcgMTIuOTQyNiAxMy4xNTY0TDEyLjg3MzcgMTMuNTMzOEMxMi43Nzc3IDE0LjA1OSAxMi4yODYxIDE0LjQxNjIgMTEuNzU2OSAxNC4zNDUyTDExLjM3NjcgMTQuMjk0MUMxMS4wMDIxIDE0LjI0MzggMTAuNjMxMyAxNC40MDkgMTAuNDE4IDE0LjcyMUwxMC4yMDE1IDE1LjAzNzdDOS45MDAyNiAxNS40Nzg1IDkuMzA1OCAxNS42MDQ4IDguODUxMjcgMTUuMzI0N0w4LjUyNDcgMTUuMTIzNFoiIGZpbGw9IiMwMEI2RkYiLz4KPHBhdGggZD0iTTUuMDY5OTggNy41NjI2NUw3LjE5MTMgOS42ODM5N0wxMS40MzM5IDUuNDQxMzMiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMiIvPgo8L3N2Zz4K" alt="Verified profile" data-testid="verificationTick" style="padding-left: 5px;">
                </div>
              </div>
                <!-- Ikon Sosial Media -->
                <div class="social-icons my-1">
                    <a
                        href="https://www.tiktok.com/@whor3chata_?is_from_webapp=1&sender_device=pc"
                        class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30" viewBox="0,0,256,256">
                            <g fill="#751d1d" fill-rule="nonzero" stroke="none"
                                stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray stroke-dashoffset="0"
                                font-family="none" font-weight="none"
                                font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal"><g
                                    transform="scale(5.12,5.12)"><path
                                        d="M9,4c-2.75042,0 -5,2.24958 -5,5v32c0,2.75042 2.24958,5 5,5h32c2.75042,0 5,-2.24958 5,-5v-32c0,-2.75042 -2.24958,-5 -5,-5zM9,6h32c1.67158,0 3,1.32842 3,3v32c0,1.67158 -1.32842,3 -3,3h-32c-1.67158,0 -3,-1.32842 -3,-3v-32c0,-1.67158 1.32842,-3 3,-3zM26.04297,10c-0.5515,0.00005 -0.99887,0.44655 -1,0.99805c0,0 -0.01098,4.87522 -0.02148,9.76172c-0.0053,2.44325 -0.01168,4.88902 -0.01562,6.73047c-0.00394,1.84145 -0.00586,3.0066 -0.00586,3.10352c0,1.81526 -1.64858,3.29883 -3.52734,3.29883c-1.86379,0 -3.35156,-1.48972 -3.35156,-3.35352c0,-1.86379 1.48777,-3.35156 3.35156,-3.35156c0.06314,0 0.1904,0.02075 0.4082,0.04688c0.28415,0.03406 0.56927,-0.05523 0.78323,-0.24529c0.21396,-0.19006 0.33624,-0.46267 0.33591,-0.74885v-4.20117c-0.00005,-0.528 -0.41054,-0.965 -0.9375,-0.99805c-0.15583,-0.0098 -0.35192,-0.0293 -0.58984,-0.0293c-5.24953,0 -9.52734,4.27782 -9.52734,9.52734c0,5.24953 4.27782,9.52734 9.52734,9.52734c5.24938,0 9.52734,-4.27782 9.52734,-9.52734v-9.04883c1.45461,1.16341 3.26752,1.90039 5.26953,1.90039c0.27306,0 0.53277,-0.01618 0.78125,-0.03906c0.51463,-0.04749 0.90832,-0.47927 0.9082,-0.99609v-4.66992c0.0003,-0.52448 -0.40463,-0.9601 -0.92773,-0.99805c-3.14464,-0.22561 -5.65141,-2.67528 -5.97852,-5.79102c-0.05305,-0.50925 -0.48214,-0.89619 -0.99414,-0.89648zM27.04102,12h2.28125c0.72678,3.2987 3.30447,5.8144 6.63672,6.44531v2.86523c-2.13887,-0.10861 -4.01749,-1.1756 -5.12305,-2.85742c-0.24284,-0.36962 -0.69961,-0.53585 -1.12322,-0.40877c-0.4236,0.12708 -0.71344,0.51729 -0.71272,0.95955v11.53516c0,4.16848 -3.35873,7.52734 -7.52734,7.52734c-4.16848,0 -7.52734,-3.35887 -7.52734,-7.52734c0,-4.00052 3.12077,-7.17588 7.05469,-7.43164v2.17578c-2.71358,0.25252 -4.87891,2.47904 -4.87891,5.25586c0,2.94421 2.40735,5.35352 5.35156,5.35352c2.92924,0 5.52734,-2.30609 5.52734,-5.29883c0,0.04892 0.00186,-1.25818 0.00586,-3.09961c0.0039,-1.84143 0.01037,-4.28722 0.01563,-6.73047c0.0094,-4.3869 0.0177,-7.91447 0.01953,-8.76367z"></path></g></g>
                        </svg>
                    </a>
                    <a
                        href="https://www.instagram.com/c00laquariusg1rl?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="30" height="30" viewBox="0,0,256,256">
                            <g fill="#751d1d" fill-rule="nonzero" stroke="none"
                                stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray stroke-dashoffset="0"
                                font-family="none" font-weight="none"
                                font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal"><g
                                    transform="scale(5.12,5.12)"><path
                                        d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z"></path></g></g>
                        </svg></a>
                    <a
                        href="https://youtube.com/@palomadelmar?si=ZR3-Ooe4pTj7B9yw"
                        class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="35" height="35" viewBox="0,0,256,256">
                            <g fill="#751d1d" fill-rule="nonzero" stroke="none"
                                stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10"
                                stroke-dasharray stroke-dashoffset="0"
                                font-family="none" font-weight="none"
                                font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal"><g
                                    transform="scale(5.12,5.12)"><path
                                        d="M24.40234,9c-6.60156,0 -12.80078,0.5 -16.10156,1.19922c-2.19922,0.5 -4.10156,2 -4.5,4.30078c-0.39844,2.39844 -0.80078,6 -0.80078,10.5c0,4.5 0.39844,8 0.89844,10.5c0.40234,2.19922 2.30078,3.80078 4.5,4.30078c3.50391,0.69922 9.5,1.19922 16.10156,1.19922c6.60156,0 12.59766,-0.5 16.09766,-1.19922c2.20313,-0.5 4.10156,-2 4.5,-4.30078c0.40234,-2.5 0.90234,-6.09766 1,-10.59766c0,-4.5 -0.5,-8.10156 -1,-10.60156c-0.39844,-2.19922 -2.29687,-3.80078 -4.5,-4.30078c-3.5,-0.5 -9.59766,-1 -16.19531,-1zM24.40234,11c7.19922,0 12.99609,0.59766 15.79688,1.09766c1.5,0.40234 2.69922,1.40234 2.89844,2.70313c0.60156,3.19922 1,6.60156 1,10.10156c-0.09766,4.29688 -0.59766,7.79688 -1,10.29688c-0.29687,1.89844 -2.29687,2.5 -2.89844,2.70313c-3.60156,0.69922 -9.60156,1.19531 -15.60156,1.19531c-6,0 -12.09766,-0.39844 -15.59766,-1.19531c-1.5,-0.40234 -2.69922,-1.40234 -2.89844,-2.70312c-0.80078,-2.80078 -1.10156,-6.5 -1.10156,-10.19922c0,-4.60156 0.40234,-8 0.80078,-10.09766c0.30078,-1.90234 2.39844,-2.50391 2.89844,-2.70312c3.30078,-0.69922 9.40234,-1.19922 15.70313,-1.19922zM19,17v16l14,-8zM21,20.40234l8,4.59766l-8,4.59766z"></path></g></g>
                        </svg>
                    </a>
                    <a
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=paloma@weareverified.co"
                        class="icon">
                        <img src="./image/envelop.png"
                            style="width: 30px; height: 30px;"></a>
                </div>
            </div>

            <!-- Tombol Links & Shop -->
            <div class="toggle-wrapper mb-3 position-relative">
                <div class="slider"></div>
                <button id="btnLinks" class="toggle-btn active">Links</button>
                <button id="btnShop" class="toggle-btn">Shop</button>
            </div>

            <div id="linksSection">
                <!-- Produk -->
                <div class="shop-section p-3 rounded-5">
                  <div class="d-flex justify-content-between">
                      <img
                          src="./image/product1.jpg"
                          alt="Product 1"
                          class="img-fluid product-img" 
                          onclick="document.getElementById('shopSection').scrollIntoView({ behavior: 'smooth' });" />
                        <img
                          src="./image/product2.jpg"
                          alt="Product 2"
                          class="img-fluid product-img"
                          onclick="document.getElementById('shopSection').scrollIntoView({ behavior: 'smooth' });" />
                        <img
                          src="./image/product3.jpg"
                          alt="Product 3"
                          class="img-fluid product-img" 
                          onclick="document.getElementById('shopSection').scrollIntoView({ behavior: 'smooth' });" />
                    </div>
                  <p class="mt-3 text-white">
                      See Full Shop <br /><small class="thin-text">70
                          Products</small>
                  </p>
                </div>

                <!-- Youtube -->
                <div class="mt-4">
                    <p>subscribe to my Youtube❤️</p>
                    <!-- Carousel YouTube Section -->
                    <div
                        id="youtubeCarousel"
                        class="carousel slide mt-4"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <iframe
                                    width="100%"
                                    height="315"
                                    src="https://www.youtube.com/embed/NAM31ZaIu5c"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe
                                    width="100%"
                                    height="315"
                                    src="https://www.youtube.com/embed/sH12IHZeT8M"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe
                                    width="100%"
                                    height="315"
                                    src="https://www.youtube.com/embed/lYwqCk0QEgU"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe
                                    width="100%"
                                    height="315"
                                    src="https://www.youtube.com/embed/levozATCt1E"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="carousel-item">
                                <iframe
                                    width="100%"
                                    height="315"
                                    src="https://www.youtube.com/embed/3s12fJVbuwk"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                        <!-- Tombol Navigasi -->
                        <button
                            class="carousel-control-prev"
                            type="button"
                            data-bs-target="#youtubeCarousel"
                            data-bs-slide="prev">
                            <span
                                class="carousel-control-prev-icon"
                                aria-hidden="true"></span>
                        </button>
                        <button
                            class="carousel-control-next"
                            type="button"
                            data-bs-target="#youtubeCarousel"
                            data-bs-slide="next">
                            <span
                                class="carousel-control-next-icon"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <!--Follow Social Media-->
                <div class="mt-4">
                    <p>Follow my social media</p>
                </div>
                <!--Media Social-->
                <div class="d-grid gap-3 w-100 social-buttons">
                    <a
                        href="https://youtube.com/@palomadelmar?si=ZR3-Ooe4pTj7B9yw"
                        class="btn w-100">
                        <i class="bi bi-youtube"></i> <p>YouTube</p>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </a>
                    <a
                        href="https://www.instagram.com/c00laquariusg1rl?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                        class="btn w-100">
                        <i class="bi bi-instagram"></i> <p>Instagram</p>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </a>
                    <a
                        href="https://www.tiktok.com/@whor3chata_?is_from_webapp=1&sender_device=pc"
                        class="btn w-100">
                        <i class="bi bi-tiktok"></i> <p>TikTok</p>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </a>
                    <a 
                        href="https://linktr.ee/s/monetize-your-content-with-linktree-shops" class="btn w-100">
                        <span style="width: 20px;"></span> <!-- kosongin bagian kiri -->
                        <p style="flex: 1; text-align: center; margin: 0;">Join Linktree Shops - PALOMASHOPS</p>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </a>
                    <a
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=paloma@weareverified.co"
                        class="btn w-100">
                        <i class="bi bi-envelope"></i> <p>Inquiries</p>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </a>
                </div>
                <!--Bergabung di Linktree-->
                <div
                    class="mt-4 mb-5 d-flex justify-content-center follow-linktree">
                    <a href="https://linktr.ee/" class="btn w-75">
                        <i class="bi bi-envelope"></i> Bergabung dengan Paloma
                        di Linktree
                    </a>
                </div>
            </div>

            <div id="shopSection" style="display: none">
                <!-- Shoppable Posts Carousel -->
                <p class="affiliate-note">Products may contain affiliate
                    links</p>

                <div class="shoppable-carousel-container">
                    <p>Shoppable Posts</p>

                    <button class="shoppable-prev-btn">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"
                            style="width: 20px; height: 20px; padding-bottom: 3px;">
                            <path fill="#6a1212"
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                        </svg>
                    </button>

                    <div class="shoppable-carousel">
                        <!-- Card 1 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/sp1.jpg" />
                                <img src="./image/sp2.jpg" />
                                <img src="./image/sp3.jpg" />
                            </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/product1.jpg" />
                                <img src="./image/product2.jpg" />
                                <img src="./image/product3.jpg" />
                            </div>
                            </div>
                        </a>
                        <!-- Card 1 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/sp1.jpg" />
                                <img src="./image/sp2.jpg" />
                                <img src="./image/sp3.jpg" />
                            </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/product1.jpg" />
                                <img src="./image/product2.jpg" />
                                <img src="./image/product3.jpg" />
                            </div>
                            </div>
                        </a>
                        <!-- Card 1 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/sp1.jpg" />
                                <img src="./image/sp2.jpg" />
                                <img src="./image/sp3.jpg" />
                            </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/product1.jpg" />
                                <img src="./image/product2.jpg" />
                                <img src="./image/product3.jpg" />
                            </div>
                            </div>
                        </a>
                        <!-- Card 1 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/sp1.jpg" />
                                <img src="./image/sp2.jpg" />
                                <img src="./image/sp3.jpg" />
                            </div>
                            </div>
                        </a>

                        <!-- Card 2 -->
                        <a href="https://www.sephora.co.id/?dxid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&dxgaid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB&gad_source=1&gad_campaignid=741857502&gbraid=0AAAAADpAM4K4TF2FYfJpAWhyEVSxiQW8F&gclid=Cj0KCQjwqv2_BhC0ARIsAFb5Ac_02XYG6VmnKzNaLcHTuhj-mW9W6_Muf7ZDBLoGQ31DCrmGlLlMvoAaAupvEALw_wcB" target="_blank" class="shoppable-link">
                            <div class="shoppable-card">
                            <div class="shoppable-items">
                                <img src="./image/product1.jpg" />
                                <img src="./image/product2.jpg" />
                                <img src="./image/product3.jpg" />
                            </div>
                            </div>
                        </a>
                    </div>

                    <button class="shoppable-next-btn">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"
                            style="width: 20px; height: 20px; padding-bottom: 3px;">
                            <path fill="#6a1212"
                                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </button>
                </div>

                <!-- My Products-->
                <p>My Products</p>
                <a href="https://www.amazon.com/dp/B002I37TBK/ref=asc_df_B002I37TBK1744628400000?tag=31846-paloma-20&creative=395261&creativeASIN=B002I37TBK&linkCode=asn&ascsubtag=srctok-c88bf09ba0c15267&btn_ref=srctok-c88bf09ba0c15267&th=1" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                      <div class="d-flex justify-content-center">
                        <img src="./image/palladio.jpg" alt="Product" class="img-fluid product-img" />
                      </div>
                      <p class="mt-3 text-white">
                        Palladio Lip Stain, Hydrating and Waterproof formula, Matte Color Look,
                        <br />Longlasting All Day Wear Lip Color, Smudge Proof Natural Finish...
                        <br /> Amazon
                        <br /><small class="thin-text">$9.59</small>
                        <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                      </p>
                    </div>
                </a>

                <!-- Produk 1 -->
                <a href="https://linktr.ee/paloma#collection-d46d40bf-52e9-47a0-9408-231b728fc882" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                      <div class="d-flex justify-content-between">
                        <img src="./image/sp1.jpg" alt="Product 1" class="img-fluid product-img" />
                        <img src="./image/sp4.jpg" alt="Product 2" class="img-fluid product-img" />
                        <img src="./image/product2.jpg" alt="Product 3" class="img-fluid product-img" />
                      </div>
                      <p class="mt-3 text-white">
                        DAILY MAKE UP FAVORITES <br />
                        <small class="thin-text">10 Products</small>
                      </p>
                      <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </div>
                </a>

                <!-- Produk 2 -->
                <a href="https://linktr.ee/paloma#collection-1d54b030-9570-41ed-8003-b0e74bac2f23" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                    <div class="d-flex justify-content-between">
                        <img src="./image/lipgloss1.jpg" alt="Product 1" class="img-fluid product-img" />
                        <img src="./image/lipgloss2.jpg" alt="Product 2" class="img-fluid product-img" />
                        <img src="./image/lipgloss3.jpg" alt="Product 3" class="img-fluid product-img" />
                    </div>
                    <p class="mt-3 text-white">
                        BEST LIP GLOSS <br /><small class="thin-text">12 Products</small>
                    </p>
                    <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </div>
                </a>
                
                <!-- Produk 3 -->
                <a href="https://linktr.ee/paloma#collection-e9c5f0b1-20ff-4025-b730-023e926554c8" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                    <div class="d-flex justify-content-between">
                        <img src="./image/beginnermakeup.jpg" alt="Product 1" class="img-fluid product-img" />
                        <img src="./image/beginnermakeup2.jpg" alt="Product 2" class="img-fluid product-img" />
                        <img src="./image/beginnermakeup3.jpg" alt="Product 3" class="img-fluid product-img" />
                    </div>
                    <p class="mt-3 text-white">
                        BEGINNERS MAKE UP GUIDE <br /><small class="thin-text">22 Products</small>
                    </p>
                    <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </div>
                </a>
                
                <!-- Produk 4 -->
                <a href="https://linktr.ee/paloma#collection-ca3d9aad-f350-4fe4-ba71-95bbecd2006e" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                    <div class="d-flex justify-content-between">
                        <img src="./image/balm.jpg" alt="Product 1" class="img-fluid product-img" />
                        <img src="./image/balm2.jpg" alt="Product 2" class="img-fluid product-img" />
                        <img src="./image/balm3.jpg" alt="Product 3" class="img-fluid product-img" />
                    </div>
                    <p class="mt-3 text-white">
                        BEST LIP BALMS <br /><small class="thin-text">8 Products</small>
                    </p>
                    <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </div>
                </a>
                
                <!-- Produk 5 -->
                <a href="https://linktr.ee/paloma#collection-956063bf-57d6-4e34-a9c9-f1e9839f7617" target="_blank" class="shop-link">
                    <div class="shop-section p-3 rounded-5 mt-3">
                    <div class="d-flex justify-content-between">
                        <img src="./image/best.jpg" alt="Product 1" class="img-fluid product-img" />
                        <img src="./image/best2.jpg" alt="Product 2" class="img-fluid product-img" />
                        <img src="./image/best3.jpg" alt="Product 3" class="img-fluid product-img" />
                    </div>
                    <p class="mt-3 text-white">
                        AMAZON FAVORITES <br /><small class="thin-text">8 Products</small>
                    </p>
                    <span class="ellipsis-icon"><i class="bi bi-three-dots-vertical"></i></span>
                    </div>
                </a>

                <!--Bergabung di Linktree-->
                <div
                    class="mt-4 mb-5 d-flex justify-content-center follow-linktree">
                    <a href="https://linktr.ee" class="btn w-75">
                        <i class="bi bi-envelope"></i> Bergabung dengan Paloma
                        di Linktree
                    </a>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script>
            
      const btnLinks = document.getElementById("btnLinks");
      const btnShop = document.getElementById("btnShop");
      const linksSection = document.getElementById("linksSection");
      const shopSection = document.getElementById("shopSection");
      const slider = document.querySelector(".slider");

      const toggleButtons = document.querySelectorAll(".toggle-btn");

      toggleButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
          // Update aktif button
          toggleButtons.forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");

          // Geser slider
          if (btn.id === "btnLinks") {
            slider.style.transform = "translateX(0%)";
            linksSection.style.display = "block";
            shopSection.style.display = "none";
          } else {
            slider.style.transform = "translateX(100%)";
            linksSection.style.display = "none";
            shopSection.style.display = "block";
          }
        });
      });

      const carousel = document.querySelector(".shoppable-carousel");
      const prevBtn = document.querySelector(".shoppable-prev-btn");
      const nextBtn = document.querySelector(".shoppable-next-btn");

      prevBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: -350, behavior: "smooth" });
      });

      nextBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: 350, behavior: "smooth" });
      });

      document.querySelectorAll('.product-img').forEach(img => {
        img.addEventListener('click', () => {
          // Trigger klik tombol Shop (biar efek toggle dan animasi-nya sama persis)
          btnShop.click();

          // Delay sedikit supaya transisi slide selesai, baru scroll
          setTimeout(() => {
            shopSection.scrollIntoView({ behavior: 'smooth' });
          }, 300); // Bisa disesuaikan dengan durasi transisi slider kamu
        });
      });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
