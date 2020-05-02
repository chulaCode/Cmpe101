
@extends('layouts.app')
<script src="{{ asset('js/game.js') }}" defer></script>
@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><h2>{{ __('Score submission') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{route('post.score',app('request')->input('point'))}}">
                        @csrf
                        <div class="form-group row">
                            <label for="stdno" class="col-md-4 col-form-label text-md-right">{{ __('Student Number') }}</label>

                            <div class="col-md-6">
                                <input id="stdno" type="number" class="form-control @error('stdno') is-invalid @enderror" name="stdno" 
                                 required autocomplete="stdno" placeholder="please enter student Number" autofocus>

                                @error('stdno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                 required autocomplete="name"placeholder="please enter student name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="score" class="col-md-4 col-form-label text-md-right">{{ __('score') }}</label>

                            <div class="col-md-6">
                                <input id="score" type="text" class="form-control @error('score') is-invalid @enderror" name="score" 
                                value="{{app('request')->input('point') }}" disabled>

                                @error('score')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Submit score') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
