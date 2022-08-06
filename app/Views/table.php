
<?php
$nama = "Adjie";
$hobi = array("Makan","Tidur","Berenang");
$peserta = array(
    array("Adjie","Tidur","Cilok"),
    array("Wildan","Masak","Kepiting"),
    array("Aziz","Menggambar","Swuike"),
    array("Adjie","Tidur","Cilok"),
    array("Wildan","Masak","Kepiting"),
    array("Aziz","Menggambar","Swuike"),
    array("Adjie","Tidur","Cilok"),
    array("Wildan","Masak","Kepiting"),
    array("Aziz","Menggambar","Swuike"),
    array("Adjie","Tidur","Cilok"),
    array("Wildan","Masak","Kepiting"),
    array("Aziz","Menggambar","Swuike"),
    array("Adjie","Tidur","Cilok"),
    array("Wildan","Masak","Kepiting"),
    array("Aziz","Menggambar","Swuike"),
)
?>

<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <section class="section">
        <div class="container">
            <h1>Hai <?php echo $nama ?></h1>
            <br>
            <ul>
                <?php foreach($hobi as $item){ ?>
                    <li><?php echo $item; ?></li>
                <?php } ?>
            </ul>

            <br>
            
            <table id="tabeluser" class="table is-narrow" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Hobi</th>
                        <th>Makanan Kesukaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($peserta as $item){ ?>
                        <tr>
                            <td><?php echo $item[0]; ?></td>
                            <td><?php echo $item[1]; ?></td>
                            <td><?php echo $item[2]; ?></td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
        $('#tabeluser').DataTable();
    });
</script>
</html>