@extends('layout')

@section('content')
    <!-- Header -->
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h4 class="mb-0 mt-3 fw-semibold">i - P a r t</h4>
                    <p>Pengaduan Keluhan Mitra IKR</p>
                </a>

                <div class="navbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <img class="iconplus" src="assets/plniconplus.png" alt="" width="100" />
                                <img class="iconnet mb-3 ms-4" src="assets/logo-iconnet.png" alt=""
                                    width="120" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center mt-5">
            <h2 class="fw-bold text-white mt-3">
                Layanan Pengaduan Keluhan Mitra IKR
            </h2>
            <p class="text-white mb-5">
                Sampaikan laporan anda terkait keluhan kepada ICONNET
            </p>
        </div>

        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>
    <!-- Header -->

    <!-- Menu -->
    <section class="menu">
        <div class="container d-flex justify-content-center">
            <button type="button" id="form_open" class="mb-lg-0 mb-md-0 mb-4 btn_keluhan d-flex align-items-center">
                <span>
                    <img src="assets/icon-edit.png" alt="Icon Edit" width="50" />
                </span>

                <div class="title_menu text-start ms-3">
                    <h5 class="fw-bold mb-1">Kirim Keluhan</h5>
                    <p>Isi keluhan anda pada menu ini</p>
                </div>
            </button>
            <button type="button" id="data_open" class="ms-lg-5 ms-md-5 ms-sm-0 btn_keluhan d-flex align-items-center">
                <span>
                    <img src="assets/icon-search.png" alt="Icon Search" width="50" />
                </span>

                <div class="title_menu text-start ms-3">
                    <h5 class="fw-bold mb-1">Daftar Keluhan Mitra</h5>
                    <p>Lihat daftar keluhan mitra</p>
                </div>
            </button>
        </div>

        <div class="icon_menu text-center">
            <a href="https://www.instagram.com/iconnet.jatengdiy/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="https://iconnet.id/" target="_blank"><i class="bi bi-globe"></i></a>
            <a href="https://wa.me/6281112002123" target="_blank"><i class="bi bi-whatsapp"></i></a>
            <a href="mailto:cc.iconnet@iconpln.co.id" target="_blank"><i class="bi bi-envelope"></i></a>
        </div>
    </section>
    <!-- Menu -->

    <div class="overlay"></div>

    <!-- Form Pop Up -->
    <section class="popup">
        <div class="form_keluhan">
            <div class="head_title pb-4">
                Form Laporan Keluhan
                <span><i class="bi bi-x form_close"></i></span>
            </div>

            <form action="/welcome" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input_box">
                    <span class="title">Nama Pelapor</span>
                    <input type="text" name="name" id="nama_pelapor" placeholder="Masukkan Nama Pelapor"
                        maxlength="50" autofocus required />
                </div>

                <div class="input_box">
                    <span class="title">Deskripsi Laporan Keluhan</span>
                    <textarea name="description" id="deskripsi_laporan" cols="50" rows="4" placeholder="Jelaskan Keluhan Anda"
                        required></textarea>
                </div>

                <div class="input_box">
                    <span class="title">Nama Mitra IKR</span>
                    <select name="mitra" id="nama_mitra">
                        <option selected disabled>Pilih Mitra IKR</option>
                        @foreach ($mitra as $item)
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                            <!-- Menggunakan $item->nama untuk nilai dan teks opsi -->
                        @endforeach
                    </select>
                </div>

                <div class="input_box">
                    <span class="title berkas">Berkas Laporan</span>
                    <input class="custom_file" type="file" name="file" id="berkas_laporan" />
                </div>

                <div class="button d-flex justify-content-end">
                    <input type="submit" value="SUBMIT" />
                </div>
            </form>
        </div>
    </section>
    <!-- Form Pop Up -->

    <!-- Data Keluhan Pop UP -->
    <section class="data_popup">
        <div class="data_keluhan">
            <div class="head_title pb-4">
                Daftar Laporan Keluhan
                <a id="toggleFilter" class="filter ms-auto me-lg-5 me-md-5 me-2">
                    <i class="bi bi-funnel-fill"></i>
                    Filter
                    <span class="arrow_down"><i class="bi bi-chevron-down"></i></span>
                    <span class="arrow_up"><i class="bi bi-chevron-up"></i></span>
                </a>
                <span><i class="bi bi-x data_close"></i></span>
            </div>

            <div class="input_filter">
                <div class="search_data">
                    <form action="/search" method="get">
                        <div class="input_data">
                            <span class="title_name">Nomor Laporan</span>
                            <input type="input" name="nomor_laporan" id="nomor_laporan"
                                placeholder="Cari Nomor Laporan" />
                        </div>
                        <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="laporan">
                <div class="table-container">
                    <table>
                        <tr>
                            <th>Nomor Laporan</th>
                            <th class="bagian_1">Nama Pelapor</th>
                            <th class="bagian_1">Nama Mitra IKR</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Status Pengaduan</th>
                            <th>Berkas Laporan</th>
                        </tr>

                        {{-- ICON FILE --}}
                        @php
                            function getFileIconClass($fileExtension)
                            {
                                switch ($fileExtension) {
                                    case 'jpg':
                                    case 'jpeg':
                                        return 'bi bi-filetype-jpg';
                                    case 'png':
                                        return 'bi bi-filetype-png';
                                    case 'heic':
                                        return 'bi bi-filetype-heic';
                                    case 'svg':
                                        return 'bi bi-filetype-svg';
                                    default:
                                        return 'bi bi-file-earmark';
                                }
                            }
                        @endphp

                        @if ($data->isEmpty())
                            <tr>
                                <td class="fw-semibold" colspan="6">Data tidak tersedia saat ini.</td>
                            </tr>
                        @else
                            @foreach ($data as $daftar)
                                <tr>
                                    <td>{{ $daftar->report_number }}</td>
                                    <td class="bagian_1">{{ $daftar->name }}</td>
                                    <td class="bagian_1">{{ $daftar->mitra }}</td>
                                    <td>{{ \Carbon\Carbon::parse($daftar->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        @if ($daftar->status)
                                            <img src="assets/yes-icon.png" alt="" width="24px">
                                        @else
                                            <img src="assets/no-icon.png" alt="" width="24px">
                                        @endif
                                    </td>
                                    <td class="file">
                                        <a href="{{ asset('storage/' . $daftar->file) }}">
                                            <i
                                                class="bi {{ getFileIconClass(pathinfo($daftar->file, PATHINFO_EXTENSION)) }} fs-3 fw-bold"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Data Keluhan Pop UP -->
@endsection
