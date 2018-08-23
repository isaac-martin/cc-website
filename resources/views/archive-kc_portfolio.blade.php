@extends('layouts.app')

@section('content')
        <div class="port-wrap">
        @while(have_posts()) @php(the_post())
        @php($image_attr = wp_get_attachment_image_src(get_field('project_cover'), 'full', false))
        <div class="col-md-4">
            <div class="single-arc bg-img" style="background-image: url('<?php echo $image_attr[0] ?>');">
            <a class="grad-text" href="{{ get_permalink() }}">
                <h2 class="pl-3 py-0 m-0 txt-shadow">
                        {{ get_the_title() }}
                 </h2>
            </a>
            </div>
</div>
        @endwhile
        </div>
@endsection
