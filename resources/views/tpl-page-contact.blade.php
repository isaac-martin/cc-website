{{--
  Template Name: Page: Contact
--}}

@extends('layouts.app')

@section('content') 
    @while(have_posts()) @php(the_post())

		<?php $image = get_field('image_side'); ?>
        <div class="container-fluid">
    <div class="col-12 pt-5 p-md-0 m-0 h-minusnav">
    <div class="scroll-cont row">
        @if(get_field('display_text'))
            <div class="col-12 col-md-6 d-inline-block p-2 p-md-5 m-0 scroller">
               
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

<p>Sign Up For Our Mailing List</p>
<form action="https://kateconnors.us16.list-manage.com/subscribe/post?u=33ee5481785493cf43e697aa0&amp;id=66624c551e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
  
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_33ee5481785493cf43e697aa0_66624c551e" tabindex="-1" value=""></div>
    <input type="submit" value="Subscribe" name="subscribe" class="btn">

</form>


<!--End mc_embed_signup-->
                    </div>
                @endif

            </div>

                <div class="col-12 col-md-6 d-inline-block p-2 p-md-5 m-0">
               
              <img style="padding-right:55px;" src="<?= wp_get_attachment_url($image, 'full') ?>">

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
    </div>
    </div>

    @endwhile
@endsection
