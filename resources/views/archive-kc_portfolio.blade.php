@extends('layouts.app')

@section('content')
    <div class="col-12 p-0 m-0" id="gallery-wrap">
        @while(have_posts()) @php(the_post())
        <a href="#" class="position-relative">
            <span class="project-title p-5">
                {{ get_the_title() }}
            </span>
            @php($image_attr = wp_get_attachment_image_src(get_field('project_cover'), 'full', false))
            @if($image_attr)
                <img class="gallery-img" src="<?php echo $image_attr[0] ?>" alt="<?php the_sub_field('title') ?>" height="100%"/>
            @endif
        </a>
        @endwhile
    </div>
@endsection
