<x-login-layout>

<div class="search-container">
  <form action="/search" method="post">
    @csrf
    <input type="text" name="keyword" class="form" placeholder="ユーザー名">
    <button class="search-button" type="submit"><img src="images/search.png"></button>
  </form>
</div>

<div>
  <table>
    @foreach ($users as $user)
    <tr>
      <td><img src="{{ asset('images/' . $user->icon_image) }}" width="50"></td>
      <td>{{ $user->username }}</td>
      <!-- <td>フォローボタン</td> -->
    </tr>
    @endforeach
  </table>
</div>
</x-login-layout>
