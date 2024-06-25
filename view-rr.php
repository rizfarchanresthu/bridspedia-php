<?php
include 'auth.php'; // Pastikan pengguna telah login
include 'config.php';

// Fetch purchase invoices and their items
$sql = "select `dfr`.`id` AS `id_dfr`,`dfr`.`date` AS `date`,`dfr`.`periode` AS `periode`,`bridspedia_login`.`divisi`.`id_div` AS `divisi_id`,`bridspedia_login`.`divisi`.`divisi` AS `divisi`,`bridspedia_login`.`status_rr`.`id_stsrr` AS `status_rr_id`,`bridspedia_login`.`status_rr`.`status` AS `status`,`fr`.`id` AS `id_fr`,`fr`.`risk_code` AS `risk_code`,`bridspedia_login`.`risk_category`.`id` AS `id_rc`,`bridspedia_login`.`risk_category`.`risk_category` AS `risk_category`,`fr`.`risk_event` AS `risk_event`,`fr`.`risk_factor` AS `risk_factor`,`fr`.`risk_indicator` AS `risk_indicator`,`fr`.`impact` AS `impact`,`fr`.`scr_pro` AS `scr_pro`,`fr`.`scr_imp` AS `scr_imp`,`fr`.`scr_ttl` AS `scr_ttl`,`fr`.`risk_treatment` AS `risk_treatment`,`fr`.`date_identification` AS `date_identification`,`fr`.`rr_pro` AS `rr_pro`,`fr`.`rr_imp` AS `rr_imp`,`fr`.`rr_ttl` AS `rr_ttl`,`fr`.`document` AS `document`,`fr`.`verified` AS `verified`,`fr`.`comment` AS `comment` from ((((`bridspedia_login`.`db_formriskregister` `dfr` left join `bridspedia_login`.`divisi` on(`dfr`.`divisi` = `bridspedia_login`.`divisi`.`id_div`)) left join `bridspedia_login`.`status_rr` on(`dfr`.`status_rr` = `bridspedia_login`.`status_rr`.`id_stsrr`)) left join `bridspedia_login`.`form_risk` `fr` on(`dfr`.`id` = `fr`.`form_risk`)) left join `bridspedia_login`.`risk_category` on(`fr`.`risk_category` = `bridspedia_login`.`risk_category`.`id`)) where `dfr`.`is_active` = 1 and `bridspedia_login`.`divisi`.`is_active` = 1 and `bridspedia_login`.`status_rr`.`is_active` = 1 and `fr`.`is_active` = 1 and `bridspedia_login`.`risk_category`.`is_active` = 1";

$result = $conn->query($sql);

$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data_id = $row['id_dfr'];
        
        if (!isset($data[$data_id])) {
            $data[$data_id] = [
                'id_dfr' => $data_id,
                'date' => $row['date'],
                'periode' => $row['periode'],
                'divisi' => $row['divisi'],
                'status' => $row['status'],
                'items' => []
            ];
        }

        if ($row['id_fr']) {
            $data[$data_id]['items'][] = [
                'id' => $row['id_fr'],
                'risk_code' => $row['risk_code'],
                'risk_category' => $row['risk_category'],
                'risk_event' => $row['risk_event']
            ];
        }
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Purchase Invoices</title>
</head>
<body>
    <h2>Form Risk Registers</h2>
    <?php foreach ($data as $database): ?>
        <h3>Form Risk Register ID: <?php echo $database['id_dfr']; ?></h3>
        <p>Date: <?php echo $database['date']; ?></p>
        <p>Periode: <?php echo $database['periode']; ?></p>
        <p>Divisi: <?php echo $database['divisi']; ?></p>
        <p>Status RR: <?php echo $database['status']; ?></p>
        
        <h4>Items</h4>
        <?php if (count($database['items']) > 0): ?>
            <table border="1">
                <tr>
                    <th>Risk Code</th>
                    <th>Risk Category</th>
                    <th>Risk Event</th>
                </tr>
                <?php foreach ($database['items'] as $item): ?>
                    <tr>
                        <td><?php echo $item['risk_code']; ?></td>
                        <td><?php echo $item['risk_category']; ?></td>
                        <td><?php echo $item['risk_event']; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>No items for this form risk register.</p>
        <?php endif; ?>
        <hr>
    <?php endforeach; ?>
</body>
</html>
