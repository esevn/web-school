<?php 

require 'koneksi.php';

$artikels = getdata("SELECT * FROM `artikels`");

// var_dump($artikels);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logo-idn.png" type="image/x-icon">
    <link rel="stylesheet" href="src/output.css">
    <title>SMA TI HSI-IDN</title>
    <style>
      .profil {
        flex: 1;
        min-width: 300px;
        max-width: 500px;
      }
      .custom-scrollbar::-webkit-scrollbar {
        height: 3px;
      }

      .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #1362ff;
      }

      .custom-scrollbar::-webkit-scrollbar-track {
        background-color: #ffff;
      }
    </style>
  </head>
  <body>
    <nav class="w-full fixed z-30 bg-slate-50 ">
      <div
        class="container mx-auto px-2 py-[10px] flex justify-between items-center"
      >
        <div class="logo w-60 overflow-hidden flex items-center px-2 md:ml-2">
          <img src="./images/logo-idn.png" alt="" class="w-[40px] h-[40px]  "/>
          <h1 class="hidden md:block px-2 font-semibold">SMA TI <span class="text-[#6c8efd]">HSI IDN</span></h1>
        </div>
        <div class=" flex justify-center items-center relative ">
          <ul class="hidden md:flex m-auto">
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="index.html">Beranda</a></li>
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="about-us.html">Tentang Kami</a></li>  
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="layanan.html">Layanan</a></li>
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="program.html">Program</a></li>
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="info.html">Info</a></li>
            <li class="text-sm px-5 sm:px-1 font-semibold"><a class="hover:border-b-2 hover:rounded-sm hover:border-blue-600 
              transition ease-in-out duration-200  px-3 py-2" 
                href="galery.html">Galeri</a></li>
          </ul>
        </div>

        <button class="px-4 py-3 bg-blue-600 text-white font-semibold rounded-full hidden md:block">Regiter now</button>
        <button onclick="openNavbar()" class="md:hidden"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 256 256"><path d="M32,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H40A8,8,0,0,1,32,64ZM216,96H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,40H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z"></path></svg>
        </button>
    </nav>


    <!-- Aside Navbar -->

    <aside class="md:hidden fixed z-50 w-full h-full bg-[#00000081] transition-all duration-200 ease-in-out -translate-x-full">
      <div class="container w-60 h-full bg-white ">
        <div class="flex flex-col p-2 relative ">
          <div onclick="closeNavbar()" class="absolute cursor-pointer right-2 top-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256" class="fill-black">
              <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
            </svg>
          </div>
          <div class="absolute left-2 mt-1">
            <div class="w-10 h-10">
              <img src="./images/logo-idn.png" alt="">
            </div>
          </div>
          <ul class="mt-28 flex flex-col gap-5 text-left ml-5 text-slate-700 font-semibold">
            <li><a href="index.html">Beranda</a></li>
            <li><a href="about-us.html">Tentang kami</a></li>
            <li><a href="layanan.html">Layanan</a></li>
            <li><a href="program.html">Program</a></li>
            <li><a href="info.html">Info</a></li>
            <li><a href="galery.html">Galeri</a></li>
          </ul>
        </div>
      </div>
    </aside>

<!-- Section Pertama --> 
    <section class="bg-[url('/images/bg-image.JPG')]">
        <div class="container flex flex-col md:flex-row-reverse px-4 py-16">
          <div class="py-5 mx-auto">
            <img src="./images/school.png" alt="" class="w-full ">
          </div>
          <div class="md:w-1/2 h-full flex flex-col gap-5 m-auto md:gap-6 md:px-5 md:py-3">
            <h1 class="text-2xl md:text-4xl font-bold text-white font-Libre">Welcome to SMA <span class="text-[#6498ff]">HSI IDN</span></h1>
            <p class="text-sm md:text-lg text-white leading-normal">We believe that School should be fun and students should feel loved and blessed in a lively environ that nourishes their independence. We offer to partner and collaborate with you valuinWe believe that School should be fun and students should feel loved and blessed in a lively environ that nourishes their independence.</p>
            <button class="px-3 py-3 md:px-4 md:py-4 border rounded-md text-white text-sm md:w-32 mt-5 transition-all duration-200 hover:bg-white hover:text-[#26335D] hover:translate-y-1 hover:rounded-lg hover:font-semibold">Learn More</button>

          </div>

        </div>
    </section>

    <!-- section kedua -->
    <section class="w-full h-full">
      <div class="container mx-auto flex flex-col md:flex-row gap-3 px-4 py-10 md:py-20 items-center">
        <div class="rounded-3xl overflow-hidden w-full h-full shadow-2xl shadow-slate-800">
          <img src="./images/aboutus.JPG" alt="" class="">
          <div></div>
        </div>
        <hr>
        <div class="flex flex-col px-3 gap-5 mb-10 justify-end items-end">
          <h2 class="text-3xl md:text-4xl font-bold font-Libre">Tentang Kami</h2>
          <p class="text-sm md:text-xsl text-right md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eligendi consequatur soluta suscipit doloremque temporibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, quam!</p>
          <button class="text-lg w-40 py-2 text-[#6592ec] border border-solid border-[#6592ec] transition-all duration-200 hover:bg-[#6592ec] hover:text-white hover:translate-y-1 hover:shadow-xl hover:rounded-lg">Learn More <i class="ph-bold ph-caret-right absolute pt-[6px]"></i></button>
        </div>

      </div>
    </section>
    
