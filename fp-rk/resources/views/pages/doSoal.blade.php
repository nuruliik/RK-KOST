@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Soal-soal')

@section('content')
<div class="section first" style="background: #eee">
    <div class="container">
        <h1>Kerjakan Soal</h1>
        <h4 style="color:inherit">Ujian Nasional 2015 / SMA (IPA) / Kimia</h4>
    </div>
</div>

<div class="section container">
    
    @for($i=1;$i<=20;$i++)
    <div class="row gutters">
        <div class="col col-1">
            <h2>#{{$i}}</h2>
        </div>
        <div class="col col-11">
            <div class="row gutters">
                <div class="col col-12">
                    <div class="form-item">
                        <label><b>Pertanyaan</b></label>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi dignissim, purus sed tempor lobortis, ante sem feugiat urna, vitae condimentum libero ligula eget nibh. Aliquam nec dolor vehicula enim consectetur blandit. Aliquam sollicitudin vehicula dolor non tempus?</p>
                    </div>
                </div>
            </div>
            <hr>
            <label><b>Pilihan Jawaban</b></label>
            <form>
                <div class="row gutters">
                    <div class="col col-6">
                         <div class="form-item">
                            <label class="checkbox" for="soal1{{$i}}"><input type="radio" name="soal{{$i}}" id="soal1-{{$i}}"> A. Lorem ipsum dolor sit amet</label>
                        </div>
                    </div>
                    <div class="col col-6">
                         <div class="form-item">
                            <label class="checkbox" for="soal2-{{$i}}"><input type="radio" name="soal{{$i}}" id="soal2-{{$i}}"> D. Lorem ipsum dolor sit amet</label>
                        </div>
                    </div>
                    <div class="col col-6">
                         <div class="form-item">
                            <label class="checkbox" for="soal3-{{$i}}"><input type="radio" name="soal{{$i}}" id="soal3-{{$i}}"> B. Lorem ipsum dolor sit amet</label>
                        </div>
                    </div>
                    <div class="col col-6">
                         <div class="form-item">
                            <label class="checkbox" for="soal4-{{$i}}"><input type="radio" name="soal{{$i}}" id="soal4-{{$i}}"> E. Lorem ipsum dolor sit amet</label>
                        </div>
                    </div>
                    <div class="col col-6">
                         <div class="form-item">
                            <label class="checkbox" for="soal5-{{$i}}"><input type="radio" name="soal{{$i}}" id="soal5-{{$i}}"> C. Lorem ipsum dolor sit amet</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <hr style="margin:1rem 0">
    @endfor
    <a href="#!" class="button unoj large w100"><i class="fa fa-check" aria-hidden="true"></i> Submit</a>
</div>

@endsection

@section('pagescript')

@endsection