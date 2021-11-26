    <ul class="rating-stars">
        <li style="" class="stars-active">
            @for ($i = 0; $i < $qualification; $i++)
                <i class="fa fa-star"></i>
            @endfor
        </li>
        <li>
            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </li>
    </ul>
    <small class="label-rating text-muted">({{$qualification}})</small>