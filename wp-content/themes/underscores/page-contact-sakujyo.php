<section class="contact">
	<div class="">
		<button></button>
		<button></button>
	</div>
	<ul class="contact-form">
		<li>
			<p class="contact-form-label">お問い合わせ内容</p>
				<p>[mwform_radio name="form-select" children="人材に関するお問い合わせ,WEB制作に関するお問い合わせ,その他"]</p>
		</li>
		<li>
			<p>会社名</p>
			<p>[mwform_text name="company" size="60"]</p>
		</li>
		<li>
			<p class="contact-form-label">氏名/担当者名</p>
			<p>[mwform_text name="family-name" size="60"][mwform_text name="given-name" size="60"]</p>
		</li>
		<li>
			<p class="contact-form-label">フリガナ</p>
			<p>[mwform_text name="ruby" size="60"]</p>
		</li>
		<li>
			<p class="contact-form-label">電話番号</p>
			<p>[mwform_tel name="tell"]</p>
		</li>
		<li>
			<p class="contact-form-label">メールアドレス</p>
			<p>[mwform_email name="mail" size="60"]</p>
		</li>
		<li>
			<p class="contact-form-label">お問い合わせ内容</p>
			<p>[mwform_textarea name="contact-text" cols="50" rows="5"]</p>
		</li>
		<li>
			<p class="contact-form-label">個人情報の取り扱い</p>
			<p>
				<span>1.当社では、ご入力頂きました個人情報に関しては、弊社及び弊社のサービス以外の目的には使用致しません</span>
				<span>（当社が提携している第三者の会社・回体への開示を含みます。1。 また、お預かりした個人情報の管理を、第三者に委託することはありません。2.情報の提供は任意ですが、当社が必要とする一部の情報をご提供頂けない場合、適切な対応が出来ない場合がありますのでご了承下さい。</span>
			</p>
		</li>
			[mwform_checkbox name="privacy" children="個人情報保護方針に同意する" separator=","]
			[mwform_bconfirm value="confirm"]確認画面へ[/mwform_bconfirm]

			[mwform_bsubmit name="submit" value="send"]送信する[/mwform_bsubmit]

			[mwform_bback value="back"]戻る[/mwform_bback]
	</ul>
</section>
