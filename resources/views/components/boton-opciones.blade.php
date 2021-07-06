<div>
    <ul class="actions top-right">
        <li class="dropdown">
            <a href="javascript: history.go(-1)" class="btn btn-fab" >
                <i class="la la-long-arrow-left"></i>
            </a>
            
        </li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="btn btn-fab" data-toggle="dropdown" aria-expanded="false">
                    <i class="la la-ellipsis-h"></i>
                </a>
            <div class="dropdown-menu dropdown-icon-menu dropdown-menu-right" x-placement="bottom-end">
                <div class="dropdown-header">
                    Acciones Rapidas
                </div>
              {{$slot}}
                
                    
            </div>
        </li>
    </ul>
</div>