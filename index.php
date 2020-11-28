<html lang="en"><head>
    <meta charset="utf-8">
    <title>E-Complaint on 7</title>
    <meta name="description" content="E-Complaint on 7 (Cepat Lapor, Cepat Respon) - Seluruh isian Form Pengaduan Anda, akan kami Jamin Kerahasiaannya (Whistle Blower)">
    <meta name="author" content="formfacade.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="https://formfacade.com/public/116525175127847808374/all/form/1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg">
    <link rel="icon" href="https://lh5.googleusercontent.com/-HAm9hZyZ5CU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuckaMYnuN-urL4wFzYfaZeOC8ifgww/s96-c/photo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/dosis/assets/dist/css/plugins.css">
    <link rel="stylesheet" href="/theme/dosis/style.css?font=%22Roboto%22%2C%20sans-serif&amp;heading=%22Poppins%22%2C%20sans-serif&amp;primary=%23F44336&amp;primaryActive=%23E53935&amp;secondary=%23FDD835">
      <meta name="robots" content="noindex, nofollow">

  <link href="https://formfacade.com/mstore-header2/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">
  <link href="https://formfacade.com/mstore-header2/css/vendor/socicon.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="/jstree/themes/default/style.min.css">
  
  <script src="/js/ejs.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-auth.js"></script>
  <script>
    var firebaseConfig = {
      apiKey: "AIzaSyCcbdBCI-Kgcz3tE1N4paeF9a-vdi3Uzz8",
      authDomain: location.hostname=='localhost'?'formfacade.firebaseapp.com':location.hostname,
      databaseURL: "https://formfacade.firebaseio.com",
      projectId: "formfacade",
      storageBucket: "",
      messagingSenderId: "743872305260",
      appId: "1:743872305260:web:c5f7c23ccfa724447be049"
    };
    firebase.initializeApp(firebaseConfig);
  </script>
  <script>
    FacadeSignin = {
      params:{"action":"public","userId":"116525175127847808374","page":"all","publishId":"1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg"},
      query:{},
      info:{"description":"Cepat Lapor, Cepat Respon","footer":"Polda Kalimantan Barat","language":"en","themePrimary":"#000000","themeSecondary":"#000000","themecolor":"colorful-F44336","title":"E-Complaint on 7"},
      init:function()
      {
        var curr = this;
        firebase.auth().onAuthStateChanged(function(auth){
          curr.loggedIn = auth?auth.providerData[0]:null;
          if(curr.loggedIn && curr.loggedIn.uid==curr.params.userId)
          {
            console.log('Logged in as '+curr.loggedIn.uid);
          }
          else if(curr.params.action=='edit'||curr.params.action=='task')
          {
            if(location.hostname=='localhost') return;
            var repath = '/restrict'+window.location.pathname;
            location.href = repath;
          }
        });
      },
      signIn: function()
      {
        var curr = this;
        var provider = new firebase.auth.GoogleAuthProvider();
        firebase.auth().signInWithPopup(provider).then(function(result) {
          curr.init();
        }).catch(function(err){
          console.error('fail', err);
          curr.init();
        });
      }
    }
    FacadeSignin.init();
  </script>

  <script type="text/javascript" src="https://transloadit.edgly.net/releases/uppy/v1.19.2/uppy.min.js"></script><script type="text/javascript" src="https://transloadit.edgly.net/releases/uppy/locales/v1.16.9/en_US.min.js"></script></head><body data-new-gr-c-s-check-loaded="14.984.0" data-gr-ext-installed=""><div id="LoginAlert" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Restricted Access</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p>You have to login to access this page.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="FacadeSignin.signIn()" data-dismiss="modal">Proceed</button>
        </div>
      </div>
    </div>
  </div>

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-2J8RRM69MY"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-2J8RRM69MY');
  </script>


  <style>
    .ff-form td{ font-size:smaller; }
    #viewform select{ -webkit-appearance: menulist; appearance:menulist; }
    .ff-form select{ -webkit-appearance: menulist; appearance:menulist; }

    .ff-logo img{ display:inline; margin-right:5px; width:30px !important; height:auto !important; }
    #ff-compose{ padding:20px; border-radius:.25rem; 
      background-color:#fff;
    }
    .ff-form .form-check-input{ margin-top:6px; }
    .ff-form .form-check-label{ padding-left:5px; }
    .ff-form .form-check-other{ padding-top:5px; }
    .ff-form .form-check-other input[type=text]{ margin-left:5px; }
    .ff-form .form-check-other input[type=radio]{ margin-top:15px; }
    .ff-form .form-check-other input[type=checkbox]{ margin-top:15px; }
    .ff-form .ff-bill{ width:auto; min-width:60%; max-width:100%; }
    @media only screen and (max-width: 768px) {
      .ff-form .ff-bill{ width:100%; max-width:100%; }
    }
    .ff-form .ff-bill td{ }
    .ff-form .ff-bill tr td:first-child{ text-align:left; }
    .ff-form .ff-bill thead{ font-weight:bold; }
    .ff-form .ff-bill tfoot{ font-weight:bold; }
    .ff-form .ff-bill tfoot tr td:first-child{ text-align:right; }
    .ff-html-row img{ display:inline; }
    .ff-html-row td{ border-bottom-width:0px; }
    
    .ff-edittheme{ display:none !important; }
    
    
      .background{ background-color:#f5f5f5; }
      .font{ font-family:"Work Sans",Helvetica,Arial,sans-serif; }
    
    #EditModal select{ -webkit-appearance:menulist; appearance:menulist; }
  </style>



  <div class="modal fade" id="ShareModal" tabindex="-1" role="dialog" style="z-index:9999;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      </div>
    </div>
  </div>
  
  
  <script>
    shareFacade = {
      params:{"action":"public","userId":"116525175127847808374","page":"all","publishId":"1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg"},
      query:{},
      template: {"share":"\r\n<div class=\"modal-header\">\r\n  <h5 class=\"modal-title\"><%-formFacade.lang('Share this form with others')%></h5>\r\n  <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\r\n    <span aria-hidden=\"true\">&times;</span>\r\n  </button>\r\n</div>\r\n<div class=\"modal-body\">\r\n<form>\r\n    <div class=\"form-group\">\r\n      <input type=\"text\" class=\"form-control\" name=\"site\" \r\n      value=\"https://<%-formFacade.data.facade&&formFacade.data.facade.neartail?'neartail.com':'formfaca.de'%>/sm/<%-short.shortId%>\"/>\r\n    </div>\r\n</form>\r\n</div>\r\n<div class=\"modal-footer\">\r\n  <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">\r\n    <%-formFacade.lang('Done')%>\r\n  </button>\r\n</div>\r\n"},
      render: function()
      {
        var curr = this;
        var userId = curr.params.userId;
        var publishId = curr.params.publishId;
        if(!userId || !publishId) return alert('No user or form found');
        return jQuery.get('https://formfacade.com/shortid/'+userId+'/form/'+publishId).promise().then(function(jso){
          curr.short = jso;
          if(navigator.share && false) 
          {
            var navopts = {
              title:'E-Complaint on 7 (Cepat Lapor, Cepat Respon)', 
              url:'https://formfaca.de/sm/'+jso.shortId
            };
            return navigator.share(navopts);
          }
          else
          {
            var mhtml = ejs.render(curr.template.share, curr);
            jQuery('#ShareModal .modal-content').html(mhtml);
            jQuery('#ShareModal').modal({backdrop:'static', keyboard:false});
          }
        });
      }
  }
  </script>
  






    <nav id="navbar-fixed-top" class="navbar navbar-dark navbar-expand-lg header-fullscreen navbar-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)">
              E-Complaint on 7
            </a>
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggler collapsed" onclick="shareFacade.render()">
                    <i class="material-icons share"></i>
                </button>
            </div>
            <div id="navbar-scroll" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-white-border btn-radius btn-xs d-lg-block d-none" href="javascript:void(0)" onclick="shareFacade.render()">Share</a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container -->
    </nav>
    <!--/.navbar-->
    <!--Intro section-->
    
    <section id="home" class="hero dark fullscreen-hero parallax-me" data-parallax-bg-image="https://lh6.googleusercontent.com/-qj0vUpkoVVcS-7XRnInhDBHh5fkUE0QxtkrfOwd5Azx513A56Z60MwVMJ0fykOt2F1-BFpWgaGxyfZgFT36QVqw0gr36Mjpz91ZZ9oQ3PCebmiTy-_U2taVmPiQdw=w1200">
    
        <div class="hero-overlay hero-gradient"></div>
        <div class="mouse-down"><a class="anchor-scroll" href="#ff-compose"><i class="icon ion-ios-arrow-down"></i></a>
        </div>
        <div class="hero-parallax">
            <div class="hero-inner">
                <div class="hero-content">
                    <div class="container text-center">
                        <div class="row">
                            <div class="col-lg-9 mr-auto ml-auto">
                                <h3 class="text-white display-4">
                                  E-Complaint on 7 (Cepat Lapor, Cepat Respon)
                                </h3>
                                
                                <div class="buttons scroll-to pt-4">
                                    <a href="#ff-compose" class="btn btn-icon btn-white-border btn-radius anchor-scroll">
                                      Start
                                      <i class="icon ion-md-arrow-dropdown"></i>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!--container-->
                </div>
                <!--hero content-->
            </div>
            <!--hero inner-->
        </div>
        <!--parallax hero-->
    </section>

    
    <div class="container pt-4 pb-4" id="formsection">
        
        <div class="row">
            <div class="col-xs-12 col-md-8 ml-auto mr-auto margin-b-30" id="ff-compose">




<form id="Publish1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg" class="ff-form" method="POST" action="https://docs.google.com/forms/u/1/d/e/1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg/formResponse">
<input type="hidden" name="id" value="1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg">
<input type="hidden" name="pageHistory" value="">
<input type="hidden" id="Payment1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg" name="paymentId" value="">

<div class="ff-section" id="ff-sec-root" style="display:block;">
  
  <h3 class="h3 ff-title" id="ff-title-root">
    E-Complaint on 7 (Cepat Lapor, Cepat Respon)
    
  </h3>
  
  <div class="ff-description">
    <p>
      Seluruh isian Form Pengaduan Anda, akan kami Jamin Kerahasiaannya (Whistle Blower)
      
    </p>
  </div>
  
<div class="ff-secfields">


  <div class="form-group ff-item  ff-text " id="ff-id-1633920210">
    
      <label for="Widget1633920210">
          Nama Lengkap (Sesuai KTP)
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('1633920210')">settings</i>
      </label>
      
      
    
    
      
        <input type="text" class="form-control" id="Widget1633920210" name="entry.2005620554" value="" placeholder="" required="">
      
    
    <div id="Error1633920210" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-list " id="ff-id-151010729">
    
      <label for="Widget151010729">
          Jenis Kelamin
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('151010729')">settings</i>
      </label>
      
      
    
    
      
      
        <select class="form-control" id="Widget151010729" name="entry.510674400" required="">
        <option value="">- Choose -</option>
        
          <option value="Pria">Pria</option>
        
          <option value="Wanita">Wanita</option>
        
        </select>
      
    
    <div id="Error151010729" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-text " id="ff-id-227649005">
    
      <label for="Widget227649005">
          Alamat Email
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('227649005')">settings</i>
      </label>
      
      
    
    
      
        <input type="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,63}$" class="form-control ff-email-widget" id="Widget227649005" name="entry.1045781291" value="" placeholder="" required="">
      
    
    <div id="Error227649005" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-text " id="ff-id-1770822543">
    
      <label for="Widget1770822543">
          Nomor Whatsapp
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('1770822543')">settings</i>
      </label>
      
      
    
    
      
        <input type="text" class="form-control" id="Widget1770822543" name="entry.1166974658" value="" placeholder="" required="">
      
    
    <div id="Error1770822543" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-text " id="ff-id-189548312">
    
      <label for="Widget189548312">
          Upload Foto KTP / Data Diri
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('189548312')">settings</i>
      </label>
      
      
    
    
      <input type="hidden" id="Widget189548312" name="entry.1851668299" value="">
      <div id="Display189548312" class="ff-file-upload" data-files="" data-entry="1851668299" data-id="189548312" data-uppied="true"><a class="addfile" href="javascript:void(0)">Add file</a></div>
    
    <div id="Error189548312" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-list " id="ff-id-792064965">
    
      <label for="Widget792064965">
          Kategori Komplain / Aduan
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('792064965')">settings</i>
      </label>
      
      
    
    
      
      
        <select class="form-control" id="Widget792064965" name="entry.2076666639" required="">
        <option value="">- Choose -</option>
        
          <option value="Pelayanan yang buruk">Pelayanan yang buruk</option>
        
          <option value="Penyalahgunaan Wewenang">Penyalahgunaan Wewenang</option>
        
          <option value="Kekeliruan Diskresi">Kekeliruan Diskresi</option>
        
          <option value="Tindakan Diskriminasi">Tindakan Diskriminasi</option>
        
          <option value="Korupsi / Gratifikasi">Korupsi / Gratifikasi</option>
        
          <option value="Pelanggaran HAM">Pelanggaran HAM</option>
        
          <option value="Netralitas Polri">Netralitas Polri</option>
        
          <option value="Transparansi Penyidikan">Transparansi Penyidikan</option>
        
        </select>
      
    
    <div id="Error792064965" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-date " id="ff-id-2064109453">
    
      <label for="Widget2064109453">
          Tanggal Komplain
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('2064109453')">settings</i>
      </label>
      
      
    
    
      
        <input type="date" class="form-control" id="Widget2064109453" name="entry.1159019809" required="" value="" placeholder="yyyy-mm-dd" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
      
    
    <div id="Error2064109453" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-list " id="ff-id-2129718181">
    
      <label for="Widget2129718181">
          Lokasi Komplain / Aduan
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('2129718181')">settings</i>
      </label>
      
      
    
    
      
      
        <select class="form-control" id="Widget2129718181" name="entry.1881944588" required="">
        <option value="">- Choose -</option>
        
          <option value="Singkawang">Singkawang</option>
        
          <option value="Pontianak">Pontianak</option>
        
          <option value="Bengkayang">Bengkayang</option>
        
          <option value="Kapuas Hulu">Kapuas Hulu</option>
        
          <option value="Kayong Utara">Kayong Utara</option>
        
          <option value="Ketapang">Ketapang</option>
        
          <option value="Kubu Raya">Kubu Raya</option>
        
          <option value="Landak">Landak</option>
        
          <option value="Melawi">Melawi</option>
        
          <option value="Mempawah">Mempawah</option>
        
          <option value="Sambas">Sambas</option>
        
          <option value="Sanggau">Sanggau</option>
        
          <option value="Sintang">Sintang</option>
        
        </select>
      
    
    <div id="Error2129718181" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-paragraph_text " id="ff-id-1742488403">
    
      <label for="Widget1742488403">
          Uraian Aduan / Komplain
          <span class="ff-required">*</span> 
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('1742488403')">settings</i>
      </label>
      
      
    
    
      <textarea class="form-control" id="Widget1742488403" name="entry.332025254" placeholder="" required="" rows="3"></textarea>
    
    <div id="Error1742488403" class="ff-widget-error"></div>
  </div>

  <div class="form-group ff-item  ff-text " id="ff-id-77246680">
    
      <label for="Widget77246680">
          Upload Lampiran (Bukti Kejadian) *opsional
          
          <i class="ff-editwidget material-icons" onclick="editFacade.showWidget('77246680')">settings</i>
      </label>
      
      
    
    
      <input type="hidden" id="Widget77246680" name="entry.1557334501" value="">
      <div id="Display77246680" class="ff-file-upload" data-files="" data-entry="1557334501" data-id="77246680" data-uppied="true"><a class="addfile" href="javascript:void(0)">Add file</a></div>
    
    <div id="Error77246680" class="ff-widget-error"></div>
  </div>

</div>
<div class="ff-button-bar">


  
    <button type="button" class="btn btn-primary ff-submit" id="ff-submit-root" onclick="formFacade.submit(this.form, 'root')">
      <img src="https://formfacade.com/img/wa.svg" class="ff-submit-icon">
      Kirim Aduan
    </button>
  
  




  
  

</div>
</div>


<div class="ff-section" id="ff-sec-ending" style="display:none">
<div class="ff-secfields">
  <h3 class="h3 ff-title">E-Complaint on 7 (Cepat Lapor, Cepat Respon)</h3>
  <p style="padding-bottom:80px;">Click Send message to finish.</p>
</div>
<div class="ff-button-bar">
  <button type="button" class="btn btn-secondary ff-back" onclick="formFacade.gotoSection(this.form, 'root', 'back')">
    Back
  </button>
  <button type="button" class="btn btn-primary ff-submit" onclick="formFacade.submit(this.form, '-3')">
    Send message
  </button>
</div>
</div>

</form>


</div>
        </div>
        
        
    </div>


    
    <footer class="footer">
        <svg class="svg-footer z-index-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 223" enable-background="new 0 0 1920 223" xml:space="preserve">
            <polygon class="svg-white" opacity=".15" points="0,223 1920,223 1920,0 "></polygon>
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-md-5 margin-b-30">
                    <span>
                        Polda Kalimantan Barat
                        
                    </span>
                </div>
                <!--copyright col-->
                <div class="col-md-7 text-right">
                    <ul class="list-inline margin-b-30">
                        <li class="list-inline-item"> 
                            
                                <a href="">
                                    © 2020.
                                    All Rights Reserved.
                                </a>
                            
                        </li>
                    </ul>
                </div>
                <!--footer nav col-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </footer>
    <!--footer end-->

    <!--back to top-->
    <a href="#" class="scrollToTop"><i class="icon ion-ios-arrow-up"></i></a>
    <!--back to top end-->
    <!--compile plugins-->
    <script src="/dosis/assets/dist/js/plugins.js"></script>
    <script src="/dosis/assets/dist/js/dosis.custom.js"></script>


  

  
  <script async="" defer="" src="/include/116525175127847808374/form/1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg/bootstrap.js?div=ff-compose"></script>
  <script>
    jQuery.ajax({
      url:'/include/116525175127847808374/form/1FAIpQLSdO8LxuJtL1FVRD2LpxX8cowroAVCY0kqmnAzGP_XQANQD-vg/bootstrap.js?div=ff-compose&onload=loadEditor',
      dataType:'script', headers:{'flushcache':'yes'}, success:function(data){}
    });
  </script>
  




<div id="ff-style-header">

<style>
  .ff-copy{ padding-top:20px; }
  .ff-form{ text-align:left; }
  .ff-edit{ display:none; }
  .ff-editwidget{ display:none; }
  .ff-form .ff-title{ margin:0px; padding-top:0px; padding-bottom:8px; }
  .ff-form .ff-description{ margin:0px; padding-top:0px; padding-bottom:18px; }
  .ff-form .ff-description p{ margin:0px; padding:0px; line-height:22px; }
  .ff-form .ff-widget-error{ display:none; margin:0px; padding:10px 0px 5px 0px; color:red; }
  .ff-form .ff-widget-error b{ display:inline-block; background-color:red; color:#fff; border-radius:12px;
    width:24px; height:24px; line-height:24px; text-align:center; margin-right:8px; }
  .ff-form .ff-item{ margin:0px; padding-top:0px; padding-bottom:18px; }
  .ff-form .ff-hide{ display:none; }
  .ff-form .ff-item label{ margin:0px; padding-top:0px; padding-bottom:6px; line-height:22px; }
  .ff-form .ff-item .ff-help{ display:block; margin:-6px 0px 0px 0px; padding-top:0px; padding-bottom:8px; line-height:18px; font-weight:400; }
  .ff-form .ff-item .ff-help p{ margin:0px; }
  .ff-form .ff-item .ff-image{ margin:0px; padding-top:0px; padding-bottom:12px; }
  .ff-form .form-check-label{ display:inline-block; font-weight:400; }
  .ff-form .ff-required{ color:red; }
  .ff-form table{ width:100%; }
  .ff-form table tr{ height:32px; }
  .ff-form table tr td{ vertical-align:middle; text-align:center; padding: 6px 2px; }
  .ff-form table tr .ff-grid-label{ text-align:left; }
  .ff-form .form-check{ min-width:50px; }
  .ff-form .ff-image{ display:block; max-width:100%; }
  .ff-form .ff-video{ display:block; max-width:100%; }
  .ff-form .ff-button-bar{ padding-top:10px; padding-bottom:10px; }
  .ff-form [type='date']::-webkit-inner-spin-button { display: none; }
  .ff-form [type='time']::-webkit-inner-spin-button { display: none; }
  .ff-form .form-check-other input[type=text]{ display:inline-block; width:auto; }
  .ff-alert{ padding:.75rem 1.25rem; margin-bottom:1rem; border:1px solid transparent;
    border-radius: .25rem; color:#721c24; background-color:#f8d7da; border-color:#f5c6cb; }
  .ff-partial{ display:flex; justify-content:space-between; max-width:800px; margin-left:auto; margin-right:auto; margin-bottom:8px; 
    padding:.75rem 1.25rem; border:1px solid transparent; border-radius: .25rem; color:#004085; background-color:#cce5ff; border-color:#b8daff; }
  .ff-partial a{ padding-left:12px; color:#004085; text-decoration:underline; font-weight:500; }
  .ff-partial a:hover{ text-decoration:underline; font-weight:500; }
  .ff-form .ff-button-bar{}
  .ff-form button{ min-width:100px; min-height:50px; line-height:2; padding:10px 18px; cursor:pointer; }
  .ff-form input::placeholder, .ff-form textarea::placeholder{ color:rgba(0,0,0,0.54); font-size:smaller; }
  .ff-form .ff-check-table{ display:table; width:100%; }
  .ff-form .ff-check-cell{ display:inline-block; padding-left:0px; padding-right:20px; margin-left:0px; margin-right:20px; margin-top:10px; margin-bottom:10px; }
  .ff-form .ff-check-cell .ff-check-cell-image{ display:block; margin-bottom:10px; vertical-align:bottom; max-height:250px; cursor:pointer; }
  .ff-form .ff-check-cell .form-check-input{ margin-left:0px; }
  .ff-form .ff-check-cell .form-check-label{ margin-left:20px; }
  .ff-form .ff-powered{ 
    float:right; text-align:center; text-decoration:none;
    padding-bottom:0px; padding-top:12px; margin-left:12px;
  }
  .ff-form .ff-powered:hover{ color:#001f3f !important; border-bottom:1px solid #001f3f !important; }
  .ff-form .ff-warned{ 
    float:right; text-align:center; text-decoration:none; border-radius:2px;
    color:#000!important; background-color:#ffdddd!important; padding:10px; border:0px solid #001f3f !important; 
  }
  .ff-form .ff-warned b{ font-size:17px; }
  .ff-form .ff-blocked{ 
    float:right; text-align:center; text-decoration:none; border-radius:2px;
    color:#fff!important; background-color:#f44336!important; padding:10px; border:0px solid #001f3f !important; 
  }
  .ff-form .ff-blocked b{ font-size:17px; }
  .ff-form .ff-submit-icon{ display:inline; margin-top:-4px; margin-right:2px; width:24px; height:auto; vertical-align:middle; }
  #ff-success{ padding-top:40px; padding-bottom:40px; min-height:calc(100vh - 340px); text-align:center; font-size:24px; font-weight:500; }
  .ff-summary, .ff-form .ff-summary{ width:auto; }
  .ff-summary tr td:nth-child(1), .ff-form .ff-summary tr td:nth-child(1) { font-weight:550; }
  .ff-summary tr td, .ff-form .ff-summary tr td{ vertical-align:top; text-align:left; }
  .uppy-Dashboard .uppy-Dashboard-close{ top:0px !important; right:0px !important; }
  .uppy-Dashboard .uppy-Dashboard-close span{ display: inline-block; width: 40px; height: 40px; text-align: center; background-color: red; }
  .uppy-Dashboard .uppy-DashboardContent-addMore{ position:absolute; right:80px; }
  @media only screen and (max-width: 768px) {
    .uppy-Dashboard .uppy-DashboardContent-addMore{ position:absolute; right:50px; }
  }
  .uppy-StatusBar-content[title="Complete"] .uppy-StatusBar-statusPrimary{
    cursor:pointer; margin-top:2px; padding:10px 9px 11px 9px; border-radius:4px; 
    box-shadow:0px 8px 15px rgba(0, 0, 0, 0.2); background-color:#1bb240; 
    color:white; text-shadow:0 1px 1px rgba(0, 0, 0, 0.2);
  }
  .uppy-StatusBar-content[title="Complete"] .uppy-StatusBar-statusPrimary svg{ color:white; }

  
    .ff-form .ff-next, .ff-form .ff-submit{ background-color:#4bc214; color:#fff; }
    .ff-form .ff-next:hover, .ff-form .ff-submit:hover {
      background-color:#4bc214; filter:brightness(95%); color:#fff; 
      box-shadow: 0px 0px 20px rgb(75, 194, 20, 0.4);
    }
  
  
  
</style>
  
  
<style>
  .ff-form{ max-width:800px; margin-left:auto; margin-right:auto; }

  @media only screen and (max-width: 768px) {
    .ff-form{ max-width:100%; margin-left:auto; margin-right:auto; }
  }
</style>




    <link href="https://transloadit.edgly.net/releases/uppy/v1.19.2/uppy.min.css" rel="stylesheet">
    <style>
      .uppy-Dashboard{ z-index:9999 !important; }
      .ff-form .ff-file-upload{ padding-top:2px; }
      .ff-form .ff-file-upload a{ display:inline-block; vertical-align:middle; background-color:#ededed; color:#606060; text-decoration:none; }
      .ff-form .ff-file-upload a:hover { background-color: #d6d6d6; }
      .ff-form .ff-file-upload a.addfile{ padding:6px 8px; border-radius:4px; }
      .ff-form .ff-file-upload a.addedfile{ padding:4px 8px; border-radius:3px; margin-right:2px; }
    </style>






<style>
  .ff-edittheme{ display:none !important; }
  .ff-editsection{ display:none !important; }
</style>


<script>
    console.clear();
    $(document).ready(function(){
        $(document).on("change", "#Widget2064109453", function(ev) {
          ev.preventDefault();
          console.clear();
          const choiceDate = new Date(this.value);
          const currentDate = new Date();
          const expiredDate = new Date(Date.now() - 7 * 24 * 60 * 60 * 1000);
          // console.log("currentDate", currentDate.getDate());
          // console.log("choiceDate", choiceDate.getDate());
          // console.log("expiredDate", expiredDate);
          if (choiceDate >= currentDate || choiceDate < expiredDate) {
            alert("WAKTU ADUAN TIDAK MEMENUHI SYARAT (LEBIH DARI 7 HARI)")
          }
          else {
            console.log("ok");
          }
        });
    });
</script>

</div><div class="uppy-Root uppy-Dashboard uppy-Dashboard--animateOpenClose uppy-Dashboard--modal" data-uppy-theme="light" data-uppy-num-acquirers="0" data-uppy-drag-drop-supported="true" aria-hidden="true" aria-label="File Uploader Window (Press escape to close)"><div class="uppy-Dashboard-overlay" tabindex="-1"></div><div class="uppy-Dashboard-inner" aria-modal="true" role="dialog"><button class="uppy-u-reset uppy-Dashboard-close" type="button" aria-label="Close Modal" title="Close Modal"><span aria-hidden="true">×</span></button><div class="uppy-Dashboard-innerWrap"><div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div><div class="uppy-Dashboard-AddFiles"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><div class="uppy-Dashboard-AddFiles-title">Drop files here, paste, <button type="button" class="uppy-u-reset uppy-Dashboard-browse" data-uppy-super-focusable="true">browse files</button> or import from:</div><div class="uppy-Dashboard-AddFiles-info"><div class="uppy-Dashboard-note">1 file, 10 MB max</div></div></div><span></span><span></span><span></span><span></span><div class="uppy-Dashboard-progressindicators"><div class="uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div></div></div></div><div class="uppy-Root uppy-Dashboard uppy-Dashboard--animateOpenClose uppy-Dashboard--modal" data-uppy-theme="light" data-uppy-num-acquirers="0" data-uppy-drag-drop-supported="true" aria-hidden="true" aria-label="File Uploader Window (Press escape to close)"><div class="uppy-Dashboard-overlay" tabindex="-1"></div><div class="uppy-Dashboard-inner" aria-modal="true" role="dialog"><button class="uppy-u-reset uppy-Dashboard-close" type="button" aria-label="Close Modal" title="Close Modal"><span aria-hidden="true">×</span></button><div class="uppy-Dashboard-innerWrap"><div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div><div class="uppy-Dashboard-AddFiles"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><div class="uppy-Dashboard-AddFiles-title">Drop files here, paste, <button type="button" class="uppy-u-reset uppy-Dashboard-browse" data-uppy-super-focusable="true">browse files</button> or import from:</div><div class="uppy-Dashboard-AddFiles-info"><div class="uppy-Dashboard-note">0-1 file, 10 MB max</div></div></div><span></span><span></span><span></span><span></span><div class="uppy-Dashboard-progressindicators"><div class="uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div></div></div></div><div class="uppy-Root uppy-Dashboard uppy-Dashboard--animateOpenClose uppy-Dashboard--modal" data-uppy-theme="light" data-uppy-num-acquirers="0" data-uppy-drag-drop-supported="true" aria-hidden="true" aria-label="File Uploader Window (Press escape to close)"><div class="uppy-Dashboard-overlay" tabindex="-1"></div><div class="uppy-Dashboard-inner" aria-modal="true" role="dialog"><button class="uppy-u-reset uppy-Dashboard-close" type="button" aria-label="Close Modal" title="Close Modal"><span aria-hidden="true">×</span></button><div class="uppy-Dashboard-innerWrap"><div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div><div class="uppy-Dashboard-AddFiles"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><div class="uppy-Dashboard-AddFiles-title">Drop files here, paste, <button type="button" class="uppy-u-reset uppy-Dashboard-browse" data-uppy-super-focusable="true">browse files</button> or import from:</div><div class="uppy-Dashboard-AddFiles-info"><div class="uppy-Dashboard-note">1 file, 10 MB max</div></div></div><span></span><span></span><span></span><span></span><div class="uppy-Dashboard-progressindicators"><div class="uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div></div></div></div><div class="uppy-Root uppy-Dashboard uppy-Dashboard--animateOpenClose uppy-Dashboard--modal" data-uppy-theme="light" data-uppy-num-acquirers="0" data-uppy-drag-drop-supported="true" aria-hidden="true" aria-label="File Uploader Window (Press escape to close)"><div class="uppy-Dashboard-overlay" tabindex="-1"></div><div class="uppy-Dashboard-inner" aria-modal="true" role="dialog"><button class="uppy-u-reset uppy-Dashboard-close" type="button" aria-label="Close Modal" title="Close Modal"><span aria-hidden="true">×</span></button><div class="uppy-Dashboard-innerWrap"><div class="uppy-Dashboard-dropFilesHereHint">Drop your files here</div><div class="uppy-Dashboard-AddFiles"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><input class="uppy-Dashboard-input" hidden="" aria-hidden="true" tabindex="-1" webkitdirectory="" type="file" name="files[]" accept=".pdf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.csv,.txt,.rtf,.html,.zip,.mp3,.wma,.mpg,.flv,.avi,.3gp,.m4v,.mov,.mp4,.wmv,.jpg,.jpeg,.png,.gif"><div class="uppy-Dashboard-AddFiles-title">Drop files here, paste, <button type="button" class="uppy-u-reset uppy-Dashboard-browse" data-uppy-super-focusable="true">browse files</button> or import from:</div><div class="uppy-Dashboard-AddFiles-info"><div class="uppy-Dashboard-note">0-1 file, 10 MB max</div></div></div><span></span><span></span><span></span><span></span><div class="uppy-Dashboard-progressindicators"><div class="uppy-StatusBar is-waiting" aria-hidden="true"><div class="uppy-StatusBar-progress
                           " role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width: 0%;"></div><div class="uppy-StatusBar-actions"></div></div><div class="uppy uppy-Informer" aria-hidden="true"><p role="alert"> </p></div></div></div></div></div></body></html>