<x-front-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="vh-120" style="background-color: #0d9db5;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{asset('images/auth.jpg')}}"
                      alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <img src="{{asset('images/logo.jpg')}}" alt="hull afrocarrebean">
                          <span class="h1 fw-bold mb-0">HACA</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Community Membership</h5>

                        <div class="row">
                            <div data-mdb-input-init class="form-outline col-md-6 mb-2">
                                <input type="text" name="firstname"  required id="form2Example17" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example17">First Name</label>
                                <x-input-error :messages="$errors->get('firstname')" class="mt-2 text-danger" />
                            </div>
                            <div data-mdb-input-init class="form-outline col-md-6 mb-2">
                                <input type="text" name="lastname"  required id="form2Example17" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example17">Last Name</label>
                                <x-input-error :messages="$errors->get('lastname')" class="mt-2 text-danger" />
                            </div>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-2">
                          <input type="email" name="email"  required id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email address</label>
                          <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>
                        <div class="row">
                            <div data-mdb-input-init class="form-outline col-md-6 mb-2">
                            <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example27">Password</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>
                            <div data-mdb-input-init class="form-outline col-md-6 mb-2">
                            <input type="password" name="password_confirmation" id="form2Example27" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example27">Confirm Password</label>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
                            </div>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-2">
                            <input type="text" name="address"  required id="form2Example17" class="form-control form-control-lg" />
                            <label class="form-label" for="form2Example17">Address</label>
                            <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
                          </div>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                              <div data-mdb-input-init class="form-outline">
                                <input type="text" name="postcode" id="form3Example1" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example1">Post Code</label>
                                <x-input-error :messages="$errors->get('postcode')" class="mt-2 text-danger" />
                              </div>
                            </div>
                            <div class="col-md-6 mb-2">
                              <div data-mdb-input-init class="form-outline">
                                <input type="text" name="phone" id="form3Example2" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Example2">Phone</label>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
                              </div>
                            </div>
                            <div class="col-md-6 mb-2">
                              <div data-mdb-input-init class="form-outline">
                                {{-- <input type="text" name="nationality" id="form3Example2" class="form-control form-control-lg" /> --}}
                                <select class="form-control form-control-lg" name="nationality">
                                  <option value="">Choose Country</option>
                                    <option value="AFGHAN">AFGHAN</option>
                                    <option value="ALBANIAN">ALBANIAN</option>
                                    <option value="ALGERIAN">ALGERIAN</option>
                                    <option value="AMERICAN">AMERICAN</option>
                                    <option value="ANDORRAN">ANDORRAN</option>
                                    <option value="ANGOLAN">ANGOLAN</option>
                                    <option value="ANTIGUANS">ANTIGUANS</option>
                                    <option value="ARGENTINEAN">ARGENTINEAN</option>
                                    <option value="ARMENIAN">ARMENIAN</option>
                                    <option value="AUSTRALIAN">AUSTRALIAN</option>
                                    <option value="AUSTRIAN">AUSTRIAN</option>
                                    <option value="AZERBAIJANI">AZERBAIJANI</option>
                                    <option value="BAHAMIAN">BAHAMIAN</option>
                                    <option value="BAHRAINI">BAHRAINI</option>
                                    <option value="BANGLADESHI">BANGLADESHI</option>
                                    <option value="BARBADIAN">BARBADIAN</option>
                                    <option value="BARBUDANS">BARBUDANS</option>
                                    <option value="BATSWANA">BATSWANA</option>
                                    <option value="BELARUSIAN">BELARUSIAN</option>
                                    <option value="BELGIAN">BELGIAN</option>
                                    <option value="BELIZEAN">BELIZEAN</option>
                                    <option value="BENINESE">BENINESE</option>
                                    <option value="BHUTANESE">BHUTANESE</option>
                                    <option value="BOLIVIAN">BOLIVIAN</option>
                                    <option value="BOSNIAN">BOSNIAN</option>
                                    <option value="BRAZILIAN">BRAZILIAN</option>
                                    <option value="BRITISH">BRITISH</option>
                                    <option value="BRUNEIAN">BRUNEIAN</option>
                                    <option value="BULGARIAN">BULGARIAN</option>
                                    <option value="BURKINABE">BURKINABE</option>
                                    <option value="BURMESE">BURMESE</option>
                                    <option value="BURUNDIAN">BURUNDIAN</option>
                                    <option value="CAMBODIAN">CAMBODIAN</option>
                                    <option value="CAMEROONIAN">CAMEROONIAN</option>
                                    <option value="CANADIAN">CANADIAN</option>
                                    <option value="CAPE VERDEAN">CAPE VERDEAN</option>
                                    <option value="CENTRAL AFRICAN">CENTRAL AFRICAN</option>
                                    <option value="CHADIAN">CHADIAN</option>
                                    <option value="CHILEAN">CHILEAN</option>
                                    <option value="CHINESE">CHINESE</option>
                                    <option value="COLOMBIAN">COLOMBIAN</option>
                                    <option value="COMORAN">COMORAN</option>
                                    <option value="CONGOLESE">CONGOLESE</option>
                                    <option value="COSTA RICAN">COSTA RICAN</option>
                                    <option value="CROATIAN">CROATIAN</option>
                                    <option value="CUBAN">CUBAN</option>
                                    <option value="CYPRIOT">CYPRIOT</option>
                                    <option value="CZECH">CZECH</option>
                                    <option value="DANISH">DANISH</option>
                                    <option value="DJIBOUTI">DJIBOUTI</option>
                                    <option value="DOMINICAN">DOMINICAN</option>
                                    <option value="DUTCH">DUTCH</option>
                                    <option value="EAST TIMORESE">EAST TIMORESE</option>
                                    <option value="ECUADOREAN">ECUADOREAN</option>
                                    <option value="EGYPTIAN">EGYPTIAN</option>
                                    <option value="EMIRIAN">EMIRIAN</option>
                                    <option value="EQUATORIAL GUINEAN">EQUATORIAL GUINEAN
                                    </option>
                                    <option value="ERITREAN">ERITREAN</option>
                                    <option value="ESTONIAN">ESTONIAN</option>
                                    <option value="ETHIOPIAN">ETHIOPIAN</option>
                                    <option value="FIJIAN">FIJIAN</option>
                                    <option value="FILIPINO">FILIPINO</option>
                                    <option value="FINNISH">FINNISH</option>
                                    <option value="FRENCH">FRENCH</option>
                                    <option value="GABONESE">GABONESE</option>
                                    <option value="GAMBIAN">GAMBIAN</option>
                                    <option value="GEORGIAN">GEORGIAN</option>
                                    <option value="GERMAN">GERMAN</option>
                                    <option value="GHANAIAN">GHANAIAN</option>
                                    <option value="GREEK">GREEK</option>
                                    <option value="GRENADIAN">GRENADIAN</option>
                                    <option value="GUATEMALAN">GUATEMALAN</option>
                                    <option value="GUINEA-BISSAUAN">GUINEA-BISSAUAN</option>
                                    <option value="GUINEAN">GUINEAN</option>
                                    <option value="GUYANESE">GUYANESE</option>
                                    <option value="HAITIAN">HAITIAN</option>
                                    <option value="HERZEGOVINIAN">HERZEGOVINIAN</option>
                                    <option value="HONDURAN">HONDURAN</option>
                                    <option value="HUNGARIAN">HUNGARIAN</option>
                                    <option value="ICELANDER">ICELANDER</option>
                                    <option value="INDIAN">INDIAN</option>
                                    <option value="INDONESIAN">INDONESIAN</option>
                                    <option value="IRANIAN">IRANIAN</option>
                                    <option value="IRAQI">IRAQI</option>
                                    <option value="IRISH">IRISH</option>
                                    <option value="ISRAESLI">ISRAELI</option>
                                    <option value="ITALIAN">ITALIAN</option>
                                    <option value="IVORIAN">IVORIAN</option>
                                    <option value="JAMAICAN">JAMAICAN</option>
                                    <option value="JAPANESE">JAPANESE</option>
                                    <option value="JORDANIAN">JORDANIAN</option>
                                    <option value="KAZAKHSTANI">KAZAKHSTANI</option>
                                    <option value="KENYAN">KENYAN</option>
                                    <option value="KITTIAN AND NEVISIAN">KITTIAN AND NEVISIAN
                                    </option>
                                    <option value="KUWAITI">KUWAITI</option>
                                    <option value="KYRGYZ">KYRGYZ</option>
                                    <option value="LAOTIAN">LAOTIAN</option>
                                    <option value="LATVIAN">LATVIAN</option>
                                    <option value="LEBANESE">LEBANESE</option>
                                    <option value="LIBERIAN">LIBERIAN</option>
                                    <option value="LIBYAN">LIBYAN</option>
                                    <option value="LIECHTENSTEINER">LIECHTENSTEINER</option>
                                    <option value="LITHUANIAN">LITHUANIAN</option>
                                    <option value="LUXEMBOURGER">LUXEMBOURGER</option>
                                    <option value="MACEDONIAN">MACEDONIAN</option>
                                    <option value="MALAGASY">MALAGASY</option>
                                    <option value="MALAWIAN">MALAWIAN</option>
                                    <option value="MALAYSIAN">MALAYSIAN</option>
                                    <option value="MALDIVAN">MALDIVAN</option>
                                    <option value="MALIAN">MALIAN</option>
                                    <option value="MALTESE">MALTESE</option>
                                    <option value="MARSHALLESE">MARSHALLESE</option>
                                    <option value="MAURITANIAN">MAURITANIAN</option>
                                    <option value="MAURITIAN">MAURITIAN</option>
                                    <option value="MEXICAN">MEXICAN</option>
                                    <option value="MICRONESIAN">MICRONESIAN</option>
                                    <option value="MOLDOVAN">MOLDOVAN</option>
                                    <option value="MONACAN">MONACAN</option>
                                    <option value="MONGOLIAN">MONGOLIAN</option>
                                    <option value="MOROCCAN">MOROCCAN</option>
                                    <option value="MOSOTHO">MOSOTHO</option>
                                    <option value="MOTSWANA">MOTSWANA</option>
                                    <option value="MOZAMBICAN">MOZAMBICAN</option>
                                    <option value="NAMIBIAN">NAMIBIAN</option>
                                    <option value="NAURUAN">NAURUAN</option>
                                    <option value="NEPALESE">NEPALESE</option>
                                    <option value="NEW ZEALANDER">NEW ZEALANDER</option>
                                    <option value="NI-VANUATU">NI-VANUATU</option>
                                    <option value="NICARAGUAN">NICARAGUAN</option>
                                    <option value="NIGERIEN">NIGERIEN</option>
                                    <option value="NORTH KOREAN">NORTH KOREAN</option>
                                    <option value="NORTHERN IRISH">NORTHERN IRISH</option>
                                    <option value="NORWEGIAN">NORWEGIAN</option>
                                    <option value="OMANI">OMANI</option>
                                    <option value="PAKISTANI">PAKISTANI</option>
                                    <option value="PALAUAN">PALAUAN</option>
                                    <option value="PANAMANIAN">PANAMANIAN</option>
                                    <option value="PAPUA NEW GUINEAN">PAPUA NEW GUINEAN</option>
                                    <option value="PARAGUAYAN">PARAGUAYAN</option>
                                    <option value="PERUVIAN">PERUVIAN</option>
                                    <option value="POLISH">POLISH</option>
                                    <option value="PORTUGUESE">PORTUGUESE</option>
                                    <option value="QATARI">QATARI</option>
                                    <option value="ROMANIAN">ROMANIAN</option>
                                    <option value="RUSSIAN">RUSSIAN</option>
                                    <option value="RWANDAN">RWANDAN</option>
                                    <option value="SAINT LUCIAN">SAINT LUCIAN</option>
                                    <option value="SALVADORAN">SALVADORAN</option>
                                    <option value="SAMOAN">SAMOAN</option>
                                    <option value="SAN MARINESE">SAN MARINESE</option>
                                    <option value="SAO TOMEAN">SAO TOMEAN</option>
                                    <option value="SAUDI">SAUDI</option>
                                    <option value="SCOTTISH">SCOTTISH</option>
                                    <option value="SENEGALESE">SENEGALESE</option>
                                    <option value="SERBIAN">SERBIAN</option>
                                    <option value="SEYCHELLOIS">SEYCHELLOIS</option>
                                    <option value="SIERRA LEONEAN">SIERRA LEONEAN</option>
                                    <option value="SINGAPOREAN">SINGAPOREAN</option>
                                    <option value="SLOVAKIAN">SLOVAKIAN</option>
                                    <option value="SLOVENIAN">SLOVENIAN</option>
                                    <option value="SOLOMON ISLANDER">SOLOMON ISLANDER</option>
                                    <option value="SOMALI">SOMALI</option>
                                    <option value="SOUTH AFRICAN">SOUTH AFRICAN</option>
                                    <option value="SOUTH KOREAN">SOUTH KOREAN</option>
                                    <option value="SPANISH">SPANISH</option>
                                    <option value="SRI LANKAN">SRI LANKAN</option>
                                    <option value="SUDANESE">SUDANESE</option>
                                    <option value="SURINAMER">SURINAMER</option>
                                    <option value="SWAZI">SWAZI</option>
                                    <option value="SWEDISH">SWEDISH</option>
                                    <option value="SWISS">SWISS</option>
                                    <option value="SYRIAN">SYRIAN</option>
                                    <option value="TAIWANESE">TAIWANESE</option>
                                    <option value="TAJIK">TAJIK</option>
                                    <option value="TANZANIAN">TANZANIAN</option>
                                    <option value="THAI">THAI</option>
                                    <option value="TOGOLESE">TOGOLESE</option>
                                    <option value="TONGAN">TONGAN</option>
                                    <option value="TRINIDADIAN OR TOBAGONIAN">TRINIDADIAN OR
                                        TOBAGONIAN</option>
                                    <option value="TUNISIAN">TUNISIAN</option>
                                    <option value="TURKISH">TURKISH</option>
                                    <option value="TUVALUAN">TUVALUAN</option>
                                    <option value="UGANDAN">UGANDAN</option>
                                    <option value="UKRAINIAN">UKRAINIAN</option>
                                    <option value="URUGUAYAN">URUGUAYAN</option>
                                    <option value="UZBEKISTANI">Uzbekistani</option>
                                    <option value="VENEZUELAN">VENEZUELAN</option>
                                    <option value="VIETNAMESE">VIETNAMESE</option>
                                    <option value="WELSH">WELSH</option>
                                    <option value="YEMENITE">YEMENITE</option>
                                    <option value="ZAMBIAN">ZAMBIAN</option>
                                    <option value="ZIMBABWEAN">ZIMBABWEAN</option>
                                </select>
                                <label class="form-label" for="form3Example2">Nationality</label>
                                <x-input-error :messages="$errors->get('nationality')" class="mt-2 text-danger" />
                              </div>
                            </div>
                            <div class="col-md-6 mb-2">
                              <div data-mdb-input-init class="form-outline">
                                <input type="text" name="fee" value="10" id="form3Example2" class="form-control form-control-lg" readonly/>
                                <label class="form-label" for="form3Example2">Fee (£10 per annual)</label>
                                <x-input-error :messages="$errors->get('fee')" class="mt-2 text-danger" />
                              </div>
                            </div>
                          </div>
      
                        <div class="pt-1 mb-2">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                        </div>
      
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="/login"
                            style="color: #393f81;">Sign In Here</a></p>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</x-front-layout>
