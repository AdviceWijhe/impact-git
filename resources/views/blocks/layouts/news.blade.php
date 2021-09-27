@php  
$category_detail = get_the_category(get_the_ID());
$extraClasses = '';
$catName = '';

foreach($category_detail as $cd) {
    $extraClasses .= $cd->slug.' ';
    $catName .= $cd->name.' ';
}

@endphp

<div class="posts_columns__item news-layout col-12 col-md-6 col-lg-{{$columns}} @if($posts_per_row == 1) single @endif {{$extraClasses}}">
    <div class="posts_columns__item__inner">
        <div class="posts_columns__item__content">
        <div class="posts_columns__item__meta">
            <span>{{$catName}}</span>/<span> {{get_the_date('d.m.Y')}}</span>
        </div>
        <div class="posts_columns__item__title">
            <h3>{{the_title()}}</h3>
        </div>
        <div class="posts_columns__item__readmore">
        <a href="{{get_the_permalink()}}"><i class="fal fa-chevron-right"></i></a>
        </div>
        </div>
    </div>
</div>