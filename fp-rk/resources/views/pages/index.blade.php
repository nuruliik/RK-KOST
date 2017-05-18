@extends('parts.master')

@section('title', 'Ujian Nasional Online Judge')

@section('content')
<div id="headline" class="section">
    <h1 style="margin-bottom:0; color:#fff">Jadilah Pelajar Cerdas</h1>
    <p style="margin-bottom:0">Daftar UNOJ sekarang juga untuk kelancaran Ujian Nasionalmu nanti.</p>
    <h4 style="margin-bottom:2rem; margin-top:0; color:#fff"><b>1730</b> Pengerjaan, <b>530</b> Pengguna, <b>73</b> Set soal</h4>
    <button class="button white outline big"><b>Daftar dan Mulai Belajar</b></button>
</div>
<div class="section">
    <div class="row container gutters">
        <div class="col col-12">
            <h2>Jelajah Soal</h2>
                        
            <div class="row gutters">
                <div class="col col-2">
                    <ul class="unstyled soalOption">
                        <li><a href="#soalSMA" data-component="toggleme" data-target="#soalSMA" style="font-size:1.2em; font-weight:bold">SMA <span class="caret down"></span></a></li>
                        <ul id="soalSMA" class="open unstyled">
                            <li><a href="#!">B. Indonesia</a></li>
                            <li><a href="#!">B. Inggris</a></li>
                            <li><a href="#!">Matematika</a></li>
                            <li><a href="#!">Fisika</a></li>
                            <li><a href="#!">Biologi</a></li>
                            <li><a href="#!">Kimia</a></li>
                        </ul>
                        <li><a href="#soalSMP" data-component="toggleme" data-target="#soalSMP" style="font-size:1.2em; font-weight:bold">SMP <span class="caret down"></span></a></li>
                        <ul id="soalSMP" class="hide unstyled">
                            <li><a href="#!">B. Indonesia</a></li>
                            <li><a href="#!">B. Inggris</a></li>
                            <li><a href="#!">Matematika</a></li>
                            <li><a href="#!">IPA</a></li>
                        </ul>
                        <li><a href="#soalSD" data-component="toggleme" data-target="#soalSD" style="font-size:1.2em; font-weight:bold">SD <span class="caret down"></span></a></li>
                        <ul id="soalSD" class="hide unstyled">
                            <li><a href="#!">B. Indonesia</a></li>
                            <li><a href="#!">Matematika</a></li>
                            <li><a href="#!">IPA</a></li>
                        </ul>
                    </ul>
                </div>
                <div class="col col-8">
                    <table>
                        <thead>
                            <tr style="font-weight:bold; font-size:1.2em">
                                <td>Nama Soal</td>
                                <td>Mata Pelajaran</td>
                                <td>Jenjang</td>
                                <td>Uploader</td>
                                <td>Pengerjaan</td>
                                <td>Kesuksesan</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @for($j=0;$j<5;$j++)
                            <tr>
                                <td>Ujian Nasional 2016</td>
                                <td>IPA</td>
                                <td>SMP</td>
                                <td>ersaldyraisha</td>
                                <td>21x</td>
                                <td>61.7%</td>
                                <td><a href="#!" style="color:#1c86f2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <b>Kerjakan</b></a></td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
<!--                <span id="tingkat"></span>-->
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="row container gutters">
        <div class="col col-6">
            <h2>Ranking</h2>
            <table>
                <thead>
                    <tr>
                        <td>Rank</td>
                        <td>Username</td>
                        <td>Nilai</td>
                        <td>Pengerjaan</td>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=5; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td>ersaldyraisha</td>
                        <td>210</td>
                        <td>12x</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('pagescript')
<script>
    $(document).ready(function(){
        $('#tingkat').html('sma');
        $('.tabTrigger').click(function(){
            $value = $(this).attr('value');
            $('.tabTrigger').parent().removeClass('active');
            $(this).parent().addClass('active');
            //$('#tingkat').html($value);
        });
    });
</script>
@endsection