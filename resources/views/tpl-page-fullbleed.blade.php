{{--
  Template Name: Page: Full Bleed Image
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())

		<?php $image = get_field('image_background'); ?>
    <div class="bgi-wrap">
        <div class="d-full bgi-cover @if(get_field('display_image_effects'))fx-blur fx-opacity-drop @endif" style="background-image: url(<?= wp_get_attachment_url($image, 'full') ?>);">&nbsp;</div>
    </div>

    @if(get_field('display_text'))
        <div class="col-7 @unless(get_field('display_image_effects')) d-inline-block container-content-fixed col-12 @endunless p-3 pt-5 p-md-5 ml-0 h-minusnav">
            {{--@unless(get_field('display_image_effects'))
                <div class="d-full  fx-blur-backdrop-50 content-bg"></div>
            @endunless--}}

            @php($text_content = get_field('text_content'))
            @if($text_content)
                <div class="@unless(get_field('display_image_effects')) col-12 col-md-6 @else( col-12 col-xl-9 ) @endunless p-0 m-0">
                    <h2 class="p-0 m-0"><?php echo $text_content['copy_header']?></h2>
                    <hr/>
                </div>
            @endif

            @if($text_content['add_body_content'])
                <div class="@unless(get_field('display_image_effects')) col-12 col-md-6 @else( col-12 col-xl-9 ) @endunless p-0 m-0 mt-4">
									<?php echo $text_content['copy_body']?>
                </div>
            @endif

        </div>
    @endif

    @if(get_field('display_cards'))
        <div class="col-12 col-xl-9 p-3 p-md-5 card-columns">
            @if(have_rows('card_content'))
                @while(have_rows('card_content')) @php(the_row())

                <div class="card @unless(get_field('display_image_effects')) @else( bg-transparent ) bg-white-25 @endunless border-0">
                    @if(get_sub_field('display_card_image'))
                        <img class="card-img-top" src="..." alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">@php(the_sub_field('card_header'))</h5>
                        <p class="card-text">@php(the_sub_field('card_body'))</p>
                    </div>
                </div>

                @endwhile
            @endif
        </div>
    @endif

    @endwhile
@endsection