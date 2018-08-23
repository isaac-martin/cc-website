{{--
  Template Name: Page: Home
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
		<div class="col-12 p-0 m-0 home-carousel owl-carousel js-home-carousel owl-theme">
        @while( has_sub_field('gallery') )
            @php($image_attr = wp_get_attachment_image_src(get_sub_field('image'), 'full', false))
            @if($image_attr)
            <div class="single-slide-wrap">
                <img class="slide-img" src="<?php echo $image_attr[0] ?>" alt="<?php the_sub_field('title') ?>" height="100%"/>
            </div>
            @endif
        @endwhile
    </div>
    @endwhile
@endsection
