@extends('layouts.app')
<script src="{{ asset('js/game.js') }}" defer></script>
@section('content')
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header "><h2>{{ __('Score Board') }}</h2>
                   <a href="{{route('postland')}}"><span class="pull-right text-dark" style="margin-top:-2rem; cursor:pointer;">fill survey</span></a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                          @foreach($result as $results)
                            <tr>
                            <th > {{$results->name}}</th>
                            <td> {{$results->score}}</td>
                            </tr>
                          @endforeach
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
