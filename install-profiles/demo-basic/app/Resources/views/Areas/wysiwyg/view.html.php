<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */
?>


<?php
    // add autogenerated meta description
    $this->headMeta()->setDescription($this->wysiwyg("content")->getData(), 160);
?>

<section class="area-wysiwyg">

    <?php $this->glossary()->start(); ?>
        <?= $this->wysiwyg("content"); ?>
    <?php $this->glossary()->stop(); ?>

</section>