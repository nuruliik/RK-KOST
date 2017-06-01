@extends('parts.master')

@section('pagecss')

@endsection

@section('title', 'Diskusi - Soal A')

@section('content')
<div class="section first" style="background: #eee">
    <div class="container">
        <h1>Diskusi</h1>
        <h4 style="color:inherit">Ujian Nasional 2015 / SMA (IPA) / Kimia</h4>
    </div>
</div>

<div class="section container">
    <div id="commentPanel">
        <div class="panel" style="margin-bottom:1rem">
            #1 Andi Ersaldy on <b>28-Mei-2017 09:41am</b>
            <hr>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="panel" style="margin-bottom:1rem">
            #2 Jamrud Katulistiwa on <b>28-Mei-2017 09:55am</b>
            <hr>
            <p>Lorem ipsum dolor sit ametasdkjb aisdh oiasdh ao sdaob iusd b</p>
        </div>
    </div>
    <div class="panel" style="margin-bottom:1rem">
        <h5>Tambahkan Komentar</h5>
        <form>
            <div class="form-item">
                <textarea id="comment"></textarea>
            </div>
            <div class="form-item">
                <a href="#!" id="commentButton" class="button primary"><i class="fa fa-comment"></i> Beri Komentar</a>
            </div>
        </form>
    </div>
</div>

@endsection

@section('pagescript')
<script>
    $(document).ready(function(){
        $i = 2;
        $('#commentButton').click(function(){
            $i++;
            $comment = $('#comment').val();
            $commentPanel = $('#commentPanel');
            $commentBox = '<div class="panel" style="margin-bottom:1rem">#'+$i+' Andi Ersaldy on <b>28-Mei-2017 09:55am</b><hr><p>'+$comment+'</p></div>';
            $('#spinner').show();
            $commentPanel.append($commentBox);
            $('#spinner').fadeOut('fast');
            
            //console.log($comment);
        });
    });
</script>
@endsection