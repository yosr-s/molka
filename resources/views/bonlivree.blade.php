
<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from ivonne.vercel.app/general-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 19:43:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeMarch">
  <!-- Site Title -->
  <title>General Invoice</title>
  <link rel="stylesheet" href="{{url('assetss/css/style.css')}}">
</head>

<body>
  <div class="cs-container">
    <div class="cs-invoice cs-style1">
      <div class="cs-invoice_in" id="download_section">
        <div class="cs-invoice_head cs-type1 cs-mb25">
          <div class="cs-invoice_left">
            <p class="cs-invoice_number cs-primary_color cs-mb5 cs-f16"><b class="cs-primary_color">bon de livraison globale livré par jour</b> </p>
            <p class="cs-invoice_date cs-primary_color cs-m0"><b class="cs-primary_color">Date: </b>05.01.2022</p>
          </div>
          <div class="cs-invoice_right cs-text_right">
            <div class="cs-logo cs-mb5"><img src="{{url('assetss/img/logo.svg')}}" alt="Logo"></div>
          </div>
        </div>
        <div class="cs-invoice_head cs-mb10">
          <div class="cs-invoice_left">
            <b class="cs-primary_color">code TVA:000/M/A/1753166/R</b>
           
          </div>
          <div class="cs-invoice_right cs-text_right">
            <b class="cs-primary_color">Tel:(+216)25 103 466</b>
            
          </div>
        </div>
        <div class="cs-table cs-style1">
          <div class="cs-round_border">
            <div class="cs-table_responsive">
              <table>
                <thead>
                  <tr>
                    <th class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Ref</th>
                    <th class="cs-width_4 cs-semi_bold cs-primary_color cs-focus_bg">Contenu</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg">Prix</th>
                    <th class="cs-width_1 cs-semi_bold cs-primary_color cs-focus_bg">quantité</th>
                    <th class="cs-width_2 cs-semi_bold cs-primary_color cs-focus_bg cs-text_right">Total</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($donnees as $donnee)
                  <tr>
                    <td class="cs-width_3">App Development</td>
                    <td class="cs-width_4">{{$donnee['contenu']}}</td>
                    <td class="cs-width_2">{{$donnee['prix']}}</td>
                    <td class="cs-width_1">{{$donnee['qte']}}</td>
                    <td class="cs-width_2 cs-text_right">{{$donnee['prix']*$donnee['qte']}}</td>
                  </tr>
                  @endforeach
                 
                  
                </tbody>
              </table>
            </div>
            <div class="cs-invoice_footer cs-border_top">
              <div class="cs-left_footer cs-mobile_hide">
              
              </div>
              <div class="cs-right_footer">
                <table>
                  <tbody>
                    <tr class="cs-border_left">
                      <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Total colis</td>
                      <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">{{$count}}</td>
                    </tr>
                    <tr class="cs-border_left">
                      <td class="cs-width_3 cs-semi_bold cs-primary_color cs-focus_bg">Total HT</td>
                      <td class="cs-width_3 cs-semi_bold cs-focus_bg cs-primary_color cs-text_right">{{$sum}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="cs-invoice_footer">
            <div class="cs-left_footer cs-mobile_hide"></div>
            <div class="cs-right_footer">
              <table>
                <tbody>
                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="cs-note">
         
          <div class="cs-note_right">
           
          </div>
        </div><!-- .cs-note -->
      </div>
      <div class="cs-invoice_btns cs-hide_print">
        <a href="javascript:window.print()" class="cs-invoice_btn cs-color1">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><circle cx="392" cy="184" r="24"/></svg>
          <span>Print</span>
        </a>
        <button id="download_btn" class="cs-invoice_btn cs-color2">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Download</title><path d="M336 176h40a40 40 0 0140 40v208a40 40 0 01-40 40H136a40 40 0 01-40-40V216a40 40 0 0140-40h40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M176 272l80 80 80-80M256 48v288"/></svg>
          <span>Download</span>
        </button>
      </div>
    </div>
  </div>
  <script src="{{url('assetss/js/jquery.min.js')}}"></script>
  <script src="{{url('assetss/js/jspdf.min.js')}}"></script>
  <script src="{{url('assetss/js/html2canvas.min.js')}}"></script>
  <script src="{{url('assetss/js/main.js')}}"></script>
</body>

<!-- Mirrored from ivonne.vercel.app/general-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 19:43:43 GMT -->
</html>