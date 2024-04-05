@extends('layouts.app')
@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="row">
                @foreach ( $getRecord as $value )
                <div class="col-md-12 col-xl-4 col-sm-12 d-flex">
                    <div class="blog grid-blog flex-fill">
      <div class="blog-content">
                            <ul class="entry-meta meta-item">
                                <li>
                     <div class="post-author">
                                        <span>
   <h2 class="post-title">{{ $value->title }}</h2>
    <span style="font-size: 20px" class="post-date"><i class="far fa-clock"></i>  {{ $value->publish_date }}</span>
                                        </span>
                                    </div>
                                </li>
                            </ul>

                            <span style="font-size: 20px">
                                {!! $value->message !!}
                            </span>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
