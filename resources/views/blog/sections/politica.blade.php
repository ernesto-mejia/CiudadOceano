
@extends('master')




@section('content')
    @foreach ($politicas as $politic)
        <div class="row w-100 h-100  justify-content-center align-content-center m-0">
            <div class="col-10">

                <h1 class="text-justify p-3" style="color: #fff;">{!! html_entity_decode($politic->description, ENT_QUOTES | ENT_XML1, 'UTF-8') !!}</h1>

            </div>
        </div>
    @endforeach
@endsection

@section('scripts')
@endsection
