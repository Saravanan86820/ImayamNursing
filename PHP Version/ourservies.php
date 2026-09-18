<?php include 'includes/header.php'; ?>

<div>

            <section class="service-banner">
                <div class="service-banner__hero">
                    <div class="service-banner__hero-bg"><img alt="Our Services" decoding="async" data-nimg="fill"
                            class="service-banner__hero-img" sizes="100vw" src="./assets/images/servies.jpg"
                            style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                </div>
                <div class="service-banner__tabs-wrap"><button type="button"
                        class="service-banner__nav-btn service-banner__nav-btn--prev"
                        aria-label="Scroll services left"><svg stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 320 512" height="13" width="13"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z">
                            </path>
                        </svg></button>
                    <div class="service-banner__tabs">
                        <a class="service-banner__tab service-banner__tab--active" href="#"
                            data-service="home-nursing-care">
                            <span class="service-banner__tab-icon">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M96 128l0-57.8c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30l0 57.8-.3 0c.2 2.6 .3 5.3 .3 8l0 40c0 70.7-57.3 128-128 128s-128-57.3-128-128l0-40c0-2.7 .1-5.4 .3-8l-.3 0zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80l0-16-160 0 0 16zM111.9 327.7c10.5-3.4 21.8 .4 29.4 8.5l71 75.5c6.3 6.7 17 6.7 23.3 0l71-75.5c7.6-8.1 18.9-11.9 29.4-8.5C401 348.6 448 409.4 448 481.3c0 17-13.8 30.7-30.7 30.7L30.7 512C13.8 512 0 498.2 0 481.3c0-71.9 47-132.7 111.9-153.6zM208 48l0 16-16 0c-4.4 0-8 3.6-8 8l0 16c0 4.4 3.6 8 8 8l16 0 0 16c0 4.4 3.6 8 8 8l16 0c4.4 0 8-3.6 8-8l0-16 16 0c4.4 0 8-3.6 8-8l0-16c0-4.4-3.6-8-8-8l-16 0 0-16c0-4.4-3.6-8-8-8l-16 0c-4.4 0-8 3.6-8 8z">
                                    </path>
                                </svg>
                            </span>
                            <span class="service-banner__tab-label">Home Nursing Care</span>
                        </a>
                        <a class="service-banner__tab" href="#" data-service="elderly-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M272 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-8 187.3l47.4 57.1c11.3 13.6 31.5 15.5 45.1 4.2s15.5-31.5 4.2-45.1l-73.7-88.9c-18.2-22-45.3-34.7-73.9-34.7l-35.9 0c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9 120 480c0 17.7 14.3 32 32 32s32-14.3 32-32l0-128 16 0 0 128c0 17.7 14.3 32 32 32s32-14.3 32-32l0-244.7zM352 376c0-4.4 3.6-8 8-8s8 3.6 8 8l0 112c0 13.3 10.7 24 24 24s24-10.7 24-24l0-112c0-30.9-25.1-56-56-56s-56 25.1-56 56l0 8c0 13.3 10.7 24 24 24s24-10.7 24-24l0-8z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Elderly Care</span></a><a
                            class="service-banner__tab" href="#" data-service="tracheostomy-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M320 0c17.7 0 32 14.3 32 32l0 132.1c0 16.4 8.4 31.7 22.2 40.5l9.8 6.2 0-45.5C384 127 415 96 453.3 96c21.7 0 42.8 10.2 55.8 28.8c15.4 22.1 44.3 65.4 71 116.9c26.5 50.9 52.4 112.5 59.6 170.3c.2 1.3 .2 2.6 .2 4l0 7c0 49.1-39.8 89-89 89c-7.3 0-14.5-.9-21.6-2.7l-72.7-18.2C414 480.5 384 442.1 384 398l0-73 90.5 57.6c7.5 4.7 17.3 2.5 22.1-4.9s2.5-17.3-4.9-22.1L384 287.1l0-.4-44.1-28.1c-7.3-4.6-13.9-10.1-19.9-16.1c-5.9 6-12.6 11.5-19.9 16.1L256 286.7 161.2 347l-13.5 8.6c0 0 0 0-.1 0c-7.4 4.8-9.6 14.6-4.8 22.1c4.7 7.5 14.6 9.7 22.1 4.9l91.1-58 0 73.4c0 44.1-30 82.5-72.7 93.1l-72.7 18.2c-7.1 1.8-14.3 2.7-21.6 2.7c-49.1 0-89-39.8-89-89l0-7c0-1.3 .1-2.7 .2-4c7.2-57.9 33.1-119.4 59.6-170.3c26.8-51.5 55.6-94.8 71-116.9c13-18.6 34-28.8 55.8-28.8C225 96 256 127 256 165.3l0 45.5 9.8-6.2c13.8-8.8 22.2-24.1 22.2-40.5L288 32c0-17.7 14.3-32 32-32z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Tracheostomy Care</span></a><a
                            class="service-banner__tab" href="#" data-service="bed-ridden-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M32 32c17.7 0 32 14.3 32 32l0 256 224 0 0-160c0-17.7 14.3-32 32-32l224 0c53 0 96 43 96 96l0 224c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-32-224 0-32 0L64 416l0 32c0 17.7-14.3 32-32 32s-32-14.3-32-32L0 64C0 46.3 14.3 32 32 32zm144 96a80 80 0 1 1 0 160 80 80 0 1 1 0-160z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Bed Ridden Care</span></a><a
                            class="service-banner__tab" href="#" data-service="baby-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M152 88a72 72 0 1 1 144 0A72 72 0 1 1 152 88zM39.7 144.5c13-17.9 38-21.8 55.9-8.8L131.8 162c26.8 19.5 59.1 30 92.2 30s65.4-10.5 92.2-30l36.2-26.4c17.9-13 42.9-9 55.9 8.8s9 42.9-8.8 55.9l-36.2 26.4c-13.6 9.9-28.1 18.2-43.3 25l0 36.3-192 0 0-36.3c-15.2-6.7-29.7-15.1-43.3-25L48.5 200.3c-17.9-13-21.8-38-8.8-55.9zm89.8 184.8l60.6 53-26 37.2 24.3 24.3c15.6 15.6 15.6 40.9 0 56.6s-40.9 15.6-56.6 0l-48-48C70 438.6 68.1 417 79.2 401.1l50.2-71.8zm128.5 53l60.6-53 50.2 71.8c11.1 15.9 9.2 37.5-4.5 51.2l-48 48c-15.6 15.6-40.9 15.6-56.6 0s-15.6-40.9 0-56.6L284 419.4l-26-37.2z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Baby Care</span></a><a
                            class="service-banner__tab" href="#" data-service="diabetes-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M441 7l32 32 32 32c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15L417.9 128l55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-72-72L295 73c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l55 55L422.1 56 407 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0zM210.3 155.7l61.1-61.1c.3 .3 .6 .7 1 1l16 16 56 56 56 56 16 16c.3 .3 .6 .6 1 1l-191 191c-10.5 10.5-24.7 16.4-39.6 16.4l-88.8 0L41 505c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l57-57 0-88.8c0-14.9 5.9-29.1 16.4-39.6l43.3-43.3 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57 41.4-41.4 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Diabetes Care</span></a><a
                            class="service-banner__tab" href="#" data-service="dementia-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192l42.7 0c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0L21.3 320C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7l42.7 0C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3l-213.3 0zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352l117.3 0C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7l-330.7 0c-14.7 0-26.7-11.9-26.7-26.7z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Dementia Care</span></a><a
                            class="service-banner__tab" href="#" data-service="icu-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M320.2 243.8l-49.7 99.4c-6 12.1-23.4 11.7-28.9-.6l-56.9-126.3-30 71.7H60.6l182.5 186.5c7.1 7.3 18.6 7.3 25.7 0L451.4 288H342.3l-22.1-44.2zM473.7 73.9l-2.4-2.5c-51.5-52.6-135.8-52.6-187.4 0L256 100l-27.9-28.5c-51.5-52.7-135.9-52.7-187.4 0l-2.4 2.4C-10.4 123.7-12.5 203 31 256h102.4l35.9-86.2c5.4-12.9 23.6-13.2 29.4-.4l58.2 129.3 49-97.9c5.9-11.8 22.7-11.8 28.6 0l27.6 55.2H481c43.5-53 41.4-132.3-7.3-182.1z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">ICU Care</span></a><a
                            class="service-banner__tab" href="#" data-service="physiotherapy"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM120.5 247.2c12.4-4.7 18.7-18.5 14-30.9s-18.5-18.7-30.9-14C43.1 225.1 0 283.5 0 352c0 88.4 71.6 160 160 160c61.2 0 114.3-34.3 141.2-84.7c6.2-11.7 1.8-26.2-9.9-32.5s-26.2-1.8-32.5 9.9C240 440 202.8 464 160 464C98.1 464 48 413.9 48 352c0-47.9 30.1-88.8 72.5-104.8zM259.8 176l-1.9-9.7c-4.5-22.3-24-38.3-46.8-38.3c-30.1 0-52.7 27.5-46.8 57l23.1 115.5c6 29.9 32.2 51.4 62.8 51.4l5.1 0c.4 0 .8 0 1.3 0l94.1 0c6.7 0 12.6 4.1 15 10.4L402 459.2c6 16.1 23.8 24.6 40.1 19.1l48-16c16.8-5.6 25.8-23.7 20.2-40.5s-23.7-25.8-40.5-20.2l-18.7 6.2-25.5-68c-11.7-31.2-41.6-51.9-74.9-51.9l-68.5 0-9.6-48 63.4 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-76.2 0z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Physiotherapy</span></a><a
                            class="service-banner__tab" href="#" data-service="palliative-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M96 352L96 96c0-35.3 28.7-64 64-64l256 0c35.3 0 64 28.7 64 64l0 197.5c0 17-6.7 33.3-18.7 45.3l-58.5 58.5c-12 12-28.3 18.7-45.3 18.7L160 416c-35.3 0-64-28.7-64-64zM272 128c-8.8 0-16 7.2-16 16l0 48-48 0c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l48 0 0 48c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-48 48 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-48 0 0-48c0-8.8-7.2-16-16-16l-32 0zm24 336c13.3 0 24 10.7 24 24s-10.7 24-24 24l-160 0C60.9 512 0 451.1 0 376L0 152c0-13.3 10.7-24 24-24s24 10.7 24 24l0 224c0 48.6 39.4 88 88 88l160 0z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Palliative Care</span></a><a
                            class="service-banner__tab" href="#" data-service="doctor-visit"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M142.4 21.9c5.6 16.8-3.5 34.9-20.2 40.5L96 71.1 96 192c0 53 43 96 96 96s96-43 96-96l0-120.9-26.1-8.7c-16.8-5.6-25.8-23.7-20.2-40.5s23.7-25.8 40.5-20.2l26.1 8.7C334.4 19.1 352 43.5 352 71.1L352 192c0 77.2-54.6 141.6-127.3 156.7C231 404.6 278.4 448 336 448c61.9 0 112-50.1 112-112l0-70.7c-28.3-12.3-48-40.5-48-73.3c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3l0 70.7c0 97.2-78.8 176-176 176c-92.9 0-168.9-71.9-175.5-163.1C87.2 334.2 32 269.6 32 192L32 71.1c0-27.5 17.6-52 43.8-60.7l26.1-8.7c16.8-5.6 34.9 3.5 40.5 20.2zM480 224a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Doctor Visit</span></a><a
                            class="service-banner__tab" href="#" data-service="patient-attendant"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M488 192H336v56c0 39.7-32.3 72-72 72s-72-32.3-72-72V126.4l-64.9 39C107.8 176.9 96 197.8 96 220.2v47.3l-80 46.2C.7 322.5-4.6 342.1 4.3 357.4l80 138.6c8.8 15.3 28.4 20.5 43.7 11.7L231.4 448H368c35.3 0 64-28.7 64-64h16c17.7 0 32-14.3 32-32v-64h8c13.3 0 24-10.7 24-24v-48c0-13.3-10.7-24-24-24zm147.7-37.4L555.7 16C546.9.7 527.3-4.5 512 4.3L408.6 64H306.4c-12 0-23.7 3.4-33.9 9.7L239 94.6c-9.4 5.8-15 16.1-15 27.1V248c0 22.1 17.9 40 40 40s40-17.9 40-40v-88h184c30.9 0 56 25.1 56 56v28.5l80-46.2c15.3-8.9 20.5-28.4 11.7-43.7z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Patient Attendant</span></a><a
                            class="service-banner__tab" href="#" data-service="post-surgical-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160L0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-256c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zm96 152c0-8.8 7.2-16 16-16l32 0c8.8 0 16 7.2 16 16l0 48 48 0c8.8 0 16 7.2 16 16l0 32c0 8.8-7.2 16-16 16l-48 0 0 48c0 8.8-7.2 16-16 16l-32 0c-8.8 0-16-7.2-16-16l0-48-48 0c-8.8 0-16-7.2-16-16l0-32c0-8.8 7.2-16 16-16l48 0 0-48z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Post Surgical Care</span></a><a
                            class="service-banner__tab" href="#" data-service="cancer-care"><span
                                class="service-banner__tab-icon"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M528 224H272c-8.8 0-16 7.2-16 16v144H64V144c0-8.8-7.2-16-16-16H16c-8.8 0-16 7.2-16 16v352c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48h512v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V336c0-61.9-50.1-112-112-112zM136 96h126.1l27.6 55.2c5.9 11.8 22.7 11.8 28.6 0L368 51.8 390.1 96H512c8.8 0 16-7.2 16-16s-7.2-16-16-16H409.9L382.3 8.8C376.4-3 359.6-3 353.7 8.8L304 108.2l-19.9-39.8c-1.4-2.7-4.1-4.4-7.2-4.4H136c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8zm24 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64z">
                                    </path>
                                </svg></span><span class="service-banner__tab-label">Cancer Care</span></a>
                    </div><button type="button" class="service-banner__nav-btn service-banner__nav-btn--next"
                        aria-label="Scroll services right"><svg stroke="currentColor" fill="currentColor"
                            stroke-width="0" viewBox="0 0 320 512" height="13" width="13"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z">
                            </path>
                        </svg></button>
                </div>
            </section>

            <section class="service-content">
                <div class="service-content__container">
                    <article class="service-content__main">
                        <h1 class="service-content__title" id="serviceTitle">Home Nursing Care</h1>
                        <p class="service-content__paragraph" id="serviceParagraph1">Our trained and experienced nurses
                            bring hospital-quality
                            care into the
                            comfort of your home. From wound dressing and injections to vital sign
                            monitoring and medication management, every visit is carried out with
                            the same discipline and hygiene standards you would expect in a
                            hospital ward.</p>
                        <p class="service-content__paragraph" id="serviceParagraph2">Each patient is assessed
                            individually so that the nursing
                            plan matches
                            their exact medical needs, whether that is post-surgical recovery,
                            chronic disease management, or ongoing critical care support. Our
                            nurses work closely with the treating doctor and keep the family
                            informed of the patient's progress at every step.</p>
                        <p class="service-content__paragraph" id="serviceParagraph3">Care schedules can be arranged for
                            a few hours a day or
                            round the
                            clock, depending on the severity of the condition. Regular
                            reassessments ensure the care plan is adjusted as the patient's health
                            improves or changes.</p>
                    </article>
                    <aside class="service-content__sidebar">
                        <div class="service-content__why-card">
                            <h2 class="service-content__why-title">Why Choose Imayam?</h2>
                            <p class="service-content__why-desc">Imayam Nursing Services has been providing professional
                                home healthcare services across Chennai since 2013.</p>
                            <ul class="service-content__feature-list">
                                <li class="service-content__feature"><span
                                        class="service-content__feature-icon">?</span>
                                    <div>
                                        <h3>Affordable Packages</h3>
                                        <p>Flexible care plans for every family.</p>
                                    </div>
                                </li>
                                <li class="service-content__feature"><span
                                        class="service-content__feature-icon">?</span>
                                    <div>
                                        <h3>Quick Service</h3>
                                        <p>Caregivers available within hours.</p>
                                    </div>
                                </li>
                                <li class="service-content__feature"><span
                                        class="service-content__feature-icon">?</span>
                                    <div>
                                        <h3>24/7 Support</h3>
                                        <p>Round-the-clock assistance whenever needed.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="service-content__helpline-card">
                            <h3 class="service-content__helpline-title">Support Helpline</h3>
                            <p class="service-content__helpline-desc">Have questions? Reach out to us via our dedicated
                                support team.</p><a href="tel:+919876543210"
                                class="service-content__helpline-number"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 512 512" height="12" width="12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                    </path>
                                </svg>+91 98765 43210</a>
                        </div>
                    </aside>
                </div>
            </section>

            <section class="cta">
                <div class="cta__container">
                    <h2 class="cta__title">Your Loved Ones Deserve the Best Care</h2>
                    <p class="cta__subtitle">Whether you need professional nursing support, elderly care, physiotherapy,
                        or patient attendants, Imayam Nursing Services is here to help.</p>
                    <div class="cta__actions"><button type="button" class="js-book-btn cta__btn-primary">Book a Free
                            Consultation
                            Today<span class="cta__btn-primary-arrow"><svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 320 512" height="14" width="14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                    </path>
                                </svg></span></button><a class="cta__btn-outline" href="contact.php"><svg
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="13" width="13" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                </path>
                            </svg>Request Callback</a></div>
                </div>
            </section>

            <section class="contact ">
                <div class="contact__container">
                    <div class="contact__info">
                        <h2 class="contact__info-title">We're Here to Help You</h2>
                        <p class="contact__info-desc">Have questions or need assistance? Our care team is ready to
                            support you 24/7.</p>
                        <ul class="contact__info-list">
                            <li class="contact__info-item"><span class="contact__info-icon"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                        </path>
                                    </svg></span>
                                <div class="contact__info-text">
                                    <h3>Call Us</h3>
                                    <p>+91 91766 35000 &nbsp;|&nbsp; +91 91766 35000</p>
                                </div>
                            </li>
                            <li class="contact__info-item"><span class="contact__info-icon"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48L48 64zM0 176L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-208L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                        </path>
                                    </svg></span>
                                <div class="contact__info-text">
                                    <h3>Email Us</h3>
                                    <p><a
                                            href="mailto:imayamnursingservices@gmail.com">imayamnursingservices@gmail.com</a>
                                    </p>
                                </div>
                            </li>
                            <li class="contact__info-item"><span class="contact__info-icon"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                        </path>
                                    </svg></span>
                                <div class="contact__info-text">
                                    <h3>Our Location</h3>
                                    <p>Old No. 364/1, New No. 641/1 P.H.Road, Homecare International Building Basement,
                                        Near Ampa Skywalk, Aminjikarai, Chennai - 600029, Tamil Nadu, India</p>
                                </div>
                            </li>
                            <li class="contact__info-item"><span class="contact__info-icon"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                                        width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                                        </path>
                                    </svg></span>
                                <div class="contact__info-text">
                                    <h3>Working Hours</h3>
                                    <p>24 Hours / 7 Days a Week — Emergency Services Available</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form-panel">
                        <div class="contact__form-header"><span class="contact__form-icon"><svg stroke="currentColor"
                                    fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M256 448c141.4 0 256-93.1 256-208S397.4 32 256 32S0 125.1 0 240c0 45.1 17.7 86.8 47.7 120.9c-1.9 24.5-11.4 46.3-21.4 62.9c-5.5 9.2-11.1 16.6-15.2 21.6c-2.1 2.5-3.7 4.4-4.9 5.7c-.6 .6-1 1.1-1.3 1.4l-.3 .3c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0s0 0 0 0c-4.6 4.6-5.9 11.4-3.4 17.4c2.5 6 8.3 9.9 14.8 9.9c28.7 0 57.6-8.9 81.6-19.3c22.9-10 42.4-21.9 54.3-30.6c31.8 11.5 67 17.9 104.1 17.9zM128 208a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 0a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm96 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0z">
                                    </path>
                                </svg></span>
                            <div>
                                <h2 class="contact__form-title">Enquire Now</h2>
                                <p class="contact__form-subtitle">We will get back to you as soon as possible.</p>
                            </div>
                        </div>
                        <form class="contact__form">
                            <div class="contact__form-row">
                                <div class="contact__form-field"><label for="name">Your Name <span
                                            class="contact__required">*</span></label><input id="name" type="text"
                                        placeholder="Enter Your Name" required="" name="name" value=""></div>
                                <div class="contact__form-field"><label for="mobile">Mobile Number <span
                                            class="contact__required">*</span></label><input id="mobile" type="tel"
                                        placeholder="Enter Mobile Number" required="" name="mobile" value=""></div>
                            </div>
                            <div class="contact__form-row">
                                <div class="contact__form-field"><label for="email">Email Address <span
                                            class="contact__required">*</span></label><input id="email" type="email"
                                        placeholder="Select Email Address" required="" name="email" value=""></div>
                                <div class="contact__form-field"><label for="service">Service Required <span
                                            class="contact__required">*</span></label><select id="service"
                                        name="service" required="">
                                        <option value="" disabled="" selected="">Select Service</option>
                                        <option value="home-nursing">Home Nursing Care</option>
                                        <option value="elderly-care">Elderly Care</option>
                                        <option value="physiotherapy">Physiotherapy</option>
                                        <option value="patient-attendant">Patient Attendant</option>
                                        <option value="doctor-visit">Doctor Home Visit</option>
                                    </select></div>
                            </div>
                            <div class="contact__form-field contact__form-field--full"><label
                                    for="message">Message</label><input id="message" type="text"
                                    placeholder="Type your message here.." name="message" value=""></div><button
                                type="submit" class="contact__submit">Submit<span class="contact__submit-arrow"><svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                                        height="13" width="13" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z">
                                        </path>
                                    </svg></span></button>
                        </form>
                    </div>
                </div>
            </section>

            <section class="faq">
                <div class="faq__container">
                    <div class="faq__header">
                        <h2 class="faq__title">Frequently Asked Questions</h2>
                        <p class="faq__subtitle">Find answers to common questions about our hospital services,
                            appointments, and patient care.</p>
                    </div>
                    <div class="faq__grid">
                        <div class="faq__media"><img alt="Nurse caring for a patient" loading="lazy" decoding="async"
                                data-nimg="fill" class="faq__img"
                                style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;color:transparent"
                                sizes="(max-width: 900px) 100vw, 45vw" src="./assets/images/faq_home1.jpg"></div>
                        <div class="faq__list">

                            <!-- FAQ 1 -->
                            <div class="faq__item">
                                <input type="checkbox" id="faq-1" class="faq__checkbox" checked>

                                <label for="faq-1" class="faq__question">
                                    <span class="faq__question-left">
                                        <span class="faq__question-icon">?</span>
                                        <span class="faq__question-text">What services do you provide?</span>
                                    </span>

                                    <span class="faq__toggle-icon">
                                        <span class="plus">+</span>
                                        <span class="minus">−</span>
                                    </span>
                                </label>

                                <div class="faq__answer">
                                    <p>
                                        At Imayam Nursing Services, we offer a wide range of professional
                                        home healthcare services designed to meet the needs of patients,
                                        seniors, and families in the comfort of their homes.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 2 -->
                            <div class="faq__item">
                                <input type="checkbox" id="faq-2" class="faq__checkbox">

                                <label for="faq-2" class="faq__question">
                                    <span class="faq__question-left">
                                        <span class="faq__question-icon">?</span>
                                        <span class="faq__question-text">How quickly can care start?</span>
                                    </span>

                                    <span class="faq__toggle-icon">
                                        <span class="plus">+</span>
                                        <span class="minus">−</span>
                                    </span>
                                </label>

                                <div class="faq__answer">
                                    <p>
                                        Care can typically begin based on your requirements and caregiver
                                        availability. Contact Imayam Nursing Services to discuss your
                                        preferred start date and care schedule.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 3 -->
                            <div class="faq__item">
                                <input type="checkbox" id="faq-3" class="faq__checkbox">

                                <label for="faq-3" class="faq__question">
                                    <span class="faq__question-left">
                                        <span class="faq__question-icon">?</span>
                                        <span class="faq__question-text">Are caregivers verified?</span>
                                    </span>

                                    <span class="faq__toggle-icon">
                                        <span class="plus">+</span>
                                        <span class="minus">−</span>
                                    </span>
                                </label>

                                <div class="faq__answer">
                                    <p>
                                        Yes. Our caregivers are screened and selected according to our
                                        service requirements to help provide safe and reliable home care.
                                    </p>
                                </div>
                            </div>


                            <!-- FAQ 4 -->
                            <div class="faq__item">
                                <input type="checkbox" id="faq-4" class="faq__checkbox">

                                <label for="faq-4" class="faq__question">
                                    <span class="faq__question-left">
                                        <span class="faq__question-icon">?</span>
                                        <span class="faq__question-text">Do you provide night duty nurses?</span>
                                    </span>

                                    <span class="faq__toggle-icon">
                                        <span class="plus">+</span>
                                        <span class="minus">−</span>
                                    </span>
                                </label>

                                <div class="faq__answer">
                                    <p>
                                        Yes, night-duty nursing and caregiver services can be arranged
                                        according to the patient's needs and required schedule.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function () {

            const tabs = document.querySelectorAll(".service-banner__tab");

            const title = document.getElementById("serviceTitle");
            const paragraph1 = document.getElementById("serviceParagraph1");
            const paragraph2 = document.getElementById("serviceParagraph2");
            const paragraph3 = document.getElementById("serviceParagraph3");

            const services = {

                "home-nursing-care": {
                    title: "Home Nursing Care",
                    paragraph1: "Our trained and experienced nurses bring hospital-quality care into the comfort of your home. From wound dressing and injections to vital sign monitoring and medication management, every visit is carried out with the same discipline and hygiene standards you would expect in a hospital ward.",
                    paragraph2: "Each patient is assessed individually so that the nursing plan matches their exact medical needs, whether that is post-surgical recovery, chronic disease management, or ongoing critical care support. Our nurses work closely with the treating doctor and keep the family informed of the patient's progress at every step.",
                    paragraph3: "Care schedules can be arranged for a few hours a day or round the clock, depending on the severity of the condition. Regular reassessments ensure the care plan is adjusted as the patient's health improves or changes."
                },

                "elderly-care": {
                    title: "Elderly Care",
                    paragraph1: "Growing older often brings challenges with mobility, memory, and daily self-care. Our elderly care attendants provide compassionate, dignified support with bathing, dressing, feeding, medication reminders, and companionship, allowing seniors to stay safe and comfortable at home.",
                    paragraph2: "We match every family with a caregiver suited to the senior's personality and needs, and supervisors check in regularly to make sure the standard of care stays consistent. Mobility assistance and light physiotherapy exercises are also included to help maintain strength and independence.",
                    paragraph3: "Beyond physical care, our caregivers offer companionship that helps reduce loneliness and supports emotional well-being, an essential part of healthy ageing."
                },

                "tracheostomy-care": {
                    title: "Tracheostomy Care",
                    paragraph1: "Our trained caregivers provide professional tracheostomy care at home with attention to hygiene, safety, and patient comfort.",
                    paragraph2: "Care includes routine monitoring and support according to the patient's prescribed care plan.",
                    paragraph3: "Our team works closely with the patient's family and healthcare professionals to maintain safe and consistent care."
                },

                "bed-ridden-care": {
                    title: "Bed Ridden Care",
                    paragraph1: "Our bed-ridden care services provide dedicated support for patients who require extended care and assistance at home.",
                    paragraph2: "Caregivers assist with personal hygiene, repositioning, feeding, medication reminders, and other daily care requirements.",
                    paragraph3: "The care plan can be adjusted according to the patient's condition and changing needs."
                },

                "baby-care": {
                    title: "Baby Care",
                    paragraph1: "Our baby care services provide reliable support for families who need professional assistance with newborn and infant care.",
                    paragraph2: "Our caregivers help families with daily baby-care routines while maintaining a safe, clean, and comfortable environment.",
                    paragraph3: "Care schedules can be arranged according to the family's requirements."
                },

                "diabetes-care": {
                    title: "Diabetes Care",
                    paragraph1: "Our diabetes care services provide professional support for patients managing diabetes at home.",
                    paragraph2: "Care can include monitoring support, medication reminders, diet-related assistance, and observation of the patient's overall condition.",
                    paragraph3: "Our team follows the care plan provided by the treating healthcare professional."
                },

                "dementia-care": {
                    title: "Dementia Care",
                    paragraph1: "Our dementia care services provide patient and compassionate support for individuals living with dementia.",
                    paragraph2: "Caregivers provide assistance with daily routines, personal care, companionship, and safety while maintaining a familiar home environment.",
                    paragraph3: "Care plans are arranged according to the patient's individual needs and family requirements."
                },

                "icu-care": {
                    title: "ICU Care",
                    paragraph1: "Our ICU care services provide specialized home support for patients who require close monitoring and professional nursing assistance.",
                    paragraph2: "Our trained nursing team follows the patient's prescribed care plan and coordinates with the treating healthcare professionals.",
                    paragraph3: "Care can be arranged based on the patient's condition and required level of support."
                },

                "physiotherapy": {
                    title: "Physiotherapy",
                    paragraph1: "Our physiotherapy services bring professional rehabilitation support directly to the patient's home.",
                    paragraph2: "Treatment plans are designed according to the patient's condition, mobility, recovery goals, and healthcare requirements.",
                    paragraph3: "Regular sessions can help patients work toward improved mobility, strength, and daily function."
                },

                "palliative-care": {
                    title: "Palliative Care",
                    paragraph1: "Our palliative care services focus on providing comfort and supportive care for patients with serious or long-term conditions.",
                    paragraph2: "Our caregivers support patients with daily activities and work according to the care plan provided by healthcare professionals.",
                    paragraph3: "We also provide compassionate support to families during the care journey."
                },

                "doctor-visit": {
                    title: "Doctor Visit",
                    paragraph1: "Our doctor home visit service provides convenient medical consultation at the patient's home.",
                    paragraph2: "Home visits can be arranged for patients who may find it difficult or inconvenient to travel to a clinic or hospital.",
                    paragraph3: "The doctor assesses the patient and provides appropriate medical guidance based on the patient's condition."
                },

                "patient-attendant": {
                    title: "Patient Attendant",
                    paragraph1: "Our patient attendants provide day-to-day support for patients who need assistance at home.",
                    paragraph2: "Attendants can assist with personal care, mobility, meals, basic daily activities, and companionship.",
                    paragraph3: "Care schedules can be arranged based on the patient's requirements."
                },

                "post-surgical-care": {
                    title: "Post Surgical Care",
                    paragraph1: "Our post-surgical care services help patients recover comfortably and safely at home after surgery.",
                    paragraph2: "Our caregivers provide assistance with daily activities and follow the post-operative care instructions provided by the healthcare team.",
                    paragraph3: "Regular support helps families manage the patient's recovery at home."
                },

                "cancer-care": {
                    title: "Cancer Care",
                    paragraph1: "Our cancer care services provide compassionate home support for patients undergoing cancer treatment or recovery.",
                    paragraph2: "Our caregivers assist with daily activities and provide supportive care according to the patient's prescribed care plan.",
                    paragraph3: "We focus on patient comfort, dignity, and consistent support for both patients and families."
                }

            };


            tabs.forEach(function (tab) {

                tab.addEventListener("click", function (event) {

                    event.preventDefault();

                    const serviceName = this.dataset.service;
                    const service = services[serviceName];

                    if (!service) return;

                    // Change active tab
                    tabs.forEach(function (item) {
                        item.classList.remove("service-banner__tab--active");
                    });

                    this.classList.add("service-banner__tab--active");

                    // Change content
                    title.textContent = service.title;
                    paragraph1.textContent = service.paragraph1;
                    paragraph2.textContent = service.paragraph2;
                    paragraph3.textContent = service.paragraph3;

                });

            });

        });
    </script>
        

        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabsWrap = document.querySelector('.service-banner__tabs');
            const prevBtn = document.querySelector('.service-banner__nav-btn--prev');
            const nextBtn = document.querySelector('.service-banner__nav-btn--next');

            if (!tabsWrap || !prevBtn || !nextBtn) return;

            const SCROLL_STEP = 240;

            const scrollTabs = (direction) => {
                tabsWrap.scrollBy({
                    left: direction * SCROLL_STEP,
                    behavior: 'smooth'
                });
            };

            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                scrollTabs(-1); // move left
            });

            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                scrollTabs(1);  // move right
            });

            const updateArrows = () => {
                const maxScroll = tabsWrap.scrollWidth - tabsWrap.clientWidth;
                prevBtn.disabled = tabsWrap.scrollLeft <= 0;
                nextBtn.disabled = tabsWrap.scrollLeft >= maxScroll - 1;
            };

            tabsWrap.addEventListener('scroll', updateArrows, { passive: true });
            window.addEventListener('resize', updateArrows);
            updateArrows();
        });
    </script>

<?php include 'includes/footer.php'; ?>