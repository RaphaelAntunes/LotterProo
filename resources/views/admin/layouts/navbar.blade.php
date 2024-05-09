<nav class="main-header navbar navbar-expand">
    <div class="d-flex container ">
    <!-- Logo -->
    <!-- Hamburguer -->
    <div class="d-flex align-items-center justify-content-center">
     
        <div>
            <a href="/" class="">
                <img src="{{ asset('/admin/images/painel/logoicon.png')}}" style="max-width: 157px; padding:6px;" alt="Logo"
                    class="brand-image img-circle " style="opacity: .8">
                <span class="brand-text font-weight-light text-logo" style="font-size: 15px">{{
                    env("nome_sistema")}}</span>
            </a>
        </div>

    </div>

    <ul class="navbar-nav ml-auto">



        @if(auth()->user())

        <!--BTN Depositar -->


        <li class="nav-item ">
            <a href="{{ route('admin.dashboards.wallet.recharge') }}" type="button" class="btn btn-despositar">Depositar
            </a>
        </li>

        <!-- BTN SALDO -->
        <li class="nav-item dropdown mr-2 ml-2 ml-md-3 mr-md-3">
            <a href="#" data-toggle="dropdown" type="button" class="btn btn-money">
                R$0
            </a>
            <!--Drop Saldo -->
            <ul class="dropdown-menu dropdown-menu-md dropdown-menu-right drop-saldo">
                <div class="d-flex justify-content-left align-items-center cd-money">
                    <div class="card-money-info d-flex align-items-center">
                        <div class="mr-3">
                            <svg data-v-7515e7cb="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="width:40px;">

                                <path fill="#ffe400"
                                    d="M256 272c39.77 0 72-32.24 72-72S295.8 128 256 128C216.2 128 184 160.2 184 200S216.2 272 256 272zM288 320H224c-47.54 0-87.54 29.88-103.7 71.71C155.1 426.5 203.1 448 256 448s100.9-21.53 135.7-56.29C375.5 349.9 335.5 320 288 320z"
                                    class="primary"></path>
                                <path
                                    d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"
                                    class="secondary"></path>
                            </svg>
                        </div>
                        <div class="text-money">
                            <h1>name</h1>
                            <p>email</p>
                        </div>
                        <div class="ml-5">
                            <a href="{{route('admin.dashboards.wallet.index')}}"><i
                                    style="font-size:25px; color:#C2C7D0" class="nav-icon fas fa-wallet"></i></a>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center card-money text-money">
                    <div class="mb-3">
                        <div class="mb-3">
                            <h1>{{ trans('admin.pagesF.saldo') }}</h1>
                            <p>R$0</p>
                        </div>
                        <div>
                            <h1>{{ trans('admin.pagesF.saqueDisponivel') }}</h1>
                            <p> R$0</p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-3">
                            <h1>{{ trans('admin.pagesF.bonus') }}</h1>
                            <p>R$0</p>
                        </div>
                        <div>
                            <h1>Saldo Total</h1>
                            <p>R$0</p>
                        </div>
                    </div>
                </div>
            </ul>
        </li>
        <li>
        <a href="{{route('admin.dashboards.wallet.index')}}"> <button class="btn btn-secondary mr-md-3 mr-2 d-flex justify-content-center align-items-center ">
                <i style="color:#ffe400" class=" fas fa-wallet wallet-nav"></i>
            </button>
        </a></li>
        <!-- Config -->
        <li>
            <button aria-haspopup="menu" data-toggle="dropdown" aria-expanded="false" type="button"
                class="btn dropdown-toggle btn-secondary d-flex justify-content-center align-items-center btn-config icon-size-sm">
                <div>
                    <svg data-v-7515e7cb="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                        style="width:20px;">

                        <path fill="#ffe400"
                            d="M256 272c39.77 0 72-32.24 72-72S295.8 128 256 128C216.2 128 184 160.2 184 200S216.2 272 256 272zM288 320H224c-47.54 0-87.54 29.88-103.7 71.71C155.1 426.5 203.1 448 256 448s100.9-21.53 135.7-56.29C375.5 349.9 335.5 320 288 320z"
                            class="primary"></path>

                        <path
                            d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 128c39.77 0 72 32.24 72 72S295.8 272 256 272c-39.76 0-72-32.24-72-72S216.2 128 256 128zM256 448c-52.93 0-100.9-21.53-135.7-56.29C136.5 349.9 176.5 320 224 320h64c47.54 0 87.54 29.88 103.7 71.71C356.9 426.5 308.9 448 256 448z"
                            class="secondary"></path>
                    </svg>
                </div>
            </button>

            <!-- Drop config -->
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right ">

                <!-- Saudação -->


                <!-- Conta -->
                @can('read_user')
                <a class="dropdown-item" href="{{route('admin.settings.users.edit', ['user' => auth()->user()->id])}}">
                    <i class="fas fa-user mr-2"></i> {{ trans('admin.pagesF.conta') }}
                </a>
                <div class="dropdown-divider"></div>

                @endcan


                <!-- Linguagem -->
                <a class="dropdown-item" data-toggle="dropdown" style="cursor:pointer;">
                    <i class="fas fa-globe-americas mr-2"></i>
                    Tradução: PTBR
                </a>
                <ul class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                  
                    <li style="padding: 5px 10px;">
                        <a href="" style="color: #fff; display: block"
                            class="dropdown-item">Ingles</a>
                            <a href="" style="color: #fff; display: block"
                            class="dropdown-item">Espanhol  </a>
                    </li>
                   
                </ul>

                <!-- logout -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('admin.logout')}}">
                    <i class="fas fa-sign-out-alt"></i> {{ trans('admin.pagesF.logout') }}
                </a>
            </div>
        </li>

        <!-- Notificação -->
        <li class="ml-2 ml-md-3">
            <button aria-haspopup="menu" data-toggle="dropdown" aria-expanded="false" type="button"
                class="btn dropdown-toggle btn-secondary d-flex justify-content-center align-items-center btn-config icon-size-sm ">
                <div>
                    <svg style="fill: #ffe400;background: black;border-radius: 110px;color: #ffe400; padding:3px;"
                        width="22" height="22" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.1336 11C18.7155 16.3755 21 18 21 18H3C3 18 6 15.8667 6 8.4C6 6.70261 6.63214 5.07475 7.75736 3.87452C8.88258 2.67428 10.4087 2 12 2C12.3373 2 12.6717 2.0303 13 2.08949"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19 8C20.6569 8 22 6.65685 22 5C22 3.34315 20.6569 2 19 2C17.3431 2 16 3.34315 16 5C16 6.65685 17.3431 8 19 8Z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M13.73 21C13.5542 21.3031 13.3019 21.5547 12.9982 21.7295C12.6946 21.9044 12.3504 21.9965 12 21.9965C11.6496 21.9965 11.3054 21.9044 11.0018 21.7295C10.6982 21.5547 10.4458 21.3031 10.27 21"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    <div class="notifications-count">1</div>
                </div>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px; overflow-y: auto">
                    <ul class="timeline">
                        <li>
                            <a href="" >
                                <div class="timeline-panel">
                                    <div class="media-body">
                                        <h6 class="mb-1">Sua aposta foi feita</h6>
                                        <small class="d-block">A 2 horas</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </li>

        <!-- AJUDA
            
        <li class="nav-item">
            <a class="nav-link" href="https://wa.me/558196826967?text=Olá, Poderia me ajudar?">
                <i class="fas fa-regular fa-question"></i>
            </a>
        </li> -->
        @else
        <!--BTN Depositar -->
        <li class="nav-item  pl-3">
            <a href=""  onclick="toggleModal('login')" type="button" class="btn btn-despositar">Entrar
            </a>
        </li>
        <li class="nav-item pl-3">
            <a href="" onclick="toggleModal('register')" type="button"
                class="btn btn-despositar">Cadastre-se
            </a>
        </li>
        @endif

    </ul>

</div>
</nav>