@extends('layouts.storage')

@section('title', 'test title')

@section('content')
    <div>
        Total: {{ $files->count() }};
    </div>
    @forelse ($files as $file)
        <div class="@if ($loop->first) first @endif">
            <div class="card @if ($loop->last) last @endif">
                <div class="card-body">
                    <img class="img-fluid" src="https://picsum.photos/600/400?v{{ rand() }}" />
                    <h5 class="my-2">{{ $file['filename'] }}</h5>
                    <div>
                        {{ $file['created_at'] }}
                        {{ $file['size'] }}
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div>
            nera irasu
        </div>
    @endforelse
@endsection
