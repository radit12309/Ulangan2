<form method="POST">
pH: <input type="number" name="ph" step="0.1" min="0" max="14">
<button type="submit">Cek</button>
</form>

<?php
if(isset($_POST['ph'])){
    $ph = $_POST['ph'];

    if($ph < 0 || $ph > 14){
        echo "pH tidak valid";
    }
    else if($ph < 7){
        echo "pH $ph = ASAM";
    }
    else if($ph == 7){
        echo "pH $ph = NETRAL";
    }
    else if($ph > 7){
        echo "pH $ph = BASA";
    }
}
?>
