<x-login-layout>

<div class="top-container">
  <img src="images/icon1.png">
  {{ Form::open(['url' => '/posts/create']) }}
  <div>
    {{ Form::input('text', 'post', null, ['placeholder' => '投稿内容を入力してください。']) }}
  </div>
  <!-- <input type="text" name="post" placeholder="投稿内容を入力してください。"> -->
  <button class="post-button" type='submit'><img src="images/post.png"></button>
  {{ Form::close() }}
</div>

<div>
  <ul>
    <li class="post-block">
      <figure><img src="https://placehold.jp/50x50.png" alt="Aさん"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">Aさん</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
    </li>
    <li class="post-block">
      <figure><img src="https://placehold.jp/50x50.png" alt="Bさん"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">Bさん</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
    </li>
    <li class="post-block">
      <figure><img src="https://placehold.jp/50x50.png" alt="Cさん"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">Cさん</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
      <a class="js-modal-open" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="{{ asset("images/edit.png") }}" alt="編集"></a>
    </li>
  </ul>
</div>

<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    {{ Form::open(['url' => '/posts/{id}/update']) }}
    {{ Form::textarea('upPost', $post->post, ['class' => 'modal_post']) }}
    {{ Form::hidden('id', $post->id, ['class' => 'modal_id']) }}
    <button type='submit'><img src="{{ asset("images/edit.png") }}"></button>
    {{ Form::close() }}
  </div>
</div>
</x-login-layout>
