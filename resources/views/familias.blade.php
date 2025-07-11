@extends('layouts.main')

@section('title', 'Famílias - BiblioXP')

@section('content')

<div class="section01">
    <div class="box">
        <h1 class="h1Familias">Um método e biblioteca de temas para conectar seus filhos com verdades bíblicas. </h1>
        <br>
        <h1 class="h1Familias">A Cultura dos jogos e vídeos traz novos desafios para os pais, como temas culturais e problemas emocionais podem ser conversados com princípios bíblicos.</h1>
        <br>
        <h1 class="h1Familias"><b>Crie aulas com ajuda de metodologia e ferramentas !</b></h1>
    </div>
    <div class="box">
        <button class="btn register-btn">comece grátis</button>
        <button class="btn-green wa-btn">chame no Zap</button>
    </div>
    <div class="family-container">
        <img src="images/family_pic.png" alt="">
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

<div class="section05">
    <div class="slip">
        <div class="card">
            <div class="box"><img src="images/line.png" alt=""><h3>TESTEMUNHOS</h3></div>
            <h1>O que disseram nas escolas</h1>
        </div>
        <div class="card">
            <div class="btn-2 btn-2-main" id="insta-link">
                <p>deixe seu comentário</p>
                <span class="btn-2"><img src="images/arrow.png" alt=""></span>
            </div>
        </div>
    </div>
    <div class="container">
        <img src="images/commentPais01.png" alt="">
        <img src="images/commentPais02.png" alt="">
        <img src="images/commentPais03.png" alt="">
    </div>
</div>

@include('form_content')

@endsection