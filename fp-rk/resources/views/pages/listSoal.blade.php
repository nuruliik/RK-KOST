@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Soal-soal')

@section('content')

<div id="soalHeader" class="section first">
    <div class="row gutters container">
        <div class="col col-6">
            <h2 style="margin-bottom:0; color:#fff"><i class="fa fa-cube" aria-hidden="true"></i> Kumpulan Soal</h2>
        </div>
        <div class="col col-6">
            <form style="margin-bottom:0">
                <div class="row gutters">
                    <div class="col col-4">
                        <div class="form-item">
                            <select>
                                <option selected>Semua</option>
                                <option>SMA (IPA)</option>
                                <option>SMA (IPS)</option>
                                <option>SMP</option>
                                <option>SD</option>
                            </select>
                            <div class="desc" style="color:#fff">Jenjang</div>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <select>
                                <option selected>Semua</option>
                                <option>B. Indonesia</option>
                                <option>B. Inggris</option>
                                <option>Matematika</option>
                                <option>Fisika</option>
                                <option>Kimia</option>
                                <option>Biologi</option>
                            </select>
                            <div class="desc" style="color:#fff">Mata Pelajaran</div>
                        </div>
                    </div>
                    <div class="col col-4">
                        <div class="form-item">
                            <select>
                                <option selected>Semua</option>
                                <option>2017</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                                <option>2013</option>
                                <option>2012</option>
                                <option>2011</option>
                                <option>2010</option>
                                <option>2010--</option>
                            </select>
                            <div class="desc" style="color:#fff">Tahun</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="section container">
    <a href="soal/create" class="button unoj big" style="margin-bottom:2rem"><i class="fa fa-file" aria-hidden="true"></i> Buat Soal</a>
    <table>
        <thead>
            <tr style="font-weight:bold; font-size:1.2em">
                <th>Nama Soal</th>
                <th>Mata Pelajaran</th>
                <th>Jenjang</th>
                <th>Pengunggah</th>
                <th>Pengerjaan</th>
                <th>% Sukses</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @for($j=0;$j<10;$j++)
            <tr>
                <td>Ujian Nasional 2016</td>
                <td>Ilmu Pengetahuan Alam</td>
                <td>SMP</td>
                <td>ersaldyraisha</td>
                <td>21x</td>
                <td>61.7%</td>
                <td><a href="soal/do" style="color:#1c86f2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Kerjakan</b></a></td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>

@endsection

@section('pagescript')

@endsection