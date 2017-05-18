@extends('parts.master')

@section('title', 'Ujian Nasional Online Judge')

@section('content')
<div id="headline" class="section first">
    <h1 style="margin-bottom:0; color:#fff">Belajar Ramai-Ramai</h1>
    <p style="margin-bottom:0">UN Online Judge merupakan platform crowdsourcing soal-soal untuk menempuh Ujian Nasional.</p>
    <h4 style="margin-bottom:2rem; margin-top:0; color:#fff"><b>1730x</b> Pengerjaan, <b>65</b> Guru, <b>330</b> Murid, <b>73</b> Set soal</h4>
    <a href="login" class="button white outline big"><b>Daftar dan Mulai Belajar</b></a>
</div>
<div class="section">
    <div class="row container gutters">
        <div class="col col-12">
            <div class="row">
                <div class="col col-6">
                    <h2><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Soal Terbaru</h2>
                </div>
                <div class="col col-6">
                    <a href="soal" class="button primary pull-right"><i class="fa fa-cube" aria-hidden="true"></i> Liat Semua Soal</a>
                </div>
            </div>
            <div class="row gutters">
                <div class="col col-2">
                    <table>
                        <thead>
                            <tr style="font-weight:bold; font-size:1.2em">
                                <td>Kategori</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul class="unstyled soalOption">
                                        <li><a href="#soalSMAA" data-component="toggleme" data-target="#soalSMAA" style="font-size:1.2em; font-weight:bold">SMA (IPA) <span class="caret down"></span></a></li>
                                        <ul id="soalSMAA" class="open unstyled">
                                            <li><a href="#!">B. Indonesia</a></li>
                                            <li><a href="#!">B. Inggris</a></li>
                                            <li><a href="#!">Matematika</a></li>
                                            <li><a href="#!">Fisika</a></li>
                                            <li><a href="#!">Biologi</a></li>
                                            <li><a href="#!">Kimia</a></li>
                                        </ul>
                                        <li><a href="#soalSMAS" data-component="toggleme" data-target="#soalSMAS" style="font-size:1.2em; font-weight:bold">SMA (IPS) <span class="caret down"></span></a></li>
                                        <ul id="soalSMAS" class="hide unstyled">
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
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col col-10">
                    <table>
                        <thead>
                            <tr style="font-weight:bold; font-size:1.2em">
                                <td>Nama Soal</td>
                                <td>Mata Pelajaran</td>
                                <td>Jenjang</td>
                                <td>Pengunggah</td>
                                <td>Pengerjaan</td>
                                <td>% Sukses</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @for($j=0;$j<8;$j++)
                            <tr>
                                <td>Ujian Nasional 2016</td>
                                <td>Ilmu Pengetahuan Alam</td>
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
    <div class="row container">
        <div class="col col-12" style="margin-bottom:1.5rem">
            <h2><i class="fa fa-question-circle" aria-hidden="true"></i> Kenapa Harus UNOJ?</h2>
        </div>
        <div class="col col-3">
            <div style="padding-right:2rem; border-right:dashed 1px #d6d6d6; text-align:center">
                <i class="fa fa-users fa-5x" aria-hidden="true" style="margin-bottom:1.5rem"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed purus eget felis aliquet finibus. Praesent congue eu justo at lobortis. </p>
            </div>
        </div>
        <div class="col col-3">
            <div style="padding:0 2rem; border-right:dashed 1px #d6d6d6; text-align:center">
                <i class="fa fa-laptop fa-5x" aria-hidden="true" style="margin-bottom:1.5rem"></i>
                <p>Nulla posuere rhoncus lacinia. Maecenas non risus neque. Quisque lorem nisi, viverra id odio quis, imperdiet aliquet. </p>
            </div>
        </div>
        <div class="col col-3">
            <div style="padding:0 2rem; border-right:dashed 1px #d6d6d6; text-align:center">
                <i class="fa fa-tasks fa-5x" aria-hidden="true" style="margin-bottom:1.5rem"></i>
                <p>Vestibulum vel quam nibh. Cras vehicula posuere tortor, at lobortis elit auctor ac. Vestibulum id libero eu ligula.</p>
            </div>
        </div>
        <div class="col col-3">
            <div style="padding-left:2rem; text-align:center">
                <i class="fa fa-line-chart fa-5x" aria-hidden="true" style="margin-bottom:1.5rem"></i>
                <p>Vestibulum vel quam nibh. Cras vehicula posuere tortor, at lobortis elit auctor ac. Vestibulum id libero eu ligula.</p>
            </div>
        </div>
<!--
        <div class="col col-6">
            <h2><i class="fa fa-trophy" aria-hidden="true"></i> Peringkat</h2>
            <table>
                <thead>
                    <tr>
                        <td>Peringkat</td>
                        <td>Nama</td>
                        <td>Sekolah</td>
                        <td>Jenjang</td>
                        <td>Pengerjaan</td>
                        <td>Nilai</td>
                    </tr>
                </thead>
                <tbody>
                    @for($i=1; $i<=5; $i++)
                    <tr>
                        <td>{{$i}}</td>
                        <td>Andi Ersaldy Raisha</td>
                        <td>SMAN 78 Jakarta</td>
                        <td>SMA (IPA)</td>
                        <td>12x</td>
                        <td>210</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
-->
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