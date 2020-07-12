<div id="login-wrapper" class="row">
    <div class="col-7">
        <h1 class="text-white"><b>Hello Hackers!</b></h1>
        <p class="text-white">
            Qiita風は、テックピットマーケットより発売されている、Qiita風記事投稿サービスの教材です。<br>
            Qitaっぽいサイトを作ってスキルアップしましょう！ ;)<br>
            コードを書いていて気づいたこと・学んだことはバンバンシェアしてください！
        </p>
    </div>
    <div class="col-5">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <table>
                <tr>
                    <th>ユーザ名</th>
                    <td><input type="text" class="form-control" placeholder="Qiita風" size="50" value="{{ old('username') }}" name="username" required autofocus></td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td><input type="email" class="form-control" placeholder="qiitafuu@giitafuu.com" size="50" name="email" required></td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td><input type="password" class="form-control" size="50" name="password" required></td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="ログイン" class="form-control"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
