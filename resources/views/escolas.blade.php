@extends('layouts.main')

@section('content')

<div class="section01">
    <div class="box">
        <h1>Com nossa metodologia <img src="images/gamee.png" alt="">, educadores Conectarem com a próxima geração, com a cultura pop e dos games, impulsionando skills do futuro como as <b>habilidades socioemocionais.Cada dia da semana um devocional guiado.</b></h1>
        
    </div>
    <div class="box">
        <button class="btn register-btn">comece grátis</button>
        <button class="btn-green wa-btn">chame no Zap</button>
    </div>
</div>
<div class="section02">
    <div class="box">
        <h1>Monte os planos de aula com agilidade utilizando temas e com tecnologia IA</h1>
    </div>
    <div class="cover2">
        <div class="box"><img src="images/gamee.png" alt=""></div>
        <div class="box">
            <img src="images/cover01.png" alt="">
            <img src="images/cover02.png" alt="">
            <img src="images/cover03.png" alt="">
        </div>
    </div>
</div>

<div class="section03">
    <div class="box">
        <h1>Faça parte de uma comunidade que entende que uma geração espera a manifestação da palavra em nós.</h1>
    </div>
    <div class="box">
        <h1>Romanos 8</h1><h2>9 Pois toda a criação aguarda com grande expectativa o dia em que os filhos de Deus serão revelados.</h2>
    </div>
    <div class="box">
        <h1>Engaje seu time de professores, com pontuações e prêmios!</h1>
    </div>
</div>

<div class="section04">
    <div class="container">
        <div class="box">
            <h1><span>Rank de Educadores</span><br><span>engajando</span></h1>
            <p>Acreditamos em heróis da próxima geração, e a cada avanço o reconhecimento acontece em sua comunidade, igreja e escola. Unindo uma comunidade criando um Ecosistema.</p>
        </div>
        <div class="box">
            <img src="images/g6-down.png" alt="">
        </div>
    </div>
    <div class="container">
        <img src="images/escolas_pic.png" alt="">
    </div>
</div>

@include('content01')

@include('form_content')
    
@endsection