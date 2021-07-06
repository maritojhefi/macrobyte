<div>
    <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span>
            Dropdown
        </span>
        <i class="la la-angle-down menu-arrow-down"></i>
    </a>
    <div class="dropdown-menu menu-icons dropdown-menu-left">
        <div class="form-group form-filter">
            <input type="text" placeholder="Filter location..." class="form-control filter-input" data-search-trigger="open">
            <i data-q-action="clear-filter" class="icon dripicons-cross clear-filter" style="display: none;"></i>
            <ul class="list-reset filter-list mCustomScrollbar _mCS_1 mCS-autoHide" data-scroll="minimal-dark" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside" style="max-height: 300px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                @foreach ($productos as $item)
                <li><a class="dropdown-item" href="#">{{$item->nombre}}</a></li>
                @endforeach
              
           
               
            </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px; display: block; height: 107px; max-height: 280px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></ul>
        </div>
    </div>
</div>