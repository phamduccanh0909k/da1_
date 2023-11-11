<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">List comments</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- Data -->
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                List comments
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th>COUNT_COM</th>
                            <th>NEW_DATE</th>
                            <th>OLD_DATE</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dsbl as $bl) {
                            extract($bl);
                            $ct = "index.php?act=com_detail&id_pro=" . $id_pro;
                            // $xoacom = "index.php?act=delete_com&id_pro=" . $id_pro;
                            echo '<tr>
    <td>' . $name_pro . '</td>
    <td>' . $count_com . '</td>
 <td>' . $new_date . '</td>
 <td>' . $old_date . '</td>
<td>  <a href="' . $ct . '" class="btn btn-warning"><input type="button" value="DETAIL" /></a>
        </td>
                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>