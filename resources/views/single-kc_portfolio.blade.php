@extends('layouts.app')

@section('content')
	@while(have_posts()) @php(the_post())

	<style>
		.menu-item.menu-item-object-kc_portfolio a {
			color: #333 !important;
		}
	</style>


	<div class="col-12 p-0 m-0" id="gallery-wrap">
		<div class="col-9 col-md-6 col-lg-5 col-xl-3 d-inline-block p-0 m-0 txt-shadow z-1000 h-100 float-left">
			<div class="col-12 p-0 m-0 h-100 bg-dark" id="project-content-wrapper">
				<?php $image_attr = wp_get_attachment_image_src(get_field('project_cover'), 'large', false); ?>
				<div class="d-full fx-bg-blur bgi-cover @if(get_field('display_image_effects')) fx-bg-blur @endif" style="background-image: url(<?php echo $image_attr[0] ?>);">&nbsp;</div>
				<div class="col-12 p-3 p-md-5" id="project-content">
					<h1><?php the_title(); ?></h1>
					<?php the_field('project_description'); ?>
				</div>
			</div>
		</div>
		@if( have_rows('project_images') )

			@while(( have_rows('project_images') ))
				@php(the_row())
				<?php $image_attr = wp_get_attachment_image_src(get_sub_field('images_image'), 'large', false); ?>
				<img class="gallery-img" src="<?php echo $image_attr[0] ?>" alt="<?php the_sub_field('title') ?>" height="100%"/>

			@endwhile
		@endif
	</div>
	@endwhile
@endsection
