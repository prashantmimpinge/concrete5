<? defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
	<div id="footer">
			<span class="powered-by"><?=t('Built with ')?> <a href="http://www.concrete5.org"><?=t('concrete5 CMS') ?></a>.</span>
			&copy; <?=date('Y')?> <a href="<?=DIR_REL?>/"><?=SITE?></a>.
			&nbsp;&nbsp;
			<?=t('All rights reserved.')?>
			<?
			$u = new User();
			if ($u->isRegistered()) { ?>
				<span class="sign-in"><?=t('Currently logged in as <b>%s</b>.', $u->getUserName())?> <a href="<?=$this->url('/login', 'logout')?>"><?=t('Sign Out')?></a></span>
			<? } else { ?>
				<span class="sign-in"><a href="<?=$this->url('/login')?>"><?=t('Sign In to Edit this Site')?></a></span>
			<? } ?>
            
	</div>

</div>

<? Loader::element('footer_required'); ?>

</body>
</html>