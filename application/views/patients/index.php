<h2><?= $title ?></h2>
<p>This is where you can view patient information!</p>

<?php foreach($patients as $patient) : ?>
    <h3><?php echo 'Name: ' . $patient['patient_firstname'] . ' ' . $patient['patient_lastname']; ?></h3>
    <h4><?php echo 'Date of Birth: ' . $patient['patient_birthdate']; ?></h4>
    <h4><?php echo 'Gender: ' . $patient['patient_gender']; ?></h4>
    <h4><?php echo 'Sexual Identity: ' . $patient['patient_sexualidentity']; ?></h4>
    <h4><?php echo 'Religion: ' . $patient['patient_religion']; ?></h4>
    <h4><?php echo 'Politics: ' . $patient['patient_politics']; ?></h4>
    <?php echo "<br>"; ?>
<?php endforeach; ?>