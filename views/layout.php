<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link type="text/css" rel="styleSheet"  href="/markdown/<?php echo $md_css;?>.css" />
    <link type="text/css" rel="styleSheet"  href="/themes/<?php echo $theme_css;?>.css" />
</head>
<body>
<?php echo $header_content; ?>
<?php echo $body_content; ?>
<footer><?php echo $site_name;?> powered by <a href="https://github.com/cr4fun/php-markdown-blog">php-markdown-blog</a></footer>
</body>
</html>