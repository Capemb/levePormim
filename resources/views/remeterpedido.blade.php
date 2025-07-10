<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Form elements - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{asset('assets/dist/css/tabler-flags.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css?1692870487')}}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/demo.min.css?1692870487')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body >
    <script src="{{asset('assets/dist/libs/tom-select/dist/js/tom-select.base.min.js?1692870487')}}"></script>
    <div class="page">
      <!-- Navbar -->



               <div class="alert alert-primary mt-5 mx-auto text-center" role="alert" style="width: fit-content;">
                    Olá {{ $pedidos->motoboy->primeiro_nome ?? 'Não atribuído' }} {{ $pedidos->motoboy->ultimo_nome ?? 'Não atribuído' }}, Responsavel da entrega
                </div>

            <div class="col-12">
               
             <div class="container">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="avatar avatar-lg rounded" style="background-image: url(./static/avatars/003m.jpg)"></span>
              </div>
              <div class="col">
                <h1 class="fw-bold">  {{ $pedidos->primeiro_nome }}   {{ $pedidos->ultimo_nome }},remetente</h1>
                <div class="my-2">motoclista de entrega
                    o Sr(a) {{ $pedidos->motoboy->primeiro_nome ?? 'Não atribuído' }} {{ $pedidos->motoboy->ultimo_nome ?? 'Não atribuído' }},
                  
                </div>
                <div class="list-inline list-inline-dots text-secondary">
                
                 
                </div>
              </div>
              <div class="col-auto ms-auto">
                <div class="btn-list">

                  
                </div>
              </div>
            </div>
          </div>

            <div class="page-body">
          <div class="container-xl">
            <div class="row g-3">
              <div class="col">
                <ul class="timeline">
                  <li class="timeline-event">
                  
                    <div class="card timeline-event-card">
                      <div class="card-body">
                        <div class="text-secondary float-end">10 hrs ago</div>
                        <h4>Dados de Entrega</h4>
                  
                          <div class="list-inline-item">
                    <!-- Download SVG icon from http://tabler-icons.io/i/map -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 -3l6 3l6 -3v13l-6 3l-6 -3l-6 3v-13" /><path d="M9 4v13" /><path d="M15 7v13" /></svg>
                            {{ $pedidos->municipio_entrega }} ,  {{ $pedidos->distrito_entrega }} .
                        </div>
                        <div class="list-inline-item">
                    <!-- Download SVG icon from http://tabler-icons.io/i/cake -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" /><path d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" /><path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" /></svg>
                        data de entrega 15/10/1972
                        </div>

                        

                        <div class="row g-2 align-items-center py-3">
                              <div class="list-inline-item">
                                Artigo - {{ $pedidos->artigo_recolha  }} , hora de recolha - {{ $pedidos->hora_recolha  }}
                            </div>

                              <div class="list-inline-item">
                                Numero do Recepetor 1 - {{ $pedidos->numero_receptor_principal  }} , Numero do Recepetor 2 -   {{ $pedidos->numero_receptor_altenativo  }}
                            </div>

                            
                              <div class="list-inline-item">
                                 Nome do receptor - {{ $pedidos->primeiro_nome_receptor  }}  {{ $pedidos->ultimo_nome_receptor  }}
                            </div>
                         
                         
                    
                        
                      <div class="col-12 col-xl-2 font-weight-semibold">Mudar o Status do Pedido</div>
                      
                       <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                       
                      </div>
                           <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                            </div>
                    
                     <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'pendente']) }}"
                      class="btn btn-secondary btn-pill w-100"
                      onclick="event.preventDefault(); document.getElementById('status-pendente-{{ $pedidos->id }}').submit();">
                      Pendente
                    </a>
                    <form id="status-pendente-{{ $pedidos->id }}" action="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'pendente']) }}" method="POST" style="display: none;">
                      @csrf
                      @method('PATCH')
                    </form>
                  </div>

                  <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'entregue']) }}"
                      class="btn btn-success btn-pill w-100"
                      onclick="event.preventDefault(); document.getElementById('status-entregue-{{ $pedidos->id }}').submit();">
                      Entregue
                    </a>
                    <form id="status-entregue-{{ $pedidos->id }}" action="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'entregue']) }}" method="POST" style="display: none;">
                      @csrf
                      @method('PATCH')
                    </form>
                  </div>

                  <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'adiado']) }}"
                      class="btn btn-warning btn-pill w-100"
                      onclick="event.preventDefault(); document.getElementById('status-adiado-{{ $pedidos->id }}').submit();">
                      Adiado
                    </a>
                    <form id="status-adiado-{{ $pedidos->id }}" action="{{ route('pedidos.status.update', ['pedido' => $pedidos->id, 'status' => 'adiado']) }}" method="POST" style="display: none;">
                      @csrf
                      @method('PATCH')
                    </form>
                  </div>

                    
                    </div>
                      </div>
                    </div>
                  </li>
                  

               
                </ul>
              </div>
              <div class="col-lg-4">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title">Informações do artigo( {{ $pedidos->artigo_recolha  }})</div>
                        <div class="mb-2">
                          <!-- Download SVG icon from http://tabler-icons.io/i/book -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0" /><path d="M3 6l0 13" /><path d="M12 6l0 13" /><path d="M21 6l0 13" /></svg>
                          Origem: <strong>{{ $pedidos->municipio_recolha  }}, {{ $pedidos->distrito_recolha  }} </strong>
                        </div>
                        <div class="mb-2">
                          <!-- Download SVG icon from http://tabler-icons.io/i/briefcase -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" /><path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" /><path d="M12 12l0 .01" /><path d="M3 13a20 20 0 0 0 18 0" /></svg>
                          Destino: <strong>{{ $pedidos->municipio_entrega  }}, {{ $pedidos->distrito_entrega  }}</strong>
                        </div>
                       
                        <div class="mb-2">
                          <!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-secondary" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" /></svg>
                          Status : <strong>
                            {{ $pedidos->status }}</strong>
                        </div>
                      
                      </div>
                    </div>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>

      <footer class="footer footer-transparent d-print-none">
        <div class="container-xl">
          <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary" rel="noopener">Source code</a></li>
                <li class="list-inline-item">
                  <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary" rel="noopener">
                    <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                    Sponsor
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
              <ul class="list-inline list-inline-dots mb-0">
                <li class="list-inline-item">
                  Copyright &copy; 2023
                  <a href="." class="link-secondary">Tabler</a>.
                  All rights reserved.
                </li>
                <li class="list-inline-item">
                  <a href="./changelog.html" class="link-secondary" rel="noopener">
                    v1.0.0-beta20
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Libs JS -->
  <script src="{{asset('assets/dist/libs/nouislider/dist/nouislider.min.js?1692870487')}}" defer></script>
  <script src="{{asset('assets/dist/libs/litepicker/dist/litepicker.js?1692870487')}}" defer></script>
  <script src="{{asset('assets/dist/libs/tom-select/dist/js/tom-select.base.min.js?1692870487')}}" defer></script>
  <!-- Tabler Core -->
  <script src="{{asset('assets/dist/js/tabler.min.js?1692870487')}}" defer></script>
  <script src="{{asset('assets/dist/js/demo.min.js?1692870487')}}" defer></script>

   
</body>
</html>