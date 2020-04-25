<?php require "vendors/vendors.php"; ?>
<?php require "vendors/cars.php"; ?>
<?php require "vendors/race.php"; ?>
<?php require 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="vendors.php" name="score">
        <p><b>Какое Авто?</b></p>
        <select name="vendor" id="">
            <?php
                foreach ($outputVendors as $vendor) {
                    echo "<option value=\"$vendor\">$vendor</option>";
                }
            ?>
        </select>
        <p><input type="submit" value="Выбрать"></p>
    </form>

    <form action="dates.php">
        <p><b>Свободное авто на выбранную дату</b></p>
        <input type="date" name="targetDate">
        <p><input type="submit" value="Выбрать"></p>
    </form>

    <form action="rent.php">
        <p><b>Полученный доход с проката по состоянию на выбранную дату</b></p>
        <input type="date" name="rentTarget">
        <p><input type="submit" value="Выбрать"></p>
    </form>




    <form action="insert/in-rent.php">
        <p><b>Добавление бд</b></p>
        <table>
            <tr>
                <th>ID CAR</th>
                <th>Date_Start</th>
                <th>Time_Start</th>
                <th>Date_end</th>
                <th>Time_end</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td>
                    <select name="var_id" id="var_id">
                        <?php
                        foreach ($outputCars as $cars) {
                            echo "<option value=\"$cars\">$cars</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="date" name="date_start" required="required"></td>
                <td><input type="text" name="time_start" required="required"></td>
                <td><input type="date" name="date_end" required="required"></td>
                <td><input type="text" name="time_end" required="required"></td>
                <td><input type="text" name="var_cost" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>



    <form action="insert/switch.php">
        <p><b>Изменить пробег выбранному автомобилю</b></p>
        <table>
            <tr>
                <th>NAME CAR</th>
                <th>RACE</th>
            </tr>
            <tr>
                <td>
                    <select name="car_name" id="car_name">
                        <?php
                        foreach ($outputRace as $name) {
                            echo "<option value=\"$name\">$name</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><input type="number" name="race" required="required"></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>
</body>
</html>s