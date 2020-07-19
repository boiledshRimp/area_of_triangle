# 三角形の面積をPHPで求める。

PHPの備忘録を兼ねて。

# Features

入力用と出力用でファイルを分けて、入力用ファイルで入力した値をパラメータで出力側に渡し、
送られてきた値をmb_convert_kana()の第二引数をnにして強制的に半角数字にした上で計算。

>$bottom = mb_convert_kana($_REQUEST['bottom'],'n');
>$height = mb_convert_kana($_REQUEST['height'],'n');

その後if文と正規表現で判定、底辺高さ共に値が数字ならtrue。
