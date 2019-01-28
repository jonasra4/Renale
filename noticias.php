<?php
    $page_title = "Blog";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600" rel="stylesheet">

    <!-- Icon da aba -->
    <link rel="shortcut icon" href="img/icones/icon-aba.png">

    <title>Renale - Nefrologia e Hemodiálise </title>

    <style>
        hr {
            margin-top: 0rem;
            margin-bottom: 2rem;
            border: 0;
            border-top: 1px solid #fbfbfb;
        }
        
        h2#titulo:hover,
        h2#titulo:focus {
          color: #cb9b77;
          text-decoration: none;
          cursor: pointer;
        }
    </style>

  </head>
  <body id="inicio">

    <nav class="navbar navbar-expand-md  efeito-navbar-off">
      <div class="container">
          <a class="navbar-brand" href="index.html"> <svg width="122" height="46" viewBox="0 0 122 46" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M60.0507 25.6136C59.772 25.6136 59.599 25.6232 59.551 25.6328C59.4069 25.6809 59.3396 25.8154 59.3396 26.0364V31.1489C59.3396 31.2738 59.2723 31.3411 59.1474 31.3411H57.9558C57.8309 31.3411 57.7636 31.2738 57.7636 31.1489V21.5583C57.7636 21.0297 57.7539 20.6453 57.7443 20.4051C57.7155 20.0495 57.6579 19.7996 57.5714 19.6555C57.456 19.4633 57.235 19.3479 56.9179 19.3095C56.7738 19.2999 56.62 19.2807 56.4566 19.2519C56.2933 19.223 56.2068 19.1461 56.2068 19.002C56.2068 18.8098 56.399 18.7041 56.7834 18.6753C57.062 18.6753 57.3504 18.6657 57.629 18.656C58.4843 18.6176 59.4838 18.5984 60.6081 18.5984C63.8082 18.5984 65.413 19.6843 65.413 21.8658C65.413 23.3361 64.6155 24.4124 63.0106 25.0755C63.0009 25.1139 62.9914 25.1524 62.9914 25.1908C62.9914 25.3927 63.6256 26.4305 64.8845 28.2947C66.1435 30.1591 66.7776 31.1201 66.7776 31.1874C66.7776 31.2931 66.7104 31.3411 66.5662 31.3411H65.0863C65.0383 31.3411 64.9903 31.3123 64.9422 31.2643C64.8942 31.2162 64.577 30.7357 63.9716 29.8227C63.4623 29.0156 62.6742 27.8143 61.6076 26.2287C61.4154 25.95 61.1943 25.7674 60.9348 25.6905C60.7522 25.6425 60.4639 25.6136 60.0507 25.6136V25.6136ZM59.3396 19.8092V24.3067C59.3396 24.6046 59.3589 24.816 59.3972 24.9409C59.5798 25.0082 60.0219 25.037 60.7234 25.037C62.6839 25.037 63.6641 24.076 63.6641 22.154C63.6641 21.2411 63.3854 20.5204 62.8184 19.9919C62.2514 19.4633 61.5115 19.1942 60.5889 19.1942C59.8874 19.1942 59.4838 19.2615 59.3972 19.4057C59.3589 19.4729 59.3396 19.6074 59.3396 19.8092V19.8092ZM69.257 31.3411C69.1321 31.3411 69.0648 31.2738 69.0648 31.1489L69.0841 20.578C69.0841 20.1456 69.0264 19.8381 68.9111 19.6555C68.7862 19.4248 68.5171 19.2615 68.1231 19.1749C67.9789 19.1461 67.8444 19.1173 67.7003 19.0885C67.5561 19.0597 67.4888 18.9828 67.4888 18.8675C67.4888 18.6849 67.5561 18.5984 67.7003 18.5984C67.9213 18.5984 68.248 18.608 68.6997 18.6272C69.1514 18.6464 69.4876 18.656 69.7183 18.656H74.1389C74.331 18.656 74.629 18.6464 75.0325 18.6369C75.4362 18.6272 75.7437 18.6176 75.9455 18.6176C76.032 18.6176 76.0993 18.6753 76.1474 18.781C76.1954 18.8867 76.2434 19.2519 76.3011 19.8573C76.3587 20.4627 76.3875 20.8568 76.3875 21.0393C76.3875 21.1931 76.3011 21.2699 76.1377 21.2699C76.0128 21.2699 75.9263 21.2027 75.8783 21.0586C75.8302 20.9144 75.7918 20.7798 75.7534 20.6549C75.5131 19.9534 75.0806 19.5209 74.4656 19.3672C74.1677 19.2903 73.6199 19.2519 72.8127 19.2519H71.1021C70.8811 19.2519 70.7466 19.2999 70.6985 19.4057C70.6601 19.4537 70.6408 19.6074 70.6408 19.8669V23.8647C70.6408 24.1337 70.6696 24.2875 70.737 24.3355C70.8043 24.3836 70.9772 24.4028 71.2751 24.4028H74.9076C75.0325 24.4028 75.0998 24.4893 75.0998 24.6718C75.0998 24.941 75.023 25.0755 74.8692 25.0755H71.2751C70.9964 25.0755 70.8234 25.0947 70.7754 25.1331C70.6889 25.1812 70.6408 25.3349 70.6408 25.5944V28.4197C70.6408 29.4191 70.7562 30.0438 70.9964 30.2937C71.2367 30.5435 72.9761 30.6685 76.2146 30.6685C76.6375 30.6685 76.7913 30.6588 76.6759 30.6492C76.8777 30.6781 76.9834 30.7549 76.9834 30.8799C76.9834 30.9567 76.9545 31.0528 76.8873 31.1681C76.8201 31.2835 76.7528 31.3411 76.6759 31.3411H69.257ZM89.5531 22.7307V28.0738C89.5531 29.0636 89.5628 29.842 89.5724 30.4186C89.5724 30.5243 89.582 30.6781 89.5916 30.8895C89.6012 31.1008 89.6108 31.2643 89.6108 31.3796C89.6108 31.5429 89.5243 31.6295 89.3417 31.6295C89.2745 31.6295 89.2264 31.6006 89.188 31.5526C89.0342 31.3604 88.8036 31.0817 88.4961 30.7069C88.1117 30.2552 87.5447 29.6017 86.7855 28.7464L82.3265 23.6724C81.8364 23.0862 81.0964 22.2213 80.097 21.0778H80.0586C79.9913 21.3469 79.9624 21.7601 79.9624 22.327V31.1489C79.9624 31.2738 79.7511 31.3411 79.3282 31.3411C79.2033 31.3411 79.136 31.2738 79.136 31.1489L79.1745 20.9625C79.1745 20.453 79.0976 20.0687 78.9438 19.8285C78.7804 19.5209 78.4633 19.3191 78.0021 19.2134C77.8483 19.1846 77.6177 19.1461 77.3101 19.0981C77.1948 19.0597 77.1371 18.9828 77.1371 18.8675C77.1371 18.7233 77.2045 18.656 77.3294 18.656H79.7895C80.1354 18.656 80.3373 18.6849 80.3853 18.7329C80.6064 19.0116 80.8946 19.3864 81.2502 19.8477C81.7595 20.53 82.5475 21.5198 83.6143 22.8268C84.7194 24.0856 86.3915 25.9403 88.6499 28.4005H88.6691C88.7363 28.2564 88.7652 27.9873 88.7652 27.5933V18.8098C88.7652 18.6849 88.8324 18.6176 88.9573 18.6176C89.188 18.6176 89.5339 18.6272 90.0049 18.6369C90.4757 18.6464 90.8313 18.656 91.0715 18.656C91.2157 18.656 91.283 18.7233 91.283 18.8675C91.283 18.9828 91.0715 19.0885 90.6487 19.1749C90.1874 19.2615 89.9183 19.3768 89.8414 19.5209C89.6493 19.8669 89.5531 20.9336 89.5531 22.7307V22.7307ZM97.9715 26.4017H94.9348C94.7137 26.4017 94.5695 26.44 94.5023 26.5074C94.435 26.5747 94.3581 26.7284 94.2812 26.959C94.2524 27.0263 93.8969 27.9969 93.205 29.8805C93.0801 30.236 92.9071 30.6781 92.686 31.2066C92.6476 31.2931 92.3881 31.3411 91.898 31.3411C91.7539 31.3411 91.6866 31.2835 91.6866 31.1681C92.9551 27.8912 94.3293 24.3163 95.8188 20.4435C96.0014 19.9726 96.1168 19.5594 96.1648 19.2134C96.1648 19.1366 96.2033 19.0789 96.2801 19.0404C96.5877 18.8579 96.8568 18.656 97.0874 18.4254C97.1354 18.3774 97.1835 18.3486 97.2219 18.3486C97.3276 18.3486 97.4237 18.4927 97.5294 18.7713C97.5774 18.954 97.6351 19.1269 97.6832 19.3095C97.7985 19.6939 98.5192 21.7985 99.855 25.6328C101.133 29.2942 101.777 31.1393 101.777 31.1681C101.777 31.2835 101.71 31.3411 101.585 31.3411H100.22C100.134 31.3411 100.076 31.2931 100.047 31.2066L98.625 26.8821C98.5192 26.565 98.3079 26.4017 97.9715 26.4017V26.4017ZM96.53 20.6933H96.4915C96.3666 20.924 96.0399 21.7504 95.5209 23.1631C95.002 24.5758 94.7425 25.3542 94.7425 25.4791C94.7425 25.5847 94.8386 25.6328 95.0309 25.6328H97.664C97.9619 25.6328 98.106 25.5656 98.106 25.4215C98.106 25.2965 97.8753 24.5277 97.4045 23.1342C96.9336 21.7409 96.6453 20.924 96.53 20.6933V20.6933ZM104.237 31.3411C104.112 31.3411 104.045 31.2738 104.045 31.1489V20.7126C104.045 20.1648 103.997 19.7996 103.891 19.617C103.737 19.3768 103.411 19.2134 102.911 19.1366C102.767 19.1366 102.632 19.1269 102.488 19.1173C102.306 19.0789 102.219 19.002 102.219 18.8867C102.219 18.7425 102.286 18.6657 102.43 18.656C102.315 18.6657 102.671 18.6753 103.507 18.6753C103.728 18.6753 104.045 18.6657 104.468 18.656C104.891 18.656 105.208 18.656 105.429 18.656C105.554 18.656 105.621 18.7233 105.621 18.8482V28.2276C105.621 29.3326 105.755 30.0246 106.034 30.3129C106.313 30.6011 107.005 30.7453 108.12 30.7453C108.475 30.7453 109.013 30.7453 109.734 30.7453C110.455 30.7357 110.993 30.7261 111.348 30.7261C111.473 30.7261 111.541 30.7934 111.541 30.9183C111.541 30.9952 111.512 31.0817 111.454 31.1874C111.397 31.2931 111.329 31.3411 111.252 31.3411H104.237ZM113.54 31.3411C113.415 31.3411 113.347 31.2738 113.347 31.1489L113.367 20.578C113.367 20.1456 113.309 19.8381 113.194 19.6555C113.069 19.4248 112.8 19.2615 112.406 19.1749C112.261 19.1461 112.127 19.1173 111.983 19.0885C111.839 19.0597 111.771 18.9828 111.771 18.8675C111.771 18.6849 111.839 18.5984 111.983 18.5984C112.204 18.5984 112.53 18.608 112.982 18.6272C113.434 18.6464 113.77 18.656 114.001 18.656H118.421C118.614 18.656 118.911 18.6464 119.315 18.6369C119.719 18.6272 120.026 18.6176 120.228 18.6176C120.314 18.6176 120.382 18.6753 120.43 18.781C120.478 18.8867 120.526 19.2519 120.584 19.8573C120.641 20.4627 120.67 20.8568 120.67 21.0393C120.67 21.1931 120.584 21.2699 120.42 21.2699C120.295 21.2699 120.209 21.2027 120.161 21.0586C120.113 20.9144 120.074 20.7798 120.036 20.6549C119.796 19.9534 119.363 19.5209 118.748 19.3672C118.45 19.2903 117.902 19.2519 117.095 19.2519H115.385C115.164 19.2519 115.029 19.2999 114.981 19.4057C114.943 19.4537 114.923 19.6074 114.923 19.8669V23.8647C114.923 24.1337 114.952 24.2875 115.019 24.3355C115.087 24.3836 115.26 24.4028 115.558 24.4028H119.19C119.315 24.4028 119.382 24.4893 119.382 24.6718C119.382 24.941 119.305 25.0755 119.152 25.0755H115.558C115.279 25.0755 115.106 25.0947 115.058 25.1331C114.971 25.1812 114.923 25.3349 114.923 25.5944V28.4197C114.923 29.4191 115.039 30.0438 115.279 30.2937C115.519 30.5435 117.259 30.6685 120.497 30.6685C120.92 30.6685 121.074 30.6588 120.958 30.6492C121.16 30.6781 121.266 30.7549 121.266 30.8799C121.266 30.9567 121.237 31.0528 121.17 31.1681C121.102 31.2835 121.035 31.3411 120.958 31.3411H113.54Z" fill="white"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M23.347 0.504639C35.7351 0.504639 45.8389 10.6085 45.8389 22.9966C45.8389 35.3847 35.7351 45.4885 23.347 45.4885C10.9588 45.4885 0.85498 35.3847 0.85498 22.9966C0.85498 10.6085 10.9588 0.504639 23.347 0.504639V0.504639Z" fill="#005088"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M32.1951 34.0548C37.3714 27.6315 37.3406 20.0589 32.1951 14.516Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.6127 21.8979C14.271 22.7197 14.5272 23.381 14.5272 24.2205C14.5272 25.0597 14.271 25.7212 13.6127 26.5429C12.2528 28.2391 11.993 30.444 12.6705 32.3676C12.9173 33.0684 13.2889 33.7322 13.777 34.3202C14.085 34.6913 14.4394 35.0327 14.8385 35.3339C17.5068 37.3491 21.1214 36.6811 23.5103 34.3687C21.645 32.1665 21.436 28.8744 23.3054 26.5429C23.9637 25.7212 24.2196 25.0597 24.2196 24.2205C24.2196 23.381 23.9637 22.7197 23.3054 21.8979C21.436 19.5663 21.645 16.2743 23.5103 14.072C21.1213 11.7597 17.5068 11.0915 14.8385 13.1067C14.4394 13.408 14.085 13.7494 13.777 14.1205C13.2889 14.7085 12.9173 15.3721 12.6705 16.0731C11.993 17.9967 12.2528 20.2015 13.6127 21.8979V21.8979Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M24.7054 20.5585C24.0571 19.7499 23.7727 18.7208 23.9051 17.6602C24.0453 16.5362 24.6451 15.4994 25.5512 14.8151C26.2228 14.3077 26.9955 14.0504 27.849 14.0504C34.0811 14.0504 35.5704 23.5885 34.1077 28.0658C33.8162 28.9581 33.4284 29.8484 32.9445 30.7283C32.4803 31.5722 31.9578 32.3898 31.2279 33.0287C30.245 33.8887 29.0162 34.3906 27.8495 34.3906C27.1023 34.3906 26.4173 34.1932 25.8075 33.804C25.7205 33.7483 25.6349 33.689 25.5512 33.6254C24.6451 32.9416 24.0453 31.9047 23.9051 30.7805C23.7727 29.7197 24.0571 28.691 24.7054 27.8821C25.663 26.688 26.09 25.5586 26.09 24.2204C26.09 22.8823 25.663 21.7526 24.7054 20.5585V20.5585ZM32.9615 14.1461C30.8213 11.7714 26.9062 11.1083 24.2603 13.1067C21.4943 15.1956 20.8662 19.1931 23.0347 21.8978C23.6931 22.7196 23.949 23.3809 23.949 24.2204C23.949 25.0597 23.6931 25.7211 23.0347 26.5429C20.8662 29.2474 21.4943 33.2449 24.2603 35.3339C28.3982 38.4592 32.7073 35.384 34.7291 31.7083C35.274 30.7177 35.7122 29.7101 36.0437 28.6953C37.7133 23.5851 36.6743 18.3484 32.9615 14.1461Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4852 34.7585C38.6615 28.3351 38.6308 20.7625 33.4852 15.2196Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9027 22.6016C15.5611 23.4233 15.8172 24.0847 15.8172 24.9242C15.8172 25.7634 15.5611 26.4248 14.9027 27.2466C13.5429 28.9428 13.283 31.1477 13.9605 33.0713C14.2074 33.7721 14.5789 34.4359 15.067 35.0239C15.375 35.395 15.7295 35.7364 16.1286 36.0376C18.7968 38.0527 22.4114 37.3848 24.8004 35.0724C22.935 32.8702 22.726 29.5781 24.5954 27.2466C25.2538 26.4248 25.5097 25.7634 25.5097 24.9242C25.5097 24.0847 25.2538 23.4233 24.5954 22.6016C22.726 20.2699 22.935 16.978 24.8003 14.7757C22.4114 12.4634 18.7968 11.7952 16.1286 13.8104C15.7295 14.1117 15.375 14.4531 15.067 14.8241C14.5789 15.4122 14.2074 16.0758 13.9605 16.7768C13.283 18.7004 13.5429 20.9051 14.9027 22.6016V22.6016Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M25.9956 21.2622C25.3472 20.4536 25.0629 19.4245 25.1952 18.3639C25.3355 17.2399 25.9353 16.2031 26.8414 15.5187C27.513 15.0114 28.2857 14.754 29.1391 14.754C35.3712 14.754 36.8605 24.2922 35.3978 28.7695C35.1063 29.6618 34.7186 30.5521 34.2347 31.4319C33.7705 32.2759 33.2479 33.0935 32.518 33.7324C31.5351 34.5924 30.3063 35.0942 29.1397 35.0942C28.3924 35.0942 27.7075 34.8968 27.0977 34.5077C27.0107 34.452 26.9251 34.3927 26.8414 34.3291C25.9353 33.6452 25.3355 32.6084 25.1952 31.4841C25.0629 30.4234 25.3472 29.3947 25.9956 28.5857C26.9532 27.3916 27.3802 26.2623 27.3802 24.9241C27.3802 23.5859 26.9532 22.4563 25.9956 21.2622V21.2622ZM34.2516 14.8498C32.1115 12.475 28.1964 11.812 25.5505 13.8103C22.7844 15.8993 22.1564 19.8968 24.3248 22.6015C24.9832 23.4233 25.2391 24.0846 25.2391 24.9241C25.2391 25.7633 24.9832 26.4248 24.3248 27.2466C22.1564 29.9511 22.7844 33.9486 25.5505 36.0375C29.6884 39.1628 33.9974 36.0877 36.0193 32.412C36.5641 31.4214 37.0024 30.4138 37.3339 29.399C39.0034 24.2888 37.9645 19.0521 34.2516 14.8498V14.8498Z" fill="#003F6C"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6337 20.6741C13.292 21.4959 13.5482 22.1572 13.5482 22.9967C13.5482 23.836 13.292 24.4974 12.6337 25.3192C11.2738 27.0154 11.014 29.2203 11.6915 31.1438C11.9383 31.8447 12.3099 32.5085 12.798 33.0965C13.106 33.4676 13.4604 33.809 13.8595 34.1102C16.5278 36.1253 20.1424 35.4573 22.5313 33.145C20.666 30.9428 20.457 27.6506 22.3263 25.3192C22.9847 24.4974 23.2406 23.836 23.2406 22.9967C23.2406 22.1572 22.9847 21.4959 22.3263 20.6741C20.457 18.3425 20.666 15.0505 22.5313 12.8483C20.1423 10.536 16.5278 9.86778 13.8595 11.883C13.4604 12.1842 13.106 12.5256 12.798 12.8967C12.3099 13.4847 11.9383 14.1484 11.6915 14.8494C11.014 16.7729 11.2738 18.9777 12.6337 20.6741Z" fill="#CB9B77"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M23.7267 19.3349C23.0783 18.5262 22.794 17.4971 22.9263 16.4365C23.0665 15.3126 23.6664 14.2758 24.5724 13.5914C25.2441 13.0841 26.0167 12.8267 26.8702 12.8267C33.1023 12.8267 34.5916 22.3649 33.1289 26.8422C32.8374 27.7345 32.4496 28.6248 31.9657 29.5046C31.5015 30.3486 30.979 31.1662 30.2491 31.8051C29.2662 32.6651 28.0374 33.1669 26.8708 33.1669C26.1235 33.1669 25.4386 32.9695 24.8288 32.5803C24.7417 32.5247 24.6561 32.4654 24.5724 32.4018C23.6664 31.7179 23.0665 30.6811 22.9263 29.5568C22.794 28.496 23.0783 27.4674 23.7267 26.6584C24.6843 25.4643 25.1112 24.3349 25.1112 22.9968C25.1112 21.6586 24.6843 20.529 23.7267 19.3349V19.3349ZM31.9827 12.9224C29.8425 10.5477 25.9274 9.88466 23.2816 11.883C20.5155 13.972 19.8874 17.9695 22.0559 20.6742C22.7143 21.496 22.9702 22.1573 22.9702 22.9968C22.9702 23.836 22.7143 24.4975 22.0559 25.3193C19.8874 28.0238 20.5155 32.0212 23.2816 34.1102C27.4195 37.2355 31.7285 34.1604 33.7504 30.4847C34.2952 29.4941 34.7335 28.4865 35.065 27.4717C36.7345 22.3614 35.6955 17.1248 31.9827 12.9224Z" fill="white"/>
          </svg>
