@extends('layouts.resume_layout')

@section('title', $resume->name)


@section('content')

	<h1>{{ $resume->name }}</h1> <hr>

   	@foreach($resume->sections as $section)

		<h2>{{ $section->title }}</h2>

		@foreach($section->jobs as $job) 
			<p>
				<strong>{{ $job->company }} | {{ $job->role }}</strong>
				<span class="pull-right">{{ $job->start_date }} to {{$job->end_date}}</span>
			</p>
			<p>{{ $job->content }}</p>

		@endforeach

   	@endforeach

@endsection