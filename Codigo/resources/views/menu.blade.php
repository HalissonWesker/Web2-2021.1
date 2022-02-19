@extends('layouts.menu')

@section('title', 'LOCAR: Locadora de Veículo')

@section('content')

    
          
                   
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title  home text-center">
                                  <span class="heading-page"> Bem vindo ao LOCAR
                                  </span>
                                    <p class="mt20">Sistema de gerenciamento para locadora de veículo</p>
                                </div>

                                <div class="hexagon-menu clear">
                                    <div class="hexagon-item">
                                        <a href="{{ route('cliente.index') }}"><div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div></a>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a class="hex-content" >
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                <i class="fas fa-users"></i>
                                                </span>
                                                <span class="title">Clientes</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <a href="{{ route('veiculo.index') }}"><div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div></a>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                <i class="fas fa-car"></i>
                                                </span>
                                                <span class="title">Veículos</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <a href="{{ route('aluguel.index') }}"><div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div></a>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                <i class="fas fa-key"></i>
                                                </span>
                                                <span class="title">Aluguel</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>    
                                    </div>
                                    <div class="hexagon-item">
                                        <a href="{{route('devolucao.index') }}"> <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div> </a>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a  class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                <i class="fas fa-warehouse"></i>
                                                </span>
                                                <span class="title">Devolução</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div>
                                       
                                    </div>
                                    <div >
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            </div>

@endsection