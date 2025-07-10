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
      <header class="navbar navbar-expand-md d-print-none" >
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
           
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item d-none d-md-flex me-3">
             
            </div>
        
             <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                          <div class="d-none d-xl-block ps-2">
                            <div>{{ auth()->user()->name }}</div>
                            <div class="mt-1 small text-secondary">Civil Engineer</div>
                          </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
                          <a href="#" class="dropdown-item">Status</a>
                          <a href="./profile.html" class="dropdown-item">Profile</a>
                          <a href="#" class="dropdown-item">Feedback</a>
                          <div class="dropdown-divider"></div>
                          <a href="./settings.html" class="dropdown-item">Settings</a>
                          <a href="./sign-in.html" class="dropdown-item">Logout
                                  <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                          </a>
                        </div>
                        
                      </div>
          </div>
          
        </div>
      </header>

         <header class="navbar navbar-expand-md d-print-none"  data-bs-theme="dark">
                  <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                      <a href=".">
                        Dashboard
                      </a>
                    </h1>
                    <div class="navbar-nav flex-row order-md-last">
                      <div class="d-none d-md-flex">
                        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                          <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                        </a>
                        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                          <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                        </a>
                        <div class="nav-item dropdown d-none d-md-flex me-3">
                          <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
                            <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                            <span class="badge bg-red"></span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                            <div class="card">
                              <div class="card-header">
                                <h3 class="card-title">Last updates</h3>
                              </div>
                              <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                  <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
                                    <div class="col text-truncate">
                                      <a href="#" class="text-body d-block">Example 1</a>
                                      <div class="d-block text-secondary text-truncate mt-n1">
                                        Change deprecated html tags to text decoration classes (#29604)
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="#" class="list-group-item-actions">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item">
                                  <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                      <a href="#" class="text-body d-block">Example 2</a>
                                      <div class="d-block text-secondary text-truncate mt-n1">
                                        justify-content:between ⇒ justify-content:space-between (#29734)
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="#" class="list-group-item-actions show">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item">
                                  <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot d-block"></span></div>
                                    <div class="col text-truncate">
                                      <a href="#" class="text-body d-block">Example 3</a>
                                      <div class="d-block text-secondary text-truncate mt-n1">
                                        Update change-version.js (#29736)
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="#" class="list-group-item-actions">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="list-group-item">
                                  <div class="row align-items-center">
                                    <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
                                    <div class="col text-truncate">
                                      <a href="#" class="text-body d-block">Example 4</a>
                                      <div class="d-block text-secondary text-truncate mt-n1">
                                        Regenerate package-lock.json (#29730)
                                      </div>
                                    </div>
                                    <div class="col-auto">
                                      <a href="#" class="list-group-item-actions">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
                          <a href="#" class="dropdown-item">Status</a>
                          <a href="./profile.html" class="dropdown-item">Profile</a>
                          <a href="#" class="dropdown-item">Feedback</a>
                          <div class="dropdown-divider"></div>
                          <a href="./settings.html" class="dropdown-item">Settings</a>
                          <a href="./sign-in.html" class="dropdown-item">Logout</a>
                        </div>
                      </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            
                          </li>
                          <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                              <span class="nav-link-title">
                                Pedidos
                              </span>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('painel') }}">
                                Adicionar Pedidos
                              </a>
                              <a class="dropdown-item" href="{{ route('pedidos') }}"> 
                               Listar Pedidos
                              </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                              <span class="nav-link-title">
                                Motoboy
                              </span>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('motoboyregister') }}">
                                Adicionar motoboy
                              </a>
                              <a class="dropdown-item" href="{{ route('motoboy') }}"> 
                               Listar Motoboy
                              </a>
                              
                            </div>
                          </li>
                          <li class="nav-item">
                            
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </header>

               <div class="alert alert-primary mt-5 mx-auto text-center" role="alert" style="width: fit-content;">
                    Olá {{ auth()->user()->name }}
                </div>

            <div class="col-12">
               
             <div class="container">
            <div class="row align-items-center">
              <div class="col-auto">
                <span class="avatar avatar-lg rounded" style="background-image: url(./static/avatars/003m.jpg)"></span>
              </div>
              <div class="col">
                <h1 class="fw-bold">  {{ $pedidos->primeiro_nome }}   {{ $pedidos->ultimo_nome }},remetente</h1>
                <div class="my-2">O pedido de {{ $pedidos->primeiro_nome }} {{ $pedidos->ultimo_nome }}, tem como motoclista de entrega
                    o Sr(a) {{ $pedidos->motoboy->primeiro_nome ?? 'Não atribuído' }} {{ $pedidos->motoboy->ultimo_nome ?? 'Não atribuído' }},
                    com a zona de serviço <em></em> {{ $pedidos->motoboy->zona_servico ?? 'Não atribuído' }}, com os números {{ $pedidos->motoboy->telefone_principal ?? 'Não atribuído' }}  - {{ $pedidos->motoboy->telefone_altenativo ?? 'Não atribuído' }},
                    matricula {{ $pedidos->motoboy->matricula ?? 'Não atribuído' }}
                </div>
                <div class="list-inline list-inline-dots text-secondary">
                
                 
                  <div class="list-inline-item">
                    <!-- Download SVG icon from http://tabler-icons.io/i/cake -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" /><path d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" /><path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" /></svg>
                    15/10/1972
                  </div>
                </div>
              </div>
              <div class="col-auto ms-auto">
                <div class="btn-list">

                  <a href="{{ route('pedidos') }}" class="btn btn-primary">

                   Voltar para lista de pedidos
                  </a>
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
                        <p class="text-secondary">You’re getting more and more followers, keep it up!</p>
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
                   <div class="btn-list">
                      <a href=""
                      class="btn btn-secondary btn-pill w-100" data-bs-toggle="modal" data-bs-target="#modal-small">
                      Eliminar
                    </a>
                   <div class="modal modal-blur fade" id="modal-small" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="modal-title">Tens a certeza?</div>
                          <div>Se continuares, vais perder os dados.</div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancelar</button>
                        
                          <form action="{{ route('pedidos.destroy', $pedidos->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Sim, eliminar o registo</button>
                          </form>
                        </div>
                      </div>
      </div>
    </div>
                  </div>
                  </div>

                  <div class="col-6 col-sm-4 col-md-2 col-xl py-3">
                    <a href="{{ route('pedidos.edit', $pedidos->id) }}"
                      class="btn btn-success btn-pill w-100">
                      Editar
                    </a>


                   
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