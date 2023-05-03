<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome! | Real Estate Agency</title>

  <!-- 
    - favicon
  -->
  <!-- <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml"> -->

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link href="/path/to/tailwind.css" rel="stylesheet">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<style>
  .form-wrap {
    /* background-color: #111111; */
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 5%;
  }

  .form-container {
    /* max-width: 600px; */
    width: 100%;
    padding: 20px;
    /* background-color: #262726; */

  }


  .progress-bar {
    margin: 25px 0;
    padding: 0;
    overflow: hidden;
    counter-reset: step;
    display: flex;
    flex-direction: row;
    align-items: center;
    position: relative;
  }

  .progress-bar li {
    list-style-type: none;
    width: 100%;
    font-size: 20px;
    font-weight: 500;
    text-align: center;
    position: relative;
    color: black;
  }

  .progress-bar li::before {
    position: relative;
    z-index: 2;
    content: counter(step);
    counter-increment: step;
    width: 40px;
    height: 40px;
    line-height: 40px;
    display: block;
    font-size: 1.2rem;
    font-weight: 600;
    text-align: center;
    border-radius: 100px;
    margin: 0 auto 10px auto;
    background-color: #191919;
    color: #f5f5f5;
  }

  .progress-bar li::after {
    content: '';
    width: 100%;
    height: 6px;
    position: absolute;
    left: -50%;
    top: 17px;
    z-index: 1;
    background-color: #191919;
  }

  .progress-bar li.active::before,
  .progress-bar li.active::after {
    background: linear-gradient(to right, hsl(9, 100%, 62%) 20%, hsl(9, 100%, 62%) 40%, hsl(9, 100%, 62%) 60%, hsl(9, 100%, 62%) 80%);
    background-size: 200% auto;
    -webkit-animation: effect 1s linear infinite;
    animation: effect 1s linear infinite;
    color: #111111;
  }

  @keyframes effect {
    to {
      background-position: -200% center;
    }
  }

  .step-group {
    margin-top: 50px;
  }

  .form-box {
    display: flex;
    flex-direction: row;
    gap: 20px;
  }

  .form-box .form-group {
    width: 100%;
    margin-bottom: 15px;
  }

  .form-box .form-group .form-field {
    width: 100%;
    height: 50px;
    padding: 10px 15px;
    font-size: 18px;
    color: #f5f5f5;
    background-color: transparent;
    border: 1px solid #ced4da;
    outline: none;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
  }

  .btn-step {
    display: flex;
    flex-direction: row;
    gap: 20px;
    margin-top: 20px;
  }

  .btn-step button {
    background-color: hsl(9, 100%, 62%);
    border: none;
    color: #fff;
    padding: 10px 25px;
    font-size: 18px;
    font-weight: 600;
    cursor: pointer;
  }

  .form-box .form-group textarea.form-field {
    min-height: 190px;
  }

  #step-group-2,
  #step-group-3 {
    display: none;
  }


  #sucess-box {
    background-color: #fff;
    height: 350px;
    display: none;
    flex-direction: column;
    gap: 40px;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    -o-border-radius: 5px;
  }

  #sucess-box span {
    display: block;
    width: 100px;
    height: 100px;
    border: 6px solid green;
    font-size: 60px;
    color: green;
    font-weight: 800;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
  }

  #sucess-box .sucess-text {
    font-size: 30px;
    color: green;
  }

  #sucess-box #reset-btn {
    background-color: #ff1046;
    border: none;
    color: #fff;
    padding: 10px 25px;
    font-size: 20px;
    font-weight: 600;
    cursor: pointer;
  }
