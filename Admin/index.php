<?php
$serverName = "localhost";
$DBUName = "root";
$DBPass = "root";
$DBName = "bayrischerbarber";


$conn = mysqli_connect($serverName, $DBUName, $DBPass, $DBName);
if (!$conn) {
    die("ERROR: " . mysqli_connect_error());
}

?>
<?php
include("../inc/head.php");
?>

<style>
body::-webkit-scrollbar {
    display: none;
}

body {
    position: relative;
}

.wrap {
    min-height: 100vh;

}

.wrap * {
    text-transform: capitalize;
}


tr:nth-child(even) {
    background-color: #b0b0b0;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th {
    background: #e8a000;
    color: #fff;
}

th,
td {
    text-align: left;
    padding: 0.5em;
    border: 1px solid black;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

#err {
    position: absolute;
    width: 100vw;
    height: 100vh;
    z-index: 99;
    background: var(--background-color-);

}

#err h1 {
    color: var(--main-headers-color);

}
</style>

<div class="wrap">
    <div style="overflow-x:auto;">
        <table name="table">
            <tr>
                <th>ID</th>
                <th>Kunde</th>
                <th>Email </th>
                <th>Handy Nummer</th>
                <th>Datum

                </th>
                <th>PRD Price </th>
            </tr>

            <?php
            $sql = "SELECT * FROM `termine`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
            <tr>
                <td><?php echo $row["ID"] ?></td>
                <td><?php echo $row["Kunde"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><?php echo $row["Handy"] ?></td>
                <td><?php echo $row["datum"] ?></td>
                <td>
                    <form action="index.php" method="get">
                        <input type="hidden" name="id" value='<?php echo $row["ID"] ?>'>
                        <input type="hidden" name="action" value="del">
                        <input type="submit" value="entfernen" class="submit" style="background: red;color:#fff;">
                    </form>
                </td>
            </tr>
            <?php }
            }; ?>
        </table>

    </div>

    <?php
    $mainId = $_GET['id'];
    if ($_GET['action'] ==  'del') {
        $sql0 = "DELETE FROM termine WHERE ID='$mainId'";
        if (mysqli_query($conn, $sql0)) {
            header("location: /Admin/index.php");
            exit();
        } else {
            echo 'ERR' . mysqli_error($conn);
        }
    }

    ?>
</div>
<div id="err" class="D-F">
    <h1>es sind keine termine vor handen</h1>
</div>
<script>
var count = $('table').find('tr').length;
if (count === 1) {
    $('.wrap').hide();
    $('#err').show();
    console.log('hi');
} else {
    console.log('bye');
    $('.wrap').show();
    $('#err').hide();
}
console.log(count);
</script>