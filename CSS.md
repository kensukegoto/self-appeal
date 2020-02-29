# 命名規則

FLOCSSを採用

※適宜ルールを追加・変更

参考

- [[CSS設計] 私のためのFLOCSSまとめ](https://qiita.com/super-mana-chan/items/644c6827be954c8db2c0)

# FLOCSS構成要素

## foundation

mixinや変数、リセットCSSなど

## layout

ヘッダーやフッターなど大きなくくりの上下左右余白を調整

- l-heade
- l-main
- l-container ... l-mainの中の入れ子になる
- l-footer

## component

文字、ボタン、画像など、例えばカードモジュール内の各パーツ

## project

componentを組み合わせたもの。カードホバー時のcomponentの文字色などはここで変更

## utility

マージンや色など。カードを並べた際のカード間のマージンなど