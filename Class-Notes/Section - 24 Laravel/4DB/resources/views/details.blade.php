@include('layouts.header')
      <!-- end header -->
            <!--about -->


       <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 45px;">Details <strong style="color: #111315;">Page</strong></h2>
                     <span style="text-align: center;">available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="contact_us_2 layout_padding paddind_bottom_0 ">
         <div class="container" >
            <div class="row">
               <div class="col-md-6">
                  <div class="soc_text"><img src = "{{$rows[0]->image}}"></div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">

                  <h1 class=""  > {{$rows[0]->name}}</h1>  
                     <h5  class="">{{$rows[0]->details}}</h5>
                     <h5  style = "color:black">Price: Rs.{{$rows[0]->price}}</h5>

                     <form action="./add" method = "post">
                        @csrf
                        <div class="form-group">
                           <input type="hidden" class="form-control form-control-sm" p name="pid" value = "{{$rows[0]->id}}">
                        </div>
                        <div class="form-group">
                           <input type="number" class="form-control form-control-sm" placeholder="Quantity" name="quantity" value = "1" style = "color:black;">
                        </div>
                        
                       
                         <div class="submit_btn">
                            <button type="submit" class="btn btn-primary" style="background: #081b30;">Add To Cart</button>
                         </div>
                      </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--end about -->

      <!-- footer start-->
      @include('layouts.footer')
