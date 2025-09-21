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
    <div class="login-button btn btn-danger">
    {{ Form::submit('ログイン') }}
    </div>

    <p><a href="register">新規ユーザーの方はこちら</a></p>

    {!! Form::close() !!}
  </div>


</x-logout-layout>
