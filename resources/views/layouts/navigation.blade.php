        <div id="head">
            <h1><a class="top-page" href="/top"><img src="images/atlas.png"></a></h1>
            <div id="profile">
                <p>{{ session('username') }}さん</p>
                <div class="accordion-menu">
                    <span class="accordion-button"></span>
                    <ul class="accordion-content">
                        <li class="accordion home"><a href="/top">ホーム</a></li>
                        <li class="accordion profile"><a href="/profile">プロフィール</a></li>
                        <li class="accordion logout"><a href="/login">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </div>
