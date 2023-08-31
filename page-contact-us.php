<?php require_once('header.php'); ?>

<div class="py-16 bg-white">
    <div class="relative flex flex-col md:flex-row items-center max-w-screen-xl mx-auto">
        <div class="w-full order-1 md:order-1 md:w-1/2 pr-8">
            <h2 class="text-2xl md:text-5xl leading-[3rem] mb-2 font-gotham-bold text-blue">
                Stay Connected With Project TEACH
            </h2>
            <p class="font-gotham-light leading-7 mb-4 text-lg">
                Receive emails about upcoming trainings and new services. At this time, updates are only being sent via email.
            </p>
            <!-- <p class="font-gotham-medium text-lg mb-2 text-black">
                Contact Information
            </p>
            <ul>
                <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center gap-2 hover:text-green transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green w-6 h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                        <path d="M15 7a2 2 0 0 1 2 2" />
                        <path d="M15 3a6 6 0 0 1 6 6" />
                    </svg>
                    <a rel="noreferrer" href="tel:7168782454" title="Call Us">
                        716-878-2454
                    </a>
                </li>
                <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center gap-2 hover:text-green transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green w-6 h-6" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" />
                        <path d="M3 6l9 6l9 -6" />
                        <path d="M15 18h6" />
                        <path d="M18 15l3 3l-3 3" />
                    </svg>
                    <a rel="noreferrer" href="mailto:info@projectteachny.org" title="Mail Us">
                        info@projectteachny.org
                    </a>
                </li>
                <li class="pb-4 md:pb-2 font-gotham flex justify-center lg:justify-start items-center">
                    <svg class="w-4 h-4 mr-2" viewBox="0 0 512 512">
                        <path class="fill-current" d="M256,0C114.84,0,0,114.84,0,256S114.84,512,256,512,512,397.16,512,256,397.16,0,256,0ZM377.75,388.41a21.29,21.29,0,0,1-30.16,0L240.92,281.75a21.25,21.25,0,0,1-6.25-15.08V128a21.33,21.33,0,1,1,42.66,0V257.84L377.75,358.25A21.31,21.31,0,0,1,377.75,388.41Z"></path>
                    </svg>
                    9:00AM - 5:00PM
                </li>
            </ul> -->
        </div>
        <div class="w-full order-0 md:order-1 md:w-1/2">
            <div class="rounded-xl overflow-hidden relative w-full flex-1 aspect-[5/3] shadow-xl">
                <img class="h-full w-full object-cover" src="https://project-teach.launchpaddev.com/app/uploads/2022/03/image-20220318-130437-1.jpg">
            </div>
        </div>
    </div>
</div>

<div class="py-16">
    <div class="max-w-screen-md mx-auto">
        <!-- Hide county, fill in by address entered -->
        <form>
            <div class="space-y-12">
                <div class="border-b border-solid border-cool-gray pb-12">
                    <h2 class="text-2xl md:text-3xl mb-2 font-gotham-bold text-black">Request A Service</h2>
                    <p class="font-gotham-light leading-7 text-lg">Complete the form below to request a telephone consultation, linkage or referral, on-site core training, or to receive emails about upcoming trainings and new services.</p>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="country" class="block text-sm font-gotham-medium leading-6 text-gray-900">Type of Request</label>
                            <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 px-2 pr-10 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray focus:ring-2 focus:ring-inset focus:ring-blue sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="">Please select one</option>
                                    <option value="Telephone Consultation">Join Project TEACH Mailing List</option>
                                    <option value="Telephone Consultation">Telephone Consultation</option>
                                    <option value="Linkage or Referral">Linkage or Referral</option>
                                    <option value="Request for On-Site Training">Request for On-Site Training</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-b border-solid border-cool-gray pb-12">
                    <h2 class="text-lg font-gotham-medium leading-7 text-black">Personal Information</h2>
                    <!-- <p class="font-gotham-light leading-7 text-base">Use a permanent address where you can receive mail.</p> -->

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-gotham-medium leading-6 text-gray-900">First name</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-gotham-medium leading-6 text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-gotham-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="confirm-email" class="block text-sm font-gotham-medium leading-6 text-gray-900">Confirm Email address</label>
                            <div class="mt-2">
                                <input id="confirm-email" name="confirm-email" type="confirm-email" autocomplete="confirm-email" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="profession" class="block text-sm font-gotham-medium leading-6 text-gray-900">Profession</label>
                            <div class="mt-2">
                                <input id="profession" name="profession" type="profession" autocomplete="profession" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="border-b border-solid border-cool-gray pb-12">
                    <h2 class="text-lg font-gotham-medium leading-7 text-black">Organization Information</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="org-name" class="block text-sm font-gotham-medium leading-6 text-gray-900">Profession or Organization's Name</label>
                            <div class="mt-2">
                                <input type="text" name="org-name" id="org-name" autocomplete="org-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="street-address" class="block text-sm font-gotham-medium leading-6 text-gray-900">Address</label>
                            <div class="mt-2">
                                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="city" class="block text-sm font-gotham-medium leading-6 text-gray-900">City</label>
                            <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <!-- <div class="sm:col-span-3">
                            <label for="county" class="block text-sm font-gotham-medium leading-6 text-gray-900">County</label>
                            <div class="mt-2">
                                <select id="county" name="county" autocomplete="county-name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray focus:ring-2 focus:ring-inset focus:ring-blue sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                </select>
                            </div>
                        </div> -->


                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="region" class="block text-sm font-gotham-medium leading-6 text-gray-900">State / Province</label>
                            <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="postal-code" class="block text-sm font-gotham-medium leading-6 text-gray-900">ZIP / Postal code</label>
                            <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-gotham-medium leading-6 text-gray-900">Phone</label>
                            <div class="mt-2">
                                <input type="text" name="phone" id="phone" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-cool-gray placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="border-solid border-2 border-blue font-gotham-bold inline-block no-underline text-white rounded-full px-4 py-2 transition-all duration-300 hover:bg-transparent hover:text-blue bg-blue" title="learn more about consultations" href="/get-involved">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>

<?php require_once('footer.php'); ?>