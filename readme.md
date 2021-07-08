# 職員ログインフォーム（り災証明発行支援システム「あぐしす」）

## a.概要
- 農業用り災証明申請・発行支援システムの機能の一部
- 職員がPCにて操作するページの入口
- 担当者ログイン画面はstaff_login.php → り災申請データ閲覧・編集画面へ（未接続）
- 管理者ログイン画面はadmin_login.php → 担当者権限＋アカウント新規登録・編集が可能

## b.工夫した点、こだわりポイント
- エラーページの外見を揃えた。
- divのはみ出し部分のスクロールバー表示を試してみた。
- 文字の読みやすさを重視し、画面遷移や操作がスムーズになるよう試行錯誤中。

## c.苦戦した点、もう少し実装したかった...
- 管理者が誰もいなくなる設定ができてしまうので、対策を考えたい。
- よく考えたら担当者画面はレスポンシブ対応が必要でした。。（モバイル併用予定）

## d.感想
- ロゴを作ってみたら「私のプロダクト」感が出て愛着がわき、必ず完成させたいという思いが強まりました。あえてよくあるレトロな雰囲気の色やデザインにしたのに不思議。
- 講義と同じコードを書いたはずでもエラーが出るので、エラーが出ない時の方が「どうした？」ってなります。ひとまず演算子についてもっとちゃんと理解したい。（phpマニュアル難しい。。）
- セッションをうまく使えるようになりたい。研究不足です。
- エラーの表示方法について、ページとアラートどちらがよいのかで迷っています。
- ファイルも増え複雑になってきたので全体像を整理したいと思います。デプロイも試してみたいけれど、どのタイミングですればいいのかよくわからず。。悩むよりDOですね。やってみよう。