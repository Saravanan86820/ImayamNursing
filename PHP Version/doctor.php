<?php 
include 'includes/header.php'; 
include 'includes/doctors-data.php';
?>

<section class="doctor-hero">
    <div class="doctor-hero__bg">
        <img alt="Doctor List" decoding="async" data-nimg="fill" class="doctor-hero__img" sizes="100vw" src="./assets/images/doctorhero.jpg" style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent">
    </div>
    <h1 class="doctor-hero__title">Doctor List</h1>
    <div class="doctor-hero__wave">
        <img alt="" width="1920" height="206" class="doctor-hero__wave-img" src="./assets/images/vector1.png">
    </div>
</section>

<section class="doctor-list">
    <div class="doctor-list__container">
        <div class="doctor-list__grid">
            <?php foreach ($doctorsData as $key => $doc): ?>
            <div class="doctor-list__card">
                <div class="doctor-list__card-media">
                    <img alt="<?= htmlspecialchars($doc['name']) ?>" class="doctor-list__card-img" src="<?= $doc['photo'] ?>">
                </div>
                <div class="doctor-list__card-body">
                    <h3 class="doctor-list__card-name"><?= htmlspecialchars($doc['name']) ?></h3>
                    <p class="doctor-list__card-role"><?= htmlspecialchars($doc['role']) ?></p>
                    <p class="doctor-list__card-qualification"><?= htmlspecialchars($doc['meta']['education']) ?></p>
                    <p class="doctor-list__card-experience"><?= htmlspecialchars($doc['meta']['experience']) ?></p>
                    <a class="doctor-list__card-link" href="./doctor-profile.php?doctor=<?= $key ?>">View Profile</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>