
{{-- <script src="{{ asset('js/app.js') }}" async defer></script> --}}

<script src="{{ mix('/js/app.js') }}"></script>

{{-- <script type="text/javascript" src="app.js"></script> --}}
    <!-- files required by star rating -->
    {{-- <script src="star/star-rating.min.js"></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> --}}
    <script>
      
        // pdf to Html conversion script
        
       /**
        function genPDF() {
            html2canvas($('#pdf'), {
                onrendered: function (canvas) {
                    var img = canvas.toDataURL("image/jpeg");
                    var doc = new jsPDF();
                    doc.addImage(img, 'JPEG', 5, 5);
                    doc.save('resume.pdf');
                }
            });
        }
        **/

  
var jsPDF = window.jspdf.jsPDF;
var html2canvas = window.html2canvas;

function genPDF(){
    console.log('Inside downloadpdf ');
    var quotes = document.getElementById('pdf');
    html2canvas(quotes, {
        onrendered: function(canvas) {
            canvas.getContext('2d');
            var HTML_Width = canvas.width;
            var HTML_Height = canvas.height;
            var top_left_margin = 15;
            var PDF_Width = HTML_Width+parseInt(top_left_margin*2);
            var PDF_Height = parseInt(PDF_Width*1.5)+parseInt(top_left_margin*2);
            var canvas_image_width = HTML_Width;
            var canvas_image_height = HTML_Height;
            
            var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
            var pages = $('#pdf .canvas-container').length;

            console.log('height => '+canvas.height+" width => "+canvas.width+'totalpage => '+pages);
            
            
            var imgData = canvas.toDataURL("image/jpeg", 1.0);
            var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
            pdf.addImage(imgData, 'JPEG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
            
            for (var i = 1; i <= pages; i++) {
                //pdf.addPage(PDF_Width, PDF_Height);
                pdf.addPage();
                let margin=-parseInt(PDF_Height*i)+parseInt(top_left_margin*4);
                if(i>1){
                    margin= parseInt(margin+i*8);
                }
                pdf.addImage(imgData, 'JPEG', top_left_margin, margin,canvas_image_width,canvas_image_height);
            }
            pdf.save("resume.pdf");
        }
    });
}
 


       
    
                    
    </script>

    <footer class="footer">
      <div class="container" >

      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 pull-right"></div>
      <div class="col-lg-4 col-md-6 col-sm-12 hidden-lg">

     <a href="#" >
                            <button type="button" class="btn btn-success mx-3 mt-2 mb-3" >Preview CV</button>
                        </a>

      <a href="javascript:genPDF()" >
                            <button type="button" class="btn btn-success mx-3 mt-2 mb-3" >Download CV</button>
                        </a>
      
      </div>

      <div class="col-lg-2 col-md-6 col-sm-12 pull-right">
      
      
      </div>

      </div>
        
      </div>
    </footer>

    {{-- <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 h-100 text-center my-auto">
              
              <p class="text-muted small mb-4 mb-lg-0">cvmama career services &copy; {{date('Y')}}. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center my-auto">

                <ul class="list-inline mb-2">
                
                <li class="list-inline-item">
                  <a href="#">Terms & Privacy Policy</a>
                </li>
              </ul>
                
            </div>
        </div> 
    </div>
    </footer> --}}

    {{-- <div class="sub-footer">
        <div class="container-fluid" style="background-color:#111;color:#6c757d!important;padding-top:5px;margin:0;">
                <div class="row" >
                        <div class="col-lg-12 h-100 text-center my-auto">
                                <p>Designed with <i class="fa fa-heart" style="font-size:10px;color:red"></i> for Developers.</p>   
                        </div> 
                </div> 
        </div>
    </div> --}}