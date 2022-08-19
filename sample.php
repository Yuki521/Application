<?php

//3 -> 1*2*3
//4 -> 1*2*3*4

function fact(int $n)
{
    $answer = 1;
    for ($i = 1; $i <= $n; $i++) {
        $answer = $answer * $i;
    }
    return $answer;

}


function fact2(int $n)
{
    if ($n === 0) {
        return 1;
    }
    $x = fact2($n - 1);
    return $x * $n;
}

function fact3(int $n, int $acc)
{
    if ($n === 0) {
        return $acc;
    }
    return fact3($n - 1, $n * $acc);
}

//末尾再起
//なぜ2,4が同じなのか
function fact4(int $n)
{
    return fact3($n, 1);
}

echo fact4($argv[1]), PHP_EOL;

//fact2(3)
//fact2(2) * 3
//fact2(1) * 2 * 3
//fact2(0) * 1 * 2 * 3
//1 * 1 * 2 * 3


//echo fact($argv[1]), PHP_EOL;

//再起呼び出すたびにメモリを取る
//アクティベーションレコード、スタック
//変数を保存するための領域が必要になる
//元の値を保持する必要がある
//
//$x = 1;
////こうちきほう
//echo $x--, PHP_EOL;
//echo $x, PHP_EOL;
//
////前置記法
//$y = 1;
//echo --$y, PHP_EOL;
//echo $y, PHP_EOL;
//
//try {
//    throw new Exception('foo');
//} catch (Exception $e) {
//    echo $e->getMessage(), PHP_EOL;
//} finally {
//    echo 'finally', PHP_EOL;
//}

//echo 0 / 1, PHP_EOL;

//短絡評価
$x = [] && hoge();

function hoge()
{
    echo 'hoge',PHP_EOL;
    return 1;
}


