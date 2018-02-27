{{--
  Template Name: Page: Full Bleed Image
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())

		<?php $image = get_field('image_background'); ?>
    <div class="bgi-wrap">
        &nbsp;
        <div class="d-full bgi-cover" style="background-image: url(<?= wp_get_attachment_url($image, 'full') ?>);">&nbsp;</div>
    </div>

    @if(get_field('copy_header') || get_field('copy_body'))
        <div class="col-5 p-5 m-0 h-minusnav fx-blur-backdrop rounded-bottom-r">
            @php($text_content = get_field('text_content'))
            @if($text_content)
                <h2 class="col-11 p-0 mb-4"><?php echo $text_content['copy_header']?></h2>
            @endif
            @if($text_content)
                <div class="col-11 p-0 m-0"><?php echo $text_content['copy_body']?></div>
            @endif
        </div>
    @endif

    @endwhile
@endsection