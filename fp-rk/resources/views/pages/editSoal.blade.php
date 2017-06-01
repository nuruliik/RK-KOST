@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Soal-soal')

@section('content')
<div class="section first" style="background: #eee">
    <div class="container">
        <h2>Edit Soal</h2>
    </div>
    <form>
        <div class="row container gutters">
            <div class="col col-6">
                <input type="text" value="Ujian Sekolah Super" placeholder="Nama Soal" maxlength="100">
                <div class="desc">Nama Soal</div>
            </div>
            <div class="col col-2">
                <select>
                    <option disabled>-</option>
                    <option selected>SMA (IPA)</option>
                    <option>SMA (IPS)</option>
                    <option>SMP</option>
                    <option>SD</option>
                </select>
                <div class="desc">Jenjang</div>
            </div>
            <div class="col col-2">
                <select>
                    <option disabled>-</option>
                    <option selected>Matematika</option>
                    <option>Kimia</option>
                    <option>Biologi</option>
                    <option>Fisika</option>
                    <option>B. Indonesia</option>
                    <option>B. Inggris</option>
                </select>
                <div class="desc">Mata Pelajaran</div>
            </div>
            <div class="col col-2">
                <input type="number" value="40" placeholder="Jumlah Soal" id="jumlahSOal" maxlength="50">
                <div class="desc">Jumlah Soal</div>
            </div>
        </div>
    </form>
</div>

<div class="section container">
    <form id="soal">
        @for($i=1;$i<=40;$i++)
        <div class="row gutters"> <div class="col col-1"> <h2>{{$i}}</h2> </div><div class="col col-11"> <div class="row gutters"> <div class="col col-10"> <div class="form-item"> <label><b>Pertanyaan</b></label> <textarea placeholder="Soal {{$i}}"></textarea> </div></div><div class="col col-2"> <div class="form-item"> <label><b>Kunci Jawaban</b></label> <input placeholder="Kunci"> </div></div></div><label><b>Pilihan Jawaban</b></label> <div class="row gutters"> <div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>A</span> <input placeholder="Pilihan A" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>D</span> <input placeholder="Pilihan D" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>B</span> <input placeholder="Pilihan B" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>E</span> <input placeholder="Pilihan E" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>C</span> <input placeholder="Pilihan C" type="text"> </div></div></div></div></div></div><hr style="margin:1rem 0">
        @endfor
        <button class="button pimary w100 big">Simpan</button>
    </form>
</div>

@endsection

@section('pagescript')
<script>
    $(document).ready(function(){
        $('#jumlahSOal').change(function(){
            $jumlahSoal = $(this).val();
            $('#soal').empty();
            for ($i=1; $i<=$jumlahSoal; $i++) { 
                $soal = '<div class="row gutters"> <div class="col col-1"> <h2>#'+$i+'</h2> </div><div class="col col-11"> <div class="row gutters"> <div class="col col-10"> <div class="form-item"> <label><b>Pertanyaan</b></label> <textarea placeholder="Soal '+$i+'"></textarea> </div></div><div class="col col-2"> <div class="form-item"> <label><b>Kunci Jawaban</b></label> <input placeholder="Kunci"> </div></div></div><label><b>Pilihan Jawaban</b></label> <div class="row gutters"> <div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>A</span> <input placeholder="Pilihan A" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>D</span> <input placeholder="Pilihan D" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>B</span> <input placeholder="Pilihan B" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>E</span> <input placeholder="Pilihan E" type="text"> </div></div></div><div class="col col-6"> <div class="form-item"> <div class="prepend w100"> <span>C</span> <input placeholder="Pilihan C" type="text"> </div></div></div></div></div></div><hr style="margin:1rem 0">';
                $('#soal').append($soal);
                
            }
            $submitButton = '<button class="button unoj large w100"><i class="fa fa-check" aria-hidden="true"></i> Buat Soal</button>';
            $('#soal').append($submitButton);
        });
    });
</script>
@endsection