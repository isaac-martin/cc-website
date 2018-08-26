@extends('layouts.app')

@section('content')
	@while(have_posts()) @php(the_post())

	<style>
		.menu-item.menu-item-object-kc_portfolio a {
			color: #333 !important;
		}
	</style>



		<div class="col-9 col-md-6 col-lg-5 col-xl-4 d-inline-block p-0 m-0 z-1000 h-100 float-left">
			<div class="col-12 p-0 m-0 h-100 bg-dark" id="project-content-wrapper">
				<?php $image_attr = wp_get_attachment_image_src(get_field('project_cover'), 'large', false); ?>
				<div class="d-full bg-white txt-brand-grey">&nbsp;</div>
				<div class="col-12 p-3 p-md-5 bg-white txt-brand-grey" id="project-content">
					<h1><?php the_title(); ?></h1>
					<?php the_field('project_description'); ?>
					<a style="color: white; background: #333; padding: 10px 20px; border-radius: 4px;" href="/portfolio">← Back to all projects</a>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-7 col-xl-8 d-inline-block p-0 m-0 z-1000 h-100 float-left port-car-wrap">
			<div class="js-proj-car proj-car">
		@if( have_rows('project_images') )

			@while(( have_rows('project_images') ))
				@php(the_row())
				<?php $image_attr = wp_get_attachment_image_src(get_sub_field('images_image'), 'large', false); ?>
				<img class="gallery-img" src="<?php echo $image_attr[0] ?>" alt="<?php the_sub_field('title') ?>"/>

			@endwhile
		@endif
	</div>
	<div class="slideNav">
	<div class="slideCount"></div>
	<div class="slideArrows"><span class="prev">Previous</span><span class="next">Next</span></div>
	</div>

	</div>
	@endwhile
@endsection
