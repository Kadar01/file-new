@extends('template')
@section('title', 'Program Studi')
 
@section('intro-header')
  <!-- Header -->
  <header class="intro-header text-white" style="background: url('{{ asset('style/images/dd.jpg') }}') no-repeat top center;">
    <div class="container text-center">
      <h1>PROGRAM STUDI</h1>
    </div>
  </header>
  <!-- END : Header -->
@endsection
 
@section('main')
  <!-- Main -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>PROGRAM STUDI UMKT</h2>

            <b> A.FAKULTAS KESEHATAN DAN FARMASI</b>
            <br>1. S1 Kesehatan Masyarakat
            <br>2. S1 Kesehatan Lingkungan
            <br>3. D3 Kesehatan Lingkungan
            <br>4. D3 Keperawatan
            <br>5. S1 Keperawatan
            <br>6. Profesi Ners
            <br>7. S1 Farmasi<br></p>
            
            <b> B.FAKULTAS KEGURUAN DAN ILMU PENDIDIKAN</b>            
            <br>1. S1 Pendidikan Bahasa Inggris
            <br>2. S1 Pendidikan Olahraga<br></p>

            <b> C.FAKULTAS EKONOMI HUKUM POLITIK DAN PSIKOLOGI</b>

            <br>1. S1 Manajemen
            <br>2. S1 Hukum
            <br>3. S1 Psikologi
            <br>4. S1 Hubungan Internasional</br></p>

            <b> D.FAKULTAS SAINS DAN TEKNOLOGI</b>
            <br>1. S1 Teknik Informatika
            <br>2. S1 Teknik Mesin
            <br>3. S1 Teknik Sipil.</br></p>
        </div>
      </div>
    </div>
  </section>
  <!-- END : Main -->
@endsection