<?php 
include 'includes/header.php'; 
include 'includes/doctors-data.php';

$doctorId = $_GET['doctor'] ?? 'rajesh-kumar';
$doctor = $doctorsData[$doctorId] ?? null;

if (!$doctor) {
    echo '<div class="error-state"><h2>Doctor Not Found</h2><p>The doctor profile you are looking for does not exist.</p></div>';
    include 'includes/footer.php';
    exit;
}
?>

<section class="doctor-hero">
    <div class="doctor-hero__bg">
        <img alt="<?= htmlspecialchars($doctor['name']) ?>" class="doctor-hero__img" src="./assets/images/doctorhero.jpg">
    </div>
    <h1 class="doctor-hero__title"><?= htmlspecialchars($doctor['name']) ?></h1>
    <div class="doctor-hero__wave">
        <img alt="" width="1920" height="206" class="doctor-hero__wave-img" src="./assets/images/vector1.png">
    </div>
</section>

<section class="doctor-detail-layout">
    <div class="doctor-detail-layout__container">
        <div class="doctor-profile">
            <div class="doctor-profile__summary">
                <div class="doctor-profile__photo">
                    <img alt="<?= htmlspecialchars($doctor['name']) ?>" class="doctor-profile__photo-img" src="<?= $doctor['photo'] ?>">
                </div>
                <div class="doctor-profile__summary-info">
                    <h1 class="doctor-profile__name"><?= htmlspecialchars($doctor['name']) ?></h1>
                    <p class="doctor-profile__role"><?= htmlspecialchars($doctor['role']) ?></p>
                    <ul class="doctor-profile__meta">
                        <li>
                            <span class="doctor-profile__meta-label">Experience</span>
                            <span class="doctor-profile__meta-value"><?= htmlspecialchars($doctor['meta']['experience']) ?></span>
                        </li>
                        <li>
                            <span class="doctor-profile__meta-label">Education</span>
                            <span class="doctor-profile__meta-value"><?= htmlspecialchars($doctor['meta']['education']) ?></span>
                        </li>
                        <li>
                            <span class="doctor-profile__meta-label">Languages</span>
                            <span class="doctor-profile__meta-value"><?= htmlspecialchars($doctor['meta']['languages']) ?></span>
                        </li>
                        <li>
                            <span class="doctor-profile__meta-label">Locations</span>
                            <span class="doctor-profile__meta-value"><?= htmlspecialchars($doctor['meta']['locations']) ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="doctor-profile__divider">

            <h2 class="doctor-profile__section-title">Doctor's Profile</h2>
            <?php foreach ($doctor['profileParagraphs'] as $p): ?>
                <p class="doctor-profile__paragraph"><?= htmlspecialchars($p) ?></p>
            <?php endforeach; ?>

            <div class="doctor-profile__columns">
                <div class="doctor-profile__column">
                    <h3>Education</h3>
                    <ul>
                        <?php foreach ($doctor['columns']['education'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="doctor-profile__column">
                    <h3>Experience</h3>
                    <ul>
                        <?php foreach ($doctor['columns']['experience'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="doctor-profile__column">
                    <h3>Affiliation</h3>
                    <ul>
                        <?php foreach ($doctor['columns']['affiliation'] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <aside class="doctor-sidebar">
              <div class="doctor-sidebar__why-card">
                <h2 class="doctor-sidebar__why-title">Why Choose Imayam?</h2>
                <p class="doctor-sidebar__why-desc">Imayam Nursing Services has been providing professional home healthcare services across Chennai since 2013.</p>
                <ul class="doctor-sidebar__feature-list">
                  <li class="doctor-sidebar__feature">
                    <span class="doctor-sidebar__feature-number">1</span>
                    <div>
                      <h3>Affordable Packages</h3>
                      <p>Flexible care plans for every family.</p>
                    </div>
                  </li>
                  <li class="doctor-sidebar__feature">
                    <span class="doctor-sidebar__feature-number">2</span>
                    <div>
                      <h3>Quick Service</h3>
                      <p>Caregivers available within hours.</p>
                    </div>
                  </li>
                  <li class="doctor-sidebar__feature">
                    <span class="doctor-sidebar__feature-number">3</span>
                    <div>
                      <h3>24/7 Support</h3>
                      <p>Round-the-clock assistance whenever needed.</p>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="doctor-sidebar__helpline-card">
                <h3 class="doctor-sidebar__helpline-title">Support Helpline</h3>
                <p class="doctor-sidebar__helpline-desc">Have questions? Reach out to our dedicated support team.</p>
                <a href="tel:+919876543210" class="doctor-sidebar__helpline-number">
                  <svg stroke="currentColor"
                      fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="12"
                      width="12" xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                      </path>
                  </svg> +91 98765 43210
                </a>
              </div>

              <div class="doctor-sidebar__form-card">
                <div class="doctor-sidebar__form-header">
                  <span class="doctor-sidebar__form-icon"><svg stroke="currentColor"
                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z">
                    </path>
                    </svg></span>
                  <div>
                    <h2 class="doctor-sidebar__form-title">Enquire Now</h2>
                    <p class="doctor-sidebar__form-subtitle">We will get back to you as soon as possible.</p>
                  </div>
                </div>
                <form class="doctor-sidebar__form" onsubmit="event.preventDefault(); alert('Enquiry submitted (demo).');">
                  <div class="doctor-sidebar__form-row">
                    <div class="doctor-sidebar__form-field">
                      <label for="side-name">Your Name <span class="doctor-sidebar__required">*</span></label>
                      <input id="side-name" placeholder="Enter Your Name" required type="text" name="name">
                    </div>
                    <div class="doctor-sidebar__form-field">
                      <label for="side-mobile">Mobile Number <span class="doctor-sidebar__required">*</span></label>
                      <input id="side-mobile" placeholder="Enter Mobile Number" required type="tel" name="mobile">
                    </div>
                  </div>
                  <div class="doctor-sidebar__form-row">
                    <div class="doctor-sidebar__form-field">
                      <label for="side-email">Email Address <span class="doctor-sidebar__required">*</span></label>
                      <input id="side-email" placeholder="Enter Email Address" required type="email" name="email">
                    </div>
                    <div class="doctor-sidebar__form-field">
                      <label for="side-service">Service Required <span class="doctor-sidebar__required">*</span></label>
                      <select id="side-service" name="service" required>
                        <option value="" disabled selected>Select Service</option>
                        <option value="home-nursing">Home Nursing Care</option>
                        <option value="elderly-care">Elderly Care</option>
                        <option value="physiotherapy">Physiotherapy</option>
                        <option value="patient-attendant">Patient Attendant</option>
                        <option value="doctor-visit">Doctor Home Visit</option>
                      </select>
                    </div>
                  </div>
                  <div class="doctor-sidebar__form-field">
                    <label for="side-message">Message</label>
                    <input id="side-message" placeholder="Type your message here.." type="text" name="message">
                  </div>
                  <button type="submit" class="doctor-sidebar__submit">
                    Submit
                    <span class="doctor-sidebar__submit-arrow">
                      <svg stroke="currentColor"
                        fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        height="13" width="13" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                        </path>
                        </svg>
                    </span>
                  </button>
                </form>
              </div>
        </aside>
    </div>
</section>

<?php include 'includes/footer.php'; ?>