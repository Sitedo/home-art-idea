<div class="container">
    <div class="footer-items">
        <a class="footer_logo" href="{{ $modx->makeUrl('1') }}">
            <img src="theme/assets/rediz/img/about/footer_logo.svg" alt="logo">
        </a>
        <div class="footer_menu-list">
            {!! $modx->runSnippet('DLMenu', [
               'parents' => '0',
               'outerTpl' => '@CODE:<ul class="footer_menu-list__items">[+wrap+]</ul>',
               'rowTpl' => '@CODE:<li[+classes+]><a href="[+url+]" class="footer_menu-list__link">[+title+]</a></li>',
               'maxDepth' => '1',
               'hereClass' => 'current',
               'rowClass' => 'footer_menu-list__item',
               'firstClass' => '',
               'lastClass' => '',
               'levelClass ' => '',
               'oddClass' => '',
               'evenClass' => '',
           ]) !!}
        </div>
        <div class="footer_contacts-list">
            <div class="footer_contacts-list__address">
                <div class="footer_contacts-list__address-title">{{ $modx->getConfig('client_address') }}</div>
                <div class="footer_contacts-list__address-text">
                    <p>Бизнес-центр (коворкинг) «Калибр»</p>
                </div>
            </div>
            <a class="footer_contacts-list__phone" href="tel:+{{ $modx->getConfig('client_phone') }}">{{ $modx->getConfig('client_phone') }}</a>
            <a class="footer_contacts-list__email" href="mailto:{{ $modx->getConfig('client_email') }}">{{ $modx->getConfig('client_email') }}</a>
        </div>
        <div class="footer_last-col--wrapper">
            <div class="footer_social-items">
                <div class="page-menu_social_item"><a class="ic-fb" href="{{ $modx->getConfig('client_facebook') }}"><i class="zmdi zmdi-facebook"></i></a></div>
                <div class="page-menu_social_item"><a class="ic-insta" href="{{ $modx->getConfig('client_instagram') }}"><i class="zmdi zmdi-instagram"></i></a></div>
                <div class="page-menu_social_item"><a class="ic-ytb" href="{{ $modx->getConfig('client_youtube') }}"><i class="zmdi zmdi-youtube-play"></i></a></div>
            </div>
            <div class="footer_copyright">
                {{ $modx->getConfig('client_copyright') }}
            </div>
        </div>
    </div>
</div>