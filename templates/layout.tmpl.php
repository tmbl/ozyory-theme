<?php _X ('common-pre') ?>

<div class="common">



<div class="flag">
  <?php _X ('header-pre') ?>

  <div class="header-content">

    <div class="header-description">

      <div class="title">

        <div class="title-inner">

          <div class="logo-marginal">
            <?php _T ('user-picture') ?>
          </div>

          <div class="logo">
            <?php _T ('user-picture') ?>
          </div>

          <h1>
            <?= _A ('<a href="' . $content['blog']['href'] . '"><span id="e2-blog-title">' . $content['blog']['title'] . '</span></a>') ?>
          </h1>

        </div>

        <?php if ($content['class'] == 'frontpage') { ?>
          <div id="e2-blog-description"><?= $content['blog']['description'] ?></div>
        <?php } ?>
      </div>
    </div>

    <div class="spotlight">
      <span class="admin-links admin-links-floating">
        <?php _T ('author-menu') ?>
      </span>

      <?php if ($content['class'] != 'found') { ?>
        <?php _T_FOR ('form-search') ?>
      <?php } ?> 
    </div>

  </div>

  <?php _X ('header-post') ?>
</div>



<div class="content">

<?php _T ('heading') ?>
<?php _T ('theme-preview') ?>
<?php _T ('message') ?>
<?php _T ('welcome') ?>
<?php _T ('unavailable') ?>
<?php _T ('drafts') ?>
<?php _T ('notes') ?>
<?php _T ('notes-list') ?>
<?php _T ('tags') ?>
<?php _T ('nothing') ?>
<?php _T ('sessions') ?>
<?php _T ('sources') ?>
<?php _T ('pages') ?>
<?php _T ('comments') ?>
<?php _T ('popular') ?>
<?php _T ('tags-menu') ?>
<?php _T ('unsubscribe') ?>
<?php _T ('form') ?>

</div>




<div class="footer">
<?php _X ('footer-pre') ?>
<div style="margin-bottom: 5px;"><a style="border-bottom-style: none;" href="#" class="e2-service-color-rss"><span style="width: 16px;" class="e2-svgi"><?= _SVG ('rss')?></span></a></div>
© <span id="e2-blog-author"><?= @$content['blog']['author'] ?></span>, <?=$content['blog']['years-range']?>

<div class="engine">
<?= $content['engine']['about'] # please do not remove ?>
<?php _T_DEFER ('stat') ?>
</div>
<div style="padding: 10px;"></div>

<?php _X ('footer-post') ?>
</div>




</div>

<?php _T ('niceerror'); ?>
