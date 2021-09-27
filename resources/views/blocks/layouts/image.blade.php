<a href="{{the_permalink()}}" class="posts_columns__item col-12 col-md-6 col-lg-{{$columns}} @if($posts_per_row == 1) single @endif {{get_post_type(get_the_ID())}}">
                <div class="posts_columns__item__inner">
                    @if(get_the_post_thumbnail_url())
                    <div class="posts_columns__item__icon" style="background-image: url({{get_the_post_thumbnail_url()}})">

                    </div>
                    @endif
                </div>
            </a>