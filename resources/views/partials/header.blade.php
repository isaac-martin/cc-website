<a id="site-logo" class="pr-3 pt-5 pr-md-5" href="{{ home_url('/') }}"><img src="@asset('/images/cc-logo-w.png')" width="100" height="auto"/></a>
<div id="site-nav-screen"></div>
<header class="fixed-bottom d-flex align-items-end p-3 px-md-5 py-md-4" id="site-nav">
    @php($page_template = get_page_template_slug( $post->ID ))

    @if($page_template == 'views/tpl-layout-gallery.blade.php')
        <i class="fa fa-caret-left gallery-icon-direction"></i>
    @endif
    <div class="mx-auto align-self-end" id="site-nav-wrapper">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </div>

    @if($page_template == 'views/tpl-layout-gallery.blade.php')
        <i class="fa fa-caret-right gallery-icon-direction"></i>
    @endif
</header>
