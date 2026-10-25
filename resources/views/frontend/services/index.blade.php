@extends('frontend.master')

@section('title', 'Home | WDS USA')

@section('content')
     <div id="smooth-wrapper">
      <div id="smooth-content">
        <div class="main-broadcom">
          <div class="main-broadcom-wrapper fix style-one bg-cover" style="
                background-image: url(./assets/images/broadcom/broadcomBg1_1.png);
              ">
            <div class="social-info">
              <ul>
                <li>
                  <a href="#" class="is-x" aria-label="X">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path
                        d="M13.3621 2.14453H15.688L10.6065 7.95232L16.5845 15.8554H11.9038L8.23774 11.0623L4.04289 15.8554H1.71555L7.1507 9.64335L1.41602 2.14453H6.21555L9.52931 6.5257L13.3621 2.14453ZM12.5457 14.4633H13.8346L5.51524 3.46359H4.13219L12.5457 14.4633Z"
                        fill="white" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="#" aria-label="Instagram">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path
                        d="M9 11.25C10.2426 11.25 11.25 10.2426 11.25 9C11.25 7.75736 10.2426 6.75 9 6.75C7.75736 6.75 6.75 7.75736 6.75 9C6.75 10.2426 7.75736 11.25 9 11.25Z"
                        fill="white" />
                      <path
                        d="M12.0938 1.96875H5.90625C4.86196 1.96875 3.86044 2.38359 3.12202 3.12202C2.38359 3.86044 1.96875 4.86196 1.96875 5.90625V12.0938C1.96875 13.138 2.38359 14.1396 3.12202 14.878C3.86044 15.6164 4.86196 16.0312 5.90625 16.0312H12.0938C13.138 16.0312 14.1396 15.6164 14.878 14.878C15.6164 14.1396 16.0312 13.138 16.0312 12.0938V5.90625C16.0312 4.86196 15.6164 3.86044 14.878 3.12202C14.1396 2.38359 13.138 1.96875 12.0938 1.96875ZM9 12.375C8.33249 12.375 7.67997 12.1771 7.12495 11.8062C6.56993 11.4354 6.13735 10.9083 5.88191 10.2916C5.62646 9.67486 5.55962 8.99626 5.68985 8.34157C5.82007 7.68688 6.14151 7.08552 6.61351 6.61351C7.08552 6.14151 7.68688 5.82007 8.34157 5.68985C8.99626 5.55962 9.67486 5.62646 10.2916 5.88191C10.9083 6.13735 11.4354 6.56993 11.8062 7.12495C12.1771 7.67997 12.375 8.33249 12.375 9C12.375 9.89511 12.0194 10.7536 11.3865 11.3865C10.7536 12.0194 9.89511 12.375 9 12.375ZM12.6562 6.1875C12.4894 6.1875 12.3262 6.13802 12.1875 6.0453C12.0487 5.95259 11.9406 5.82081 11.8767 5.66664C11.8129 5.51246 11.7962 5.34281 11.8287 5.17914C11.8613 5.01547 11.9416 4.86513 12.0596 4.74713C12.1776 4.62913 12.328 4.54877 12.4916 4.51621C12.6553 4.48366 12.825 4.50037 12.9791 4.56423C13.1333 4.62809 13.2651 4.73623 13.3578 4.87499C13.4505 5.01374 13.5 5.17687 13.5 5.34375C13.5 5.56753 13.4111 5.78214 13.2529 5.94037C13.0946 6.09861 12.88 6.1875 12.6562 6.1875Z"
                        fill="white" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="#" aria-label="Dribbble">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path
                        d="M7.39183 3.15353C7.34336 3.12355 7.30442 3.0804 7.27955 3.02913C7.25468 2.97786 7.2449 2.92056 7.25136 2.86394C7.25782 2.80732 7.28025 2.7537 7.31602 2.70934C7.3518 2.66499 7.39945 2.63172 7.45343 2.61342C8.54945 2.23578 9.71575 2.10693 10.8678 2.23621C12.0198 2.3655 13.1285 2.74968 14.1136 3.36086C14.1493 3.38337 14.1798 3.41314 14.2033 3.44824C14.2267 3.48334 14.2424 3.52298 14.2495 3.56458C14.2566 3.60618 14.2549 3.6488 14.2444 3.68968C14.2339 3.73056 14.2149 3.76876 14.1887 3.80182C13.3189 4.91328 12.2523 5.85541 11.0419 6.58126C10.0642 5.20826 8.82352 4.04314 7.39183 3.15353ZM9.96922 7.14542C8.87206 5.64835 7.42869 4.43926 5.76248 3.62153C5.71476 3.59836 5.6617 3.58843 5.60884 3.5928C5.55598 3.59716 5.50526 3.61564 5.46199 3.64632C4.11312 4.61116 3.1048 5.97874 2.58189 7.55257C2.56875 7.59281 2.56426 7.63538 2.56872 7.67747C2.57318 7.7196 2.58649 7.76022 2.60776 7.79683C2.62904 7.83345 2.65781 7.86514 2.69218 7.88983C2.72656 7.91453 2.76578 7.93168 2.80725 7.94022C3.59132 8.10922 4.39099 8.1953 5.19306 8.19706C6.84264 8.19799 8.4726 7.83906 9.96922 7.14542ZM17.7667 9.15037C17.5757 7.40799 16.8032 5.78076 15.5739 4.53123C15.544 4.50079 15.5078 4.47709 15.468 4.4617C15.4281 4.44632 15.3854 4.43961 15.3428 4.44203C15.3001 4.44445 15.2584 4.45593 15.2206 4.47572C15.1828 4.4955 15.1495 4.52314 15.1232 4.55678C14.1724 5.768 13.0094 6.79633 11.691 7.59163C12.1029 8.30522 12.4438 9.05753 12.7088 9.83776C13.7851 9.54599 14.8953 9.39845 16.0104 9.39899C16.4873 9.39907 16.9638 9.42591 17.4377 9.47937C17.4818 9.48383 17.5263 9.47837 17.5681 9.46353C17.6098 9.44876 17.6478 9.42483 17.6792 9.3936C17.7107 9.36237 17.7348 9.3246 17.7499 9.28291C17.7651 9.24122 17.7708 9.19676 17.7667 9.1526V9.15037ZM13.0408 10.9908C13.2635 11.938 13.3757 12.9078 13.3751 13.8807C13.3747 14.812 13.2711 15.7404 13.0664 16.6489C13.0533 16.7045 13.0564 16.7628 13.0752 16.8167C13.0941 16.8707 13.1279 16.9181 13.1728 16.9536C13.2177 16.989 13.2717 17.0108 13.3285 17.0166C13.3854 17.0224 13.4428 17.0118 13.4938 16.9861C14.6332 16.4146 15.6158 15.5736 16.3564 14.5361C17.0969 13.4987 17.5731 12.2961 17.7434 11.0329C17.7485 10.9935 17.7458 10.9534 17.7354 10.9151C17.725 10.8768 17.7071 10.8409 17.6827 10.8095C17.6583 10.7781 17.628 10.752 17.5934 10.7324C17.5588 10.7128 17.5207 10.7003 17.4812 10.6956C15.9957 10.5044 14.4871 10.6065 13.0408 10.9961V10.9908ZM11.5655 10.2058C11.3233 9.49553 11.0115 8.81083 10.6348 8.16176C8.93675 8.97753 7.07685 9.40045 5.19306 9.39899C4.3125 9.39907 3.43435 9.30714 2.57287 9.12483C2.53131 9.11606 2.48835 9.11622 2.44685 9.1253C2.40535 9.13429 2.36623 9.15206 2.33209 9.1773C2.29794 9.2026 2.26955 9.23483 2.24876 9.27183C2.22799 9.30891 2.2153 9.34999 2.21154 9.3923C2.19602 9.5926 2.18801 9.79514 2.1875 9.99999C2.18711 11.0698 2.40701 12.1281 2.8335 13.1091C3.25999 14.0902 3.88394 14.973 4.66647 15.7024C4.69948 15.7326 4.73883 15.7551 4.78165 15.7682C4.82447 15.7813 4.86967 15.7847 4.91395 15.778C4.95823 15.7714 5.00048 15.755 5.03759 15.7299C5.0747 15.7048 5.10575 15.6718 5.12846 15.6332C6.59466 13.1454 8.86522 11.2317 11.5655 10.2081V10.2058ZM6.07122 16.404C6.05147 16.4384 6.03876 16.4765 6.03382 16.5159C6.02887 16.5554 6.03179 16.5954 6.04241 16.6336C6.05303 16.6719 6.07113 16.7078 6.09568 16.739C6.12022 16.7702 6.15072 16.7963 6.1854 16.8156C7.75637 17.6964 9.58375 18.0067 11.3574 17.6938C11.4102 17.6846 11.4594 17.6612 11.5 17.6261C11.5404 17.5911 11.5707 17.5457 11.5873 17.4948C11.9748 16.3299 12.1725 15.1104 12.1732 13.8829C12.1734 13.0373 12.0791 12.1942 11.8923 11.3694C9.43083 12.3284 7.37505 14.1064 6.07122 16.404Z"
                        fill="white" />
                    </svg>
                  </a>
                </li>

                <li>
                  <a href="#" aria-label="Facebook">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                      <path
                        d="M10.5 10.125H12.375L13.125 7.125H10.5V5.625C10.5 4.8525 10.5 4.125 12 4.125H13.125V1.605C12.8805 1.57275 11.9572 1.5 10.9822 1.5C8.946 1.5 7.5 2.74275 7.5 5.025V7.125H5.25V10.125H7.5V16.5H10.5V10.125Z"
                        fill="white" />
                    </svg>
                  </a>
                </li>
              </ul>
            </div>

            <div class="container">
              <div class="row">
                <div class="col-xl-6">
                  <div class="title">Creative solutions that work</div>

                  <div class="meta-page-link">
                    <a href="#">Home</a>
                    <span> //Services</span>
                  </div>
                </div>

                <div class="col-xl-6">
                  <div class="text">
                    At Befox, we deliver innovative digital solutions that
                    help brands thrive. From web and app development to
                    data-driven marketing,
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Text Marquee Section Start -->
        <div class="revel-text-marquee style-four">
          <div class="wrapper-rolling-text">
            <div class="rolling-text text">
              <span class="marquee-text">Branding</span>
              <span class="marquee-text">Development</span>
              <span class="marquee-text">Mobile Apps</span>
              <span class="marquee-text">eCommerce</span>
            </div>
          </div>
        </div>
        <!-- Text Marquee Section End -->

        <!-- About Section Start -->
        <div class="about-area">
          <div class="about-wrapper fix style-four mt-120 pb-120">
            <div class="container">
              <div class="row gy-4">
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="thumb">
                    <img src="./assets/images/about/aboutThumb4_1.png" alt="thumb" />
                  </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="about-card-container style-one">
                    <div class="about-card impact-card">
                      <div class="about-card__title">
                        Real impact. Real growth.<br />Befox delivers
                      </div>
                      <div class="about-card__avatars">
                        <div class="social-proof">
                          <div class="avatars">
                            <img src="./assets/images/shape/introVector3_1.png" alt="User 1" />
                            <img src="./assets/images/shape/introVactor3_2.png" alt="User 2" />
                            <img src="./assets/images/shape/introVactor3_3.png" alt="User 3" />
                            <img src="./assets/images/shape/introVactor3_4.png" alt="User 4" />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="about-card strategy-card bg-cover" style="
                          background-image: url(./assets/images/about/aboutThumb4_2.png);
                        ">
                      <div class="about-card__title">
                        Where strategy, design, motion and development meet
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-12 col-md-12">
                  <div class="stats-card-container style-two">
                    <div class="about-card retention-card">
                      <div class="about-card__title align-right">
                        Clients see remarkable gains in<br />digital
                        engagement
                      </div>
                      <div class="about-card__content">
                        <div class="stat-number">86%</div>
                        <p class="stat-label">Retention Rate</p>
                      </div>
                    </div>

                    <div class="about-card trust-card">
                      <div class="about-card__title">
                        Trusted by clients worldwide<br />for lasting results
                      </div>
                      <div class="about-card__rating">
                        <span class="rating-text">4.9/5</span>
                        <div class="stars">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                              fill="none">
                              <path
                                d="M7.9996 12.5662L4.12169 14.8593C3.95037 14.9664 3.77127 15.0122 3.58439 14.9969C3.3975 14.9816 3.23397 14.9205 3.09381 14.8135C2.95364 14.7065 2.84462 14.5729 2.76675 14.4126C2.68888 14.2524 2.67331 14.0727 2.72003 13.8733L3.74791 9.53933L0.313855 6.62708C0.158115 6.4895 0.0609338 6.33265 0.0223104 6.15654C-0.016313 5.98043 -0.0047883 5.8086 0.0568846 5.64105C0.118557 5.4735 0.212001 5.33591 0.337216 5.22829C0.46243 5.12066 0.633744 5.05187 0.851156 5.02191L5.38318 4.63208L7.13525 0.550346C7.21312 0.366898 7.33397 0.229311 7.49781 0.137586C7.66165 0.045862 7.82891 0 7.9996 0C8.17029 0 8.33756 0.045862 8.50139 0.137586C8.66523 0.229311 8.78609 0.366898 8.86396 0.550346L10.616 4.63208L15.148 5.02191C15.3661 5.05248 15.5374 5.12128 15.662 5.22829C15.7866 5.3353 15.88 5.47289 15.9423 5.64105C16.0046 5.80921 16.0164 5.98135 15.9778 6.15746C15.9392 6.33357 15.8417 6.49011 15.6853 6.62708L12.2513 9.53933L13.2792 13.8733C13.3259 14.072 13.3103 14.2518 13.2325 14.4126C13.1546 14.5735 13.0456 14.7071 12.9054 14.8135C12.7652 14.9199 12.6017 14.981 12.4148 14.9969C12.2279 15.0128 12.0488 14.967 11.8775 14.8593L7.9996 12.5662Z"
                                fill="#FF9D00" />
                            </svg>
                          </span>

                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                              fill="none">
                              <path
                                d="M7.9996 12.5662L4.12169 14.8593C3.95037 14.9664 3.77127 15.0122 3.58439 14.9969C3.3975 14.9816 3.23397 14.9205 3.09381 14.8135C2.95364 14.7065 2.84462 14.5729 2.76675 14.4126C2.68888 14.2524 2.67331 14.0727 2.72003 13.8733L3.74791 9.53933L0.313855 6.62708C0.158115 6.4895 0.0609338 6.33265 0.0223104 6.15654C-0.016313 5.98043 -0.0047883 5.8086 0.0568846 5.64105C0.118557 5.4735 0.212001 5.33591 0.337216 5.22829C0.46243 5.12066 0.633744 5.05187 0.851156 5.02191L5.38318 4.63208L7.13525 0.550346C7.21312 0.366898 7.33397 0.229311 7.49781 0.137586C7.66165 0.045862 7.82891 0 7.9996 0C8.17029 0 8.33756 0.045862 8.50139 0.137586C8.66523 0.229311 8.78609 0.366898 8.86396 0.550346L10.616 4.63208L15.148 5.02191C15.3661 5.05248 15.5374 5.12128 15.662 5.22829C15.7866 5.3353 15.88 5.47289 15.9423 5.64105C16.0046 5.80921 16.0164 5.98135 15.9778 6.15746C15.9392 6.33357 15.8417 6.49011 15.6853 6.62708L12.2513 9.53933L13.2792 13.8733C13.3259 14.072 13.3103 14.2518 13.2325 14.4126C13.1546 14.5735 13.0456 14.7071 12.9054 14.8135C12.7652 14.9199 12.6017 14.981 12.4148 14.9969C12.2279 15.0128 12.0488 14.967 11.8775 14.8593L7.9996 12.5662Z"
                                fill="#FF9D00" />
                            </svg>
                          </span>

                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                              fill="none">
                              <path
                                d="M7.9996 12.5662L4.12169 14.8593C3.95037 14.9664 3.77127 15.0122 3.58439 14.9969C3.3975 14.9816 3.23397 14.9205 3.09381 14.8135C2.95364 14.7065 2.84462 14.5729 2.76675 14.4126C2.68888 14.2524 2.67331 14.0727 2.72003 13.8733L3.74791 9.53933L0.313855 6.62708C0.158115 6.4895 0.0609338 6.33265 0.0223104 6.15654C-0.016313 5.98043 -0.0047883 5.8086 0.0568846 5.64105C0.118557 5.4735 0.212001 5.33591 0.337216 5.22829C0.46243 5.12066 0.633744 5.05187 0.851156 5.02191L5.38318 4.63208L7.13525 0.550346C7.21312 0.366898 7.33397 0.229311 7.49781 0.137586C7.66165 0.045862 7.82891 0 7.9996 0C8.17029 0 8.33756 0.045862 8.50139 0.137586C8.66523 0.229311 8.78609 0.366898 8.86396 0.550346L10.616 4.63208L15.148 5.02191C15.3661 5.05248 15.5374 5.12128 15.662 5.22829C15.7866 5.3353 15.88 5.47289 15.9423 5.64105C16.0046 5.80921 16.0164 5.98135 15.9778 6.15746C15.9392 6.33357 15.8417 6.49011 15.6853 6.62708L12.2513 9.53933L13.2792 13.8733C13.3259 14.072 13.3103 14.2518 13.2325 14.4126C13.1546 14.5735 13.0456 14.7071 12.9054 14.8135C12.7652 14.9199 12.6017 14.981 12.4148 14.9969C12.2279 15.0128 12.0488 14.967 11.8775 14.8593L7.9996 12.5662Z"
                                fill="#FF9D00" />
                            </svg>
                          </span>

                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                              fill="none">
                              <path
                                d="M7.9996 12.5662L4.12169 14.8593C3.95037 14.9664 3.77127 15.0122 3.58439 14.9969C3.3975 14.9816 3.23397 14.9205 3.09381 14.8135C2.95364 14.7065 2.84462 14.5729 2.76675 14.4126C2.68888 14.2524 2.67331 14.0727 2.72003 13.8733L3.74791 9.53933L0.313855 6.62708C0.158115 6.4895 0.0609338 6.33265 0.0223104 6.15654C-0.016313 5.98043 -0.0047883 5.8086 0.0568846 5.64105C0.118557 5.4735 0.212001 5.33591 0.337216 5.22829C0.46243 5.12066 0.633744 5.05187 0.851156 5.02191L5.38318 4.63208L7.13525 0.550346C7.21312 0.366898 7.33397 0.229311 7.49781 0.137586C7.66165 0.045862 7.82891 0 7.9996 0C8.17029 0 8.33756 0.045862 8.50139 0.137586C8.66523 0.229311 8.78609 0.366898 8.86396 0.550346L10.616 4.63208L15.148 5.02191C15.3661 5.05248 15.5374 5.12128 15.662 5.22829C15.7866 5.3353 15.88 5.47289 15.9423 5.64105C16.0046 5.80921 16.0164 5.98135 15.9778 6.15746C15.9392 6.33357 15.8417 6.49011 15.6853 6.62708L12.2513 9.53933L13.2792 13.8733C13.3259 14.072 13.3103 14.2518 13.2325 14.4126C13.1546 14.5735 13.0456 14.7071 12.9054 14.8135C12.7652 14.9199 12.6017 14.981 12.4148 14.9969C12.2279 15.0128 12.0488 14.967 11.8775 14.8593L7.9996 12.5662Z"
                                fill="#FF9D00" />
                            </svg>
                          </span>

                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                              fill="none">
                              <path
                                d="M7.9996 12.5662L4.12169 14.8593C3.95037 14.9664 3.77127 15.0122 3.58439 14.9969C3.3975 14.9816 3.23397 14.9205 3.09381 14.8135C2.95364 14.7065 2.84462 14.5729 2.76675 14.4126C2.68888 14.2524 2.67331 14.0727 2.72003 13.8733L3.74791 9.53933L0.313855 6.62708C0.158115 6.4895 0.0609338 6.33265 0.0223104 6.15654C-0.016313 5.98043 -0.0047883 5.8086 0.0568846 5.64105C0.118557 5.4735 0.212001 5.33591 0.337216 5.22829C0.46243 5.12066 0.633744 5.05187 0.851156 5.02191L5.38318 4.63208L7.13525 0.550346C7.21312 0.366898 7.33397 0.229311 7.49781 0.137586C7.66165 0.045862 7.82891 0 7.9996 0C8.17029 0 8.33756 0.045862 8.50139 0.137586C8.66523 0.229311 8.78609 0.366898 8.86396 0.550346L10.616 4.63208L15.148 5.02191C15.3661 5.05248 15.5374 5.12128 15.662 5.22829C15.7866 5.3353 15.88 5.47289 15.9423 5.64105C16.0046 5.80921 16.0164 5.98135 15.9778 6.15746C15.9392 6.33357 15.8417 6.49011 15.6853 6.62708L12.2513 9.53933L13.2792 13.8733C13.3259 14.072 13.3103 14.2518 13.2325 14.4126C13.1546 14.5735 13.0456 14.7071 12.9054 14.8135C12.7652 14.9199 12.6017 14.981 12.4148 14.9969C12.2279 15.0128 12.0488 14.967 11.8775 14.8593L7.9996 12.5662Z"
                                fill="#FF9D00" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- About Section End -->

        <!-- Service Section Start -->
        <div class="service-area mb-120">
          <div class="service-wrapper fix pb-120 pt-120 style-one fix">
            <div class="container">
              <div class="service-title title-anim">(Our services)</div>
              <div class="service-content">
                <div class="service-items hover-reveal-item">
                  <div class="service-items-wrap">
                    <div class="top-content">
                      <span>01</span>
                      <a href="service-details.html" class="title">UI/UX Design</a>
                    </div>

                    <div class="bottom-content">
                      <ul>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Smart Interfaces
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Seamless
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Modern Visuals
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="thumb" style="
                        background-image: url(./assets/images/service/serviceThumb1_1.png);
                      "></div>
                </div>

                <div class="service-items hover-reveal-item">
                  <div class="service-items-wrap">
                    <div class="top-content">
                      <span>02</span>
                      <a href="service-details.htmlz" class="title">Brand Identity</a>
                    </div>

                    <div class="bottom-content">
                      <ul>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Smart Interfaces
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Seamless
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Modern Visuals
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="thumb" style="
                        background-image: url(./assets/images/service/serviceThumb1_1.png);
                      "></div>
                </div>

                <div class="service-items hover-reveal-item">
                  <div class="service-items-wrap">
                    <div class="top-content">
                      <span>03</span>
                      <a href="service-details.html" class="title">Motion Design</a>
                    </div>

                    <div class="bottom-content">
                      <ul>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Smart Interfaces
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Seamless
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Modern Visuals
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="thumb" style="
                        background-image: url(./assets/images/service/serviceThumb1_1.png);
                      "></div>
                </div>

                <div class="service-items hover-reveal-item">
                  <div class="service-items-wrap">
                    <div class="top-content">
                      <span>04</span>
                      <a href="service-details.html" class="title">UI/UX Design</a>
                    </div>

                    <div class="bottom-content">
                      <ul>
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Art Direction
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Seamless
                        </li>

                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                            fill="none">
                            <path
                              d="M4.29289 0.707106C4.68342 0.316582 5.31658 0.316583 5.70711 0.707107L9.29289 4.29289C9.68342 4.68342 9.68342 5.31658 9.29289 5.70711L5.70711 9.29289C5.31658 9.68342 4.68342 9.68342 4.29289 9.29289L0.707106 5.70711C0.316582 5.31658 0.316583 4.68342 0.707107 4.29289L4.29289 0.707106Z"
                              fill="white" />
                          </svg>
                          Modern Visuals
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="thumb" style="
                        background-image: url(./assets/images/service/serviceThumb1_1.png);
                      "></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service Section End -->

        <!--Process  Section Start -->
        <div class="process-area">
          <div class="process-wrapper fix pb-120">
            <div class="container">
              <div class="row gy-4">
                <div class="col-xl-6">
                  <div class="left-content">
                    <div class="section-top-content style-four text-start">
                      <div class="title style-four text-start">
                        No guesswork, just a clear path from ideas results.
                      </div>
                    </div>

                    <div class="thumb">
                      <img src="./assets/images/process/processThumb1_1.png" alt="" />
                    </div>
                  </div>
                </div>

                <div class="col-xl-6">
                  <div class="right-content">
                    <div class="accordion style-four" id="accordionExample">
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>01.</span>
                            Discovery
                          </button>
                        </div>

                        <div id="collapseOne" class="accordion-collapse collapse show" role="region"
                          aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            We begin by understanding your goals, audience,
                            challenges, and business requirements. This
                            discovery phase helps us define the right
                            direction and create a clear strategy for the
                            project.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span>02.</span>
                            Design
                          </button>
                        </div>

                        <div id="collapseTwo" class="accordion-collapse collapse" role="region"
                          aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            We turn the project strategy into a thoughtful
                            visual experience. From layout and typography to
                            colors and interactions, every design element is
                            created to support your brand and provide a
                            simple, engaging user experience.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span>03.</span>
                            Development
                          </button>
                        </div>

                        <div id="collapseThree" class="accordion-collapse collapse" role="region"
                          aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Once the design is approved, our development team
                            builds a fast, responsive, and reliable digital
                            experience. We focus on clean code, strong
                            performance, accessibility, and seamless
                            functionality across modern devices.
                          </div>
                        </div>
                      </div>

                      <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <span>04.</span>
                            Launch
                          </button>
                        </div>

                        <div id="collapseFour" class="accordion-collapse collapse" role="region"
                          aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Before launch, we carefully test the final product
                            across different screen sizes and browsers. After
                            everything is verified, we deploy the project and
                            make sure it is ready to deliver a smooth
                            experience to your audience.
                          </div>
                        </div>
                      </div>
                    </div>

                    <a class="accordion-link" href="contact.html">Get In Touch</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Process  Section End -->

        <!-- Gallery Section Start -->
        <div class="gallery-area bg-black">
          <div class="gallery-wrapper fix">
            <div class="gallery-thumb style-four about__img-2">
              <img data-speed="0.2" src="./assets/images/gallery/galleryThumb4_1.png" alt="thumb" />
            </div>
          </div>
        </div>
        <!-- Gallery Section End -->

        <!-- Brand Section Start -->
        <div class="brand-area">
          <div class="brand-wrapper fix style-four fix pb-120 pt-120">
            <div class="cir">
              <img src="./assets/images/shape/brandCircal6_2.png" alt="" />
            </div>
            <div class="container">
              <div class="section-top-content style-four between-content mb-72">
                <div class="title">Collaborating with brands worldwide</div>

                <div class="right-title">
                  <p class="mb-35">
                    Brands we’ve partnered with to craft bold high-performing
                    digital experiences that elevate identity, accelerate
                    growth,
                  </p>

                  <div class="simple-btn">
                    <a href="contact.html"
                      class="gt-hover-btn bg-set-btn text-white gt-hover-btn-item gt-btn-circle-2 style-four d-inline-flex align-items-center justify-content-center">
                      <span class="gt-btn-circle-text-2">
                        <span class="text-white style-four-dot" aria-hidden="true"></span>
                        <span class="text">discover more</span>
                      </span>
                      <i class="gt-btn-circle-dot"></i>
                    </a>
                  </div>
                </div>
              </div>

              <div class="brand-card-wrap">
                <div class="brand-card-shape">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_1.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_3.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_4.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_5.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_6.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_7.png" alt="" />
                  </div>
                </div>
                <div class="brand-card">
                  <div class="thumb">
                    <img src="./assets/images/shape/brandLogo4_8.png" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Brand Section End -->

        <!-- Text Marquee Section Start -->
        <div class="revel-text-marquee style-four">
          <div class="wrapper-rolling-text fix">
            <div class="rolling-text text">
              <span class="marquee-text">Pricing Plan</span>
              <span class="marquee-text">Simple Pricing</span>
              <span class="marquee-text">Plan Selection</span>
              <span class="marquee-text">Afforda</span>
            </div>
          </div>
        </div>
        <!-- Text Marquee Section End -->

        <!--Pricing Section Start -->
        <div class="pricing-area">
          <div class="pricing-wrapper fix pt-120 pb-120">
            <div class="container">
              <div class="row gy-4">
                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="pricing-card">
                    <span class="plan-tag">Per Project</span>

                    <div class="price">$6,490<span>/project</span></div>

                    <p class="desc">
                      Plans That Start With Strategy — Marketing & SEO Built
                      Around You.
                    </p>

                    <div class="simple-btn">
                      <a href="contact.html"
                        class="bg-set-btn gt-hover-btn gt-hover-btn-item gt-btn-circle-2 style-four d-inline-flex align-items-center justify-content-center">
                        <span class="gt-btn-circle-text-2">
                          <span class="text">Choose This Plan</span>
                        </span>
                        <i class="gt-btn-circle-dot"></i>
                      </a>
                    </div>

                    <ul class="features">
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Everything in the Basic Plan
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Design of homepage + up to 4 inner pages
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Creation of custom page prototypes
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Basic analytics setup (e.g., Google Analytics)
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Setup of a basic contact form
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        SEO-optimized page structure
                      </li>
                    </ul>
                  </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6">
                  <div class="pricing-card dark">
                    <span class="plan-tag">Monthly</span>

                    <div class="price">$6,490<span>/project</span></div>

                    <p class="desc">
                      Plans That Start With Strategy — Marketing SEO Built
                      Around You.
                    </p>

                    <div class="simple-btn">
                      <a href="contact.html"
                        class="bg-set-btn gt-hover-btn gt-hover-btn-item gt-btn-circle-2 style-four d-inline-flex align-items-center justify-content-center">
                        <span class="gt-btn-circle-text-2">
                          <span class="text">Choose This Plan</span>
                        </span>
                        <i class="gt-btn-circle-dot" style="top: 399.577px; left: 159.719px"></i>
                      </a>
                    </div>

                    <ul class="features">
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Everything in the Basic Plan
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Design of homepage + up to 4 inner pages
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Creation of custom page prototypes
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Basic analytics setup (e.g., Google Analytics)
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        Setup of a basic contact form
                      </li>
                      <li class="feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                          <path
                            d="M6.64941 0.826172C6.81053 0.390958 7.4258 0.390958 7.58691 0.826172L8.9209 4.42969C9.07283 4.84011 9.39622 5.1635 9.80664 5.31543L13.4102 6.64941C13.8454 6.81053 13.8454 7.4258 13.4102 7.58691L9.80664 8.9209C9.39622 9.07283 9.07283 9.39622 8.9209 9.80664L7.58691 13.4102C7.4258 13.8454 6.81053 13.8454 6.64941 13.4102L5.31543 9.80664C5.1635 9.39622 4.84011 9.07283 4.42969 8.9209L0.826172 7.58691C0.390958 7.4258 0.390958 6.81053 0.826172 6.64941L4.42969 5.31543C4.84011 5.1635 5.1635 4.84011 5.31543 4.42969L6.64941 0.826172Z"
                            stroke="black" />
                        </svg>
                        SEO-optimized page structure
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Pricing Section End -->

     
      </div>
    </div>
@endsection