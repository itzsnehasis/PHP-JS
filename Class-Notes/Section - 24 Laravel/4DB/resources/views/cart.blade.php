@include('layouts.header')

       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Your</strong>  Cart Items Will Show here</h2>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
              @if (count($cart) == 0)

                  <div style = "color:white;padding-left:20%;font-size: 4em">Oops! Your cart is Empty</div>

              @else
              <table class = "table">
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Subtotal</th>
                  <th>Remove</th>
                </tr>
             @php
                $total = 0;

            @endphp

           

              @foreach($cart as $pid=>$quantity)

                @php
                   $subtotal = $product_details[$pid]->price * $quantity;
                   $total = $total + $subtotal ;
                @endphp


                 <tr>
                   <td>{{ $pid }}</td>
                   <td><img src = "{{ $product_details[$pid]->image }}" width = "100"></td>
                   <td>{{ $product_details[$pid]->name }}</td>
                   <td>{{ $quantity }}</td>
                   <td>{{ $product_details[$pid]->price }}</td>
                   <td>{{ $subtotal }}</td>
                   <td ><a href = "./remove/{{$pid}}" style= "color:white;">Remove</a></td>
                 </tr>


                 @endforeach

               <tr>
                 
                 <th colspan = "5">Total</th>
                 
                 <td>{{ $total }}</td>
               </tr> 
               </table>
           
              @endif
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
     <!-- footer start-->
      @include('layouts.footer')