</style>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>
    <div class="header-bottom">
      <div class="container">

        <a href="#" class="logo">
          <img src="../assets/images/cLogo.png" width="70px" height="50px" alt="Homeverse logo">
        </a>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="../assets/images/cLogo.png" width="70px" height="50px" alt="Homeverse logo">

            </a>

            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">

              <li>
                <a href="indexLoginUser.php" class="navbar-link active" data-nav-link>Home</a>
              </li>

              <li>
                <a href="about.php" class="navbar-link" data-nav-link>About</a>
              </li>

              <li>
                <a href="services.php" class="navbar-link" data-nav-link>Service</a>
              </li>

              <li>
                <a href="properties.php" class="navbar-link" data-nav-link>Property</a>
              </li>

              <li>
                <a href="contact.php" class="navbar-link" data-nav-link>Contact</a>
              </li>

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

          <!-- <button class="header-bottom-actions-btn" aria-label="Search">
            <ion-icon name="search-outline"></ion-icon>

            <span>Search</span>
          </button> -->
          <button class="header-bottom-actions-btn" aria-label="Profile">
            <ion-icon name="person-outline"></ion-icon>

            <span>Profile</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Cart">
            <ion-icon name="heart-outline"></ion-icon>

            <span>Cart</span>
          </button>
          <button class="header-bottom-actions-btn" aria-label="Logout" data-tab-btn data-modal="#logout-modal">
            <ion-icon name="log-out-outline"></ion-icon>
            <span>Logout</span>
          </button>

          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>

            <span>Menu</span>
          </button>

        </div>

      </div>
    </div>

  </header>
  <main>
    <article>
      <!-- 
        - #ABOUT
      -->

      <section class="form-wrap">
        <div class="form-container">
          <form action="" id="multi-step-form">
            <div id="form-container-box">
              <ul class="progress-bar">
                <li id="step1" class="active">Property Type</li>
                <li id="step2">Property Details</li>
                <li id="step3">Resale Details & Gallery</li>
              </ul>

              <!-- ======================Step Group 1============== -->
              <div class="step-group" id="step-group-1">
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Property Type</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-2" style="justify-content: center;">

                      </div>
                      <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Select
                          City*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>select</option>
                            <option>Bangalore</option>
                            <option>Pune</option>
                            <option>Gurgaon</option>
                            <option>Delhi</option>
                            <option>Gaziabad</option>
                            <option>Greater Noida</option>
                            <option>Mumbai</option>
                            <option>Chennai</option>
                            <option>Hyderabad</option>
                            <option>Faridabad</option>
                            <option>Noida</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Property
                          Type*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>select</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Land/Plot</option>
                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Select Property
                          Ad Type*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>select</option>
                            <option>Sale</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-box">
                  <div class="btn-step">
                    <button id="step-next-1">Next ￫</button>
                  </div>
                </div>
              </div>
              <!-- ======================Step Group 2============== -->
              <div class="step-group" id="step-group-2">
                <div class="space-y-12">
                  <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Property Details</h2>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Plot
                          Area*</label>
                        <div class="relative mt-2 rounded-md shadow-sm">

                          <input type="text" name="price" id="price"
                            class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            placeholder="0.00">
                          <div class="absolute inset-y-0 right-0 flex items-center">
                            <label for="currency" class="sr-only">Currency</label>
                            <select id="currency" name="currency"
                              class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                              <option>sq.ft</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">BHK
                          Type*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Select</option>
                            <option>1 BHK</option>
                            <option>2 BHK</option>
                            <option>3 BHK</option>
                            <option>4 BHK</option>
                            <option>5 BHK</option>
                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Age of
                          Property*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Select</option>
                            <option>Under Construction</option>
                            <option>Less than a Year</option>
                            <option>1 to 5 Year</option>
                            <option>5 to 10 Year</option>
                            <option>More than 10 year</option>
                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-2">
                        <label for="country"
                          class="block text-sm font-medium leading-6 text-gray-900">Furnishing*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>select</option>
                            <option>Fully Furnishing</option>
                            <option>Semi Furnishing</option>
                            <option>UnFurnishingt</option>
                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Floor*</label>
                        <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Select</option>
                            <option>Lower Basement</option>
                            <option>Upper Basement</option>
                            <option>Ground</option>
                            <option>Full Building</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                            <option>32</option>
                            <option>33</option>
                            <option>34</option>
                            <option>35</option>
                            <option>36</option>
                            <option>37</option>
                            <option>38</option>
                            <option>39</option>
                            <option>40</option>
                            <option>41</option>
                            <option>42</option>
                            <option>43</option>
                            <option>44</option>
                            <option>45</option>
                            <option>46</option>
                            <option>47</option>
                            <option>48</option>
                            <option>49</option>
                            <option>50</option>
                            <option>51</option>
                            <option>52</option>
                            <option>53</option>
                            <option>54</option>
                            <option>55</option>
                            <option>56</option>
                            <option>57</option>
                            <option>58</option>
                            <option>59</option>
                            <option>60</option>
                            <option>61</option>
                            <option>62</option>
                            <option>63</option>
                            <option>64</option>
                            <option>65</option>
                            <option>66</option>
                            <option>67</option>
                            <option>68</option>
                            <option>69</option>
                            <option>70</option>
                            <option>71</option>
                            <option>72</option>
                            <option>73</option>
                            <option>74</option>
                            <option>75</option>
                            <option>76</option>
                            <option>77</option>
                            <option>78</option>
                            <option>79</option>
                            <option>80</option>
                            <option>81</option>
                            <option>82</option>
                            <option>83</option>
                            <option>84</option>
                            <option>85</option>
                            <option>86</option>
                            <option>87</option>
                            <option>88</option>
                            <option>89</option>
                            <option>90</option>
                            <option>91</option>
                            <option>92</option>
                            <option>93</option>
                            <option>94</option>
                            <option>95</option>
                            <option>96</option>
                            <option>97</option>
                            <option>98</option>
                            <option>99</option>

                          </select>
                        </div>
                      </div>

                      <div class="sm:col-span-2">
                        <label for="property-type" class="block text-sm font-medium leading-6 text-gray-900">Total
                          Floor*</label>
                        <div class="mt-2">
                          <div class="mt-2">
                            <select id="country" name="country" autocomplete="country-name"
                              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                              <option>Select</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                              <option>13</option>
                              <option>14</option>
                              <option>15</option>
                              <option>16</option>
                              <option>17</option>
                              <option>18</option>
                              <option>19</option>
                              <option>20</option>
                              <option>21</option>
                              <option>22</option>
                              <option>23</option>
                              <option>24</option>
                              <option>25</option>
                              <option>26</option>
                              <option>27</option>
                              <option>28</option>
                              <option>29</option>
                              <option>30</option>
                              <option>31</option>
                              <option>32</option>
                              <option>33</option>
                              <option>34</option>
                              <option>35</option>
                              <option>36</option>
                              <option>37</option>
                              <option>38</option>
                              <option>39</option>
                              <option>40</option>
                              <option>41</option>
                              <option>42</option>
                              <option>43</option>
                              <option>44</option>
                              <option>45</option>
                              <option>46</option>
                              <option>47</option>
                              <option>48</option>
                              <option>49</option>
                              <option>50</option>
                              <option>51</option>
                              <option>52</option>
                              <option>53</option>
                              <option>54</option>
                              <option>55</option>
                              <option>56</option>
                              <option>57</option>
                              <option>58</option>
                              <option>59</option>
                              <option>60</option>
                              <option>61</option>
                              <option>62</option>
                              <option>63</option>
                              <option>64</option>
                              <option>65</option>
                              <option>66</option>
                              <option>67</option>
                              <option>68</option>
                              <option>69</option>
                              <option>70</option>
                              <option>71</option>
                              <option>72</option>
                              <option>73</option>
                              <option>74</option>
                              <option>75</option>
                              <option>76</option>
                              <option>77</option>
                              <option>78</option>
                              <option>79</option>
                              <option>80</option>
                              <option>81</option>
                              <option>82</option>
                              <option>83</option>
                              <option>84</option>
                              <option>85</option>
                              <option>86</option>
                              <option>87</option>
                              <option>88</option>
                              <option>89</option>
                              <option>90</option>
                              <option>91</option>
                              <option>92</option>
                              <option>93</option>
                              <option>94</option>
                              <option>95</option>
                              <option>96</option>
                              <option>97</option>
                              <option>98</option>
                              <option>99</option>

                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>



                <div class="form-box">
                  <div class="btn-step">
                    <button id="step-prev-1">￩ Prev</button>
                    <button id="step-next-2">Next ￫</button>
                  </div>
                </div>


              </div>

              <!-- ======================Step Group 3============== -->
              <div class="step-group" id="step-group-3">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Resale Details</h2>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                  <div class="sm:col-span-2">
                    <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Expected Price</label>

                    <div class="mt-2">
                      <div class="relative mt-2 rounded-md shadow-sm">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                          <span class="text-gray-500 sm:text-sm">$</span>
                        </div>
                        <input type="text" name="price" id="price"
                          class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                          placeholder="0.00">
                      </div>
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Ownership
                      Type*</label>
                    <div class="mt-2">
                      <select id="country" name="country" autocomplete="country-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option>Select</option>
                        <option>on Lease</option>
                        <option>Self Owned</option>
                      </select>
                    </div>
                  </div>

                  <div class="sm:col-span-2">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Available
                      From*</label>
                    <div class="mt-2">
                      <input type="date" name="price" id="price" width="250px"
                        class="block w-full rounded-md border-0 py-1.5 pl-7 pr-17 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        placeholder="0.00">
                    </div>
                  </div>
                </div>
                <br>
                <hr>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Upload photos & videos</h2> <br>
                <div class="col-span-full">
                  <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">photo</label> <br>
                  <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                      <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                          d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                          clip-rule="evenodd" />
                      </svg>
                      <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload"
                          class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                          <span>Upload a file</span>
                          <input id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">or drag and drop</p>
                      </div>
                      <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                  </div>
                </div>
                <div class="form-box">
                  <div class="btn-step">
                    <button id="step-prev-2">￩ Prev</button>
                    <button type="submit" id="step-next-3">Send ￫</button>
                  </div>
                </div>
              </div>

            </div>

            <div id="sucess-box">
              <span class="done">✔</span>
              <p class="sucess-text">Your property added successful. Thanks.</p>
              <!-- <button id="reset-btn" type="reset">Ref</button> -->
            </div>

          </form>


        </div>
      </section>


      <section class="cta">
        <div class="container">

          <div class="cta-card">
            <div class="card-content">
              <h2 class="h2 card-title">Looking for a dream home?</h2>

              <p class="card-text">We can help you realize your dream of a new home</p>
            </div>

            <a href="properties.php"><button class="btn cta-btn">
                <span>Explore Properties</span>
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </button></a>
          </div>

        </div>
      </section>
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <!-- <img src="../assets/images/logo-light.png" alt="Homeverse logo"> -->
          </a>

          <!-- <p class="section-text">
            Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is dummy text of the printing.
          </p> -->

          <ul class="contact-list">

            <li>
              <a href="#" class="contact-link">
                <ion-icon name="location-outline"></ion-icon>

                <address>ASDR Infotech, Baner, Pune</address>
              </a>
            </li>

            <li>
              <a href="tel:+0123456789" class="contact-link">
                <ion-icon name="call-outline"></ion-icon>

                <span>+0123-456789</span>
              </a>
            </li>

            <li>
              <a href="mailto:contact@homeverse.com" class="contact-link">
                <ion-icon name="mail-outline"></ion-icon>

                <span>contact@asdrinfo.com</span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.linkedin.com/company/asdr-infotech-pvt-ltd/mycompany/" target="_blank"
                class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Company</p>
            </li>

            <li>
              <a href="about.php" class="footer-link">About</a>
            </li>

            <li>
              <a href="services.php" class="footer-link">Services</a>
            </li>

            <li>
              <a href="properties.php" class="footer-link">Properties</a>
            </li>



            <li>
              <a href="contact.php" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Agency Login</a>
            </li>


          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            <li>
              <a href="#" class="footer-link">Wish List</a>
            </li>

            <li>
              <a href="#" class="footer-link">Login</a>
            </li>

            <li>
              <a href="#" class="footer-link">My account</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

            <li>
              <a href="#" class="footer-link">Promotional Offers</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Customer Care</p>
            </li>

            <li>
              <a href="#" class="footer-link">Login</a>
            </li>

            <li>
              <a href="#" class="footer-link">My account</a>
            </li>

            <li>
              <a href="#" class="footer-link">Wish List</a>
            </li>

            <li>
              <a href="#" class="footer-link">FAQ</a>
            </li>

            <li>
              <a href="contact.php" class="footer-link">Contact us</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="https://asdrinfotech.com/" target="_blank">ASDR Infotech</a>. All Rights Reserved
        </p>

      </div>
    </div>

  </footer>

  <!-- 
    - custom js link
  -->
  <script src="../assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->

  <script>
    window.addEventListener("load", () => {
      const form = document.getElementById("multi-step-form");
      const formContainerBox = document.getElementById("form-container-box");
      const step2 = document.getElementById("step2");
      const step3 = document.getElementById("step3");
      const stepGroup1 = document.getElementById("step-group-1");
      const stepGroup2 = document.getElementById("step-group-2");
      const stepGroup3 = document.getElementById("step-group-3");
      const stepNext1 = document.getElementById("step-next-1");
      const stepNext2 = document.getElementById("step-next-2");
      const stepNext3 = document.getElementById("step-next-3");
      const stepPrev1 = document.getElementById("step-prev-1");
      const stepPrev2 = document.getElementById("step-prev-2");

      const sucessBox = document.getElementById("sucess-box");
      const ResetBtn = document.getElementById("reset-btn")

      form.addEventListener("submit", (e) => {
        e.preventDefault();
      })

      stepNext1.addEventListener("click", (e) => {
        stepGroup1.style.display = "none";
        stepGroup2.style.display = "block";
        step2.classList.add("active");
      });

      stepNext2.addEventListener("click", () => {
        stepGroup2.style.display = "none";
        stepGroup3.style.display = "block";
        step3.classList.add("active");
      });

      stepPrev1.addEventListener("click", () => {
        stepGroup1.style.display = "block";
        stepGroup2.style.display = "none";
        step2.classList.remove("active");
      });
      stepPrev2.addEventListener("click", () => {
        stepGroup3.style.display = "none";
        stepGroup2.style.display = "block";
        step3.classList.remove("active");
      })
      stepNext3.addEventListener("click", () => {
        formContainerBox.style.display = "none";
        sucessBox.style.display = "flex";
      });
      ResetBtn.addEventListener("click", () => {
        sucessBox.style.display = "none";
        formContainerBox.style.display = "none";
        window.location.reload();
      })


    })
  </script>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>