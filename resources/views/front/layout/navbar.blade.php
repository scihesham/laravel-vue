<body>
    <div class="none" id="main-content-div">

        <form id="logout-form" action="{{ url('logout') }}" class="none" method="POST">
            {{ csrf_field() }}
            <button type="submit">Logout</button>
        </form>

        <div class="container-fluid title-header-container">
            <div class="text-center">
            </div>
        </div>

        <div class="nav-container">
            <div class="container-fluid {{app()->getLocale() == 'ar' ? 'dir-ar' : 'dir-en'}}">
                <div class="row">
                    <div class="col-sm-3 {{app()->getLocale() == 'ar' ? 'text-right' : 'text-left'}}">
                        <div class="nav-bar dropdown-toggle nav-item" id="nav-bar" data-toggle="dropdown">
                            <i class="fas fa-bars"></i>
                        </div>
         
                        <!-------------- lang -------------->
                        <div style="display: inline-block">
                            <a class="dropdown-toggle" data-toggle="dropdown" id="lang">

                                <div class="ellipsis-percent" style="display:inline-block">
                                    @if(app()->getLocale() == 'ar')
                                    <img src="{{url('flags/arab.png')}}">
                                    @else
                                    <img src="{{url('flags/england.png')}}">
                                    @endif
                                </div>
                                <span class="caret" style="margin-right: 2px; margin-top: -2px"></span>

                            </a>
                            <div class="dropdown-menu" style="min-width:130px; padding: 0 1px">
                                @if(app()->getLocale() == 'en')
                                <li class="text-center">
                                    <a class="text-center" href="{{url('lang/ar')}}" style="font-size:16px; font-weight:bold; color:green; padding:15px 20px; text-align: center">
                                        <img src="{{url('flags/arab.png')}}">
                                    </a>

                                </li>
                                @endif
                                @if(app()->getLocale() == 'ar')
                                <li class="text-center">
                                    <a class="text-center" href="{{url('lang/en')}}" style="font-size:16px; font-weight:bold; color:green; padding:15px 20px; text-align: center">
                                        <img src="{{url('flags/england.png')}}">
                                    </a>
                                </li>
                                @endif
                            </div>
                        </div>

                        <!-------------- lang -------------->
                    </div>
                    <div class="col-sm-3" id="rased_check" style="cursor: pointer;">{{trans('lang.khabeer_tech')}}</div>

                    <!-- sart me html -->

                    <div class="col-sm-4 select-col">
                        <div class="mainselect">
                            </div>
                            <div class='icon'> <i class="fas fa-angle-down"></i> </div>
                        </div>
                    </div>

                    <div class="col-sm-1 text-right">
                        <div class="mt-1">
                            <span class="rounded border border-dark p-1 change-logged-in-user">
                                <strong>
                                </strong>
                            </span>
                        </div>
                    </div>

                    <div class="col-sm-1 text-right">
                        <div class="pen-cont">
                            <i class="fas fa-pen"></i>
                        </div>
                    </div>

   

                    <!-- end me html -->
                </div>
            </div>
        </div>
        @if (false)
        <div class="balance-bar-container" id="balance-bar-container">
        </div>
        <div class="balance-bar-options text-right">
            <div class="row">
                <div class="dropdown" id="balance-bar-level">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;
                        <span id="balance-bar-level-selected-val" data-key="{{array_key_first(balanceBarLevel())}}">{{array_values(balanceBarLevel())[0]}}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(balanceBarLevel() as $key => $val)
                        <a class="dropdown-item" data-key="{{$key}}" data-val="{{$val}}"> {{$val}} </a>
                        @endforeach
                    </div>
                </div>
                <div class="dropdown" id="balance-bar-currency-type" style="margin-right: 10px;">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-caret-down" aria-hidden="true"></i> &nbsp;
                        <span id="balance-bar-currency-type-selected-val" data-key="{{array_key_first(balanceBarCurrencyType())}}"> {{array_values(balanceBarCurrencyType())[0]}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach(balanceBarCurrencyType() as $key => $val)
                        <a class="dropdown-item" data-key="{{$key}}" data-val="{{$val}}"> {{$val}} </a>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        @endif