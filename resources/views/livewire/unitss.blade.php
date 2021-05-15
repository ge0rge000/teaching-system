<style>
   
    
</style>
<div class="content">
    <div class="row">

        <ul class="product-list grid-products equal-container">
            @if(Route::has('login'))
            @auth
               
                  
                @foreach ($units as$unit)
                  <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                            <figure><img src="{{ asset('storage/images') }}/{{ $unit->image }}"  ></figure>
                        </a>
                    </div>
                    <div class="product-info">
                      
                        <div class="wrap-price"><span class="product-price">$ {{ $unit->regular_price }}</span></div>
                <a href="{{route('unit.details',['name'=>$unit->name,'year_type'=>$unit->year_type]) }}"  >{{ $unit->name }}</a>

                        <a href="{{route('unit.details',['name'=>$unit->name,'year_type'=>$unit->year_type]) }}" class="btn add-to-cart">Add To Cart</a>
                    </div>
                </div>
            </li> 
            @endforeach
        
                @else
                <h1>You should register first</h1>
           @endif
           @endif
        

        

        </ul>
     

    </div>
 
</div>