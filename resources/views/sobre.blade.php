@extends('layouts.main')

@section('title', 'Sobre - BiblioXP')

@section('content')
    
<div class="section01">
    <div class="container">
        <div class="box">
            <h1>Somos <b>educadores</b> apaixonados por ensinamentos que <b>mudam uma geração</b>, utilizando cultura e gamificação com princípios e <b>virtudes cristãs</b>.</h1>
        </div>
        <div class="box h1Sobre">
            <h1>Adoramos criar experiências que ensinam e se tornam aulas inesquecíveis. </h1>
        </div>
        <div class="box h1Sobre">
            <h1>Lançamos uma plataforma que une biblioteca de temas com base socioemocinais e culturais.</h1>
        </div>
    </div>
    <div class="box">
        <button class="btn register-btn">comece grátis</button>
        <button class="btn-green wa-btn">chame no Zap</button>
    </div>
</div>
<div class="section03">
    <div class="box">
        <h1>Não existe um momento ideal para o ensino, e sim a todo tempo.</h1>
    </div>
    <div class="box">
        <h1>Deuteronômio 6 </h1>
        <h2>7 as ensinarás a teus filhos e delas falarás assentado em tua casa, e andando pelo caminho, e deitando-te e levantando-te.</h2>
    </div>
</div>
<div class="team">
    <img src="images/m01.png" alt="">
    <img src="images/m02.png" alt="">
</div>
<div class="sobre">
    <div class="card">
        <div class="box">Mas quem sabe? Talvez você tenha sido feita rainha justamente para ajudar numa situação como esta!"</div>
        <div class="box">Ester 4:14 b</div>
    </div>
</div>

@include('form_content')

@endsection