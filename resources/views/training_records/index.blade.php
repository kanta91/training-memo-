@extends('layouts.app')
    
@section('content')
    <h1>トレーニング記録一覧</h1>

    @if($records->isEmpty())
        <p>記録はまだありません。</p>
    @else
        <ul>
            @foreach($records as $record)
                <li>
                    {{$record->id}}：{{$record->title ?? 'タイトル未設定'}}
                </li>
                @endforeach
        </ul>
    @endif
@endsection

