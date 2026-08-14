<footer class="footer bg-light text-dark">
                    <div class="container-fluid">
                        <div class="text-center row copyright text-align-center">
                            <p>All Rights Reserved &copy; Cap Rock Real Estate2023</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>





    <!--   Core JS Files   -->
    <script src="{{asset('user/dash/js/core/jquery.3.2.1.min.js ')}} "></script>
    <script src="{{asset('user/dash/js/core/popper.min.js ')}}"></script>
    <script src="{{asset('user/dash/js/core/bootstrap.min.js ')}} "></script>
    <script src="{{asset('user/dash/js/customs.js ')}}"></script>
    
    <!-- jQuery UI -->
    <script src="{{asset('user/dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js ')}}"></script>
    <script src="{{asset('user/dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js ')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('user/dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js ')}} "></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('user/dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js ')}} "></script>

    <!-- Sweet Alert -->
    <script src="{{asset('user/dash/js/plugin/sweetalert/sweetalert.min.js ')}} "></script>
    <!-- Bootstrap Notify -->
    <script src="{{asset('user/dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js ')}} "></script>
    
    <script type="text/javascript" src="{{asset('user/https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js ')}}"></script>
    
<script type="text/javascript">
        
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

</script>
    <!-- Atlantis JS -->
    <script src="{{asset('user/dash/js/atlantis.min.js')}}"></script>
    <script src="{{asset('user/dash/js/atlantis.js')}}"></script>
    <script type="text/javascript">
        var badWords = [ 
            '<!--Start of Tawk.to Script-->',
            '<script type="text/javascript">', 
            '<!--End of Tawk.to Script-->'
                    ];
        $(':input').on('blur', function(){
            var value = $(this).val();
            $.each(badWords, function(idx, word){
            value = value.replace(word, '');
            });
            $(this).val( value);
        });
    </script>
     <script>
        $(document).ready( function () {
            $('#ShipTable').DataTable({
                order: [ [0, 'desc'] ],
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'print', 'excel','pdf'
            ] 
            });

            
            $(".dataTables_length select").addClass("bg-light text-dark");
            $(".dataTables_filter input").addClass("bg-light text-dark");
        } );
    </script>
    <script>
        $(document).ready( function () {
            $('.UserTable').DataTable({
                order: [ [0, 'desc'] ]
            });
            $(".dataTables_length select").addClass("bg-light text-dark");
            $(".dataTables_filter input").addClass("bg-light text-dark");
        } );
    </script>
        <!-- Livewire Scripts -->

<script src="/livewire/livewire.js?id=25f025805c3c370f7e87" data-turbo-eval="false" data-turbolinks-eval="false"></script>
<script data-turbo-eval="false" data-turbolinks-eval="false">
    if (window.livewire) {
        console.warn('Livewire: It looks like Livewire\'s @livewireScripts JavaScript assets have already been loaded. Make sure you aren\'t loading them twice.')
    }

    window.livewire = new Livewire();
    window.livewire.devTools(true);
    window.Livewire = window.livewire;
    window.livewire_app_url = '';
    window.livewire_token = '8GJqGbzf0178VjRYXfHuddZNahKzu6Pq938fC1FJ';

    /* Make sure Livewire loads first. */
    if (window.Alpine) {
        /* Defer showing the warning so it doesn't get buried under downstream errors. */
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function() {
                console.warn("Livewire: It looks like AlpineJS has already been loaded. Make sure Livewire\'s scripts are loaded before Alpine.\\n\\n Reference docs for more info: http://laravel-livewire.com/docs/alpine-js")
            })
        });
    }

    /* Make Alpine wait until Livewire is finished rendering to do its thing. */
    window.deferLoadingAlpine = function (callback) {
        window.addEventListener('livewire:load', function () {
            callback();
        });
    };

    document.addEventListener("DOMContentLoaded", function () {
        window.livewire.start();
    });
</script>

</body>
</html>

