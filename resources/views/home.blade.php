@extends('layouts.main')

@section('title', 'BiblioXP - Aulas Incríveis')

@section('content')

<section class="main_panel">
    <div class="grid-1">
        <div class="box">
            <h2><span>Crie</span><span>Aulas inesquecíveis para sua:</span></h2>
            <h1>Igreja - Escola - Família</h1>
            <button class="btn register-btn">Comece Grátis</button>
        </div>
        <div class="box">
            <p>Metodologia utilizando experiências físicas e gamificadas com temas culturais e socioemocionais!</p>
            <span><a href="https://youtu.be/BRAkmw0Gy6k" target="_blank"><img src="images/play.png" alt=""></a><span>Veja como funciona!</span></span>
        </div>
    </div>
    <div class="grid-2">
        <div class="box">
            <img src="images/g2-01.png" alt="">
            <img src="images/g2-02.png" alt="">
            <img src="images/g2-03.png" alt="">
        </div>
        <div class="box">
            <img src="images/g2-04.png" alt="">
            <img src="images/g2-05.png" alt="">
            <img src="images/g2-06.png" alt="">
            <div class="clear"></div>
        </div>
    </div>
    <div class="cover">
        <div class="box"><img src="images/gamee.png" alt=""></div>
        <div>
            <img src="images/cover01.png" alt="">
            <img src="images/cover02.png" alt="">
            <img src="images/cover03.png" alt="">
        </div>
    </div>
</section>
<section class="second_panel">
    <h2><span>Tudo em</span><span>um só lugar!</span></h2>
    <p>Em nossa Biblio você encontra: Temas exclusivos, atividades, plano de aula, com nosso método:</p>
    <div class="box">
        <div class="box">
            <img src="images/gamee.png" alt="">
        </div>
        <div class="box">
            <div class="card">
                <img src="images/sec02-01.png" alt="">
                <h1>G.guiar</h1>
                <p>Escolha da necessidade e tema no contexto. Guie e prepare os alunos, Veja temas e Sugestões baseadas em filtros (idade, contexto, cultural, habilidades)</p>
            </div>
            <div class="card">
                <img src="images/sec02-02.png" alt="">
                <h1>A.ação</h1>
                <p>Biblioteca com simulações, jogos, storytelling e dinâmicas de acordo com o tema e necessidade.</p>
            </div>
            <div class="card">
                <img src="images/sec02-03.png" alt="">
                <h1>M.meditar</h1>
                <p>Criar momento de reflexão, meditando na mensagem que o tema aborda. Conta com recursos de perguntas e playlist musical.</p>
            </div>
            <div class="card">
                <img src="images/sec02-04.png" alt="">
                <h1>E.evoluir</h1>
                <p>Consolidar o aprendizado com uma revisão prática e interativa.Ferramentas para revisão de temas e memorização de versículos.</p>
            </div>
            <div class="card">
                <img src="images/sec02-05.png" alt="">
                <h1>E.engajar</h1>
                <p>A missão aqui é engajar o aluno para praticar  em casa com a  família. Ferramentas e sugestões de recompensa.</p>
            </div>
        </div>
    </div>
    <div class="box">
        <button class="btn register-btn">Comece grátis</button>
    </div>
</section>
<section class="third_panel">
    <div class="box">
        <h1><span>Nossa</span><span>Visão</span></h1>
        <p>Através da nossa metodologia exclusiva, com temas culturais aliados a virtudes cristãs, queremos conectar educadores e famílias a nova geração.</p>
    </div>
    <div class="box">
        <div class="card">
            <h1>100K+</h1>
            <p>Crianças assistidas</p>
        </div>
        <div class="card">
            <h1>95%</h1>
            <p>de aprovação</p>
        </div>
        <div class="card">
            <h1>35+</h1>
            <p>atividades</p>
        </div>
        <div class="card">
            <h1>15+</h1>
            <p>temas anuais</p>
        </div>
        <div class="card">
            <h1>16</h1>
            <p>anos de experiência</p>
        </div>        
    </div>
</section>
<section class="fourth_panel">
    <div class="box">
        <div class="box"><img src="images/line.png" alt=""><h3>TESTEMUNHOS</h3></div>
        <h1>O que educadores dizem</h1>
        <div class="box">
            <p>As aulas são sempre dinâmicas quando usado a metodologia G.A.M.E.E.</p>
            <p>O Motivo de tudo isso é a conexão que acontece com as crianças, a temática que conecta com eles.</p>
            <p>Eles se soltam e começam a expressar, sentimentos, dúvidas. É aí que entra a visão e Bíblia!</p>
        </div>
        <div class="btn-2" id="insta-link">
            <p>deixe seu comentário</p>
            <span class="btn-2"><img src="images/arrow.png" alt=""></span>
        </div>
    </div>
    <div class="box">
        <img src="images/mask.png" alt="">
        <div class="card">
            <p class="p1">"...foi incrível, ouvir as crianças falarem das suas emoções, com a interação da aula elas foram se soltando."</p>
            <div class="card2">
                <div class="p2"><p>Coordenadora Letícia Col. EIPG - Atibaia - SP</p></div>
                <div class="p3">
                    <img id="pic1" src="images/stars.png" alt="" />
                    <p>Avaliação</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('content01')

@include('form_content')

@endsection