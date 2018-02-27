<a id="site-logo" class="p-5" href="{{ home_url('/') }}"><img src="@asset('/images/cc-logo.png')" width="100" height="auto"/></a>

<header class="fixed-bottom d-flex px-5 py-4" id="site-nav">
    @php($page_template = get_page_template_slug( $post->ID ))
    @if($page_template = 'views/tpl-layout-gallery.blade.php')
        <i class="fa fa-caret-left gallery-icon-direction"></i>
    @endif
    <div class="m-auto">
        @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
    </div>

    @if($page_template = 'views/tpl-layout-gallery.blade.php')
        <i class="fa fa-caret-right gallery-icon-direction"></i>
    @endif
</header>
