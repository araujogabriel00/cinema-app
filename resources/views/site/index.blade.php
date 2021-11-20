<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif/png" href="logo/cine_quelipe.png">
    <title>Stream</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- CABEÇALHO -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo/logo.svg') }}" alt="" width="100" height="50"
                    class="d-inline-block align-text-top">
                <h6>Play Filmes</h6>
            </a>
    </nav>

    <!-- IMAGENS -->
    <div>
        <img src="{{ asset('img/filmes/Banner.jpeg') }}" class="img-fluid" alt="...">
    </div>

    <div class="container-fluid bg-dark">
        <br>
        <div class="row">
            <div class="col-sm-3">
                <div class="card " style="width: 18rem;">
                    <img src="{{ asset('img/filmes/spider.jpeg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Homem-Aranha: Sem Volta para Casa</h5>
                        <p class="card-text">O Homem-Aranha precisa lidar com as consequências da sua verdadeira
                            identidade
                            ter sido descoberta.</p>
                        <a href="#" class="btn btn-primary">Alugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/filmes/Eternos.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Eternos</h5>
                        <p class="card-text">Os Eternos são uma equipe de antigos alienígenas que têm vivido na
                            Terra em
                            segredo por milhares de anos.</p>
                        <a href="#" class="btn btn-primary">Alugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/filmes/halloween-.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Halloween</h5>
                        <p class="card-text">Um maníaco retorna à sua cidade natal para continuar o terror que ele
                            começou há quinze anos.</p>
                        <a href="#" class="btn btn-primary">Alugar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/filmes/shang chi.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Shang-Chi</h5>
                        <p class="card-text">Shang-Chi é o filho do líder de uma organização criminosa poderosa.
                        </p>
                        <a href="#" class="btn btn-primary">Alugar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light">
        <br>
        <h2 style="text-align: center;">PREÇOS DOS INGRESSOS</h2>
        <br>

        <h5 style="text-align: center;">ACEITAMOS CARTÕES DE DÉBITO CRÉDITO E ALGUMAS BANDEIRAS DO CARTÃO CULTURA.</h5>

        <h5>INFORMAMOS A TODOS QUE A MEIA ENTRADA É OBRIGATÓRIO A APRESENTAÇÃO DA CARTEIRINHA ESTUDANTIL, ID JOVEM OU
            DOCUMENTO OFICIAL CONFORME O CASO, AO ACESSAR A SALA DE PROJEÇÃO.
            DIREITO A MEIA ENTRADA: CRIANÇAS ATÉ 11 ANOS, ESTUDANTE, DEFICIENTE, PROFESSOR E IDOSOS. CONFORME DECRETO Nª
            8.537 DE 05/10/2015.<h5>
    </div>
    </div>

    <!-- FORM -->
    <div class="container-fluid bg-light">
        <br>
        <h2 style="text-align: center;">Entre em contato</h2>
        <form class="row g-3">
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">
                    <h6>Email</h6>
                </label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-12">
                <label for="inputNome4" class="form-label">
                    <h6>Nome</h6>
                </label>
                <input type="nome" class="form-control" id="inputNome4">
            </div>
            <div class="col-md-12">
                <label for="inputCidade4" class="form-label">
                    <h6>Cidade</h6>
                </label>
                <input type="cidade" class="form-control" id="inputCidade4">
            </div>
            <div class="col-md-12">
                <label for="inputCidade4" class="form-label">
                    <h6>Estado</h6>
                </label>
                <input type="cidade" class="form-control" id="inputCidade4">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">
                        <h6>Nós mande suas duvídas</h6>
                    </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Deseja receber notificações do Cine Quelipe
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
        <br>
    </div>

    <div>

        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4 bg-dark">
            <!-- Copyright -->
            <div id="Copyright" class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://www.linkedin.com/in/gabriel-de-ara%C3%BAjo-santos/" target="_blank">Desenvolvido por
                    Gabriel Araújo</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>
</body>

</html>
