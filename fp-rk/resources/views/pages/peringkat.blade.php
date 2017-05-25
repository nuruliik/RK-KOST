@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Peringkat')

@section('content')

<div id="peringkatHeader" class="section first">
    <div class="row gutters container">
        <div class="col col-6">
            <h2 style="margin-bottom:0; color:#fff"><i class="fa fa-trophy" aria-hidden="true"></i> Peringkat</h2>
        </div>
        <div class="col col-6">
            <form style="margin-bottom:0">
                <div class="row gutters align-right">
                    <div class="col col-6">
                        <div class="form-item">
                            <select>
                                <option selected>Semua</option>
                                <option>SMA (IPA)</option>
                                <option>SMA (IPS)</option>
                                <option>SMP</option>
                                <option>SD</option>
                            </select>
                            <div class="desc" style="color:#fff">Jenjang Pendidikan</div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="section container">
    <table>
        <thead>
            <tr style="font-weight:bold; font-size:1.2em">
                <th>Peringkat</th>
                <th>User</th>
                <th>Jenjang</th>
                <th>Sekolah</th>
                <th>Kali Pengerjaan</th>
                <th>Nilai Rata-rata</th>
            </tr>
        </thead>
        <tbody>
            @for($j=1;$j<=20;$j++)
            <tr>
                <td>{{$j}}</td>
                <td>Andi Ersaldy Raisha</td>
                <td>SMA (IPA)</td>
                <td>SMAN 78 Jakarta</td>
                <td>21x</td>
                <td>61.7%</td>
            </tr>
            @endfor
        </tbody>
    </table>
</div>

@endsection

@section('pagescript')

@endsection