<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<div class="container">
    <div class="jumbotron">
        <div style="text-align: center;">
            <h2><?php echo str_replace("{server}", $page->settings->name, $page->t("index_welcome")); ?></h2>
        </div>

        <div style="text-align: center;"><p><?php echo $page->t("index_welcome2"); ?></p></div>
    </div>
</div>
<?php $page->print_footer(false); ?>
