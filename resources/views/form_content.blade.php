<section class="eigthth_panel" id="form">
    <div class="box">
        <h1><span>Gostaria de mais</span> <span>informações?</span></h1>
        <p>Deixe seus dados e aproveite todas as nossas novidades!!!</p>
    </div>
    <div class="container">
        <form action="/lead" method="post">
            @csrf
            <div class="form-panel">
                <div class="form-control">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="" placeholder="Como podemos chamá-lo?" required>
                </div>
                <div class="form-control">
                    <label for="email">E-mail:</label>
                    <input type="email" name="email" id="" placeholder="Qual o seu melhor e-mail?" required>
                </div>
                <div class="form-control">
                    <label for="Telefone">Nº de whatsapp:</label>
                    <input type="tel" name="telefone" id="telefone" placeholder="Nos deixa seu whatsapp?" required>
                </div>
                <div class="form-control">
                    <label for="instituicao">Instituição(opcional):</label>
                    <input type="text" name="instituicao" id="" placeholder="De qual instituição participa?">
                </div>
                <div class="form-control">
                    <input class="btn" type="submit" name="" id="">
                </div>
            </div>
        </form>
    </div>{{-- container --}}
</section>