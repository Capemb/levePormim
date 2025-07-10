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
      @include('layout.header')
    <div class="page">
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none text-white">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                
                <h2 class="page-title">
                  Entrega Fácil
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                  <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-dark">
                      New view
                    </a>
                  </span>
                  <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    Create new report
                  </a>
                  <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Sales</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="h1 mb-3">75%</div>
                    <div class="d-flex mb-2">
                      <div>Conversion rate</div>
                      <div class="ms-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          7% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                    <div class="progress progress-sm">
                      <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" aria-label="75% Complete">
                        <span class="visually-hidden">75% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Revenue</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-0 me-2">$4,300</div>
                      <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          8% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div id="chart-revenue-bg" class="chart-sm"></div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">New clients</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-3 me-2">6,782</div>
                      <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                          0% <!-- Download SVG icon from http://tabler-icons.io/i/minus -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                        </span>
                      </div>
                    </div>
                    <div id="chart-new-clients" class="chart-sm"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="subheader">Active users</div>
                      <div class="ms-auto lh-1">
                        <div class="dropdown">
                          <a class="dropdown-toggle text-secondary" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Last 7 days</a>
                          <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item active" href="#">Last 7 days</a>
                            <a class="dropdown-item" href="#">Last 30 days</a>
                            <a class="dropdown-item" href="#">Last 3 months</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex align-items-baseline">
                      <div class="h1 mb-3 me-2">2,986</div>
                      <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                          4% <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                      </div>
                    </div>
                    <div id="chart-active-users" class="chart-sm"></div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row row-cards">
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-primary text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" /><path d="M12 3v3m0 12v3" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              132 Sales
                            </div>
                            <div class="text-secondary">
                              12 waiting payments
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              78 Orders
                            </div>
                            <div class="text-secondary">
                              32 shipped
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-twitter text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              623 Shares
                            </div>
                            <div class="text-secondary">
                              16 today
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                      <div class="card-body">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="bg-facebook text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" /></svg>
                            </span>
                          </div>
                          <div class="col">
                            <div class="font-weight-medium">
                              132 Likes
                            </div>
                            <div class="text-secondary">
                              21 today
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="container d-flex justify-content-center align-items-start min-vh-500 pt-5">
                   <div class="col-lg-8 auto">
              <div class="row row-cards">
                <div class="col-12">
                <form class="card" action="{{ route('painel.store') }}" method="post">
                    @csrf
                   <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs">
                      <li class="nav-item">
                        <a href="#tabs-home-6" class="nav-link active" data-bs-toggle="tab">Remetente e dados de envio</a>
                      </li>
                      <li class="nav-item">
                        <a href="#tabs-profile-6" class="nav-link" data-bs-toggle="tab">Receptor e dados de recolha</a>
                      </li>
                     
                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="tab-pane active show" id="tabs-home-6">
                     
                       
                        <div class="row">
                          <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Primeiro Nome</label>
                              <input type="text" class="form-control" placeholder="primeiro nome" value="" name="primeiro_nome" required>
                            </div>
                          </div>

                          <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                              <label class="form-label">Último nome</label>
                              <input type="text" class="form-control" placeholder="último nome" value="" name="ultimo_nome" required>
                            </div>
                          </div>

                           <div class="col-sm-6 col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Telefone Principal</label>
                        <input type="tel"  class="form-control" 
                          data-mask-visible="true" data-mask="000-000-000" autocomplete="off" value="" name="numero_remetente" required/>
                      </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                        <label class="form-label">Telefone Altenativo</label>
                       <input type="tel" class="form-control" data-mask="000-000-000" data-mask-visible="true" 
                       placeholder="0000-0000" autocomplete="off" value="" name="numero_receptor" required/>

                      </div>
                       </div> 
                       
                      
                        <div class="col-sm-6 col-md-4">
                          <div class="mb-3">
                            <label class="form-label">Artigo por enviar </label>
                            <input type="text" class="form-control" placeholder="ex iphone 15 promax" value="" name="artigo_recolha" required>
                          </div>
                        </div>
                       <div class="col-sm-6 col-md-3">
                        <div class="mb-3">
                        <label class="form-label">Data de recolha</label>
                        <input type="date"  class="form-control" 
                          data-mask-visible="true" placeholder="00/00/0000"autocomplete="off" value="" name="data_recolha" required/>
                      </div>
                       </div>
                         <div class="col-sm-6 col-md-4">
                      <div class="mb-3">
                        <label class="form-label">Hora de recolha</label>
                        <input type="time" class="form-control"
                          data-mask-visible="true" placeholder="00:00:00"autocomplete="off"  value="" name="hora_recolha" required/>
                      </div>
                        </div>
                       <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Municipio de Recolha</label>
                                <select class="form-select is-valid" id="municipio_recolha" name="municipio_recolha" value="">
                                  <option value="Cucuaco">Cucuaco</option>
                                  <option value="Kilamba">Kilamba</option>
                                  <option value="Cazenga">Cazenga</option>
                                  <option value="Talatona">Talatona</option>
                                  <option value="Viana">Viana</option>
                                  <option value="Luanda">Luanda</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Endereço de Recolha</label>
                                <input type="text" class="form-select " placeholder="ex: viana, zona verde" id="select-countries-valid-2"  name="distrito_recolha" value="">
                                 
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Selecionar motoboy</label>
                                 <select class="form-select is-valid" id="motoboy_select" name="motoboy_id" value="">
                             
                                  <option value="">selecione motoboy</option>
                               
                                </select>
                        </div>
                        
                              <script>

                          document.getElementById('municipio_recolha').addEventListener('change', function() {
                          let zona = this.value;
                          let motoboySelect = document.getElementById('motoboy_select');

                          motoboySelect.innerHTML = '<option value="">Carregando...</option>';

                          if (zona) {
                            fetch(`/motoboyzona/${zona}`)
                              .then(response => response.json())
                              .then(data => {
                               
                                motoboySelect.innerHTML = '';

                                if (data.length === 0) {
                                  motoboySelect.innerHTML = '<option value="">Nenhum motoboy disponível para esta zona</option>';
                                } else {
                                  data.forEach(motoboy => {
                                      console.log(motoboy);
                                    let option = document.createElement('option');
                                    option.value = motoboy.id; // Aqui usamos 'id', não 'motoboy_id'
                    
                                    option.textContent = motoboy.primeiro_nome + ' ' + motoboy.ultimo_nome;
                                    motoboySelect.appendChild(option);
                                  });
                                }
                              })
                              .catch(error => {
                                motoboySelect.innerHTML = '<option value="">Erro ao carregar motoboys</option>';
                                console.error('Erro:', error);
                              });
                          } else {
                            motoboySelect.innerHTML = '<option value="">--Selecione o motoboy--</option>';
                          }
                        });

                          </script>
                              </div>
                            </div>

                            
                          </div>

                      </div>
                      <div class="tab-pane" id="tabs-profile-6">
                        <h4>Profile tab</h4>
                      
                         <div class="row">
                          <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Primeiro Nome</label>
                            <input type="text" class="form-control" placeholder="primeiro nome" value="" name="primeiro_nome_receptor" required>
                          </div>
                        </div>

                         <div class="col-sm-6 col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Último nome</label>
                            <input type="text" class="form-control" placeholder="ultimo nome" value="" name="ultimo_nome_receptor" required>
                          </div>
                        </div>
                         <div class="col-sm-6 col-md-6">
                      <div class="mb-3">
                        <label class="form-label">Telefone Principal</label>
                        <input type="tel"  class="form-control" 
                          data-mask-visible="true" data-mask="000-000-000" autocomplete="off" value="" name="numero_receptor_principal" required/>
                      </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                        <div class="mb-3">
                        <label class="form-label">Telefone Altenativo</label>
                       <input type="tel" class="form-control" data-mask="000-000-000" data-mask-visible="true" 
                       placeholder="0000-0000" autocomplete="off" value="" name="numero_receptor_altenativo" required/>

                      </div>
                       </div> 
                       
                      <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Municipio de entrega</label>
                                <select class="form-select is-valid" id="select-countries-valid-1" name="municipio_entrega" value="" required>
                                  <option value="Cucuaco">Cucuaco</option>
                                  <option value="Cazenga">Cazenga</option>
                                  <option value="Talatona">Talatona</option>
                                  <option value="viana">Viana</option>
                                  <option value="launda">Luanda</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Endereço de Entrega</label>
                                  <input type="text" class="form-control" placeholder="ex: nova urbanização" value="" name="distrito_entrega" required>
                              </div>
                            </div>

                            
                          </div>
                        
                   
                        <div class="col-md-12">
                          <div class="mb-3 mb-0">
                            <label class="form-label">About Me</label>
                            <textarea rows="5" class="form-control" placeholder="Here can be your description" name="descricao"
									          required>Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                          </div>
                      </div>
                    </div>
                  </div>
                   </div>

                 
                    <div class="card-body">
                     
                      <div class="row row-cards">
                                                
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-end">
                   <button type="submit" class="btn btn-primary btn-lg">Remeter o pedido</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
                </div>
              </div>
             
              <div class="col-lg-6">
                <div class="row row-cards">
                  <div class="col-12">
                    <div class="card">
                      
                    </div>
                  </div>
                 
                </div>
              </div>
             
              <div class="col-12">
               
              </div>
           
            
           
            
              
            </div>
          </div>
        </div>
        
       
      </div>
    </div>
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">New report</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="example-text-input" placeholder="Your report name">
            </div>
            <label class="form-label">Report type</label>
            <div class="form-selectgroup-boxes row mb-3">
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Simple</span>
                      <span class="d-block text-secondary">Provide only basic data needed for the report</span>
                    </span>
                  </span>
                </label>
              </div>
              <div class="col-lg-6">
                <label class="form-selectgroup-item">
                  <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                  <span class="form-selectgroup-label d-flex align-items-center p-3">
                    <span class="me-3">
                      <span class="form-selectgroup-check"></span>
                    </span>
                    <span class="form-selectgroup-label-content">
                      <span class="form-selectgroup-title strong mb-1">Advanced</span>
                      <span class="d-block text-secondary">Insert charts and additional advanced analyses to be inserted in the report</span>
                    </span>
                  </span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                <div class="mb-3">
                  <label class="form-label">Report url</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">
                      https://tabler.io/reports/
                    </span>
                    <input type="text" class="form-control ps-0"  value="report-01" autocomplete="off">
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Visibility</label>
                  <select class="form-select">
                    <option value="1" selected>Private</option>
                    <option value="2">Public</option>
                    <option value="3">Hidden</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Client name</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Reporting period</label>
                  <input type="date" class="form-control">
                </div>
              </div>
              <div class="col-lg-12">
                <div>
                  <label class="form-label">Additional information</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
              Cancel
            </a>
            <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
              <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
              Create new report
            </a>
          </div>
        </div>
      </div>
    </div>

    
     

           

 @include('layout.footer')
   
</body>
</html>