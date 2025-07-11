@extends('layouts.main')

@section('title', 'Escolas - BiblioXP')

@section('content')

<div class="section01">
    <div class="box">
        <h1><img src="images/gamee.png" alt=""> conecta a próxima geração, com a cultura pop e dos games, impulsionando skills do futuro como as <b>habilidades socioemocionais com base na BNCC</b>.<br>Devocionais e aulas temáticas para cada dia da semana, com contextos atuais. </h1>
        
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
        <h1 class="h1Escolas">Sua escola pode tratar diversos temas culturais e socioemocionais com princípios cristãos, isso mudará o convívio dos alunos e crescerão nos estudos.</h1>
    </div>
    <div class="box">
        <h1 class="h1Escolas02">Romanos 12:2</h1><h2 class="h2Escolas">Não vivam como vivem as pessoas deste mundo, mas deixem que Deus os transforme por meio de uma completa mudança da mente de vocês. Assim vocês conhecerão a vontade de Deus, isto é, aquilo que é bom, perfeito e agradável a ele.</h2>
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
        <div class="slip">
            <div class="box"><img src="images/line.png" alt=""><h3>TESTEMUNHOS</h3></div>
            <h1>O que disseram nas escolas</h1>
        </div>
        <div class="slip">
            <div class="box">
                <div class="card">
                    <img src="images/mask.png" alt="">

                    <div class="btn-2 btn-2-main" id="insta-link">
                        <p>deixe seu comentário</p>
                        <span class="btn-2"><img src="images/arrow.png" alt=""></span>
                    </div>
    
                    <img src="images/comment01.png" alt="">
                </div>
                <div class="card">
                    <img src="images/footerComment.png" alt="">
                </div>
            </div>
            <div class="box">
                <img src="images/mask2.png" alt="">
                <img src="images/comment02.png" alt="">
            </div>
        </div>
    </div>

    <div class="container">
        <img src="images/escolas_pic.png" alt="">
    </div>
</div>

@include('content01')

@include('form_content')
    
@endsection