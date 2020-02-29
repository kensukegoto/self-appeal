# npm install時にエラーメッセージ

解決

## 原因

catalinaにOSアップデートした影響。node-gypを上手く動かせない。xcodeのコマンドラインツールをxcode同梱のものにする必要がある。

## 対処

node-gypをグローバルインストール後、[macOS 10.15 Catalinaをクリーンインストール後のnode-gypインストール](https://qiita.com/UTA6966/items/6f8b1fd21c2dc9591488)を参考にxcodeのコマンドラインツールを切り替える。

# gulpfileなどをsettingディレクトリにまとめられない

未解決

## 原因

core.jsが変換したいjsのディレクトリより上に無いとbabelが上手く動かない？
webpackのincludeの正規表現で絶対パスを使わないといけない（相対パスだとbabelが変換してくれない）

## 対処

settingに諸所のファイルをまとめる。その中のnode_modulesをシンボリックリンクで__devに置く。webpackではpathモジュールを使いscript/までを絶対パスで指定する。
