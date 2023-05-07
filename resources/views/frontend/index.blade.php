@extends('frontend.app')
@section('content')
@include('frontend.include.slider')
<main id="main">
    @include('frontend.pages._home-get-started')
    @include('frontend.pages._home-constructions')
    @include('frontend.pages._home-services')
    @include('frontend.pages._home-alt-services')
    @include('frontend.pages._home-features')
    @include('frontend.pages._home-projects')
    @include('frontend.pages._home-testimonials')
    @include('frontend.pages._home-recent')
</main>
@endsection
@section('js')

@endsection

@section('css')
dropdown-item.active{
background-color: #6c757d !Important;
}
}
@endsection