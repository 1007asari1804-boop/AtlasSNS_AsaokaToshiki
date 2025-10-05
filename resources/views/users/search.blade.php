<x-login-layout>

<div class="search-container">
  <form action="/search" method="post">
    @csrf
    <input type="text" name="keyword" class="form" placeholder="ユーザー名">
    <button class="search-button" type="submit"><img src="images/search.png"></button>
  </form>
</div>

</x-login-layout>
