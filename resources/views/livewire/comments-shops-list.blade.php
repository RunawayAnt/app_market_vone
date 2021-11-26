<div class="m-2">
    @if ($scomments->comments->count())
        @foreach ($scomments->comments as $item)
            <div class="p-3 mb-2 bg-light rounded">
                <div class="row">
                    <div class="col-12">
                        <x-comments-user-name :user="$item->user_id"></x-comments-user-name>
                    </div>
                    <div class="col-12 col-lg-12 text-center">
                        <small> {{ $item->created_at }}</small>
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
