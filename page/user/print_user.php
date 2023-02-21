<?php
    ob_start();
    global $mysqli;
    mysqli_connect("localhost","root","","dbadminlte");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_error(), E_USER_ERROR;
    }
?>
<style>
    table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 483px;
    }
    table th {
        border: 1px solid black;
        padding: 5px;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
    }
    table td {
        border: 1px solid #000;
        width: 50px;
        padding: 10px;
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="1">
        <tr>
            <td style="width: 40%; text-align: center;">
                <img src="../../assets/dist/img/AdminLTELogo.png" width="480px" alt="">
            </td colspan="">
            <td style="width: 80%;">
                <h3 style="text-align: center;">
                Report Data User</h3>  
            </td>
            <td style="text-align: center; width: 35%;">
                Jl. Asia-Afrika, Bandung-Jawa Barat, Indonesia
            </td>
        </tr>
    </table>
    <br><br>
<!-- isi report -->
<table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID User</th>
                <th>Nama User</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
          <?php 
              $mysqli = new mysqli("localhost","root","","dbadminlte");
              $sql = "SELECT * FROM tbuser";
              $no = 0;
              $admin = $mysqli->query($sql);
              while ($m = mysqli_fetch_array($admin)) {
              $no++;
          ?>
          <tr>
              <td style="width: 10%;"><?php echo $no; ?></td>
              <td style="width: 20%;"><?php echo $m['iduser']; ?></td>
              <td style="width: 95%;"><?php echo $m['namauser']; ?></td>
              <td style="width: 30%;"><?php echo $m['status']; ?></td>
          </tr>
              <?php } ?>
        </tbody>
    </table>
</body>
</html>
<?php 
    $html = ob_get_contents();
    
    require __DIR__.'/vendor/autoload.php';
    require_once('vendor/spipu/html2pdf/src/Html2Pdf.php');
    use Spipu\Html2Pdf\Html2Pdf;

    $pdf = new Html2Pdf('P','A4','en');

    $pdf->WriteHTML($html);
    
    ob_clean();
    $pdf->Output('Cetak Data.pdf', 'I');
    // $html = ob_get_contents();
    
    // require_once( __DIR__ .'/vendor/autoload.php');
    // require_once('vendor/spipu/html2pdf/html2pdf.class.php');

    // $pdf = new HTML2PDF('P','A4','en');
    // $pdf->WriteHTML($html);
    // ob_end_clean();

    // $pdf->Output('ffff.pdf', 'D');

    // require_once __DIR__ . '/vendor/autoload.php';

    // $mpdf = new \mPDF();
    // $mpdf->WriteHTML('<h1>Hello world!</h1>');
    // $mpdf->Output();

?>

    