<!-- Sidebar -->
<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Social Subscribers -->
    <div class="widget widget-social-subscribers">
        <ul class="widget-social-subscribers__list">
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--facebook">
                    <i class="ui-facebook widget-social-subscribers__icon"></i>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--youtube">
                    <i class="ui-youtube widget-social-subscribers__icon"></i>
                </a>
            </li>
            <li class="widget-social-subscribers__item">
                <a href="#" class="widget-social-subscribers__url widget-social-subscribers--instagram">
                    <i class="ui-instagram widget-social-subscribers__icon"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- Latest Reviews -->
    <div class="widget widget-reviews">
        <h4 class="widget-title">Популярные новости</h4>
        <ul class="post-list-small">

            @foreach($popularNews as $new)



                <li class="post-list-small__item">
                    <article class="post-list-small__entry clearfix">
                        <div class="post-list-small__img-holder">
                            <div class="thumb-container thumb-75">
                                <a href="{{url('news/'.$new->id)}}">
                                    <img data-src="{{url('../'.$new->image)}}" src="{{url('../'.$new->image)}}" alt="" class=" lazyload">
                                </a>
                            </div>
                        </div>
                        <div class="post-list-small__body">
                            <h3 class="post-list-small__entry-title">
                                <a href="{{url('news/'.$new->id)}}">{{$new -> name}}</a>
                            </h3>
                            <p class="short--info">
                                {{mb_strimwidth($new->description, 0, 45, "...")}}
                            </p>
                        </div>
                    </article>
                </li>
                @endforeach

        </ul>
    </div>

</aside> <!-- end sidebar -->