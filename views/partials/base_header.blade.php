<nav class="page-menu row justify-content-between align-items-center">
    <div class="logo">
        <a href="{{ $modx->makeUrl('1') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="8.7 8.7 50 50">
                <path d="M47.8 44.6l10.8-10.8-25-25-17.7 17.8 3.9 3.9 13.9-13.9L51 33.9l-3.3 3.3-14-14.1L23 33.8l14 13.9-3.3 3.3-21.1-21.1-3.9 3.9 25 25L44.5 48l-7.2-7.2 3.3-3.3 7.2 7.1zm-14.1-7.5l-3.3-3.3 3.3-3.3 3.3 3.3-3.3 3.3z" fill="#8f0e0f"/>
            </svg>
        </a>
    </div>

    <div class="page-menu_phone">
        <a href="tel:{{ $modx->getConfig('client_phone') }}"><i class="zmdi zmdi-phone"></i> {{ $modx->getConfig('client_phone') }}</a>
    </div>

    {!! $modx->runSnippet('DLMenu', [
        'parents' => '0',
        'outerTpl' => '@CODE:<ul class="page-menu_list snip1135 col">[+wrap+]</ul>',
        'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]" data-hover="[+title+]">[+title+]</a></li>',
        'parentRowTpl' => '@CODE:<li[+classes+]><a href="[+url+]"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
        'parentRowHereTpl' => '@CODE:<li[+classes+]><a href="[+url+]"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
        'parentRowActiveTpl' => '@CODE:<li[+classes+]><a href="[+url+]"  data-hover="[+title+]">[+title+]</a>[+wrap+]</li>',
        'innerTpl' => '@CODE:<ul class="page-menu_item__submenu-items animated bounceInUp">[+wrap+]</ul>',
        'innerRowTpl' => '@CODE:<li class="page-menu_item__submenu-items_item"><a href="[+url+]" class="page-menu_item__submenu-items_item_link">[+title+]</a></li>',
        'maxDepth' => '2',
        'showParent' => '1',
        'hereClass' => 'current',
        'rowClass' => 'page-menu_item',
        'firstClass' => '',
        'lastClass' => '',
        'levelClass ' => '',
        'oddClass' => '',
        'evenClass' => '',
    ]) !!}

    <div class="page-menu_social_items">
        <div class="page-menu_social_item"><a class="ic-fb" href="{{ $modx->getConfig('client_facebook') }}"><i class="zmdi zmdi-facebook"></i></a></div>
        <div class="page-menu_social_item"><a class="ic-insta" href="{{ $modx->getConfig('client_instagram') }}"><i class="zmdi zmdi-instagram"></i></a></div>
        <div class="page-menu_social_item"><a class="ic-ytb" href="{{ $modx->getConfig('client_youtube') }}"><i class="zmdi zmdi-youtube-play"></i></a></div>
    </div>
    <div class="hamburger--wrapper">
        <button class="hamburger hamburger--slider float-right hamburger--sm js-menusb-btn" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
        </button>
    </div>


</nav>

<aside class="menu-sidebar js-menusb" id="sidebar">
    <a class="btn-close" href="#" id="js-close-btn">
        <span class="ti-close"></span>
    </a>
    <div class="menu-sidebar__content">
        <nav class="menu-sidebar-nav-menu">

            {!! $modx->runSnippet('DLMenu', [
                'parents' => '0',
                'outerTpl' => '@CODE:<ul class="menu nav-menu" id="nav-menu-sidebar">[+wrap+]</ul>',
                'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]">[+title+]</a></li>',
                'parentRowTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'parentRowHereTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'parentRowActiveTpl' => '@CODE:<li[+classes+]> <a href="#" data-toggle="collapse" data-target="#[+iteration+]" aria-expanded="true" aria-controls="[+iteration+]">[+title+]</a>[+wrap+]</li>',
                'innerTpl' => '@CODE:<ul class="sub-menu collapse" id="[+iteration+]" data-parent="#nav-menu-sidebar">[+wrap+]</ul>',
                'innerRowTpl' => '@CODE:<li class="menu-item"><a href="[+url+]">[+title+]</a></li>',
                'maxDepth' => '3',
                'showParent' => '1',
                'hereClass' => 'current',
                'rowClass' => 'menu-item',
                'parentClass' => 'menu-item-has-children',
                'firstClass' => '',
                'lastClass' => '',
                'levelClass ' => '',
                'oddClass' => '',
                'evenClass' => '',
            ]) !!}

        </nav>
        <ul class="list-social list-social--big">
            <li class="list-social__item">
                <a class="ic-fb" href="{{ $modx->getConfig('client_facebook') }}">
                    <i class="zmdi zmdi-facebook"></i>
                </a>
            </li>
            <li class="list-social__item">
                <a class="ic-insta" href="{{ $modx->getConfig('client_instagram') }}">
                    <i class="zmdi zmdi-instagram"></i>
                </a>
            </li>
            <li class="list-social__item">
                <a class="ic-ytb" href="{{ $modx->getConfig('client_youtube') }}">
                    <i class="zmdi zmdi-youtube-play"></i>
                </a>
            </li>

        </ul>
    </div>
    <div class="menu-sidebar__footer">
        <div class="copyright">
            <p>{{ $modx->getConfig('client_copyright') }}</p>
        </div>
    </div>
</aside>

<div id="menu-sidebar-overlay"></div>