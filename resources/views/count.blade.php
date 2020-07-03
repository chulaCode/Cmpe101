@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                <div class="alert alert-info text-dark">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
             @endif
            <div class="card">
                <div class="card-header "><h2>{{ __('Thanks for participating')}}</h2>
                <h4><a href="{{route('postlanding')}}" target="_blank" class="text-dark pull-right " style="margin-top:-35px">Please fill survey</a></h4>
                </div>

                <div class="card-body">
                <div class="mb-4 text-center">
                  <h4> YOUR SCORE FOR PREVIOUS QUIZ IS</h4>
                  <h3 class="my-4">{{$value*10}}/120</h3>
                  <h4>
                     <br><br> <a href="{{route('quiz',$student->id)}}"><button class="btn btn-primary btn-lg">Retake quiz</button></a>
                    
                  </h4>
                </div>
                 
                <!--
                <form action="{{route('entrance2')}}" method="post">
                 @csrf
                  <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Student number') }}</label>

                        <div class="col-md-6">
                            <input id="stdnumber" type="text" class="form-control @error('studentNo') is-invalid @enderror" 
                            name="studentNo" value="{{ old('studentNo') }}" minlength="8" maxlength="8" 
                            required autocomplete="studentNo" placeholder="Enter your student number"autofocus>

                            @error('studentNo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-8 offset-md-4 mt-4">
                            <button type="submit" class="btn btn-dark">
                                {{ __('Login') }}
                            </button>
                        </div>
                 </div>
              </form>-->
            </div>
        </div>
    </div>
  </div>
</div>

<footer id="colorlib-footer" class="mt-5">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
                                <small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | coder <i class="icon-heart" aria-hidden="true"></i> Ochulaobari Emmanuel
              </small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
@endsection