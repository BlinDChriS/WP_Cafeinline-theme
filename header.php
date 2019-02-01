<!DOCTYPE>
<html>
<head>
<title>?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body>

<header  class="container-fluid">
    <div class="container">
        <div class="row">
            
                <nav id="navbar" class="navbar navbar-expand-lg navbar-light justify-content-between">
                <div class="col-6">
                <a class="navbar-brand" href="<?php get_home_url() ?>"><img src="http://localhost/wordpress/wp-content/uploads/2019/01/logo.png"></a>
            </div>
            <div class="col-6">
                <div class="collapse navbar-collapse" id="menu">
                    
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php wp_nav_menu(); ?>
</div>
                       </div>
                </nav>
        </div>
    </div>
</header>