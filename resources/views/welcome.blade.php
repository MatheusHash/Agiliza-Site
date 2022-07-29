
@extends('layouts.app')

@section('content')

    {{-- Secao header e do formulário de buscas --}}
    <section class="bg-black ajustar-tam-tela image-header">
        <div class="container">
                
                <div class="header-campos">
                    <div class="text-center text-white">
                        <h2 class="header-titulo">A agilidade que você precisa e merece!</h2>
                    </div>
                    {{-- Form para busca completa --}}
                    <form class="form-principal" action="#" method="get">

                            <select class="select-form" name="motivo">
                                <option value="comprar">Comprar</option>
                                <option value="alugar">Alugar</option>
                            </select>
                            <select class="select-form" name="categoria">
                                <option selected disabled>Categoria</option>
                                <option value="1">Apartamento</option>
                                <option value="2">Casa</option>
                                <option value="3">Terreno</option>
                            </select>
                            <select class="select-form" name="bairro">
                                <option selected disabled>Cidade</option>
                                <option value="Passos">Passos</option>
                                <option value="Sao João Batista do Glória">Sao João Batista do Glória</option>
                            </select>
                            <button type="submit" class="bg-orange">Buscar</button>

                    </form>
                    {{-- Form para buscar por código --}}
                    <form class="form-codigo" action="#" method="get">
                        <label class="text-black" for="codigo-de-busca">Digite o código do imóvel: </label>
                        <input type="text" placeholder="Busca por código" name="codigo-de-busca">
                    </form>
                </div>
        </div>
    </section>

    <section class="bg-black" id="sobre">
        <div class="container">
            <div class="box">

                <div class="image-sobre-definicoes">
                    <img class="image-sobre" src="{{asset('../imagens/FOTOFACHADA.png')}}" alt="Loja - Agiliza Ímoveis">
                </div>

                <div class="box-sobre">
                    <div>
                        <h2 class="titulo-sobre text-orange text-bold">CONHEÇA UM POUCO DA HISTÓRIA DA AGILIZA IMÓVEIS:</h2>
                        <p class="paragrafo text-white">
                            Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.
                        </p>
                        
                        <button class="ler-mais bg-orange text-white">LEIA MAIS</button>
                    </div>

                    <div class="card-sobre text-white">
                        <div class=" box-icon bg-orange">
                            <img class="icon-sobre" src="{{ asset('icons/ESTRELA.png') }}" alt="estrela">
                        </div>
                        <div>
                            <span class="titulo-card-sobre">Missão</span>
                            <p class="paragrafo text-white">
                                Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.
                            </p>
                        </div>
                    </div>
                    <div class="card-sobre text-white">
                        <div class=" box-icon bg-orange">
                            <img class="icon-sobre" src="{{ asset('icons/MISSAO.png') }}" alt="estrela">
                        </div>
                        <div>
                            <span class="titulo-card-sobre">Missão</span>
                            <p class="paragrafo text-white">
                                Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.
                            </p>
                        </div>
                    </div>
                    <div class="card-sobre text-white">
                        <div class=" box-icon bg-orange">
                            <img class="icon-sobre" src="{{ asset('icons/ESTRELA.png') }}" alt="estrela">
                        </div>

                        <div>
                            <span class="titulo-card-sobre">Missão</span>
                            <p class="paragrafo text-white">
                                Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.
                            </p>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </section>


    <section class="bg-black" id="areas-atuacao">

        <div class="container">
            <div class="box-area-atucao">

                
                <div class="paragrafo text-orange">
                    <span class="titulo-areas-atuacao text-bold">EM QUAIS ÁREAS  A AGILIZA IMÓVEIS ATUA?</span>
                    <p class="sub-titulo-area-atuacao text-white">
                        A imobiliária trabalha com uma apmpla cartela de imóvies e serviços prestados com excelência e qualidade em atendimento. Você encontra aqui pontos chave para uma negociação de sucesso - com tranquilidade e transparência!
                    </p>
                </div>
                
                <div class="box-cards">
                    {{--  --}}
                    <div class="cards-area">

                        <div class="card-area-atuacao">
                            <div class="card-box-area-atuacao">
                                <div class="image-card-area-atuacao">
                                    <img src="{{ asset('../imagens/CASA VERDE.png') }}" alt="Casa verde e Amarela">
                                    <span class="titulo-box-area">Casa Verde e Amarela</span>
                                </div>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                
                            </div>
                        </div>
                        <div class="card-area-atuacao">
                            <div class="card-box-area-atuacao">
                                <div class="image-card-area-atuacao">
                                    <img src="{{ asset('../imagens/IMOVELALTOPADRAO.png') }}" alt="Casa verde">
                                    <span class="titulo-box-area">Venda de Imóveis de Médio e Alto Padrão</span>
                                </div>

                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                
                            </div>
                        </div>
                    </div>
                    
                    {{--  --}}
                    <div class="cards-area">
                        
                        <div class="card-area-atuacao">
                            <div class="card-box-area-atuacao">
                                <div class="image-card-area-atuacao">
                                    <img src="{{ asset('../imagens/FINANCIAMENTO.png') }}" alt="Casa verde">
                                    <span class="titulo-box-area">Financiamento</span>
                                </div>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                <p class="text-white">Penso em você, mesmo sabendo o q a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                
                            </div>
                        </div>

                        <div class="card-area-atuacao">
                            <div class="card-box-area-atuacao">
                                <div class="image-card-area-atuacao">
                                    <img src="{{ asset('../imagens/ALUGUEL.png') }}" alt="Casa verde">
                                    <span class="titulo-box-area">Aluguel</span>
                                </div>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                <p class="text-white">Penso em você, mesmo sabendo o quão longe está de mim, sinto aquele amor que continua a me desgraçar intensamente a cada dia, e penso quando enfim poderei te ter comigo. Sei lá, o café chega ao fim e trago a ultima ponta, nada muda. É como se eu fosse passar por isso mais uns longos anos a frente.</p>
                                
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </section>  
 
    <section class="bg-black" id="equipe">
        <div class="container">

            <div class="equipe-header">

                <div class="equipe-titulo">
                    <h2 class="text-orange">CONHEÇA NOSSA EQUIPE!</h2>
                </div>
                <p class="equipe-text text-white">
                    Conheça as pessoas que fazem parte da equipe da Agiliza imóveis, e tornam pssível o atendimento tão qualificado a todos os nossos clientes.
                </p>
            </div>

            <h2 class="titulo-equipes text-white">Time de Vendas:</h2>

            <div class="card-membro">
                <div class="perfil">
                    <img class="img-perfil" src="{{asset('imagens/Claudia.png')}}" alt="Claudia Agiliza Imóveis">
                    <div class="membro">
                        <span class="nome-membro text-white">Claudia de Simoni Lemos - Kau</span>
                    </div>
                    <span class="creci-membro">CRECI/MG 19845</span>
                </div>
                <div class="descricao-membro">

                </div>
            </div>

        </div>
    </section>


    {{-- <section id="anuncie">
        <div>
            <span>Venda ou alugue seu ímovel com mais agilidade e segurança anunciando na Agiliza Ímoveis.</span>
            <a href="{{ route('home') }}" class="btn-anuncie">Anunciar ímovel</a>
        </div>
    </section> --}}

@endsection
