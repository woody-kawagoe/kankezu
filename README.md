ツイート関係図 
====

Twitterのアカウント同士の関係図が見れるWebアプリ，
にする予定です．　

## 概要

APP/kankezu/addから自分のIDと相手のIDと相手に対する印象を入力， 　
するとAPP/kankezu/status/(自分のID)からお互いの印象をまとめた表を表示する．　　

### 表示される表のカラム

自分のID|相手のID|(相手に対する印象)|(相手が自分に対して思ってる印象)

## 進捗

データベースの表の表示(view)，編集(edit)，追加(add)，削除機能(delete)を
bakeによって生成．
そこにstatusメソッドの追加を検討中．

いずれはTwitterAPIを利用して，
Twitterアカウントを利用してログイン出来るようにしたい．　
 
