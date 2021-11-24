 <div class="row">
     <main class="col-md-9">
         <div class="card">

             <table class="table table-borderless table-shopping-cart">
                 <thead class="text-muted">
                     <tr class="small text-uppercase">
                         <th scope="col">Producto</th>
                         <th scope="col" width="120">Cantidad</th>
                         <th scope="col" width="120">Precio</th>
                         <th scope="col" class="text-right" width="200"> </th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach ($cartCollection as $item)
                         <tr>
                             <td>
                                 <figure class="itemside">
                                     <div class="aside"><img src="{{ $item->attributes->image }}"
                                             class="img-sm">
                                     </div>
                                     <figcaption class="info">
                                         <a href="" class="title text-dark">{{ $item->name }}</a>
                                         <p class="text-muted small">Categoria: {{ $item->attributes->category }}
                                             <br>Marca: {{ $item->attributes->brand }}
                                         </p>
                                     </figcaption>
                                 </figure>
                             </td>
                             <td>
                                 @livewire('cart-update', ['item' => $item], key($item->id))
                             <td>
                                 <div class="price-wrap">

                                     <var class="price">s/ {{ $item->price * $item->quantity }}</var>

                                     <small class="text-muted"> s/ {{ $item->price }} solo</small>
                                 </div> <!-- price-wrap .// -->
                             </td>
                             <td class="text-right">
                                 <button type="button" class="btn btn-light"
                                     wire:click.prevent="removeCart('{{ $item->id }}')">
                                     Remover
                                 </button>
                             </td>
                         </tr>
                     @endforeach
                 </tbody>
             </table>

             <div class="card-body border-top">
                 @if (Route::has('login'))
                     @auth
                         @can('client.home')
                             @if (Cart::getSubTotal() > 0)
                                 <a href="#" class="btn btn-primary float-md-right"> Realizar compra <i
                                         class="fa fa-chevron-right"></i>
                                 </a>

                             @endif
                         @endcan
                     @else
                         <a class="float-md-right" href="{{ route('login') }}">Iniciar Sesion</a>
                         @if (Route::has('register'))
                             <a class="float-md-right mr-2  pr-1 border-right"
                                 href="{{ route('register') }}">Registrarse</a>
                         @endif
                     @endauth

                 @endif
                 <a href="{{ route('home') }}" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continuar
                     comprando </a>
             </div>
         </div> <!-- card.// -->

         <div class="alert alert-success mt-3">
             <p class="icontext"><i class="far fa-smile-beam"></i>&nbsp; Productos de buena calidad y precio.</p>
         </div>

     </main> <!-- col.// -->
     <aside class="col-md-3">
         <div class="card">
             <div class="card-body">
                 <dl class="dlist-align">
                     <dt>Sub total:</dt>
                     <dd class="text-right">s/ {{ Cart::getSubTotal() }}</dd>
                 </dl>
                 <dl class="dlist-align">
                     <dt>Total:</dt>
                     <dd class="text-right  h5"><strong>s/ {{ Cart::getTotal() }}</strong></dd>
                 </dl>
                 <hr>
                 <p class="text-center mb-3">
                     <img src="images/misc/payments.png" height="26">
                 </p>

             </div> <!-- card-body.// -->
         </div> <!-- card .// -->
     </aside> <!-- col.// -->
 </div>