</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <!-- <span class="navbar-toggler-icon"></span> -->
          <!-- <i class="far fa-bars navbar-toggler-icon"></i> -->
          <!-- <i class="fab fa-accessible-icon"></i> -->
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto text-uppercase">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">INÍCIO<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="quemSomos.html">QUEM SOMOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tratamentos.html">TRATAMENTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTATO</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <!-- "Álbuns" de Notícias -->
    <section id="inicio">

        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8"> 
                  <!--id="rins-horizontal"-->
                    <!--<div class="row">-->

                        <!-- PHP Code Here -->
                        <?php
                            echo "<div class='container-fluid' id='about'>";
                                echo "<div class='row'>";
                                    echo "<div></div>";
                                    echo "<div class='col-lg-1'>";
                                        echo "<h2>NOTÍCIAS</h2>";
                                    echo "</div>";
                                        echo "<div class='col-12'>";
                                            echo "<hr></hr>";
                                        echo "</div>";
                                echo "</div>";
                                echo "<div class='row align-items-center'>";
                            /*echo "<div class='col-lg-12'>";
                                echo "<h1 class='page-header'>{$page_title}</h1>";
                            echo "</div>";*/
                             
                            $access_token="EAAfdsSLw7TQBABQerXaLZAkU6u430ZAmsFtjvvyZBZAaK7ZAPErTymeZCIyEhHXZAypxuEZCiMvFS8D9uZCxaNfBcr32XfMpmJrzRZBo8NaZCCSSdWtbOQJ28xZAFNRHACJkx7xmkR4nz54dcz7rEWPk9b1ysI1pOZCacpq64CIAliZAJxzAZDZD";
                             
                            $fields="id,name,description,link,cover_photo,count";
                            $fb_page_id = "291918208110431";
                             
                            $json_link = "https://graph.facebook.com/v2.8/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";
                           
                            $json = file_get_contents($json_link);
                             
                            $obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
                             
                            $album_count = count($obj['data']);
                            
                                    echo "<div class='col-lg-12'>";
                                        echo "<div class='row'>";
            
                            for($x=0; $x<$album_count; $x++){
                                
                                $id = isset($obj['data'][$x]['id']) ? $obj['data'][$x]['id'] : "";
                                $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
                                $url_name=urlencode($name);
                                $description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
                                $link = isset($obj['data'][$x]['link']) ? $obj['data'][$x]['link'] : ""; // Link para o album
                             
                                $cover_photo = isset($obj['data'][$x]['cover_photo']['id']) ? $obj['data'][$x]['cover_photo']['id'] : "";
                                $cover_photo_name = isset($obj['data'][$x]['cover_photo']['name']) ? $obj['data'][$x]['cover_photo']['name'] : "";
                                
                                // use this for older access tokens:
                                // $cover_photo = isset($obj['data'][$x]['cover_photo']) ? $obj['data'][$x]['cover_photo'] : "";
                                 
                                $count = isset($obj['data'][$x]['count']) ? $obj['data'][$x]['count'] : "";
                             
                                // if you want to exclude an album, just add the name on the if statement
                                if(
                                    $name!="Profile Pictures" &&
                                    $name!="Cover Photos" &&
                                    $name!="Timeline Photos"
                                ){
                             
                                    $show_pictures_link = "album.php?album_id={$id}&album_name={$name}";
                                    
                                    //Parte modificada
                                    $json_link_2 = "https://graph.facebook.com/v2.3/{$id}/photos?fields=source,images,link,name&access_token={$access_token}";
                                    $json_2 = file_get_contents($json_link_2);
                                    $obj_2 = json_decode($json_2, true, 512, JSON_BIGINT_AS_STRING);
                                    $photo_count = count($obj_2['data']);
                                    
                                    
                                    echo "<div class='col-lg-12'>";
                                        echo "<a href='$show_pictures_link'><h2 id='titulo' style='margin-top: 50‒; margin-top: 40px; margin-bottom: 20px;'>$name</h2></a>";
                                    echo "</div>";
                                        
                                    for($y=0; $y<$photo_count; $y++){
                                            
                                        $source = isset($obj_2['data'][$y]['images'][0]['source']) ? $obj_2['data'][$y]['images'][0]['source'] : ""; //hd image
                                        $name_2 = isset($obj_2['data'][$y]['name']) ? $obj_2['data'][$y]['name'] : ""; // Caption
                                        $image_id = isset($obj_2['data'][$y]['id']) ? $obj_2['data'][$y]['id'] : "";
                                        $link_2 = isset($obj_2['data'][$y]['link']) ? $obj_2['data'][$y]['link'] : ""; // Link direto p/foto
                                        
                                            
                                        echo "<div class='col-md-3 col-lg-3 col-sm-3 col-12'>";
                                            echo "<div class='card'>";
                                                echo "<a href='{$source}'>";
                                                    echo "<img class='card-img-top' src='https://graph.facebook.com/v2.3/{$image_id}/picture?access_token={$access_token}' alt=''>";
                                                echo "</a>";
                                                echo "<div class='card-body'>";
                                                    /*echo "<div style='height:41px; overflow-y: hidden;'>";
                                                        echo "<h3 style='font-size:19px;'>";
                                                            echo "<a class='card-title'style='color:#363636' href='{$show_pictures_link}'>{$name}</a>";
                                                        echo "</h3>";
                                                    echo "</div>";*/
                                                    echo "<p class='card-text'>";
                                                        echo "<div><a href='{$link_2}' style='color:#3C357C;' target='_blank'>Veja no Facebook</a></div>";
                                                        echo "<div style='height:70px; overflow-y: hidden;'>";
                                                            echo $name_2;
                                                        echo "</div>";
                                                    echo "</p>";                                        
                                                echo "</div>";
                                            echo "</div>";
                                        echo "</div>";
                                    }    
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
    </section>
    
    <!-- Gradiente -->
    </section>
    <section id="equipe">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8"></div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    <!-- conato -->
      <section  id="contato">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-sm-12 col-12">
                <div class="row">
                  <div class="col-lg-12 col-12 col-contato">
                    <div class="jumbotron jumbotron-azul">
                          <h3 class="fale-conosco">FALE <br> CONOSCO!</h3>
                          <div class="row">
                            <div class="col-lg-1 col-2">
                              <img src="img/icones/local.png"  alt="">
                            </div>
                            <div class="col-lg-11 col-10">
                              <p>Av. Antônio Basílio, 4117 - Nova Descoberta, Natal - RN, 59056-425</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-1 col-2">
                              <img src="img/icones/email.png" alt="">
                            </div>
                            <div class="col-lg-11 col-10">
                              <p>renale@gmail.com</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-lg-1 col-2">
                              <img src="img/icones/tel.png"  alt="">
                            </div>
                            <div class="col-lg-11 col-10">
                              <p>(84) 8374-3423</p>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12 col-12 col-contato">
                    <div class="jumbotron">
                        <form id="contact-form" action="send_form.php" method="post">
                            <div class="input-group mb-3">
                                <label for="name"></label>
                                <input name="name" type="text" class="form-control"  placeholder="Nome"  aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>

                            <div class="input-group mb-3">
                                <label for="email"></label>
                                <input name="email" type="text" class="form-control"  placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>

                            <div class="input-group">
                                <label for="message"></label>
                                <div class="input-group-prepend">
                            </div>
                              <textarea name="message" class="form-control" placeholder="Escreva aqui sua mensagem" aria-label="With textarea" required></textarea>
                            </div>
                            <button id="submit" type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                          </div>
                        </form>
                    </div>
                  </div>
            </div>


            <div class="col-lg-8 col-sm-12 col-12 col-contato ">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.2705176174754!2d-35.20207974951936!3d-5.817418758966796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff2c0dbfff75%3A0x334153be2963e540!2sRenale!5e0!3m2!1spt-BR!2sbr!4v1543509683035" width="100%" height="100%" border="0px" frameborder="0" style="border:0px 0px" allowfullscreen></iframe>
            </div>

          </div>

      </section>

      <!-- Footer -->
   <footer>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-2 "></div>
         <div class="col-lg-2 col-12  text-center">
           <img src="img/logo/logoFooter.png" class="img-fluid">
           <br>
           <br>
           <p>Dedicamos ao cuidado de vidas.</p>
         </div>
         <div class="col-lg-1"></div>

         <div class="col-lg-2 col-12 text-uppercase">
           <ul>
             <a href="#"><li>Início</li></a>
             <a href="#"><li>Quem Somos</li></a>
             <a href="#"><li>Blog</li></a>
             <a href="#"><li>Tratamentos</li></a>
             <a href="#"><li>Contato</li></a>

             <br>
             <!--<a href="#"><li>Idioma PT</li></a>-->
              <a  target="_blank" href="https://www.facebook.com/renalenefrologia/">
                <i class="fab fa-3x fa-facebook-square"></i>
              </a>
           </ul>
         </div>
         <div class="col-lg-2 col-12 ">
           <p>
             Av. Antônio Basílio, 4117  <br>Nova Descoberta, Natal RN, 59056-425
           </p>
           <p>renale@gmail.com</p>
           <p>(84) 3345-2600</p>
         </div>
         <div class="col-lg-3 col-12 ">
           <p>Horário  de Funcionameto</p>
           <div class="row">
             <div class="col-5">
               <ul>
                 <li>Segunda-feira</li>
                 <li>Terça-feira</li>
                 <li>Quarta-feira</li>
                 <li>Quinta-feira</li>
                 <li>Sexta-feira</li>
                 <li>Sábado</li>
                 <li>Domingo</li>
               </ul>
             </div>
             <div class="col-7">
               <ul>
                 <li>06:00 – 20:00</li>
                 <li>06:00 – 17:00</li>
                 <li>06:00 – 20:00</li>
                 <li>06:00 – 17:00</li>
                 <li>06:00 – 20:00</li>
                 <li>06:00 – 17:00</li>
                 <li>Fechado</li>
               </ul>
             </div>
           </div>

         </div>
       </div>
     </div>
   </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>