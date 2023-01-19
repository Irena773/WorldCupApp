


# WorldCupDataを検索できるアプリケーション


## 使い方

1. Dockerをインストールする


    https://docs.docker.com/get-docker/

2. Laravelのローカルサーバを起動する
````
cd src/laravelapp
php artisan serve
````
3. Dockerを起動する
````
docker-compose build --no-chache
docker-compose up -d
````

4. Vue Dev Serverを起動する
````
cd src/laravelapp
npm install
npm run hot
````
5. ブラウザでアクセスする
````
localhost:8000/sql/test
````


## 環境

* Docker　20.10.17
* Laravel Framework 8.83.27
* MariaDB 10.10.2
* Vue 3.0.4
* FireFox 

## ディレクトリ

```
.
└── laravelapp
    ├── app
    │   └── Http
    │       └── Controllers
    │           └── WorldCupController.php(sqlの発行)
    ├── resources
    │   ├── js
    │   │   └── worldcup.js(非同期処理)
    │   └── views
    │       └── sql
    │           └── welcome.blade.php(検索画面)
    ├── routes
    │   └── web.php(ルーティングの設定)
    ├── .env
    ├── package.json
    └── webpack.mix.js
```

## 注意事項

* Crhomeだとうまく実行できない場合がある

* データベースにテーブルとデータを流し込むコマンド
````
mysql -u root -p laravel_db < worldcup_data.dump
````

* Unable to locate Mix fileのエラーが出た場合

　　src/laravelapp/Http/Controllers/WorldCupController.phpで指定しているデータベース名・ユーザー名・パスワードが間違っている可能性がある 以下を直してみる
````
$pdo = new PDO('mysql:host=localhost:3306;dbname=laravel_db;', 'root', 'root');
````

* javascriptが更新されない場合

　　キャッシュを削除してビルドすると反映される

````
docker-compose build --no-chache
````

* 新たにjsファイルを追加する場合

　　webpack.mix.jsに追記する

## ライセンス

"WorlCupApp" is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).


## 参考文献


https://qiita.com/neneta0921/items/22f9864b6f6ff6d36004

https://abillyz.com/vclbuff/studies/133

https://teratail.com/questions/347749

https://utubou-tech.com/laravel8-x_error2/

https://aoisora-coffee.com/laravel/unable-to-locate-mix-file

https://migisanblog.com/laravel-vue-install/