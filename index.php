<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boldizsár Gergely</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Név</th>
            <th>Város neve</th>
            <th>Busz sorszáma</th>
        </tr>
        <?php
        $nev = ["Béla", "János", "Gergely", "Dominik"];
        $varosNev = ["Budapest", "Borsod", "Szeged", "Sopron"];
        $buszSorszama = [];

        foreach ($nev as $i) {
            $buszSorszama[] = rand(1, 200);
        }
        foreach ($nev as $i => $x) {
            echo "<tr>";
            echo "<td>" . $x . "</td>";
            echo "<td>" . $varosNev[$i] . "</td>";
            echo "<td>" . $buszSorszama[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
