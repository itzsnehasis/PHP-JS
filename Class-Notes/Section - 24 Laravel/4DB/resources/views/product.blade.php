@include('layouts.header')

       <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
           
            @foreach($rows as $row)
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><a href = './details/{{$row->id}}'><img src="{{$row->image}}" alt="img"/></a></figure>
                    <h3> Rs.<strong class="price_text">{{$row->price}}</strong></h3>
                     <h4><a href = './details/{{$row->id}}'>{{$row->name}}</a></h4>
                  </div>
               </div>
               @endforeach

              
              
    
      
             </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
     <!-- footer start-->
      @include('layouts.footer')