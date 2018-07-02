{{--
  Template Name: Page: Full Bleed Image
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())

		<?php $image = get_field('image_background'); ?>
    <div class="bgi-wrap bg-dark">
        <div class="d-full bgi-cover @if(get_field('display_image_effects')) fx-bg-blur @endif" style="background-image: url(<?= wp_get_attachment_url($image, 'full') ?>);">&nbsp;</div>
    </div>

    <div class="col-12 pt-5 p-md-0 m-0 h-minusnav">
        @if(get_field('display_text'))
            <div class="col-12 col-md-5 d-inline-block p-2 p-md-5 m-0">
                {{--@unless(get_field('display_image_effects'))
                    <div class="d-full  fx-blur-backdrop-50 content-bg"></div>
                @endunless--}}

                @php($text_content = get_field('text_content'))
                @if($text_content)
                    <div class="col-12 p-0 m-0">
                        <h1 class="p-0 m-0"><?php echo $text_content['copy_header']?></h1>
                        @if($text_content['add_body_content'])
                        @endif
                    </div>
                @endif

                @if($text_content['add_body_content'])
                    <div class="col-12 p-0 m-0 mt-4">
											<?php echo $text_content['copy_body']?>
                    </div>
                @endif

            </div>
        @endif

        @if(get_field('display_cards'))
            <div class="col-12 col-md-6 col-xl-9 p-2 p-md-5 card-columns">
                @if(have_rows('card_content'))
                    @while(have_rows('card_content')) @php(the_row())

                    <div class="card fx-screen-backdrop border-0 mb-3">
                        @if(get_sub_field('display_card_image'))
                            <img class="card-img-top" src="..." alt="Card image cap">
                        @endif
                        <div class="card-body">
                            <strong class="card-title mb-1">@php(the_sub_field('card_header'))</strong>
                            <p class="card-text p-sm">@php(the_sub_field('card_body'))</p>
                        </div>
                    </div>

                    @endwhile
                @endif
            </div>
        @endif
    </div>

    @endwhile
@endsection