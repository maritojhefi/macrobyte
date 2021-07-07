<div>
    <header class="page-header" style="background-color: rgb(47, 95, 158)">
        <div class="container">
            <!-- PAGE SEARCH -->
           
                <div class="search-wrapper page-search m-t-20">
                   
                    <input type="text" wire:model.debounce.1000ms="buscar" class="search-input" style="padding:1.0625rem 1rem 1.0625rem 0.875rem" placeholder="Buscar...">
                </div>
            
            <!-- PAGE TABS -->
            <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation">
                    <a href="#tab-1" class="nav-link actual" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-collection-music zmdi-hc-fw text-white"></i>Actual</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tab-2" class="nav-link {{$show}}" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-search zmdi-hc-fw text-white"></i>Buscar</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tab-3" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="la la-sort-amount-desc text-white"></i>Rank</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tab-4" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="zmdi zmdi-format-indent-decrease zmdi-hc-fw text-white"></i>Historial</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tab-5" class="nav-link" data-toggle="tab" aria-expanded="true"><i class="la la-thumbs-up text-white"></i>Sugerencias</a>
                </li>
               
            </ul>
        </div>
    </header>
    @include('partials.session-flash-status')
	@include('partials.validation-error')
    <section class="container m-t-30">
        <!-- ROW -->
        <div class="row">
            <!-- COLUMN -->
            <div class="col">
                <!-- TAB CONTENT -->
                <div class="tab-content">
                    <div wire:loading class="alert alert-primary alert-dismissible fade show col-12" role="alert">
                        <strong>Cargando..!</strong> 
                       
                    </div>
                    <div class="tab-pane fadeIn" id="tab-1">
                        @include('musica.partial-actual')
                    </div>
                    <div class="tab-pane fadeIn {{$show}}" id="tab-2">
                                        
                         @include('musica.partial-buscar')
                    </div>
                    <div class="tab-pane fadeIn {{$show}}" id="tab-3">
                                        
                        @include('musica.partial-rank')
                   </div>
                   <div class="tab-pane fadeIn {{$show}}" id="tab-4">
                                        
                    @include('musica.partial-historial')
               </div>
               <div class="tab-pane fadeIn {{$show}}" id="tab-5">
                                        
                @include('musica.partial-sugerencia')
           </div>
                                   
                                </div>
                            </div>
                        </div>
                    </section>
</div>
