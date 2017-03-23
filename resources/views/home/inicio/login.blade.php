
@extends('layouts.home')
@section('content')
<style>


html, body {
  width: 100%;
  height: 100%;
}

/* Responsive Full Background Image Using CSS
 * Tutorial URL: http://sixrevisions.com/css/responsive-background-image/
*/
body {
  /* Location of the image */
  background-image: url(http://cdn.sixrevisions.com/0431-01_responsive_background_image_demo/images/background-photo.jpg);
  
  /* Image is centered vertically and horizontally at all times */
  background-position: center center;
  
  /* Image doesn't repeat */
  background-repeat: no-repeat;
  
  /* Makes the image fixed in the viewport so that it doesn't move when 
     the content height is greater than the image height */
  background-attachment: fixed;
  
  /* This is what makes the background image rescale based on its container's size */
  background-size: cover;
  
  /* Pick a solid background color that will be displayed while the background image is loading */
  background-color:#464646;
  
  /* SHORTHAND CSS NOTATION
   * background: url(background-photo.jpg) center center cover no-repeat fixed;
   */
}

    #particles {
      width: 100%;
      height: 100%;
      overflow: hidden;
      position: absolute;
    }


.login2
{
	top: 20%;;
}
</style>
<div class="row login hide-on-med-and-up">
    <div class="col s12">
        <div class="card-panel z-depth-3">
        <div class="row">
        <div class="col s12">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><i class="fa fa-key" aria-hidden="true"></i> Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button style="width:100%;" type="submit" class="btn btn-large blue waves-effect waves-light">
                                ENTRAR <i class="fa fa-sign-in fa-3x"></i>
                                </button>

                               <!-- <a class="btn waves-effect waves-light btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
        </div>
        </div>
        </div>
    </div>
</div>

<div class="row login hide-on-small-only login2">
    <div class="col s6 offset-s3">
        <div class="card-panel z-depth-3">
        <div class="row">
        <div class="col s12">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><i class="fa fa-key" aria-hidden="true"></i> Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       <!-- <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn blue waves-effect waves-light">
                                    Entrar <i class="fa fa-sign-in fa-2x"></i>
                                </button>

                               <!-- <a class="btn waves-effect waves-light btn-link" href="{{ url('/password/reset') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
        </div>
        </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    particleground(document.getElementById('particles'), {
    dotColor: '#fff',
    lineColor: '#fff'
    });
});
</script>
@endsection