<!-- ssection ketiga -->
    <!-- Galeri beranda -->
    <section class="md:block hidden">
        <div class="container px-4 py-20 flex flex-col m-auto item-center bg-blue-700">
        <h1 class="text-3xl font-bold text-center mb-8 text-white font-Libre">Galeri Kami</h1>
        <div class="flex flex-nowrap overflow-scroll p-4 gap-5 items-center border-2 border-blue-700 rounded-md custom-scrollbar" style="-webkit-overflow-scrolling: touch">
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri1.jpg" alt="Gambar 1">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri2.jpg" alt="Gambar 2">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri3.jpg" alt="Gambar 3">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri4.jpg" alt="Gambar 4">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri5.jpg" alt="Gambar 4">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri6.jpg" alt="Gambar 4">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri7.JPG" alt="Gambar 4">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri8.JPG" alt="Gambar 4">
            </div>
            <div class="w-64 flex-shrink-0">
                <img class="w-full h-64 object-cover rounded-lg shadow-md hover:scale-105 transition duration-300" src="images/galeri/galeri9.JPG" alt="Gambar 4">
            </div>
        </div>
    </div>
    </section>
    <!-- layanan beranda-->
    <section class="bg-[url('/images/bg-image.JPG')] md:hidden">
          <div class="container px-4 py-10 mx-auto mt-3">
            <div class="flex flex-col gap-4 py-5">
            <h1 class="text-2xl md:text-4xl text-white font-bold font-Libre">Mengapa harus kami ?</h1>
            <p class="text-sm line-clamp-2 text-white">Alasan kenapa harus memilih untuk bergabung dengan SMA TI HSI - IDN.</p>
          </div>
        <div class="flex overflow-x-auto p-4 gap-5 items-center border-2 border-blue-600 rounded-md custom-scrollbar" style="-webkit-overflow-scrolling: touch">
          <!-- Profil 1 -->
          <div class="profil flex flex-col text-center items-center w-60 gap-4 p-4 border-2 border-white rounded-md">
            <div class="photo overflow-hidden w-36 h-36 rounded-md border-2 border-black">
              <img src="./images/layanan/vasilitas1.jpg" class="object-cover w-full h-full" alt="Foto Profil">
            </div>
            <h3 class="font-semibold text-white">Lingkungan Nyaman</h3>
            <p class="text-sm text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, deleniti.
            </p>
          </div>

          <!-- Profil 2 -->
          <div class="profil flex flex-col text-center items-center gap-4 p-4 border-2 border-white rounded-md">
            <div class="photo overflow-hidden w-36 h-36 rounded-md border-2 border-black">
              <img src="./images/layanan/vasilitas2.jpg" class="object-cover w-full h-full" alt="Foto Profil">
            </div>
            <h3 class="font-semibold text-white">Fasilitas Lengkap</h3>
            <p class="text-sm text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quibusdam.
            </p>
          </div>

          <!-- layanan 3 -->
            <div class="profil flex flex-col text-center items-center gap-4 p-4 border-2 border-white rounded-md">
            <div class="photo overflow-hidden w-36 h-36 rounded-md border-2 border-black">
              <img src="./images/layanan/vasilitas3.jpg" class="object-cover w-full h-full" alt="Foto Profil">
            </div>
            <h3 class="font-semibold text-white">Pengajar Kompoten</h3>
            <p class="text-sm text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quibusdam.
            </p>
          </div>

          <!-- Layanan 4 -->
          <div class="profil flex flex-col text-center items-center gap-4 p-4 border-2 border-white rounded-md">
            <div class="photo overflow-hidden w-36 h-36 rounded-md border-2 border-black">
              <img src="./images/layanan/vasilitas4.jpg" class="object-cover w-full h-full" alt="Foto Profil">
            </div>
            <h3 class="font-semibold text-white">Kerjasama Luas</h3>
            <p class="text-sm text-white">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae
              quibusdam.
            </p>
          </div>
        </div>
      </div>
          
    </section>

    <!-- Section ke empat -->
    <section class="pt-10">
      <div class="container px-4 mx-auto flex flex-col items-center w-full h-full md:mb-10">
        <h1 class="text-2xl md:text-3xl font-bold font-Libre mb-2">Jurusan di SMA TI <span class="text-[#6592ec]">HSI-IDN</span></h1>
        <p class="text-sm md:text-lg text-center leading-normal mb-5">Beberapa program yang akan diajarkan di SMA TI HSI-IDN</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 md:grid-cols-5 gap-4 mb-5">
          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 md:gap-4 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M232,112H136V88h8a16,16,0,0,0,16-16V40a16,16,0,0,0-16-16H112A16,16,0,0,0,96,40V72a16,16,0,0,0,16,16h8v24H24a8,8,0,0,0,0,16H56v32H48a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16H80a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16H72V128H184v32h-8a16,16,0,0,0-16,16v32a16,16,0,0,0,16,16h32a16,16,0,0,0,16-16V176a16,16,0,0,0-16-16h-8V128h32a8,8,0,0,0,0-16ZM112,40h32V72H112ZM80,208H48V176H80Zm128,0H176V176h32Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Teknik Komputer dan Jaringan</h3>
            <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>
          </div>

          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M200,48H136V16a8,8,0,0,0-16,0V48H56A32,32,0,0,0,24,80V192a32,32,0,0,0,32,32H200a32,32,0,0,0,32-32V80A32,32,0,0,0,200,48Zm16,144a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V80A16,16,0,0,1,56,64H200a16,16,0,0,1,16,16Zm-52-56H92a28,28,0,0,0,0,56h72a28,28,0,0,0,0-56Zm-24,16v24H116V152ZM80,164a12,12,0,0,1,12-12h8v24H92A12,12,0,0,1,80,164Zm84,12h-8V152h8a12,12,0,0,1,0,24ZM72,108a12,12,0,1,1,12,12A12,12,0,0,1,72,108Zm88,0a12,12,0,1,1,12,12A12,12,0,0,1,160,108Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Robotik</h3>
                        <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>

          </div>

          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Desain dan Editing</h3>
                        <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>

          </div>


          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M164.44,105.34l-48-32A8,8,0,0,0,104,80v64a8,8,0,0,0,12.44,6.66l48-32a8,8,0,0,0,0-13.32ZM120,129.05V95l25.58,17ZM216,40H40A16,16,0,0,0,24,56V168a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,128H40V56H216V168Zm16,40a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16H224A8,8,0,0,1,232,208Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Vidio Photography</h3>
                        <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>

          </div>

          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M247.15,212.42l-56-112a8,8,0,0,0-14.31,0l-21.71,43.43A88,88,0,0,1,108,126.93,103.65,103.65,0,0,0,135.69,64H160a8,8,0,0,0,0-16H104V32a8,8,0,0,0-16,0V48H32a8,8,0,0,0,0,16h87.63A87.76,87.76,0,0,1,96,116.35a87.74,87.74,0,0,1-19-31,8,8,0,1,0-15.08,5.34A103.63,103.63,0,0,0,84,127a87.55,87.55,0,0,1-52,17,8,8,0,0,0,0,16,103.46,103.46,0,0,0,64-22.08,104.18,104.18,0,0,0,51.44,21.31l-26.6,53.19a8,8,0,0,0,14.31,7.16L148.94,192h70.11l13.79,27.58A8,8,0,0,0,240,224a8,8,0,0,0,7.15-11.58ZM156.94,176,184,121.89,211.05,176Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Bahasa dan Public Speaking</h3>
            <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>

          </div>

          <div class="w-36 md:w-40 flex flex-col px-2 py-4 gap-3 bg-blue-600 rounded-md">
            <div class="bg-white p-2 md:p-3 w-10 md:w-12 h-10 md:h-12 m-auto rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256"><path d="M232,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H24a8,8,0,0,0-8,8V200a8,8,0,0,0,8,8H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h72a8,8,0,0,0,8-8V56A8,8,0,0,0,232,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64ZM160,88h40a8,8,0,0,1,0,16H160a8,8,0,0,1,0-16Zm48,40a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,128Zm0,32a8,8,0,0,1-8,8H160a8,8,0,0,1,0-16h40A8,8,0,0,1,208,160Z"></path></svg>
            </div>
            <h3 class="text-sm text-center text-white font-bold">Pelajaran Ilmu Agama</h3>
            <p class="text-xs font-light text-white text-center">Lihat Selengkapnya</p>
          </div>
        </div>
      </div>
    </section>

