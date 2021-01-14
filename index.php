<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <style>@import url(css/style.css);</style> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>NIX Education git </title>
</head>
<body>
<header>
    <div class="container">
        <a href="/" class="logo">Nixsolution beginer</a>
        <nav>
            <ul>
                <li><a href="https://github.com/GiviSarapionovich/nixsolution/commit/74a9273b56f47e36f6db728031d846a9abe00ec8">Урок 1</a></li>
                <li><a href="https://github.com/GiviSarapionovich/nixsolution/commit/a1210fe0bf62cc1fea071f65318e708090b6bd95">Урок 2</a></li>
                <li><a href="https://github.com/GiviSarapionovich/nixsolution/commit/2351464e4b87780f1370e28ceb8291cbe5c21762">Урок 3</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-1-2">
                <table border="1" cellpadding="2">
                    <tr>
                <?PHP
                for($i = 1; $i <= 10; $i++) {
                    echo '<td width="18%" style="float:left;margin: 2px;text-align: justify-all;">';
                    for ($j = 1; $j <= 10; $j++) {
                        echo  $j ? $i ? $i . ' x ' . $j . ' = ' . $i * $j : $j : $i,'<br />';
                    }
                    echo '</td>';
                }
                ?>
                    </tr>
                </table>
            </div>
            <div class="col-1-2">
<!--                --><?//
//                echo ("Hello, NIX Education");
//                ?>
            </div>
        </div>

    </div>
</div>
<footer><div class="container"></div></footer>
</body>
</html>