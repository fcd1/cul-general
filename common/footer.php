    </div><!--end wrap-->
    <p class="footer11px">
    <?php
      $unit_contact = cul_general_get_unit_contact();
      if ($unit_contact != "") {
        echo $unit_contact;
      }
    ?>
    </p>
    <p class="copyright-footer"> 
      <?php echo cul_copyright_information();?>
    </p>


    <!-- CULTNBW START -->

    <!-- fcd1, 09Oct14: Added following conditional due to IE quirk, body not getting -->
    <!-- padding set by CUL widget, so set it by hand -->
    <!--[if lte IE 8]>
    <style> body.hascultnbw {padding-top:50px} </style>
    <![endif]-->

    <script type="text/javascript">
	CULh_style = 'staticlink'; // limited, staticlink, static, search, standard (default)
	//CULh_width = ''; // fixed, fluid (default)
	//CULh_colorfg = '#333333'; // topnavbar foreground color. hex value. ex: #002B7F
	//CULh_colorbg = '#666666'; // topnavbar background color. hex value. ex: #779BC3
	//CULh_nobs = 1; // uncomment to NOT load our bootstrap javascript file and or use your own (v2.3.x required)
	//CULh_notk = 1; // uncomment to NOT load our ldpd-toolkit.js and or use your own.
	//CULh_links = { "http://clio.columbia.edu/" : "CLIO", "http://hours.library.columbia.edu" : "Hours" }; // custom (CUL/IS menu) dropdown links. "URL1":"TEXT1", "URL2":"TEXT2", "URL3":"TEXT3"
	//CULh_brand = { url : 'http://library.columbia.edu', tablet : 'Columbia University Libraries', phone : 'Libraries' }; // custom "brand" titles for tablet and phone
    </script>
    <!--[if ! IE 8]>
    <script src="//cdn.cul.columbia.edu/ldpd-toolkit/build/js/jquery-cul.js"></script>
    <![endif]-->	
    <script src="//cdn.cul.columbia.edu/ldpd-toolkit/widgets/cultnbw.min.js"></script>
    <!-- /CULTNBW END -->

  </body>
</html>
