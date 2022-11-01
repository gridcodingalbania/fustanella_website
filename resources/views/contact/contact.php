<div class="xs:bg-white sm:bg-white lg:bg-[#f0f0f0] w-full">
    <div class="container">
        <div class="flex flex-col text-center items-center pt-12 pb-12">
            <p class="witter xs:text-[32px] lg:text-[55px] text-fYellow">Hello . . .</p>
            <p class="text-center xs:text-[28px] lg:text-[40px] uppercase text-headingColor cormorant xs:translate-x-6 sm:translate-x-6  lg:translate-x-12">Contact Us</p>

        </div>

        <div class="flex xs:flex-col xs:items-center sm:items-center sm:flex-col lg:flex-row xs:justify-between lg:justify-evenly pb-5">
            <div class="flex xs:mb-3 sm:mb-3 lg:mb-0 flex-row items-center border border-black xs:p-2 sm:p-2 lg:p-3 cursor-pointer hover:bg-headingColor hover:text-white transition-all make-svg-white">
                <a href="tel:<?php the_field("contact_phone_number"); ?>" class="flex flex-row items-center">

                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.04896 3.492L5.62968 0.86211C6.02167 0.462648 6.66518 0.462648 7.05717 0.86211L12.5279 6.43702C12.9095 6.82596 12.9095 7.44889 12.5279 7.83783L10.2412 10.168C9.96444 10.4501 9.89573 10.8761 10.0698 11.2308L10.1148 11.3225C12.1273 15.4242 15.4157 18.7626 19.4866 20.8369C19.8439 21.0189 20.278 20.9481 20.5588 20.6618L22.809 18.3688C23.201 17.9693 23.8445 17.9693 24.2365 18.3688L29.7072 23.9437C30.0889 24.3326 30.0889 24.9555 29.7072 25.3445L27.2363 27.8625C25.1153 30.0239 21.7163 30.266 19.3103 28.4272L12.3894 23.1376C10.6581 21.8144 9.12365 20.2519 7.83203 18.4969L2.49911 11.2509C0.754129 8.87993 0.987046 5.59319 3.04896 3.492Z" stroke="#323232" />
                    </svg>
                    <span class="ml-3 red-hat xs:text-[16px] sm:text-[16px] lg:text-[22px]"><?php the_field("contact_phone_number"); ?></span></a>
            </div>
            <div class="flex xs:mb-3 sm:mb-3 lg:mb-0 flex-row items-center border border-black xs:p-2 sm:p-2 lg:p-3 cursor-pointer hover:bg-headingColor hover:text-white transition-all make-svg-white">
                <a href="mailto:<?php the_field("contact_email"); ?>" class="flex flex-row items-center">
                    <svg width="34" height="26" viewBox="0 0 34 26" xmlns="http://www.w3.org/2000/svg" fill="none">
                        <path d="M0.583008 4.89062L15.6886 12.4434C16.2516 12.7249 16.9144 12.7249 17.4774 12.4434L32.583 4.89062" stroke="#323232" />
                        <rect x="0.583008" y="0.890625" width="32" height="24" rx="2" stroke="#323232" />
                    </svg>
                    <span class="ml-3 red-hat xs:text-[16px] sm:text-[16px] lg:text-[22px]"><?php the_field("contact_email"); ?></span></a>
            </div>
            <div class="flex xs:mb-3 sm:mb-3 lg:mb-0 flex-row items-center border border-black xs:p-2 sm:p-2 lg:p-3 cursor-pointer hover:bg-headingColor hover:text-white transition-all make-svg-white">
                <a href="https://api.whatsapp.com/send?phone=<?php the_field("contact_wp_nr_prefix"); ?>" class="flex flex-row items-center">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.2534 5.21081C23.4429 2.40031 19.6956 0.901367 15.7609 0.901367C7.5167 0.901367 0.771484 7.64659 0.771484 15.8907C0.771484 18.5139 1.52096 21.137 2.83254 23.3854L0.771484 30.8801L8.64093 28.8191C10.8893 29.9433 13.3251 30.6928 15.7609 30.6928C24.005 30.6928 30.7502 23.9475 30.7502 15.7034C30.7502 11.7687 29.0639 8.02132 26.2534 5.21081ZM22.5061 18.8886C22.1314 18.7013 20.2577 17.7644 19.883 17.7644C19.5082 17.577 19.3208 17.577 19.1334 17.9518C18.9461 18.3265 18.1967 19.076 18.0093 19.4507C17.8219 19.6381 17.6345 19.6381 17.2598 19.6381C16.885 19.4507 15.7609 19.076 14.2619 17.7644C13.1377 16.8276 12.3883 15.516 12.2009 15.1413C12.0135 14.7665 12.2009 14.5792 12.3883 14.3918C12.5756 14.2044 12.763 14.0171 12.9504 13.8297C13.1377 13.6423 13.1377 13.455 13.3251 13.2676C13.5125 13.0802 13.3251 12.8929 13.3251 12.7055C13.3251 12.5181 12.5756 10.6445 12.2009 9.89499C12.0135 9.33289 11.6388 9.33289 11.4514 9.33289C11.2641 9.33289 11.0767 9.33289 10.7019 9.33289C10.5146 9.33289 10.1398 9.33289 9.76509 9.70763C9.39035 10.0824 8.45355 11.0192 8.45355 12.8929C8.45355 14.7665 9.7651 16.4528 9.95247 16.8276C10.1398 17.0149 12.5756 20.9497 16.3229 22.4486C19.5082 23.7602 20.0703 23.3854 20.8198 23.3854C21.5693 23.3854 23.0682 22.4486 23.2555 21.6991C23.6303 20.7623 23.6303 20.0128 23.4429 20.0128C23.2556 19.076 22.8808 19.076 22.5061 18.8886Z" stroke="#323232" />
                    </svg>
                    <span class="ml-3 red-hat xs:text-[16px] sm:text-[16px] lg:text-[22px]"><?php the_field("contact_wp_nr"); ?></span>
                </a>
            </div>
        </div>

        <div class="flex xs:flex-col-reverse sm:flex-col-reverse lg:flex-row justify-around items-end pt-10 pb-10 mx-auto">
            <form id="contact-form" class="xs:w-full sm:w-full lg:w-[50%] xs:pt-5 sm:pt-5 lg:pt-0">
                <div class="flex flex-col w-4/5 mx-auto pb-5">
                    <label for="full_name" class="mb-5 mt-5 uppercase xs:text-[16px] sm:text-[16px] lg:text-[22px] cormorant">Full Name</label>
                    <input required type="text" id="full_name" placeholder="Write your name" class="xs:bg-white sm:bg-white lg:bg-[#f0f0f0] border-b border-black outline-none text-[16px]" />
                </div>
                <div class="flex flex-col w-4/5 mx-auto pb-5">
                    <label for="email" class="mb-5 mt-5 uppercase xs:text-[16px] sm:text-[16px] lg:text-[22px] cormorant">Email</label>
                    <input required type="email" id="email" placeholder="Write your e-mail" class="xs:bg-white sm:bg-white lg:bg-[#f0f0f0] border-b border-black outline-none text-[16px]" />
                </div>
                <div class="flex flex-col w-4/5 mx-auto pb-5">
                    <label for="message" class="mb-5 mt-5 uppercase xs:text-[16px] sm:text-[16px] lg:text-[22px] cormorant">Message</label>
                    <input required type="text" id="message" placeholder="Write your number" class="xs:bg-white sm:bg-white lg:bg-[#f0f0f0] border-b border-black outline-none text-[16px]" />
                </div>
                <div class="text-center items-end">
                    <button class="uppercase cormorant h-[50px] text-white cursor-pointer bg-egreen text-center w-4/5 mx-auto mt-10 hover:bg-white hover:text-egreen hover:transition-all">Send</button>
                </div>
            </form>
            <img src="<?php the_field('contact_banner'); ?>" class="xs:w-3/4 sm:w-auto lg:w-[500px] mx-auto object-cover" />
        </div>
    </div>

</div>

<div class="w-full overflow-x-hidden">
    <div class="container">
        <div class="flex-col text-center xs:hidden sm:hidden lg:flex items-center pt-12 pb-12">
            <p class="witter text-[55px] text-fYellow">You’re welcome...</p>
            <p class="text-center text-[40px] uppercase text-headingColor cormorant translate-x-12">Direction</p>
            <p class="text-center text-[22px] mt-12 red-hat"><?php the_field("contact_location"); ?></p>
        </div>
        <div class="xs:flex sm:flex lg:hidden flex-col text-center pt-12 pb-12">
            <p class=" text-[28px] text-headingColor cormorant">Direction</p>
            <p class="text-center text-[24px] text-black translate-x-12 witter">you’re welcome...</p>
            <p class="text-center text-[18px] mt-12 red-hat"><?php the_field("contact_location"); ?></p>
        </div>
    </div>

    <iframe src="<?php the_field("contact_location_url"); ?>" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>