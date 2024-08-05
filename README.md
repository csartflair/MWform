# MWform再導入用メモ
## プラグイン
- MW WP Form バージョン5.0.6
- reCAPTCHA for MW WP Form　バージョン 1.1.2

## コンテンツ
```
<div id="errorBlock" class="err_block" style="display: none;">
<p class="err_tit">入力内容に誤りがあります。お手数ですが再度ご入力ください。</p>

<div id="errorMessage">[mwform_error keys="companyname"]
[mwform_error keys="postname"]
[mwform_error keys="username"]
[mwform_error keys="username_kana"]
[mwform_error keys="email"]
[mwform_error keys="email2"]
[mwform_error keys="tel"]
[mwform_error keys="zip,pref,addr,building"]
[mwform_error keys="check"]
[mwform_error keys="comment"]
[mwform_error keys="file"]
[mwform_error keys="date"]
[mwform_error keys="time"]</div>
</div>
<div class="contactform">
<table class="contactform-table">
<tbody>
<tr>
<th class="contactform-required">登録状況<span class="contactform-entext">Subject</span></th>
<td class="outer_know">[mwform_radio name="check2" children="会員,非会員" separator="," vertically="true"]</td>
</tr>
<tr>
<th class="contactform-unrequired">会社名<span class="contactform-entext">Company name</span></th>
<td>[mwform_text name="companyname" id="companyname" size="60" placeholder="例：ABC株式会社"]</td>
</tr>
<tr>
<th class="contactform-unrequired">部署名・役職<span class="contactform-entext">Post name</span></th>
<td>[mwform_text name="postname" id="postname" size="60" placeholder="例：総務部"]</td>
</tr>
<tr>
<th class="contactform-required">お名前<span class="contactform-entext">Your name</span></th>
<td>[mwform_text name="username" id="username" size="60" placeholder="例：山田 太郎"]
<p class="contactform-note contactform-preview-hidden">※　ハンドルネーム可能</p>
</td>
</tr>
<tr>
<th class="contactform-unrequired">ふりがな<span class="contactform-entext">Furigana</span></th>
<td>[mwform_text name="username_kana" id="username_kana" size="60" placeholder="例：やまだ たろう"]</td>
</tr>
<tr>
<th class="contactform-required">メールアドレス<span class="contactform-entext">E-mail</span></th>
<td>[mwform_text name="email" id="email" size="60" placeholder="例：yamada@example.com"]
<div class="contactform-preview-hidden">
<p class="contactform-note">※　お問い合わせ内容のお控えを送りいたします。確認のため再度ご入力ください。</p>
<p class="mb-0">[mwform_text name="email2" id="email2" size="60"]</p>

</div></td>
</tr>
<tr>
<th class="contactform-unrequired">電話番号<span class="contactform-entext">Telephone number</span></th>
<td>[mwform_text name="tel" id="tel" size="30"]</td>
</tr>
<tr>
<th class="contactform-required">住所<span class="contactform-entext">Address</span></th>
<td>
<dl class="contactform-addlist">
 	<dt class="contactform-preview-hidden">郵便番号</dt>
 	<dd>[mwform_text name="zip" id="zip" size="7" placeholder="1234567"]</dd>
 	<dt class="contactform-preview-hidden">都道府県</dt>
 	<dd>[mwform_select name="pref" id="pref" class="pref" children=",北海道,青森県,岩手県,宮城県,秋田県,山形県,福島県,茨城県,栃木県,群馬県,埼玉県,千葉県,東京都,神奈川県,新潟県,富山県,石川県,福井県,山梨県,長野県,岐阜県,静岡県,愛知県,三重県,滋賀県,京都府,大阪府,兵庫県,奈良県,和歌山県,鳥取県,島根県,岡山県,広島県,山口県,徳島県,香川県,愛媛県,高知県,福岡県,佐賀県,長崎県,熊本県,大分県,宮崎県,鹿児島県,沖縄県,海外"]</dd>
 	<dt class="contactform-preview-hidden">市区町村</dt>
 	<dd>[mwform_text name="addr" id="addr" placeholder="例：千代田区"]</dd>
 	<dt class="contactform-preview-hidden">丁目番地・ビル名</dt>
 	<dd>[mwform_text name="building" id="building" placeholder="例：1-1-1　ABCビル101号室"]</dd>
</dl>
</td>
</tr>
<tr>
<th class="contactform-unrequired">お問い合わせ項目
（複数選択可能）<span class="contactform-entext">Subject</span></th>
<td class="outer_know">[mwform_checkbox name="check" children="項目1,項目2,項目3,項目4,項目5,項目6,項目7" separator="," vertically="true"]</td>
</tr>
<tr>
<th class="contactform-unrequired">お問い合わせ項目
（複数選択不可・必須）<span class="contactform-entext">Subject</span></th>
<td>[mwform_radio name="check2" children="項目1,項目2,項目3,項目4,項目5,項目6" separator="," vertically="false"]</td>
</tr>
<tr>
<th class="contactform-unrequired">お問い合わせ内容<span class="contactform-entext">Inquiry body</span></th>
<td>[mwform_textarea name="comment" id="comment" class="comment" cols="90" rows="14"]</td>
</tr>
<tr>
<th class="contactform-ununrequired">ファイル添付<span class="contactform-entext">Attachment file</span></th>
<td>[mwform_file name="file" class="contactform-flie"]</td>
</tr>
<tr>
<th class="contactform-ununrequired">希望日（日付ピッカー）<span class="contactform-entext">Date</span></th>
<td>[mwform_datepicker name="date" size="30" placeholder="日付を選択"]</td>
</tr>
<tr>
<th class="contactform-unrequired">希望時間<span class="contactform-entext">Time</span></th>
<td>[mwform_select name="time" children=":時刻を選択,10：00,10：30,11：00,11：30,12：00,12：30,13：00,13：30,・・・" post_raw="true"]</td>
</tr>
</tbody>
</table>
</div>
<div class="block text-center">[mwform_backButton value="戻る" class="btn"][mwform_submitButton name="submit" confirm_value="入力内容を確認する" submit_value="送信する" class="btn"]</div>
<script type="text/javascript">
//電話番号フィールドのtype属性をtelに変更する
window.onload = function() {
 document.getElementById("tel").setAttribute("type","tel");
};
</script>
```

