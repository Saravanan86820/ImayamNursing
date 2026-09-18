<?php
// includes/booking-modal.php
?>
<div class="booking-modal__overlay">
    <div class="booking-modal">
        <div class="booking-modal__header">
            <button type="button" class="booking-modal__close" aria-label="Close">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
                    </path>
                </svg>
            </button>
            <div class="booking-modal__header-nurse booking-modal__header-nurse--left">
                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="booking-modal__nurse-img"
                    sizes="140px" src="./assets/images/logo/logo.png"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
            </div>
            <div class="booking-modal__header-content"><img alt="Imayam Nursing" loading="lazy" width="130" height="44"
                    decoding="async" data-nimg="1" class="booking-modal__logo" src="./assets/images/logo/logo.png"
                    style="color: transparent;">
                <h2 class="booking-modal__title">Book Home Care Services at Home</h2>
                <p class="booking-modal__subtitle">Please enter your details and we will reach out to you as soon as we
                    can.</p>
            </div>
            <div class="booking-modal__header-nurse booking-modal__header-nurse--right">
                <img alt="" loading="lazy" decoding="async" data-nimg="fill" class="booking-modal__nurse-img"
                    sizes="140px" src="./assets/images/logo/logo.png"
                    style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
            </div>
        </div>
        <div class="booking-modal__body">
            <h3 class="booking-modal__section-title">Contact Details</h3>
            <form class="booking-modal__form">
                <div class="booking-modal__row">
                    <div class="booking-modal__field"><label for="patientName">Patient's Name <span
                                class="booking-modal__required">*</span></label><input id="patientName"
                            placeholder="Enter Patient's Name" required="" type="text" value="" name="patientName">
                    </div>
                    <div class="booking-modal__field"><label for="attenderName">Attender's Name <span
                                class="booking-modal__required">*</span></label><input id="attenderName"
                            placeholder="Enter Patient's Name" required="" type="text" value="" name="attenderName">
                    </div>
                </div>
                <div class="booking-modal__row">
                    <div class="booking-modal__field"><label for="patientAge">Patient's age<span
                                class="booking-modal__required">*</span></label><input id="patientAge" min="0"
                            placeholder="Enter Patient's age" required="" type="number" value="" name="patientAge">
                    </div>
                    <div class="booking-modal__field"><label for="patientGender">Patient's Gender<span
                                class="booking-modal__required">*</span></label><select id="patientGender"
                            name="patientGender" required="">
                            <option value="" disabled="">Patient's Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select></div>
                </div>
                <div class="booking-modal__row">
                    <div class="booking-modal__field"><label for="category">Category of service<span
                                class="booking-modal__required">*</span></label><select id="category" name="category"
                            required="">
                            <option value="" disabled="">Select Category of service</option>
                            <option value="home-nursing">Home Nursing Care</option>
                            <option value="elderly-care">Elderly Care</option>
                            <option value="physiotherapy">Physiotherapy</option>
                            <option value="patient-attendant">Patient Attendant</option>
                            <option value="doctor-visit">Doctor Home Visit</option>
                        </select></div>
                    <div class="booking-modal__field date-picker"><label for="time">Time<span
                                class="booking-modal__required">*</span></label><button type="button" id="time"
                            class="date-picker__trigger date-picker__trigger--placeholder" aria-haspopup="dialog"
                            aria-expanded="false">Select Time<svg stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 448 512" class="date-picker__chevron " height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z">
                                </path>
                            </svg></button></div>
                </div>
                <div class="booking-modal__field booking-modal__field--full"><label for="condition">Patient's
                        condition <span class="booking-modal__required">*</span></label><input id="condition"
                        placeholder="Enter Patient's condition" required="" type="text" value="" name="condition">
                </div>
                <div class="booking-modal__row">
                    <div class="booking-modal__field"><label for="mobile">Mobile Number <span
                                class="booking-modal__required">*</span></label><input id="mobile"
                            placeholder="Enter Mobile Number" required="" type="tel" value="" name="mobile"></div>
                    <div class="booking-modal__field"><label for="email">Email Address <span
                                class="booking-modal__required">*</span></label><input id="email"
                            placeholder="Enter Email Address" required="" type="email" value="" name="email"></div>
                </div>
                <div class="booking-modal__field booking-modal__field--full"><label for="address">Current Address
                        <span class="booking-modal__required">*</span></label><input id="address"
                        placeholder="Enter Current Address" required="" type="text" value="" name="address"></div>
                <div class="booking-modal__field booking-modal__field--full"><label for="city">City <span
                            class="booking-modal__required">*</span></label><select id="city" name="city" required="">
                        <option value="" disabled="">Service Needed In?</option>
                        <option value="chennai">Chennai</option>
                        <option value="coimbatore">Coimbatore</option>
                        <option value="hyderabad">Hyderabad</option>
                        <option value="bangalore">Bangalore</option>
                    </select></div><label class="booking-modal__checkbox"><input required="" type="checkbox"
                        name="agreed">I Agree TERMS AND CONDITIONS</label>
                <div class="booking-modal__submit-wrap"><button type="submit" class="booking-modal__submit">Submit<span
                            class="booking-modal__submit-arrow"><svg stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 320 512" height="13" width="13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                </path>
                            </svg></span></button></div>
            </form>
        </div>
    </div>
</div>