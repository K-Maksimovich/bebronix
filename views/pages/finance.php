<?php
session_start();

use App\Services\Page;
?>

<?php Page::part("header"); ?>

<section class="home">

    <div class="container-fin">
        <div class="dohod">
            <p class="dogod-p1">Доход:</p>
            <p class="dogod-p2">585.960тг</p>
        </div>
        <div class="rashod">
            <p class="rashod-p1">Расходы:</p>
            <p class="rashod-p2">165.876тг</p>
        </div>
    </div>
    <div class="container-fin2">
        <p class="vuvod1">Вывод:</p>
        <p class="vuvod2"> 363.355тг</p>
    </div>
    <div class="container-fin3">
        <h1>История инвестиций</h1>
    </div>
    <table>
        <tr>
            <th>Название компании</th>
            <th>вклад</th>
        </tr>
        <tr>
            <td>TRUYA</td>
            <td>80.000тг</td>
        </tr>
        <tr>
            <td>TRUYA</td>
            <td>80.000тг</td>
        </tr>
        <tr>
            <td>TRUYA</td>
            <td>80.000тг</td>
        </tr>
    </table>
</section>



<?php Page::part("footer"); ?>
