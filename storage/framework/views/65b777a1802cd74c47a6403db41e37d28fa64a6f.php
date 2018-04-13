<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title', 'Sample App'); ?> - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="/" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/help">帮助</a></li>
                    <li><a href="#">登录</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>