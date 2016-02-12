<?php
require_once './inc/page.php';

$page = new Page("index");
$page->print_title();
?>
<div class="container">
    <div class="jumbotron">
        <div style="text-align: center;">
            <h2><?php echo $page->lang->index_welcome1 . $page->settings->name . $page->lang->index_welcome2; ?></h2>
        </div>

        <div style="text-align: center;"><p><?php echo $page->lang->index_allsins; ?></p></div>
    </div>
</div>
<?php $page->print_footer(false); ?>
