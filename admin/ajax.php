<?php


include './dbconfig.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['cat_id'])) {



        $cat_id = $_POST['cat_id'];
        echo $cat_id;

        $select_sub_cat = "SELECT * FROM `sub_category` WHERE category_id= $cat_id";

        $select_sub_cat_run = $conn->query($select_sub_cat);
        if ($select_sub_cat_run) {

            if (mysqli_num_rows($select_sub_cat_run) > 0) {

                while ($data = mysqli_fetch_assoc($select_sub_cat_run)) { ?>

                    <option value="<?php echo $data['sno'] ?>"><?php echo $data['sub_cat_name'] ?></option>

<?php   }
            }
        }
    }



}



?>