@extends('layouts.app')

@section('content')
<div id="detail">
    <div class="bar-light-blue">
        <div class="container-small">
            <div class="cover">
                <span class="comic-book">{{ $single_comic['type']}}</span>
                <img src="{{$single_comic['thumb']}}" alt="cover">
                <span class="gallery">view gallery</span>
            </div>
        </div>
    </div>
    <div class="container-small">
        <div class="row my-5">
            <div class="col-8">
                <h2><strong>{{ $single_comic['title'] }}</strong></h2>
                <div class="d-flex bg-green">
                    <div class="col-9">
                        <div class="col-auto">
                            <span><strong>U.S. Price: </strong>{{ $single_comic['price']}}</span>
                        </div>
                        <div class="col-auto">
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    <div class="col-3">
                        <span>CHECK</span>
                    </div>
                </div>
                <p>{{$single_comic['description']}}</p>
            </div>
            <div class="col-4 adv">
                <span>ADVERTISEMENT</span>
                <div>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv">
                </div>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr><th colspan="2"><h2>Talent</h2></th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="caption"><strong>Art by:</strong></td>
                        <td><a href="#">{{ $single_comic['artists'] }}</a></td>
                      </tr>
                      <tr>
                        <td class="caption"><strong>Written by:</strong></td>
                        <td><a href="#">{{ $single_comic['writers'] }}</a></td>
                      </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-6">
                <table class="table">
                    <thead>
                      <tr><th colspan="2"><h2>Specs</h2></th></tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="caption"><strong>Series:</strong></td>
                        <td><a href="#">{{$single_comic['series']}}</a></td>
                      </tr>
                      <tr>
                        <td class="caption"><strong>U.S. Price:</strong></td>
                        <td>{{$single_comic['price']}}</td>
                      </tr>
                      <tr>
                        <td class="caption"><strong>On Sale Date:</strong></td>
                        <td>{{$single_comic['sale_date']}}</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection