<div class="posts_columns__item col-12 col-md-6 col-lg-{{$columns}} @if($posts_per_row == 1) single @endif">
                <div class="posts_columns__item__inner">
                    @if(get_the_post_thumbnail_url())
                    <div class="posts_columns__item__icon" style="background-image: url({{get_the_post_thumbnail_url()}})">

                    </div>
                    @endif
                    <div class="posts_columns__item__content">
                    <div class="posts_columns__item__title">
                        <h3>{{the_title()}}</h3>
                    </div>
                    <div class="posts_columns__item__excerpt">
                        {!! the_excerpt(); !!}
                    </div>
                    </div>
                </div>
            </div>