drwx---r-x 25 resta resta  12288  9月 22 11:12 2021 .
drwxr-xr-x  7 resta resta   4096  1月  6 14:52 2022 ..
drwx---r-x  2 resta resta   4096 12月  1 14:16 2017 ID3
drwx---r-x  2 resta resta   4096 12月  1 14:17 2017 IXR
drwxr-xr-x  2 resta resta   4096  9月 22 11:12 2021 PHPMailer
drwx---r-x  9 resta resta   4096 12月  1 14:17 2017 Requests
drwx---r-x  9 resta resta   4096 12月  1 14:17 2017 SimplePie
drwx---r-x  3 resta resta   4096 12月  1 14:17 2017 Text
-rw-r--r--  1 resta resta  32356  9月 22 11:12 2021 admin-bar.php
drwxr-xr-x  2 resta resta   4096  9月 22 11:12 2021 assets
-rw-r--r--  1 resta resta  11948  9月 22 11:12 2021 atomlib.php
-rw-r--r--  1 resta resta  17030  9月 22 11:12 2021 author-template.php
-rw-r--r--  1 resta resta  16999  9月 22 11:12 2021 block-editor.php
drwxr-xr-x  2 resta resta   4096  9月 22 11:12 2021 block-patterns
-rw-r--r--  1 resta resta   2663  9月 22 11:12 2021 block-patterns.php
drwxr-xr-x  2 resta resta   4096  9月 22 11:12 2021 block-supports
-rw-r--r--  1 resta resta   3760  9月 22 11:12 2021 block-template-utils.php
-rw-r--r--  1 resta resta   7053  9月 22 11:12 2021 block-template.php
drwxr-xr-x 63 resta resta   4096  9月 22 11:12 2021 blocks
-rw-r--r--  1 resta resta  36535  9月 22 11:12 2021 blocks.php
-rw-r--r--  1 resta resta  12717  9月 22 11:12 2021 bookmark-template.php
-rw-r--r--  1 resta resta  15332  9月 22 11:12 2021 bookmark.php
-rw-r--r--  1 resta resta   1046  9月 22 11:12 2021 cache-compat.php
-rw-r--r--  1 resta resta   9513  9月 22 11:12 2021 cache.php
-rw-r--r--  1 resta resta  33085  9月 22 11:12 2021 canonical.php
-rw-r--r--  1 resta resta  35758  9月 22 11:12 2021 capabilities.php
-rw-r--r--  1 resta resta  55563  9月 22 11:12 2021 category-template.php
-rw-r--r--  1 resta resta  12712  9月 22 11:12 2021 category.php
drwx---r-x  2 resta resta   4096 12月  1 14:17 2017 certificates
-rw-r--r--  1 resta resta   2543  9月 22 11:12 2021 class-IXR.php
-rw-r--r--  1 resta resta    529  9月 22 11:12 2021 class-feed.php
-rw-r--r--  1 resta resta  39710  9月 22 11:12 2021 class-http.php
-rw-r--r--  1 resta resta  43441  9月 22 11:12 2021 class-json.php
-rw-r--r--  1 resta resta    407  9月 22 11:12 2021 class-oembed.php
-rw-r--r--  1 resta resta   6699  9月 22 11:12 2021 class-phpass.php
-rw-r--r--  1 resta resta    664  9月 22 11:12 2021 class-phpmailer.php
-rw-r--r--  1 resta resta  20837  9月 22 11:12 2021 class-pop3.php
-rw-r--r--  1 resta resta  30431  9月 22 11:12 2021 class-requests.php
-rw-r--r--  1 resta resta  96271  9月 22 11:12 2021 class-simplepie.php
-rw-r--r--  1 resta resta    457  9月 22 11:12 2021 class-smtp.php
-rw-r--r--  1 resta resta  37715  9月 22 11:12 2021 class-snoopy.php
-rw-r--r--  1 resta resta   2133  9月 22 11:12 2021 class-walker-category-dropdown.php
-rw-r--r--  1 resta resta   7893  9月 22 11:12 2021 class-walker-category.php
-rw-r--r--  1 resta resta  13730  9月 22 11:12 2021 class-walker-comment.php
-rw-r--r--  1 resta resta   8645  9月 22 11:12 2021 class-walker-nav-menu.php
-rw-r--r--  1 resta resta   2299 12月 25 11:09 2019 class-walker-page-dropdown.php
-rw-r--r--  1 resta resta   7043  9月 22 11:12 2021 class-walker-page.php
-rw-r--r--  1 resta resta  16993  9月 22 11:12 2021 class-wp-admin-bar.php
-rw-r--r--  1 resta resta   5240  9月 22 11:12 2021 class-wp-ajax-response.php
-rw-r--r--  1 resta resta  10626  9月 22 11:12 2021 class-wp-application-passwords.php
-rw-r--r--  1 resta resta    890  9月 22 11:12 2021 class-wp-block-editor-context.php
-rw-r--r--  1 resta resta   4473  9月 22 11:12 2021 class-wp-block-list.php
-rw-r--r--  1 resta resta  15218  9月 22 11:12 2021 class-wp-block-parser.php
-rw-r--r--  1 resta resta   4289  9月 22 11:12 2021 class-wp-block-pattern-categories-registry.php
-rw-r--r--  1 resta resta   4537  9月 22 11:12 2021 class-wp-block-patterns-registry.php
-rw-r--r--  1 resta resta   4715  9月 22 11:12 2021 class-wp-block-styles-registry.php
-rw-r--r--  1 resta resta   5278  9月 22 11:12 2021 class-wp-block-supports.php
-rw-r--r--  1 resta resta   1213  9月 22 11:12 2021 class-wp-block-template.php
-rw-r--r--  1 resta resta   4642  9月 22 11:12 2021 class-wp-block-type-registry.php
-rw-r--r--  1 resta resta   9163  9月 22 11:12 2021 class-wp-block-type.php
-rw-r--r--  1 resta resta   6765  9月 22 11:12 2021 class-wp-block.php
-rw-r--r--  1 resta resta  45483  9月 22 11:12 2021 class-wp-comment-query.php
-rw-r--r--  1 resta resta   9321  9月 22 11:12 2021 class-wp-comment.php
-rw-r--r--  1 resta resta  25669  9月 22 11:12 2021 class-wp-customize-control.php
-rw-r--r--  1 resta resta 201191  9月 22 11:12 2021 class-wp-customize-manager.php
-rw-r--r--  1 resta resta  56774  9月 22 11:12 2021 class-wp-customize-nav-menus.php
-rw-r--r--  1 resta resta  10400  9月 22 11:12 2021 class-wp-customize-panel.php
-rw-r--r--  1 resta resta  10974  9月 22 11:12 2021 class-wp-customize-section.php
-rw-r--r--  1 resta resta  29766  9月 22 11:12 2021 class-wp-customize-setting.php
-rw-r--r--  1 resta resta  71193  9月 22 11:12 2021 class-wp-customize-widgets.php
-rw-r--r--  1 resta resta  34839  9月 22 11:12 2021 class-wp-date-query.php
-rw-r--r--  1 resta resta   2511  9月 22 11:12 2021 class-wp-dependency.php
-rw-r--r--  1 resta resta  71206  9月 22 11:12 2021 class-wp-editor.php
-rw-r--r--  1 resta resta  15954  9月 22 11:12 2021 class-wp-embed.php
-rw-r--r--  1 resta resta   7302  9月 22 11:12 2021 class-wp-error.php
-rw-r--r--  1 resta resta   7575  9月 22 11:12 2021 class-wp-fatal-error-handler.php
-rw-r--r--  1 resta resta   2560 12月 25 11:09 2019 class-wp-feed-cache-transient.php
-rw-r--r--  1 resta resta    970  9月 22 11:12 2021 class-wp-feed-cache.php
-rw-r--r--  1 resta resta  15006  9月 22 11:12 2021 class-wp-hook.php
-rw-r--r--  1 resta resta   7186  9月 22 11:12 2021 class-wp-http-cookie.php
-rw-r--r--  1 resta resta  12345  9月 22 11:12 2021 class-wp-http-curl.php
-rw-r--r--  1 resta resta   6654  9月 22 11:12 2021 class-wp-http-encoding.php
-rw-r--r--  1 resta resta   3474  9月 22 11:12 2021 class-wp-http-ixr-client.php
-rw-r--r--  1 resta resta   5863  9月 22 11:12 2021 class-wp-http-proxy.php
-rw-r--r--  1 resta resta   1981  9月 22 11:12 2021 class-wp-http-requests-hooks.php
-rw-r--r--  1 resta resta   4343 12月 25 11:09 2019 class-wp-http-requests-response.php
-rw-r--r--  1 resta resta   2951 12月 25 11:09 2019 class-wp-http-response.php
-rw-r--r--  1 resta resta  16117  9月 22 11:12 2021 class-wp-http-streams.php
-rw-r--r--  1 resta resta  15517  9月 22 11:12 2021 class-wp-image-editor-gd.php
-rw-r--r--  1 resta resta  26873  9月 22 11:12 2021 class-wp-image-editor-imagick.php
-rw-r--r--  1 resta resta  16586  9月 22 11:12 2021 class-wp-image-editor.php
-rw-r--r--  1 resta resta   6949  9月 22 11:12 2021 class-wp-list-util.php
-rw-r--r--  1 resta resta   5022 12月 25 11:09 2019 class-wp-locale-switcher.php
-rw-r--r--  1 resta resta  13982  9月 22 11:12 2021 class-wp-locale.php
-rw-r--r--  1 resta resta   1800  9月 22 11:12 2021 class-wp-matchesmapregex.php
-rw-r--r--  1 resta resta  27842  9月 22 11:12 2021 class-wp-meta-query.php
-rw-r--r--  1 resta resta   5352  9月 22 11:12 2021 class-wp-metadata-lazyloader.php
-rw-r--r--  1 resta resta  19169  9月 22 11:12 2021 class-wp-network-query.php
-rw-r--r--  1 resta resta  12379  9月 22 11:12 2021 class-wp-network.php
-rw-r--r--  1 resta resta  13551  9月 22 11:12 2021 class-wp-object-cache.php
-rw-r--r--  1 resta resta   6827  9月 22 11:12 2021 class-wp-oembed-controller.php
-rw-r--r--  1 resta resta  30321  9月 22 11:12 2021 class-wp-oembed.php
-rw-r--r--  1 resta resta   4923  9月 22 11:12 2021 class-wp-paused-extensions-storage.php
-rw-r--r--  1 resta resta  20820  9月 22 11:12 2021 class-wp-post-type.php
-rw-r--r--  1 resta resta   6423  9月 22 11:12 2021 class-wp-post.php
-rw-r--r--  1 resta resta 134784  9月 22 11:12 2021 class-wp-query.php
-rw-r--r--  1 resta resta   6459  9月 22 11:12 2021 class-wp-recovery-mode-cookie-service.php
-rw-r--r--  1 resta resta  10660  9月 22 11:12 2021 class-wp-recovery-mode-email-service.php
-rw-r--r--  1 resta resta   4270  9月 22 11:12 2021 class-wp-recovery-mode-key-service.php
-rw-r--r--  1 resta resta   3401  9月 22 11:12 2021 class-wp-recovery-mode-link-service.php
-rw-r--r--  1 resta resta  11378  9月 22 11:12 2021 class-wp-recovery-mode.php
-rw-r--r--  1 resta resta  62847  9月 22 11:12 2021 class-wp-rewrite.php
-rw-r--r--  1 resta resta   2498  9月 22 11:12 2021 class-wp-role.php
-rw-r--r--  1 resta resta   8430  9月 22 11:12 2021 class-wp-roles.php
-rw-r--r--  1 resta resta   7425  9月 22 11:12 2021 class-wp-session-tokens.php
-rw-r--r--  1 resta resta   3259  9月 22 11:12 2021 class-wp-simplepie-file.php
-rw-r--r--  1 resta resta   1775  9月 22 11:12 2021 class-wp-simplepie-sanitize-kses.php
-rw-r--r--  1 resta resta  29308  9月 22 11:12 2021 class-wp-site-query.php
-rw-r--r--  1 resta resta   7428  9月 22 11:12 2021 class-wp-site.php
-rw-r--r--  1 resta resta  19266  9月 22 11:12 2021 class-wp-tax-query.php
-rw-r--r--  1 resta resta  13344  9月 22 11:12 2021 class-wp-taxonomy.php
-rw-r--r--  1 resta resta  37265  9月 22 11:12 2021 class-wp-term-query.php
-rw-r--r--  1 resta resta   5272  9月 22 11:12 2021 class-wp-term.php
-rw-r--r--  1 resta resta    716 12月 25 11:09 2019 class-wp-text-diff-renderer-inline.php
-rw-r--r--  1 resta resta  16795  9月 22 11:12 2021 class-wp-text-diff-renderer-table.php
-rw-r--r--  1 resta resta  11464  9月 22 11:12 2021 class-wp-theme-json-resolver.php
-rw-r--r--  1 resta resta  33739  9月 22 11:12 2021 class-wp-theme-json.php
-rw-r--r--  1 resta resta  51308  9月 22 11:12 2021 class-wp-theme.php
-rw-r--r--  1 resta resta   2990 12月 25 11:09 2019 class-wp-user-meta-session-tokens.php
-rw-r--r--  1 resta resta  31333  9月 22 11:12 2021 class-wp-user-query.php
-rw-r--r--  1 resta resta   2196  9月 22 11:12 2021 class-wp-user-request.php
-rw-r--r--  1 resta resta  22194  9月 22 11:12 2021 class-wp-user.php
-rw-r--r--  1 resta resta  12730  9月 22 11:12 2021 class-wp-walker.php
-rw-r--r--  1 resta resta   3321  9月 22 11:12 2021 class-wp-widget-factory.php
-rw-r--r--  1 resta resta  18157  9月 22 11:12 2021 class-wp-widget.php
-rw-r--r--  1 resta resta 212923  9月 22 11:12 2021 class-wp-xmlrpc-server.php
-rw-r--r--  1 resta resta  25091  9月 22 11:12 2021 class-wp.php
-rw-r--r--  1 resta resta  12868  9月 22 11:12 2021 class.wp-dependencies.php
-rw-r--r--  1 resta resta  18938  9月 22 11:12 2021 class.wp-scripts.php
-rw-r--r--  1 resta resta  10876  9月 22 11:12 2021 class.wp-styles.php
-rw-r--r--  1 resta resta  94954  9月 22 11:12 2021 comment-template.php
-rw-r--r--  1 resta resta 125758  9月 22 11:12 2021 comment.php
-rw-r--r--  1 resta resta  12087  9月 22 11:12 2021 compat.php
-rw-r--r--  1 resta resta  40646  9月 22 11:12 2021 cron.php
drwx---r-x  3 resta resta   4096 12月 25 11:09 2019 css
drwx---r-x  2 resta resta   4096  9月 22 11:12 2021 customize
-rw-r--r--  1 resta resta    406  9月 22 11:12 2021 date.php
-rw-r--r--  1 resta resta  10257  9月 22 11:12 2021 default-constants.php
-rw-r--r--  1 resta resta  29995  9月 22 11:12 2021 default-filters.php
-rw-r--r--  1 resta resta   2222  9月 22 11:12 2021 default-widgets.php
-rw-r--r--  1 resta resta 124823  9月 22 11:12 2021 deprecated.php
-rw-r--r--  1 resta resta    341  9月 22 11:12 2021 embed-template.php
-rw-r--r--  1 resta resta  48089  9月 22 11:12 2021 embed.php
-rw-r--r--  1 resta resta   4117  9月 22 11:12 2021 error-protection.php
-rw-r--r--  1 resta resta   5444  9月 22 11:12 2021 feed-atom-comments.php
-rw-r--r--  1 resta resta   3104  9月 22 11:12 2021 feed-atom.php
-rw-r--r--  1 resta resta   2668  9月 22 11:12 2021 feed-rdf.php
-rw-r--r--  1 resta resta   1189  9月 22 11:12 2021 feed-rss.php
-rw-r--r--  1 resta resta   4070  9月 22 11:12 2021 feed-rss2-comments.php
-rw-r--r--  1 resta resta   3799  9月 22 11:12 2021 feed-rss2.php
-rw-r--r--  1 resta resta  22966  9月 22 11:12 2021 feed.php
drwx---r-x  2 resta resta   4096 12月 25 11:09 2019 fonts
-rw-r--r--  1 resta resta 326624  9月 22 11:12 2021 formatting.php
-rw-r--r--  1 resta resta 253122  9月 22 11:12 2021 functions.php
-rw-r--r--  1 resta resta  13421  9月 22 11:12 2021 functions.wp-scripts.php
-rw-r--r--  1 resta resta   8303  9月 22 11:12 2021 functions.wp-styles.php
-rw-r--r--  1 resta resta 158208  9月 22 11:12 2021 general-template.php
-rw-r--r--  1 resta resta  22385  9月 22 11:12 2021 http.php
-rw-r--r--  1 resta resta   6871  9月 22 11:12 2021 https-detection.php
-rw-r--r--  1 resta resta   4730  9月 22 11:12 2021 https-migration.php
drwx---r-x  6 resta resta   4096  9月 22 11:12 2021 images
drwx---r-x 13 resta resta   4096 12月 25 11:09 2019 js
-rw-r--r--  1 resta resta  63891  9月 22 11:12 2021 kses.php
-rw-r--r--  1 resta resta  56738  9月 22 11:12 2021 l10n.php
-rw-r--r--  1 resta resta 148675  9月 22 11:12 2021 link-template.php
-rw-r--r--  1 resta resta  50040  9月 22 11:12 2021 load.php
-rw-r--r--  1 resta resta    162 12月 25 11:09 2019 locale.php
-rw-r--r--  1 resta resta  60408  9月 22 11:12 2021 media-template.php
-rw-r--r--  1 resta resta 178105  9月 22 11:12 2021 media.php
-rw-r--r--  1 resta resta  60126  9月 22 11:12 2021 meta.php
-rw-r--r--  1 resta resta  25174  9月 22 11:12 2021 ms-blogs.php
-rw-r--r--  1 resta resta   4710  9月 22 11:12 2021 ms-default-constants.php
-rw-r--r--  1 resta resta   6496  9月 22 11:12 2021 ms-default-filters.php
-rw-r--r--  1 resta resta  21129  9月 22 11:12 2021 ms-deprecated.php
-rw-r--r--  1 resta resta   2641  9月 22 11:12 2021 ms-files.php
-rw-r--r--  1 resta resta  93902  9月 22 11:12 2021 ms-functions.php
-rw-r--r--  1 resta resta  19786  9月 22 11:12 2021 ms-load.php
-rw-r--r--  1 resta resta   3661  9月 22 11:12 2021 ms-network.php
-rw-r--r--  1 resta resta   4124  9月 22 11:12 2021 ms-settings.php
-rw-r--r--  1 resta resta  39587  9月 22 11:12 2021 ms-site.php
-rw-r--r--  1 resta resta  23296  9月 22 11:12 2021 nav-menu-template.php
-rw-r--r--  1 resta resta  42181  9月 22 11:12 2021 nav-menu.php
-rw-r--r--  1 resta resta  76561  9月 22 11:12 2021 option.php
-rw-r--r--  1 resta resta   6263  9月 22 11:12 2021 pluggable-deprecated.php
-rw-r--r--  1 resta resta 103920  9月 22 11:12 2021 pluggable.php
-rw-r--r--  1 resta resta  33119  9月 22 11:12 2021 plugin.php
drwx---r-x  2 resta resta   4096 12月 27 14:32 2017 pomo
-rw-r--r--  1 resta resta   7079  9月 22 11:12 2021 post-formats.php
-rw-r--r--  1 resta resta  64766  9月 22 11:12 2021 post-template.php
-rw-r--r--  1 resta resta   9353  9月 22 11:12 2021 post-thumbnail-template.php
-rw-r--r--  1 resta resta 264501  9月 22 11:12 2021 post.php
-rw-r--r--  1 resta resta  35783  9月 22 11:12 2021 query.php
drwx---r-x  2 resta resta   4096 12月 25 11:09 2019 random_compat
-rw-r--r--  1 resta resta    200  9月 22 11:12 2021 registration-functions.php
-rw-r--r--  1 resta resta    200  9月 22 11:12 2021 registration.php
drwx---r-x  5 resta resta   4096 12月 25 11:09 2019 rest-api
-rw-r--r--  1 resta resta  93374  9月 22 11:12 2021 rest-api.php
-rw-r--r--  1 resta resta  22542  9月 22 11:12 2021 revision.php
-rw-r--r--  1 resta resta  19213  9月 22 11:12 2021 rewrite.php
-rw-r--r--  1 resta resta   5173  9月 22 11:12 2021 robots-template.php
-rw-r--r--  1 resta resta    255  9月 22 11:12 2021 rss-functions.php
-rw-r--r--  1 resta resta  22978  9月 22 11:12 2021 rss.php
-rw-r--r--  1 resta resta 108457  9月 22 11:12 2021 script-loader.php
-rw-r--r--  1 resta resta    258  9月 22 11:12 2021 session.php
-rw-r--r--  1 resta resta  21432  9月 22 11:12 2021 shortcodes.php
drwxr-xr-x  3 resta resta   4096  9月 22 11:12 2021 sitemaps
-rw-r--r--  1 resta resta   3238  9月 22 11:12 2021 sitemaps.php
drwxr-xr-x  5 resta resta   4096  9月 22 11:12 2021 sodium_compat
-rw-r--r--  1 resta resta    441  9月 22 11:12 2021 spl-autoload-compat.php
-rw-r--r--  1 resta resta 168153  9月 22 11:12 2021 taxonomy.php
-rw-r--r--  1 resta resta    594  9月 22 11:12 2021 template-canvas.php
-rw-r--r--  1 resta resta   3012  9月 22 11:12 2021 template-loader.php
-rw-r--r--  1 resta resta  22485  9月 22 11:12 2021 template.php
drwx---r-x  2 resta resta   4096 12月  1 14:17 2017 theme-compat
-rw-r--r--  1 resta resta    634  9月 22 11:12 2021 theme-i18n.json
-rw-r--r--  1 resta resta   4724  9月 22 11:12 2021 theme-templates.php
-rw-r--r--  1 resta resta   5326  9月 22 11:12 2021 theme.json
-rw-r--r--  1 resta resta 125388  9月 22 11:12 2021 theme.php
-rw-r--r--  1 resta resta  30037  9月 22 11:12 2021 update.php
-rw-r--r--  1 resta resta 155195  9月 22 11:12 2021 user.php
-rw-r--r--  1 resta resta   5816  9月 22 11:12 2021 vars.php
-rw-r--r--  1 resta resta    793 10月  5 16:55 2021 version.php
drwx---r-x  2 resta resta   4096  9月 22 11:12 2021 widgets
-rw-r--r--  1 resta resta  67278  9月 22 11:12 2021 widgets.php
-rw----r--  1 resta resta   1045 12月  1 14:16 2017 wlwmanifest.xml
-rw-r--r--  1 resta resta 106095  9月 22 11:12 2021 wp-db.php
-rw-r--r--  1 resta resta    647  9月 22 11:12 2021 wp-diff.php