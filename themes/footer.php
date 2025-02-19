<!-- start footer -->
<div class="bg-light-gray has-shapes has-bg-brash bg-brash-top"
     style="background-image: url(images/brushes/footer.svg)">
    <div class="footer-bottom">
        <div class="container">
            <div class="row chart-links">
                <div class="col-6 col-sm-3">
                    <h3>Jodi Charts</h3><br/>
                    <div>
                        <a href="radha-morning/jodi.html">RADHA MORNING</a><br/>
                    </div>
                    
                </div>
                <div class="col-6 col-sm-3">
                    <h3>Pana Charts</h3><br/>
                    <div>
                        <a href="radha-morning/pana.html">RADHA MORNING</a><br/>
                    </div>
                    <div>
                        <a href="radha-night/pana.html">RADHA NIGHT</a><br/>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="block border-top text-center content">
                        Copyright &copy; 2022 <a href="index.html"><?= SITE_DOMAIN_NAME ?></a>. All Rights Reservederved
                    </div>
                    <div class="block border-top text-center content">
                        <a href="http://www.dmca.com/Protection/Status.aspx?ID=b5ca191e-e799-4b1b-8aa0-61b75b4c4aad"
                           title="DMCA.com Protection Status" class="dmca-badge"> <img
                                src="../images.dmca.com/Badges/dmca_protected_sml_120me2e8.png?ID=b5ca191e-e799-4b1b-8aa0-61b75b4c4aad"
                                alt="DMCA.com Protection Status"/></a>
                        <script src="../images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<div class="modal fade rounded" id="timeModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0 bg-transparent">
                <button type="button" class="close" style="margin-right: 6px" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <div class="card-body">
                    <h3 class="font-weight-600 mb-30" id="timeProviderName"></h3>
                    <table class="table t-cell" style="border-collapse:collapse">
                        <tr style="background: #fab028">
                            <th class="t-cell" id="timeTh"></th>
                            <th class="t-cell">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em"
                                     height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                Result Time
                            </th>
                            <th class="t-cell">
                                <svg viewBox="64 64 896 896" focusable="false" data-icon="clock-circle" width="1em"
                                     height="1em" fill="currentColor" aria-hidden="true">
                                    <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                                    <path d="M686.7 638.6L544.1 535.5V288c0-4.4-3.6-8-8-8H488c-4.4 0-8 3.6-8 8v275.4c0 2.6 1.2 5 3.3 6.5l165.4 120.6c3.6 2.6 8.6 1.8 11.2-1.7l28.6-39c2.6-3.7 1.8-8.7-1.8-11.2z"></path>
                                </svg>
                                Bid Last Time
                            </th>
                        </tr>
                        <tr id="timeOpen">
                            <th class="t-cell green" id="timeOpenTh">Open</th>
                            <td class="t-cell" id="timeOpenResult"></td>
                            <td class="t-cell" id="timeOpenLastBid"></td>
                        </tr>
                        <tr id="timeClose">
                            <th class="t-cell red" id="timeCloseTh">Close</th>
                            <td class="t-cell" id="timeCloseResult"></td>
                            <td class="t-cell" id="timeCloseLastBid"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- start of videoModal -->
<div class="modal fade rounded" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0 bg-transparent">
                <button type="button" class="close" style="margin-right: 6px" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe id="showVideo" src="#"
                            style="border: none; position: absolute; top: 0; left: 0; height: 100%; width: 100%;"
                            allow="accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;"
                            allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end of videoModal -->

<!-- strat scroll to top -->
<a onclick="window.scrollTo(0, 0)" class="btn btn-primary scroll-to-top-btn smooth-scroll position-fixed">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
        <path id="Layer" fill="currentColor"
              d="M7.2 19.2L15.2 11.2C15.68 10.71 16.43 10.68 16.96 11.08L17.08 11.2L25.08 19.2L23.2 21.08L16.14 14.02L9.08 21.08L7.2 19.2Z"/>
    </svg>
</a>
<!-- end scroll to top -->

<!-- Plugins Needed for the Project -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/aos/aos.js"></script>

<!-- Main Script -->
<script src="js/s.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"911d5a398ed9f41d","version":"2025.1.0","r":1,"serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"7ccc1ee03b524e1ebd1e72da1445bcd8","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from www.sara777.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Feb 2025 13:20:12 GMT -->
</html>