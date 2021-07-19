<?php
/*
Plugin Name: マイプラグイン
Author: riki
*/

// ブロックエディタ用関数
// アクションフック->ブロックエディタ読込時のassetsを定義
add_action('enqueue_block_editor_assets', function() {
    // JSを出力
    wp_enqueue_script(
        // 任意のハンドル名
        'myeditor-script',
        // 第一引数：JSファイルを定義（絶対指定）
        // 第二引数：__FILE__ -> 現在のファイルと同じ場所を定義
        plugins_url('myeditor.js', __FILE__)
    );
});