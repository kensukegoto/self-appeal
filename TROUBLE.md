# npm install時にエラーメッセージ

## 原因

catalinaにOSアップデートした影響。node-gypを上手く動かせない。xcodeのコマンドラインツールをxcode同梱のものにする必要がある。

## 対処

node-gypをグローバルインストール後、[macOS 10.15 Catalinaをクリーンインストール後のnode-gypインストール](https://qiita.com/UTA6966/items/6f8b1fd21c2dc9591488)を参考にxcodeのコマンドラインツールを切り替える。

# gulpfileなどをsettingディレクトリにまとめられない

## 原因

core.jsが変換したいjsの同ディレクトリより上に無いとbabelが上手く動かない。

## 対処

対処方法が浮かば無いためsettingディレクトリにまとめる事を見送る