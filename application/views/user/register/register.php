<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container">
	<div class="row">
		<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if (isset($error)) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= $error ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="col-md-12">
			<div class="page-header">
				<h1>Kayıt Ol</h1>
			</div>
			<?= form_open() ?>
				<div class="input-field">
					<label for="username">Kullanıcı Adınız</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="En az 4 Karakter sadece harf veya sayı geçerli">
				</div>
				<div class="input-field">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Geçerli bir e-mail adresi">
				</div>
				<div class="input-field">
					<label for="password">Şifre</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="En az 6 karakter">
				</div>
				<div class="input-field">
					<label for="password_confirm">Şifre Onayı</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Şifreler Eşleşmeli">
				</div>
				<div class="input-field">
					<input type="submit" class="btn btn-default" value="Kayıt Ol">
				</div>
			</form>
		</div>
	</div><!-- .row -->
</div><!-- .container -->