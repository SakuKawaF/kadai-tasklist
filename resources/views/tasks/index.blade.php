@extends('layouts.app')
    

@section('content')
    @if (Auth::check())
    
 
        @if (isset($tasks))
            <table class="table table-zebra w-full my-4">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ステータス</th>
                        <th>タスク</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td><a class="link link-hover text-info" href="{{ route('tasks.show', $task->id) }}">{{ $task->id }}</a></td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('tasks.create') }}">新規タスクの投稿</a>
        
        
        @endif
    
    @endif
    
@endsection