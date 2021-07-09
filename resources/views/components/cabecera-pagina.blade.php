<div>
    
    <header class="page-header">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h1 class="separator">{{$titulo}}</h1>
                <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href=""><i class="icon dripicons-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{env('APP_NAME')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{Request::path()}}</li>
                        
                    </ol>
                </nav>
            </div>
            {{$slot}}
        </div>
    </header>
    
  
</div>