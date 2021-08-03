
{{-- <script src="{{ asset('js/app.js') }}" async defer></script> --}}

<script src="{{ mix('/js/app.js') }}"></script>

{{-- <script type="text/javascript" src="app.js"></script> --}}
    <!-- files required by star rating -->
    {{-- <script src="star/star-rating.min.js"></script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> --}}
    <script>
      
        // pdf to Html conversion script
        function genPDF() {
            html2canvas($('#pdf'), {//here we r printing only resume part ie.,pdf
                onrendered: function (canvas) {
                    var img = canvas.toDataURL("image/jpeg");
                    var doc = new jsPDF();
                    doc.addImage(img, 'JPEG', 5, 5);
                    doc.save('resume.pdf');
                }
            });
        }
                    
    </script>
    <footer class="footer">
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
    </footer>

    {{-- <div class="sub-footer">
        <div class="container-fluid" style="background-color:#111;color:#6c757d!important;padding-top:5px;margin:0;">
                <div class="row" >
                        <div class="col-lg-12 h-100 text-center my-auto">
                                <p>Designed with <i class="fa fa-heart" style="font-size:10px;color:red"></i> for Developers.</p>   
                        </div> 
                </div> 
        </div>
    </div> --}}