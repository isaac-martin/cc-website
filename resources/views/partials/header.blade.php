<a id="site-logo" href="{{ home_url('/') }}">
<!-- Page 1 -->
<svg x="0" y="0" viewBox="0 0 1787 2331" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
style="display: block;margin-left: auto;margin-right: auto;">
<defs>

<style type="text/css"><![CDATA[

.g0_1{
fill: #231F20;
}

]]></style>

</defs>

<g fill="#231F20" >
<use xlink:href="#f0_4" transform="matrix(749.9,0,0,749.9,37.2,1030.8)" />
<use xlink:href="#f0_3" transform="matrix(749.9,0,0,749.9,798,1030.8)" />
<use xlink:href="#f0_4" transform="matrix(749.9,0,0,749.9,37.2,2037.9)" />
<use xlink:href="#f0_5" transform="matrix(749.9,0,0,749.9,729.2,2037.9)" />
<use xlink:href="#f1_3" transform="matrix(346.2,0,0,346.2,1430.4,2037.7)" />
</g>
<path d="M168.9,2196.9c0,0,6.1,-8.1,15.3,-8.6c9.2,-.6,36.1,2.5,56.8,2c20.8,-.5,123.6,-1.1,143.5,-2.1c20,-1,60.7,-.1,79.9,0c19.1,.1,56,4.7,81.3,4.1c25.4,-.5,35.4,1.3,54.5,0c20.4,-1.3,89.8,-2,118.2,-2c28.4,0,89.1,1,107.8,2c18.8,1,34.9,5.6,68.7,7.7c33.8,2,180.3,3.5,222.6,2.5c42.2,-1,110.5,-5.1,132,-4.6c21.5,.5,89,0,108.2,0c19.2,0,81.4,1.5,88.3,8.2c6.8,6.6,-8.6,10.5,-23.6,10.9c-17,.6,-29.4,2.8,-46.3,.8c0,0,-52.2,-5.6,-74.5,-5.6c-22.2,0,-51.4,-1.5,-92,1c-40.7,2.5,-96,5.1,-109,5.1c-13.1,0,-130.5,.5,-150.4,-3.1c-20,-3.5,-76.7,-5.1,-93.6,-5.6c-16.9,-.5,-53.9,-8.1,-94.6,-8.1H682.3c-17.6,0,-83.7,3.8,-105.1,3.5c-21.5,-.4,-50.7,-4,-69.9,-4H343.8c-29.9,0,-90.5,1,-112,1.5c-21.5,.5,-65.9,-2.5,-62.9,-5.6Z" class="g0_1" />

<defs>
<path d="M533,-13C303,-13,92,98,92,472c0,374,211,491,438,491c96,0,190,-20,278,-52V869c-88,34,-180,52,-273,52C327,921,134,822,134,472C134,121,327,26,536,26c90,0,185,17,272,47V32C721,3,625,-13,533,-13Z" 
id="f0_4"
transform="scale(0.001,-0.001)" />

<path d="M373,28c116,0,203,58,264,134L332,516C205,445,130,364,130,249C130,125,228,28,373,28ZM344,565c117,68,182,129,182,208c0,73,-39,148,-143,148C293,921,237,856,237,778c0,-63,38,-129,107,-213ZM371,-13C205,-13,89,98,89,252c0,131,87,220,217,295C237,629,196,700,196,779c0,107,76,182,187,182c130,0,184,-92,184,-183C567,669,480,602,368,536L662,199c38,56,64,117,81,168h41C767,304,733,231,689,167L833,0H778L663,133C593,47,497,-13,371,-13Z" 
id="f0_3"
transform="scale(0.001,-0.001)" />

<path d="M527,26c274,0,391,154,391,449C918,767,801,921,527,921C251,921,134,767,134,475C134,180,251,26,527,26Zm0,-39C228,-13,92,157,92,475c0,315,136,488,435,488C825,963,959,790,959,475C959,157,825,-13,527,-13Z" 
id="f0_5"
transform="scale(0.001,-0.001)" />

<path d="M458,-20C402,-20,356,24,356,81c0,57,46,104,102,104c57,0,104,-47,104,-104C562,24,515,-20,458,-20Z" 
id="f1_3"
transform="scale(0.001,-0.001)" />


</defs>
</svg>

</a>
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
