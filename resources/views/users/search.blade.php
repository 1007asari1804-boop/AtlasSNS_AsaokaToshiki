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
      <td>{{ $user->icon_image }}</td>
      <td>{{ $user->username }}</td>
      <!-- <td>フォローボタン</td> -->
    </tr>
  </table>
</div>
</x-login-layout>