<!-- FOOTER -->
    <footer class="h-fit py-16 px-7 bg-blue-700 flex">
      <div class="grid grid-cols-2 lg:grid-cols-5 justify-center items-center gap-5 text-white">
        <div class="lg:col-span-2">
          <h1 class="font-bold text-xl md:text-2xl lg:text-3xl mb-5">
            SMA IT HSI-IDN
          </h1>
          <p class="text-sm md:text-base font-light">
            Sekolah adalah tempat mencetak penerus bangsa yang berkualitas dan berprestasi di segala 
            bidang yang dapat bersaing di dunia internasional
          </p>
        </div>
        <div class="">
          <h3 class="text-base md:text-lg font-bold mb-3">Quick Links</h3>
          <ul class="font-light">
            <li>Beranda</li>
            <li>Tentang Kami</li>
            <li>Layanan</li>
            <li>Program</li>
          </ul>
        </div>
        <div class="">
          <h3 class="text-base md:text-lg font-bold mb-3">Pages</h3>
          <ul class="font-light">
            <li>Our Blog</li>
            <li>Out Team</li>
            <li>Testimonial</li>
            <li>CTA</li>
          </ul>
        </div>
        <div class="">
          <h3 class="text-base md:text-lg font-bold mb-3">Follow Us</h3>
          <ul class="font-light">
            <li>Facebook</li>
            <li>Instagram</li>
            <li>Youtube</li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
