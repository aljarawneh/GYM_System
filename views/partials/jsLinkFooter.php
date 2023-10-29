     <!-- JS Links -->
     <script src="js/jquery.slim.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/main.js"></script>
     <script src="js/wow.js"></script>
     <script>
         wow = new WOW({
             animateClass: 'animated',
             offset: 100,
             callback: function(box) {
                 console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
             }
         });
         wow.init();
         document.getElementById('moar').onclick = function() {
             var section = document.createElement('section');
             section.className = 'section--purple wow fadeInDown';
             this.parentNode.insertBefore(section, this);
         };
     </script>
     </body>

     </html>