<x-logout-layout>

  <!-- 適切なURLを入力してください -->
  <div class="login-form">
    {!! Form::open(['url' => '/login']) !!}

    <p class="welcome">AtlasSNSへようこそ</p>

    <div class="column">
      {{ Form::label('メールアドレス') }}
      {{ Form::text('email',null,['class' => 'input']) }}
    </div>
    <div class="column">
      {{ Form::label('パスワード') }}
      {{ Form::password('password',['class' => 'input']) }}
    </div>
    <div class="column">
    {{ Form::submit('ログイン', ['class' => 'btn btn-danger', 'style' => 'margin-left: auto']) }}
    <a href="register">新規ユーザーの方はこちら</a>
    </div>

    {!! Form::close() !!}
  </div>


</x-logout-layout>
