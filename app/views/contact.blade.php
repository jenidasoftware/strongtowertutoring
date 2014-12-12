@extends('layouts.worthy')


@section('content')

      <!-- .footer start -->
      <!-- ================ -->
        <div class="container">
          <h1 class="title text-center" id="contact">Contact Us</h1>
          <div class="space"></div>
          <div class="row">
            <div class="col-sm-6">
              <div class="footer-content">
                <p class="large"></p>
                <ul class="list-icons">
                  <li><i class="fa fa-map-marker pr-10"></i> P.O.Box </li>
                  <li><i class="fa fa-phone pr-10"></i> 214 960-0094</li>
                  <li><i class="fa fa-fax pr-10"></i>  </li>
                  <li><i class="fa fa-envelope-o pr-10"></i> info@strongtowertutoring.com</li>
                </ul>
                <ul class="social-links">
                  <li class="facebook"><a target="_blank" href="https://www.facebook.com/StrongTowerTutoring"><i class="fa fa-facebook"></i></a></li>
                  <li class="twitter"><a target="_blank" href="https://twitter.com/StrongTowerTutoring"><i class="fa fa-twitter"></i></a></li>
                  <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                  <li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
                  <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                  <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
                  <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="footer-content">
                <form role="form" id="footer-form">
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="name2">Name</label>
                    <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required>
                    <i class="fa fa-user form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="email2">Email address</label>
                    <input type="email" class="form-control" id="email2" placeholder="Enter email" name="email2" required>
                    <i class="fa fa-envelope form-control-feedback"></i>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="sr-only" for="message2">Message</label>
                    <textarea class="form-control" rows="8" id="message2" placeholder="Message" name="message2" required></textarea>
                    <i class="fa fa-pencil form-control-feedback"></i>
                  </div>
                  <input type="submit" value="Send" class="btn btn-default">
                </form>
              </div>
            </div>
          </div>
        </div>



	<h1>Create new user</h1>
        {{ Form::open(['route' => 'users.store']) }}
           <div>
		            {{ Form::label('username', 'Username: ') }}
         	      {{ Form::text('username') }}
       		      {{ $errors->first('username') }}
           </div>
           <div>
                {{ Form::label('email', 'Email: ') }}
                {{ Form::email('email') }}
                {{ $errors->first('email') }}
           </div>
           <div>
                {{ Form::label('password', 'Password: ') }}
                {{ Form::password('password') }}
		            {{ $errors->first('password') }}
           </div>
          <div>
               {{ Form::submit('Create'); }}
 	  </div>

	{{ Form::close() }}
@stop
