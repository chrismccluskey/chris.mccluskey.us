@extends('layouts.master')

@section('content')
  <article>
    <div class="portfolio masthead"><h2>Portfolio</h2></div>
    <h3><a name="top">Categories</a></h3>

    <ul class="menu">
        @foreach ($project_categories as $category)
            <li><a href="#{{$category->slug}}">{{$category->title}}</a></li>
        @endforeach
    </ul>

    <hr />

    <section>
    @foreach ($project_categories as $category)
      <div class="solid background">
        <h3><a name="{{$category->slug}}">{{$category->title}}</a></h3>
        @foreach ($projects as $project)
            @if ($project->category_id == $category->id)
        <div class="card">
            @if (strlen($project->link) > 0)
            <a href="{{$project->link}}" target="{{$project->title}}"><h4>{{$project->title}}</h4></a>
            <a href="{{$project->link}}" target="{{$project->title}}"><img src="{{$project->image_filename}}" /></a>
            @else
            <h4>{{$project->title}}</h4>
            <div class="cropped image"><img src="{{$project->image_filename}}" /></div>
            @endif
            <div class="description">
                {{$project->description}}
            </div>
        </div>
            @endif
        @endforeach
        <a href="#top" class="back-to-top"><button>&#9650; Back to Top &#9650;</button></a>
      </div>
    @endforeach
    </section>
  </article>
@stop
