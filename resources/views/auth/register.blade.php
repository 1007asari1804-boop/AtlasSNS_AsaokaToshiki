<x-logout-layout>
    <!-- 適切なURLを入力してください -->
{!! Form::open(['url' => '/register']) !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}
@error('username')
<span>{{ $error }}</span>
@enderror

{{ Form::label('メールアドレス') }}
{{ Form::email('email',null,['class' => 'input']) }}
@error('email')
<span>{{ $error }}</span>
@enderror

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}
@error('password')
<span>{{ $error }}</span>
@enderror

{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input']) }}
@error('password_confirmation')
<span>{{ $error }}</span>
@enderror

{{ Form::submit('登録') }}

<p><a href="login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


</x-logout-layout>
