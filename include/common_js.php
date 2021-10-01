<script type="text/javascript" src="resources/themes_resource/blue_diamond/js/jquery-v1.11.3.js"></script>
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/js/jquery.easyResponsiveTabs.js"></script>
    <script>
        /*==========================================================
                       nav togel js
        =============================================================*/
        
        $(document).ready(function(e) {
            $(".hamberger").click(function(){
                $(".main-menu").toggle(500);
                });
        });
    </script>
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/js/bootstrap.min.js"></script>
    <!-- main slider files -->
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/js/jquery.flexslider-min.js"></script>
    <!-- owl carousal files -->
    
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/css/owe-crasoul/owl.carousel.js"></script>
    <!-- owl gallery files -->
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/css/gallery/js/isotope.min.js"></script>
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/css/gallery/js/jquery.appear.js"></script>
   
    <script type="text/javascript" src="resources/vendors/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="resources/themes_resource/blue_diamond/css/gallery/js/custom.js"></script>
    <script>
        $(document).ready(function() {
        
              var owl = $("#owl-demo");
        
              owl.owlCarousel();
        
              // Custom Navigation Events
              $(".next").click(function(){
                owl.trigger('owl.next');
              })
              $(".prev").click(function(){
                owl.trigger('owl.prev');
              })
              $(".play").click(function(){
                owl.trigger('owl.play',1000);
              })
              $(".stop").click(function(){
                owl.trigger('owl.stop');
              })
        
        
            });
    </script>
    <script>
        ajaxurl = "http://hardbinding.in/" + "ajax_request/get_request";
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
        
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function (event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
        
                $name.text($tab.text());
        
                $info.show();
            }
        });
        
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });
        
        });
    </script>
    <script type='text/javascript'>
        $(function(){
        var overlay = $('<div id="overlay"></div>');
        overlay.show();
        overlay.appendTo(document.body);
        $('.popup').show();
        $('.close').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });
        
        $('.x').click(function(){
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
        });
        });
    </script>
    <?php if ($page_name =='page_contact') {?>
     <script src="js/contactValidation.js"></script>
<?php } ?>
