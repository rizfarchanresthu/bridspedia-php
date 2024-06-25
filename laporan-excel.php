<?php
    require('config.php');
    $sql="select * from view_dbdokumen";
    $res=mysqli_query($conn,$sql);

    $html='<table>
        <tr>
            <td style="background-color: #00529c; font-weight: bold">Nomor Ketentuan</td>
            <td style="background-color: #00529c; font-weight: bold">Judul Ketentuan</td>
            <td style="background-color: #00529c; font-weight: bold">Jenis Ketentuan</td>
            <td style="background-color: #00529c; font-weight: bold">Tanggal Terbit</td>
            <td style="background-color: #00529c; font-weight: bold">Last Review</td>
            <td style="background-color: #00529c; font-weight: bold">Next Review</td>
            <td style="background-color: #00529c; font-weight: bold">Divisi</td>
            <td style="background-color: #00529c; font-weight: bold">Status</td>
            <td style="background-color: #00529c; font-weight: bold" colspan="2">Informasi Dokumen</td>
        </tr>';
    while($result=mysqli_fetch_assoc($res)){
	$html.='<tr>
                <td>'.$result['nomor_ketentuan'].'</td>
                <td>'.$result['judul_ketentuan'].'</td>
                <td>'.$result['jenis_ketentuan'].'</td>
                <td>'.$result['tanggal_terbit'].'</td>
                <td>'.$result['last_review'].'</td>
                <td>'.$result['next_review'].'</td>
                <td>'.$result['divisi'].'</td>
                <td>'.$result['status'].'</td>
                <td>'.$result['info_doc'].'</td>
                <td>'.$result['searchdoc'].'</td>
            </tr>';
    }
    $html.='</table>';
    header('Content-Type:application/xls');
    header('Content-Disposition:attachment;filename=Policy&Procedure_BRIDS.xls');
    echo $html;
?>