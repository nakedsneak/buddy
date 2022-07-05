@extends('layouts.app')

@section('content')
<title>Every Buddy</title>
//イベントバナー　横スクロール

<div class='events'>
    <div class='event'>
    @foreach ($events as $event)
        <h2 vlass="title">
            <a href="/events/{{ $event->id }}"></a>
        </h2>
        <p class='body'>{{ $event->body }}</p>
    @endforeach
    </div>
</div>
<div class='peginate'>
    {{ $event->links() }}
</div>
    
//タイムライン　ゲーム変更
<form action="/~" method="POST">
    @csrf
    <div class='chats'>
        <div class='chat'>
            @foreach ($chats as $chat)
                <p class='body'>{{ $chat->text }}</p>
            @endforeach
        </div>
    </div>
    <textarea name="chat[text]"></textarea>
    <div class="store">
        <input type="submit" value='送信'/>
    </div>
</form>
@endsection
