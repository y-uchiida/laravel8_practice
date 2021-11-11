# laravel8 practice
Laravel 8の入門演習などにご活用いただけるサンプルコード集です。  
ソースコードに日本語のコメントをつけており、理解を助けます。  
また、doc ディレクトリにLaravel 8の仕様や実装内容をまとめたmdファイルを作成する予定です。  
自習の際や、研修内容を作成する際の雛形として活用いただけます。

## 1. Routing_and_Controller
Laravelの基本的なルーティング設定と、コントローラーの利用方法についてサンプルコードを作成しました。  
Requestクラス、Presponseクラスの簡単な利用例に加え、Viewファイルの呼び出し方も少し触れています。

## 2. view_and_blade
LaravelでのviewファイルとBladeテンプレートの基本的な利用方法についサンプルコードを作成しました。  
ごく簡単なものですが、サービスプロバイダを経由して処理を分割するビューコンポーザのサンプルもあります。  
Laravel 8 で追加されたBladeコンポーネントについては、追ってコードを追加するかもしれません。

## 3. middleware_validation_facades
バリデーションとCookieを例に、ミドルウェアやファサードのサンプルコードを紹介します。  
また、バリデーションの例では、ミドルウェアのほかにFormRequest クラスを利用した方法も扱います。

## 4. db migration, seeding, query builder
Eloquent を利用したデータベース操作の前に、Laravelでのマイグレーションとシーディングを用いたデータベース管理、  
およびDB ファサードからのクエリビルダを利用したレコード操作のサンプルコードを作成しました。  
お手元のMySQLなどでデータベースを作成して、動作を確認してください。  
任意の名前でデータベースを作成し、`.env`ファイルに設定を行った後、`php artisan migrate && php artisan db:seed` を実行してください。

## 5. model and relation
Laravelのモデルの機能を使って、効率的にデータベース操作を行うための入門となるサンプルコードを作成しました、
お手元のMySQLなどでデータベースを作成して、動作を確認してください。  
任意の名前でデータベースを作成し、`.env`ファイルに設定を行った後、`php artisan migrate && php artisan db:seed` を実行してください。

## 6. auth(laravel/Breeze)
Laravel 8 で追加されたBreezeを使ったログイン機能の実装例を作成しました。  
うまく動作していない場合は、コンポーネントの不足やバージョン不整合の可能性があります。  
エラーメッセージで検索をかけてみるなどしてみてください。  
また、composerとnpmのインストール処理で解消される場合もあると思いますので、試してみてください。
```
$ composer require laravel/breeze:^1 --dev
$ php artisan breeze:install
$ npm install && npm run dev
```

## School Database
モデルのリレーションを使う実装例として、教師、学生、ホームルーム、講義 の4つののモデルを関連させる例を実装しました。  
もともとLaravel v6で作成していたもののため、フロントエンドにBootstrapを採用しています。  
Larvel 8ではTailwindの方が標準採用されているので、Viewの作り方はあまり参考にならないかもしれません。  
また、実装をシンプルにするため、Eager ロードなども行っていません。  
モデルのリレーションの実装例として、ご利用いただくことを想定しています。
