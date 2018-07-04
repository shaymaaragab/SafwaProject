<header>
       <nav class="navbar navbar-default top-nav" id="top-nav" style="z-index: 9000">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>

               </div>
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav navbar-right flip">
                       <li class="search-fad">
                           <a class="fadeOut">
                               Search
                               <span class="fa fa-search"></span>
                           </a>
                           <form method="POST" action="{{ route('Search') }}" accept-charset="UTF-8" class="navbar-search" role="search">
                            {{ csrf_field() }}
                           
                               <div class="input-group">
                                   <input type="text" name="search" class="form-control is-active">
                                   <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                               </div>
                           </form>
                       </li>
                       <li>
                           <a href="{{switchLangUrl()}}">عربى</a>
                       </li>
                   </ul>

               </div><!-- /.navbar-collapse -->
               <div class="search-mobile">
                   <a class="fadeOut" id="mobilesearch">
                       <span class="fa fa-search"></span>
                   </a>
                   <form method="GET" action="#" accept-charset="UTF-8" class="navbar-search" role="search">
                       <div class="input-group hide" id="searchnav">
                           <input type="text" name="search" class="form-control">
                           <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                       </div>
                   </form>
               </div>
           </div><!-- /.container-fluid -->
       </nav>
       <nav class="navbar navbar-default" id="second-nav">
           <div class="container">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand" href="{{ route('Home') }}">
                       <img src="{{ asset('/assets/img/1.png') }}" class="img-responsive logo-img">
                   </a>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->

