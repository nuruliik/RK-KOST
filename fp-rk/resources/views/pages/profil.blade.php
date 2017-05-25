@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Profil')

@section('content')

<div class="section first">
    <div class="row gutters container">
        <div class="col col-3">
            <h2 style="margin-bottom:0">Andi Ersaldy Raisha</h2>
            <p><b>bergabung pada 17/Mei/2017</b></p>
            <ul class="unstyled">
                <li><i class="fa fa-envelope" aria-hidden="true"></i> andi.ersaldy@gmail.com</li>
                <li><i class="fa fa-book" aria-hidden="true"></i> SMA (IPA)</li>
                <li><i class="fa fa-building" aria-hidden="true"></i> SMAN 78 Jakarta</li>
                <li><i class="fa fa-trophy" aria-hidden="true"></i> #128</li>
                <li><a href="#!" class="button unoj small" style="margin-top:1rem"><i class="fa fa-pencil" aria-hidden="true"></i> Ubah</a></li>
            </ul>
        </div>
        <div class="col col-3">
            <h3>Statistik</h3>
            <hr>
            <div class="row gutters">
                <div class="col col-6">
                    <h5 style="margin-bottom:0; color:inherit">Total Pengerjaan</h5>
                    <h1>10x</h1>
                </div>
                <div class="col col-6">
                    <h5 style="margin-bottom:0; color:inherit">Rata-rata Keseluruhan</h5>
                    <h1>85.1</h1>
                </div>
                <div class="col col-12">
                    <center><h5 style="margin-bottom:0; color:inherit">Mata Pelajaran</h5></center>
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col col-5">
            <h3>Soal yang Pernah Dikerjakan</h3>
            <hr>
            <table class="unstyled">
                <thead>
                    <tr>
                        <th>Nama Soal</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @for($i=0;$i<10;$i++)
                    <tr>
                        <td>Ujian Nasional 2017</td>
                        <td>Kimia</td>
                        <td>85</td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('pagescript')
<script src="{{url('js/chart.min.js')}}"></script>
<script>
    $(document).ready(function(){
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ["Kimia", "Matematika", "B. Indonesia", "B. Inggris", "Biologi", "Fisika"],
                datasets: [{
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.5)',
                        'rgba(255, 206, 86, 0.5)',
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(153, 102, 255, 0.5)',
                        'rgba(255, 159, 64, 0.5)'
                    ],
                    hoverBackgroundColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                }]
            } ,
            options: {
                legend: {
                    display: false
                }
            }
        }); 
    });
</script>
@endsection