@extends('main')
@section('post')
<div class="main-container container mt-40" id="main-container">

    <!-- Content -->
    <div class="row">

        <!-- Posts -->
        <div class="col-lg-8 blog__content mb-30">

            <!-- Hot News -->
            <section class="section tab-post mb-10">

                <!-- Latest News -->
                <section class="section">
                    <article class="entry">

                        <div class="single-post__entry-header entry__header">
                            <h1 class="single-post__entry-title">
                                {{$news -> name}}
                            </h1>
                        </div>

                        <div class="entry__img-holder">
                            <img src="../images/news/{{$news->image}}" alt="" class="entry__img">
                        </div>

                        <div class="entry__article">
                            <p>{{$news -> description}}</p>
                        </div> <!-- end entry article -->

                        @if(isset($news->video))
                        <div class="vide--frame">
                            <blockquote>
                                <iframe width="100%" height="315" src="{{$news->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </blockquote>
                        </div>
                            @endif
                    </article>

                </section> <!-- end latest news -->
            </section>
        </div> <!-- end posts -->

       @include('popular')

    </div> <!-- end content -->
</div> <!-- end main container -->
@endsection