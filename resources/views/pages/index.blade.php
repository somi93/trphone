@extends('layout/layout')

@section('content')
    <div class="col-sm-2 sidenav">
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
        <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-5 text-left">
        <h2>Horizontal List</h2>
        <ul class="horizontal-list">
            <li>
                <img src="{{ asset('images/gallery/ferrari.jpg') }}" />
                <p>Ferrari</p>
            </li><li>
                <img src="{{ asset('images/gallery/opel.jpg') }}" />
                <p>Opel</p>
            </li><li>
                <img src="{{ asset('images/gallery/nissan.jpg') }}" />
                <p>Nissan</p>
            </li><li>
                <img src="{{ asset('images/gallery/bentley.jpg') }}" />
                <p>Bentley</p>
            </li><li>
                <img src="{{ asset('images/gallery/ferrari.jpg') }}" />
                <p>Jaguar</p>
            </li>
        </ul>
    </div>
    <div class="col-sm-5">
        <h2>Slider List</h2>
        <div class="slider">
            <div class="slider-main-image">
                <img src="{{ asset('images/gallery/bentley.jpg') }}" />
                <div class="slider-main-opacity"></div>
                <div class="slider-main-description"><span>Bentley</span></div>
            </div>
            <ul class="slider-list">
                <li class="slider-list-single" data-description="Ferrari">
                    <img src="{{ asset('images/gallery/ferrari.jpg') }}" />
                </li>
                <li class="slider-list-single" data-description="Jaguar">
                    <img src="{{ asset('images/gallery/jaguar.jpg') }}" />
                </li>
                <li class="slider-list-single" data-description="Nissan">
                    <img src="{{ asset('images/gallery/nissan.jpg') }}" />
                </li>
                <li class="slider-list-single" data-description="Opel">
                    <img src="{{ asset('images/gallery/opel.jpg') }}" />
                </li>
            </ul>
        </div>
    </div>
@endsection