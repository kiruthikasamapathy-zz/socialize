<?php
/**
 * @package   Socialize Template
 * @copyright JomSocial, Copyright (C) 2015 All rights reserved.
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('top-header')) : ?>
<!-- TOP-HEADER -->
<nav class="navbar navbar-default navbar-fixed-top t3-community-toolbar" id="t3-community-toolbar" role="navigation">
	<jdoc:include type="modules" name="<?php $this->_p('top-header') ?>" />
</nav>
<!-- //TOP-HEADER -->
<?php endif ?>
