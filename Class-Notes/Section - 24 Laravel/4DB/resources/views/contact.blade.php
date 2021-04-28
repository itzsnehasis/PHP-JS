@include('layouts.header')
      <!-- end header -->
            <!--about -->
       <div id="plant" class="contact_us layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2 style="text-align: center; margin-top: 45px;">Contact <strong style="color: #111315;">Us</strong></h2>
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
                  <div class="soc_text">soC</div>
               </div>
               <div class="col-md-6">
                  <div class="email_btn">
                     <form action="/action_page.php" >
                        <div class="form-group">
                           <input type="text" class="form-control form-control-sm" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Phone" name="Phone">
                        </div>
                        <div class="form-group">
                           <input  type="text" class="form-control form-control-sm" placeholder="Massage" name="text3">
                        </div>
                         <div class="submit_btn">
                            <button type="submit" class="btn btn-primary" style="background: #081b30;">Send</button>
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