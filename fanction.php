/*-------------------------------------------*/
//日付ピッカー　土日設定　土曜・日曜に関しては、適用するかどうかコメントアウト等で調整お願いします。
//※非活性と記述しているところになります
/*-------------------------------------------*/
// 必要に応じてコメントアウトを外す

function custom_date_picker() {
    if(is_page('contact')) {
    ?>
        <script>
            jQuery(function(){
                let holiday = [];
                let currentDate = "";
                jQuery.get('https://holidays-jp.github.io/api/v1/date.json', function(holidaysData) {
                    jQuery(".hasDatepicker").datepicker("option","beforeShowDay",function(date) {

                        // 土曜を非活性
                        if(date.getDay() === 6){
                            return [false, ''];
                        }

                        // 日曜を非活性
                        if(date.getDay() === 0){
                            return [false, ''];
                        }

                        // 祝日を非活性
                        jQuery.each(holidaysData, function(index, value) {
                            holiday.push(index.replace(/-/g,''));
                        })
                        currentDate = date.getFullYear() + ('0'+(date.getMonth()+1)).slice(-2)+('0'+date.getDate()).slice(-2);
                        
                        if( holiday.indexOf(currentDate) !== -1 ) {
                            return [false, ''];
                        }
                        return [true, ''];
                    });
                });
            });
        </script>
<?php
    }
}

add_action('lightning_entry_body_apppend', 'custom_date_picker');

/*-------------------------------------------*/
/* MW WP Form 問い合わせデータ並び替え
/*-------------------------------------------*/
/**
* カラムを並び替える、削除する
*
* @param array $columns カラム名の配列
* @return array
*/
/*function my_mwform_inquiry_data_columns( $columns ) {
// 設定している項目順に表示させる設定です
// 会社名、部署名・役職、お名前という並びに変更
	$columns = array(
'post_date' => '投稿日時',
'post_modified' => '更新日時',
'post_title' => '件名',
'companyname' => '会社名',
'postname' => '部署名・役職',
'username' => 'お名前',
'username_kana' => 'ふりがな',
'email' => 'メールアドレス',
'tel1' => '電話番号',
'zip' => '郵便番号',
'pref' => '都道府県',
'addr' => '市区町村',
'building' => '丁目番地・ビル名',
'check' => 'お問い合わせ項目',
'comment' => 'お問い合わせ内容詳細',
'file' => 'ファイル添付',
'date' => '希望日',
);
return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_2598', 'my_mwform_inquiry_data_columns' );*/


/*-------------------------------------------*/
/* MW WP Form 問い合わせデータ並び替え
/*-------------------------------------------*/
/**
* カラムを並び替える、削除する
*
* @param array $columns カラム名の配列
* @return array
*/
/*function my_mwform_inquiry_data_columns( $columns ) {
// 設定している項目順に表示させる設定です
// 会社名、部署名・役職、お名前という並びに変更
	$columns = array(
'post_date' => '投稿日時',
'post_modified' => '更新日時',
'post_title' => '件名',
'companyname' => '会社名',
'postname' => '部署名・役職',
'username' => 'お名前',
'username_kana' => 'ふりがな',
'email' => 'メールアドレス',
'tel1' => '電話番号',
'zip' => '郵便番号',
'pref' => '都道府県',
'addr' => '市区町村',
'building' => '丁目番地・ビル名',
'check' => 'お問い合わせ項目',
'comment' => 'お問い合わせ内容詳細',
'file' => 'ファイル添付',
'date' => '希望日',
);
return $columns;
}
add_filter( 'mwform_inquiry_data_columns-mwf_2598', 'my_mwform_inquiry_data_columns' );*/
