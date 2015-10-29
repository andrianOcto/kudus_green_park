@include('frontend/head')
<div style="background-image:url({{ URL::asset('images/watermark_rth.png') }}); background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
<div class="container" style="padding-top:50px; padding-bottom:70px">
    <style>
        h2{
            margin-top: 30px;
            font-weight: 300;
        }
        h3{
            font-weight: 300;
        }
    </style>
    <div class="row" style="">
        <p style="font-size:1.5em">Menurut Peraturan Menteri Pekerjaan Umum Nomor 5/PRT/M/2008, Ruang Terbuka Hijau (RTH) adalah adalah area memanjang/jalur dan atau mengelompok, yang penggunaannya lebih bersifat terbuka, tempat tumbuh tanaman, baik yang tumbuh tanaman secara alamiah maupun yang sengaja ditanam.</p>
        <img src="{{ URL::asset('images/bagan_tentang_rth.png') }}" width="95%" style="margin-top:20px; margin-left:auto; margin-right:auto">
    </div>
</div>
</div>
@include('frontend/foot')