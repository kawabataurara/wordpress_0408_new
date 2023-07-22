<section class="contact js_fadeIn">
	<div class="content_inner">
		<ul class="tab_group">
			<li class="tab tab_A is-active">お問い合わせはこちら</li>
			<li class="tab tab_B">採用の応募はこちら</li>
		</ul>
	</div>
	<div class="panel_group">
			<div class="panel tab_A is-show">
				<div class="content_inner">
					<ul class="contact_form">
							<li>
								<p class="contact_form__label">お問い合わせ内容</p>
									<p class="contact_form__radio">[mwform_radio name="form-select" children="人材に関するお問い合わせ,WEB制作に関するお問い合わせ,その他"]</p>
							</li>
							<li class="contact_form__li">
								<p>会社名</p>
								[mwform_text name="company" size="60"]
							</li>
							<li class="contact_form__li">
								<p class="contact_form__label">氏名/担当者名</p>
								<p class="contact_form__name">[mwform_text name="family-name" size="60"][mwform_text name="given-name" size="60"]</p>
							</li>
							<li class="contact_form__li">
								<p class="contact_form__label">フリガナ</p>
								<p class="contact_form__name">[mwform_text name="family-name-ruby" size="60"][mwform_text name="given-name-ruby" size="60"]</p>
							</li>
							<li class="contact_form__li contact_form__tell">
								<p class="contact_form__label">電話番号</p>
								[mwform_text name="tell" size="60"]
							</li>
							<li class="contact_form__li">
								<p class="contact_form__label">メールアドレス</p>
								[mwform_email name="mail" size="60"]
							</li>
							<li class="contact_form__li, contact_form__textarea">
								<p>お問い合わせ内容</p>
								[mwform_textarea name="contact-text" cols="50" rows="5"]
							</li>
							<li class="contact_form__li, contact_form__privacy">
								<p class="contact_form__label">個人情報の取り扱い</p>
								<ol>
									<li>当社では、ご入力頂きました個人情報に関しては、弊社及び弊社のサービス以外の目的には使用致しません（当社が提携している第三者の会社・回体への開示を含みます。1。 また、お預かりした個人情報の管理を、第三者に委託することはありません。</li>
									<li>情報の提供は任意ですが、当社が必要とする一部の情報をご提供頂けない場合、適切な対応が出来ない場合がありますのでご了承下さい。</li>
								</ol>
								<p class="contact_form__privacy-check">[mwform_checkbox name="privacy" children="個人情報保護方針に同意する" separator=","]</p>
							</li>
					 </ul>
						<p>[mwform_bconfirm class="form-button" value="confirm"]確認画面へ[/mwform_bconfirm]</p>

						<p class="contact_form__submit">[mwform_bsubmit class="form-button" name="submit" value="send"]送信する[/mwform_bsubmit]</p>

						<p class="contact_form__back">[mwform_bback class="form-button" value="back"]戻る[/mwform_bback]</p>
				</div>
			</div>
			<div class="panel tab_B">
			</div>
		</div>
</section>
