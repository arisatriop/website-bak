@extends('layout.app2')

@section('title', 'BAK - Profile Audit')
    
    
@section('content')

<div class="m-main-content">
    @foreach ($img as $i)@endforeach
    <img src="{{asset('/uploads/department_images/' . $i->image)}}" class="img-fluid mt-n3 my-img-fluid" style="width: 100%" alt="Responsive image">
    <ul class="nav justify-content-center mt-5" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link text-center" id="ph-tab" data-toggle="tab" href="#ph" role="tab" aria-controls="ph" aria-selected="true"><i class="fas fa-crown fa-3x"></i><br><p class="mt-1">PH</p></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link active text-center" id="audit-tab" data-toggle="tab" href="#audit" role="tab" aria-controls="audit" aria-selected="false"><i class="fas fa-balance-scale fa-3x"></i><br><p class="mt-1">Audit</p></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-center" id="psdm-tab" data-toggle="tab" href="#psdm" role="tab" aria-controls="psdm" aria-selected="false"><i class="fas fa-child fa-3x"></i><br><p class="mt-1">Psdm</p></a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-center" id="litbang-tab" data-toggle="tab" href="#litbang" role="tab" aria-controls="litbang" aria-selected="false"><i class="fas fa-pen-alt fa-3x"></i><br><p class="mt-1">Litbang</p></a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="ph" role="tabpanel" aria-labelledby="ph-tab">
            <div class="container">
                <h3 class="text-center mt-5 mb-3">PENGURUS HARIAN</h3>
                <p class="text-justify">Pengurus Harian adalah pimpinan utama BAK UII yang bertugas untuk memimpin dan mengarahkan roda organisasi, 
                    bertanggungjawab penuh atas keseluruhan organisasi, dan mengambil keputusan tertinggi mengenai kebijakan 
                    dan tata kelola organisasi selama satu periode. Pengurus harian terdiri dari Ketua BAK UII yang merupakan 
                    penanggungjawab utama, pengambilan kebijakan tertinggi serta berhak untuk mengatur organisasi dengan 
                    berpedoman pada Visi dan Misi. Dalam pelaksanaannya Ketua dibantu oleh Sekretatis dan Bendahara.</p>
                <!-- <h3 class="text-center mt-5 mb-3">Tugas dan Tanggung Jawab</h3>
                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus pariatur odio modi molestias enim. Inventore, adipisci quo. Minus ipsa beatae laboriosam accusantium. Culpa, quaerat vero.</p>
                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus pariatur odio modi molestias enim. Inventore, adipisci quo. Minus ipsa beatae laboriosam accusantium. Culpa, quaerat vero.</p>
                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus pariatur odio modi molestias enim. Inventore, adipisci quo. Minus ipsa beatae laboriosam accusantium. Culpa, quaerat vero.</p> -->
            </div>
            <h3 class="text-center mt-5 mb-5">ANGGOTA</h3>
            <!-- Testimony -->
            <section class="ftco-section testimony-section mb-5">
                <div class="container-fluid px-md-5">
                    <div class="row ftco-animate justify-content-center">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                @foreach ($ph as $p)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $p->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$p->quote}}</p>
                                            <p class="name">{{$p->name}}</p>
                                            <span class="position">{{$p->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                                @foreach ($phs as $p)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $p->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$p->quote}}</p>
                                            <p class="name">{{$p->name}}</p>
                                            <span class="position">{{$p->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Testimony -->
        </div>

        <div class="tab-pane fade show active" id="audit" role="tabpanel" aria-labelledby="audit-tab">
            <div class="container">
                <h3 class="text-center mt-5 mb-3">DIVISI AUDIT</h3>
                <p class="text-justify">Divisi Audit bertugas melakukan proses pengumpulan dan pengujian bukti secara sistematis dan objektif tentang aktivitas atau asersi ekonomi suatu organisasi maupun kepanitiaan untuk menentukan tingkat kesesuaian asersi dengan kriteria yang berlaku dan mengkomunikasikan hasil pengujian kepada pihak-pihak yang berkepentingan.</p>
                <h3 class="text-center mt-5 mb-3">Tugas dan Tanggung Jawab</h3>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bertanggungjawab langsung kepada Ketua BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Melaksanakan segala bentuk proses pemeriksaan laporan keuangan suatu entitas baik pada kelembagaan maupun kepanitiaan hingga mencapai tujuan yang diperlukan oleh BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Membentuk sturuktur tim pemeriksa apabila diperlukan dalam menunjang proses pemeriksaan laporan keuangan.</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Melakukan komunikasi antara obyek pemeriksa dengan tim pemeriksa sebelum masa pemeriksaan dimulai hingga saat ketika pemeriksaan selesai.</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Membantu Ketua BAK UII dalam menginformasikan hasil-hasil proses laporan keuangan kepada pihak-pihak yang berkepentingan.</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Dapat menyimpan informasi yang bersifat rahasia untuk tidak diketahui pengurus BAK UII diluar Pengurus Audit dengan sepengetahuan dan seizin Ketua BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">7</th>
                      <td>Menjaga kerahasiaan segala bentuk informasi, data, ataupun hal-hal yang berkaitan dengan tugas dan wewenang Pengurus Audit dari selain pengurus BAK UII terkecuali adanya tujuan tertentu yang menyangkut kepentingan BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">8</th>
                      <td>Menyelenggarakan program kerja yang berkait dengan tugas dan wewenang audit dengan persetujuan rapat pengurus BAK UII.</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <h3 class="text-center mt-5 mb-5">ANGGOTA DIVISI</h3>
            <!-- Testimony -->
            <section class="ftco-section testimony-section mb-5">
                <div class="container-fluid px-md-5">
                    <div class="row ftco-animate justify-content-center">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                @foreach ($audit as $a)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $a->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$a->quote}}</p>
                                            <p class="name">{{$a->name}}</p>
                                            <span class="position">{{$a->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                                @foreach ($audits as $a)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $a->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$a->quote}}</p>
                                            <p class="name">{{$a->name}}</p>
                                            <span class="position">{{$a->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Testimony -->
        </div>

        <div class="tab-pane fade" id="psdm" role="tabpanel" aria-labelledby="psdm-tab">
            <div class="container">
                <h3 class="text-center mt-5 mb-3">Divisi Pengembangan Sumber Daya Mahasiswa</h3>
                <p class="text-justify">Divisi PSDM bertugas mengambil peran dan tanggung jawab untuk menggali, mengoptimalkan, dan membina sumber daya mahasiswa yang ada agar mahasiswa tersebut dapat mengaktualisasikan peran dan fungsinya.</p>
                <h3 class="text-center mt-5 mb-3">Tugas dan Tanggung Jawab</h3>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bertanggungjawab langsung kepada Ketua BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Menyelenggarakan pendidikan kepada calon pengurus BAK UII dalam bentuk rangkaian kegiatan magang untuk diproyeksikan menjadi pengurus BAK UII periode selanjutnya.</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Menyelenggarakan kegiatan-kegiatan internal guna menjaga keharmonisan kinerja pengurus BAK UII selama satu periode kedepan.</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Menyusun pedoman pelaksanaan magang sesuai dengan kebutuhan BAK UII setiap periodenya.</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Membantu Ketua BAK UII untuk menyusun opini kerja pengurus BAK UII selama satu periode.</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Menyelenggarakan program kerja yang berkait dengan tugas dan wewenang PSDM dengan persetujuan rapat pengurus BAK UII.</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <h3 class="text-center mt-5 mb-5">ANGGOTA DIVISI</h3>
            <!-- Testimony -->
            <section class="ftco-section testimony-section mb-5">
                <div class="container-fluid px-md-5">
                    <div class="row ftco-animate justify-content-center">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                @foreach ($psdm as $ps)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $ps->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$ps->quote}}</p>
                                            <p class="name">{{$ps->name}}</p>
                                            <span class="position">{{$ps->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                                @foreach ($psdms as $ps)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $ps->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$ps->quote}}</p>
                                            <p class="name">{{$ps->name}}</p>
                                            <span class="position">{{$ps->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Testimony -->
        </div>

        <div class="tab-pane fade" id="litbang" role="tabpanel" aria-labelledby="litbang-tab">
            <div class="container">
                <h3 class="text-center mt-5 mb-3">Divisi Penelitian dan Pengembangan</h3>
                <p class="text-justify">Divisi Litbang bertugas melakukan riset dalam rangkat meningkatkan kualitas internal lembaga serta mengembangkan peraturan-peraturan yang ada agar lebih baik lagi dan sesuai dengan dinamika kelembagaan.</p>
                <h3 class="text-center mt-5 mb-3">Tugas dan Tanggung Jawab</h3> 
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Bertanggungjawab langsung kepada Ketua BAK.</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Menyiapkan draft peraturan yang akan menjadi obyek penelitian dan pengembangan.</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Melakukan koordinasi aktif dengan seluruh pengurus BAK UII dalam penyusunan peraturan internal BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Melakukan riset dalam rangka memperbarui informasi terkait dengan tugas dan wewenang BAK UII dalam rangka pengembangan lembaga.</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Melakukan pengawasan dan pengarahan atas pelaksanaan peraturan-peraturan dan kode etik BAK UII.</td>
                    </tr>
                    <tr>
                      <th scope="row">6</th>
                      <td>Membantu Ketua BAK UII dalam hubungan masyarakat terkait penyampaian informasi kegiatan-kegiatan BAK UII melalui komunikasi langsung maupun media elektronik.</td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <h3 class="text-center mt-5 mb-5">ANGGOTA DIVISI</h3>
            <!-- Testimony -->
            <section class="ftco-section testimony-section mb-5">
                <div class="container-fluid px-md-5">
                    <div class="row ftco-animate justify-content-center">
                        <div class="col-md-12">
                            <div class="carousel-testimony owl-carousel">
                                @foreach ($litbang as $lit)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $lit->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$lit->quote}}</p>
                                            <p class="name">{{$lit->name}}</p>
                                            <span class="position">{{$lit->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                
                                @foreach ($litbangs as $lit)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img" style="background-image: url({{ asset('/uploads/staff_images/' . $lit->image) }})">
                                        </div>
                                        <div class="text pl-4">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="fas fa-quote-left fa-2x"></i>
                                            </span>
                                            <p class="text-justify t-text">{{$lit->quote}}</p>
                                            <p class="name">{{$lit->name}}</p>
                                            <span class="position">{{$lit->position}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END Testimony -->
        </div>
    </div>
</div>
    
@endsection