## function.php
```
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
```
```
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

```
↓スノモン用…？
```
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

```

## css
```
/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
 * メールフォーム 
 * ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
.contactform-entext {
    display: block;
    font-size: var(--vk-size-text-xs);
    font-weight: normal;
}
.contactform-table th {
	border: 1px solid var(--vk-color-border-hr);
	font-size: var(--vk-size-text);
	text-align: left;
	position: relative;
	background: #f9f9f9;
	background-clip: padding-box;
	width: 30%;
}
.contactform-table td {
	border: 1px solid var(--vk-color-border-hr);
}
th.contactform-required::after,
th.contactform-unrequired::after {
	display: block;
	position: absolute;
	font-size: 14px;
	font-weight: normal;
	right: 10px;
	top: 50%;
	transform: translateY(-50%);
	padding: 5px 10px;
	line-height: 1;
	border-radius: 3px;
}
th.contactform-required::after {
	content: '必須';
	background: #f55555;
	color: #fff;
}
th.contactform-unrequired::after {
	content: '任意';
	background: #eee;
	color: #888;
}
dl.contactform-addlist {
	margin: 0;
}
dl.contactform-addlist dt:not(:first-child) {
	margin-top: 1em;
}
dl.contactform-addlist dt {
	font-size: var(--vk-size-text-sm);
	color: #333;
	font-weight: normal;
}
span.mwform-file-delete {
	display: inline-block;
	width: 30px;
	height: 30px;
	background: #eee;
	line-height: 30px;
	text-align: center;
	border-radius: 50px;
	font-size: 22px;
	vertical-align: revert;
	margin-left: 3rem;
	transition: .1s;
}
span.mwform-file-delete:hover {
	background: #aaa;
	color: #fff;
}
input[type="file"] {
	font-size: 1rem;
}
select {
	/* セレクトボックスに三角じるし */
	background: #fff url(data:image/gif;base64,R0lGODlhFAAUALMAAP///7a2tv7+/vv7+/b29u7u7uXl5dra2tDQ0MfHx8bGxr+/v7q6ure3t////wAAACH5BAUAAA4ALAAAAAAUABQAAARIEMhJq704680lCmAojiEyLGQaLgNQNCrZFNMRjwclKDeoCBUC48YgXAw3Q+aTQmhOJNbmJZp1bKFcR5DwATsAYRE8MSjJ6HQEADs=) no-repeat calc(100% - 10px);
	background-size: 15px;
	padding-right: 40px !important;
}
p.contactform-note {
	font-size: var(--vk-size-text-sm);
	color: #777;
	margin: 0;
}
/* お問い合わせフォームの調整　タブレット以下 */
@media (max-width:991px) {
	.contactform table,
	.contactform tbody,
	.contactform th,
	.contactform td,
	.contactform tr {
		display: block;
	}
	.contactform th,
	.contactform td {
		width: 100% !important;
	}
	.contactform th {
		border-width: 1px 0 0 0;
	}
	.contactform td {
		border-width: 0;
	}
}
/* フォームの送信ボタン */
input.btn {
	font-family: inherit;
}
input[type=submit] {
	margin-top: 2rem;
	border: none;
}
/* 送信戻るボタン */
input[name=submitBack] {
	background: transparent;
	color: var(--vk-color-primary);
	border: 1px solid var(--vk-color-primary-dark);
	margin-right: 2em;
}
/*バリデーション＆エラー＆確認画面*/
.form-errored input:not([type="submit"]),
.form-errored select,
.form-errored textarea {
	border: solid 1px #f22 !important;
	background: #fbeeee;
}
.mw_wp_form .error::before {
	content: '\f06a';
	font-family: "Font Awesome 6 Free";
	font-weight: 600;
	padding-right: .5em;
}
.mw_wp_form_preview .contactform-preview-hidden {
	display: none;
}


/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
 * MW WP Formカスタマイズ予約フォーム用　
 * ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
.mw_wp_form input[type="email"],
.mw_wp_form input[type="tel"],
.mw_wp_form input[type="text"],
.mw_wp_form textarea {
	padding: 1em;
	font-size: 15px;
	font-family: unset;
}

.mw_wp_form select {
	display: block;
	position: relative;
	width: 80%;
	height: 3.5em;
	font-size: 14px;
	border: 1px solid #ccc;
	border-radius: 4px;
	overflow: hidden;
	padding: 0 10px;
	font-family: unset;
}
.mwform-checkbox-field label,
.mwform-radio-field label {
	cursor: pointer;
}
/*ハイフンなしで入力！ 非表示*/
#autozip {
	display:none !important;
}
/* ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
 * デートピッカー上書きCSS
 * ＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝ */
#ui-datepicker-div {
    font-family: unset;
}
#ui-datepicker-div .ui-datepicker-header {
	background: #eee;
	border: none;
	border-radius: 0;
	padding: 15px 0;
}
#ui-datepicker-div .ui-datepicker-header a,
#ui-datepicker-div .ui-datepicker-header select {
    cursor: pointer;
}
#ui-datepicker-div {
	padding: 0;
}
#ui-datepicker-div select.ui-datepicker-month,
#ui-datepicker-div select.ui-datepicker-year {
	padding: 5px;
	width: 50%;
	margin: 0;
}
#ui-datepicker-div .ui-datepicker-title {
	display: flex;
	align-items: baseline;
	justify-content: space-between;
	font-size: 1rem;
}
#ui-datepicker-div .ui-datepicker-prev,
#ui-datepicker-div .ui-datepicker-next {
	top: calc(50% - 0.9em);
}
#ui-datepicker-div th.ui-datepicker-week-end:last-child {
	color: blue;
}
#ui-datepicker-div th.ui-datepicker-week-end:first-child {
	color: red;
}
#ui-datepicker-div .ui-state-default,
#ui-datepicker-div .ui-widget-content .ui-state-default,
#ui-datepicker-div .ui-widget-header .ui-state-default,
.ui-button {
	border: none;
	background: none;
	text-align: center;
	line-height: 2;
	border-radius: 50px;
	transition: .1s ease-out;
}
#ui-datepicker-div a.ui-state-default.ui-state-active {
	background: var(--vk-color-primary) !important;
	color: #fff;
}
#ui-datepicker-div a.ui-state-default:hover,
#ui-datepicker-div a.ui-state-default:active,
#ui-datepicker-div a.ui-state-default:focus {
	background: #eee;
}
```
```
/* フォーム要素 */
.smf-form input,
.smf-form textarea{
    font-family: unset !important;
}
/* SPメールフォーム拡大対策 */
@media (max-width: 992px) { 
	input, textarea, select {
		font-size:16px !important;
	}
}
.smf-control-description {
    font-size: 0.875rem;
    opacity: 0.8;
}

@media (max-width: 992px) { 
	.smf-item__col.smf-item__col--label {
		margin-bottom:1rem;
	}
}
.device-pc form.snow-monkey-form:not([data-screen="confirm"]) .smf-item__label {
    padding-top: 0.5rem;
}
.smf-item__label__text {
    font-weight: bold;
}
.smf-item__label::after {
    float: right;
/*     margin-right: 1rem; */
    background: #eee;
	color: #777;
    font-size: 0.875rem;
    padding: 3px 9px;
    border-radius: 3px;
}
.is-style-smf-required .smf-item__label::after {
    content: '必須';
    background: #f44;
    color: #fff;
}
.is-style-smf-unrequired .smf-item__label::after {
	content:'任意';
}
/* ラジオ・チェック・セレクト */
.smf-checkbox-control,
.smf-radio-button-control{
    cursor: pointer;
	display: block;
    padding: 0.5em;
	position:relative;
}
input.smf-checkbox-control__control,
input.smf-radio-button-control__control {
    pointer-events: none;
    accent-color: var(--vk-color-primary);
}
.smf-radio-buttons-control--horizontal .smf-radio-buttons-control__control,
.smf-checkboxes-control--horizontal .smf-checkboxes-control__control {
    display: flex;
    flex-wrap: wrap;
    gap: 0.5rem 2rem;
}
span.smf-checkbox-control input:checked+span::before, span.smf-radio-button-control input:checked+span::before {
    background: var(--vk-color-primary);
    opacity: 0.1;
    border-radius: var(--vk-size-radius);
    pointer-events: none;
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
/* 住所 */
.form-address-group {
    gap: 0 1em;
}
input#zip,select#pref {
    min-width: 260px;
}
form.snow-monkey-form[data-screen="confirm"] .smf-addressbox .wp-block-group__inner-container{
    display: flex !important;
    flex-direction: row !important;
    gap: 1em;
}
form.snow-monkey-form[data-screen="confirm"] .smf-addressbox .wp-block-group__inner-container *:first-child{
    min-width:120px;
}
/* ファイル */
input.smf-file-control__control {
    display: none;
}
span.smf-file-control__label {
    border: solid 1px var(--vk-color-primary);
    border-radius: var(--vk-size-radius);
    color: var(--vk-color-primary);
    font-size: 0.875em;
    padding: 0.3em 0.8em;
    margin-right: 0.5rem;
    cursor: pointer;
}
span.smf-file-control__clear {
    opacity: 0.4;
    font-size: 0.8em;
    border: solid 1px;
    padding: 0.1em 0.4em;
    margin-left: 2rem;
    cursor: pointer;
}
.smf-file-control.smf-file-control--set span.smf-file-control__filename--no-file {
    display: none; /* ファイルがセットされているとき「選択されていません」を表示しない */
}
.smf-file-control:not(.smf-file-control--set) span.smf-file-control__filename--has-file {
    display: none; /* ファイルがセットされていないとき「ファイル名」を表示しない */
}
/* 同意 */
.smf-form--simple-table .wp-block-snow-monkey-forms-item.smf-agreement {
    border: none;
    padding: 1rem 0;
}
.smf-agreement span.smf-checkbox-control {
    width: fit-content;
    margin: auto;
}
.smf-agreement span.smf-checkbox-control input:checked+span::before{
    content:none;
}
form.snow-monkey-form[data-screen="confirm"] .smf-agreement {
    display: none;
}

.smf-form {
    margin-bottom:var(--vk-margin-block-bottom);
}
.smf-button-control button[type="submit"] {
    font-size: 1rem;
    background-color: var(--vk-color-primary);
    border-radius: var(--vk-size-radius);
    color: #fff;
    padding: 0.5em 2em;
    min-height: 50px;
}
.smf-button-control button[type="submit"]:hover {
    background-color: var(--vk-color-primary-dark);
}
.smf-button-control button[data-action="back"],
.smf-button-control button[data-action="back"]:hover{
    border: solid 1px var(--vk-color-primary);
    color: var(--vk-color-primary);
    background: #fff;
}
.smf-button-control button[data-action="back"]:hover {
    filter: brightness(0.9) grayscale(1);
    border-color: transparent;
}
/* スタイル：テーブル */
.smf-form--simple-table .wp-block-snow-monkey-forms-item {
    border-bottom: solid 1px #ddd;
    padding: 1rem 1rem;
    gap:1rem;
}
/* スタイル：レター */
.smf-form--letter .wp-block-snow-monkey-forms-item {
    display: flex;
    gap: 1rem;
    flex-direction: column;
    padding: 0 0 2rem;
}
/* 入力不備 */
.smf-form .smf-item [data-invalid="1"]{
    border-color: #ff4444;
    border-width:3px;
}
.smf-error-messages {
    font-weight: bold;
    position: relative;
    color:#ff4444;
}
.smf-error-messages::before {
    content: '\f06a';
    font-family: 'Font Awesome 5 Free';
    font-weight: 600;
    padding-right: 0.5em;
}
/*完了画面*/
.smf-complete-content p.has-background {
  padding: 0.25rem 1rem;
}
```
