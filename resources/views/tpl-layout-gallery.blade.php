{{--
  Template Name: Page: Gallery
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
    <div class="col-12 p-0 m-0 js-gal-carousel owl-carousel owl-theme gal-carousel">
        @while( has_sub_field('gallery_images') )
            @php($image_attr = wp_get_attachment_image_src(get_sub_field('image'), 'full', false))
            @if($image_attr)
                <img class="gallery-img" src="<?php echo $image_attr[0] ?>" alt="<?php the_sub_field('title') ?>"/>
            @endif
        @endwhile
    </div>
    @endwhile
@endsection
