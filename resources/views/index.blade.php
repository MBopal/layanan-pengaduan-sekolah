@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top p-3 shadow-sm">
    <div class="container ">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" alt="SMK Telkom Jakarta" height="36">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-decoration-underline activenav" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#profil">Profil Sekolah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aspirasi">Aspirasi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-section" id="home">
    <div class="container">
        <h1 class="display-4 fw-bolder">PELAYANAN PENGADUAN SISWA<br>SMK TELKOM JAKARTA</h1>
        <div class="mt-3">
            <a href="#profil" class="btn btn-light me-3 fw-semibold p-3 rounded-3">Profil Sekolah</a>
            <a href="#aspirasi" class="btn btn-merah fw-semibold p-3 rounded-3">Buat Aspirasi</a>
        </div>
    </div>
</section>

<section id="profil" class="section-padding">
    <div class="container mt-5">
        <h2 class="text-center mb-5 fw-bold">PROFIL SEKOLAH</h2>
        <div class="clearfix textjustify">
                <img src="img/sekolah.png" alt="SMK Telkom Jakarta" class="col-md-6 float-md-start me-md-3 rounded">
                <p>
                    SMK Telkom Jakarta yang sebelumnya bernama SMK Telkom Sandhy Putra Jakarta sejak Maret 2014 berubah menjadi SMK Telkom Jakarta dengan dicanangkannya Telkom Schools oleh Telkom Foundation.
                </p>
                <p>
                    Yayasan Sandhykara Putra Telkom (YSPT) pada awalnya didirikan oleh persatuan istri  karyawan PERUMTEL  (sekarang PT. Telekomunikasi Indonesia)  pada tanggal 17 Januari 1980 dengan Akta Notaris Masri Husen, S.H. Anggaran Dasar YSPT yang merupakan landasan operasional yayasan senantiasa mengadakan penyesuaian dengan situasi dan kondisi yang ada, sehingga  telah mengalami beberapa kali  perubahan dan terakhir dengan Akta Notaris Erny Kencanawati, S.H., M.H. Nomor 15 tanggal 16 Juni 2006 telah tercatat dalam daftar Yayasan berdasarkan surat DIRJEN Administrasi Hukum Umum Departemen Hukum dan Hak Asasi Manusia No : C-HT.01.09-34 tanggal 29 Januari 2007.  Undang-undang No.16 tahun 2001 tentang yayasan dan perubahannya dalam undang-undang No.28 tahun 2004 tentang perubahan atas undang-undang No.16 tahun 2001 tentang yayasan mengharuskan setiap yayasan untuk menyesuaikan Anggaran Dasar dengan undang-undang tersebut. Pada saat ini YSPT telah menyesuaikan Anggaran Dasar yang baru yang mengacu pada Undang Undang RI Nomor.16 tahun 2001 tentang Yayasan jo UU RI Nomor. 28 tahun 2004 tentang perubahaan atas UU Nomor.16 tahun 2001 tentang Yayasan.
                </p>

                <p>
                    Maksud dan tujuan didirikannya Yayasan ini adalah untuk ikut berperan serta dalam meningkatkan kesejahteraan keluarga besar Perusahaan Perseroan (Persero) PT. Telekomunikasi Indonesia, Tbk khususnya dan menunjang pembangunan masyarakat Indonesia pada umumnya melalui bidang Pendidikan dan Sosial.
                </p>
                <p>
                    Telkom Schools merupakan perubahan dari Sekolah Telkom Sandhyputra yang dikelola oleh Yayasan Sandhykara Putra Telkom (YSPT). Peluncuran Telkom Schools dilaksanakan di SMK Telkom Jakarta pada tanggal 23 Januari 2014 oleh Dirjen Pendidikan Menengah Kemendikbud RI Prof. Dr. Ir. Achmad Jazidie beserta Dewan Pengurus dan Pembina Yayasan Sandhykara Putra Telkom.
                </p>
                <p>
                    Selanjutnya mulai tanggal 21 Maret 2014 berdasarkan arahan dari jajaran Direksi PT TELKOM selaku Dewan pembina, Yayasan Sandhykara Putra Telkom secara resmi digabung dengan Yayasan Pendidikan Telkom (YPT) dan berubah nama menjadi Telkom Foundation. Sehingga Telkom Foundation selanjutnya menjadi Yayasan pengelola Telkom Schools untuk tingkat pendididan Dasar dan Menengah serta Telkom University untuk tingkat pendidikan tinggi.
                </p>
                <p>
                    Telkom Schools bersama Telkom University menjadi sarana pengabdian PT. Telkom grup atau program CSR (Coorporate Social Responsibility) PT. Telkom grup di bidang pengembangan pendidikan bagi bangsa Indonesia khususnya pendidikan penguasaan teknologi ICT khususya untuk mendukung pengembangan industri TIMES (Telecommunication Information Media Edutainment & Services).
                </p>

                <h4 class="mt-4 fw-semibold">Visi</h4>
                <p>
                    Mewujudkan SMK Telkom Jakarta sebagai Sekolah Menengah Kejuruan Unggulan yang menghasilkan tamatan yang memiliki kompetensi sesuai kebutuhan Industri Telekomunikasi dan Teknologi Informatika, professional, berakhlak mulia dan mampu melanjutkan ke jenjang pendidikan yang lebih tinggi.
                </p>
                <h4 class="mt-4 fw-semibold">Misi</h4>
                <ul class="list-unstyled">
                    <li class="mb-3">• Menyelenggarakan pendidikan dan pelatihan di Bidang Keahlian Teknologi Telekomunikasi dan Teknologi Komunikasi Informasi yang dinamis dan disiplin dengan menjunjung tinggi norma norma yang berlaku</li>
                    <li class="mb-3">• Menerapkan Sistem Manajemen Mutu ISO 9001:2008 guna tercapainya peningkatan mutu penyelenggaraan dan layanan pendidikan yang berkesinambungan</li>
                    <li class="mb-3">• Memberikan pelayanan terbaik kepada para siswa/i, orang tua/wali dan stake holder lainnya</li>
                    <li class="mb-3">• Memberikan kesejahteraan dan kesempatan untuk meningkatkan kompetensi kepada Guru dan Karyawan/ti</li>
                    <li class="mb-3">• Meningkatkan peran serta masyarakat dalam penyelenggaraan pendidikan dan pengembangan sekolah</li>
                </ul>
        <!-- <div class="row align-items-center">
            <div class="col-md-6">
                <img src="img/sekolah.png" alt="Sekolah" class="img-fluid rounded">
            </div>
            <div class="col-md-6 textjustify">
                <p>
                    SMK Telkom Jakarta yang sebelumnya bernama SMK Telkom Sandhy Putra Jakarta sejak Maret 2014 berubah menjadi SMK Telkom Jakarta dengan dicanangkannya Telkom Schools oleh Telkom Foundation.    
                </p>
                <p class="textjustify">Yayasan Sandhykara Putra Telkom (YSPT) pada awalnya didirikan oleh persatuan istri karyawan PERUMTEL (sekarang PT. Telekomunikasi Indonesia) pada tanggal 17 Januari 1980 dengan Akta Notaris Masri Husen, S.H. Anggaran Dasar YSPT yang merupakan landasan operasional yayasan senantiasa mengadakan penyesuaian dengan situasi dan kondisi yang ada, sehingga telah mengalami beberapa kali  perubahan dan terakhir dengan Akta Notaris Erny Kencanawati, S.H., M.H. Nomor 15 tanggal 16 Juni 2006 telah tercatat dalam daftar Yayasan berdasarkan surat DIRJEN Administrasi Hukum Umum Departemen Hukum dan Hak Asasi Manusia No : C-HT.01.09-34 tanggal 29 Januari 2007.  Undang-undang No.16 tahun 2001 tentang yayasan dan perubahannya dalam undang-undang No.28 tahun 2004 tentang perubahan atas undang-undang No.16 tahun 2001 tentang yayasan mengharuskan setiap yayasan untuk menyesuaikan Anggaran Dasar dengan undang-undang tersebut. Pada saat ini YSPT telah menyesuaikan Anggaran Dasar yang baru yang mengacu pada Undang Undang RI Nomor.16 tahun 2001 tentang Yayasan jo UU RI Nomor. 28 tahun 2004 tentang perubahaan atas UU Nomor.16 tahun 2001 tentang Yayasan.</p>
                <h5 class="mt-4 fw-semibold">Visi</h5>
                <p>Mewujudkan SMK Telkom Jakarta sebagai Sekolah Menengah Kejuruan Unggulan yang menghasilkan tamatan yang memiliki kompetensi sesuai kebutuhan Industri Telekomunikasi dan Teknologi Informatika, professional, berakhlak mulia dan mampu melanjutkan ke jenjang pendidikan yang lebih tinggi.</p>
                <h5 class="fw-semibold">Misi</h5>
                <ul>
                    <li>Menyelenggarakan pendidikan dan pelatihan di Bidang Keahlian Teknologi Telekomunikasi dan Teknologi Komunikasi Informasi yang dinamis dan disiplin dengan menjunjung tinggi norma norma yang berlaku</li>
                    <li>Menerapkan Sistem Manajemen Mutu ISO 9001:2008 guna tercapainya peningkatan mutu penyelenggaraan dan layanan pendidikan yang berkesinambungan</li>
                    <li>Memberikan pelayanan terbaik kepada para siswa/I, orang tua/wali dan stake holder lainnya</li>
                    <li>Memberikan kesejahteraan dan kesempatan untuk meningkatkan kompetensi kepada Guru dan Karyawan/ti</li>
                    <li>Meningkatkan peran serta masyarakat dalam penyelenggaraan pendidikan dan pengembangan sekolah</li>
                </ul>
            </div>
        </div> -->
    </div>
</section>

<section id="aspirasi" class="form-section">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">ASPIRASI</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select class="form-select">
                                    <option selected>Pilih kategori...</option>
                                    <option selected>Rusak</option>
                                    <option selected>Coret-Coret</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keluhan</label>
                                <textarea class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-merah">Kirim</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
