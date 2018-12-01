    <!-- Footer -->
    <footer class="py-5 bg-dark" style="margin-top: 70px">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Hotel Topia <?php echo date('Y'); ?></p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- WhatsHelp.io widget -->
    <script type="text/javascript">
        (function () {
            var options = {
                //facebook: "junioryauricasapage", // Facebook page ID
                whatsapp: "+51992572772", // WhatsApp number
                email: "junioryauricasa@gmail.com", // Email
                sms: "+51992572772", // Sms phone number
                call: "+51992572772", // Call phone number
                company_logo_url: "//scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19756724_725137717673093_7213871560272998829_n.png?oh=19d6613647f9658de20163ac8a42fcd6&oe=5A2B7D0D", // URL of company logo (png, jpg, gif)
                greeting_message: "Hola, ¿cómo puedo ayudarte? Envíenos un mensaje ahora para obtener ayuda.", // Text of greeting message
                call_to_action: "Contácto", // Call to action
                button_color: "#000000", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "facebook,whatsapp,sms,call,email" // Order of buttons
            };
            var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    <!-- /WhatsHelp.io widget -->

    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5ae191146a93480011985f75&product=sticky-share-buttons"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- 
        more scripts
        Descriptión: Bloquear F12 y Click Derecho
     -->
    <script type="text/javascript">
        document.oncontextmenu = function(){return false;}

        $(document).keydown(function (event) {
            if (event.keyCode == 123) { // Prevent F12
                return false;
            } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) { // Prevent Ctrl+Shift+I        
                return false;
            }
        });
    </script>
    <!-- more END scripts -->    

  </body>
</html>