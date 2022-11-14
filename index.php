<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/apro-svg.svg" title="Favicon" sizes="16x16" />

    <link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        html, body {
            font-family: Arial, Helvetica, sans-serif !important;
            background-image: url("images/background.jpg");
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
        }

        label {
            color: #000000 !important;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 18px !important;
        }

        h1 {
            color: #000000 !important;
            text-align: center !important;
            margin-top:20px !important;
            font-family: Arial, Helvetica, sans-serif !important;
            font-size: 24px !important;
            line-height: 40px !important;
        }

        .not {
            color:#000000 !important;
            text-align: center !important;
            margin-top: 40px !important;
        }

        .form_preview_active {
            position:absolute !important;left:50% !important;top:50% !important;margin-left:-390px !important;margin-top:-150px !important;
        }
    </style>
  </head>
  <body>
    <div id="app">


        <div class="container logo_container" style="max-width:600px !important;">
            <div class="row">
                <div class="col-md-12">
                    <img src="images/logo.png" style="display:block !important;width:300px !important;margin:0 auto !important;margin-top:40px !important;">
                    <h1 style="margin-top:0px !important;margin-bottom:20px !important;font-size:20px !important;">E-Posta İmza Oluşturucu</h1>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <!-- TABLE -->
                <div class="col-md-12">
                    <div class="form_preview" style="display:block !important;width: 780px !important;max-width: 780px !important;margin:0 auto !important;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 780px !important;max-width: 780px !important;">
                            <tbody>
                                <tr>
                                    <td style="width:400px;">
                                        <img src="images/bg.png" style="width:400px;">
                                    </td>
                                    <td style="width:380px;text-align:right;">
                                        <p style="font-family: Arial, Helvetica, sans-serif;font-weight:bold;font-size:18px;line-height: 20px;color:#dc1f26;padding: 0px;margin: 0px;text-transform: uppercase;">{{ ad_soyad }}</p>
                                        <p style="font-family: Arial, Helvetica, sans-serif;font-weight:bold;font-size:16px;line-height: 18px;color:#231f20;padding: 0px;margin: 0px;">{{ unvan }} <b v-if="ingilizce_unvan">/</b> {{ ingilizce_unvan }}</p>
                                        <p style="font-family: Arial, Helvetica, sans-serif;font-size:12px;line-height: 15px;color:#231f20;padding: 0px;margin: 0px;margin-top:4px;"> {{ adres }} <br v-if="adres2"> {{ adres2 }}  <br> {{ ilce }} <b v-if="il">|</b> {{ il }}</p>
                                        <p style="font-family: Arial, Helvetica, sans-serif;font-size:12px;line-height: 15px;color:#231f20;padding: 0px;margin: 0px;margin-top:4px;">
                                        <div v-if="fax" style="font-size: 12px !important;">Fax: {{ fax }} <br></div>
                                        <div v-if="telefon" style="font-size: 12px !important;">Tel: {{ telefon }} <br></div>
                                        <div v-if="gsm" style="font-size: 12px !important;">Gsm: {{ gsm }} <br></div>
                                        <a href="https://www.alnusyatirim.com/" target="_blank" style="font-family: Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;color:#231f20;padding: 0px;margin: 0px;margin-top:10px;text-decoration: none;font-weight: bold;">www.alnusyatirim.com</a>
                                        <br>
                                        <!-- sosyal medya ikonları -->
                                        <div style="margin-top:4px !important;font-family: Arial, Helvetica, sans-serif;font-size:16px !important;">
                                            <div style="display:inline-block !important;">
                                                <a href="https://twitter.com/AlnusYatirim" target="_blank"><img src="images/twitter.png" style="width:24px !important;"></a> 
                                                <a href="https://www.instagram.com/alnusyatirim/" target="_blank"><img src="images/instagram.png" style="width:24px !important;"></a> 
                                                <a href="https://www.youtube.com/channel/UCBk3wnPtMBJZrtn22NrFp7w" target="_blank"><img src="images/youtube.png" style="width:24px !important;"></a> 
                                                <a href="https://tr.linkedin.com/company/alnusyatirim" target="_blank"><img src="images/linkedin.png" style="width:24px !important;"></a> 
                                                <a href="https://www.facebook.com/alnusyatirim/" target="_blank"><img src="images/facebook.png" style="width:24px !important;"></a>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END / TABLE -->
            </div>
        </div>
        
        <div class="container form_container" style="max-width:600px !important;">
            <div class="row">

                <form class="row g-3 needs-validation" action="create.php" method="post" novalidate>
                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_1" class="form-label">Ad Soyad</label> -->
                            <input type="text" name="ad_soyad" v-model="ad_soyad" class="form-control" id="label_1" placeholder="Ad Soyad" autocomplete="off" required>
                            <!-- valid -->
                            <div class="invalid-feedback">
                                Ad ve Soyad boş olamaz !
                            </div>
                            <!-- end / valid -->
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-6">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_2" class="form-label">Ünvan</label> -->
                            <input type="text" name="unvan" v-model="unvan" class="form-control" id="label_2" placeholder="Ünvan" autocomplete="off" required>
                            <!-- valid -->
                            <div class="invalid-feedback">
                                Ünvan boş olamaz !
                            </div>
                            <!-- end / valid -->
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-6">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_9" class="form-label">Ünvan</label> -->
                            <input type="text" name="ingilizce_unvan" v-model="ingilizce_unvan" class="form-control" id="label_9" placeholder="İngilizce Ünvan" autocomplete="off">
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_3" class="form-label">Adres</label> -->
                            <input type="text" name="adres" v-model="adres" class="form-control" id="label_3" placeholder="Adres" autocomplete="off" required>
                            <!-- valid -->
                            <div class="invalid-feedback">
                                Adres boş olamaz !
                            </div>
                            <!-- end / valid -->
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_3" class="form-label">Adres 2</label> -->
                            <input type="text" name="adres2" v-model="adres2" class="form-control" id="label_3" placeholder="Adres 2" autocomplete="off">
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-6">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_5" class="form-label">İlçe</label> -->
                            <input type="text" name="ilce" v-model="ilce" class="form-control" id="label_5" placeholder="İlçe" autocomplete="off" required>
                            <!-- valid -->
                            <div class="invalid-feedback">
                                İlçe boş olamaz !
                            </div>
                            <!-- end / valid -->
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-6">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_4" class="form-label">İl</label> -->
                            <input type="text" name="il" v-model="il" class="form-control" id="label_4" placeholder="İl" autocomplete="off" required>
                            <!-- valid -->
                            <div class="invalid-feedback">
                                İl boş olamaz !
                            </div>
                            <!-- end / valid -->
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_6" class="form-label">Fax</label> -->
                            <input type="text" name="fax" v-model="fax" class="form-control" id="label_6" placeholder="Fax" autocomplete="off">
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_5" class="form-label">Telefon</label> -->
                            <input type="text" name="telefon" v-model="telefon" class="form-control" id="label_5" placeholder="Telefon" autocomplete="off">
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-md-12">
                        <!-- FORM -->
                        <div class="mb-1">
                            <!-- <label for="label_7" class="form-label">Gsm</label> -->
                            <input type="text" name="gsm" v-model="gsm" class="form-control" id="label_7" placeholder="Gsm" autocomplete="off">
                        </div>
                        <!-- END / FORM -->
                    </div>

                    <div class="col-12" style="text-align:right !important;">
                        <button class="btn btn-danger fw-bold" type="submit">İmza Oluştur</button>
                    </div>
                </form>

                <div class="col-md-12">
                    <div style="display:block !important;margin:0 auto !important;background-size:cover !important;width:200px !important;height:64px !important;background-image: url('images/aprologo.png') !important;background-position:center center !important;background-repeat:no-repeat !important;margin-top:40px !important;"></div>
                    <h1 style="font-size:16px !important;line-height:14px !important;margin-top:20px !important;margin-bottom:50px !important;">Powered by Apro</h1>
                </div>

                <div class="col-md-12 not" style="display:none !important;">
                    NOT: İmza oluşturduktan sonra ctrl + A ile imzanızı seçin ctrl + C ile kopyalayın ve ctrl + V yaparak imza alanının içine yapıştırın!
                </div>

            </div>
        </div>
    </div>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.6.1.js"></script>
    <script src="./js/vue.global.js"></script>
    <script>
        const { createApp } = Vue;

        createApp({
        data() {
            return {
                ad_soyad: '',
                unvan: '',
                ingilizce_unvan: '',
                adres: '',
                adres2: '',
                ilce: '',
                il: '',
                telefon: '',
                fax: '',
                gsm: '',
                email: ''
            }
        }
        }).mount('#app');


        // VALIDATION FORM
        (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }else{
                event.preventDefault();
                event.stopPropagation();
                $(".logo_container").hide();
                $(".form_container").hide();
                $(".form_preview").removeAttr("style");
                $(".form_preview").addClass("form_preview_active");
                $("html,body").css("background-image","none");
            }
            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>
  </body>
</html>