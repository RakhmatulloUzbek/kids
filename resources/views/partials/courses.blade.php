@extends('layouts.fontbase')

@section('title','Annoucements')

@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <h1>Annoucements</h1>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span class="fa fa-angle-double-right"></span>
                <span class="current">Annoucements</span>
            </div>
        </div>
    </div>


    <div class="container">

        <section id="primary" class="content-full-width">
        @foreach($notices as $notice)
                <div class="column dt-sc-one-third first">
                    <div class="dt-sc-ico-content type3">
                        <div class="icon">
                            <span class="fa fa-bell"> </span>
                        </div>
                        <h4><a href="#" target="_blank"> Notice </a></h4>
                        <p>{!! $notice->notice !!}</p>
                    </div>
                </div>
            @endforeach
        
            <div class="dt-sc-hr"></div>

        </section>

    </div>

    </div>
@endsection

@section('foot')

@endsection
