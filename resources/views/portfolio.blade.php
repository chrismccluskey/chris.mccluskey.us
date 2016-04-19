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

    @foreach ($project_categories as $category)
    <section>
        <h3><a name="{{$category->slug}}">{{$category->title}}</a></h3>
        @foreach ($projects as $project)
            @if ($project->category_id == $category->id)
        <div class="card">
            @if (strlen($project->link) > 0)
            <a href="{{$project->link}}"><h4>{{$project->title}}</h4></a>
            <a href="{{$project->link}}"><img src="{{$project->image_filename}}" /></a>
            @else
            <h4>{{$project->title}}</h4>
            <img src="{{$project->image_filename}}" />
            @endif
            <div class="description">
                <p>{{$project->description}}</p>
            </div>
        </div>
            @endif
        @endforeach
        <a href="#top" class="back-to-top">Back to Top</a>
    </section>
    @endforeach
  </article>
@stop
