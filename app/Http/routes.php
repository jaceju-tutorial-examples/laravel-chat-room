<?php
get('/', 'ChatController@index'); // 聊天室頁面
post('send-message', 'ChatController@sendMessage'); // 發送訊息
