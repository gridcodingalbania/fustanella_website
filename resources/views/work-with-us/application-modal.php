<div class="modal hidden" id="app_modal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <div class="flex flex-col">
            <div class="flex flex-row justify-end">
                <div class="cursor-pointer bg-[#D9D9D9] xs:p-4 lg:p-8" id="close_modal">
                    <svg width="23" height="24" viewBox="0 0 23 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.77156 1.27873C1.38104 0.888209 0.747871 0.888209 0.357346 1.27873C-0.033178 1.66926 -0.033178 2.30242 0.357346 2.69295L1.77156 1.27873ZM11.5253 12.4467L12.2324 13.1538C12.6229 12.7632 12.6229 12.1301 12.2324 11.7395L11.5253 12.4467ZM0.357346 22.2004C-0.033178 22.5909 -0.033178 23.2241 0.357346 23.6146C0.747871 24.0051 1.38104 24.0051 1.77156 23.6146L0.357346 22.2004ZM0.357346 2.69295L10.8182 13.1538L12.2324 11.7395L1.77156 1.27873L0.357346 2.69295ZM10.8182 11.7395L0.357346 22.2004L1.77156 23.6146L12.2324 13.1538L10.8182 11.7395Z" fill="black" />
                        <path d="M21.2792 23.6146C21.6697 24.0051 22.3029 24.0051 22.6934 23.6146C23.084 23.2241 23.084 22.5909 22.6934 22.2004L21.2792 23.6146ZM11.5255 12.4467L10.8184 11.7395C10.4279 12.1301 10.4279 12.7632 10.8184 13.1538L11.5255 12.4467ZM22.6934 2.69295C23.084 2.30242 23.084 1.66926 22.6934 1.27873C22.3029 0.88821 21.6697 0.88821 21.2792 1.27873L22.6934 2.69295ZM22.6934 22.2004L12.2326 11.7395L10.8184 13.1538L21.2792 23.6146L22.6934 22.2004ZM12.2326 13.1538L22.6934 2.69295L21.2792 1.27873L10.8184 11.7395L12.2326 13.1538Z" fill="black" />
                    </svg>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mt-5">
                <form id="application-form" enctype="multipart/form-data" class="xs:w-full sm:w-full lg:w-[90%]">
                    <div class="flex flex-col w-4/5 mx-auto xs:pb-3 lg:pb-5">
                        <label for="full_name" class="mb-5 mt-5 uppercase text-[22px] cormorant">Full Name</label>
                        <input required type="text" id="full_name" placeholder="Write your name" class="bg-gray94 border-b border-black outline-none text-[16px]" />
                    </div>
                    <div class="flex flex-col w-4/5 mx-auto xs:pb-3 lg:pb-5">
                        <label for="phone" class="mb-5 mt-5 uppercase text-[22px] cormorant">Phone</label>
                        <input required type="text" id="phone" placeholder="Write your phone" class="bg-gray94 border-b border-black outline-none text-[16px]" pattern="[0-9]+" />
                    </div>
                    <div class="flex flex-col w-4/5 mx-auto">
                        <p class="mb-5 mt-5 uppercase text-[22px] cormorant">Upload CV</p>
                        <label for="file" class="flex flex-col justify-around  w-full bg-gray-50 rounded-lg cursor-pointer hover:bg-gray-100">
                            <div class="flex flex-row items-center xs:p-4 sm:p-4 lg:p-5 h-[120px]">
                                <svg viewBox="0 0 51 41" class="xs:w-[100px] lg:w-[51px] h-[41px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M50.5048 23.2833V25.3745C50.301 26.2242 50.1676 27.0976 49.8823 27.9174C48.3262 32.3955 44.3878 35.2953 39.6801 35.4201C37.6115 35.475 35.5391 35.4338 33.4693 35.4338C33.3903 35.4338 33.3112 35.4176 33.205 35.4063V32.2471H33.7311C35.6046 32.2471 37.4781 32.2545 39.3503 32.2458C43.9358 32.2234 47.4123 28.6349 47.3395 24.0095C47.2839 20.4547 44.5607 17.1694 41.1201 16.5006C40.8298 16.4445 40.5371 16.3895 40.2593 16.2947C39.5726 16.0589 39.3046 15.4937 39.1577 14.8274C38.5735 12.1734 37.3607 9.85514 35.4774 7.90867C33.1445 5.49555 30.3188 4.03195 27.0004 3.67011C21.9456 3.11985 17.7145 4.82801 14.4084 8.71596C12.3917 11.0879 11.3197 13.8916 11.1505 17.0296C11.1357 17.2954 11.1197 17.5599 11.0962 17.8244C11.0023 18.9349 10.4552 19.454 9.35857 19.5027C7.27391 19.595 5.57456 20.4709 4.38403 22.2015C2.97491 24.2516 2.79707 26.4738 3.8925 28.706C4.98177 30.9232 6.83549 32.136 9.28077 32.2209C11.7915 32.3082 14.3084 32.2446 16.8229 32.2471H17.3774V35.435H16.897C14.4974 35.435 12.0978 35.4413 9.69819 35.4338C4.8805 35.4213 1.14218 32.3269 0.175182 27.5593C-0.794285 22.7767 2.48585 17.6473 7.20598 16.6179C7.78396 16.4919 7.97662 16.2748 8.04084 15.6709C8.80777 8.5026 14.1108 2.34002 21.0515 0.717956C27.6401 -0.821753 33.3384 0.963761 38.0289 5.86862C39.9283 7.85502 41.1966 10.2532 41.9191 12.9258C42.0216 13.3051 42.2093 13.4811 42.5823 13.6034C47.0678 15.0844 49.6637 18.2025 50.4109 22.9027C50.4319 23.0313 50.4739 23.156 50.5048 23.2833Z" fill="#D9D9D9" />
                                    <path d="M32.6532 26.2904C31.8986 27.0502 31.1811 27.7727 30.3932 28.5662C29.2607 27.4183 28.0986 26.2417 26.8821 25.0102V40.1802H23.7279V25.0913C22.5535 26.3028 21.4062 27.4857 20.2947 28.6311C19.4277 27.7565 18.7028 27.024 17.9531 26.2667C17.9926 26.223 18.0828 26.1132 18.1828 26.0121C20.0983 24.0756 22.015 22.1391 23.9329 20.2039C24.8777 19.2506 25.7002 19.2506 26.6462 20.2064C28.5518 22.1292 30.4562 24.0544 32.3605 25.9797C32.4643 26.0845 32.5631 26.1943 32.6532 26.2904Z" fill="#D9D9D9" />
                                </svg>
                                <p class="text-xs text-gray-500 dark:text-gray-400 xs:ml-3 sm:ml-4 lg:ml-4" id="file-description">Click or Drag files here to upload (.pdf, .doc & .docx)</p>
                            </div>
                            <input id="file" required type="file" class="hidden" accept="application/pdf, application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                        </label>
                    </div>
                    <input type="hidden" id="application-position" />
                    <div class="text-center items-end">
                        <button class="uppercase cormorant h-[65px] text-white cursor-pointer bg-egreen text-center w-4/5 mx-auto mt-10">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('document').ready(function () {
        $('#wWsA').css('color', 'green')
        $('#wWsA').css('borderBottom', '1px solid green')
        $('#wWsB').css('color', 'green')
    })
</script>