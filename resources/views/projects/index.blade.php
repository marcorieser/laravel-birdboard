@extends('layouts.app')

@section('content')
    <header class="flex items-end justify-between mb-3 py-3">
        <h2 class="text-grey font-normal text-sm">My Projects</h2>
        <a href="/projects/create" class="button">New Project</a>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="card" style="height: 200px;">
                    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 border-blue-light pl-4 mb-3">
                        <a href="{{$project->path()}}" class="text-black no-underline">{{$project->title}}</a>
                    </h3>
                    <div class="text-grey">{{str_limit($project->description, 100)}}</div>
                </div>
            </div>
        @empty
            <div>No projects yet.</div>
        @endforelse
    </main>
@endsection
