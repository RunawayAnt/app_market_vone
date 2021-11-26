<div class="m-2">
    @if ($pcomments->comments->count())
        @foreach ($pcomments->comments as $item)
            <div class="p-3 mb-2 bg-light rounded">
                <div class="row">
                    {{-- @livewire('comments-user-data', ['user' => $item->user_id], key($item->user_id)) --}}
                    <x-comments-user-name :user="$item->user_id"></x-comments-user-name>

                    <div class="col-12 col-lg-3">
                        <small> {{ $item->created_at }}</small>
                        {{-- <ul class="rating-stars">
                            <li style="" class="stars-active">
                                @for ($i = 0; $i < $item->qualification; $i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                            </li>
                            <li>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <small>({{ $item->qualification }})</small> --}}
                        <x-product-rating :qualification="$item->qualification"></x-product-rating>
                    </div>
                    <div class="col m-3">
                        <div class="bg-white p-3">
                            <p> {{ $item->cmessage }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="p-4 mb-2 bg-light rounded">
            <div class="row">
                <div class="col text-center">
                    <p> Sin comentarios, s&eacute; el primero! <i class="far fa-grin-wink"></i></p>
                </div>
            </div>
        </div>
    @endif
</div>
