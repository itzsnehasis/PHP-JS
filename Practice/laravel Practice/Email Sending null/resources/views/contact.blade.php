<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/contact.css">
</head>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="{{ route('contact.store') }}">
            @csrf
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        @if($errors->has('name'))
                            <div class="error">
                                {{$errors->first('name')}}
                            </div>
                        @endif
                        <div class="error">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        @if($errors->has('email'))
                            <div class="error">
                                {{$errors->first('email')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        @if($errors->has('phone'))
                            <div class="error">
                                {{$errors->first('phone')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Your Subject *" value="" />
                        </div>
                        @if($errors->has('subject'))
                            <div class="error">
                                {{$errors->first('subject')}}
                            </div>
                        @endif
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                        @if($errors->has('message'))
                            <div class="error">
                                {{$errors->first('message')}}
                            </div>
                        @endif
                    </div>
                </div>
            </form>
</div>