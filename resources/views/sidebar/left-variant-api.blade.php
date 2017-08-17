<style>
        @media (max-width: 1080px){
            .ers-left-sidebar{
                transform: translate3d(-100%,0,0);
                width: 85%!important;
            }
        }
</style>
<div class="ers-left-sidebar" 
    style="
        position:fixed;
        z-index:1032;
        position: fixed;
        background-color: #fff;
        width: 100px;
        height: 100%;
        left: 0;
    ">
    <div class="navbar-header" style="width:100%;">
        <a href="https://www.ersnet.org" class="navbar-brand" 
            style="
                text-align: center;
                height: 80px;
                width: 100px;
                line-height: 100px;
                padding-bottom: 0;
                padding: 15px;
                float: left;
                font-size: 17px;
                box-sizing: border-box;
        ">
            <i class="icon-ers icon" style="font-size:50px; color:#d0043c;"></i>
        </a>
    </div>
    <div class="ers-scroller nano">
        <div class="content nano-content">
            <div class="ers-logo"></a></div>
                <nav id="ml-menu" class="menu">
                <div class="menu__wrap">
                    @include('nav.sliding-metanav', array('items' => $items))
                </div>
                </nav>    
        </div>
    </div>
</div>